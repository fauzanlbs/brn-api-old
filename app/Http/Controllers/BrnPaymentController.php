<?php

namespace App\Http\Controllers;

use App\Models\BrnPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Resources\BrnPaymentResource;
use Illuminate\Support\Facades\DB;


/**
 * @group Keuangan
 */
class BrnPaymentController extends Controller
{
    /**
     * Mendapatkan semua data payment.
     *
     * @queryParam date string tgl mulai|selesai filter, filter data berdasarkan tgl. Example: 1-12-2021|1-1-2022
     * @queryParam month integer filter berdarkan bulan. Example: 12
     * @queryParam year integer filter berdarkan tahun, jika bulan diisi, maka default tahun sekarang. Example: 2022
    //  * @queryParam korda integer filter berdarkan korda. Example: 12
    //  * @queryParam korwil integer filter berdarkan korwil. Example: 12
     * @queryParam source string filter berdarkan sumber pemasukan, isi dengan registration, extention, regext, olshop, donation. Example: registration
     * @queryParam groupby string
     * @queryParam sortby string
     * @queryParam sort string asc atau desc
     * @queryParam aggregat int isi dengan 1 atau 0 untuk mngambil data agregat saja
     * 
     * @param Request $request
     * @return BrnPaymentResource
     *
     */
    public function index(Request $request)
    {
        $date = $request->query('date');
        $month = $request->query('month');
        $year = $request->query('year');
        // $korda = $request->query('korda');
        // $korwil = $request->query('korwil');
        $sources = $request->query('source');
        // $detail = $request->query('with')
        $group = $request->query('groupby');
        $sortBy = $request->query('sortby');
        $sort = $request->query('sort');
        if($group == null){
            $group = 'id';
        }
        if($sortBy == null){
            $sortBy = 'created_at';
        }
        if($sort == null){
            $sort = 'ASC';
        }

        // print_r($date);exit;

        if($year == null){
            $year = date('Y');
        }

        $res = [];

        $data = QueryBuilder::for(BrnPayment::class)
                // ->select('amount', 'transaction_code')
                ->when($date, function($q, $date){
                    $date = explode('|', $date);
                    return $q->where(
                        'created_at', '>=', Carbon::parse(strtotime($date[0])))->where('created_at', '<', Carbon::parse(strtotime($date[1])));
                })
                ->when($month, function($q, $month){
                    return $q->whereMonth('created_at', $month);
                })->when($year, function($q, $year){
                    return $q->whereYear('created_at', $year);
                })->when($sources, function($q, $sources){
                    // return $q->whereYear('created_at', $year);
                    if(!is_array($sources)){
                        return $q->where('transaction_code', $sources);
                    }else if(is_array($sources)){
                        foreach($sources as $i => $sc){
                            if($i == 0){
                                $q = $q->where('transaction_code', $sc);
                            }else{
                                $q = $q->orWhere('transaction_code', $sc);
                            }
                        }
                        return $q;
                    }
                })->when($group, function($q, $group){
                    // $q = $q->groupBy($group);
                    if($group == 'month'){
                        $q = $q->addSelect(DB::raw('month(created_at) as month, sum(amount) as amount'));
                        $q = $q->groupBy(DB::raw('month'));
                    }else if($group == 'year'){
                        $q = $q->addSelect(DB::raw('year(created_at) as year, sum(amount) as amount'));
                        $q = $q->groupBy(DB::raw('year'));
                    }else if($group == 'source'){
                        $q = $q->addSelect(DB::raw('transaction_code, sum(amount) as amount'));
                        $q = $q->groupBy('transaction_code');
                    }else{
                        $q = $q->addSelect('id')->groupBy($group);
                    }
                    return $q;
                })
                ->jsonPaginate();




                // $data = $data->allowedFilters(['korda_id', 'korwil_id'])->jsonPaginate();
        // if(!is_array($sources)){
        //     switch ($sources) {
        //         case 'registration':
        //             $data = $data->sourceReg();
        //             break;
        //         case 'extension':
        //             $data = $data->sourceExt();
        //             break;
                
        //         default:
        //             # code...
        //             break;
        //     }
        // }

        return BrnPaymentResource::collection($data);
        // return json_encode($data);
        
    }
}
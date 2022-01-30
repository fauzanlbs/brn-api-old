<?php

namespace App\Http\Controllers;

use App\Models\BrnPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Keuangan
 */
class BrnPaymentController extends Controller
{
    /**
     * Mendapatkan semua data payment.
     *
     * @queryParam dateStart string tgl mulai filter, filter data berdasarkan tgl. Example: 12-12-2022
     * @queryParam dateEnd string tgl ahir filter, filter data berdasarkan tgl. Example: 12-12-2022
     * @queryParam month integer filter berdarkan bulan. Example: 12
     * @queryParam year integer filter berdarkan tahun, jika bulan diisi, maka default tahun sekarang. Example: 2022
     * @queryParam korda integer filter berdarkan korda. Example: 12
     * @queryParam korwil integer filter berdarkan korwil. Example: 12
     * @queryParam source string filter berdarkan sumber pemasukan, isi dengan registration, extention, regext, olshop, donation. Example: registration
     * @queryParam detail integer ambil data dengan detail nya
     * 
     * @param Request $request
     * @return json
     *
     */
    public function index(Request $request)
    {
        $dateStart = $request->query('dateStart');
        $dateEnd = $request->query('dateEnd');
        $month = $request->query('month');
        $year = $request->query('year');
        $korda = $request->query('korda');
        $korwil = $request->query('korwil');
        $sources = $request->query('source');

        // print_r($korda);exit;

        if($year == null){
            $year = date('Y');
        }
        $date = array(
            'start' => $dateStart,
            'end' => $dateEnd
        );

        $res = [];

        $data = QueryBuilder::for(BrnPayment::class)
                ->when($dateStart, function($q, $date){
                    return $q->whereBetween(
                        'created_at', 
                        array(Carbon::parse(strtotime($date['start'])), Carbon::parse(strtotime($date['end']))));
                })
                ->when($month, function($q, $month){
                    return $q->whereMonth('created_at', $month);
                })->when($year, function($q, $year){
                    return $q->whereYear('created_at', $year);
                })->when($korda, function($q, $korda){
                    if(!is_array($korda)){
                        return $q->whereYear('korda_id', $korda);
                    }
                    
                })->when($korwil, function($q, $korwil){
                    if(!is_array($korwil)){
                        return $q->whereYear('korwil_id', $korwil);
                    }
                    
                })->jsonPaginate();

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

        return json_encode($data);
        
    }
}
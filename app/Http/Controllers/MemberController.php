<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemberResource;
use App\Models\User;
use App\Traits\UrlParamCheck;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Spatie\QueryBuilder\AllowedFilter;
use App\Filters\MemberQuery;

/**
 * @group Anggota
 */
class MemberController extends Controller
{
    use UrlParamCheck;


    /**
     * Mendapatkan list data anggota.
     *
     * @queryParam include string Include akan memuat data dengan relasi, relasi yang tersedia: <br> #1 <b>roles</b> : Mendapatkan informasi wewenang pengguna <br> #2 <b>addresses</b> : Alamat yang didaftarkan. <br> #3 <b>personal-information</b> : Informasi pribadi. Example: addresses,personal-information
     * @queryParam filter[name] string Penyortiran berdasarkan nama. Example: Arya Anggara
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam filter[roles] string role group member misal korda, korwil, member, admin
     * @queryParam guest string Penyortiran berdasarkan pengguna yang belum menjadi anggota brn. Example: true
     * @queryParam status string Penyortiran berdasarkan status pengguna expired|registration|approved Example: approved
     *
     * @param Request $request
     * @return MemberResource
     *
     * @responseFile storage/responses/member-resource.response.json
     */
    public function getMembers(Request $request)
    {
        $allowedIncludes = ['addresses', 'personal-information', 'roles'];
        $includes = [];
        if ($request->query('include')) {
            $includes = $this->requestParamCheckAndConvert('include', $allowedIncludes, $request->query('include'), true);
            if (!is_array($includes)) return $includes;
        }
        
        $adr = array_search('addresses', $includes);
        // $roles = ['member'];
        // if ($request->query('roles')) {
        //     array_push($roles, $request->query('roles'));
        // }

        // $users = User::role($roles)->when($includes ?? false, function ($query, $includes) {
        //     return $query->with($includes);
        // })
        //     ->withSum('pointsRelation', 'points')
        //     ->jsonPaginate();

        $guest = filter_var($request->query('guest'), FILTER_VALIDATE_BOOLEAN);
        $search = $request->query('search');
        $status = $request->filled('status') ? $request->get('status') : null;
        $roles = $request->query('role');

        $allowed = [
            'created_at', 'name'
        ];

        $users = QueryBuilder::for(User::class)->addSelect('regions.region, areas.area, subdistrict.subdistrict_name')
            ->with(['roles'])
            ->withSum('pointsRelation', 'points')
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->when($guest == true, function ($q, $search) {
                return $q->whereDoesntHave('roles');
            })
            ->when($guest == false, function ($q, $search) {
                return $q->whereHas('roles');
            })
            ->when($status !== null, function($q, $search){
                $status = request()->filled('status') ? request()->get('status') : null;
                return $q->where('status', $status);
            })->when(in_array('addresses', $includes), function($q, $val){
                return $q->join('regions', 'addresses.state', '=', 'regions.id')->join('areas', 'addresses.city', '=', 'areas.id')->join('subdistrict', 'addresses.street', '=', 'subdistrict.id');
            })
            ->allowedFilters(array_merge($allowed, [AllowedFilter::custom('roles', new MemberQuery)]))
            ->allowedSorts($allowed)
            ->allowedIncludes($allowedIncludes)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return  MemberResource::collection($users);
    }


    /**
     * Mendapatkan detail data anggota.
     *
     * @urlParam user int required valid id user. Example: 1
     *
     * @param User $user
     * @return MemberResource
     *
     * @responseFile storage/responses/single-member-resource.response.json
     */
    public function memberDetail(User $user)
    {
        $user->load(['addresses', 'personalInformation', 'roles']);
        $user->loadSum('pointsRelation', 'points');


        return new MemberResource($user);
    }
}

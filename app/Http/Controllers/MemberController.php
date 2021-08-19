<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemberResource;
use App\Models\User;
use App\Traits\UrlParamCheck;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

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
     * @queryParam roles string Filter data berdasar kan role
     * @queryParam filter[name] string Penyortiran berdasarkan nama. Example: Arya Anggara
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam guest string Penyortiran berdasarkan pengguna yang belum menjadi anggota brn. Example: true
     *
     * @param Request $request
     * @return MemberResource
     *
     * @responseFile storage/responses/member-resource.response.json
     */
    public function getMembers(Request $request)
    {
        // $allowedIncludes = ['addresses', 'personal-information', 'roles'];

        // if ($request->query('include')) {
        //     $includes = $this->requestParamCheckAndConvert('include', $allowedIncludes, $request->query('include'), true);
        //     if (!is_array($includes)) return $includes;
        // }

        // $roles = ['member'];
        // if ($request->query('roles')) {
        //     array_push($roles, $request->query('roles'));
        // }

        // $users = User::role($roles)->when($includes ?? false, function ($query, $includes) {
        //     return $query->with($includes);
        // })
        //     ->withSum('pointsRelation', 'points')
        //     ->jsonPaginate();

        $guest = $request->query('guest');

        $search = $request->query('search');

        $allowed = [
            'created_at', 'addresses', 'personal-information', 'roles', 'name',
        ];

        $users = QueryBuilder::for(User::class)
            ->withSum('pointsRelation', 'points')
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->when($guest == true, function ($q, $search) {
                return $q->whereDoesntHave('roles');
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->allowedIncludes($allowed)
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
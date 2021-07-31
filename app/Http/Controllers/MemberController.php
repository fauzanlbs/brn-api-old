<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemberResource;
use App\Models\User;
use App\Traits\UrlParamCheck;
use Illuminate\Http\Request;

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
     *
     * @param Request $request
     * @return MemberResource
     *
     * @responseFile storage/responses/member-resource.response.json
     */
    public function getMembers(Request $request)
    {
        $allowedIncludes = ['addresses', 'personal-information', 'roles'];

        if ($request->query('include')) {
            $includes = $this->requestParamCheckAndConvert('include', $allowedIncludes, $request->query('include'), true);
            if (!is_array($includes)) return $includes;
        }

        $roles = ['member'];
        if ($request->query('roles')) {
            array_push($roles, $request->query('roles'));
        }

        $users = User::role($roles)->when($includes ?? false, function ($query, $includes) {
            return $query->with($includes);
        })
            ->withSum('pointsRelation', 'points')
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

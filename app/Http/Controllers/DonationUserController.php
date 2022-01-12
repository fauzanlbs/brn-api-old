<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationUser;
use App\Models\Donation;
use Auth;

/**
 * @group DonasiUser
 */
class DonationUserController extends Controller
{ 
     /**
     * Melihat data user dalam donasi.
     *
     * @queryParam id integer id numeric dari donasi required.
     *
     * @param Request $request
     * @return DonationResource
     *
     * 
     */
    public function getDonationUser(Request $request)
    {
        $id = $request->query('id');
        $result = null;
        if ($id) {
            $donationTitle = Donation::where('id', $id)->pluck('title')->first();
            $data[0]['donation_name'] = $donationTitle;
            $data[0]['donation_users'] = DonationUser::where('donation_id', $id)->get();
            if (count($data) > 0) {
                $result['state'] = "found";
                $result['data'] = $data;
            } else {
                $result['state'] = "not_found";
                $result['data'] = null;
            }
        } else {
            $dataUsers = DonationUser::select('donation_id')->groupBy('donation_id')->pluck('donation_id');
            for ($i = 0; $i < count($dataUsers); $i++) {
                $donationTitle = Donation::where('id', $dataUsers[$i])->pluck('title')->first();
                $data[$i]['donation_name'] = $donationTitle;
                $data[$i]['donation_users'] = DonationUser::where('donation_id', $dataUsers[$i])->get();
            }
            if (count($data) > 0) {
                $result['state'] = "found";
                $result['data'] = $data;
            } else {
                $result['state'] = "no_data";
                $result['data'] = null;
            }
        }
        return $result;
    }

    /**
     * Melakukan donasi.
     *
     * @queryParam donation_id integer id numeric dari donasi required.
     *
     * @param Request $request
     * @return DonationResource
     *
     * 
     */
    public function addDonationUser(Request $request)
    {
        $donation = new DonationUser();
        $donation->donation_id = $request->donation_id;
        $donation->nominal = $request->nominal;
        $donation->name = Auth::user()->name;
        if ($donation->save()) {


            
            $user = Auth::user();

            $params = array(
                'transaction_details' => array(
                    'order_id' => 'brn.user.'. $user->id. '.'. strtotime($user->created_at),
                    'gross_amount' => $donation->nominal,
                ),
                'item_details' => [
                    [
                        "id" => $user->id,
                        "price" => $donation->nominal,
                        "quantity" => 1,
                        "name" => "Donasi User - ". $user->name,
                        "brand" => "BRN",
                    ]
                ],
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            
            $result['state'] = 'success';
            $result['snap_token'] = $snapToken;
            $result['transaction_detail'] = $params;
        } else {
            $result['state'] = 'failed';
        }

        return $result;
    }
}

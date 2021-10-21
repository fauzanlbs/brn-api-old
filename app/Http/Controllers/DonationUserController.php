<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationUser;
use App\Models\Donation;
use Auth;

class DonationUserController extends Controller
{ 
    public function getDonationUser(Request $request)
    {
        $id = $request->query('id');
        $result;
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
            for ($i=0; $i < count($dataUsers); $i++) { 
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

    public function addDonationUser(Request $request)
    {
        $donation = new DonationUser();
        $donation->donation_id = $request->donation_id;
        $donation->nominal = $request->amount;
        $donation->name = Auth::user()->name;
        if ($donation->save()) {
            $result['state'] = 'success';
        } else {
            $result['state'] = 'failed';
        }
        
        return $result;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    protected $app_settings_keyfor = 'app';
    protected $all_settings_keyfor = 'all';
    /**
     * Mendapatkan list setting untuk app.
     * @return String JSON
     *
     * @responseFile storage/responses/sponsor-resource.response.json
     */
    public function index()
    {

        $data = DB::table('settings')
                ->where('setting_for', $this->app_settings_keyfor)
                ->orWhere('setting_for', $this->all_settings_keyfor)->get();

        return json_encode($data);exit;
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->upsert([[
            'setting_key' => 'app_name',
            'setting_value' => 'BRN APP',
            'setting_for' => 'all',
            'setting_type' => 'string'
        ],[
            'setting_key' => 'admin_title',
            'setting_value' => 'BRN ADMIN',
            'setting_for' => 'admin',
            'setting_type' => 'string'
        ],[
            'setting_key' => 'disable_social_login',
            'setting_value' => 'false',
            'setting_for' => 'app',
            'setting_type' => 'boolean'
        ],[
            'setting_key' => 'register_membership_cost',
            'setting_value' => '2000000',
            'setting_for' => 'all',
            'setting_type' => 'numeric'
        ],[
            'setting_key' => 'extention_membership_cost',
            'setting_value' => '150000',
            'setting_for' => 'all',
            'setting_type' => 'numeric'
        ]
    ], ['setting_key', 'id']);
    }
}

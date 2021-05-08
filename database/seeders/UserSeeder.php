<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Arya Anggara',
            'email' => 'aryaanggara.dev@gmail.com',
            'password' => Hash::make('aryaanggara.dev@gmail.com'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
        $user->assignRole('user');

        // token NQZinBv5k61Yva94F04HIe6PjodTItoXp4jjKy2k
        DB::table('personal_access_tokens')->insert([
            'tokenable_type' => 'App\Models\User',
            'tokenable_id' => 1,
            'name' => 'authToken',
            'token' => '09ece6c644becbc37cff755df6372520fd055db31b18772927a1ad7685bbbbdc',
            'abilities' => '["*"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

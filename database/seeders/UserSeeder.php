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
        $admin->assignRole('member');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'Korda Role',
            'email' => 'korda@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
        $user->assignRole('korda');

        $user = User::create([
            'name' => 'Korwil Role',
            'email' => 'korwil@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
        $user->assignRole('korwil');

        $user = User::create([
            'name' => 'Member Role',
            'email' => 'member@gmail.com',
            'password' => Hash::make('user@gmail.com'),
        ]);
        $user->assignRole('member');

        $user = User::create([
            'name' => 'Member diklat level 1 Role',
            'email' => 'member@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'status_level_diklat' => 1,
        ]);
        $user->assignRole('member');
        $user = User::create([
            'name' => 'Member diklat level 2 Role',
            'email' => 'member@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'status_level_diklat' => 2,
        ]);
        $user->assignRole('member');
        $user = User::create([
            'name' => 'Member diklat level 3 Role',
            'email' => 'member@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'status_level_diklat' => 3,
        ]);
        $user->assignRole('member');

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

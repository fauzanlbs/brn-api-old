<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        // admin
        User::create([
            'name' => 'Arya Anggara',
            'email' => 'aryaanggara.dev@gmail.com',
            'password' => Hash::make('aryaanggara.dev@gmail.com'),
        ]);
    }
}

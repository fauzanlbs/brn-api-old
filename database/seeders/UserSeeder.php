<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\User;
use App\Royalty\Actions\RegisterPoint;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

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
            'password' => Hash::make('korda@gmail.com'),
        ]);
        $user->assignRole('korda');

        $user = User::create([
            'name' => 'Korwil Role',
            'email' => 'korwil@gmail.com',
            'password' => Hash::make('korwil@gmail.com'),
        ]);
        $user->assignRole('korwil');

        $user = User::create([
            'name' => 'Member Role',
            'email' => 'member@gmail.com',
            'password' => Hash::make('member@gmail.com'),
        ]);
        $user->assignRole('member');

        $user = User::create([
            'name' => 'Member diklat level 1 Role',
            'email' => 'member1@gmail.com',
            'password' => Hash::make('member1@gmail.com'),
            'status_level_diklat' => 1,
        ]);
        $user->assignRole('member');
        $user = User::create([
            'name' => 'Member diklat level 2 Role',
            'email' => 'member2@gmail.com',
            'password' => Hash::make('member2@gmail.com'),
            'status_level_diklat' => 2,
        ]);
        $user->assignRole('member');
        $user = User::create([
            'name' => 'Member diklat level 3 Role',
            'email' => 'member3@gmail.com',
            'password' => Hash::make('member3@gmail.com'),
            'status_level_diklat' => 3,
        ]);
        $user->assignRole('member');


        $user = User::create([
            'name' => 'Member have a car',
            'email' => 'membercar@gmail.com',
            'password' => Hash::make('membercar@gmail.com'),
        ]);
        $user->assignRole('member');
        $faker  = Faker::create('id_ID');
        $car = new Car();
        $car->user_id = 1;
        $pn = strtoupper($faker->lexify('?')) . ' ' . $faker->numberBetween(1234, 9999) . ' ' . strtoupper($faker->lexify('??'));
        $car->status = $faker->randomElement(array('active', 'lost'));
        $car->is_approved = $faker->boolean();
        $car->police_number = $pn;
        $car->year = strval($faker->date('Y', now()));
        $car->is_automatic = $faker->boolean();
        $car->capacity = $faker->numberBetween(2, 8);
        $car->machine_number = $faker->numberBetween(2, 8);
        $car->chassis_number = $faker->numberBetween(2, 8);
        $car->save();

        for ($j = 1; $j < 3; $j++) {
            $cover = file_get_contents('https://via.placeholder.com/200.png?text=Gambar' . urlencode(' ' . $j . ' ' . $pn));
            $filename = rand() . '-' . str_replace(' ', '', $pn) . '.png';
            Storage::disk('public')->put('/cars/' . $filename, $cover);

            $ci = new CarImage();
            $ci->image = '/cars/' . $filename;

            $car->carImages()->save($ci);
        }


        $user = User::create([
            'name' => 'Member have a 10 point',
            'email' => 'memberpoint10@gmail.com',
            'password' => Hash::make('memberpoint10@gmail.com'),
        ]);
        $user->givePoints(new RegisterPoint);

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

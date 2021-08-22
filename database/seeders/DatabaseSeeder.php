<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $file = new Filesystem;
        $file->cleanDirectory(storage_path('app/public'));


        $this->call([
            OnboardingSeeder::class,
            AboutSeeder::class,
            PointSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            CourseSeeder::class,
            CarColorSeeder::class,
            CarTypeSeeder::class,
            CarMakeSeeder::class,
            CarModelSeeder::class,
            CarFuelSeeder::class,
            CarSeeder::class,
            DonationSeeder::class,
            RegionSeeder::class,
            AreaSeeder::class,
            AgendaSeeder::class,
            CommentSeeder::class,
            PerpetratorSeeder::class,
        ]);
    }
}

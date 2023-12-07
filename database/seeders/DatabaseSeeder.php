<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seed articles table
        $this->call([
            RolesAndPermissionsSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TextSeeder::class,
            NewsSeeder::class,
            StandartSeeder::class,
        ]);
    }
}

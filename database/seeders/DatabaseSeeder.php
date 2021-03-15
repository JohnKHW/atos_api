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
        $this->call(
            [
                RegionSeeder::class,
                CountrySeeder::class,
                UserSeeder::class,
                FoodTypeSeeder::class,
                FoodSeed::class,
                SupermarketSeeder::class,
            ]
        );
    }
}

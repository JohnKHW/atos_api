<?php

namespace Database\Seeders;

use App\Models\Supermarket;
use Illuminate\Database\Seeder;

class SupermarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data[] = [
            'name' => 'Welcome',
            'location' => 'Yuen Long',
            'country_id' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Donki',
            'location' => 'Tsau Wan',
            'country_id' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 2);
        foreach ($chunks as $chunk) {
            Supermarket::insert($chunk);
        }
    }
}

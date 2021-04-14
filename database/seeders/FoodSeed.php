<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeed extends Seeder
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
            'name' => 'Apple',
            'country_id' => 1,
            'point_id' => 3,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Banana',
            'country_id' => 1,
            'point_id' => 3,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Beef',
            'country_id' => 2,
            'point_id' => 4,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 7);
        foreach ($chunks as $chunk) {
            Food::insert($chunk);
        }
    }
}

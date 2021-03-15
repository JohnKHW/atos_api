<?php

namespace Database\Seeders;

use App\Models\FoodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTypeSeeder extends Seeder
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
            'name' => 'Fruit',
            'net_pts' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Vegetable',
            'net_pts' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Meat',
            'net_pts' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 7);
        foreach ($chunks as $chunk) {
            FoodType::insert($chunk);
        }
    }
}

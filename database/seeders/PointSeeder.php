<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
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
            'name' => 'Region',
            'description' => 'Same Region',
            'mark' => 1,
            'selectable' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Country',
            'description' => 'Same Country',
            'mark' => 2,
            'selectable' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fruit',
            'description' => 'Fruit Food Type',
            'mark' => 2,
            'selectable' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Vegetable',
            'description' => 'Vegetable Food Type',
            'mark' => 2,
            'selectable' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Meat',
            'description' => 'Vegetable Food Type',
            'mark' => 1,
            'selectable' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 5);
        foreach ($chunks as $chunk) {
            Point::insert($chunk);
        }
    }
}

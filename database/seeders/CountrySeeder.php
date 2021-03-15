<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
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
            'name' => 'Hong Kong',
            'flag_path' => './',
            'region_id' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Japan',
            'flag_path' => './',
            'region_id' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'America',
            'flag_path' => './',
            'region_id' => 5,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 5);
        foreach ($chunks as $chunk) {
            Country::insert($chunk);
        }
    }
}

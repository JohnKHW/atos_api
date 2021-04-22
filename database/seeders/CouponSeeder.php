<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
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
            'name' => 'Coupon 1',
            'points_cost' => 10,
            'offer_price' => 1,
            'description' => 'This is Coupon 1',
            'available' => true,
            'allotted_time' => 12,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Coupon 2',
            'points_cost' => 20,
            'offer_price' => 4,
            'description' => 'This is Coupon 2',
            'available' => true,
            'allotted_time' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Coupon 3',
            'points_cost' => 20,
            'offer_price' => 4,
            'description' => 'This is Coupon 3',
            'available' => false,
            'allotted_time' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 2);
        foreach ($chunks as $chunk) {
            Coupon::insert($chunk);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'name' => 'Demo',
            'username' => 'demo',
            'email' => 'demo@demo.com',
            'password' => Hash::make('demo'),
            'role_id' => 1,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('admin'),
            'role_id' => 2,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 2);
        foreach ($chunks as $chunk) {
            User::insert($chunk);
        }
    }
}

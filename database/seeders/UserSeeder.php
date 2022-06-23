<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=5; $i++) {
            $user = [
                'room' => 1353,
                'name' => 'user'. $i,
                'img'  => 'img'. $i . 'jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('users')->insert($user);

        }

        for ($i = 6; $i <=10; $i++) {
            $user_neo = [
                'room' => 3543,
                'name' => 'user'. $i,
                'img'  => 'img'. $i . 'jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('users')->insert($user_neo);

        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=3; $i++) {
            $log1 = [
                'room_id' => 1353,
                'winner' => 1,
                'loser'  => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('logs')->insert($log1);
        }

        for ($i = 1; $i <=3; $i++) {
            $log2 = [
                'room_id' => 1353,
                'winner' => 4,
                'loser'  => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('logs')->insert($log2);
        }

        for ($i = 1; $i <=3; $i++) {
            $log3 = [
                'room_id' => 3543,
                'winner' => 6,
                'loser'  => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('logs')->insert($log3);
        }

        for ($i = 1; $i <=2; $i++) {
            $log4 = [
                'room_id' => 3543,
                'winner' => 10,
                'loser'  => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('logs')->insert($log4);
        }
    }
}

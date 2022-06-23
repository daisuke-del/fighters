<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;


class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = [
            'room_id' => '1353',
            'password' => '1111',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        \Illuminate\Support\Facades\DB::table('rooms')->insert($room);

        $room2 = [
            'room_id' => '3543',
            'password' => '1111',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        \Illuminate\Support\Facades\DB::table('rooms')->insert($room2);


        Room::factory()->count(10)->create();
    }
}

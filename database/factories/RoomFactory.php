<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_id' => str_pad(rand(0,9999),4,0, STR_PAD_LEFT),
            'password' => str_pad(rand(0,9999),4,0, STR_PAD_LEFT),
        ];
    }
}

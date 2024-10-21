<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->numberBetween(1, User::all()->count()),
            'date' => fake()->dateTimeBetween(),
            'status' => 'checking_out',
            'room_id' => Room::factory(),
            'check_in' => fake()->dateTimeBetween(),
            'check_out' => fake()->dateTimeBetween(),
            'notes' => fake()->text(600)
        ];
    }
}

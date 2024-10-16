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
    public function definition(): array
    {
        return [
            'type' => fake()->randomElements(['Single Bed', 'Double Bed', 'Double Superior', 'Suite'])[0],
            'floor' => 'Floor ' . fake()->randomElements(['A', 'B', 'C', 'D'])[0] . '-' . fake()->randomDigit(),
            'number' => fake()->numberBetween(0, 100),
            'images' => './assets/rooms'. fake()->numberBetween(1,6) .'.png',
            'price' => fake()->numberBetween(4000, 50000),
            'offer' => fake()->numberBetween(0, 80),
            'status' => 'available',
            'description' => fake()->text(600)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoomAmenity;
use App\Models\Room;
use App\Models\Amenity;

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
            'images' => 'http://ec2-18-171-148-183.eu-west-2.compute.amazonaws.com/assets/rooms'. fake()->numberBetween(1,6) .'.png',
            'price' => fake()->numberBetween(4000, 50000),
            'offer' => fake()->numberBetween(0, 80),
            'status' => fake()->randomElements(['booked', 'maintenance', 'available'])[0],
            'description' => fake()->text(600)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Room $room) {

            $randomEntries = Amenity::inRandomOrder()->take(fake()->numberBetween(1, Amenity::all()->count()))->get();

            foreach($randomEntries as $amenity):
                RoomAmenity::factory()->create(['room_id' => $room->id, 'amenity_id' => $amenity->id]);
            endforeach;
        });
    }
}

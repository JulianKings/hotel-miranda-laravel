<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Amenity;
use App\Models\Room;
use App\Models\Contact;
use App\Models\Booking;
use App\Models\RoomAmenity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Contact::factory(30)->create();

        User::factory()->primaryTestUser()->create();
        User::factory()->secondaryTestUser()->create();
        User::factory()->tertiaryTestUser()->create();

        $amenities = ['Air conditioner', 'Breakfast', 'Cleaning', 'Grocery', 'Shop near', '24/7 Online Support', 'Smart Security', 'High speed WiFi', 'Kitchen', 'Shower', 'Single bed', 'Towels', 'Strong locker', 'Expert Team'];

        $amenityId = 1;
        foreach ($amenities as $amenity):
            Amenity::factory()->create([
                'name' => $amenity,
                'image' => 'http://ec2-18-171-148-183.eu-west-2.compute.amazonaws.com/assets/amenities' . $amenityId++ . '.png'
            ]);
        endforeach;

        Room::factory(50)->has(Booking::factory()->count(fake()->numberBetween(5, 15))
            ->state(function (array $attributes, Room $room) {
                return ['check_out' => ($room->status == 'booked') ? fake()->dateTimeBetween(now(), '+5 months') : fake()->dateTimeBetween()];
            })
        )->create();

    }
}

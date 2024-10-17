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
        Room::factory(30)->create();
        Contact::factory(30)->create();

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com'
        ]);

        User::factory()->create([
            'name' => 'test2',
            'email' => 'julli123@hotmail.es'
        ]);

        Booking::factory(30)->create();

        $amenities = ['Air conditioner', 'Breakfast', 'Cleaning', 'Grocery', 'Shop near', '24/7 Online Support', 'Smart Security', 'High speed WiFi', 'Kitchen', 'Shower', 'Single bed', 'Towels', 'Strong locker', 'Expert Team'];

        $amenityId = 1;
        foreach ($amenities as $amenity):
            Amenity::factory()->create([
                'name' => $amenity,
                'image' => './assets/amenities' . $amenityId++ . '.png'
            ]);
        endforeach;

        foreach(Room::all() as $room):
            RoomAmenity::factory(5)->create([
                'room_id' => $room->id
            ]);
        endforeach;
    }
}

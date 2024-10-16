<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Amenity;
use App\Models\Room;
use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $amenities = ['Air conditioner', 'Breakfast', 'Cleaning', 'Grocery', 'Shop near', '24/7 Online Support', 'Smart Security', 'High speed WiFi', 'Kitchen', 'Shower', 'Single bed', 'Towels', 'Strong locker', 'Expert Team'];

        foreach ($amenities as $amenity):
            Amenity::factory()->create([
                'name' => $amenity
            ]);
        endforeach;
    }
}

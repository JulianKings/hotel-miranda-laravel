<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PortalUser>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'mail' => fake()->unique()->safeEmail(),
            "full_name" => "Julian Reyes",
            "password" => '$2a$10$3ZaCp.V0lvHyqyle9aKfmOX2APUb960o1oX0EWFNFtX4/lyMCRkcG',
            "profile_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSwWsVwCB7k3J9sTCSX2C352hGm0cbuANvZw&s",
            "start" => now(),
            "description" => "Legacy Functionality Producer",
            "contact" => "311 093 5870",
            "status" => "active",
            "position" => "manager"
        ];
    }

    public function defaultDeveloper(): static
    {
        return $this->state(fn (array $attributes) => [
            "name" => "Developer",
            "full_name" => "Julian Reyes",
            "password" => '$2a$10$/QfwEmoOALQrmk8RGIoMYOkmel5NTQJ8MmQJPjgGAM/MR5JRkpng2',
            "mail" => "julianreyeslahoz@gmail.com",
            "profile_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSwWsVwCB7k3J9sTCSX2C352hGm0cbuANvZw&s",
            "start" => now(),
            "description" => "Legacy Functionality Producer",
            "contact" => "311 093 5870",
            "status" => "active",
            "position" => "manager"
        ]);
    }

    public function defaultAdmin(): static
    {
        return $this->state(fn (array $attributes) => [
            "name" => "admin",
            "full_name" => "Juana Dietrich",
            "password" => '$2a$10$A9NlYzY3NkTdx.m1KjK8PO5CfHxcGrz44MOWunlSQf9uinEj6VU9u',
            "mail" => "Juana67@yahoo.com",
            "profile_picture" => "./src/assets/profile2.png",
            "start" => now(),
            "description" => "Dynamic Tactics Specialist",
            "contact" => "685 231 8978",
            "status" => "inactive",
            "position" => "reception"
        ]);
    }

    public function defaultDuck(): static
    {
        return $this->state(fn (array $attributes) => [
            "name" => "Patoman",
            "full_name" => "Pato Duckensen",
            "password" => '$2a$10$gpti1uGOyy0Lli6vMM.W4uRgg6Y6nn8qttzwQ0s8Z.DKUmPwUwyJC',
            "mail" => "duck@duckerson.com",
            "profile_picture" => "./src/assets/profile.png",
            "start" => now(),
            "description" => "Duck Duckenson Dunken",
            "contact" => "123456789",
            "status" => "active",
            "position" => "manager"
        ]);
    }

    public function defaultTest(): static
    {
        return $this->state(fn (array $attributes) => [
            "name" => "test",
            "full_name" => "Julián Reyes",
            "password" => '$2a$10$3ZaCp.V0lvHyqyle9aKfmOX2APUb960o1oX0EWFNFtX4/lyMCRkcG',
            "mail" => "julli123@hotmail.es",
            "profile_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSwWsVwCB7k3J9sTCSX2C352hGm0cbuANvZw&s",
            "start" => now(),
            "description" => "testcito",
            "contact" => "684135340",
            "status" => "inactive",
            "position" => "manager"
        ]);
    }
}

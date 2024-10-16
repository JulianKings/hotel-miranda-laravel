<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => fake()->name(),
            'customer_mail' => fake()->freeEmail(),
            'customer_phone' => '+13567892101',
            'date' => fake()->dateTime(),
            'status' => fake()->randomElements(['active', 'archived'])[0],
            'subject' => fake()->text(60),
            'comment' => fake()->text(600)
        ];
    }
}

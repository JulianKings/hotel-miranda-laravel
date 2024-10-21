<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = 'test1234';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function primaryTestUser(): static
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'test',
            'email' => 'test@test.com'
        ]);
    }

    public function secondaryTestUser(): static
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'test2',
            'email' => 'julli123@hotmail.es'
        ]);
    }

    public function tertiaryTestUser(): static
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'test3',
            'email' => 'woah@test.com'
        ]);
    }
}

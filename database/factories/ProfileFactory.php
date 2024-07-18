<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gender' => fake()->numberBetween(0, 1),
            'birthed_at' => fake()->date(),
            'avatar_path' => fake()->imageUrl(),
            'is_active' => fake()->boolean(),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->lastName(),
            'third_name' => fake()->lastName(),
            'login' => fake()->unique()->userName(),
            'profileable_id' => fake()->numberBetween(1, 100),
            'profileable_type' => fake()->randomElement(['App\Models\User']),
        ];
    }
}

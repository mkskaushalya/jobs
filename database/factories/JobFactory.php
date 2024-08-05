<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle(),
            "description" => fake()->paragraph(),
            "salary" => fake()->numberBetween(20000, 100000),
            "location" => fake()->city(),
            "company_name" => fake()->company(),
            "closing_date" => fake()->dateTimeBetween("now", "+1 year")
            
        ];
    }
}

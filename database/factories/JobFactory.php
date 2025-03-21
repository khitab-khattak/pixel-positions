<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

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
            'employer_id' => Employer::factory(), // Generates a valid employer ID
            'title' => fake()->jobTitle(),
            'salary' => '$' . number_format(fake()->numberBetween(30000, 150000), 2),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}

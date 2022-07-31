<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OpportunityDetail>
 */
class OpportunityDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'benefits' => fake()->text(500),
            'application_process' => fake()->text(500),
            'further_queries' => fake()->text(500),
            'eligibilities' => fake()->text(500),
            'start_date' => fake()->dateTime(),
            'end_date' => fake()->dateTime(),
            'official_link' => fake()->url,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Lookups\Category;
use App\Models\Lookups\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opportunity>
 */
class OpportunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->sentence(15,true),
            'description' => fake()->text(500),
            'category_id' => Category::all()->random()->id,
            'country_id' => Country::all()->random()->id,
            'deadline' => fake()->dateTime(),
            'organizer' => fake()->company(),
            'created_by' => User::all()->random()->id,
        ];
    }
}

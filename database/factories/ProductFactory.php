<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id' => 1,
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 2, 50),
            'description' => fake()->realTextBetween($minNbChars = 100, $maxNbChars = 255, $indexSize = 2),
        ];
    }
}

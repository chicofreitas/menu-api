<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addon>
 */
class AddonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->realTextBetween($minNbChars = 100, $maxNbChars = 255, $indexSize = 2),
            'image_url' => 'https://icons.iconarchive.com/icons/michael/coke-pepsi/256/Coca-Cola-Can-icon.png',
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'slug' => fake()->name(),
            'social_name' => fake()->name(),
            'phone' => '86 99556-5249',//fake()->phoneNumber(),
            'address' => 'Rua Espírito Santo, 1216. Acarape. Teresina, PI.'
        ];
    }
}

<?php

namespace Database\Factories\Collection;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BirdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = fake()->boolean();
        return [
            'gender' => $gender,
            'lt' => fake()->numberBetween(1, 100),
            'cv' => fake()->numberBetween(1, 100),
            'wingspan' => fake()->numberBetween(1, 100),
            'weight' => fake()->numberBetween(1, 100),
            'observations' => fake()->text(100),
        ];
    }
}

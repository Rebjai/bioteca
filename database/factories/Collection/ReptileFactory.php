<?php

namespace Database\Factories\Collection;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReptileFactory extends Factory
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
            'gonads' => $gender ? fake()->numberBetween(1, 100) : null,
            'lt' => fake()->numberBetween(1, 100),
            'lc' => fake()->numberBetween(1, 100),
            'pt' => fake()->numberBetween(1, 100),
            'o' => fake()->numberBetween(1, 100),
            'ab' => fake()->numberBetween(1, 100),
            'weight' => fake()->numberBetween(1, 100),
            'skull' => fake()->boolean(),
            'skin' => fake()->boolean(),
            'body' => fake()->boolean(),
            'observations' => fake()->text(100),
        ];
    }
}

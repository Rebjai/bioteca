<?php

namespace Database\Factories\Collection;

use App\Models\Utils\SpecimenAge;
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
            'age' => fake()->randomElement(array_column(SpecimenAge::cases(), 'value')),
            'gender' => $gender,
            'total_length' => fake()->numberBetween(1, 100),
            'cv' => fake()->numberBetween(1, 100),
            'wingspan' => fake()->numberBetween(1, 100),
            'weight' => fake()->numberBetween(1, 100),
            'observations' => fake()->text(100),
        ];
    }
}

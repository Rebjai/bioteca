<?php

namespace Database\Factories\Collection;

use App\Models\Utils\SpecimenAge;
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
            'age' => fake()->randomElement(array_column(SpecimenAge::cases(), 'value')),
            'gender' => $gender,
            'gonads' => $gender ? fake()->numberBetween(1, 100) : null,
            'total_length' => fake()->numberBetween(1, 100),
            'tail_length' => fake()->numberBetween(1, 100),
            'snout_vent_length' => fake()->numberBetween(1, 100),
            'weight' => fake()->numberBetween(1, 100),
            'skull' => fake()->boolean(),
            'skin' => fake()->boolean(),
            'body' => fake()->boolean(),
            'observations' => fake()->text(100),
        ];
    }
}

<?php

namespace Database\Factories\Collection;

use App\Models\Utils\SpecimenAge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MammalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender=fake()->boolean();
        return [
            'age' => fake()->randomElement(array_column(SpecimenAge::cases(), 'value')),
            'gender' => $gender,
            'gonads_width' => $gender ? fake()->numberBetween(1, 100) : null,
            'gonads_height' => $gender ? fake()->numberBetween(1, 100) : null,
            'total_length' => fake()->numberBetween(1, 100),
            'tail_length' => fake()->numberBetween(1, 100),
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

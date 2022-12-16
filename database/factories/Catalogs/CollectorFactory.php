<?php

namespace Database\Factories\Catalogs;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assistant>
 */
class CollectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            // 'user_id' => $user->id,
            'name' => fake()->firstName(),
            'first_surname' => fake()->lastName(),
            'second_surname' => fake()->lastName(),
            // 'content' => fake()->paragraph(),
            //
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assistant>
 */
class AssistantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::factory()->create();

        return [
            'user_id' => $user->id,
            'name' => $user->name,
            'first_surname' => $user->first_surname,
            'second_surname' => $user->second_surname,
            // 'content' => fake()->paragraph(),
            //
        ];
    }
}

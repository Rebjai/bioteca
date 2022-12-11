<?php

namespace Database\Seeders;

use App\Models\Assistant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Jesús Rebollar',
                'email' => 'l17920350@voaxaca.tecnm.mx',
                'password' => Hash::make('pass1234'),
                'role' => 10,
            ]
        );
        User::create(
            [
                'name' => 'José Canseco',
                'email' => 'l17920314@voaxaca.tecnm.mx',
                'password' => Hash::make('pass1234'),
                'role' => 10,
            ]
        );
        User::create(
            [
                'name' => 'Rosa María Gómez Ugalde',
                'email' => 'user@voaxaca.tecnm.mx',
                'password' => Hash::make('pass1234'),
                'role' => 10,
            ]
        );
        Assistant::factory()->count(10)->create();
        // User::create(
        //     [
        //         'name' => 'asistente',
        //         'email' => 'assistant@voaxaca.tecnm.mx',
        //         'password' => Hash::make('pass1234'),
        //         'role' => 1,
        //     ]
        // );
        // Assistant::create(['user_id'=>4]);
    }
}

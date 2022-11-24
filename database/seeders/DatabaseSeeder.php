<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \DB::disableQueryLog();
        $this->call(
            [
                UserSeeder::class,
                BioKingdomSeeder::class,
                BioPhylumSeeder::class,
                BioClassSeeder::class,
                BioOrderSeeder::class,
                BioFamilySeeder::class,
                BioGenderSeeder::class,
                BioSpeciesSeeder::class,
            ]
        );

        // location seeder
        $this->call(
            [
                StateSeeder::class,
                MunicipalitySeeder::class,
                LocationSeeder::class,
                LocationSeeder2::class,
                LocationSeeder3::class,
                LocationSeeder4::class,
                LocationSeeder5::class,
            ]
        );
    }
}

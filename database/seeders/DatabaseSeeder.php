<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catalogs\BioClass;
use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioGender;
use App\Models\Catalogs\BioKingdom;
use App\Models\Catalogs\BioOrder;
use App\Models\Catalogs\BioPhylum;
use App\Models\Catalogs\BioSpecies;
use Database\Seeders\Collection\CollectionSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
        ini_set('memory_limit', '-1');

        // \DB::disableQueryLog();
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
        BioKingdom::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioPhylum::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioClass::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioOrder::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioOrder::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioFamily::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioGender::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );
        BioSpecies::query()->update(
            [
                'created_at' => (new Carbon()),
                'updated_at' => (new Carbon())
            ]
        );

        // location seeder
        $this->call(
            [
                StateSeeder::class,
                MunicipalitySeeder::class,
                LocationSeeder::class,
                // LocationSeeder2::class,
                // LocationSeeder3::class,
                // LocationSeeder4::class,
                // LocationSeeder5::class,
            ]
        );
        // specimen seeder
        $this->call(CollectionSeeder::class);
    }
}

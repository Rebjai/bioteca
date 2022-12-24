<?php

namespace Database\Factories\Collection;

use App\Models\Assistant;
use App\Models\Catalogs\BioClass;
use App\Models\Catalogs\BioPhylum;
use App\Models\Catalogs\BioSpecies;
use App\Models\Collection\Amphibian;
use App\Models\Collection\Bird;
use App\Models\Collection\Mammal;
use App\Models\Collection\Reptile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SpecimenFactory extends Factory
{
    // protected $measurable = $this->measurable();
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $measurables = [
            Mammal::class,
            // A::class,
        ];
        $creationDate = fake()->dateTimeBetween('-1 years');

        return [
            //
            'collection_date' => fake()->dateTimeBetween($creationDate)->format('d/m/Y'),
            'species_id' => function (array $attributes) {
                $collectionClass = BioClass::whereScientificName($this->getScientificName($attributes['measurable_type']))->first();
                return BioSpecies::whereHas(
                    'genus.family.order.class',
                    function ($q) use ($collectionClass) {
                        return $q->where('id', $collectionClass->id);
                    }
                )->get()->random()->id;
            },
            // 'species_id' => $species->id,
            'location_id' => mt_rand(1, 277330), //random location from the 277330 in db
            'collector_id' => mt_rand(1, 10),
            'assistant_id' => mt_rand(1, 10),
            // 'collector' => fake()->name(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'altitude' => 1000, //fake()->localCoordinates(),
            // 'measurable_id' => $measurable->id,
            // 'measurable_type' => $measurable_type,
            'created_at' => $creationDate,
        ];
    }
    /**
     * Get scientific_name of species class
     * 
     * @param int $str index
     * 
     * @return string
     */
    private function getScientificName(string $str)
    {
        // dd(Mammal::class, $str, $str == Mammal::class);
        if ($str == Mammal::class) {
            return "Mammalia";
        }
        if ($str == Reptile::class) {
            return "Reptilia";
        }
        if ($str == Bird::class) {
            return "Aves";
        }
        if ($str == Amphibian::class) {
            return "Amphibia";
        }
    }
    public function configure()
    {
        return $this->for(
            static::factoryForModel($this->measurable()),
            'measurable',
        );
    }

    public function measurable()
    {
        return $this->faker->randomElement(
            [
                Mammal::class,
                Bird::class,
                Amphibian::class,
                Reptile::class,
            ]
        );
    }
}

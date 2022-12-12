<?php

namespace Database\Factories\Specimen;

use App\Models\Assistant;
use App\Models\Catalogs\BioClass;
use App\Models\Catalogs\BioPhylum;
use App\Models\Catalogs\BioSpecies;
use App\Models\Specimen\MammalMeasure;
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
            MammalMeasure::class,
            // A::class,
        ];
        // dd('a');
        // $type = random_int(1, count($measurables));
        // $measurable_type = $measurables[$type - 1];
        // $collectionClass = BioClass::whereScientificName($this->getScientificName($type))->first();
        // $species = BioSpecies::whereHas(
        //     'genus.family.order.class',
        //     function ($q) use ($collectionClass) {
        //         return $q->where('id', $collectionClass->id);
        //     }
        // )->get()->random();
        // dd($species);
        // $species = BioSpecies::with('genus.family.order.class')->where('bio_class.scientific_name', $collectionClass->scientific_name)->get()->random();
        // $species = BioSpecies::has('genus.family.order.class', $collectionClass->id)->dd();
        // $measurable = Factory::factoryForModel($measurable_type)->create();
        $creationDate = fake()->dateTimeBetween('-1 years');

        return [
            //
            'collection_date' => fake()->dateTimeBetween($creationDate),
            'species_id' => function (array $attributes) {
                
                $collectionClass = BioClass::whereScientificName($this->getScientificName($attributes['measurable_type']))->first();
                // dd($collectionClass);
                return BioSpecies::whereHas(
                    'genus.family.order.class',
                    function ($q) use ($collectionClass) {
                        return $q->where('id', $collectionClass->id);
                    }
                )->get()->random()->id;
            },
            // 'species_id' => $species->id,
            'location_id' => mt_rand(1, 277330), //random location from the 277330 in db
            'assistant_id' => mt_rand(1, 10),
            'collector' => fake()->name(),
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
        // dd(MammalMeasure::class, $str, $str == MammalMeasure::class);
        if ($str == MammalMeasure::class) {
            return "Mammalia";
        }
        if ($str == 2) {
            return "Reptilia";
        }
        if ($str == 3) {
            return "Aves";
        }
        if ($str == 4) {
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
                MammalMeasure::class,
            ]
        );
    }
}

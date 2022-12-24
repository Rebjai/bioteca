<?php

namespace Database\Seeders\Specimen;

use App\Models\Catalogs\BioClass;
use App\Models\Collection\Mammal;
use App\Models\Collection\Specimen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class SpecimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measurables = [
            Mammal::class,
            // A::class,
        ];
        // dd('a');
        $type = random_int(1, count($measurables));
        $measurable_type = $measurables[$type - 1];
        
        // dd($measurable_type);
        // $species = BioSpecies::with('genus.family.order.class')->where('bio_class.scientific_name', $collectionClass->scientific_name)->get()->random();
        // $species = BioSpecies::has('genus.family.order.class', $collectionClass->id)->dd();
        $measurable = Factory::factoryForModel($measurable_type);
        // Specimen::factory()->count(50)->for(
        //     $measurable, 'measurable'
        // )->create();
        for ($i=0; $i < 100; $i++) { 
            Specimen::factory()->create();
            # code...
        }
    }
}

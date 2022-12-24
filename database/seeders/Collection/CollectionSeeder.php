<?php

namespace Database\Seeders\Collection;

use App\Models\Catalogs\BioClass;
use App\Models\Collection\Mammal;
use App\Models\Collection\Specimen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            Specimen::factory()->create();
        }
    }
}

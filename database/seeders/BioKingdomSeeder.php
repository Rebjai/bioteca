<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioKingdom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioKingdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BioKingdom::create([
            'id' => '1',
            'scientific_name' => 'Animalia',
            'common_name' => '',
            'status' => 'válido'
        ]);



        BioKingdom::create([
            'id' => '2',
            'scientific_name' => 'Fungi',
            'common_name' => 'Hongos',
            'status' => 'válido'
        ]);



        BioKingdom::create([
            'id' => '3',
            'scientific_name' => 'Plantae',
            'common_name' => '',
            'status' => 'válido'
        ]);



        BioKingdom::create([
            'id' => '4',
            'scientific_name' => 'Prokaryotae',
            'common_name' => '',
            'status' => 'válido'
        ]);



        BioKingdom::create([
            'id' => '5',
            'scientific_name' => 'Protoctista',
            'common_name' => '',
            'status' => 'válido'
        ]);
    }
}

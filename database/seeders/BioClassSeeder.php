<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioClass;
use App\Models\Catalogs\BioKingdom;
use App\Models\Catalogs\BioPhylum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BioClass::create([
            'id' => '1',
            'scientific_name' => 'Amphibia',
            'common_name' => 'Anfibios',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '2',
            'scientific_name' => 'Ascidiacea',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '3',
            'scientific_name' => 'Aves',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '4',
            'scientific_name' => 'Chondrichthyes',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '5',
            'scientific_name' => 'Leptocardii',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '6',
            'scientific_name' => 'Mammalia',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '7',
            'scientific_name' => 'Myxini',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '8',
            'scientific_name' => 'Osteichthyes',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '9',
            'scientific_name' => 'Petromyzontida',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '10',
            'scientific_name' => 'Reptilia',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);



        BioClass::create([
            'id' => '11',
            'scientific_name' => 'Thaliacea',
            'common_name' => '',
            'status' => 'válido',
            'bio_phylum_id' => BioPhylum::firstWhere('scientific_name', '=', 'Chordata')->id
        ]);
    }
}

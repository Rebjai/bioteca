<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioKingdom;
use App\Models\Catalogs\BioPhylum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioPhylumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BioPhylum::create([
            'id' => '1',
            'scientific_name' => 'Acanthocephala',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '2',
            'scientific_name' => 'Annelida',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '3',
            'scientific_name' => 'Archamoebae',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '4',
            'scientific_name' => 'Arthropoda',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '5',
            'scientific_name' => 'Brachiopoda',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '6',
            'scientific_name' => 'Bryozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '7',
            'scientific_name' => 'Chaetognatha',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '8',
            'scientific_name' => 'Chordata',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '9',
            'scientific_name' => 'Ciliophora',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '10',
            'scientific_name' => 'Cnidaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '11',
            'scientific_name' => 'Ctenophora',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '12',
            'scientific_name' => 'Echinodermata',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '13',
            'scientific_name' => 'Euglenozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '14',
            'scientific_name' => 'Metamonada',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '15',
            'scientific_name' => 'Mollusca',
            'common_name' => 'Moluscos',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '16',
            'scientific_name' => 'Myxozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '17',
            'scientific_name' => 'Onychophora',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '18',
            'scientific_name' => 'Opalozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '19',
            'scientific_name' => 'Parabasala',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '20',
            'scientific_name' => 'Percolozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Protoctista')->id
        ]);



        BioPhylum::create([
            'id' => '21',
            'scientific_name' => 'Phoronida',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '22',
            'scientific_name' => 'Placozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '23',
            'scientific_name' => 'Platyhelminthes',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '24',
            'scientific_name' => 'Porifera',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '25',
            'scientific_name' => 'Rotifera',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '26',
            'scientific_name' => 'Sipuncula',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);



        BioPhylum::create([
            'id' => '27',
            'scientific_name' => 'Tardigrada',
            'common_name' => '',
            'status' => 'válido',
            'bio_kingdom_id' => BioKingdom::firstWhere('scientific_name', '=', 'Animalia')->id
        ]);
    }
}

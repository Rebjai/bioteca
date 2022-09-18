<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioClass;
use App\Models\Catalogs\BioOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BioOrder::create([
            'id' => '1',
            'scientific_name' => 'Acanthuriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '2',
            'scientific_name' => 'Accipitriformes',
            'common_name' => '"Aguilillas, Allies, Eagles, Hawks, Kites, Milanos, Vultures, Zopilotes, Águilas"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '3',
            'scientific_name' => 'Acipenseriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '4',
            'scientific_name' => 'Albuliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '5',
            'scientific_name' => 'Alepocephaliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '6',
            'scientific_name' => 'Amphioxiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Leptocardii')->id
        ]);



        BioOrder::create([
            'id' => '7',
            'scientific_name' => 'Anabantiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '8',
            'scientific_name' => 'Anguilliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '9',
            'scientific_name' => 'Anseriformes',
            'common_name' => '"Cisnes, Ducks, Gansos, Geese, Patos, Swan"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '10',
            'scientific_name' => 'Anura',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Amphibia')->id
        ]);



        BioOrder::create([
            'id' => '11',
            'scientific_name' => 'Aplousobranchia',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Ascidiacea')->id
        ]);



        BioOrder::create([
            'id' => '12',
            'scientific_name' => 'Apodiformes',
            'common_name' => '"Colibríes, Hummingbirds, Swifts, Vencejos"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '13',
            'scientific_name' => 'Argentiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '14',
            'scientific_name' => 'Artiodactyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '15',
            'scientific_name' => 'Ateleopodiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '16',
            'scientific_name' => 'Atheriniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '17',
            'scientific_name' => 'Aulopiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '18',
            'scientific_name' => 'Batrachoidiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '19',
            'scientific_name' => 'Beloniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '20',
            'scientific_name' => 'Beryciformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '21',
            'scientific_name' => 'Blenniiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '22',
            'scientific_name' => 'Callionymiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '23',
            'scientific_name' => 'Caprimulgiformes',
            'common_name' => '"Nighthawks, Nightjars, Potoos, Tapacaminos"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '24',
            'scientific_name' => 'Caproiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '25',
            'scientific_name' => 'Carangiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '26',
            'scientific_name' => 'Carcharhiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '27',
            'scientific_name' => 'Carnivora',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '28',
            'scientific_name' => 'Cathartiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '29',
            'scientific_name' => 'Caudata',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Amphibia')->id
        ]);



        BioOrder::create([
            'id' => '30',
            'scientific_name' => 'Cetacea',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '31',
            'scientific_name' => 'Characiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '32',
            'scientific_name' => 'Charadriiformes',
            'common_name' => '"Chorlitos, Curlew, Gaviotas, Gulls, Ostreros, Oystercatcher, Playeritos, Playeros, Plovers, Sandpiper"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '33',
            'scientific_name' => 'Chimaeriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '34',
            'scientific_name' => 'Chiroptera',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '35',
            'scientific_name' => 'Cichliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '36',
            'scientific_name' => 'Ciconiiformes',
            'common_name' => '"Cigüeñas, Storks"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '37',
            'scientific_name' => 'Cingulata',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '38',
            'scientific_name' => 'Clupeiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '39',
            'scientific_name' => 'Columbiformes',
            'common_name' => '"Doves, Palomas, Pigeons"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '40',
            'scientific_name' => 'Coraciiformes',
            'common_name' => '"Kingfisher, Martines pescadores, Motmot, Pájaros péndulo, Tody"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '41',
            'scientific_name' => 'Crocodylia',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Reptilia')->id
        ]);



        BioOrder::create([
            'id' => '42',
            'scientific_name' => 'Cuculiformes',
            'common_name' => '"Correcaminos, Cuckoos, Roadrunners"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '43',
            'scientific_name' => 'Cypriniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '44',
            'scientific_name' => 'Cyprinodontiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '45',
            'scientific_name' => 'Didelphimorphia',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '46',
            'scientific_name' => 'Echinorhiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '47',
            'scientific_name' => 'Elopiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '48',
            'scientific_name' => 'Esociformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '49',
            'scientific_name' => 'Eurypygiformes',
            'common_name' => '"Ave sol, Sunbittern"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '50',
            'scientific_name' => 'Falconiformes',
            'common_name' => '"Falcons, Halcones"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '51',
            'scientific_name' => 'Gadiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '52',
            'scientific_name' => 'Galliformes',
            'common_name' => '"Chachalaca, Chachalacas, Codornices, Francolin, Grouses, Guajolotes silvestres, Quails, Turkey"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '53',
            'scientific_name' => 'Gaviiformes',
            'common_name' => '"Gavias, Loons"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '54',
            'scientific_name' => 'Gobiesociformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '55',
            'scientific_name' => 'Gobiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '56',
            'scientific_name' => 'Gonorynchiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '57',
            'scientific_name' => 'Gruiformes',
            'common_name' => '"Crane, Gallinas de agua, Grullas, Rails, Sungrebe"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '58',
            'scientific_name' => 'Gymnophiona',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Amphibia')->id
        ]);



        BioOrder::create([
            'id' => '59',
            'scientific_name' => 'Gymnotiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '60',
            'scientific_name' => 'Heterodontiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '61',
            'scientific_name' => 'Hexanchiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '62',
            'scientific_name' => 'Holocentriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '63',
            'scientific_name' => 'Incertae sedis',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '64',
            'scientific_name' => 'Incertae sedis',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '65',
            'scientific_name' => 'Istiophoriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '66',
            'scientific_name' => 'Kurtiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '67',
            'scientific_name' => 'Labriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '68',
            'scientific_name' => 'Lagomorpha',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '69',
            'scientific_name' => 'Lamniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '70',
            'scientific_name' => 'Lampriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '71',
            'scientific_name' => 'Lepisosteiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '72',
            'scientific_name' => 'Lophiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '73',
            'scientific_name' => 'Moroniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '74',
            'scientific_name' => 'Mugiliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '75',
            'scientific_name' => 'Myctophiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '76',
            'scientific_name' => 'Myliobatiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '77',
            'scientific_name' => 'Myxiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Myxini')->id
        ]);



        BioOrder::create([
            'id' => '78',
            'scientific_name' => 'Notacanthiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '79',
            'scientific_name' => 'Nyctibiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '80',
            'scientific_name' => 'Ophidiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '81',
            'scientific_name' => 'Orectolobiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '82',
            'scientific_name' => 'Osmeriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '83',
            'scientific_name' => 'Osteoglossiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '84',
            'scientific_name' => 'Passeriformes',
            'common_name' => '"Aves de percha, Passeriformes"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '85',
            'scientific_name' => 'Pelecaniformes',
            'common_name' => '"Garzas, Herons, Pelicanos, Pelicans"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '86',
            'scientific_name' => 'Perciformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '87',
            'scientific_name' => 'Perissodactyla',
            'common_name' => 'Mamíferos con pezuñas',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '88',
            'scientific_name' => 'Petromyzontiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Petromyzontida')->id
        ]);



        BioOrder::create([
            'id' => '89',
            'scientific_name' => 'Phaethontiformes',
            'common_name' => '"Rabijuncos, Tropicbirds"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '90',
            'scientific_name' => 'Phlebobranchia',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Ascidiacea')->id
        ]);



        BioOrder::create([
            'id' => '91',
            'scientific_name' => 'Phoenicopteriformes',
            'common_name' => '"Flamencos, Flamingos"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '92',
            'scientific_name' => 'Piciformes',
            'common_name' => '"Barbet, Carpinteros, Jacamar, Jacamares, Puffbird, Toucanet, Tucanes, Tucanetas, Woodpeckers"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '93',
            'scientific_name' => 'Pilosa',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '94',
            'scientific_name' => 'Pleuronectiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '95',
            'scientific_name' => 'Podicipediformes',
            'common_name' => '"Grebes, Zambullidores"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '96',
            'scientific_name' => 'Polymixiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '97',
            'scientific_name' => 'Polypteriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '98',
            'scientific_name' => 'Primates',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '99',
            'scientific_name' => 'Pristiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '100',
            'scientific_name' => 'Procellariiformes',
            'common_name' => '"Albatros, Albatross, Petreles, Petrels, Shearwaters"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '101',
            'scientific_name' => 'Psittaciformes',
            'common_name' => '"Cotorras, Loros, Parakeet, Parrots, Pericos"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '102',
            'scientific_name' => 'Pyrosomatida',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Thaliacea')->id
        ]);



        BioOrder::create([
            'id' => '103',
            'scientific_name' => 'Rajiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '104',
            'scientific_name' => 'Rodentia',
            'common_name' => 'Roedores',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '105',
            'scientific_name' => 'Salmoniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '106',
            'scientific_name' => 'Salpida',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Thaliacea')->id
        ]);



        BioOrder::create([
            'id' => '107',
            'scientific_name' => 'Scombriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '108',
            'scientific_name' => 'Scombrolabraciformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '109',
            'scientific_name' => 'Scorpaeniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '110',
            'scientific_name' => 'Siluriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '111',
            'scientific_name' => 'Sirenia',
            'common_name' => 'Manatíes',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '112',
            'scientific_name' => 'Soricomorpha',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Mammalia')->id
        ]);



        BioOrder::create([
            'id' => '113',
            'scientific_name' => 'Spariformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '114',
            'scientific_name' => 'Squaliformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '115',
            'scientific_name' => 'Squamata',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Reptilia')->id
        ]);



        BioOrder::create([
            'id' => '116',
            'scientific_name' => 'Squatiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '117',
            'scientific_name' => 'Stolidobranchia',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Ascidiacea')->id
        ]);



        BioOrder::create([
            'id' => '118',
            'scientific_name' => 'Stomiiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '119',
            'scientific_name' => 'Strigiformes',
            'common_name' => '"Búhos, Lechuzas, Owls"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '120',
            'scientific_name' => 'Stylephoriformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '121',
            'scientific_name' => 'Suliformes',
            'common_name' => '"Booby, Cormoranes, Cormorant, Fragatas, Frigatebird, Pajaros Bobos"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '122',
            'scientific_name' => 'Synbranchiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '123',
            'scientific_name' => 'Syngnathiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '124',
            'scientific_name' => 'Testudines',
            'common_name' => 'Tortugas',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Reptilia')->id
        ]);



        BioOrder::create([
            'id' => '125',
            'scientific_name' => 'Tetraodontiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '126',
            'scientific_name' => 'Tinamiformes',
            'common_name' => '"Tinamus, Tinamúes"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '127',
            'scientific_name' => 'Torpediniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Chondrichthyes')->id
        ]);



        BioOrder::create([
            'id' => '128',
            'scientific_name' => 'Trachichthyiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '129',
            'scientific_name' => 'Trachiniformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);



        BioOrder::create([
            'id' => '130',
            'scientific_name' => 'Trogoniformes',
            'common_name' => '"Quetzal, Trogon, Trogones"',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Aves')->id
        ]);



        BioOrder::create([
            'id' => '131',
            'scientific_name' => 'Zeiformes',
            'common_name' => '',
            'status' => 'válido',
            'bio_class_id' => BioClass::firstWhere('scientific_name', '=', 'Osteichthyes')->id
        ]);

    }
}

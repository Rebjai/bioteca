<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioGender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BioGender::create([
            'id' => '1',
            'scientific_name' => 'Abeillia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '2',
            'scientific_name' => 'Abeona',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '3',
            'scientific_name' => 'Ablennes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);

        BioGender::create([
            'id' => '4',
            'scientific_name' => 'Aboma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '5',
            'scientific_name' => 'Abramis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '6',
            'scientific_name' => 'Abramites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anostomidae')->id
        ]);

        BioGender::create([
            'id' => '7',
            'scientific_name' => 'Abronia',
            'common_name' => 'Escorpiones arborícolas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '8',
            'scientific_name' => 'Abudefduf',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);

        BioGender::create([
            'id' => '9',
            'scientific_name' => 'Acanthemblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '10',
            'scientific_name' => 'Acanthidium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Etmopteridae')->id
        ]);

        BioGender::create([
            'id' => '11',
            'scientific_name' => 'Acanthocybium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);

        BioGender::create([
            'id' => '12',
            'scientific_name' => 'Acanthogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '13',
            'scientific_name' => 'Acanthophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);

        BioGender::create([
            'id' => '14',
            'scientific_name' => 'Acanthostracion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ostraciidae')->id
        ]);

        BioGender::create([
            'id' => '15',
            'scientific_name' => 'Acanthurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);

        BioGender::create([
            'id' => '16',
            'scientific_name' => 'Acantopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cobitidae')->id
        ]);

        BioGender::create([
            'id' => '17',
            'scientific_name' => 'Acara',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '18',
            'scientific_name' => 'Accipiter',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '19',
            'scientific_name' => 'Acentrogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '20',
            'scientific_name' => 'Achirus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Achiridae')->id
        ]);

        BioGender::create([
            'id' => '21',
            'scientific_name' => 'Acipenser',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acipenseridae')->id
        ]);

        BioGender::create([
            'id' => '22',
            'scientific_name' => 'Acridotheres',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sturnidae')->id
        ]);

        BioGender::create([
            'id' => '23',
            'scientific_name' => 'Acris',
            'common_name' => '"Cricket frogs, Ranas grillo"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '24',
            'scientific_name' => 'Acronurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);

        BioGender::create([
            'id' => '25',
            'scientific_name' => 'Acteis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '26',
            'scientific_name' => 'Actinemys',
            'common_name' => 'Tortugas de arroyos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '27',
            'scientific_name' => 'Actitis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);

        BioGender::create([
            'id' => '28',
            'scientific_name' => 'Acutomentum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);

        BioGender::create([
            'id' => '29',
            'scientific_name' => 'Acyrtops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '30',
            'scientific_name' => 'Acyrtus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '31',
            'scientific_name' => 'Adelonycteris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '32',
            'scientific_name' => 'Adelophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);

        BioGender::create([
            'id' => '33',
            'scientific_name' => 'Adelphicos',
            'common_name' => 'Culebras zacateras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '34',
            'scientific_name' => 'Aechmophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Podicipedidae')->id
        ]);

        BioGender::create([
            'id' => '35',
            'scientific_name' => 'Aegolius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);

        BioGender::create([
            'id' => '36',
            'scientific_name' => 'Aequidens',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '37',
            'scientific_name' => 'Aeronautes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apodidae')->id
        ]);

        BioGender::create([
            'id' => '38',
            'scientific_name' => 'Aethia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);

        BioGender::create([
            'id' => '39',
            'scientific_name' => 'Aetobatus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '40',
            'scientific_name' => 'Agalychnis',
            'common_name' => '"Leaf frogs, Ranitas de hoja"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllomedusidae')->id
        ]);

        BioGender::create([
            'id' => '41',
            'scientific_name' => 'Agama',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agamidae')->id
        ]);

        BioGender::create([
            'id' => '42',
            'scientific_name' => 'Agamia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '43',
            'scientific_name' => 'Agapornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittaculidae')->id
        ]);

        BioGender::create([
            'id' => '44',
            'scientific_name' => 'Agelaius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '45',
            'scientific_name' => 'Agkistrodon',
            'common_name' => 'Cantiles',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '46',
            'scientific_name' => 'Agonopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);

        BioGender::create([
            'id' => '47',
            'scientific_name' => 'Agonostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);

        BioGender::create([
            'id' => '48',
            'scientific_name' => 'Agonostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);

        BioGender::create([
            'id' => '49',
            'scientific_name' => 'Agonus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);

        BioGender::create([
            'id' => '50',
            'scientific_name' => 'Agosia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '51',
            'scientific_name' => 'Agouti',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuniculidae')->id
        ]);

        BioGender::create([
            'id' => '52',
            'scientific_name' => 'Ahaetulla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '53',
            'scientific_name' => 'Ahlia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '54',
            'scientific_name' => 'Ahliesaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Notosudidae')->id
        ]);

        BioGender::create([
            'id' => '55',
            'scientific_name' => 'Ailurichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '56',
            'scientific_name' => 'Aimophila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '57',
            'scientific_name' => 'Aix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '58',
            'scientific_name' => 'Ajaia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Threskiornithidae')->id
        ]);

        BioGender::create([
            'id' => '59',
            'scientific_name' => 'Akleistops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xantusiidae')->id
        ]);

        BioGender::create([
            'id' => '60',
            'scientific_name' => 'Akodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);

        BioGender::create([
            'id' => '61',
            'scientific_name' => 'Albatrossia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);

        BioGender::create([
            'id' => '62',
            'scientific_name' => 'Albula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Albulidae')->id
        ]);

        BioGender::create([
            'id' => '63',
            'scientific_name' => 'Alburnellus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '64',
            'scientific_name' => 'Alburnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '65',
            'scientific_name' => 'Alectis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '66',
            'scientific_name' => 'Alepidichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nomeidae')->id
        ]);

        BioGender::create([
            'id' => '67',
            'scientific_name' => 'Alepidosaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepisauridae')->id
        ]);

        BioGender::create([
            'id' => '68',
            'scientific_name' => 'Alepisaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepisauridae')->id
        ]);

        BioGender::create([
            'id' => '69',
            'scientific_name' => 'Alepocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '70',
            'scientific_name' => 'Aleposomus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '71',
            'scientific_name' => 'Alexurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);

        BioGender::create([
            'id' => '72',
            'scientific_name' => 'Algansea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '73',
            'scientific_name' => 'Algoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '74',
            'scientific_name' => 'Allartedius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);

        BioGender::create([
            'id' => '75',
            'scientific_name' => 'Alligator',
            'common_name' => '"Aligators, Caimanes"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alligatoridae')->id
        ]);

        BioGender::create([
            'id' => '76',
            'scientific_name' => 'Alloclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '77',
            'scientific_name' => 'Allodontichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '78',
            'scientific_name' => 'Alloophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '79',
            'scientific_name' => 'Allophallus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);

        BioGender::create([
            'id' => '80',
            'scientific_name' => 'Allothunnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);

        BioGender::create([
            'id' => '81',
            'scientific_name' => 'Allotoca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '82',
            'scientific_name' => 'Alopecias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alopiidae')->id
        ]);

        BioGender::create([
            'id' => '83',
            'scientific_name' => 'Alopias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alopiidae')->id
        ]);

        BioGender::create([
            'id' => '84',
            'scientific_name' => 'Alosa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '85',
            'scientific_name' => 'Alouatta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atelidae')->id
        ]);

        BioGender::create([
            'id' => '86',
            'scientific_name' => 'Alphestes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '87',
            'scientific_name' => 'Alticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '88',
            'scientific_name' => 'Altolamprologus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '89',
            'scientific_name' => 'Alutera',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);

        BioGender::create([
            'id' => '90',
            'scientific_name' => 'Aluterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);

        BioGender::create([
            'id' => '91',
            'scientific_name' => 'Alvarius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);

        BioGender::create([
            'id' => '92',
            'scientific_name' => 'Amandava',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Estrildidae')->id
        ]);

        BioGender::create([
            'id' => '93',
            'scientific_name' => 'Amanses',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);

        BioGender::create([
            'id' => '94',
            'scientific_name' => 'Amastridium',
            'common_name' => 'Culebras cabeza cobriza',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '95',
            'scientific_name' => 'Amatitlania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '96',
            'scientific_name' => 'Amaurolimnas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);

        BioGender::create([
            'id' => '97',
            'scientific_name' => 'Amaurospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);

        BioGender::create([
            'id' => '98',
            'scientific_name' => 'Amazilia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '99',
            'scientific_name' => 'Amazona',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '100',
            'scientific_name' => 'Amblodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);

        BioGender::create([
            'id' => '101',
            'scientific_name' => 'Ambloplites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);

        BioGender::create([
            'id' => '102',
            'scientific_name' => 'Amblycercus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '103',
            'scientific_name' => 'Amblycirrhitus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cirrhitidae')->id
        ]);

        BioGender::create([
            'id' => '104',
            'scientific_name' => 'Amblymetopon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '105',
            'scientific_name' => 'Amblyopus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '106',
            'scientific_name' => 'Amblyraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '107',
            'scientific_name' => 'Amblyscion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '108',
            'scientific_name' => 'Amblystoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '109',
            'scientific_name' => 'Ambystoma',
            'common_name' => '"Achoques, Ajolotes, Mole salamanders, Salamandras mola"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '110',
            'scientific_name' => 'Ameca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '111',
            'scientific_name' => 'Ameiurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);

        BioGender::create([
            'id' => '112',
            'scientific_name' => 'Ameiva',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);

        BioGender::create([
            'id' => '113',
            'scientific_name' => 'Amerotyphlops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Typhlopidae')->id
        ]);

        BioGender::create([
            'id' => '114',
            'scientific_name' => 'Amia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '115',
            'scientific_name' => 'Ammodramus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '116',
            'scientific_name' => 'Ammodytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ammodytidae')->id
        ]);

        BioGender::create([
            'id' => '117',
            'scientific_name' => 'Ammodytoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ammodytidae')->id
        ]);

        BioGender::create([
            'id' => '118',
            'scientific_name' => 'Ammospermophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);

        BioGender::create([
            'id' => '119',
            'scientific_name' => 'Ammospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '120',
            'scientific_name' => 'Amphilophus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '121',
            'scientific_name' => 'Amphispiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '122',
            'scientific_name' => 'Amphistichus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '123',
            'scientific_name' => 'Anabacerthia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);

        BioGender::create([
            'id' => '124',
            'scientific_name' => 'Anableps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anablepidae')->id
        ]);

        BioGender::create([
            'id' => '125',
            'scientific_name' => 'Anacanthobatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '126',
            'scientific_name' => 'Anarbylus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eublepharidae')->id
        ]);

        BioGender::create([
            'id' => '127',
            'scientific_name' => 'Anarchias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);

        BioGender::create([
            'id' => '128',
            'scientific_name' => 'Anarchopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '129',
            'scientific_name' => 'Anas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '130',
            'scientific_name' => 'Anaxyrus',
            'common_name' => '"North American toads, Sapos neárticos"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);

        BioGender::create([
            'id' => '131',
            'scientific_name' => 'Anchoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);

        BioGender::create([
            'id' => '132',
            'scientific_name' => 'Anchovia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);

        BioGender::create([
            'id' => '133',
            'scientific_name' => 'Anchoviella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);

        BioGender::create([
            'id' => '134',
            'scientific_name' => 'Ancistrodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '135',
            'scientific_name' => 'Ancylopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);

        BioGender::create([
            'id' => '136',
            'scientific_name' => 'Andinoacara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '137',
            'scientific_name' => 'Andinoacara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '138',
            'scientific_name' => 'Aneides',
            'common_name' => '"Climbing salamanders, Salamandras trepadoras, Tlaconetes escaladores"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '139',
            'scientific_name' => 'Anelytropsis',
            'common_name' => 'Lagartijas lombriz',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dibamidae')->id
        ]);

        BioGender::create([
            'id' => '140',
            'scientific_name' => 'Angelichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacanthidae')->id
        ]);

        BioGender::create([
            'id' => '141',
            'scientific_name' => 'Anguilla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguillidae')->id
        ]);

        BioGender::create([
            'id' => '142',
            'scientific_name' => 'Anguis',
            'common_name' => 'Lagartijas de cristal',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '143',
            'scientific_name' => 'Anhinga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anhingidae')->id
        ]);

        BioGender::create([
            'id' => '144',
            'scientific_name' => 'Anisotremus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);

        BioGender::create([
            'id' => '145',
            'scientific_name' => 'Anniella',
            'common_name' => 'Lagartijas sin patas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anniellidae')->id
        ]);

        BioGender::create([
            'id' => '146',
            'scientific_name' => 'Anolis',
            'common_name' => 'Abaniquillos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloidae')->id
        ]);

        BioGender::create([
            'id' => '147',
            'scientific_name' => 'Anoplogaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anoplogastridae')->id
        ]);

        BioGender::create([
            'id' => '148',
            'scientific_name' => 'Anoplopoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anoplopomatidae')->id
        ]);

        BioGender::create([
            'id' => '149',
            'scientific_name' => 'Anoptichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);

        BioGender::create([
            'id' => '150',
            'scientific_name' => 'Anota',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);

        BioGender::create([
            'id' => '151',
            'scientific_name' => 'Anotheca',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '152',
            'scientific_name' => 'Anotopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);

        BioGender::create([
            'id' => '153',
            'scientific_name' => 'Anoura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '154',
            'scientific_name' => 'Anous',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);

        BioGender::create([
            'id' => '155',
            'scientific_name' => 'Anser',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '156',
            'scientific_name' => 'Antennarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);

        BioGender::create([
            'id' => '157',
            'scientific_name' => 'Antennatus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);

        BioGender::create([
            'id' => '158',
            'scientific_name' => 'Anthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '159',
            'scientific_name' => 'Anthiasicus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '160',
            'scientific_name' => 'Anthracothorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '161',
            'scientific_name' => 'Anthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Motacillidae')->id
        ]);

        BioGender::create([
            'id' => '162',
            'scientific_name' => 'Antigone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gruidae')->id
        ]);

        BioGender::create([
            'id' => '163',
            'scientific_name' => 'Antigonia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caproidae')->id
        ]);

        BioGender::create([
            'id' => '164',
            'scientific_name' => 'Antilligobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '165',
            'scientific_name' => 'Antilocapra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antilocapridae')->id
        ]);

        BioGender::create([
            'id' => '166',
            'scientific_name' => 'Antilope',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bovidae')->id
        ]);

        BioGender::create([
            'id' => '167',
            'scientific_name' => 'Antimora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);

        BioGender::create([
            'id' => '168',
            'scientific_name' => 'Antrostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);

        BioGender::create([
            'id' => '169',
            'scientific_name' => 'Antrozous',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '170',
            'scientific_name' => 'Apalone',
            'common_name' => 'Tortugas de concha blanda',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);

        BioGender::create([
            'id' => '171',
            'scientific_name' => 'Apeltes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gasterosteidae')->id
        ]);

        BioGender::create([
            'id' => '172',
            'scientific_name' => 'Aphanopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);

        BioGender::create([
            'id' => '173',
            'scientific_name' => 'Aphelocoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '174',
            'scientific_name' => 'Aphoristia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cynoglossidae')->id
        ]);

        BioGender::create([
            'id' => '175',
            'scientific_name' => 'Aphriza',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);

        BioGender::create([
            'id' => '176',
            'scientific_name' => 'Aphyosemion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nothobranchiidae')->id
        ]);

        BioGender::create([
            'id' => '177',
            'scientific_name' => 'Apistogramma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '178',
            'scientific_name' => 'Aplesion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);

        BioGender::create([
            'id' => '179',
            'scientific_name' => 'Aplidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polyclinidae')->id
        ]);

        BioGender::create([
            'id' => '180',
            'scientific_name' => 'Aplocheilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aplocheilidae')->id
        ]);

        BioGender::create([
            'id' => '181',
            'scientific_name' => 'Aplodinotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '182',
            'scientific_name' => 'Apodichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pholidae')->id
        ]);

        BioGender::create([
            'id' => '183',
            'scientific_name' => 'Apogon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '184',
            'scientific_name' => 'Apogonichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '185',
            'scientific_name' => 'Apomotis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);

        BioGender::create([
            'id' => '186',
            'scientific_name' => 'Aprionodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);

        BioGender::create([
            'id' => '187',
            'scientific_name' => 'Apristurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);

        BioGender::create([
            'id' => '188',
            'scientific_name' => 'Aprolepis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '189',
            'scientific_name' => 'Apsilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);

        BioGender::create([
            'id' => '190',
            'scientific_name' => 'Apterichtus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '191',
            'scientific_name' => 'Apteronotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apteronotidae')->id
        ]);

        BioGender::create([
            'id' => '192',
            'scientific_name' => 'Aquila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '193',
            'scientific_name' => 'Aquiloeurycea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '194',
            'scientific_name' => 'Ara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '195',
            'scientific_name' => 'Aramides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);

        BioGender::create([
            'id' => '196',
            'scientific_name' => 'Aramus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aramidae')->id
        ]);

        BioGender::create([
            'id' => '197',
            'scientific_name' => 'Aratinga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '198',
            'scientific_name' => 'Arbaciosa',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '199',
            'scientific_name' => 'Archilochus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '200',
            'scientific_name' => 'Archocentrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '201',
            'scientific_name' => 'Archomenidia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '202',
            'scientific_name' => 'Archosargus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);

        BioGender::create([
            'id' => '203',
            'scientific_name' => 'Arcos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '204',
            'scientific_name' => 'Arctocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Otariidae')->id
        ]);

        BioGender::create([
            'id' => '205',
            'scientific_name' => 'Arctomys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);

        BioGender::create([
            'id' => '206',
            'scientific_name' => 'Arctozenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);

        BioGender::create([
            'id' => '207',
            'scientific_name' => 'Ardea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '208',
            'scientific_name' => 'Ardenna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);

        BioGender::create([
            'id' => '209',
            'scientific_name' => 'Arenaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);

        BioGender::create([
            'id' => '210',
            'scientific_name' => 'Arenichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlopsidae')->id
        ]);

        BioGender::create([
            'id' => '211',
            'scientific_name' => 'Argentina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Argentinidae')->id
        ]);

        BioGender::create([
            'id' => '212',
            'scientific_name' => 'Argo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);

        BioGender::create([
            'id' => '213',
            'scientific_name' => 'Argyreiosus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '214',
            'scientific_name' => 'Argyreus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '215',
            'scientific_name' => 'Argyropelecus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);

        BioGender::create([
            'id' => '216',
            'scientific_name' => 'Ariomma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariommatidae')->id
        ]);

        BioGender::create([
            'id' => '217',
            'scientific_name' => 'Ariopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '218',
            'scientific_name' => 'Ariosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '219',
            'scientific_name' => 'Aristelliger',
            'common_name' => 'Geckos de pestañas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphaerodactylidae')->id
        ]);

        BioGender::create([
            'id' => '220',
            'scientific_name' => 'Aristostomias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);

        BioGender::create([
            'id' => '221',
            'scientific_name' => 'Arius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '222',
            'scientific_name' => 'Arizona',
            'common_name' => 'Culebras de desierto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '223',
            'scientific_name' => 'Arothron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetraodontidae')->id
        ]);

        BioGender::create([
            'id' => '224',
            'scientific_name' => 'Arremon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '225',
            'scientific_name' => 'Arremonops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '226',
            'scientific_name' => 'Artedius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);

        BioGender::create([
            'id' => '227',
            'scientific_name' => 'Artemisiospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '228',
            'scientific_name' => 'Artibeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '229',
            'scientific_name' => 'Aruma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '230',
            'scientific_name' => 'Arvicola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);

        BioGender::create([
            'id' => '231',
            'scientific_name' => 'Ascidia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ascidiidae')->id
        ]);

        BioGender::create([
            'id' => '232',
            'scientific_name' => 'Aseraggodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soleidae')->id
        ]);

        BioGender::create([
            'id' => '233',
            'scientific_name' => 'Asio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);

        BioGender::create([
            'id' => '234',
            'scientific_name' => 'Aspatha',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Momotidae')->id
        ]);

        BioGender::create([
            'id' => '235',
            'scientific_name' => 'Aspidonectes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);

        BioGender::create([
            'id' => '236',
            'scientific_name' => 'Aspidoscelis',
            'common_name' => '"Huicos, Lagartijas cola de látigo, Lagartijas corredoras"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);

        BioGender::create([
            'id' => '237',
            'scientific_name' => 'Aspistor',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '238',
            'scientific_name' => 'Assurger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);

        BioGender::create([
            'id' => '239',
            'scientific_name' => 'Astatheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '240',
            'scientific_name' => 'Astrapogon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '241',
            'scientific_name' => 'Astronotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '242',
            'scientific_name' => 'Astroscopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Uranoscopidae')->id
        ]);

        BioGender::create([
            'id' => '243',
            'scientific_name' => 'Astyanax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);

        BioGender::create([
            'id' => '244',
            'scientific_name' => 'Ataeniobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '245',
            'scientific_name' => 'Atalapha',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '246',
            'scientific_name' => 'Ateles',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atelidae')->id
        ]);

        BioGender::create([
            'id' => '247',
            'scientific_name' => 'Athene',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);

        BioGender::create([
            'id' => '248',
            'scientific_name' => 'Atherina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinidae')->id
        ]);

        BioGender::create([
            'id' => '249',
            'scientific_name' => 'Atherinella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '250',
            'scientific_name' => 'Atherinichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '251',
            'scientific_name' => 'Atherinomorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinidae')->id
        ]);

        BioGender::create([
            'id' => '252',
            'scientific_name' => 'Atherinops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '253',
            'scientific_name' => 'Atherinopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '254',
            'scientific_name' => 'Atlapetes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '255',
            'scientific_name' => 'Atopichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Albulidae')->id
        ]);

        BioGender::create([
            'id' => '256',
            'scientific_name' => 'Atopoclinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '257',
            'scientific_name' => 'Atractoscion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '258',
            'scientific_name' => 'Atractosteus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lepisosteidae')->id
        ]);

        BioGender::create([
            'id' => '259',
            'scientific_name' => 'Atractus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '260',
            'scientific_name' => 'Atropoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '261',
            'scientific_name' => 'Atropos',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '262',
            'scientific_name' => 'Atthis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '263',
            'scientific_name' => 'Atticora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);

        BioGender::create([
            'id' => '264',
            'scientific_name' => 'Attila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '265',
            'scientific_name' => 'Auchenistius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '266',
            'scientific_name' => 'Auchenopterus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '267',
            'scientific_name' => 'Aulacorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ramphastidae')->id
        ]);

        BioGender::create([
            'id' => '268',
            'scientific_name' => 'Auliscops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aulorhynchidae')->id
        ]);

        BioGender::create([
            'id' => '269',
            'scientific_name' => 'Aulonocara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '270',
            'scientific_name' => 'Aulopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aulopidae')->id
        ]);

        BioGender::create([
            'id' => '271',
            'scientific_name' => 'Aulorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aulorhynchidae')->id
        ]);

        BioGender::create([
            'id' => '272',
            'scientific_name' => 'Aulostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aulostomidae')->id
        ]);

        BioGender::create([
            'id' => '273',
            'scientific_name' => 'Auriparus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Remizidae')->id
        ]);

        BioGender::create([
            'id' => '274',
            'scientific_name' => 'Automolus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);

        BioGender::create([
            'id' => '275',
            'scientific_name' => 'Auxis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);

        BioGender::create([
            'id' => '276',
            'scientific_name' => 'Averruncus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);

        BioGender::create([
            'id' => '277',
            'scientific_name' => 'Avocettina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nemichthyidae')->id
        ]);

        BioGender::create([
            'id' => '278',
            'scientific_name' => 'Avocettinops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nemichthyidae')->id
        ]);

        BioGender::create([
            'id' => '279',
            'scientific_name' => 'Awaous',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '280',
            'scientific_name' => 'Axis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);

        BioGender::create([
            'id' => '281',
            'scientific_name' => 'Axoclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);

        BioGender::create([
            'id' => '282',
            'scientific_name' => 'Axolotus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '283',
            'scientific_name' => 'Aylopon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '284',
            'scientific_name' => 'Ayresia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);

        BioGender::create([
            'id' => '285',
            'scientific_name' => 'Aythya',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '286',
            'scientific_name' => 'Azevia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);

        BioGender::create([
            'id' => '287',
            'scientific_name' => 'Aztecula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '288',
            'scientific_name' => 'Azurina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);

        BioGender::create([
            'id' => '289',
            'scientific_name' => 'Aëllo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormoopidae')->id
        ]);

        BioGender::create([
            'id' => '290',
            'scientific_name' => 'Baeodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '291',
            'scientific_name' => 'Baeolophus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paridae')->id
        ]);

        BioGender::create([
            'id' => '292',
            'scientific_name' => 'Bagre',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '293',
            'scientific_name' => 'Baiomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);

        BioGender::create([
            'id' => '294',
            'scientific_name' => 'Bairdiella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '295',
            'scientific_name' => 'Bajacalifornia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '296',
            'scientific_name' => 'Balaenoptera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balaenopteridae')->id
        ]);

        BioGender::create([
            'id' => '297',
            'scientific_name' => 'Balantiocheilos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '298',
            'scientific_name' => 'Balantiopteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);

        BioGender::create([
            'id' => '299',
            'scientific_name' => 'Baldwinella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '300',
            'scientific_name' => 'Balistes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);

        BioGender::create([
            'id' => '301',
            'scientific_name' => 'Balsadichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '302',
            'scientific_name' => 'Barbodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '303',
            'scientific_name' => 'Barbonymus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '304',
            'scientific_name' => 'Barbourisia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Barbourisiidae')->id
        ]);

        BioGender::create([
            'id' => '305',
            'scientific_name' => 'Barbulifer',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '306',
            'scientific_name' => 'Barisia',
            'common_name' => 'Lagartijas alicante',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '307',
            'scientific_name' => 'Bartramia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);

        BioGender::create([
            'id' => '308',
            'scientific_name' => 'Bascanichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '309',
            'scientific_name' => 'Bascanion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '310',
            'scientific_name' => 'Basileuterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);

        BioGender::create([
            'id' => '311',
            'scientific_name' => 'Basilinna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '312',
            'scientific_name' => 'Basiliscus',
            'common_name' => 'Toloques',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corytophanidae')->id
        ]);

        BioGender::create([
            'id' => '313',
            'scientific_name' => 'Bassaris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);

        BioGender::create([
            'id' => '314',
            'scientific_name' => 'Bassariscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);

        BioGender::create([
            'id' => '315',
            'scientific_name' => 'Bathophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);

        BioGender::create([
            'id' => '316',
            'scientific_name' => 'Bathyanthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '317',
            'scientific_name' => 'Bathyclupea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathyclupeidae')->id
        ]);

        BioGender::create([
            'id' => '318',
            'scientific_name' => 'Bathycongrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '319',
            'scientific_name' => 'Bathygobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '320',
            'scientific_name' => 'Bathylaco',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '321',
            'scientific_name' => 'Bathylagoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);

        BioGender::create([
            'id' => '322',
            'scientific_name' => 'Bathylagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);

        BioGender::create([
            'id' => '323',
            'scientific_name' => 'Bathymaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathymasteridae')->id
        ]);

        BioGender::create([
            'id' => '324',
            'scientific_name' => 'Bathyraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '325',
            'scientific_name' => 'Bathysiredon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '326',
            'scientific_name' => 'Bathytroctes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '327',
            'scientific_name' => 'Batrachoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachoididae')->id
        ]);

        BioGender::create([
            'id' => '328',
            'scientific_name' => 'Batrachoseps',
            'common_name' => '"Salamandras delgadas, Slender salamanders, Tlaconetes alargados"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '329',
            'scientific_name' => 'Batrachosoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);

        BioGender::create([
            'id' => '330',
            'scientific_name' => 'Batrachus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachoididae')->id
        ]);

        BioGender::create([
            'id' => '331',
            'scientific_name' => 'Batrachyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachylidae')->id
        ]);

        BioGender::create([
            'id' => '332',
            'scientific_name' => 'Bauerus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '333',
            'scientific_name' => 'Bdellostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);

        BioGender::create([
            'id' => '334',
            'scientific_name' => 'Bellator',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triglidae')->id
        ]);

        BioGender::create([
            'id' => '335',
            'scientific_name' => 'Beloholocentrus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);

        BioGender::create([
            'id' => '336',
            'scientific_name' => 'Belone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);

        BioGender::create([
            'id' => '337',
            'scientific_name' => 'Belonesox',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);

        BioGender::create([
            'id' => '338',
            'scientific_name' => 'Bembrops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percophidae')->id
        ]);

        BioGender::create([
            'id' => '339',
            'scientific_name' => 'Bentenia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);

        BioGender::create([
            'id' => '340',
            'scientific_name' => 'Benthalbella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);

        BioGender::create([
            'id' => '341',
            'scientific_name' => 'Benthodesmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);

        BioGender::create([
            'id' => '342',
            'scientific_name' => 'Benthosema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '343',
            'scientific_name' => 'Berardius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ziphiidae')->id
        ]);

        BioGender::create([
            'id' => '344',
            'scientific_name' => 'Beringraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '345',
            'scientific_name' => 'Beryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Berycidae')->id
        ]);

        BioGender::create([
            'id' => '346',
            'scientific_name' => 'Betta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Osphronemidae')->id
        ]);

        BioGender::create([
            'id' => '347',
            'scientific_name' => 'Bimanus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);

        BioGender::create([
            'id' => '348',
            'scientific_name' => 'Bipes',
            'common_name' => 'Lagartijas topo',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);

        BioGender::create([
            'id' => '349',
            'scientific_name' => 'Bison',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bovidae')->id
        ]);

        BioGender::create([
            'id' => '350',
            'scientific_name' => 'Blarina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);

        BioGender::create([
            'id' => '351',
            'scientific_name' => 'Bleekeria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ammodytidae')->id
        ]);

        BioGender::create([
            'id' => '352',
            'scientific_name' => 'Blennicottus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);

        BioGender::create([
            'id' => '353',
            'scientific_name' => 'Blenniolus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '354',
            'scientific_name' => 'Blennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '355',
            'scientific_name' => 'Blepharactisis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gymnophthalmidae')->id
        ]);

        BioGender::create([
            'id' => '356',
            'scientific_name' => 'Boa',
            'common_name' => 'Boas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Boidae')->id
        ]);

        BioGender::create([
            'id' => '357',
            'scientific_name' => 'Bodianus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '358',
            'scientific_name' => 'Bogertophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '359',
            'scientific_name' => 'Bolborhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '360',
            'scientific_name' => 'Boleichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);

        BioGender::create([
            'id' => '361',
            'scientific_name' => 'Bolinichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '362',
            'scientific_name' => 'Bolitoglossa',
            'common_name' => '"Mushroom-tongued salamanders, Salamandras de lengua boletoide, Tlaconetes lengua de hongo"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '363',
            'scientific_name' => 'Bollmannia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '364',
            'scientific_name' => 'Bombycilla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bombycillidae')->id
        ]);

        BioGender::create([
            'id' => '365',
            'scientific_name' => 'Bonapartia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);

        BioGender::create([
            'id' => '366',
            'scientific_name' => 'Borodinula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nemichthyidae')->id
        ]);

        BioGender::create([
            'id' => '367',
            'scientific_name' => 'Borophryne',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Linophrynidae')->id
        ]);

        BioGender::create([
            'id' => '368',
            'scientific_name' => 'Borostomias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);

        BioGender::create([
            'id' => '369',
            'scientific_name' => 'Bos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bovidae')->id
        ]);

        BioGender::create([
            'id' => '370',
            'scientific_name' => 'Bostrichobranchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molgulidae')->id
        ]);

        BioGender::create([
            'id' => '371',
            'scientific_name' => 'Botaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '372',
            'scientific_name' => 'Bothriechis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '373',
            'scientific_name' => 'Bothrocara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);

        BioGender::create([
            'id' => '374',
            'scientific_name' => 'Bothrops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '375',
            'scientific_name' => 'Bothus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);

        BioGender::create([
            'id' => '376',
            'scientific_name' => 'Botia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Botiidae')->id
        ]);

        BioGender::create([
            'id' => '377',
            'scientific_name' => 'Botrylloides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Styelidae')->id
        ]);

        BioGender::create([
            'id' => '378',
            'scientific_name' => 'Botryllus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Styelidae')->id
        ]);

        BioGender::create([
            'id' => '379',
            'scientific_name' => 'Brachioptilon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '380',
            'scientific_name' => 'Brachydeuterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);

        BioGender::create([
            'id' => '381',
            'scientific_name' => 'Brachygobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Oxudercidae')->id
        ]);

        BioGender::create([
            'id' => '382',
            'scientific_name' => 'Brachyistius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '383',
            'scientific_name' => 'Brachyopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);

        BioGender::create([
            'id' => '384',
            'scientific_name' => 'Brachyramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);

        BioGender::create([
            'id' => '385',
            'scientific_name' => 'Brachyrhaphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);

        BioGender::create([
            'id' => '386',
            'scientific_name' => 'Bradytriton',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '387',
            'scientific_name' => 'Brama',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);

        BioGender::create([
            'id' => '388',
            'scientific_name' => 'Bramocharax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);

        BioGender::create([
            'id' => '389',
            'scientific_name' => 'Branchiostegus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);

        BioGender::create([
            'id' => '390',
            'scientific_name' => 'Branchiostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Branchiostomatidae')->id
        ]);

        BioGender::create([
            'id' => '391',
            'scientific_name' => 'Brannerella',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '392',
            'scientific_name' => 'Branta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '393',
            'scientific_name' => 'Bregmaceros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bregmacerotidae')->id
        ]);

        BioGender::create([
            'id' => '394',
            'scientific_name' => 'Breviraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '395',
            'scientific_name' => 'Brevoortia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '396',
            'scientific_name' => 'Brockius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '397',
            'scientific_name' => 'Bromeliohyla',
            'common_name' => '"Bromeliad treefrogs, Ranas de bromelia, Ranitas de las bromelias"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '398',
            'scientific_name' => 'Brooksia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);

        BioGender::create([
            'id' => '399',
            'scientific_name' => 'Brosme',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gadidae')->id
        ]);

        BioGender::create([
            'id' => '400',
            'scientific_name' => 'Brosmiculus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);

        BioGender::create([
            'id' => '401',
            'scientific_name' => 'Brosmius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gadidae')->id
        ]);

        BioGender::create([
            'id' => '402',
            'scientific_name' => 'Brosmophycis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);

        BioGender::create([
            'id' => '403',
            'scientific_name' => 'Brotogeris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '404',
            'scientific_name' => 'Brotula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);

        BioGender::create([
            'id' => '405',
            'scientific_name' => 'Brycon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);

        BioGender::create([
            'id' => '406',
            'scientific_name' => 'Bryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '407',
            'scientific_name' => 'Buarremon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '408',
            'scientific_name' => 'Bubo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);

        BioGender::create([
            'id' => '409',
            'scientific_name' => 'Bubulcus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '410',
            'scientific_name' => 'Bucephala',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '411',
            'scientific_name' => 'Bufo',
            'common_name' => '"Sapos sudamericanos, South American toads"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);

        BioGender::create([
            'id' => '412',
            'scientific_name' => 'Bulweria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);

        BioGender::create([
            'id' => '413',
            'scientific_name' => 'Burhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Burhinidae')->id
        ]);

        BioGender::create([
            'id' => '414',
            'scientific_name' => 'Busarellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '415',
            'scientific_name' => 'Buteo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '416',
            'scientific_name' => 'Buteogallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '417',
            'scientific_name' => 'Butorides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '418',
            'scientific_name' => 'Bysmachelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Testudinidae')->id
        ]);

        BioGender::create([
            'id' => '419',
            'scientific_name' => 'Cabassous',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasypodidae')->id
        ]);

        BioGender::create([
            'id' => '420',
            'scientific_name' => 'Cachryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);

        BioGender::create([
            'id' => '421',
            'scientific_name' => 'Cacicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '422',
            'scientific_name' => 'Caecula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '423',
            'scientific_name' => 'Caelorinchus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);

        BioGender::create([
            'id' => '424',
            'scientific_name' => 'Caiman',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alligatoridae')->id
        ]);

        BioGender::create([
            'id' => '425',
            'scientific_name' => 'Cairina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '426',
            'scientific_name' => 'Calamopteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);

        BioGender::create([
            'id' => '427',
            'scientific_name' => 'Calamospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '428',
            'scientific_name' => 'Calamus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);

        BioGender::create([
            'id' => '429',
            'scientific_name' => 'Calcarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Calcariidae')->id
        ]);

        BioGender::create([
            'id' => '430',
            'scientific_name' => 'Calidris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);

        BioGender::create([
            'id' => '431',
            'scientific_name' => 'Callechelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '432',
            'scientific_name' => 'Callichelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '433',
            'scientific_name' => 'Callinia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);

        BioGender::create([
            'id' => '434',
            'scientific_name' => 'Callionymus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Callionymidae')->id
        ]);

        BioGender::create([
            'id' => '435',
            'scientific_name' => 'Callipepla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);

        BioGender::create([
            'id' => '436',
            'scientific_name' => 'Callisaurus',
            'common_name' => 'Cachoritas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);

        BioGender::create([
            'id' => '437',
            'scientific_name' => 'Callopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);

        BioGender::create([
            'id' => '438',
            'scientific_name' => 'Callorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Otariidae')->id
        ]);

        BioGender::create([
            'id' => '439',
            'scientific_name' => 'Callospermophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);

        BioGender::create([
            'id' => '440',
            'scientific_name' => 'Callyodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);

        BioGender::create([
            'id' => '441',
            'scientific_name' => 'Calocitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '442',
            'scientific_name' => 'Calonectris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);

        BioGender::create([
            'id' => '443',
            'scientific_name' => 'Calothorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '444',
            'scientific_name' => 'Calotomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);

        BioGender::create([
            'id' => '445',
            'scientific_name' => 'Caluromys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);

        BioGender::create([
            'id' => '446',
            'scientific_name' => 'Calypte',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '447',
            'scientific_name' => 'Camarataxis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '448',
            'scientific_name' => 'Camarina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);

        BioGender::create([
            'id' => '449',
            'scientific_name' => 'Campephilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);

        BioGender::create([
            'id' => '450',
            'scientific_name' => 'Campostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '451',
            'scientific_name' => 'Camptostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '452',
            'scientific_name' => 'Campylopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '453',
            'scientific_name' => 'Campylorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);

        BioGender::create([
            'id' => '454',
            'scientific_name' => 'Candoia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Candoiidae')->id
        ]);

        BioGender::create([
            'id' => '455',
            'scientific_name' => 'Canis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Canidae')->id
        ]);

        BioGender::create([
            'id' => '456',
            'scientific_name' => 'Cantharus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);

        BioGender::create([
            'id' => '457',
            'scientific_name' => 'Cantherhines',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);

        BioGender::create([
            'id' => '458',
            'scientific_name' => 'Canthidermis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);

        BioGender::create([
            'id' => '459',
            'scientific_name' => 'Canthigaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetraodontidae')->id
        ]);

        BioGender::create([
            'id' => '460',
            'scientific_name' => 'Cantorchilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);

        BioGender::create([
            'id' => '461',
            'scientific_name' => 'Caouana',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '462',
            'scientific_name' => 'Capra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bovidae')->id
        ]);

        BioGender::create([
            'id' => '463',
            'scientific_name' => 'Caprimulgus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);

        BioGender::create([
            'id' => '464',
            'scientific_name' => 'Capromys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Capromyidae')->id
        ]);

        BioGender::create([
            'id' => '465',
            'scientific_name' => 'Caracara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);

        BioGender::create([
            'id' => '466',
            'scientific_name' => 'Carangoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '467',
            'scientific_name' => 'Carangus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '468',
            'scientific_name' => 'Caranx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '469',
            'scientific_name' => 'Carapus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carapidae')->id
        ]);

        BioGender::create([
            'id' => '470',
            'scientific_name' => 'Carassius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '471',
            'scientific_name' => 'Carcharhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);

        BioGender::create([
            'id' => '472',
            'scientific_name' => 'Carcharias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontaspididae')->id
        ]);

        BioGender::create([
            'id' => '473',
            'scientific_name' => 'Carcharodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lamnidae')->id
        ]);

        BioGender::create([
            'id' => '474',
            'scientific_name' => 'Cardellina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);

        BioGender::create([
            'id' => '475',
            'scientific_name' => 'Cardinalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);

        BioGender::create([
            'id' => '476',
            'scientific_name' => 'Carduelis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);

        BioGender::create([
            'id' => '477',
            'scientific_name' => 'Careproctus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Liparidae')->id
        ]);

        BioGender::create([
            'id' => '478',
            'scientific_name' => 'Caretta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '479',
            'scientific_name' => 'Cariacus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);

        BioGender::create([
            'id' => '480',
            'scientific_name' => 'Caribrhegma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '481',
            'scientific_name' => 'Caristius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caristiidae')->id
        ]);

        BioGender::create([
            'id' => '482',
            'scientific_name' => 'Carlhubbsia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);

        BioGender::create([
            'id' => '483',
            'scientific_name' => 'Carnegiella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gasteropelecidae')->id
        ]);

        BioGender::create([
            'id' => '484',
            'scientific_name' => 'Carollia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '485',
            'scientific_name' => 'Carpiodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);

        BioGender::create([
            'id' => '486',
            'scientific_name' => 'Carpodacus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);

        BioGender::create([
            'id' => '487',
            'scientific_name' => 'Caryothraustes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);

        BioGender::create([
            'id' => '488',
            'scientific_name' => 'Casmerodius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '489',
            'scientific_name' => 'Cassiculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '490',
            'scientific_name' => 'Castor',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Castoridae')->id
        ]);

        BioGender::create([
            'id' => '491',
            'scientific_name' => 'Cataetyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);

        BioGender::create([
            'id' => '492',
            'scientific_name' => 'Cathartes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cathartidae')->id
        ]);

        BioGender::create([
            'id' => '493',
            'scientific_name' => 'Catharus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);

        BioGender::create([
            'id' => '494',
            'scientific_name' => 'Catherpes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);

        BioGender::create([
            'id' => '495',
            'scientific_name' => 'Cathorops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '496',
            'scientific_name' => 'Catonotus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);

        BioGender::create([
            'id' => '497',
            'scientific_name' => 'Catostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '498',
            'scientific_name' => 'Catostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);

        BioGender::create([
            'id' => '499',
            'scientific_name' => 'Catulus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);

        BioGender::create([
            'id' => '500',
            'scientific_name' => 'Caudisona',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '501',
            'scientific_name' => 'Caulolatilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);

        BioGender::create([
            'id' => '502',
            'scientific_name' => 'Caulolepis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anoplogastridae')->id
        ]);

        BioGender::create([
            'id' => '503',
            'scientific_name' => 'Cauphias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '504',
            'scientific_name' => 'Cebidichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stichaeidae')->id
        ]);

        BioGender::create([
            'id' => '505',
            'scientific_name' => 'Celestus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '506',
            'scientific_name' => 'Celeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);

        BioGender::create([
            'id' => '507',
            'scientific_name' => 'Cenaspis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '508',
            'scientific_name' => 'Centriscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centriscidae')->id
        ]);

        BioGender::create([
            'id' => '509',
            'scientific_name' => 'Centristhmus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '510',
            'scientific_name' => 'Centrobranchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '511',
            'scientific_name' => 'Centrolene',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrolenidae')->id
        ]);

        BioGender::create([
            'id' => '512',
            'scientific_name' => 'Centrolenella',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrolenidae')->id
        ]);

        BioGender::create([
            'id' => '513',
            'scientific_name' => 'Centronycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);

        BioGender::create([
            'id' => '514',
            'scientific_name' => 'Centronyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '515',
            'scientific_name' => 'Centrophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrophoridae')->id
        ]);

        BioGender::create([
            'id' => '516',
            'scientific_name' => 'Centropomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centropomidae')->id
        ]);

        BioGender::create([
            'id' => '517',
            'scientific_name' => 'Centropristis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '518',
            'scientific_name' => 'Centropyge',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacanthidae')->id
        ]);

        BioGender::create([
            'id' => '519',
            'scientific_name' => 'Centroscyllium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Etmopteridae')->id
        ]);

        BioGender::create([
            'id' => '520',
            'scientific_name' => 'Centroscymnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Somniosidae')->id
        ]);

        BioGender::create([
            'id' => '521',
            'scientific_name' => 'Centurio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '522',
            'scientific_name' => 'Cephalacanthus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactylopteridae')->id
        ]);

        BioGender::create([
            'id' => '523',
            'scientific_name' => 'Cephalochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '524',
            'scientific_name' => 'Cephalopholis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '525',
            'scientific_name' => 'Cephaloptera',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '526',
            'scientific_name' => 'Cephalopterus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '527',
            'scientific_name' => 'Cephaloscyllium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);

        BioGender::create([
            'id' => '528',
            'scientific_name' => 'Cephalurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);

        BioGender::create([
            'id' => '529',
            'scientific_name' => 'Cepphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);

        BioGender::create([
            'id' => '530',
            'scientific_name' => 'Ceratichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '531',
            'scientific_name' => 'Ceratobatis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '532',
            'scientific_name' => 'Ceratopipra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pipridae')->id
        ]);

        BioGender::create([
            'id' => '533',
            'scientific_name' => 'Ceratoscopelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '534',
            'scientific_name' => 'Cercoleptes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);

        BioGender::create([
            'id' => '535',
            'scientific_name' => 'Cercomacra',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);

        BioGender::create([
            'id' => '536',
            'scientific_name' => 'Cercomacroides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);

        BioGender::create([
            'id' => '537',
            'scientific_name' => 'Cerdale',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microdesmidae')->id
        ]);

        BioGender::create([
            'id' => '538',
            'scientific_name' => 'Cerorhinca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);

        BioGender::create([
            'id' => '539',
            'scientific_name' => 'Cerrophidion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '540',
            'scientific_name' => 'Certhia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Certhiidae')->id
        ]);

        BioGender::create([
            'id' => '541',
            'scientific_name' => 'Cervus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);

        BioGender::create([
            'id' => '542',
            'scientific_name' => 'Ceryle',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcedinidae')->id
        ]);

        BioGender::create([
            'id' => '543',
            'scientific_name' => 'Cestracion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heterodontidae')->id
        ]);

        BioGender::create([
            'id' => '544',
            'scientific_name' => 'Cetengraulis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);

        BioGender::create([
            'id' => '545',
            'scientific_name' => 'Cetorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cetorhinidae')->id
        ]);

        BioGender::create([
            'id' => '546',
            'scientific_name' => 'Chaenobryttus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);

        BioGender::create([
            'id' => '547',
            'scientific_name' => 'Chaenomugil',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);

        BioGender::create([
            'id' => '548',
            'scientific_name' => 'Chaenopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '549',
            'scientific_name' => 'Chaetodipterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ephippidae')->id
        ]);

        BioGender::create([
            'id' => '550',
            'scientific_name' => 'Chaetodipus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);

        BioGender::create([
            'id' => '551',
            'scientific_name' => 'Chaetodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);

        BioGender::create([
            'id' => '552',
            'scientific_name' => 'Chaetura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apodidae')->id
        ]);

        BioGender::create([
            'id' => '553',
            'scientific_name' => 'Chalceus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chalceidae')->id
        ]);

        BioGender::create([
            'id' => '554',
            'scientific_name' => 'Chamaea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sylviidae')->id
        ]);

        BioGender::create([
            'id' => '555',
            'scientific_name' => 'Chamaeleo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chamaeleonidae')->id
        ]);

        BioGender::create([
            'id' => '556',
            'scientific_name' => 'Chamaeleopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corytophanidae')->id
        ]);

        BioGender::create([
            'id' => '557',
            'scientific_name' => 'Chamaesaura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cordylidae')->id
        ]);

        BioGender::create([
            'id' => '558',
            'scientific_name' => 'Channa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Channidae')->id
        ]);

        BioGender::create([
            'id' => '559',
            'scientific_name' => 'Channomuraena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);

        BioGender::create([
            'id' => '560',
            'scientific_name' => 'Chanos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chanidae')->id
        ]);

        BioGender::create([
            'id' => '561',
            'scientific_name' => 'Chapalichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '562',
            'scientific_name' => 'Characodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);

        BioGender::create([
            'id' => '563',
            'scientific_name' => 'Charadrahyla',
            'common_name' => '"Ranas de arroyo, Ranitas del barranco, Ravine treefrogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '564',
            'scientific_name' => 'Charadrius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charadriidae')->id
        ]);

        BioGender::create([
            'id' => '565',
            'scientific_name' => 'Charina',
            'common_name' => 'Boas enanas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charinidae')->id
        ]);

        BioGender::create([
            'id' => '566',
            'scientific_name' => 'Chascanopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);

        BioGender::create([
            'id' => '567',
            'scientific_name' => 'Chasmodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '568',
            'scientific_name' => 'Chatoessus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '569',
            'scientific_name' => 'Chauliodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);

        BioGender::create([
            'id' => '570',
            'scientific_name' => 'Chaunax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaunacidae')->id
        ]);

        BioGender::create([
            'id' => '571',
            'scientific_name' => 'Chaunus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);

        BioGender::create([
            'id' => '572',
            'scientific_name' => 'Cheilodipterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '573',
            'scientific_name' => 'Cheilopogon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);

        BioGender::create([
            'id' => '574',
            'scientific_name' => 'Cheilotrema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '575',
            'scientific_name' => 'Cheliurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);

        BioGender::create([
            'id' => '576',
            'scientific_name' => 'Chelmon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);

        BioGender::create([
            'id' => '577',
            'scientific_name' => 'Chelone',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '578',
            'scientific_name' => 'Chelonia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '579',
            'scientific_name' => 'Chelonura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);

        BioGender::create([
            'id' => '580',
            'scientific_name' => 'Chelopus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '581',
            'scientific_name' => 'Chelydra',
            'common_name' => 'Tortugas lagarto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);

        BioGender::create([
            'id' => '582',
            'scientific_name' => 'Chemelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);

        BioGender::create([
            'id' => '583',
            'scientific_name' => 'Chen',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '584',
            'scientific_name' => 'Cheonda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '585',
            'scientific_name' => 'Chersodromus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '586',
            'scientific_name' => 'Cherublemma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);

        BioGender::create([
            'id' => '587',
            'scientific_name' => 'Chiapaheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '588',
            'scientific_name' => 'Chiasmodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chiasmodontidae')->id
        ]);

        BioGender::create([
            'id' => '589',
            'scientific_name' => 'Chilara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);

        BioGender::create([
            'id' => '590',
            'scientific_name' => 'Chiloconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '591',
            'scientific_name' => 'Chilomeniscus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '592',
            'scientific_name' => 'Chilomycterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diodontidae')->id
        ]);

        BioGender::create([
            'id' => '593',
            'scientific_name' => 'Chilorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlopsidae')->id
        ]);

        BioGender::create([
            'id' => '594',
            'scientific_name' => 'Chimaera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chimaeridae')->id
        ]);

        BioGender::create([
            'id' => '595',
            'scientific_name' => 'Chincha',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mephitidae')->id
        ]);

        BioGender::create([
            'id' => '596',
            'scientific_name' => 'Chindongo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '597',
            'scientific_name' => 'Chionactis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '598',
            'scientific_name' => 'Chiroderma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '599',
            'scientific_name' => 'Chironectes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);

        BioGender::create([
            'id' => '600',
            'scientific_name' => 'Chironectes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);

        BioGender::create([
            'id' => '601',
            'scientific_name' => 'Chiropterotriton',
            'common_name' => '"Flat-footed salamanders, Salamandras pies planos, Tlaconetes mexicanos"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '602',
            'scientific_name' => 'Chirostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '603',
            'scientific_name' => 'Chirotes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);

        BioGender::create([
            'id' => '604',
            'scientific_name' => 'Chiroxiphia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pipridae')->id
        ]);

        BioGender::create([
            'id' => '605',
            'scientific_name' => 'Chirus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexagrammidae')->id
        ]);

        BioGender::create([
            'id' => '606',
            'scientific_name' => 'Chitala',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Notopteridae')->id
        ]);

        BioGender::create([
            'id' => '607',
            'scientific_name' => 'Chitonotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);

        BioGender::create([
            'id' => '608',
            'scientific_name' => 'Chlamydoselachus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlamydoselachidae')->id
        ]);

        BioGender::create([
            'id' => '609',
            'scientific_name' => 'Chlidonias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);

        BioGender::create([
            'id' => '610',
            'scientific_name' => 'Chlopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlopsidae')->id
        ]);

        BioGender::create([
            'id' => '611',
            'scientific_name' => 'Chloremys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermatemydidae')->id
        ]);

        BioGender::create([
            'id' => '612',
            'scientific_name' => 'Chlorestes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '613',
            'scientific_name' => 'Chloroceryle',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcedinidae')->id
        ]);

        BioGender::create([
            'id' => '614',
            'scientific_name' => 'Chlorophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);

        BioGender::create([
            'id' => '615',
            'scientific_name' => 'Chlorophonia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);

        BioGender::create([
            'id' => '616',
            'scientific_name' => 'Chlorophthalmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlorophthalmidae')->id
        ]);

        BioGender::create([
            'id' => '617',
            'scientific_name' => 'Chloroscombrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '618',
            'scientific_name' => 'Chlorospingus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '619',
            'scientific_name' => 'Chlorostilbon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '620',
            'scientific_name' => 'Chlorurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);

        BioGender::create([
            'id' => '621',
            'scientific_name' => 'Choeroniscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '622',
            'scientific_name' => 'Choeronycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '623',
            'scientific_name' => 'Chondestes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);

        BioGender::create([
            'id' => '624',
            'scientific_name' => 'Chondrohierax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '625',
            'scientific_name' => 'Choranthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '626',
            'scientific_name' => 'Chordeiles',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);

        BioGender::create([
            'id' => '627',
            'scientific_name' => 'Chorinemus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '628',
            'scientific_name' => 'Chorististium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '629',
            'scientific_name' => 'Chrinorhinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moringuidae')->id
        ]);

        BioGender::create([
            'id' => '630',
            'scientific_name' => 'Chriodorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiramphidae')->id
        ]);

        BioGender::create([
            'id' => '631',
            'scientific_name' => 'Chriolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '632',
            'scientific_name' => 'Chriomitra',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);

        BioGender::create([
            'id' => '633',
            'scientific_name' => 'Chroicocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);

        BioGender::create([
            'id' => '634',
            'scientific_name' => 'Chromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);

        BioGender::create([
            'id' => '635',
            'scientific_name' => 'Chromobotia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Botiidae')->id
        ]);

        BioGender::create([
            'id' => '636',
            'scientific_name' => 'Chrotopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '637',
            'scientific_name' => 'Chrysemys',
            'common_name' => 'Tortugas doradas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '638',
            'scientific_name' => 'Chuco',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '639',
            'scientific_name' => 'Ciccaba',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);

        BioGender::create([
            'id' => '640',
            'scientific_name' => 'Cichlasoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '641',
            'scientific_name' => 'Cichlaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '642',
            'scientific_name' => 'Cichlosoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '643',
            'scientific_name' => 'Cincelichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '644',
            'scientific_name' => 'Cinclus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cinclidae')->id
        ]);

        BioGender::create([
            'id' => '645',
            'scientific_name' => 'Cinosternon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);

        BioGender::create([
            'id' => '646',
            'scientific_name' => 'Cinosternum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);

        BioGender::create([
            'id' => '647',
            'scientific_name' => 'Ciona',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cionidae')->id
        ]);

        BioGender::create([
            'id' => '648',
            'scientific_name' => 'Circus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '649',
            'scientific_name' => 'Cirrhigaleus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Squalidae')->id
        ]);

        BioGender::create([
            'id' => '650',
            'scientific_name' => 'Cirrhitichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cirrhitidae')->id
        ]);

        BioGender::create([
            'id' => '651',
            'scientific_name' => 'Cirrhitus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cirrhitidae')->id
        ]);

        BioGender::create([
            'id' => '652',
            'scientific_name' => 'Cirriemblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '653',
            'scientific_name' => 'Cistothorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);

        BioGender::create([
            'id' => '654',
            'scientific_name' => 'Cistudo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '655',
            'scientific_name' => 'Citellus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);

        BioGender::create([
            'id' => '656',
            'scientific_name' => 'Citharichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);

        BioGender::create([
            'id' => '657',
            'scientific_name' => 'Citula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '658',
            'scientific_name' => 'Clangula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '659',
            'scientific_name' => 'Claravis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);

        BioGender::create([
            'id' => '660',
            'scientific_name' => 'Clarias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clariidae')->id
        ]);

        BioGender::create([
            'id' => '661',
            'scientific_name' => 'Clarkichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microdesmidae')->id
        ]);

        BioGender::create([
            'id' => '662',
            'scientific_name' => 'Claudius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Staurotypidae')->id
        ]);

        BioGender::create([
            'id' => '663',
            'scientific_name' => 'Clavelina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clavelinidae')->id
        ]);

        BioGender::create([
            'id' => '664',
            'scientific_name' => 'Clelia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '665',
            'scientific_name' => 'Clemmys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '666',
            'scientific_name' => 'Clepticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '667',
            'scientific_name' => 'Clevelandia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '668',
            'scientific_name' => 'Clibanornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);

        BioGender::create([
            'id' => '669',
            'scientific_name' => 'Clinocottus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);

        BioGender::create([
            'id' => '670',
            'scientific_name' => 'Clinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clinidae')->id
        ]);

        BioGender::create([
            'id' => '671',
            'scientific_name' => 'Cliola',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '672',
            'scientific_name' => 'Clupea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '673',
            'scientific_name' => 'Cnemidophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);

        BioGender::create([
            'id' => '674',
            'scientific_name' => 'Coccorella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Evermannellidae')->id
        ]);

        BioGender::create([
            'id' => '675',
            'scientific_name' => 'Coccothraustes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);

        BioGender::create([
            'id' => '676',
            'scientific_name' => 'Coccyzus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);

        BioGender::create([
            'id' => '677',
            'scientific_name' => 'Cochlearius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '678',
            'scientific_name' => 'Cochlognathus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '679',
            'scientific_name' => 'Codoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '680',
            'scientific_name' => 'Coelogenys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuniculidae')->id
        ]);

        BioGender::create([
            'id' => '681',
            'scientific_name' => 'Coelorinchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);

        BioGender::create([
            'id' => '682',
            'scientific_name' => 'Coendou',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Erethizontidae')->id
        ]);

        BioGender::create([
            'id' => '683',
            'scientific_name' => 'Coereba',
            'common_name' => '"Bananaquit, Reinita-mielera"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);

        BioGender::create([
            'id' => '684',
            'scientific_name' => 'Cokeridia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);

        BioGender::create([
            'id' => '685',
            'scientific_name' => 'Colaptes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);

        BioGender::create([
            'id' => '686',
            'scientific_name' => 'Coleonyx',
            'common_name' => 'Gecos rayados',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eublepharidae')->id
        ]);

        BioGender::create([
            'id' => '687',
            'scientific_name' => 'Colibri',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '688',
            'scientific_name' => 'Colinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);

        BioGender::create([
            'id' => '689',
            'scientific_name' => 'Coloconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Derichthyidae')->id
        ]);

        BioGender::create([
            'id' => '690',
            'scientific_name' => 'Cololabis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scomberesocidae')->id
        ]);

        BioGender::create([
            'id' => '691',
            'scientific_name' => 'Colophrys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '692',
            'scientific_name' => 'Colossoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrasalmidae')->id
        ]);

        BioGender::create([
            'id' => '693',
            'scientific_name' => 'Colpichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);

        BioGender::create([
            'id' => '694',
            'scientific_name' => 'Colpochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);

        BioGender::create([
            'id' => '695',
            'scientific_name' => 'Coluber',
            'common_name' => 'Culebras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '696',
            'scientific_name' => 'Columba',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);

        BioGender::create([
            'id' => '697',
            'scientific_name' => 'Columbina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);

        BioGender::create([
            'id' => '698',
            'scientific_name' => 'Comastes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '699',
            'scientific_name' => 'Conepatus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mephitidae')->id
        ]);

        BioGender::create([
            'id' => '700',
            'scientific_name' => 'Conger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '701',
            'scientific_name' => 'Congermuraena',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '702',
            'scientific_name' => 'Congrellus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '703',
            'scientific_name' => 'Congrina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);

        BioGender::create([
            'id' => '704',
            'scientific_name' => 'Coniophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '705',
            'scientific_name' => 'Conocara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);

        BioGender::create([
            'id' => '706',
            'scientific_name' => 'Conodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);

        BioGender::create([
            'id' => '707',
            'scientific_name' => 'Conophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '708',
            'scientific_name' => 'Conopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '709',
            'scientific_name' => 'Conorhynchos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);

        BioGender::create([
            'id' => '710',
            'scientific_name' => 'Contia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '711',
            'scientific_name' => 'Contopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '712',
            'scientific_name' => 'Conurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '713',
            'scientific_name' => 'Cookeolus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Priacanthidae')->id
        ]);

        BioGender::create([
            'id' => '714',
            'scientific_name' => 'Copadichromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '715',
            'scientific_name' => 'Cophosaurus',
            'common_name' => 'Lagartijas sordas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);

        BioGender::create([
            'id' => '716',
            'scientific_name' => 'Coptodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '717',
            'scientific_name' => 'Coragyps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cathartidae')->id
        ]);

        BioGender::create([
            'id' => '718',
            'scientific_name' => 'Coralliozetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '719',
            'scientific_name' => 'Corallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Boidae')->id
        ]);

        BioGender::create([
            'id' => '720',
            'scientific_name' => 'Cordylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cordylidae')->id
        ]);

        BioGender::create([
            'id' => '721',
            'scientific_name' => 'Corella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corellidae')->id
        ]);

        BioGender::create([
            'id' => '722',
            'scientific_name' => 'Coris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '723',
            'scientific_name' => 'Coriudo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);

        BioGender::create([
            'id' => '724',
            'scientific_name' => 'Coronella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '725',
            'scientific_name' => 'Corsira',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);

        BioGender::create([
            'id' => '726',
            'scientific_name' => 'Corvina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '727',
            'scientific_name' => 'Corvula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '728',
            'scientific_name' => 'Corvus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '729',
            'scientific_name' => 'Corydoras',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Callichthyidae')->id
        ]);

        BioGender::create([
            'id' => '730',
            'scientific_name' => 'Corynorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);

        BioGender::create([
            'id' => '731',
            'scientific_name' => 'Coryphaena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Coryphaenidae')->id
        ]);

        BioGender::create([
            'id' => '732',
            'scientific_name' => 'Coryphaenoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);

        BioGender::create([
            'id' => '733',
            'scientific_name' => 'Coryphodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '734',
            'scientific_name' => 'Coryphopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '735',
            'scientific_name' => 'Corythoichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '736',
            'scientific_name' => 'Corytophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corytophanidae')->id
        ]);

        BioGender::create([
            'id' => '737',
            'scientific_name' => 'Cosmocampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '738',
            'scientific_name' => 'Cossyphus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '739',
            'scientific_name' => 'Cotinga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cotingidae')->id
        ]);

        BioGender::create([
            'id' => '740',
            'scientific_name' => 'Coturnicops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);

        BioGender::create([
            'id' => '741',
            'scientific_name' => 'Cotylis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '742',
            'scientific_name' => 'Cotylopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '743',
            'scientific_name' => 'Cratogeomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);

        BioGender::create([
            'id' => '744',
            'scientific_name' => 'Craugastor',
            'common_name' => '"Northern rainfrogs, Ranas septentrionales de la lluvia, Ranitas de hojarasca"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Craugastoridae')->id
        ]);

        BioGender::create([
            'id' => '745',
            'scientific_name' => 'Crax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cracidae')->id
        ]);

        BioGender::create([
            'id' => '746',
            'scientific_name' => 'Cremnobates',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '747',
            'scientific_name' => 'Cribroheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '748',
            'scientific_name' => 'Cricetodipus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);

        BioGender::create([
            'id' => '749',
            'scientific_name' => 'Crocodilichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);

        BioGender::create([
            'id' => '750',
            'scientific_name' => 'Crocodilus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Crocodylidae')->id
        ]);

        BioGender::create([
            'id' => '751',
            'scientific_name' => 'Crocodylus',
            'common_name' => 'Cocodrilos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Crocodylidae')->id
        ]);

        BioGender::create([
            'id' => '752',
            'scientific_name' => 'Crossochir',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '753',
            'scientific_name' => 'Crotalophorus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '754',
            'scientific_name' => 'Crotalopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '755',
            'scientific_name' => 'Crotalus',
            'common_name' => 'Cascabeles',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);

        BioGender::create([
            'id' => '756',
            'scientific_name' => 'Crotaphopeltis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '757',
            'scientific_name' => 'Crotaphytus',
            'common_name' => 'Lagartijas de collar',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Crotaphytidae')->id
        ]);

        BioGender::create([
            'id' => '758',
            'scientific_name' => 'Crotophaga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);

        BioGender::create([
            'id' => '759',
            'scientific_name' => 'Cruriraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '760',
            'scientific_name' => 'Cryophis',
            'common_name' => 'Culebra de bosque mesófilo',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '761',
            'scientific_name' => 'Cryptochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);

        BioGender::create([
            'id' => '762',
            'scientific_name' => 'Cryptoheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '763',
            'scientific_name' => 'Cryptopsaras',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ceratiidae')->id
        ]);

        BioGender::create([
            'id' => '764',
            'scientific_name' => 'Cryptopterygium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '765',
            'scientific_name' => 'Cryptotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);

        BioGender::create([
            'id' => '766',
            'scientific_name' => 'Cryptotomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);

        BioGender::create([
            'id' => '767',
            'scientific_name' => 'Cryptotrema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '768',
            'scientific_name' => 'Cryptotriton',
            'common_name' => '"Hidden salamanders, Salamandras ocultas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '769',
            'scientific_name' => 'Crypturellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tinamidae')->id
        ]);

        BioGender::create([
            'id' => '770',
            'scientific_name' => 'Ctenochaetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);

        BioGender::create([
            'id' => '771',
            'scientific_name' => 'Ctenogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '772',
            'scientific_name' => 'Ctenopharyngodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '773',
            'scientific_name' => 'Ctenosaura',
            'common_name' => '"Garrobos, Iguanas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);

        BioGender::create([
            'id' => '774',
            'scientific_name' => 'Cualac',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);

        BioGender::create([
            'id' => '775',
            'scientific_name' => 'Cubiceps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nomeidae')->id
        ]);

        BioGender::create([
            'id' => '776',
            'scientific_name' => 'Cubina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xenosauridae')->id
        ]);

        BioGender::create([
            'id' => '777',
            'scientific_name' => 'Culius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);

        BioGender::create([
            'id' => '778',
            'scientific_name' => 'Cuniculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuniculidae')->id
        ]);

        BioGender::create([
            'id' => '779',
            'scientific_name' => 'Cyanerpes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);

        BioGender::create([
            'id' => '780',
            'scientific_name' => 'Cyanocitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '781',
            'scientific_name' => 'Cyanocompsa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);

        BioGender::create([
            'id' => '782',
            'scientific_name' => 'Cyanocorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '783',
            'scientific_name' => 'Cyanoliseus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);

        BioGender::create([
            'id' => '784',
            'scientific_name' => 'Cyanoloxia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);

        BioGender::create([
            'id' => '785',
            'scientific_name' => 'Cyanolyca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);

        BioGender::create([
            'id' => '786',
            'scientific_name' => 'Cyathopharynx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '787',
            'scientific_name' => 'Cybium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);

        BioGender::create([
            'id' => '788',
            'scientific_name' => 'Cyclarhis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);

        BioGender::create([
            'id' => '789',
            'scientific_name' => 'Cycleptus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);

        BioGender::create([
            'id' => '790',
            'scientific_name' => 'Cyclichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diodontidae')->id
        ]);

        BioGender::create([
            'id' => '791',
            'scientific_name' => 'Cyclopes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyclopedidae')->id
        ]);

        BioGender::create([
            'id' => '792',
            'scientific_name' => 'Cyclopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);

        BioGender::create([
            'id' => '793',
            'scientific_name' => 'Cyclosalpa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);

        BioGender::create([
            'id' => '794',
            'scientific_name' => 'Cyclothone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);

        BioGender::create([
            'id' => '795',
            'scientific_name' => 'Cyclura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);

        BioGender::create([
            'id' => '796',
            'scientific_name' => 'Cyema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyematidae')->id
        ]);

        BioGender::create([
            'id' => '797',
            'scientific_name' => 'Cygnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '798',
            'scientific_name' => 'Cymatogaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '799',
            'scientific_name' => 'Cynanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '800',
            'scientific_name' => 'Cynicoglossus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);

        BioGender::create([
            'id' => '801',
            'scientific_name' => 'Cynodonichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rivulidae')->id
        ]);

        BioGender::create([
            'id' => '802',
            'scientific_name' => 'Cynomops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);

        BioGender::create([
            'id' => '803',
            'scientific_name' => 'Cynomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);

        BioGender::create([
            'id' => '804',
            'scientific_name' => 'Cynoponticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenesocidae')->id
        ]);

        BioGender::create([
            'id' => '805',
            'scientific_name' => 'Cynoscion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '806',
            'scientific_name' => 'Cyprinella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '807',
            'scientific_name' => 'Cyprinodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);

        BioGender::create([
            'id' => '808',
            'scientific_name' => 'Cyprinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '809',
            'scientific_name' => 'Cypseloides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apodidae')->id
        ]);

        BioGender::create([
            'id' => '810',
            'scientific_name' => 'Cypselurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);

        BioGender::create([
            'id' => '811',
            'scientific_name' => 'Cyrtocara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '812',
            'scientific_name' => 'Cyrtonyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);

        BioGender::create([
            'id' => '813',
            'scientific_name' => 'Cystignathus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);

        BioGender::create([
            'id' => '814',
            'scientific_name' => 'Cystodytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polycitoridae')->id
        ]);

        BioGender::create([
            'id' => '815',
            'scientific_name' => 'Cyttopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parazenidae')->id
        ]);

        BioGender::create([
            'id' => '816',
            'scientific_name' => 'Cyttus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyttidae')->id
        ]);

        BioGender::create([
            'id' => '817',
            'scientific_name' => 'Dactylagnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);

        BioGender::create([
            'id' => '818',
            'scientific_name' => 'Dactyloa',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloidae')->id
        ]);

        BioGender::create([
            'id' => '819',
            'scientific_name' => 'Dactylobatus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '820',
            'scientific_name' => 'Dactylopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactylopteridae')->id
        ]);

        BioGender::create([
            'id' => '821',
            'scientific_name' => 'Dactylortyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);

        BioGender::create([
            'id' => '822',
            'scientific_name' => 'Dactyloscopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);

        BioGender::create([
            'id' => '823',
            'scientific_name' => 'Dactylostomias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);

        BioGender::create([
            'id' => '824',
            'scientific_name' => 'Dajaus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);

        BioGender::create([
            'id' => '825',
            'scientific_name' => 'Dalatias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dalatiidae')->id
        ]);

        BioGender::create([
            'id' => '826',
            'scientific_name' => 'Dama',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);

        BioGender::create([
            'id' => '827',
            'scientific_name' => 'Damalichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '828',
            'scientific_name' => 'Danaphos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);

        BioGender::create([
            'id' => '829',
            'scientific_name' => 'Danichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);

        BioGender::create([
            'id' => '830',
            'scientific_name' => 'Danio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '831',
            'scientific_name' => 'Dasyatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasyatidae')->id
        ]);

        BioGender::create([
            'id' => '832',
            'scientific_name' => 'Dasybatis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '833',
            'scientific_name' => 'Dasyprocta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasyproctidae')->id
        ]);

        BioGender::create([
            'id' => '834',
            'scientific_name' => 'Dasypus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasypodidae')->id
        ]);

        BioGender::create([
            'id' => '835',
            'scientific_name' => 'Dasyscopelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '836',
            'scientific_name' => 'Decapterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '837',
            'scientific_name' => 'Deckertichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);

        BioGender::create([
            'id' => '838',
            'scientific_name' => 'Decodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '839',
            'scientific_name' => 'Dekaya',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);

        BioGender::create([
            'id' => '840',
            'scientific_name' => 'Delphinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);

        BioGender::create([
            'id' => '841',
            'scientific_name' => 'Deltarhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '842',
            'scientific_name' => 'Dendroaspis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);

        BioGender::create([
            'id' => '843',
            'scientific_name' => 'Dendrocincla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);

        BioGender::create([
            'id' => '844',
            'scientific_name' => 'Dendrocolaptes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);

        BioGender::create([
            'id' => '845',
            'scientific_name' => 'Dendrocygna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);

        BioGender::create([
            'id' => '846',
            'scientific_name' => 'Dendroica',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);

        BioGender::create([
            'id' => '847',
            'scientific_name' => 'Dendrophidion',
            'common_name' => 'Culebritas de bosque',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '848',
            'scientific_name' => 'Dendropsophus',
            'common_name' => '"Ranas grillo enanas, Ranitas amarillas, Yellow treefrogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '849',
            'scientific_name' => 'Dendrortyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);

        BioGender::create([
            'id' => '850',
            'scientific_name' => 'Dendrotriton',
            'common_name' => '"Bromeliad salamanders, Salamandras de las bromelias, Tlaconetes de bromelias"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '851',
            'scientific_name' => 'Derichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Derichthyidae')->id
        ]);

        BioGender::create([
            'id' => '852',
            'scientific_name' => 'Derilissus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);

        BioGender::create([
            'id' => '853',
            'scientific_name' => 'Dermanura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '854',
            'scientific_name' => 'Dermatemys',
            'common_name' => 'Tortugas blancas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermatemydidae')->id
        ]);

        BioGender::create([
            'id' => '855',
            'scientific_name' => 'Dermatochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);

        BioGender::create([
            'id' => '856',
            'scientific_name' => 'Dermatolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '857',
            'scientific_name' => 'Dermochelis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);

        BioGender::create([
            'id' => '858',
            'scientific_name' => 'Dermochelys',
            'common_name' => 'Tortugas laud',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);

        BioGender::create([
            'id' => '859',
            'scientific_name' => 'Dermogenys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zenarchopteridae')->id
        ]);

        BioGender::create([
            'id' => '860',
            'scientific_name' => 'Dermonotus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormoopidae')->id
        ]);

        BioGender::create([
            'id' => '861',
            'scientific_name' => 'Dermophis',
            'common_name' => '"Cecilias, Cecílidos, Mexican caecilians, Neotropical caecilians"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermophiidae')->id
        ]);

        BioGender::create([
            'id' => '862',
            'scientific_name' => 'Desmiostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);

        BioGender::create([
            'id' => '863',
            'scientific_name' => 'Desmodema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachipteridae')->id
        ]);

        BioGender::create([
            'id' => '864',
            'scientific_name' => 'Desmodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '865',
            'scientific_name' => 'Desmodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '866',
            'scientific_name' => 'Deuteracanthus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);

        BioGender::create([
            'id' => '867',
            'scientific_name' => 'Devisia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);

        BioGender::create([
            'id' => '868',
            'scientific_name' => 'Diabasis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);

        BioGender::create([
            'id' => '869',
            'scientific_name' => 'Diacope',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);

        BioGender::create([
            'id' => '870',
            'scientific_name' => 'Diadophis',
            'common_name' => 'Culebras panza roja',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '871',
            'scientific_name' => 'Diaemus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '872',
            'scientific_name' => 'Diaglena',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '873',
            'scientific_name' => 'Dialommus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);

        BioGender::create([
            'id' => '874',
            'scientific_name' => 'Diaphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '875',
            'scientific_name' => 'Diapterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);

        BioGender::create([
            'id' => '876',
            'scientific_name' => 'Dicerobatis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);

        BioGender::create([
            'id' => '877',
            'scientific_name' => 'Dicerophallus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);

        BioGender::create([
            'id' => '878',
            'scientific_name' => 'Diclidurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);

        BioGender::create([
            'id' => '879',
            'scientific_name' => 'Dicotyles',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tayassuidae')->id
        ]);

        BioGender::create([
            'id' => '880',
            'scientific_name' => 'Didelphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);

        BioGender::create([
            'id' => '881',
            'scientific_name' => 'Didemnum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didemnidae')->id
        ]);

        BioGender::create([
            'id' => '882',
            'scientific_name' => 'Didicla',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '883',
            'scientific_name' => 'Diemyctylus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salamandridae')->id
        ]);

        BioGender::create([
            'id' => '884',
            'scientific_name' => 'Diglossa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);

        BioGender::create([
            'id' => '885',
            'scientific_name' => 'Dimidiochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);

        BioGender::create([
            'id' => '886',
            'scientific_name' => 'Diodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diodontidae')->id
        ]);

        BioGender::create([
            'id' => '887',
            'scientific_name' => 'Diogenichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '888',
            'scientific_name' => 'Dionda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);

        BioGender::create([
            'id' => '889',
            'scientific_name' => 'Diphylla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '890',
            'scientific_name' => 'Diplacanthopoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);

        BioGender::create([
            'id' => '891',
            'scientific_name' => 'Diplectrum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);

        BioGender::create([
            'id' => '892',
            'scientific_name' => 'Diplesion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);

        BioGender::create([
            'id' => '893',
            'scientific_name' => 'Diplobatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Narcinidae')->id
        ]);

        BioGender::create([
            'id' => '894',
            'scientific_name' => 'Diplodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diplodactylidae')->id
        ]);

        BioGender::create([
            'id' => '895',
            'scientific_name' => 'Diplodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);

        BioGender::create([
            'id' => '896',
            'scientific_name' => 'Diploglossus',
            'common_name' => 'Lagartijas doble lengua',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '897',
            'scientific_name' => 'Diplophos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);

        BioGender::create([
            'id' => '898',
            'scientific_name' => 'Diplosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didemnidae')->id
        ]);

        BioGender::create([
            'id' => '899',
            'scientific_name' => 'Diplospinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);

        BioGender::create([
            'id' => '900',
            'scientific_name' => 'Dipodomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);

        BioGender::create([
            'id' => '901',
            'scientific_name' => 'Dipodops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);

        BioGender::create([
            'id' => '902',
            'scientific_name' => 'Dipsas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '903',
            'scientific_name' => 'Dipsosaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);

        BioGender::create([
            'id' => '904',
            'scientific_name' => 'Dipterodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);

        BioGender::create([
            'id' => '905',
            'scientific_name' => 'Dipturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);

        BioGender::create([
            'id' => '906',
            'scientific_name' => 'Diretmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diretmidae')->id
        ]);

        BioGender::create([
            'id' => '907',
            'scientific_name' => 'Dirosema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '908',
            'scientific_name' => 'Discopyge',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Narcinidae')->id
        ]);

        BioGender::create([
            'id' => '909',
            'scientific_name' => 'Dissomma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);

        BioGender::create([
            'id' => '910',
            'scientific_name' => 'Distaplia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holozoidae')->id
        ]);

        BioGender::create([
            'id' => '911',
            'scientific_name' => 'Ditrema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '912',
            'scientific_name' => 'Dives',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '913',
            'scientific_name' => 'Dixonina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Albulidae')->id
        ]);

        BioGender::create([
            'id' => '914',
            'scientific_name' => 'Dolichodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chiasmodontidae')->id
        ]);

        BioGender::create([
            'id' => '915',
            'scientific_name' => 'Dolicholagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);

        BioGender::create([
            'id' => '916',
            'scientific_name' => 'Dolichonyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);

        BioGender::create([
            'id' => '917',
            'scientific_name' => 'Doliosaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);

        BioGender::create([
            'id' => '918',
            'scientific_name' => 'Doratonotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);

        BioGender::create([
            'id' => '919',
            'scientific_name' => 'Dorcelaphus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);

        BioGender::create([
            'id' => '920',
            'scientific_name' => 'Doricha',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);

        BioGender::create([
            'id' => '921',
            'scientific_name' => 'Dormitator',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);

        BioGender::create([
            'id' => '922',
            'scientific_name' => 'Dorosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '923',
            'scientific_name' => 'Dorybelone',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);

        BioGender::create([
            'id' => '924',
            'scientific_name' => 'Doryichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '925',
            'scientific_name' => 'Doryrhamphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);

        BioGender::create([
            'id' => '926',
            'scientific_name' => 'Draconura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloidae')->id
        ]);

        BioGender::create([
            'id' => '927',
            'scientific_name' => 'Dromococcyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);

        BioGender::create([
            'id' => '928',
            'scientific_name' => 'Dryadophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '929',
            'scientific_name' => 'Drymarchon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '930',
            'scientific_name' => 'Drymobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '931',
            'scientific_name' => 'Dryobates',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);

        BioGender::create([
            'id' => '932',
            'scientific_name' => 'Dryocopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);

        BioGender::create([
            'id' => '933',
            'scientific_name' => 'Dryophytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '934',
            'scientific_name' => 'Duellmanohyla',
            'common_name' => '"Mountain brook frogs, Ranitas de arroyo de Duellman"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '935',
            'scientific_name' => 'Dumetella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);

        BioGender::create([
            'id' => '936',
            'scientific_name' => 'Dussumieria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);

        BioGender::create([
            'id' => '937',
            'scientific_name' => 'Dysithamnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);

        BioGender::create([
            'id' => '938',
            'scientific_name' => 'Dysomma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synaphobranchidae')->id
        ]);

        BioGender::create([
            'id' => '939',
            'scientific_name' => 'Dysopes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);

        BioGender::create([
            'id' => '940',
            'scientific_name' => 'Echelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '941',
            'scientific_name' => 'Echeneis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echeneidae')->id
        ]);

        BioGender::create([
            'id' => '942',
            'scientific_name' => 'Echidna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);

        BioGender::create([
            'id' => '943',
            'scientific_name' => 'Echinorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echinorhinidae')->id
        ]);

        BioGender::create([
            'id' => '944',
            'scientific_name' => 'Echiodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carapidae')->id
        ]);

        BioGender::create([
            'id' => '945',
            'scientific_name' => 'Echiophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);

        BioGender::create([
            'id' => '946',
            'scientific_name' => 'Ecnomiohyla',
            'common_name' => '"Marvelous frogs, Ranas maravillosas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);

        BioGender::create([
            'id' => '947',
            'scientific_name' => 'Ecteinascidia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Perophoridae')->id
        ]);

        BioGender::create([
            'id' => '948',
            'scientific_name' => 'Ectopistes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);

        BioGender::create([
            'id' => '949',
            'scientific_name' => 'Egretta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);

        BioGender::create([
            'id' => '950',
            'scientific_name' => 'Eira',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);

        BioGender::create([
            'id' => '951',
            'scientific_name' => 'Ekemblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '952',
            'scientific_name' => 'Elacatinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);

        BioGender::create([
            'id' => '953',
            'scientific_name' => 'Elaenia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '954',
            'scientific_name' => 'Elagatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);

        BioGender::create([
            'id' => '955',
            'scientific_name' => 'Elanoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '956',
            'scientific_name' => 'Elanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);

        BioGender::create([
            'id' => '957',
            'scientific_name' => 'Elaphe',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);

        BioGender::create([
            'id' => '958',
            'scientific_name' => 'Elapoides',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);

        BioGender::create([
            'id' => '959',
            'scientific_name' => 'Elapoidis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);

        BioGender::create([
            'id' => '960',
            'scientific_name' => 'Elapomorphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '961',
            'scientific_name' => 'Elaps',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);

        BioGender::create([
            'id' => '962',
            'scientific_name' => 'Elasmognathus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tapiridae')->id
        ]);

        BioGender::create([
            'id' => '963',
            'scientific_name' => 'Elattarchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);

        BioGender::create([
            'id' => '964',
            'scientific_name' => 'Electron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Momotidae')->id
        ]);

        BioGender::create([
            'id' => '965',
            'scientific_name' => 'Electrona',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);

        BioGender::create([
            'id' => '966',
            'scientific_name' => 'Eleotris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);

        BioGender::create([
            'id' => '967',
            'scientific_name' => 'Eleutherodactylus',
            'common_name' => '"Rainfrogs, Ranas ladradoras"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);

        BioGender::create([
            'id' => '968',
            'scientific_name' => 'Elgaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);

        BioGender::create([
            'id' => '969',
            'scientific_name' => 'Elops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elopidae')->id
        ]);

        BioGender::create([
            'id' => '970',
            'scientific_name' => 'Emballonura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);

        BioGender::create([
            'id' => '971',
            'scientific_name' => 'Embassichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);

        BioGender::create([
            'id' => '972',
            'scientific_name' => 'Emberiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emberizidae')->id
        ]);

        BioGender::create([
            'id' => '973',
            'scientific_name' => 'Embiotoca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);

        BioGender::create([
            'id' => '974',
            'scientific_name' => 'Emblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '975',
            'scientific_name' => 'Emblemariopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);

        BioGender::create([
            'id' => '976',
            'scientific_name' => 'Empidonax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);

        BioGender::create([
            'id' => '977',
            'scientific_name' => 'Emyda',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '978',
            'scientific_name' => 'Emydes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '979',
            'scientific_name' => 'Emyoides',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '980',
            'scientific_name' => 'Emys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);

        BioGender::create([
            'id' => '981',
            'scientific_name' => 'Emysaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);

        BioGender::create([
            'id' => '982',
            'scientific_name' => 'Encheliophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carapidae')->id
        ]);

        BioGender::create([
            'id' => '983',
            'scientific_name' => 'Enchelycore',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);

        BioGender::create([
            'id' => '984',
            'scientific_name' => 'Enchelyopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gadidae')->id
        ]);

        BioGender::create([
            'id' => '985',
            'scientific_name' => 'Enchisthenes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);

        BioGender::create([
            'id' => '986',
            'scientific_name' => 'Endomychura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);

        BioGender::create([
            'id' => '987',
            'scientific_name' => 'Engraulis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);

        BioGender::create([
            'id' => '988',
            'scientific_name' => 'Engyophrys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);

        BioGender::create([
            'id' => '989',
            'scientific_name' => 'Engystoma',
            'common_name' => '',
            'status' => 'No disponible',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microhylidae')->id
        ]);

        BioGender::create([
            'id' => '990',
            'scientific_name' => 'Engystomops',
            'common_name' => '"Foam frogs, Ranitas de espuma"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);

        BioGender::create([
            'id' => '991',
            'scientific_name' => 'Enhydra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);

        BioGender::create([
            'id' => '992',
            'scientific_name' => 'Enhydris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);

        BioGender::create([
            'id' => '993',
            'scientific_name' => 'Enneanectes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);

        BioGender::create([
            'id' => '994',
            'scientific_name' => 'Enneapterygius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);

        BioGender::create([
            'id' => '995',
            'scientific_name' => 'Ensatina',
            'common_name' => 'Ensatina',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);

        BioGender::create([
            'id' => '996',
            'scientific_name' => 'Entomacrodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);

        BioGender::create([
            'id' => '997',
            'scientific_name' => 'Entosphenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Petromyzontidae')->id
        ]);

        BioGender::create([
            'id' => '998',
            'scientific_name' => 'Enulius',
            'common_name' => 'Culebras coludas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);

        BioGender::create([
            'id' => '999',
            'scientific_name' => 'Enyaliosaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);


        BioGender::create([
            'id' => '1000',
            'scientific_name' => 'Enypnias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1001',
            'scientific_name' => 'Eopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1002',
            'scientific_name' => 'Epalzeorhynchos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1003',
            'scientific_name' => 'Ephippus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ephippidae')->id
        ]);



        BioGender::create([
            'id' => '1004',
            'scientific_name' => 'Epicrates',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Boidae')->id
        ]);



        BioGender::create([
            'id' => '1005',
            'scientific_name' => 'Epictia',
            'common_name' => 'Agujillas hormigueras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptotyphlopidae')->id
        ]);



        BioGender::create([
            'id' => '1006',
            'scientific_name' => 'Epigonus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Epigonidae')->id
        ]);



        BioGender::create([
            'id' => '1007',
            'scientific_name' => 'Epinephelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1008',
            'scientific_name' => 'Epinnula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1009',
            'scientific_name' => 'Eptatretus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '1010',
            'scientific_name' => 'Eptesicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1011',
            'scientific_name' => 'Equetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1012',
            'scientific_name' => 'Equus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Equidae')->id
        ]);



        BioGender::create([
            'id' => '1013',
            'scientific_name' => 'Eremonia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1014',
            'scientific_name' => 'Eremophila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alaudidae')->id
        ]);



        BioGender::create([
            'id' => '1015',
            'scientific_name' => 'Erethizon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Erethizontidae')->id
        ]);



        BioGender::create([
            'id' => '1016',
            'scientific_name' => 'Eretmochelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1017',
            'scientific_name' => 'Ergaticus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1018',
            'scientific_name' => 'Ericteis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1019',
            'scientific_name' => 'Eridiphas',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1020',
            'scientific_name' => 'Erotelis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1021',
            'scientific_name' => 'Errex',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1022',
            'scientific_name' => 'Erythrobussothen',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1023',
            'scientific_name' => 'Eryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Erycidae')->id
        ]);



        BioGender::create([
            'id' => '1024',
            'scientific_name' => 'Eschrichtius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eschrichtiidae')->id
        ]);



        BioGender::create([
            'id' => '1025',
            'scientific_name' => 'Eslopsarum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1026',
            'scientific_name' => 'Esox',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Esocidae')->id
        ]);



        BioGender::create([
            'id' => '1027',
            'scientific_name' => 'Esselenia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stichaeidae')->id
        ]);



        BioGender::create([
            'id' => '1028',
            'scientific_name' => 'Esselenichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stichaeidae')->id
        ]);



        BioGender::create([
            'id' => '1029',
            'scientific_name' => 'Etelis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1030',
            'scientific_name' => 'Ethadophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1031',
            'scientific_name' => 'Etheostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);



        BioGender::create([
            'id' => '1032',
            'scientific_name' => 'Etmopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Etmopteridae')->id
        ]);



        BioGender::create([
            'id' => '1033',
            'scientific_name' => 'Etropus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1034',
            'scientific_name' => 'Etrumeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1035',
            'scientific_name' => 'Euamyda',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);



        BioGender::create([
            'id' => '1036',
            'scientific_name' => 'Euarctos',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ursidae')->id
        ]);



        BioGender::create([
            'id' => '1037',
            'scientific_name' => 'Eubalaena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balaenidae')->id
        ]);



        BioGender::create([
            'id' => '1038',
            'scientific_name' => 'Eublepharis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eublepharidae')->id
        ]);



        BioGender::create([
            'id' => '1039',
            'scientific_name' => 'Euchelonia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1040',
            'scientific_name' => 'Euchelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1041',
            'scientific_name' => 'Euchirotes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);



        BioGender::create([
            'id' => '1042',
            'scientific_name' => 'Eucinostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);



        BioGender::create([
            'id' => '1043',
            'scientific_name' => 'Eucometis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '1044',
            'scientific_name' => 'Euctenogobius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1045',
            'scientific_name' => 'Euderma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1046',
            'scientific_name' => 'Eudistoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polycitoridae')->id
        ]);



        BioGender::create([
            'id' => '1047',
            'scientific_name' => 'Eudocimus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Threskiornithidae')->id
        ]);



        BioGender::create([
            'id' => '1048',
            'scientific_name' => 'Eugenes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1049',
            'scientific_name' => 'Eugerres',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);



        BioGender::create([
            'id' => '1050',
            'scientific_name' => 'Eugomphodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontaspididae')->id
        ]);



        BioGender::create([
            'id' => '1051',
            'scientific_name' => 'Euherdmania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Euherdmaniidae')->id
        ]);



        BioGender::create([
            'id' => '1052',
            'scientific_name' => 'Euhyas',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1053',
            'scientific_name' => 'Eulamia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1054',
            'scientific_name' => 'Euleptorhamphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiramphidae')->id
        ]);



        BioGender::create([
            'id' => '1055',
            'scientific_name' => 'Eumeces',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1056',
            'scientific_name' => 'Eumomota',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Momotidae')->id
        ]);



        BioGender::create([
            'id' => '1057',
            'scientific_name' => 'Eumops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);



        BioGender::create([
            'id' => '1058',
            'scientific_name' => 'Euphagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '1059',
            'scientific_name' => 'Eupherusa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1060',
            'scientific_name' => 'Euphonia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);



        BioGender::create([
            'id' => '1061',
            'scientific_name' => 'Eupomacentrus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1062',
            'scientific_name' => 'Euprotomicrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dalatiidae')->id
        ]);



        BioGender::create([
            'id' => '1063',
            'scientific_name' => 'Eupsittula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '1064',
            'scientific_name' => 'Euptilotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trogonidae')->id
        ]);



        BioGender::create([
            'id' => '1065',
            'scientific_name' => 'Eurycea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1066',
            'scientific_name' => 'Eurypharynx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eurypharyngidae')->id
        ]);



        BioGender::create([
            'id' => '1067',
            'scientific_name' => 'Eurypyga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eurypygidae')->id
        ]);



        BioGender::create([
            'id' => '1068',
            'scientific_name' => 'Euschistodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1069',
            'scientific_name' => 'Eustomias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '1070',
            'scientific_name' => 'Eutaenia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1071',
            'scientific_name' => 'Eutaeniophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cetomimidae')->id
        ]);



        BioGender::create([
            'id' => '1072',
            'scientific_name' => 'Eutainia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1073',
            'scientific_name' => 'Eutamias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1074',
            'scientific_name' => 'Euthlypis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1075',
            'scientific_name' => 'Euthynnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '1076',
            'scientific_name' => 'Eutyx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '1077',
            'scientific_name' => 'Evarra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1078',
            'scientific_name' => 'Evermannella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Evermannellidae')->id
        ]);



        BioGender::create([
            'id' => '1079',
            'scientific_name' => 'Evermannia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1080',
            'scientific_name' => 'Evermannichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1081',
            'scientific_name' => 'Eviota',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1082',
            'scientific_name' => 'Evorthodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1083',
            'scientific_name' => 'Evoxymetopon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);



        BioGender::create([
            'id' => '1084',
            'scientific_name' => 'Exerodonta',
            'common_name' => '"Highlands treefrogs, Ranas arborícolas de montaña, Ranitas de la montaña"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1085',
            'scientific_name' => 'Exerpes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1086',
            'scientific_name' => 'Exiliboa',
            'common_name' => 'Boas enanas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charinidae')->id
        ]);



        BioGender::create([
            'id' => '1087',
            'scientific_name' => 'Exocoetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '1088',
            'scientific_name' => 'Exonautes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '1089',
            'scientific_name' => 'Extrarius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1090',
            'scientific_name' => 'Facciolella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nettastomatidae')->id
        ]);



        BioGender::create([
            'id' => '1091',
            'scientific_name' => 'Falco',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);



        BioGender::create([
            'id' => '1092',
            'scientific_name' => 'Felichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1093',
            'scientific_name' => 'Felis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '1094',
            'scientific_name' => 'Fenestraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '1095',
            'scientific_name' => 'Feresa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1096',
            'scientific_name' => 'Fiber',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1097',
            'scientific_name' => 'Ficimia',
            'common_name' => 'Culebras naricilla',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1098',
            'scientific_name' => 'Fierasfer',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carapidae')->id
        ]);



        BioGender::create([
            'id' => '1099',
            'scientific_name' => 'Fistularia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fistulariidae')->id
        ]);



        BioGender::create([
            'id' => '1100',
            'scientific_name' => 'Flagellostomias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '1101',
            'scientific_name' => 'Floridichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);



        BioGender::create([
            'id' => '1102',
            'scientific_name' => 'Florisuga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1103',
            'scientific_name' => 'Fodiator',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '1104',
            'scientific_name' => 'Forcipiger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);



        BioGender::create([
            'id' => '1105',
            'scientific_name' => 'Formicarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Formicariidae')->id
        ]);



        BioGender::create([
            'id' => '1106',
            'scientific_name' => 'Forpus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '1107',
            'scientific_name' => 'Fowlerichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);



        BioGender::create([
            'id' => '1108',
            'scientific_name' => 'Fregata',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fregatidae')->id
        ]);



        BioGender::create([
            'id' => '1109',
            'scientific_name' => 'Fulica',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '1110',
            'scientific_name' => 'Fulmarus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);



        BioGender::create([
            'id' => '1111',
            'scientific_name' => 'Fundulus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fundulidae')->id
        ]);



        BioGender::create([
            'id' => '1112',
            'scientific_name' => 'Gadella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '1113',
            'scientific_name' => 'Gadus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gadidae')->id
        ]);



        BioGender::create([
            'id' => '1114',
            'scientific_name' => 'Gaigeia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xantusiidae')->id
        ]);



        BioGender::create([
            'id' => '1115',
            'scientific_name' => 'Galbula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Galbulidae')->id
        ]);



        BioGender::create([
            'id' => '1116',
            'scientific_name' => 'Galeichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1117',
            'scientific_name' => 'Galeocerdo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1118',
            'scientific_name' => 'Galeorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triakidae')->id
        ]);



        BioGender::create([
            'id' => '1119',
            'scientific_name' => 'Galeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);



        BioGender::create([
            'id' => '1120',
            'scientific_name' => 'Galictis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1121',
            'scientific_name' => 'Gallinago',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '1122',
            'scientific_name' => 'Gallinula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '1123',
            'scientific_name' => 'Gallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phasianidae')->id
        ]);



        BioGender::create([
            'id' => '1124',
            'scientific_name' => 'Gambelia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Crotaphytidae')->id
        ]);



        BioGender::create([
            'id' => '1125',
            'scientific_name' => 'Gambusia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1126',
            'scientific_name' => 'Garmanella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);



        BioGender::create([
            'id' => '1127',
            'scientific_name' => 'Garmanichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlopsidae')->id
        ]);



        BioGender::create([
            'id' => '1128',
            'scientific_name' => 'Garmannia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1129',
            'scientific_name' => 'Gasterosteus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gasterosteidae')->id
        ]);



        BioGender::create([
            'id' => '1130',
            'scientific_name' => 'Gastrophryne',
            'common_name' => '"North American narrow-mouthed toads, Sapos de boca angosta, Sapos termiteros"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microhylidae')->id
        ]);



        BioGender::create([
            'id' => '1131',
            'scientific_name' => 'Gastropsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1132',
            'scientific_name' => 'Gastrostomus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eurypharyngidae')->id
        ]);



        BioGender::create([
            'id' => '1133',
            'scientific_name' => 'Gavia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gaviidae')->id
        ]);



        BioGender::create([
            'id' => '1134',
            'scientific_name' => 'Geagras',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1135',
            'scientific_name' => 'Gehyra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gekkonidae')->id
        ]);



        BioGender::create([
            'id' => '1136',
            'scientific_name' => 'Gekko',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gekkonidae')->id
        ]);



        BioGender::create([
            'id' => '1137',
            'scientific_name' => 'Gelochelidon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1138',
            'scientific_name' => 'Gempylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1139',
            'scientific_name' => 'Genyatremus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1140',
            'scientific_name' => 'Genyonemus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1141',
            'scientific_name' => 'Genypterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '1142',
            'scientific_name' => 'Geoclemys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);



        BioGender::create([
            'id' => '1143',
            'scientific_name' => 'Geococcyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);



        BioGender::create([
            'id' => '1144',
            'scientific_name' => 'Geoemyda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);



        BioGender::create([
            'id' => '1145',
            'scientific_name' => 'Geomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '1146',
            'scientific_name' => 'Geophidium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1147',
            'scientific_name' => 'Geophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1148',
            'scientific_name' => 'Geothlypis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1149',
            'scientific_name' => 'Geotrygon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '1150',
            'scientific_name' => 'Gephyroberyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1151',
            'scientific_name' => 'Geranoaetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1152',
            'scientific_name' => 'Geranospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1153',
            'scientific_name' => 'Gerhardinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1154',
            'scientific_name' => 'Gerres',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);



        BioGender::create([
            'id' => '1155',
            'scientific_name' => 'Gerrhonotus',
            'common_name' => 'Alicantes',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);



        BioGender::create([
            'id' => '1156',
            'scientific_name' => 'Gibbonsia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clinidae')->id
        ]);



        BioGender::create([
            'id' => '1157',
            'scientific_name' => 'Gila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1158',
            'scientific_name' => 'Gillellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);



        BioGender::create([
            'id' => '1159',
            'scientific_name' => 'Gillias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);



        BioGender::create([
            'id' => '1160',
            'scientific_name' => 'Gillichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1161',
            'scientific_name' => 'Ginglymostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ginglymostomatidae')->id
        ]);



        BioGender::create([
            'id' => '1162',
            'scientific_name' => 'Ginsburgellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1163',
            'scientific_name' => 'Girardinichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1164',
            'scientific_name' => 'Girardinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1165',
            'scientific_name' => 'Girella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '1166',
            'scientific_name' => 'Glaridodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1167',
            'scientific_name' => 'Glaucidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '1168',
            'scientific_name' => 'Glaucomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1169',
            'scientific_name' => 'Glauconia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptotyphlopidae')->id
        ]);



        BioGender::create([
            'id' => '1170',
            'scientific_name' => 'Glaucostegus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinobatidae')->id
        ]);



        BioGender::create([
            'id' => '1171',
            'scientific_name' => 'Globicephala',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1172',
            'scientific_name' => 'Glossamia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);



        BioGender::create([
            'id' => '1173',
            'scientific_name' => 'Glossonycteris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1174',
            'scientific_name' => 'Glossophaga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1175',
            'scientific_name' => 'Glyphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1176',
            'scientific_name' => 'Glyphisodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1177',
            'scientific_name' => 'Glyphonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1178',
            'scientific_name' => 'Glyphorynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '1179',
            'scientific_name' => 'Glyptocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1180',
            'scientific_name' => 'Gnathanodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1181',
            'scientific_name' => 'Gnatholepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1182',
            'scientific_name' => 'Gnathonemus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormyridae')->id
        ]);



        BioGender::create([
            'id' => '1183',
            'scientific_name' => 'Gnathophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1184',
            'scientific_name' => 'Gnathypops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Opistognathidae')->id
        ]);



        BioGender::create([
            'id' => '1185',
            'scientific_name' => 'Gobiesox',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '1186',
            'scientific_name' => 'Gobio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1187',
            'scientific_name' => 'Gobioclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1188',
            'scientific_name' => 'Gobioides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1189',
            'scientific_name' => 'Gobiomorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1190',
            'scientific_name' => 'Gobionellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1191',
            'scientific_name' => 'Gobiosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1192',
            'scientific_name' => 'Gobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1193',
            'scientific_name' => 'Gobulus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1194',
            'scientific_name' => 'Gonatodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphaerodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1195',
            'scientific_name' => 'Gonichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1196',
            'scientific_name' => 'Gonioplectrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1197',
            'scientific_name' => 'Gonostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);



        BioGender::create([
            'id' => '1198',
            'scientific_name' => 'Goodea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1199',
            'scientific_name' => 'Gopherus',
            'common_name' => 'Tortugas del desierto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Testudinidae')->id
        ]);



        BioGender::create([
            'id' => '1200',
            'scientific_name' => 'Gordiichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1201',
            'scientific_name' => 'Gorgasia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1202',
            'scientific_name' => 'Grallaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Grallariidae')->id
        ]);



        BioGender::create([
            'id' => '1203',
            'scientific_name' => 'Gramma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Grammatidae')->id
        ]);



        BioGender::create([
            'id' => '1204',
            'scientific_name' => 'Grammicolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Grammicolepididae')->id
        ]);



        BioGender::create([
            'id' => '1205',
            'scientific_name' => 'Grammistes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1206',
            'scientific_name' => 'Grammonus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '1207',
            'scientific_name' => 'Grampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1208',
            'scientific_name' => 'Granatellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '1209',
            'scientific_name' => 'Graodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1210',
            'scientific_name' => 'Grison',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1211',
            'scientific_name' => 'Grus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gruidae')->id
        ]);



        BioGender::create([
            'id' => '1212',
            'scientific_name' => 'Guavina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1213',
            'scientific_name' => 'Guiraca',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '1214',
            'scientific_name' => 'Gurgesiella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '1215',
            'scientific_name' => 'Gyalopion',
            'common_name' => 'Culebras nariz de gancho',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1216',
            'scientific_name' => 'Gygis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1217',
            'scientific_name' => 'Gymnachirus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Achiridae')->id
        ]);



        BioGender::create([
            'id' => '1218',
            'scientific_name' => 'Gymneleotris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1219',
            'scientific_name' => 'Gymnocorymbus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '1220',
            'scientific_name' => 'Gymnodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1221',
            'scientific_name' => 'Gymnogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1222',
            'scientific_name' => 'Gymnogyps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cathartidae')->id
        ]);



        BioGender::create([
            'id' => '1223',
            'scientific_name' => 'Gymnomuraena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1224',
            'scientific_name' => 'Gymnophthalmus',
            'common_name' => 'Lagartijas doradas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gymnophthalmidae')->id
        ]);



        BioGender::create([
            'id' => '1225',
            'scientific_name' => 'Gymnopis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermophiidae')->id
        ]);



        BioGender::create([
            'id' => '1226',
            'scientific_name' => 'Gymnorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);



        BioGender::create([
            'id' => '1227',
            'scientific_name' => 'Gymnothorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1228',
            'scientific_name' => 'Gymnotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gymnotidae')->id
        ]);



        BioGender::create([
            'id' => '1229',
            'scientific_name' => 'Gymnura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gymnuridae')->id
        ]);



        BioGender::create([
            'id' => '1230',
            'scientific_name' => 'Gyrinocheilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gyrinocheilidae')->id
        ]);



        BioGender::create([
            'id' => '1231',
            'scientific_name' => 'Gyrinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '1232',
            'scientific_name' => 'Gyropleurodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heterodontidae')->id
        ]);



        BioGender::create([
            'id' => '1233',
            'scientific_name' => 'Habia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '1234',
            'scientific_name' => 'Habromys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1235',
            'scientific_name' => 'Haematopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haematopodidae')->id
        ]);



        BioGender::create([
            'id' => '1236',
            'scientific_name' => 'Haemorhous',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);



        BioGender::create([
            'id' => '1237',
            'scientific_name' => 'Haemulon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1238',
            'scientific_name' => 'Haemulopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1239',
            'scientific_name' => 'Halatractus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1240',
            'scientific_name' => 'Haliaeetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1241',
            'scientific_name' => 'Halicampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1242',
            'scientific_name' => 'Halichelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1243',
            'scientific_name' => 'Halichoeres',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1244',
            'scientific_name' => 'Halieutichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ogcocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1245',
            'scientific_name' => 'Handleyomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1246',
            'scientific_name' => 'Hapalocrex',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '1247',
            'scientific_name' => 'Haplospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '1248',
            'scientific_name' => 'Haptoclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1249',
            'scientific_name' => 'Harengula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1250',
            'scientific_name' => 'Harpagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1251',
            'scientific_name' => 'Harpe',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1252',
            'scientific_name' => 'Harpia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1253',
            'scientific_name' => 'Harpyhaliaetus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1254',
            'scientific_name' => 'Harriotta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinochimaeridae')->id
        ]);



        BioGender::create([
            'id' => '1255',
            'scientific_name' => 'Hasemania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '1256',
            'scientific_name' => 'Haustor',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '1257',
            'scientific_name' => 'Heliases',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1258',
            'scientific_name' => 'Helicolenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '1259',
            'scientific_name' => 'Helicosalpa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '1260',
            'scientific_name' => 'Heliomaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1261',
            'scientific_name' => 'Heliornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heliornithidae')->id
        ]);



        BioGender::create([
            'id' => '1262',
            'scientific_name' => 'Heliothryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1263',
            'scientific_name' => 'Helmitheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1264',
            'scientific_name' => 'Helocaetes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1265',
            'scientific_name' => 'Heloderma',
            'common_name' => 'Lagartos de chaquira',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Helodermatidae')->id
        ]);



        BioGender::create([
            'id' => '1266',
            'scientific_name' => 'Helostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Helostomatidae')->id
        ]);



        BioGender::create([
            'id' => '1267',
            'scientific_name' => 'Hemanthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1268',
            'scientific_name' => 'Hemicaranx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1269',
            'scientific_name' => 'Hemichirotes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);



        BioGender::create([
            'id' => '1270',
            'scientific_name' => 'Hemichromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1271',
            'scientific_name' => 'Hemidactylus',
            'common_name' => 'Besuconas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gekkonidae')->id
        ]);



        BioGender::create([
            'id' => '1272',
            'scientific_name' => 'Hemiderma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1273',
            'scientific_name' => 'Hemieleotris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1274',
            'scientific_name' => 'Hemiemblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '1275',
            'scientific_name' => 'Hemigrammus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '1276',
            'scientific_name' => 'Hemiodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiodontidae')->id
        ]);



        BioGender::create([
            'id' => '1277',
            'scientific_name' => 'Hemiramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiramphidae')->id
        ]);



        BioGender::create([
            'id' => '1278',
            'scientific_name' => 'Hemirhombus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1279',
            'scientific_name' => 'Hemitripterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);



        BioGender::create([
            'id' => '1280',
            'scientific_name' => 'Henicorhina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '1281',
            'scientific_name' => 'Hepatoscartes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1282',
            'scientific_name' => 'Heptatretus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '1283',
            'scientific_name' => 'Heptranchias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexanchidae')->id
        ]);



        BioGender::create([
            'id' => '1284',
            'scientific_name' => 'Herichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1285',
            'scientific_name' => 'Hermosilla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '1286',
            'scientific_name' => 'Heros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1287',
            'scientific_name' => 'Herpailurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '1288',
            'scientific_name' => 'Herpetoichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1289',
            'scientific_name' => 'Herpetotheres',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);



        BioGender::create([
            'id' => '1290',
            'scientific_name' => 'Herpysmostes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1291',
            'scientific_name' => 'Hesperomyrus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1292',
            'scientific_name' => 'Heterandria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1293',
            'scientific_name' => 'Heteristius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);



        BioGender::create([
            'id' => '1294',
            'scientific_name' => 'Heteroconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1295',
            'scientific_name' => 'Heterodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1296',
            'scientific_name' => 'Heterodontus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heterodontidae')->id
        ]);



        BioGender::create([
            'id' => '1297',
            'scientific_name' => 'Heteromys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);



        BioGender::create([
            'id' => '1298',
            'scientific_name' => 'Heterophallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1299',
            'scientific_name' => 'Heteropriacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Priacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1300',
            'scientific_name' => 'Heterostichus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clinidae')->id
        ]);



        BioGender::create([
            'id' => '1301',
            'scientific_name' => 'Heterotilapia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1302',
            'scientific_name' => 'Heterotriton',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '1303',
            'scientific_name' => 'Hexagrammos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexagrammidae')->id
        ]);



        BioGender::create([
            'id' => '1304',
            'scientific_name' => 'Hexanchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexanchidae')->id
        ]);



        BioGender::create([
            'id' => '1305',
            'scientific_name' => 'Hexanematichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1306',
            'scientific_name' => 'Hildebrandia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1307',
            'scientific_name' => 'Himantodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1308',
            'scientific_name' => 'Himantolophus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Himantolophidae')->id
        ]);



        BioGender::create([
            'id' => '1309',
            'scientific_name' => 'Himantopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Recurvirostridae')->id
        ]);



        BioGender::create([
            'id' => '1310',
            'scientific_name' => 'Himantura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasyatidae')->id
        ]);



        BioGender::create([
            'id' => '1311',
            'scientific_name' => 'Hippocampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1312',
            'scientific_name' => 'Hippoglossina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1313',
            'scientific_name' => 'Hippoglossoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1314',
            'scientific_name' => 'Hippoglossus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1315',
            'scientific_name' => 'Hirundichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '1316',
            'scientific_name' => 'Hirundo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '1317',
            'scientific_name' => 'Histiophorus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '1318',
            'scientific_name' => 'Histiotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1319',
            'scientific_name' => 'Histrio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);



        BioGender::create([
            'id' => '1320',
            'scientific_name' => 'Histrionicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1321',
            'scientific_name' => 'Hodomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1322',
            'scientific_name' => 'Holacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1323',
            'scientific_name' => 'Holanthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1324',
            'scientific_name' => 'Holbrookia',
            'common_name' => 'Lagartijas sin orejas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '1325',
            'scientific_name' => 'Holcosus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);



        BioGender::create([
            'id' => '1326',
            'scientific_name' => 'Holocentrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '1327',
            'scientific_name' => 'Homalocranium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1328',
            'scientific_name' => 'Homalopomus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Merlucciidae')->id
        ]);



        BioGender::create([
            'id' => '1329',
            'scientific_name' => 'Homalopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Homalopsidae')->id
        ]);



        BioGender::create([
            'id' => '1330',
            'scientific_name' => 'Homea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '1331',
            'scientific_name' => 'Homoprion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1332',
            'scientific_name' => 'Hoplopagrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1333',
            'scientific_name' => 'Hoplostethus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1334',
            'scientific_name' => 'Hoplunnis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nettastomatidae')->id
        ]);



        BioGender::create([
            'id' => '1335',
            'scientific_name' => 'Horabagrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Horabagridae')->id
        ]);



        BioGender::create([
            'id' => '1336',
            'scientific_name' => 'Howella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Howellidae')->id
        ]);



        BioGender::create([
            'id' => '1337',
            'scientific_name' => 'Hubbsiella',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1338',
            'scientific_name' => 'Hubbsina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1339',
            'scientific_name' => 'Hudsonius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1340',
            'scientific_name' => 'Huro',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '1341',
            'scientific_name' => 'Hyalinobatrachium',
            'common_name' => '"Glass frogs, Ranas de cristal, Ranitas de cristal"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrolenidae')->id
        ]);



        BioGender::create([
            'id' => '1342',
            'scientific_name' => 'Hybognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1343',
            'scientific_name' => 'Hybopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1344',
            'scientific_name' => 'Hydrargira',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fundulidae')->id
        ]);



        BioGender::create([
            'id' => '1345',
            'scientific_name' => 'Hydrobates',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hydrobatidae')->id
        ]);



        BioGender::create([
            'id' => '1346',
            'scientific_name' => 'Hydrochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1347',
            'scientific_name' => 'Hydrocoloeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1348',
            'scientific_name' => 'Hydrolagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chimaeridae')->id
        ]);



        BioGender::create([
            'id' => '1349',
            'scientific_name' => 'Hydrone',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1350',
            'scientific_name' => 'Hydrophis',
            'common_name' => 'Serpientes marinas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);



        BioGender::create([
            'id' => '1351',
            'scientific_name' => 'Hydroprogne',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1352',
            'scientific_name' => 'Hydropsalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);



        BioGender::create([
            'id' => '1353',
            'scientific_name' => 'Hygophum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1354',
            'scientific_name' => 'Hyla',
            'common_name' => '"Ranitas, Treefrogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1355',
            'scientific_name' => 'Hylella',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1356',
            'scientific_name' => 'Hyliola',
            'common_name' => '',
            'status' => 'No disponible',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1357',
            'scientific_name' => 'Hylocharis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1358',
            'scientific_name' => 'Hylocichla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '1359',
            'scientific_name' => 'Hylodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylodidae')->id
        ]);



        BioGender::create([
            'id' => '1360',
            'scientific_name' => 'Hylomanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Momotidae')->id
        ]);



        BioGender::create([
            'id' => '1361',
            'scientific_name' => 'Hylonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1362',
            'scientific_name' => 'Hylophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);



        BioGender::create([
            'id' => '1363',
            'scientific_name' => 'Hylorchilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '1364',
            'scientific_name' => 'Hynnis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1365',
            'scientific_name' => 'Hyonycteris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thyropteridae')->id
        ]);



        BioGender::create([
            'id' => '1366',
            'scientific_name' => 'Hypancistrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '1367',
            'scientific_name' => 'Hypanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasyatidae')->id
        ]);



        BioGender::create([
            'id' => '1368',
            'scientific_name' => 'Hyperoodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ziphiidae')->id
        ]);



        BioGender::create([
            'id' => '1369',
            'scientific_name' => 'Hyperprosopon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '1370',
            'scientific_name' => 'Hyphessobrycon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '1371',
            'scientific_name' => 'Hypleurochilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1372',
            'scientific_name' => 'Hypoatherina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinidae')->id
        ]);



        BioGender::create([
            'id' => '1373',
            'scientific_name' => 'Hypoclydonia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acropomatidae')->id
        ]);



        BioGender::create([
            'id' => '1374',
            'scientific_name' => 'Hypopachus',
            'common_name' => '"Ranas ovejeras, Sheep frogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microhylidae')->id
        ]);



        BioGender::create([
            'id' => '1375',
            'scientific_name' => 'Hypophthalmichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1376',
            'scientific_name' => 'Hypoplectrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1377',
            'scientific_name' => 'Hypoprion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1378',
            'scientific_name' => 'Hyporhamphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiramphidae')->id
        ]);



        BioGender::create([
            'id' => '1379',
            'scientific_name' => 'Hyporthodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1380',
            'scientific_name' => 'Hypostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '1381',
            'scientific_name' => 'Hypsicometes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percophidae')->id
        ]);



        BioGender::create([
            'id' => '1382',
            'scientific_name' => 'Hypsiglena',
            'common_name' => 'Culebras nocturnas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1383',
            'scientific_name' => 'Hypsoblenniops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1384',
            'scientific_name' => 'Hypsoblennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1385',
            'scientific_name' => 'Hypsolepis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1386',
            'scientific_name' => 'Hypsopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1387',
            'scientific_name' => 'Hypsurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '1388',
            'scientific_name' => 'Hypsypops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1389',
            'scientific_name' => 'Hystrix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hystricidae')->id
        ]);



        BioGender::create([
            'id' => '1390',
            'scientific_name' => 'Iasis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '1391',
            'scientific_name' => 'Ibycter',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);



        BioGender::create([
            'id' => '1392',
            'scientific_name' => 'Icelinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '1393',
            'scientific_name' => 'Ichthyapus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1394',
            'scientific_name' => 'Ichthyocampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1395',
            'scientific_name' => 'Ichthyococcus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1396',
            'scientific_name' => 'Icichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrolophidae')->id
        ]);



        BioGender::create([
            'id' => '1397',
            'scientific_name' => 'Ictalurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '1398',
            'scientific_name' => 'Icteria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteriidae')->id
        ]);



        BioGender::create([
            'id' => '1399',
            'scientific_name' => 'Icterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '1400',
            'scientific_name' => 'Icthelis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '1401',
            'scientific_name' => 'Ictidomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1402',
            'scientific_name' => 'Ictinia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1403',
            'scientific_name' => 'Ictiobus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '1404',
            'scientific_name' => 'Idiacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '1405',
            'scientific_name' => 'Idiodactylus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphaerodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1406',
            'scientific_name' => 'Idionycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1407',
            'scientific_name' => 'Iguana',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);



        BioGender::create([
            'id' => '1408',
            'scientific_name' => 'Ihlea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '1409',
            'scientific_name' => 'Ijimaia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ateleopodidae')->id
        ]);



        BioGender::create([
            'id' => '1410',
            'scientific_name' => 'Ilisha',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '1411',
            'scientific_name' => 'Ilyodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1412',
            'scientific_name' => 'Ilypnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1413',
            'scientific_name' => 'Imantodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1414',
            'scientific_name' => 'Incilius',
            'common_name' => '"Central American toads, Sapos de Mesoamérica"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);



        BioGender::create([
            'id' => '1415',
            'scientific_name' => 'Indopacetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ziphiidae')->id
        ]);



        BioGender::create([
            'id' => '1416',
            'scientific_name' => 'Indotyphlops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Typhlopidae')->id
        ]);



        BioGender::create([
            'id' => '1417',
            'scientific_name' => 'Iniistius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1418',
            'scientific_name' => 'Ioglossus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1419',
            'scientific_name' => 'Iridio',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1420',
            'scientific_name' => 'Isesthes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1421',
            'scientific_name' => 'Isistius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dalatiidae')->id
        ]);



        BioGender::create([
            'id' => '1422',
            'scientific_name' => 'Isogomphodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1423',
            'scientific_name' => 'Isopisthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1424',
            'scientific_name' => 'Isthmura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1425',
            'scientific_name' => 'Istiompax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '1426',
            'scientific_name' => 'Istiophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '1427',
            'scientific_name' => 'Istlarius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '1428',
            'scientific_name' => 'Isurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lamnidae')->id
        ]);



        BioGender::create([
            'id' => '1429',
            'scientific_name' => 'Ixalotriton',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1430',
            'scientific_name' => 'Ixobrychus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);



        BioGender::create([
            'id' => '1431',
            'scientific_name' => 'Ixoreus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '1432',
            'scientific_name' => 'Jabiru',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ciconiidae')->id
        ]);



        BioGender::create([
            'id' => '1433',
            'scientific_name' => 'Jacana',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Jacanidae')->id
        ]);



        BioGender::create([
            'id' => '1434',
            'scientific_name' => 'Japonoconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1435',
            'scientific_name' => 'Jenkinsia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1436',
            'scientific_name' => 'Jentinkia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);



        BioGender::create([
            'id' => '1437',
            'scientific_name' => 'Johnius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1438',
            'scientific_name' => 'Johnrandallia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);



        BioGender::create([
            'id' => '1439',
            'scientific_name' => 'Jordanella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);



        BioGender::create([
            'id' => '1440',
            'scientific_name' => 'Jordanichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1441',
            'scientific_name' => 'Joturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);



        BioGender::create([
            'id' => '1442',
            'scientific_name' => 'Julis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1443',
            'scientific_name' => 'Junco',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '1444',
            'scientific_name' => 'Kajikia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '1445',
            'scientific_name' => 'Kali',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chiasmodontidae')->id
        ]);



        BioGender::create([
            'id' => '1446',
            'scientific_name' => 'Kanazawaichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Antennariidae')->id
        ]);



        BioGender::create([
            'id' => '1447',
            'scientific_name' => 'Kathetostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Uranoscopidae')->id
        ]);



        BioGender::create([
            'id' => '1448',
            'scientific_name' => 'Katsuwonus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '1449',
            'scientific_name' => 'Kaupichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlopsidae')->id
        ]);



        BioGender::create([
            'id' => '1450',
            'scientific_name' => 'Kihnichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1451',
            'scientific_name' => 'Kinosternon',
            'common_name' => 'Tortugas casquito',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '1452',
            'scientific_name' => 'Kinosternum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '1453',
            'scientific_name' => 'Kogia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Physeteridae')->id
        ]);



        BioGender::create([
            'id' => '1454',
            'scientific_name' => 'Kryptolebias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rivulidae')->id
        ]);



        BioGender::create([
            'id' => '1455',
            'scientific_name' => 'Kryptophanaron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anomalopidae')->id
        ]);



        BioGender::create([
            'id' => '1456',
            'scientific_name' => 'Kryptopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Siluridae')->id
        ]);



        BioGender::create([
            'id' => '1457',
            'scientific_name' => 'Kuhlia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kuhliidae')->id
        ]);



        BioGender::create([
            'id' => '1458',
            'scientific_name' => 'Kuronezumia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);



        BioGender::create([
            'id' => '1459',
            'scientific_name' => 'Kyphosus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '1460',
            'scientific_name' => 'Labichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nemichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1461',
            'scientific_name' => 'Labidochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1462',
            'scientific_name' => 'Labrax',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexagrammidae')->id
        ]);



        BioGender::create([
            'id' => '1463',
            'scientific_name' => 'Labrisomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1464',
            'scientific_name' => 'Labrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1465',
            'scientific_name' => 'Lacantunia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lacantuniidae')->id
        ]);



        BioGender::create([
            'id' => '1466',
            'scientific_name' => 'Lacerta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lacertidae')->id
        ]);



        BioGender::create([
            'id' => '1467',
            'scientific_name' => 'Lachesis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '1468',
            'scientific_name' => 'Lachnolaimus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1469',
            'scientific_name' => 'Lactophrys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ostraciidae')->id
        ]);



        BioGender::create([
            'id' => '1470',
            'scientific_name' => 'Lactoria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ostraciidae')->id
        ]);



        BioGender::create([
            'id' => '1471',
            'scientific_name' => 'Laemanctus',
            'common_name' => 'Toloques',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corytophanidae')->id
        ]);



        BioGender::create([
            'id' => '1472',
            'scientific_name' => 'Laemonema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '1473',
            'scientific_name' => 'Lagenodelphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1474',
            'scientific_name' => 'Lagenorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1475',
            'scientific_name' => 'Lagocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetraodontidae')->id
        ]);



        BioGender::create([
            'id' => '1476',
            'scientific_name' => 'Lagodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '1477',
            'scientific_name' => 'Lamna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lamnidae')->id
        ]);



        BioGender::create([
            'id' => '1478',
            'scientific_name' => 'Lampadena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1479',
            'scientific_name' => 'Lampanyctus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1480',
            'scientific_name' => 'Lampetra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Petromyzontidae')->id
        ]);



        BioGender::create([
            'id' => '1481',
            'scientific_name' => 'Lampornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1482',
            'scientific_name' => 'Lampris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lampridae')->id
        ]);



        BioGender::create([
            'id' => '1483',
            'scientific_name' => 'Lamprolaima',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1484',
            'scientific_name' => 'Lampronycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1485',
            'scientific_name' => 'Lampropeltis',
            'common_name' => 'Falsas corales',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1486',
            'scientific_name' => 'Lampropholis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1487',
            'scientific_name' => 'Lamprosaurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1488',
            'scientific_name' => 'Lanebatrachus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '1489',
            'scientific_name' => 'Lanio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '1490',
            'scientific_name' => 'Laniocera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tityridae')->id
        ]);



        BioGender::create([
            'id' => '1491',
            'scientific_name' => 'Lanius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laniidae')->id
        ]);



        BioGender::create([
            'id' => '1492',
            'scientific_name' => 'Larimus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1493',
            'scientific_name' => 'Larus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1494',
            'scientific_name' => 'Lasionycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1495',
            'scientific_name' => 'Lasiurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1496',
            'scientific_name' => 'Latax',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1497',
            'scientific_name' => 'Laterallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '1498',
            'scientific_name' => 'Latilus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1499',
            'scientific_name' => 'Lefroyia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carapidae')->id
        ]);



        BioGender::create([
            'id' => '1500',
            'scientific_name' => 'Legatus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1501',
            'scientific_name' => 'Leiocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leiocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1502',
            'scientific_name' => 'Leiocottus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '1503',
            'scientific_name' => 'Leiolopisma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1504',
            'scientific_name' => 'Leiosaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leiosauridae')->id
        ]);



        BioGender::create([
            'id' => '1505',
            'scientific_name' => 'Leiostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1506',
            'scientific_name' => 'Leiothlypis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1507',
            'scientific_name' => 'Leiuperus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1508',
            'scientific_name' => 'Lembus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1509',
            'scientific_name' => 'Lemur',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lemuridae')->id
        ]);



        BioGender::create([
            'id' => '1510',
            'scientific_name' => 'Leopardus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '1511',
            'scientific_name' => 'Lepadogaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '1512',
            'scientific_name' => 'Lepidion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '1513',
            'scientific_name' => 'Lepidochelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1514',
            'scientific_name' => 'Lepidocolaptes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '1515',
            'scientific_name' => 'Lepidocybium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1516',
            'scientific_name' => 'Lepidogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1517',
            'scientific_name' => 'Lepidoleprus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);



        BioGender::create([
            'id' => '1518',
            'scientific_name' => 'Lepidophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1519',
            'scientific_name' => 'Lepidophyma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xantusiidae')->id
        ]);



        BioGender::create([
            'id' => '1520',
            'scientific_name' => 'Lepidopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);



        BioGender::create([
            'id' => '1521',
            'scientific_name' => 'Lepisosteus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lepisosteidae')->id
        ]);



        BioGender::create([
            'id' => '1522',
            'scientific_name' => 'Lepomis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '1523',
            'scientific_name' => 'Lepophidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '1524',
            'scientific_name' => 'Leporacanthicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '1525',
            'scientific_name' => 'Leporinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anostomidae')->id
        ]);



        BioGender::create([
            'id' => '1526',
            'scientific_name' => 'Leptarius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1527',
            'scientific_name' => 'Leptocephalus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1528',
            'scientific_name' => 'Leptocerdale',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1529',
            'scientific_name' => 'Leptocottus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '1530',
            'scientific_name' => 'Leptodactylus',
            'common_name' => '"Neotropical grass frogs, Ranas espumeras"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1531',
            'scientific_name' => 'Leptodeira',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1532',
            'scientific_name' => 'Leptoderma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1533',
            'scientific_name' => 'Leptodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1534',
            'scientific_name' => 'Leptonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1535',
            'scientific_name' => 'Leptophidium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '1536',
            'scientific_name' => 'Leptophilypnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '1537',
            'scientific_name' => 'Leptophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1538',
            'scientific_name' => 'Leptopogon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1539',
            'scientific_name' => 'Leptotila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '1540',
            'scientific_name' => 'Leptotyphlops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptotyphlopidae')->id
        ]);



        BioGender::create([
            'id' => '1541',
            'scientific_name' => 'Lepus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leporidae')->id
        ]);



        BioGender::create([
            'id' => '1542',
            'scientific_name' => 'Lestidiops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lestidiidae')->id
        ]);



        BioGender::create([
            'id' => '1543',
            'scientific_name' => 'Lestidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lestidiidae')->id
        ]);



        BioGender::create([
            'id' => '1544',
            'scientific_name' => 'Lestrolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lestidiidae')->id
        ]);



        BioGender::create([
            'id' => '1545',
            'scientific_name' => 'Letharchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1546',
            'scientific_name' => 'Lethops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1547',
            'scientific_name' => 'Leuciscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1548',
            'scientific_name' => 'Leucolia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1549',
            'scientific_name' => 'Leucophaeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1550',
            'scientific_name' => 'Leucopternis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1551',
            'scientific_name' => 'Leucoraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '1552',
            'scientific_name' => 'Leuresthes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1553',
            'scientific_name' => 'Leuroglossus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);



        BioGender::create([
            'id' => '1554',
            'scientific_name' => 'Leuropharus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1555',
            'scientific_name' => 'Lichanura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charinidae')->id
        ]);



        BioGender::create([
            'id' => '1556',
            'scientific_name' => 'Lichonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1557',
            'scientific_name' => 'Lile',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1558',
            'scientific_name' => 'Limanda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1559',
            'scientific_name' => 'Limia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1560',
            'scientific_name' => 'Limnochelone',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermatemydidae')->id
        ]);



        BioGender::create([
            'id' => '1561',
            'scientific_name' => 'Limnodromus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '1562',
            'scientific_name' => 'Limnothlypis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1563',
            'scientific_name' => 'Limnurgus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1564',
            'scientific_name' => 'Limosa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '1565',
            'scientific_name' => 'Lineatriton',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1566',
            'scientific_name' => 'Linguaelapsus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '1567',
            'scientific_name' => 'Lioglossina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1568',
            'scientific_name' => 'Liomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);



        BioGender::create([
            'id' => '1569',
            'scientific_name' => 'Liophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1570',
            'scientific_name' => 'Liopropoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1571',
            'scientific_name' => 'Liparis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Liparidae')->id
        ]);



        BioGender::create([
            'id' => '1572',
            'scientific_name' => 'Lipaugus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cotingidae')->id
        ]);



        BioGender::create([
            'id' => '1573',
            'scientific_name' => 'Lipogramma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Grammatidae')->id
        ]);



        BioGender::create([
            'id' => '1574',
            'scientific_name' => 'Lipolagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);



        BioGender::create([
            'id' => '1575',
            'scientific_name' => 'Liposarcus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '1576',
            'scientific_name' => 'Lissoclinum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didemnidae')->id
        ]);



        BioGender::create([
            'id' => '1577',
            'scientific_name' => 'Lissodelphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1578',
            'scientific_name' => 'Lithobates',
            'common_name' => '"North American water frogs, Ranas manchadas, Ranas norteamericanas del agua"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ranidae')->id
        ]);



        BioGender::create([
            'id' => '1579',
            'scientific_name' => 'Lithodytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1580',
            'scientific_name' => 'Liuperus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1581',
            'scientific_name' => 'Liyla',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Craugastoridae')->id
        ]);



        BioGender::create([
            'id' => '1582',
            'scientific_name' => 'Lobianchia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1583',
            'scientific_name' => 'Lobotes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lobotidae')->id
        ]);



        BioGender::create([
            'id' => '1584',
            'scientific_name' => 'Lonchopisthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Opistognathidae')->id
        ]);



        BioGender::create([
            'id' => '1585',
            'scientific_name' => 'Lonchorhina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1586',
            'scientific_name' => 'Lonchura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Estrildidae')->id
        ]);



        BioGender::create([
            'id' => '1587',
            'scientific_name' => 'Lontra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1588',
            'scientific_name' => 'Lophiodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lophiidae')->id
        ]);



        BioGender::create([
            'id' => '1589',
            'scientific_name' => 'Lophiogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1590',
            'scientific_name' => 'Lophiomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lophiidae')->id
        ]);



        BioGender::create([
            'id' => '1591',
            'scientific_name' => 'Lophius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lophiidae')->id
        ]);



        BioGender::create([
            'id' => '1592',
            'scientific_name' => 'Lophodytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1593',
            'scientific_name' => 'Lophogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1594',
            'scientific_name' => 'Lopholatilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1595',
            'scientific_name' => 'Lophornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '1596',
            'scientific_name' => 'Lophostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1597',
            'scientific_name' => 'Lophostrix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '1598',
            'scientific_name' => 'Lophotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lophotidae')->id
        ]);



        BioGender::create([
            'id' => '1599',
            'scientific_name' => 'Lotella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '1600',
            'scientific_name' => 'Loweina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1601',
            'scientific_name' => 'Loxia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);



        BioGender::create([
            'id' => '1602',
            'scientific_name' => 'Loxocemus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loxocemidae')->id
        ]);



        BioGender::create([
            'id' => '1603',
            'scientific_name' => 'Lucania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fundulidae')->id
        ]);



        BioGender::create([
            'id' => '1604',
            'scientific_name' => 'Lucayablennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '1605',
            'scientific_name' => 'Lucioblennius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '1606',
            'scientific_name' => 'Lupinoblennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1607',
            'scientific_name' => 'Lurocalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);



        BioGender::create([
            'id' => '1608',
            'scientific_name' => 'Lutjanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1609',
            'scientific_name' => 'Lutra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1610',
            'scientific_name' => 'Lutremys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1611',
            'scientific_name' => 'Luvarus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Luvaridae')->id
        ]);



        BioGender::create([
            'id' => '1612',
            'scientific_name' => 'Luxilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1613',
            'scientific_name' => 'Lyciscus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Canidae')->id
        ]);



        BioGender::create([
            'id' => '1614',
            'scientific_name' => 'Lycodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);



        BioGender::create([
            'id' => '1615',
            'scientific_name' => 'Lycodontis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1616',
            'scientific_name' => 'Lycodopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);



        BioGender::create([
            'id' => '1617',
            'scientific_name' => 'Lyconema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);



        BioGender::create([
            'id' => '1618',
            'scientific_name' => 'Lygosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1619',
            'scientific_name' => 'Lynx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '1620',
            'scientific_name' => 'Lyopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1621',
            'scientific_name' => 'Lysoptychus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '1622',
            'scientific_name' => 'Lythrulon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1623',
            'scientific_name' => 'Lythrypnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1624',
            'scientific_name' => 'Lytorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1625',
            'scientific_name' => 'Mabouia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1626',
            'scientific_name' => 'Mabuya',
            'common_name' => 'Esquincos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1627',
            'scientific_name' => 'Macrhybopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1628',
            'scientific_name' => 'Macrognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mastacembelidae')->id
        ]);



        BioGender::create([
            'id' => '1629',
            'scientific_name' => 'Macroparalepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lestidiidae')->id
        ]);



        BioGender::create([
            'id' => '1630',
            'scientific_name' => 'Macrophyllum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1631',
            'scientific_name' => 'Macropinna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Opisthoproctidae')->id
        ]);



        BioGender::create([
            'id' => '1632',
            'scientific_name' => 'Macroramphosus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macroramphosidae')->id
        ]);



        BioGender::create([
            'id' => '1633',
            'scientific_name' => 'Macrotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1634',
            'scientific_name' => 'Macrotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1635',
            'scientific_name' => 'Macrourus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);



        BioGender::create([
            'id' => '1636',
            'scientific_name' => 'Macroxus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1637',
            'scientific_name' => 'Magnisudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepisauridae')->id
        ]);



        BioGender::create([
            'id' => '1638',
            'scientific_name' => 'Makaira',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '1639',
            'scientific_name' => 'Malacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Malacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1640',
            'scientific_name' => 'Malachylodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1641',
            'scientific_name' => 'Malacocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);



        BioGender::create([
            'id' => '1642',
            'scientific_name' => 'Malacoctenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1643',
            'scientific_name' => 'Malacoptila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bucconidae')->id
        ]);



        BioGender::create([
            'id' => '1644',
            'scientific_name' => 'Malacoraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '1645',
            'scientific_name' => 'Malayopython',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pythonidae')->id
        ]);



        BioGender::create([
            'id' => '1646',
            'scientific_name' => 'Malthe',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ogcocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1647',
            'scientific_name' => 'Manacus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pipridae')->id
        ]);



        BioGender::create([
            'id' => '1648',
            'scientific_name' => 'Manolepis',
            'common_name' => 'Culebras lagartijeras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1649',
            'scientific_name' => 'Manta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '1650',
            'scientific_name' => 'Mareca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1651',
            'scientific_name' => 'Margay',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '1652',
            'scientific_name' => 'Margrethia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);



        BioGender::create([
            'id' => '1653',
            'scientific_name' => 'Marisora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1654',
            'scientific_name' => 'Marmosa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);



        BioGender::create([
            'id' => '1655',
            'scientific_name' => 'Marosatherina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melanotaeniidae')->id
        ]);



        BioGender::create([
            'id' => '1656',
            'scientific_name' => 'Maskaheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1657',
            'scientific_name' => 'Mastacembelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mastacembelidae')->id
        ]);



        BioGender::create([
            'id' => '1658',
            'scientific_name' => 'Masticophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1659',
            'scientific_name' => 'Mastigodryas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1660',
            'scientific_name' => 'Masturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molidae')->id
        ]);



        BioGender::create([
            'id' => '1661',
            'scientific_name' => 'Maurolicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);



        BioGender::create([
            'id' => '1662',
            'scientific_name' => 'Mayaheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1663',
            'scientific_name' => 'Maylandia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1664',
            'scientific_name' => 'Maynea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);



        BioGender::create([
            'id' => '1665',
            'scientific_name' => 'Mazama',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);



        BioGender::create([
            'id' => '1666',
            'scientific_name' => 'Meda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1667',
            'scientific_name' => 'Medialuna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '1668',
            'scientific_name' => 'Megaceryle',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcedinidae')->id
        ]);



        BioGender::create([
            'id' => '1669',
            'scientific_name' => 'Megachasma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Megachasmidae')->id
        ]);



        BioGender::create([
            'id' => '1670',
            'scientific_name' => 'Megadontomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1671',
            'scientific_name' => 'Megalobrama',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1672',
            'scientific_name' => 'Megalops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Megalopidae')->id
        ]);



        BioGender::create([
            'id' => '1673',
            'scientific_name' => 'Megaptera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balaenopteridae')->id
        ]);



        BioGender::create([
            'id' => '1674',
            'scientific_name' => 'Megarynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1675',
            'scientific_name' => 'Megascops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '1676',
            'scientific_name' => 'Megasorex',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);



        BioGender::create([
            'id' => '1677',
            'scientific_name' => 'Megastomatohyla',
            'common_name' => '"Large mouth treefrogs, Ranitas de boca grande"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1678',
            'scientific_name' => 'Megemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1679',
            'scientific_name' => 'Megupsilon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinodontidae')->id
        ]);



        BioGender::create([
            'id' => '1680',
            'scientific_name' => 'Melamphaes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melamphaidae')->id
        ]);



        BioGender::create([
            'id' => '1681',
            'scientific_name' => 'Melanemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1682',
            'scientific_name' => 'Melanerpes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);



        BioGender::create([
            'id' => '1683',
            'scientific_name' => 'Melaniris',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1684',
            'scientific_name' => 'Melanitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1685',
            'scientific_name' => 'Melanocetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melanocetidae')->id
        ]);



        BioGender::create([
            'id' => '1686',
            'scientific_name' => 'Melanochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1687',
            'scientific_name' => 'Melanolagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathylagidae')->id
        ]);



        BioGender::create([
            'id' => '1688',
            'scientific_name' => 'Melanoptila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);



        BioGender::create([
            'id' => '1689',
            'scientific_name' => 'Melanorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1690',
            'scientific_name' => 'Melanostigma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zoarcidae')->id
        ]);



        BioGender::create([
            'id' => '1691',
            'scientific_name' => 'Melanotaenia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melanotaeniidae')->id
        ]);



        BioGender::create([
            'id' => '1692',
            'scientific_name' => 'Melanotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);



        BioGender::create([
            'id' => '1693',
            'scientific_name' => 'Meleagris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phasianidae')->id
        ]);



        BioGender::create([
            'id' => '1694',
            'scientific_name' => 'Meletta',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1695',
            'scientific_name' => 'Melichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);



        BioGender::create([
            'id' => '1696',
            'scientific_name' => 'Melospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '1697',
            'scientific_name' => 'Melozone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '1698',
            'scientific_name' => 'Membras',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1699',
            'scientific_name' => 'Menidia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1700',
            'scientific_name' => 'Menticirrhus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1701',
            'scientific_name' => 'Mentodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Platytroctidae')->id
        ]);



        BioGender::create([
            'id' => '1702',
            'scientific_name' => 'Mephitis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mephitidae')->id
        ]);



        BioGender::create([
            'id' => '1703',
            'scientific_name' => 'Mergus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1704',
            'scientific_name' => 'Merlangus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Merlucciidae')->id
        ]);



        BioGender::create([
            'id' => '1705',
            'scientific_name' => 'Merluccius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Merlucciidae')->id
        ]);



        BioGender::create([
            'id' => '1706',
            'scientific_name' => 'Merulinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triglidae')->id
        ]);



        BioGender::create([
            'id' => '1707',
            'scientific_name' => 'Mesaspis',
            'common_name' => 'Lagartijas de mimbre',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);



        BioGender::create([
            'id' => '1708',
            'scientific_name' => 'Mesodeca',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);



        BioGender::create([
            'id' => '1709',
            'scientific_name' => 'Mesopeltis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1710',
            'scientific_name' => 'Mesoplodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ziphiidae')->id
        ]);



        BioGender::create([
            'id' => '1711',
            'scientific_name' => 'Mesoprion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1712',
            'scientific_name' => 'Mesoscincus',
            'common_name' => 'Eslizones',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1713',
            'scientific_name' => 'Metachirops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);



        BioGender::create([
            'id' => '1714',
            'scientific_name' => 'Metachirus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);



        BioGender::create([
            'id' => '1715',
            'scientific_name' => 'Metcalfina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '1716',
            'scientific_name' => 'Metlapilcoatlus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '1717',
            'scientific_name' => 'Metoponops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1718',
            'scientific_name' => 'Micrastur',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);



        BioGender::create([
            'id' => '1719',
            'scientific_name' => 'Micrathene',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '1720',
            'scientific_name' => 'Micristodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhincodontidae')->id
        ]);



        BioGender::create([
            'id' => '1721',
            'scientific_name' => 'Microbatrachylus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Craugastoridae')->id
        ]);



        BioGender::create([
            'id' => '1722',
            'scientific_name' => 'Microcerculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '1723',
            'scientific_name' => 'Microcosmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pyuridae')->id
        ]);



        BioGender::create([
            'id' => '1724',
            'scientific_name' => 'Microdesmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1725',
            'scientific_name' => 'Microdipus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bipedidae')->id
        ]);



        BioGender::create([
            'id' => '1726',
            'scientific_name' => 'Microglanis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pseudopimelodidae')->id
        ]);



        BioGender::create([
            'id' => '1727',
            'scientific_name' => 'Micrognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1728',
            'scientific_name' => 'Microgobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1729',
            'scientific_name' => 'Microhyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microhylidae')->id
        ]);



        BioGender::create([
            'id' => '1730',
            'scientific_name' => 'Microlepidium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '1731',
            'scientific_name' => 'Microlepidotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1732',
            'scientific_name' => 'Micrometrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '1733',
            'scientific_name' => 'Micronycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1734',
            'scientific_name' => 'Microphis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1735',
            'scientific_name' => 'Micropogon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1736',
            'scientific_name' => 'Micropogonias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1737',
            'scientific_name' => 'Micropterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '1738',
            'scientific_name' => 'Microrhopias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);



        BioGender::create([
            'id' => '1739',
            'scientific_name' => 'Microspathodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1740',
            'scientific_name' => 'Microstomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '1741',
            'scientific_name' => 'Microtus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1742',
            'scientific_name' => 'Micruroides',
            'common_name' => 'Coralillos del desierto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);



        BioGender::create([
            'id' => '1743',
            'scientific_name' => 'Micrurus',
            'common_name' => 'Coralillos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);



        BioGender::create([
            'id' => '1744',
            'scientific_name' => 'Mikrogeophagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1745',
            'scientific_name' => 'Millerichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rivulidae')->id
        ]);



        BioGender::create([
            'id' => '1746',
            'scientific_name' => 'Mimometopon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1747',
            'scientific_name' => 'Mimon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1748',
            'scientific_name' => 'Mimus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);



        BioGender::create([
            'id' => '1749',
            'scientific_name' => 'Mionectes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1750',
            'scientific_name' => 'Mionorus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);



        BioGender::create([
            'id' => '1751',
            'scientific_name' => 'Mirounga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phocidae')->id
        ]);



        BioGender::create([
            'id' => '1752',
            'scientific_name' => 'Misgurnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cobitidae')->id
        ]);



        BioGender::create([
            'id' => '1753',
            'scientific_name' => 'Mitrephanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1754',
            'scientific_name' => 'Mixcoatlus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '1755',
            'scientific_name' => 'Mnierpes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '1756',
            'scientific_name' => 'Mniotilta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1757',
            'scientific_name' => 'Mobula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '1758',
            'scientific_name' => 'Moenkhausia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '1759',
            'scientific_name' => 'Mola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molidae')->id
        ]);



        BioGender::create([
            'id' => '1760',
            'scientific_name' => 'Molgula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molgulidae')->id
        ]);



        BioGender::create([
            'id' => '1761',
            'scientific_name' => 'Mollienesia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '1762',
            'scientific_name' => 'Molossus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);



        BioGender::create([
            'id' => '1763',
            'scientific_name' => 'Molothrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '1764',
            'scientific_name' => 'Momotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Momotidae')->id
        ]);



        BioGender::create([
            'id' => '1765',
            'scientific_name' => 'Monacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1766',
            'scientific_name' => 'Monachus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phocidae')->id
        ]);



        BioGender::create([
            'id' => '1767',
            'scientific_name' => 'Moniana',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1768',
            'scientific_name' => 'Monoclida',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '1769',
            'scientific_name' => 'Monodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monodactylidae')->id
        ]);



        BioGender::create([
            'id' => '1770',
            'scientific_name' => 'Monognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monognathidae')->id
        ]);



        BioGender::create([
            'id' => '1771',
            'scientific_name' => 'Monolene',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);



        BioGender::create([
            'id' => '1772',
            'scientific_name' => 'Monopenchelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1773',
            'scientific_name' => 'Monopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synbranchidae')->id
        ]);



        BioGender::create([
            'id' => '1774',
            'scientific_name' => 'Morelia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pythonidae')->id
        ]);



        BioGender::create([
            'id' => '1775',
            'scientific_name' => 'Moringua',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moringuidae')->id
        ]);



        BioGender::create([
            'id' => '1776',
            'scientific_name' => 'Mormoops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormoopidae')->id
        ]);



        BioGender::create([
            'id' => '1777',
            'scientific_name' => 'Morococcyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);



        BioGender::create([
            'id' => '1778',
            'scientific_name' => 'Morone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moronidae')->id
        ]);



        BioGender::create([
            'id' => '1779',
            'scientific_name' => 'Morphnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '1780',
            'scientific_name' => 'Morus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sulidae')->id
        ]);



        BioGender::create([
            'id' => '1781',
            'scientific_name' => 'Moschus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moschidae')->id
        ]);



        BioGender::create([
            'id' => '1782',
            'scientific_name' => 'Motacilla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Motacillidae')->id
        ]);



        BioGender::create([
            'id' => '1783',
            'scientific_name' => 'Moxostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '1784',
            'scientific_name' => 'Mugil',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);



        BioGender::create([
            'id' => '1785',
            'scientific_name' => 'Mugilops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1786',
            'scientific_name' => 'Mulloidichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mullidae')->id
        ]);



        BioGender::create([
            'id' => '1787',
            'scientific_name' => 'Mullus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mullidae')->id
        ]);



        BioGender::create([
            'id' => '1788',
            'scientific_name' => 'Muraena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1789',
            'scientific_name' => 'Muraenesox',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenesocidae')->id
        ]);



        BioGender::create([
            'id' => '1790',
            'scientific_name' => 'Muraenophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1791',
            'scientific_name' => 'Muraenopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1792',
            'scientific_name' => 'Murenophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1793',
            'scientific_name' => 'Mus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muridae')->id
        ]);



        BioGender::create([
            'id' => '1794',
            'scientific_name' => 'Musculus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muridae')->id
        ]);



        BioGender::create([
            'id' => '1795',
            'scientific_name' => 'Musonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '1796',
            'scientific_name' => 'Mustela',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '1797',
            'scientific_name' => 'Mustelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triakidae')->id
        ]);



        BioGender::create([
            'id' => '1798',
            'scientific_name' => 'Myadestes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '1799',
            'scientific_name' => 'Mycetes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atelidae')->id
        ]);



        BioGender::create([
            'id' => '1800',
            'scientific_name' => 'Mycteria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ciconiidae')->id
        ]);



        BioGender::create([
            'id' => '1801',
            'scientific_name' => 'Mycteroperca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1802',
            'scientific_name' => 'Myctophum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1803',
            'scientific_name' => 'Mydas',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1804',
            'scientific_name' => 'Mydasea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1805',
            'scientific_name' => 'Myiarchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1806',
            'scientific_name' => 'Myiobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Onychorhynchidae')->id
        ]);



        BioGender::create([
            'id' => '1807',
            'scientific_name' => 'Myioborus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1808',
            'scientific_name' => 'Myiodynastes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1809',
            'scientific_name' => 'Myiopagis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1810',
            'scientific_name' => 'Myiopsitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '1811',
            'scientific_name' => 'Myiozetetes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1812',
            'scientific_name' => 'Myleus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrasalmidae')->id
        ]);



        BioGender::create([
            'id' => '1813',
            'scientific_name' => 'Myliobatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '1814',
            'scientific_name' => 'Mylopharyngodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1815',
            'scientific_name' => 'Myloplus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrasalmidae')->id
        ]);



        BioGender::create([
            'id' => '1816',
            'scientific_name' => 'Myocastor',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myocastoridae')->id
        ]);



        BioGender::create([
            'id' => '1817',
            'scientific_name' => 'Myotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1818',
            'scientific_name' => 'Myrichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1819',
            'scientific_name' => 'Myripristis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '1820',
            'scientific_name' => 'Myrmecophaga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myrmecophagidae')->id
        ]);



        BioGender::create([
            'id' => '1821',
            'scientific_name' => 'Myrmotherula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);



        BioGender::create([
            'id' => '1822',
            'scientific_name' => 'Myrophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1823',
            'scientific_name' => 'Myxine',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '1824',
            'scientific_name' => 'Myxocyprinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '1825',
            'scientific_name' => 'Myxodagnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);



        BioGender::create([
            'id' => '1826',
            'scientific_name' => 'Myxodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clinidae')->id
        ]);



        BioGender::create([
            'id' => '1827',
            'scientific_name' => 'Myxus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);



        BioGender::create([
            'id' => '1828',
            'scientific_name' => 'Nandopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1829',
            'scientific_name' => 'Nanemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1830',
            'scientific_name' => 'Nannobrachium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1831',
            'scientific_name' => 'Nannocampus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1832',
            'scientific_name' => 'Nansenia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Microstomatidae')->id
        ]);



        BioGender::create([
            'id' => '1833',
            'scientific_name' => 'Narcetes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1834',
            'scientific_name' => 'Narcine',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Narcinidae')->id
        ]);



        BioGender::create([
            'id' => '1835',
            'scientific_name' => 'Naso',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);



        BioGender::create([
            'id' => '1836',
            'scientific_name' => 'Nasolamia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1837',
            'scientific_name' => 'Nasua',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);



        BioGender::create([
            'id' => '1838',
            'scientific_name' => 'Natalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natalidae')->id
        ]);



        BioGender::create([
            'id' => '1839',
            'scientific_name' => 'Natrix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '1840',
            'scientific_name' => 'Naucrates',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1841',
            'scientific_name' => 'Nealotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1842',
            'scientific_name' => 'Nebris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1843',
            'scientific_name' => 'Nectarges',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '1844',
            'scientific_name' => 'Nectemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1845',
            'scientific_name' => 'Neetroplus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1846',
            'scientific_name' => 'Negaprion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '1847',
            'scientific_name' => 'Nelsonia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1848',
            'scientific_name' => 'Nemabathytroctes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1849',
            'scientific_name' => 'Nematistius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nematistiidae')->id
        ]);



        BioGender::create([
            'id' => '1850',
            'scientific_name' => 'Nemichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nemichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1851',
            'scientific_name' => 'Neobythites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '1852',
            'scientific_name' => 'Neoclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '1853',
            'scientific_name' => 'Neoconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moringuidae')->id
        ]);



        BioGender::create([
            'id' => '1854',
            'scientific_name' => 'Neoepinnula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1855',
            'scientific_name' => 'Neogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1856',
            'scientific_name' => 'Neolamprologus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1857',
            'scientific_name' => 'Neoliparis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Liparidae')->id
        ]);



        BioGender::create([
            'id' => '1858',
            'scientific_name' => 'Neomaenis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1859',
            'scientific_name' => 'Neomerinthe',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '1860',
            'scientific_name' => 'Neomugil',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);



        BioGender::create([
            'id' => '1861',
            'scientific_name' => 'Neomuraena',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '1862',
            'scientific_name' => 'Neoniphon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '1863',
            'scientific_name' => 'Neoophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1864',
            'scientific_name' => 'Neoopisthopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '1865',
            'scientific_name' => 'Neopomacentrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '1866',
            'scientific_name' => 'Neoscopelarchoides',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);



        BioGender::create([
            'id' => '1867',
            'scientific_name' => 'Neoscopelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Neoscopelidae')->id
        ]);



        BioGender::create([
            'id' => '1868',
            'scientific_name' => 'Neotamias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1869',
            'scientific_name' => 'Neothunnus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '1870',
            'scientific_name' => 'Neotoca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '1871',
            'scientific_name' => 'Neotoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1872',
            'scientific_name' => 'Neotomodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1873',
            'scientific_name' => 'Nerodia',
            'common_name' => 'Culebras acuáticas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '1874',
            'scientific_name' => 'Nes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '1875',
            'scientific_name' => 'Nesiarchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '1876',
            'scientific_name' => 'Nettenchelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nettastomatidae')->id
        ]);



        BioGender::create([
            'id' => '1877',
            'scientific_name' => 'Netuma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1878',
            'scientific_name' => 'Nezumia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Macrouridae')->id
        ]);



        BioGender::create([
            'id' => '1879',
            'scientific_name' => 'Nicholsina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);



        BioGender::create([
            'id' => '1880',
            'scientific_name' => 'Nicoria',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);



        BioGender::create([
            'id' => '1881',
            'scientific_name' => 'Nimbochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1882',
            'scientific_name' => 'Ninia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '1883',
            'scientific_name' => 'Nocomis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1884',
            'scientific_name' => 'Noctilio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Noctilionidae')->id
        ]);



        BioGender::create([
            'id' => '1885',
            'scientific_name' => 'Nodogymnus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Achiridae')->id
        ]);



        BioGender::create([
            'id' => '1886',
            'scientific_name' => 'Nomeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nomeidae')->id
        ]);



        BioGender::create([
            'id' => '1887',
            'scientific_name' => 'Nomonyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1888',
            'scientific_name' => 'Norops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloidae')->id
        ]);



        BioGender::create([
            'id' => '1889',
            'scientific_name' => 'Nosferatu',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1890',
            'scientific_name' => 'Notacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Notacanthidae')->id
        ]);



        BioGender::create([
            'id' => '1891',
            'scientific_name' => 'Notarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1892',
            'scientific_name' => 'Notharchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bucconidae')->id
        ]);



        BioGender::create([
            'id' => '1893',
            'scientific_name' => 'Notiochelidon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '1894',
            'scientific_name' => 'Notiosorex',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);



        BioGender::create([
            'id' => '1895',
            'scientific_name' => 'Notocitellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '1896',
            'scientific_name' => 'Notolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);



        BioGender::create([
            'id' => '1897',
            'scientific_name' => 'Notolychnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1898',
            'scientific_name' => 'Notophthalmus',
            'common_name' => '"Eastern newts, Tritones"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salamandridae')->id
        ]);



        BioGender::create([
            'id' => '1899',
            'scientific_name' => 'Notophtophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1900',
            'scientific_name' => 'Notorynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexanchidae')->id
        ]);



        BioGender::create([
            'id' => '1901',
            'scientific_name' => 'Notoscopelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1902',
            'scientific_name' => 'Notosema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '1903',
            'scientific_name' => 'Nototriton',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1904',
            'scientific_name' => 'Nototropis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1905',
            'scientific_name' => 'Notropis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '1906',
            'scientific_name' => 'Novaculichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '1907',
            'scientific_name' => 'Nucifraga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);



        BioGender::create([
            'id' => '1908',
            'scientific_name' => 'Numenius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '1909',
            'scientific_name' => 'Nyctanassa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);



        BioGender::create([
            'id' => '1910',
            'scientific_name' => 'Nyctanolis',
            'common_name' => '"Long-limbed salamanders, Salamandras de patas largas, Tlaconetes saltadores"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1911',
            'scientific_name' => 'Nycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nycteridae')->id
        ]);



        BioGender::create([
            'id' => '1912',
            'scientific_name' => 'Nyctibius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nyctibiidae')->id
        ]);



        BioGender::create([
            'id' => '1913',
            'scientific_name' => 'Nycticeius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1914',
            'scientific_name' => 'Nycticejus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '1915',
            'scientific_name' => 'Nycticorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);



        BioGender::create([
            'id' => '1916',
            'scientific_name' => 'Nyctidromus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);



        BioGender::create([
            'id' => '1917',
            'scientific_name' => 'Nyctinomops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);



        BioGender::create([
            'id' => '1918',
            'scientific_name' => 'Nyctiphrynus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);



        BioGender::create([
            'id' => '1919',
            'scientific_name' => 'Nyctomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1920',
            'scientific_name' => 'Nyctophus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '1921',
            'scientific_name' => 'Occidentarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '1922',
            'scientific_name' => 'Oceanites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Oceanitidae')->id
        ]);



        BioGender::create([
            'id' => '1923',
            'scientific_name' => 'Oceanodroma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hydrobatidae')->id
        ]);



        BioGender::create([
            'id' => '1924',
            'scientific_name' => 'Ochetodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1925',
            'scientific_name' => 'Ocyanthias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '1926',
            'scientific_name' => 'Ocyurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '1927',
            'scientific_name' => 'Odocoileus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);



        BioGender::create([
            'id' => '1928',
            'scientific_name' => 'Odontaspis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontaspididae')->id
        ]);



        BioGender::create([
            'id' => '1929',
            'scientific_name' => 'Odontocoelus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cervidae')->id
        ]);



        BioGender::create([
            'id' => '1930',
            'scientific_name' => 'Odontognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '1931',
            'scientific_name' => 'Odontophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);



        BioGender::create([
            'id' => '1932',
            'scientific_name' => 'Odontopyxis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);



        BioGender::create([
            'id' => '1933',
            'scientific_name' => 'Odontoscion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1934',
            'scientific_name' => 'Oedemia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '1935',
            'scientific_name' => 'Oedicoryphus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corytophanidae')->id
        ]);



        BioGender::create([
            'id' => '1936',
            'scientific_name' => 'Oedipina',
            'common_name' => '"Salamandras lombriz, Salamandras tropicales, Tropical worm salamanders"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1937',
            'scientific_name' => 'Oedipus',
            'common_name' => '',
            'status' => 'No disponible',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '1938',
            'scientific_name' => 'Oenanthe',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muscicapidae')->id
        ]);



        BioGender::create([
            'id' => '1939',
            'scientific_name' => 'Ogallalabatrachus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '1940',
            'scientific_name' => 'Ogcocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ogcocephalidae')->id
        ]);



        BioGender::create([
            'id' => '1941',
            'scientific_name' => 'Ogilbia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '1942',
            'scientific_name' => 'Ogmius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1943',
            'scientific_name' => 'Oligocephalus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);



        BioGender::create([
            'id' => '1944',
            'scientific_name' => 'Oligocottus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '1945',
            'scientific_name' => 'Oligoplites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '1946',
            'scientific_name' => 'Oligopus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '1947',
            'scientific_name' => 'Oligoryzomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1948',
            'scientific_name' => 'Oligosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '1949',
            'scientific_name' => 'Ollotis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);



        BioGender::create([
            'id' => '1950',
            'scientific_name' => 'Ololygon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '1951',
            'scientific_name' => 'Omochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1952',
            'scientific_name' => 'Omosudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepisauridae')->id
        ]);



        BioGender::create([
            'id' => '1953',
            'scientific_name' => 'Oncorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salmonidae')->id
        ]);



        BioGender::create([
            'id' => '1954',
            'scientific_name' => 'Oncostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1955',
            'scientific_name' => 'Ondatra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1956',
            'scientific_name' => 'Onychochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '1957',
            'scientific_name' => 'Onychomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1958',
            'scientific_name' => 'Onychoprion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '1959',
            'scientific_name' => 'Onychorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Onychorhynchidae')->id
        ]);



        BioGender::create([
            'id' => '1960',
            'scientific_name' => 'Onychotria',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '1961',
            'scientific_name' => 'Oostethus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '1962',
            'scientific_name' => 'Opheodrys',
            'common_name' => 'Culebras verdes norteñas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '1963',
            'scientific_name' => 'Ophicephalus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Channidae')->id
        ]);



        BioGender::create([
            'id' => '1964',
            'scientific_name' => 'Ophichelone',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);



        BioGender::create([
            'id' => '1965',
            'scientific_name' => 'Ophichthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1966',
            'scientific_name' => 'Ophichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synbranchidae')->id
        ]);



        BioGender::create([
            'id' => '1967',
            'scientific_name' => 'Ophidion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '1968',
            'scientific_name' => 'Ophioblennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '1969',
            'scientific_name' => 'Ophiodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hexagrammidae')->id
        ]);



        BioGender::create([
            'id' => '1970',
            'scientific_name' => 'Ophioscion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '1971',
            'scientific_name' => 'Ophisaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);



        BioGender::create([
            'id' => '1972',
            'scientific_name' => 'Ophisoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '1973',
            'scientific_name' => 'Ophisternon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synbranchidae')->id
        ]);



        BioGender::create([
            'id' => '1974',
            'scientific_name' => 'Ophisurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '1975',
            'scientific_name' => 'Ophryacus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '1976',
            'scientific_name' => 'Opisthonema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '1977',
            'scientific_name' => 'Opisthopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '1978',
            'scientific_name' => 'Opistognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Opistognathidae')->id
        ]);



        BioGender::create([
            'id' => '1979',
            'scientific_name' => 'Oporornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1980',
            'scientific_name' => 'Opsanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachoididae')->id
        ]);



        BioGender::create([
            'id' => '1981',
            'scientific_name' => 'Orcinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '1982',
            'scientific_name' => 'Oreochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '1983',
            'scientific_name' => 'Oreophasis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cracidae')->id
        ]);



        BioGender::create([
            'id' => '1984',
            'scientific_name' => 'Oreortyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);



        BioGender::create([
            'id' => '1985',
            'scientific_name' => 'Oreoscoptes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);



        BioGender::create([
            'id' => '1986',
            'scientific_name' => 'Oreothlypis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '1987',
            'scientific_name' => 'Oriturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '1988',
            'scientific_name' => 'Ornithion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '1989',
            'scientific_name' => 'Ortalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cracidae')->id
        ]);



        BioGender::create([
            'id' => '1990',
            'scientific_name' => 'Orthagoriscus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molidae')->id
        ]);



        BioGender::create([
            'id' => '1991',
            'scientific_name' => 'Orthogeomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '1992',
            'scientific_name' => 'Orthonopias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '1993',
            'scientific_name' => 'Orthopristis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1994',
            'scientific_name' => 'Orthostoechus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '1995',
            'scientific_name' => 'Orthriomys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1996',
            'scientific_name' => 'Oryctolagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leporidae')->id
        ]);



        BioGender::create([
            'id' => '1997',
            'scientific_name' => 'Oryzoborus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emberizidae')->id
        ]);



        BioGender::create([
            'id' => '1998',
            'scientific_name' => 'Oryzomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '1999',
            'scientific_name' => 'Oscura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);


        BioGender::create([
            'id' => '2000',
            'scientific_name' => 'Osgoodomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2001',
            'scientific_name' => 'Osmerus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Osmeridae')->id
        ]);



        BioGender::create([
            'id' => '2002',
            'scientific_name' => 'Osteoglossum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Osteoglossidae')->id
        ]);



        BioGender::create([
            'id' => '2003',
            'scientific_name' => 'Ostracion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ostraciidae')->id
        ]);



        BioGender::create([
            'id' => '2004',
            'scientific_name' => 'Othonops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2005',
            'scientific_name' => 'Otognosis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);



        BioGender::create([
            'id' => '2006',
            'scientific_name' => 'Otolithes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2007',
            'scientific_name' => 'Otonyctomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2008',
            'scientific_name' => 'Otophidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '2009',
            'scientific_name' => 'Otopterus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2010',
            'scientific_name' => 'Otospermophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2011',
            'scientific_name' => 'Ototylomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2012',
            'scientific_name' => 'Otus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '2013',
            'scientific_name' => 'Ovis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bovidae')->id
        ]);



        BioGender::create([
            'id' => '2014',
            'scientific_name' => 'Oxybelis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2015',
            'scientific_name' => 'Oxycirrhites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cirrhitidae')->id
        ]);



        BioGender::create([
            'id' => '2016',
            'scientific_name' => 'Oxyjulis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2017',
            'scientific_name' => 'Oxylebius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zaniolepididae')->id
        ]);



        BioGender::create([
            'id' => '2018',
            'scientific_name' => 'Oxynotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Oxynotidae')->id
        ]);



        BioGender::create([
            'id' => '2019',
            'scientific_name' => 'Oxyporhamphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hemiramphidae')->id
        ]);



        BioGender::create([
            'id' => '2020',
            'scientific_name' => 'Oxyrhina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2021',
            'scientific_name' => 'Oxyrhopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2022',
            'scientific_name' => 'Oxyura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '2023',
            'scientific_name' => 'Oxyurichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2024',
            'scientific_name' => 'Pachymedusa',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllomedusidae')->id
        ]);



        BioGender::create([
            'id' => '2025',
            'scientific_name' => 'Pachyramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tityridae')->id
        ]);



        BioGender::create([
            'id' => '2026',
            'scientific_name' => 'Pachysylvia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);



        BioGender::create([
            'id' => '2027',
            'scientific_name' => 'Pacificogramma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2028',
            'scientific_name' => 'Pagellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2029',
            'scientific_name' => 'Pagrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2030',
            'scientific_name' => 'Paludicola',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2031',
            'scientific_name' => 'Pampa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2032',
            'scientific_name' => 'Pandion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pandionidae')->id
        ]);



        BioGender::create([
            'id' => '2033',
            'scientific_name' => 'Pangasianodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pangasiidae')->id
        ]);



        BioGender::create([
            'id' => '2034',
            'scientific_name' => 'Pangasius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pangasiidae')->id
        ]);



        BioGender::create([
            'id' => '2035',
            'scientific_name' => 'Pangio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cobitidae')->id
        ]);



        BioGender::create([
            'id' => '2036',
            'scientific_name' => 'Panthera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '2037',
            'scientific_name' => 'Pantherophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2038',
            'scientific_name' => 'Pantodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pantodontidae')->id
        ]);



        BioGender::create([
            'id' => '2039',
            'scientific_name' => 'Pantosteus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '2040',
            'scientific_name' => 'Panyptila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apodidae')->id
        ]);



        BioGender::create([
            'id' => '2041',
            'scientific_name' => 'Pappogeomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '2042',
            'scientific_name' => 'Parabathymyrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2043',
            'scientific_name' => 'Parablennius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2044',
            'scientific_name' => 'Parabuteo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '2045',
            'scientific_name' => 'Paracaristius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caristiidae')->id
        ]);



        BioGender::create([
            'id' => '2046',
            'scientific_name' => 'Paracheirodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2047',
            'scientific_name' => 'Parachromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2048',
            'scientific_name' => 'Paraclaravis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '2049',
            'scientific_name' => 'Paraclinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '2050',
            'scientific_name' => 'Paraconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2051',
            'scientific_name' => 'Paradiplogrammus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Callionymidae')->id
        ]);



        BioGender::create([
            'id' => '2052',
            'scientific_name' => 'Parahollardia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triacanthodidae')->id
        ]);



        BioGender::create([
            'id' => '2053',
            'scientific_name' => 'Paralabrax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2054',
            'scientific_name' => 'Paralepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);



        BioGender::create([
            'id' => '2055',
            'scientific_name' => 'Paraletharchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2056',
            'scientific_name' => 'Paralichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2057',
            'scientific_name' => 'Paralimanda',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poecilopsettidae')->id
        ]);



        BioGender::create([
            'id' => '2058',
            'scientific_name' => 'Paraliparis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Liparidae')->id
        ]);



        BioGender::create([
            'id' => '2059',
            'scientific_name' => 'Paralonchurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2060',
            'scientific_name' => 'Parambassis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambassidae')->id
        ]);



        BioGender::create([
            'id' => '2061',
            'scientific_name' => 'Paramyxine',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '2062',
            'scientific_name' => 'Paraneetroplus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2063',
            'scientific_name' => 'Paranthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2064',
            'scientific_name' => 'Parapetenia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2065',
            'scientific_name' => 'Parapsettus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ephippidae')->id
        ]);



        BioGender::create([
            'id' => '2066',
            'scientific_name' => 'Parasalmo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salmonidae')->id
        ]);



        BioGender::create([
            'id' => '2067',
            'scientific_name' => 'Parastathmonotus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '2068',
            'scientific_name' => 'Parastrellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2069',
            'scientific_name' => 'Parasudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chlorophthalmidae')->id
        ]);



        BioGender::create([
            'id' => '2070',
            'scientific_name' => 'Paratheraps',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2071',
            'scientific_name' => 'Parazen',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parazenidae')->id
        ]);



        BioGender::create([
            'id' => '2072',
            'scientific_name' => 'Pardirallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '2073',
            'scientific_name' => 'Pareques',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2074',
            'scientific_name' => 'Parexocoetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '2075',
            'scientific_name' => 'Pariemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2076',
            'scientific_name' => 'Parkesia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2077',
            'scientific_name' => 'Parmaturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);



        BioGender::create([
            'id' => '2078',
            'scientific_name' => 'Parophidion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '2079',
            'scientific_name' => 'Parophrys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '2080',
            'scientific_name' => 'Parrella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2081',
            'scientific_name' => 'Parula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2082',
            'scientific_name' => 'Parvilux',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2083',
            'scientific_name' => 'Parvimolge',
            'common_name' => '"Mexican dwarf salamanders, Salamandras mexicanas enanas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '2084',
            'scientific_name' => 'Passer',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passeridae')->id
        ]);



        BioGender::create([
            'id' => '2085',
            'scientific_name' => 'Passerculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2086',
            'scientific_name' => 'Passerella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2087',
            'scientific_name' => 'Passerina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '2088',
            'scientific_name' => 'Pastor',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sturnidae')->id
        ]);



        BioGender::create([
            'id' => '2089',
            'scientific_name' => 'Patagioenas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '2090',
            'scientific_name' => 'Pecari',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tayassuidae')->id
        ]);



        BioGender::create([
            'id' => '2091',
            'scientific_name' => 'Pectoglossa',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2092',
            'scientific_name' => 'Pegea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2093',
            'scientific_name' => 'Pelamis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Elapidae')->id
        ]);



        BioGender::create([
            'id' => '2094',
            'scientific_name' => 'Pelecanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pelecanidae')->id
        ]);



        BioGender::create([
            'id' => '2095',
            'scientific_name' => 'Pellisolus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Platytroctidae')->id
        ]);



        BioGender::create([
            'id' => '2096',
            'scientific_name' => 'Pellona',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '2097',
            'scientific_name' => 'Pempheris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pempheridae')->id
        ]);



        BioGender::create([
            'id' => '2098',
            'scientific_name' => 'Penelope',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cracidae')->id
        ]);



        BioGender::create([
            'id' => '2099',
            'scientific_name' => 'Penelopina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cracidae')->id
        ]);



        BioGender::create([
            'id' => '2100',
            'scientific_name' => 'Penetopteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '2101',
            'scientific_name' => 'Peponocephala',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '2102',
            'scientific_name' => 'Peprilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stromateidae')->id
        ]);



        BioGender::create([
            'id' => '2103',
            'scientific_name' => 'Perca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);



        BioGender::create([
            'id' => '2104',
            'scientific_name' => 'Percina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Percidae')->id
        ]);



        BioGender::create([
            'id' => '2105',
            'scientific_name' => 'Perimyotis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2106',
            'scientific_name' => 'Perissias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);



        BioGender::create([
            'id' => '2107',
            'scientific_name' => 'Peristedion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Peristediidae')->id
        ]);



        BioGender::create([
            'id' => '2108',
            'scientific_name' => 'Perkinsia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '2109',
            'scientific_name' => 'Perodipus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);



        BioGender::create([
            'id' => '2110',
            'scientific_name' => 'Perognathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heteromyidae')->id
        ]);



        BioGender::create([
            'id' => '2111',
            'scientific_name' => 'Peromyscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2112',
            'scientific_name' => 'Perophora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Perophoridae')->id
        ]);



        BioGender::create([
            'id' => '2113',
            'scientific_name' => 'Peropteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);



        BioGender::create([
            'id' => '2114',
            'scientific_name' => 'Petenia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2115',
            'scientific_name' => 'Pethia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2116',
            'scientific_name' => 'Petrochelidon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2117',
            'scientific_name' => 'Petromyzon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Petromyzontidae')->id
        ]);



        BioGender::create([
            'id' => '2118',
            'scientific_name' => 'Petrosaurus',
            'common_name' => 'Lagartijas de roca',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2119',
            'scientific_name' => 'Petrotyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '2120',
            'scientific_name' => 'Peucaea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2121',
            'scientific_name' => 'Peucedramus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Peucedramidae')->id
        ]);



        BioGender::create([
            'id' => '2122',
            'scientific_name' => 'Phaenomonas',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2123',
            'scientific_name' => 'Phaeochroa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2124',
            'scientific_name' => 'Phaeoptila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2125',
            'scientific_name' => 'Phaeoptyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apogonidae')->id
        ]);



        BioGender::create([
            'id' => '2126',
            'scientific_name' => 'Phaethon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phaethontidae')->id
        ]);



        BioGender::create([
            'id' => '2127',
            'scientific_name' => 'Phaethornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2128',
            'scientific_name' => 'Phainopepla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ptiliogonatidae')->id
        ]);



        BioGender::create([
            'id' => '2129',
            'scientific_name' => 'Phalacrocorax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phalacrocoracidae')->id
        ]);



        BioGender::create([
            'id' => '2130',
            'scientific_name' => 'Phalaenoptilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caprimulgidae')->id
        ]);



        BioGender::create([
            'id' => '2131',
            'scientific_name' => 'Phalaropus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2132',
            'scientific_name' => 'Phallichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2133',
            'scientific_name' => 'Phallusia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ascidiidae')->id
        ]);



        BioGender::create([
            'id' => '2134',
            'scientific_name' => 'Phanerodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '2135',
            'scientific_name' => 'Phanops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);



        BioGender::create([
            'id' => '2136',
            'scientific_name' => 'Pharomachrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trogonidae')->id
        ]);



        BioGender::create([
            'id' => '2137',
            'scientific_name' => 'Pharyngodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2138',
            'scientific_name' => 'Phasianus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phasianidae')->id
        ]);



        BioGender::create([
            'id' => '2139',
            'scientific_name' => 'Pherallodiscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '2140',
            'scientific_name' => 'Pheucticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '2141',
            'scientific_name' => 'Pheugopedius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2142',
            'scientific_name' => 'Philander',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);



        BioGender::create([
            'id' => '2143',
            'scientific_name' => 'Philhydrus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2144',
            'scientific_name' => 'Philomachus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2145',
            'scientific_name' => 'Philortyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Odontophoridae')->id
        ]);



        BioGender::create([
            'id' => '2146',
            'scientific_name' => 'Philypnus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleotridae')->id
        ]);



        BioGender::create([
            'id' => '2147',
            'scientific_name' => 'Phoca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phocidae')->id
        ]);



        BioGender::create([
            'id' => '2148',
            'scientific_name' => 'Phocoena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phocoenidae')->id
        ]);



        BioGender::create([
            'id' => '2149',
            'scientific_name' => 'Phocoenoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phocoenidae')->id
        ]);



        BioGender::create([
            'id' => '2150',
            'scientific_name' => 'Phoebastria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Diomedeidae')->id
        ]);



        BioGender::create([
            'id' => '2151',
            'scientific_name' => 'Phoenicopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phoenicopteridae')->id
        ]);



        BioGender::create([
            'id' => '2152',
            'scientific_name' => 'Phractocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pimelodidae')->id
        ]);



        BioGender::create([
            'id' => '2153',
            'scientific_name' => 'Phrynohyas',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2154',
            'scientific_name' => 'Phrynonax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2155',
            'scientific_name' => 'Phrynosoma',
            'common_name' => '"Camaleones, Lagartijas cornudas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2156',
            'scientific_name' => 'Phthanophaneron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anomalopidae')->id
        ]);



        BioGender::create([
            'id' => '2157',
            'scientific_name' => 'Phtheirichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echeneidae')->id
        ]);



        BioGender::create([
            'id' => '2158',
            'scientific_name' => 'Phyllobates',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dendrobatidae')->id
        ]);



        BioGender::create([
            'id' => '2159',
            'scientific_name' => 'Phyllodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2160',
            'scientific_name' => 'Phylloderma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2161',
            'scientific_name' => 'Phyllomedusa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllomedusidae')->id
        ]);



        BioGender::create([
            'id' => '2162',
            'scientific_name' => 'Phyllorhynchus',
            'common_name' => 'Culebras nariz de hoja',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2163',
            'scientific_name' => 'Phylloscopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phylloscopidae')->id
        ]);



        BioGender::create([
            'id' => '2164',
            'scientific_name' => 'Phyllostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2165',
            'scientific_name' => 'Phyllostomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2166',
            'scientific_name' => 'Phymatolepis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2167',
            'scientific_name' => 'Physalaemus',
            'common_name' => '"Dwarf frogs, Sapitos"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2168',
            'scientific_name' => 'Physeter',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Physeteridae')->id
        ]);



        BioGender::create([
            'id' => '2169',
            'scientific_name' => 'Physiculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moridae')->id
        ]);



        BioGender::create([
            'id' => '2170',
            'scientific_name' => 'Physignathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agamidae')->id
        ]);



        BioGender::create([
            'id' => '2171',
            'scientific_name' => 'Piaractus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrasalmidae')->id
        ]);



        BioGender::create([
            'id' => '2172',
            'scientific_name' => 'Piaya',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);



        BioGender::create([
            'id' => '2173',
            'scientific_name' => 'Picoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);



        BioGender::create([
            'id' => '2174',
            'scientific_name' => 'Piculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);



        BioGender::create([
            'id' => '2175',
            'scientific_name' => 'Pikea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2176',
            'scientific_name' => 'Pimelepterus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '2177',
            'scientific_name' => 'Pimelodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pimelodidae')->id
        ]);



        BioGender::create([
            'id' => '2178',
            'scientific_name' => 'Pimephales',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2179',
            'scientific_name' => 'Pionopsitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '2180',
            'scientific_name' => 'Pionus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '2181',
            'scientific_name' => 'Pipilo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2182',
            'scientific_name' => 'Pipistrellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2183',
            'scientific_name' => 'Pipra',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pipridae')->id
        ]);



        BioGender::create([
            'id' => '2184',
            'scientific_name' => 'Piranga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '2185',
            'scientific_name' => 'Pisodonophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2186',
            'scientific_name' => 'Pitangus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2187',
            'scientific_name' => 'Pituophis',
            'common_name' => 'Cincuates',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2188',
            'scientific_name' => 'Pizonyx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2189',
            'scientific_name' => 'Plagiodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2190',
            'scientific_name' => 'Plagiotremus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2191',
            'scientific_name' => 'Plagopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2192',
            'scientific_name' => 'Plastoseryx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loxocemidae')->id
        ]);



        BioGender::create([
            'id' => '2193',
            'scientific_name' => 'Platalea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Threskiornithidae')->id
        ]);



        BioGender::create([
            'id' => '2194',
            'scientific_name' => 'Platax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ephippidae')->id
        ]);



        BioGender::create([
            'id' => '2195',
            'scientific_name' => 'Platophrys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);



        BioGender::create([
            'id' => '2196',
            'scientific_name' => 'Platybelone',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);



        BioGender::create([
            'id' => '2197',
            'scientific_name' => 'Platyberyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Caristiidae')->id
        ]);



        BioGender::create([
            'id' => '2198',
            'scientific_name' => 'Platygeomys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '2199',
            'scientific_name' => 'Platygillellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dactyloscopidae')->id
        ]);



        BioGender::create([
            'id' => '2200',
            'scientific_name' => 'Platyglossus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2201',
            'scientific_name' => 'Platypeltis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);



        BioGender::create([
            'id' => '2202',
            'scientific_name' => 'Platypodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2203',
            'scientific_name' => 'Platypoecilus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2204',
            'scientific_name' => 'Platyrhina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Platyrhinidae')->id
        ]);



        BioGender::create([
            'id' => '2205',
            'scientific_name' => 'Platyrhinoidis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Platyrhinidae')->id
        ]);



        BioGender::create([
            'id' => '2206',
            'scientific_name' => 'Platyrinchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2207',
            'scientific_name' => 'Platyrrhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2208',
            'scientific_name' => 'Platythyra',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '2209',
            'scientific_name' => 'Plecotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2210',
            'scientific_name' => 'Plectranthias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2211',
            'scientific_name' => 'Plectrohyla',
            'common_name' => '"Ranas pintadas, Ranitas de dedos delgados, Ranitas de dedos espinosos, Spikethumb frogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2212',
            'scientific_name' => 'Plectropomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2213',
            'scientific_name' => 'Plectrypops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '2214',
            'scientific_name' => 'Plegadis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Threskiornithidae')->id
        ]);



        BioGender::create([
            'id' => '2215',
            'scientific_name' => 'Plestiodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2216',
            'scientific_name' => 'Pleurodema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2217',
            'scientific_name' => 'Pleuronectes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '2218',
            'scientific_name' => 'Pleuronichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '2219',
            'scientific_name' => 'Plioambystoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2220',
            'scientific_name' => 'Pliocercus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2221',
            'scientific_name' => 'Pliosteostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '2222',
            'scientific_name' => 'Pluto',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synbranchidae')->id
        ]);



        BioGender::create([
            'id' => '2223',
            'scientific_name' => 'Pluvialis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charadriidae')->id
        ]);



        BioGender::create([
            'id' => '2224',
            'scientific_name' => 'Poblana',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '2225',
            'scientific_name' => 'Podiceps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Podicipedidae')->id
        ]);



        BioGender::create([
            'id' => '2226',
            'scientific_name' => 'Podilymbus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Podicipedidae')->id
        ]);



        BioGender::create([
            'id' => '2227',
            'scientific_name' => 'Poecile',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paridae')->id
        ]);



        BioGender::create([
            'id' => '2228',
            'scientific_name' => 'Poecilia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2229',
            'scientific_name' => 'Poeciliodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2230',
            'scientific_name' => 'Poeciliopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2231',
            'scientific_name' => 'Poecilophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2232',
            'scientific_name' => 'Poecilopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poecilopsettidae')->id
        ]);



        BioGender::create([
            'id' => '2233',
            'scientific_name' => 'Poecilostreptus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2234',
            'scientific_name' => 'Poecilotriccus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2235',
            'scientific_name' => 'Pogona',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agamidae')->id
        ]);



        BioGender::create([
            'id' => '2236',
            'scientific_name' => 'Pogonias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2237',
            'scientific_name' => 'Pogonophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2238',
            'scientific_name' => 'Polioptila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polioptilidae')->id
        ]);



        BioGender::create([
            'id' => '2239',
            'scientific_name' => 'Polistotrema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myxinidae')->id
        ]);



        BioGender::create([
            'id' => '2240',
            'scientific_name' => 'Pollichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2241',
            'scientific_name' => 'Pollimyrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormyridae')->id
        ]);



        BioGender::create([
            'id' => '2242',
            'scientific_name' => 'Polyborus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Falconidae')->id
        ]);



        BioGender::create([
            'id' => '2243',
            'scientific_name' => 'Polycarpa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Styelidae')->id
        ]);



        BioGender::create([
            'id' => '2244',
            'scientific_name' => 'Polyclinum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polyclinidae')->id
        ]);



        BioGender::create([
            'id' => '2245',
            'scientific_name' => 'Polydactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polynemidae')->id
        ]);



        BioGender::create([
            'id' => '2246',
            'scientific_name' => 'Polyipnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);



        BioGender::create([
            'id' => '2247',
            'scientific_name' => 'Polylepion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2248',
            'scientific_name' => 'Polymetme',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2249',
            'scientific_name' => 'Polymixia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polymixiidae')->id
        ]);



        BioGender::create([
            'id' => '2250',
            'scientific_name' => 'Polynemus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polynemidae')->id
        ]);



        BioGender::create([
            'id' => '2251',
            'scientific_name' => 'Polypterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polypteridae')->id
        ]);



        BioGender::create([
            'id' => '2252',
            'scientific_name' => 'Polysyncraton',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didemnidae')->id
        ]);



        BioGender::create([
            'id' => '2253',
            'scientific_name' => 'Pomacanthodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2254',
            'scientific_name' => 'Pomacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2255',
            'scientific_name' => 'Pomacentrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '2256',
            'scientific_name' => 'Pomadasys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '2257',
            'scientific_name' => 'Pomatomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomatomidae')->id
        ]);



        BioGender::create([
            'id' => '2258',
            'scientific_name' => 'Pomotis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '2259',
            'scientific_name' => 'Pomoxis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '2260',
            'scientific_name' => 'Pontinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2261',
            'scientific_name' => 'Pontosudis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);



        BioGender::create([
            'id' => '2262',
            'scientific_name' => 'Pooecetes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2263',
            'scientific_name' => 'Porichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachoididae')->id
        ]);



        BioGender::create([
            'id' => '2264',
            'scientific_name' => 'Poriodogaster',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xantusiidae')->id
        ]);



        BioGender::create([
            'id' => '2265',
            'scientific_name' => 'Poromitra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melamphaidae')->id
        ]);



        BioGender::create([
            'id' => '2266',
            'scientific_name' => 'Poronotus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stromateidae')->id
        ]);



        BioGender::create([
            'id' => '2267',
            'scientific_name' => 'Porphyrio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '2268',
            'scientific_name' => 'Porphyrula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '2269',
            'scientific_name' => 'Porthidium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '2270',
            'scientific_name' => 'Porzana',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '2271',
            'scientific_name' => 'Potamarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2272',
            'scientific_name' => 'Potos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);



        BioGender::create([
            'id' => '2273',
            'scientific_name' => 'Priacanthus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Priacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2274',
            'scientific_name' => 'Priapella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2275',
            'scientific_name' => 'Prietella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '2276',
            'scientific_name' => 'Priodonophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2277',
            'scientific_name' => 'Priolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2278',
            'scientific_name' => 'Prionace',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2279',
            'scientific_name' => 'Prionodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2280',
            'scientific_name' => 'Prionotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triglidae')->id
        ]);



        BioGender::create([
            'id' => '2281',
            'scientific_name' => 'Prionurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);



        BioGender::create([
            'id' => '2282',
            'scientific_name' => 'Pristella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2283',
            'scientific_name' => 'Pristigaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristigasteridae')->id
        ]);



        BioGender::create([
            'id' => '2284',
            'scientific_name' => 'Pristigenys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Priacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2285',
            'scientific_name' => 'Pristipoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '2286',
            'scientific_name' => 'Pristipomoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '2287',
            'scientific_name' => 'Pristis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pristidae')->id
        ]);



        BioGender::create([
            'id' => '2288',
            'scientific_name' => 'Pristiurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);



        BioGender::create([
            'id' => '2289',
            'scientific_name' => 'Proboscidea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);



        BioGender::create([
            'id' => '2290',
            'scientific_name' => 'Procellaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);



        BioGender::create([
            'id' => '2291',
            'scientific_name' => 'Procinura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2292',
            'scientific_name' => 'Procyon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procyonidae')->id
        ]);



        BioGender::create([
            'id' => '2293',
            'scientific_name' => 'Profundulus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Profundulidae')->id
        ]);



        BioGender::create([
            'id' => '2294',
            'scientific_name' => 'Prognathodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);



        BioGender::create([
            'id' => '2295',
            'scientific_name' => 'Progne',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2296',
            'scientific_name' => 'Prognichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Exocoetidae')->id
        ]);



        BioGender::create([
            'id' => '2297',
            'scientific_name' => 'Promicrops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2298',
            'scientific_name' => 'Promops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);



        BioGender::create([
            'id' => '2299',
            'scientific_name' => 'Pronotogrammus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2300',
            'scientific_name' => 'Protemblemaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '2301',
            'scientific_name' => 'Protomyctophum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2302',
            'scientific_name' => 'Protonotaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2303',
            'scientific_name' => 'Psalidodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2304',
            'scientific_name' => 'Psaltriparus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Aegithalidae')->id
        ]);



        BioGender::create([
            'id' => '2305',
            'scientific_name' => 'Psarocolius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '2306',
            'scientific_name' => 'Psednoblennius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '2307',
            'scientific_name' => 'Psenes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nomeidae')->id
        ]);



        BioGender::create([
            'id' => '2308',
            'scientific_name' => 'Psettichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '2309',
            'scientific_name' => 'Psettus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ephippidae')->id
        ]);



        BioGender::create([
            'id' => '2310',
            'scientific_name' => 'Pseudacris',
            'common_name' => '"Chorus frogs, Falsas ranas grillo, Ranas de coro"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2311',
            'scientific_name' => 'Pseudastur',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '2312',
            'scientific_name' => 'Pseudelaphe',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2313',
            'scientific_name' => 'Pseudemblemaria',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaenopsidae')->id
        ]);



        BioGender::create([
            'id' => '2314',
            'scientific_name' => 'Pseudemys',
            'common_name' => 'Falsas jicoteas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2315',
            'scientific_name' => 'Pseudobalistes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);



        BioGender::create([
            'id' => '2316',
            'scientific_name' => 'Pseudobatos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinobatidae')->id
        ]);



        BioGender::create([
            'id' => '2317',
            'scientific_name' => 'Pseudobulweria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);



        BioGender::create([
            'id' => '2318',
            'scientific_name' => 'Pseudobythites',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '2319',
            'scientific_name' => 'Pseudocaranx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2320',
            'scientific_name' => 'Pseudocarcharias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pseudocarchariidae')->id
        ]);



        BioGender::create([
            'id' => '2321',
            'scientific_name' => 'Pseudochaetodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);



        BioGender::create([
            'id' => '2322',
            'scientific_name' => 'Pseudocirrhites',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cirrhitidae')->id
        ]);



        BioGender::create([
            'id' => '2323',
            'scientific_name' => 'Pseudoeurycea',
            'common_name' => '"False brook salamanders, Tlaconetes"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '2324',
            'scientific_name' => 'Pseudoficimia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2325',
            'scientific_name' => 'Pseudogramma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2326',
            'scientific_name' => 'Pseudojulis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2327',
            'scientific_name' => 'Pseudojuloides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2328',
            'scientific_name' => 'Pseudoleptodeira',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2329',
            'scientific_name' => 'Pseudomyrophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2330',
            'scientific_name' => 'Pseudophallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '2331',
            'scientific_name' => 'Pseudopriacanthus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Priacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2332',
            'scientific_name' => 'Pseudoraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '2333',
            'scientific_name' => 'Pseudorca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '2334',
            'scientific_name' => 'Pseudoscarus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);



        BioGender::create([
            'id' => '2335',
            'scientific_name' => 'Pseudoscops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '2336',
            'scientific_name' => 'Pseudostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '2337',
            'scientific_name' => 'Pseudotropheus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2338',
            'scientific_name' => 'Pseudoxiphophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2339',
            'scientific_name' => 'Pseudupeneus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mullidae')->id
        ]);



        BioGender::create([
            'id' => '2340',
            'scientific_name' => 'Pseustes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2341',
            'scientific_name' => 'Psilorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Corvidae')->id
        ]);



        BioGender::create([
            'id' => '2342',
            'scientific_name' => 'Psiloscops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '2343',
            'scientific_name' => 'Psilotris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2344',
            'scientific_name' => 'Psittacara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '2345',
            'scientific_name' => 'Psittacula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittaculidae')->id
        ]);



        BioGender::create([
            'id' => '2346',
            'scientific_name' => 'Pteraclis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);



        BioGender::create([
            'id' => '2347',
            'scientific_name' => 'Ptereleotris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2348',
            'scientific_name' => 'Pternohyla',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2349',
            'scientific_name' => 'Pterodroma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);



        BioGender::create([
            'id' => '2350',
            'scientific_name' => 'Pterogasterus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);



        BioGender::create([
            'id' => '2351',
            'scientific_name' => 'Pteroglossus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ramphastidae')->id
        ]);



        BioGender::create([
            'id' => '2352',
            'scientific_name' => 'Pterois',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2353',
            'scientific_name' => 'Pterolamiops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2354',
            'scientific_name' => 'Pteromylaeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '2355',
            'scientific_name' => 'Pteronotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mormoopidae')->id
        ]);



        BioGender::create([
            'id' => '2356',
            'scientific_name' => 'Pterophyllum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2357',
            'scientific_name' => 'Pteroplatea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gymnuridae')->id
        ]);



        BioGender::create([
            'id' => '2358',
            'scientific_name' => 'Pteropodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2359',
            'scientific_name' => 'Pterygoplichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '2360',
            'scientific_name' => 'Ptiliogonys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ptiliogonatidae')->id
        ]);



        BioGender::create([
            'id' => '2361',
            'scientific_name' => 'Ptychemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2362',
            'scientific_name' => 'Ptychocheilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2363',
            'scientific_name' => 'Ptychohyla',
            'common_name' => '"Mountain stream frogs, Ranas de arroyo con pliegue, Ranitas de arroyo de montaña"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2364',
            'scientific_name' => 'Ptychoramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);



        BioGender::create([
            'id' => '2365',
            'scientific_name' => 'Ptychostomus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '2366',
            'scientific_name' => 'Puffinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Procellariidae')->id
        ]);



        BioGender::create([
            'id' => '2367',
            'scientific_name' => 'Pulsatrix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '2368',
            'scientific_name' => 'Puma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Felidae')->id
        ]);



        BioGender::create([
            'id' => '2369',
            'scientific_name' => 'Puntigrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2370',
            'scientific_name' => 'Puntius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2371',
            'scientific_name' => 'Putorius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '2372',
            'scientific_name' => 'Pycnomma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2373',
            'scientific_name' => 'Pycnonotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pycnonotidae')->id
        ]);



        BioGender::create([
            'id' => '2374',
            'scientific_name' => 'Pygocentrus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrasalmidae')->id
        ]);



        BioGender::create([
            'id' => '2375',
            'scientific_name' => 'Pygochelidon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2376',
            'scientific_name' => 'Pylodictis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '2377',
            'scientific_name' => 'Pyrilia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '2378',
            'scientific_name' => 'Pyrocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2379',
            'scientific_name' => 'Pyrosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pyrosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2380',
            'scientific_name' => 'Python',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pythonidae')->id
        ]);



        BioGender::create([
            'id' => '2381',
            'scientific_name' => 'Pythonichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heterenchelyidae')->id
        ]);



        BioGender::create([
            'id' => '2382',
            'scientific_name' => 'Pyura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pyuridae')->id
        ]);



        BioGender::create([
            'id' => '2383',
            'scientific_name' => 'Pyxidemys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2384',
            'scientific_name' => 'Quassiremus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2385',
            'scientific_name' => 'Quietula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2386',
            'scientific_name' => 'Quilticohyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2387',
            'scientific_name' => 'Quiscalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '2388',
            'scientific_name' => 'Quisquilius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2389',
            'scientific_name' => 'Rabirubia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '2390',
            'scientific_name' => 'Rabula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2391',
            'scientific_name' => 'Rachycentron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rachycentridae')->id
        ]);



        BioGender::create([
            'id' => '2392',
            'scientific_name' => 'Radiicephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Radiicephalidae')->id
        ]);



        BioGender::create([
            'id' => '2393',
            'scientific_name' => 'Radulinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '2394',
            'scientific_name' => 'Raja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '2395',
            'scientific_name' => 'Rajella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '2396',
            'scientific_name' => 'Rallus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rallidae')->id
        ]);



        BioGender::create([
            'id' => '2397',
            'scientific_name' => 'Ramphastos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ramphastidae')->id
        ]);



        BioGender::create([
            'id' => '2398',
            'scientific_name' => 'Ramphocaenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polioptilidae')->id
        ]);



        BioGender::create([
            'id' => '2399',
            'scientific_name' => 'Ramphocelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2400',
            'scientific_name' => 'Ramphotyphlops',
            'common_name' => 'Culebrillas ciegas enanas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Typhlopidae')->id
        ]);



        BioGender::create([
            'id' => '2401',
            'scientific_name' => 'Rana',
            'common_name' => '"Brown frogs, Ranas, Ranas marroner"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ranidae')->id
        ]);



        BioGender::create([
            'id' => '2402',
            'scientific_name' => 'Ranzania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molidae')->id
        ]);



        BioGender::create([
            'id' => '2403',
            'scientific_name' => 'Rapara',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);



        BioGender::create([
            'id' => '2404',
            'scientific_name' => 'Rathbunella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathymasteridae')->id
        ]);



        BioGender::create([
            'id' => '2405',
            'scientific_name' => 'Rattus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muridae')->id
        ]);



        BioGender::create([
            'id' => '2406',
            'scientific_name' => 'Recurvirostra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Recurvirostridae')->id
        ]);



        BioGender::create([
            'id' => '2407',
            'scientific_name' => 'Redamia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2408',
            'scientific_name' => 'Regalecus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Regalecidae')->id
        ]);



        BioGender::create([
            'id' => '2409',
            'scientific_name' => 'Regina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '2410',
            'scientific_name' => 'Regulus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Regulidae')->id
        ]);



        BioGender::create([
            'id' => '2411',
            'scientific_name' => 'Reinhardtius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pleuronectidae')->id
        ]);



        BioGender::create([
            'id' => '2412',
            'scientific_name' => 'Reithrodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2413',
            'scientific_name' => 'Reithrodontomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2414',
            'scientific_name' => 'Remilegia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echeneidae')->id
        ]);



        BioGender::create([
            'id' => '2415',
            'scientific_name' => 'Remora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echeneidae')->id
        ]);



        BioGender::create([
            'id' => '2416',
            'scientific_name' => 'Remorina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Echeneidae')->id
        ]);



        BioGender::create([
            'id' => '2417',
            'scientific_name' => 'Rena',
            'common_name' => 'Agujillas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leptotyphlopidae')->id
        ]);



        BioGender::create([
            'id' => '2418',
            'scientific_name' => 'Reniceps',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphyrnidae')->id
        ]);



        BioGender::create([
            'id' => '2419',
            'scientific_name' => 'Rhabdosoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2420',
            'scientific_name' => 'Rhacochilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '2421',
            'scientific_name' => 'Rhadinaea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2422',
            'scientific_name' => 'Rhadinella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2423',
            'scientific_name' => 'Rhadinophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2424',
            'scientific_name' => 'Rhamdia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Heptapteridae')->id
        ]);



        BioGender::create([
            'id' => '2425',
            'scientific_name' => 'Rhamphoberyx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '2426',
            'scientific_name' => 'Rhechias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2427',
            'scientific_name' => 'Rhectogramma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Howellidae')->id
        ]);



        BioGender::create([
            'id' => '2428',
            'scientific_name' => 'Rhegma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2429',
            'scientific_name' => 'Rhegnops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2430',
            'scientific_name' => 'Rheoheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2431',
            'scientific_name' => 'Rheohyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2432',
            'scientific_name' => 'Rheomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2433',
            'scientific_name' => 'Rhincodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhincodontidae')->id
        ]);



        BioGender::create([
            'id' => '2434',
            'scientific_name' => 'Rhinella',
            'common_name' => '"Sapos, Sapos sudamericanos, South American toads"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bufonidae')->id
        ]);



        BioGender::create([
            'id' => '2435',
            'scientific_name' => 'Rhinesomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ostraciidae')->id
        ]);



        BioGender::create([
            'id' => '2436',
            'scientific_name' => 'Rhinichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2437',
            'scientific_name' => 'Rhinobatos',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinobatidae')->id
        ]);



        BioGender::create([
            'id' => '2438',
            'scientific_name' => 'Rhinobatus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinobatidae')->id
        ]);



        BioGender::create([
            'id' => '2439',
            'scientific_name' => 'Rhinoberyx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '2440',
            'scientific_name' => 'Rhinocheilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2441',
            'scientific_name' => 'Rhinoclemmys',
            'common_name' => 'Tortugas sabaneras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geoemydidae')->id
        ]);



        BioGender::create([
            'id' => '2442',
            'scientific_name' => 'Rhinogobiops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2443',
            'scientific_name' => 'Rhinogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2444',
            'scientific_name' => 'Rhinophrynus',
            'common_name' => '"Burrowing toads, Sapos de madriguera"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinophrynidae')->id
        ]);



        BioGender::create([
            'id' => '2445',
            'scientific_name' => 'Rhinoptera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '2446',
            'scientific_name' => 'Rhinotriacis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triakidae')->id
        ]);



        BioGender::create([
            'id' => '2447',
            'scientific_name' => 'Rhizoprionodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2448',
            'scientific_name' => 'Rhodinocichla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhodinocichlidae')->id
        ]);



        BioGender::create([
            'id' => '2449',
            'scientific_name' => 'Rhodothraupis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '2450',
            'scientific_name' => 'Rhogeessa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2451',
            'scientific_name' => 'Rhomboidichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);



        BioGender::create([
            'id' => '2452',
            'scientific_name' => 'Rhomboplites',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lutjanidae')->id
        ]);



        BioGender::create([
            'id' => '2453',
            'scientific_name' => 'Rhonciscus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '2454',
            'scientific_name' => 'Rhyacosiredon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2455',
            'scientific_name' => 'Rhynchoconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2456',
            'scientific_name' => 'Rhynchocyclus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2457',
            'scientific_name' => 'Rhynchocymba',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2458',
            'scientific_name' => 'Rhynchonycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);



        BioGender::create([
            'id' => '2459',
            'scientific_name' => 'Rhynchophanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Calcariidae')->id
        ]);



        BioGender::create([
            'id' => '2460',
            'scientific_name' => 'Rhynchopsitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Psittacidae')->id
        ]);



        BioGender::create([
            'id' => '2461',
            'scientific_name' => 'Rhytipterna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2462',
            'scientific_name' => 'Ridgwayia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '2463',
            'scientific_name' => 'Rimicola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '2464',
            'scientific_name' => 'Rineloricaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Loricariidae')->id
        ]);



        BioGender::create([
            'id' => '2465',
            'scientific_name' => 'Riparia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2466',
            'scientific_name' => 'Risor',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2467',
            'scientific_name' => 'Rissa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2468',
            'scientific_name' => 'Ritteriella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2469',
            'scientific_name' => 'Rivulus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rivulidae')->id
        ]);



        BioGender::create([
            'id' => '2470',
            'scientific_name' => 'Robinsichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2471',
            'scientific_name' => 'Rocio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2472',
            'scientific_name' => 'Roeboides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2473',
            'scientific_name' => 'Romerolagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leporidae')->id
        ]);



        BioGender::create([
            'id' => '2474',
            'scientific_name' => 'Roncador',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2475',
            'scientific_name' => 'Rondeletia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rondeletiidae')->id
        ]);



        BioGender::create([
            'id' => '2476',
            'scientific_name' => 'Ronquilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bathymasteridae')->id
        ]);



        BioGender::create([
            'id' => '2477',
            'scientific_name' => 'Rosenblattichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);



        BioGender::create([
            'id' => '2478',
            'scientific_name' => 'Rostrhamus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '2479',
            'scientific_name' => 'Rostroraja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rajidae')->id
        ]);



        BioGender::create([
            'id' => '2480',
            'scientific_name' => 'Runula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2481',
            'scientific_name' => 'Rupiscartes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2482',
            'scientific_name' => 'Rupornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '2483',
            'scientific_name' => 'Ruscariops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '2484',
            'scientific_name' => 'Ruscarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '2485',
            'scientific_name' => 'Rusciculus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '2486',
            'scientific_name' => 'Rutilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2487',
            'scientific_name' => 'Ruvettus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gempylidae')->id
        ]);



        BioGender::create([
            'id' => '2488',
            'scientific_name' => 'Rynchops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2489',
            'scientific_name' => 'Rypticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2490',
            'scientific_name' => 'Saccopharynx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Saccopharyngidae')->id
        ]);



        BioGender::create([
            'id' => '2491',
            'scientific_name' => 'Saccopteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);



        BioGender::create([
            'id' => '2492',
            'scientific_name' => 'Sagamichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Platytroctidae')->id
        ]);



        BioGender::create([
            'id' => '2493',
            'scientific_name' => 'Sagittalarva',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2494',
            'scientific_name' => 'Salamandra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salamandridae')->id
        ]);



        BioGender::create([
            'id' => '2495',
            'scientific_name' => 'Salamandroidis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2496',
            'scientific_name' => 'Salarias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2497',
            'scientific_name' => 'Salema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2498',
            'scientific_name' => 'Salmo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salmonidae')->id
        ]);



        BioGender::create([
            'id' => '2499',
            'scientific_name' => 'Salpa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2500',
            'scientific_name' => 'Salpinctes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2501',
            'scientific_name' => 'Saltator',
            'common_name' => '"Picureros, Saltators"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2502',
            'scientific_name' => 'Salvadora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2503',
            'scientific_name' => 'Salvelinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salmonidae')->id
        ]);



        BioGender::create([
            'id' => '2504',
            'scientific_name' => 'Sanopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Batrachoididae')->id
        ]);



        BioGender::create([
            'id' => '2505',
            'scientific_name' => 'Sarcohyla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2506',
            'scientific_name' => 'Sarcoramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cathartidae')->id
        ]);



        BioGender::create([
            'id' => '2507',
            'scientific_name' => 'Sarda',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '2508',
            'scientific_name' => 'Sardinella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '2509',
            'scientific_name' => 'Sardinops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '2510',
            'scientific_name' => 'Sargocentron',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Holocentridae')->id
        ]);



        BioGender::create([
            'id' => '2511',
            'scientific_name' => 'Sarotherodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2512',
            'scientific_name' => 'Sarothrodus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chaetodontidae')->id
        ]);



        BioGender::create([
            'id' => '2513',
            'scientific_name' => 'Sator',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2514',
            'scientific_name' => 'Saucerottia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2515',
            'scientific_name' => 'Saurenchelys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Nettastomatidae')->id
        ]);



        BioGender::create([
            'id' => '2516',
            'scientific_name' => 'Saurida',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synodontidae')->id
        ]);



        BioGender::create([
            'id' => '2517',
            'scientific_name' => 'Saurochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Chelydridae')->id
        ]);



        BioGender::create([
            'id' => '2518',
            'scientific_name' => 'Sauromalus',
            'common_name' => 'Iguanas del desierto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Iguanidae')->id
        ]);



        BioGender::create([
            'id' => '2519',
            'scientific_name' => 'Sayornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2520',
            'scientific_name' => 'Scalopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Talpidae')->id
        ]);



        BioGender::create([
            'id' => '2521',
            'scientific_name' => 'Scapanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Talpidae')->id
        ]);



        BioGender::create([
            'id' => '2522',
            'scientific_name' => 'Scaphidura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '2523',
            'scientific_name' => 'Scaphiodontophis',
            'common_name' => 'Culebras añadidas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sibynophiidae')->id
        ]);



        BioGender::create([
            'id' => '2524',
            'scientific_name' => 'Scaphiopus',
            'common_name' => '"North American spadefoots, Sapos excavadores, Sapos norteños de espuelas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaphiopodidae')->id
        ]);



        BioGender::create([
            'id' => '2525',
            'scientific_name' => 'Scaphirhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acipenseridae')->id
        ]);



        BioGender::create([
            'id' => '2526',
            'scientific_name' => 'Scaptochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Testudinidae')->id
        ]);



        BioGender::create([
            'id' => '2527',
            'scientific_name' => 'Scartella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2528',
            'scientific_name' => 'Scartomyzon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '2529',
            'scientific_name' => 'Scarus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);



        BioGender::create([
            'id' => '2530',
            'scientific_name' => 'Scatophagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scatophagidae')->id
        ]);



        BioGender::create([
            'id' => '2531',
            'scientific_name' => 'Sceloporus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2532',
            'scientific_name' => 'Schiffornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tityridae')->id
        ]);



        BioGender::create([
            'id' => '2533',
            'scientific_name' => 'Schizostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2534',
            'scientific_name' => 'Schultzea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2535',
            'scientific_name' => 'Sciadeichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2536',
            'scientific_name' => 'Sciadeops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2537',
            'scientific_name' => 'Sciades',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2538',
            'scientific_name' => 'Sciaena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2539',
            'scientific_name' => 'Sciaenochromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2540',
            'scientific_name' => 'Sciaenops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2541',
            'scientific_name' => 'Scinax',
            'common_name' => '"Croaking frogs, Ranas arborícolas trompudas, Ranitas croadoras"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2542',
            'scientific_name' => 'Scincella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2543',
            'scientific_name' => 'Scincus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2544',
            'scientific_name' => 'Sciurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2545',
            'scientific_name' => 'Sclerognathus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '2546',
            'scientific_name' => 'Sclerurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2547',
            'scientific_name' => 'Scolecophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2548',
            'scientific_name' => 'Scoliodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2549',
            'scientific_name' => 'Scolopax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2550',
            'scientific_name' => 'Scomber',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '2551',
            'scientific_name' => 'Scomberesox',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scomberesocidae')->id
        ]);



        BioGender::create([
            'id' => '2552',
            'scientific_name' => 'Scomberoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2553',
            'scientific_name' => 'Scomberomorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '2554',
            'scientific_name' => 'Scombrolabrax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombrolabracidae')->id
        ]);



        BioGender::create([
            'id' => '2555',
            'scientific_name' => 'Scopelarchoides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);



        BioGender::create([
            'id' => '2556',
            'scientific_name' => 'Scopelarchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scopelarchidae')->id
        ]);



        BioGender::create([
            'id' => '2557',
            'scientific_name' => 'Scopelengys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Neoscopelidae')->id
        ]);



        BioGender::create([
            'id' => '2558',
            'scientific_name' => 'Scopelogadus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Melamphaidae')->id
        ]);



        BioGender::create([
            'id' => '2559',
            'scientific_name' => 'Scopelosaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Notosudidae')->id
        ]);



        BioGender::create([
            'id' => '2560',
            'scientific_name' => 'Scopelus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2561',
            'scientific_name' => 'Scorpaena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2562',
            'scientific_name' => 'Scorpaenichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2563',
            'scientific_name' => 'Scorpaenodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2564',
            'scientific_name' => 'Scorpis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '2565',
            'scientific_name' => 'Scotinomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2566',
            'scientific_name' => 'Scotophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2567',
            'scientific_name' => 'Scuticaria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2568',
            'scientific_name' => 'Scyliorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);



        BioGender::create([
            'id' => '2569',
            'scientific_name' => 'Scyllium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scyliorhinidae')->id
        ]);



        BioGender::create([
            'id' => '2570',
            'scientific_name' => 'Scymnodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Somniosidae')->id
        ]);



        BioGender::create([
            'id' => '2571',
            'scientific_name' => 'Scymnorhinus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dalatiidae')->id
        ]);



        BioGender::create([
            'id' => '2572',
            'scientific_name' => 'Scymnus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dalatiidae')->id
        ]);



        BioGender::create([
            'id' => '2573',
            'scientific_name' => 'Scytalichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2574',
            'scientific_name' => 'Scytina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);



        BioGender::create([
            'id' => '2575',
            'scientific_name' => 'Sebastes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2576',
            'scientific_name' => 'Sebastichthys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2577',
            'scientific_name' => 'Sebastodes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2578',
            'scientific_name' => 'Sebastolobus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2579',
            'scientific_name' => 'Sebastopsis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2580',
            'scientific_name' => 'Sebastosomus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scorpaenidae')->id
        ]);



        BioGender::create([
            'id' => '2581',
            'scientific_name' => 'Sectator',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kyphosidae')->id
        ]);



        BioGender::create([
            'id' => '2582',
            'scientific_name' => 'Seiurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2583',
            'scientific_name' => 'Selar',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2584',
            'scientific_name' => 'Selasphorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2585',
            'scientific_name' => 'Selenaspis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2586',
            'scientific_name' => 'Selene',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2587',
            'scientific_name' => 'Sema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '2588',
            'scientific_name' => 'Semablennius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2589',
            'scientific_name' => 'Semicossyphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2590',
            'scientific_name' => 'Senticolis',
            'common_name' => 'Culebras ratoneras verde',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2591',
            'scientific_name' => 'Seriola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2592',
            'scientific_name' => 'Seriphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2593',
            'scientific_name' => 'Serraniculus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2594',
            'scientific_name' => 'Serranus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2595',
            'scientific_name' => 'Serrihastaperca',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2596',
            'scientific_name' => 'Serrivomer',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serrivomeridae')->id
        ]);



        BioGender::create([
            'id' => '2597',
            'scientific_name' => 'Setophaga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2598',
            'scientific_name' => 'Sialia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '2599',
            'scientific_name' => 'Sibon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2600',
            'scientific_name' => 'Sibynomorphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2601',
            'scientific_name' => 'Sicalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2602',
            'scientific_name' => 'Sicyases',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '2603',
            'scientific_name' => 'Sicydium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2604',
            'scientific_name' => 'Siderea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2605',
            'scientific_name' => 'Siderolamprus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anguidae')->id
        ]);



        BioGender::create([
            'id' => '2606',
            'scientific_name' => 'Sigmodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2607',
            'scientific_name' => 'Sigmops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gonostomatidae')->id
        ]);



        BioGender::create([
            'id' => '2608',
            'scientific_name' => 'Silurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Siluridae')->id
        ]);



        BioGender::create([
            'id' => '2609',
            'scientific_name' => 'Siphateles',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2610',
            'scientific_name' => 'Siphonops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Siphonopidae')->id
        ]);



        BioGender::create([
            'id' => '2611',
            'scientific_name' => 'Siphostoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '2612',
            'scientific_name' => 'Siredon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2613',
            'scientific_name' => 'Sirembo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophidiidae')->id
        ]);



        BioGender::create([
            'id' => '2614',
            'scientific_name' => 'Siren',
            'common_name' => '"Sirenas, Sirens"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sirenidae')->id
        ]);



        BioGender::create([
            'id' => '2615',
            'scientific_name' => 'Sistrurus',
            'common_name' => 'Cascabeles de escamas grandes',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '2616',
            'scientific_name' => 'Sitomys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2617',
            'scientific_name' => 'Sitta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sittidae')->id
        ]);



        BioGender::create([
            'id' => '2618',
            'scientific_name' => 'Sittasomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2619',
            'scientific_name' => 'Skiffia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '2620',
            'scientific_name' => 'Smecticus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2621',
            'scientific_name' => 'Smilisca',
            'common_name' => '"Mexican treefrogs, Ranas arborícolas, Ranas de madriguera"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2622',
            'scientific_name' => 'Solea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soleidae')->id
        ]);



        BioGender::create([
            'id' => '2623',
            'scientific_name' => 'Somniosus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Somniosidae')->id
        ]);



        BioGender::create([
            'id' => '2624',
            'scientific_name' => 'Sonora',
            'common_name' => '"Culebra areneras, Culebra cola de lija, Culebras nariz de pala"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2625',
            'scientific_name' => 'Sorex',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Soricidae')->id
        ]);



        BioGender::create([
            'id' => '2626',
            'scientific_name' => 'Sparisoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);



        BioGender::create([
            'id' => '2627',
            'scientific_name' => 'Sparus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2628',
            'scientific_name' => 'Spatula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Anatidae')->id
        ]);



        BioGender::create([
            'id' => '2629',
            'scientific_name' => 'Spea',
            'common_name' => '"Sapos de espuelas, Sapos occidentales de espuelas, Western spadefoots"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaphiopodidae')->id
        ]);



        BioGender::create([
            'id' => '2630',
            'scientific_name' => 'Spelerpes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '2631',
            'scientific_name' => 'Spermophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2632',
            'scientific_name' => 'Sphaerodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphaerodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2633',
            'scientific_name' => 'Sphagebranchus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2634',
            'scientific_name' => 'Sphargis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dermochelyidae')->id
        ]);



        BioGender::create([
            'id' => '2635',
            'scientific_name' => 'Sphenomorphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2636',
            'scientific_name' => 'Sphiggurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Erethizontidae')->id
        ]);



        BioGender::create([
            'id' => '2637',
            'scientific_name' => 'Sphoeroides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetraodontidae')->id
        ]);



        BioGender::create([
            'id' => '2638',
            'scientific_name' => 'Sphyraena',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphyraenidae')->id
        ]);



        BioGender::create([
            'id' => '2639',
            'scientific_name' => 'Sphyrapicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);



        BioGender::create([
            'id' => '2640',
            'scientific_name' => 'Sphyrna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sphyrnidae')->id
        ]);



        BioGender::create([
            'id' => '2641',
            'scientific_name' => 'Spilogale',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mephitidae')->id
        ]);



        BioGender::create([
            'id' => '2642',
            'scientific_name' => 'Spilotes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2643',
            'scientific_name' => 'Spinax',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Etmopteridae')->id
        ]);



        BioGender::create([
            'id' => '2644',
            'scientific_name' => 'Spindalis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Spindalidae')->id
        ]);



        BioGender::create([
            'id' => '2645',
            'scientific_name' => 'Spinoblennius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Blenniidae')->id
        ]);



        BioGender::create([
            'id' => '2646',
            'scientific_name' => 'Spinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fringillidae')->id
        ]);



        BioGender::create([
            'id' => '2647',
            'scientific_name' => 'Spiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cardinalidae')->id
        ]);



        BioGender::create([
            'id' => '2648',
            'scientific_name' => 'Spizaetus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Accipitridae')->id
        ]);



        BioGender::create([
            'id' => '2649',
            'scientific_name' => 'Spizella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2650',
            'scientific_name' => 'Spondyliosoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2651',
            'scientific_name' => 'Sporophila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2652',
            'scientific_name' => 'Sprattus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Clupeidae')->id
        ]);



        BioGender::create([
            'id' => '2653',
            'scientific_name' => 'Squalius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2654',
            'scientific_name' => 'Squalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Squalidae')->id
        ]);



        BioGender::create([
            'id' => '2655',
            'scientific_name' => 'Squatina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Squatinidae')->id
        ]);



        BioGender::create([
            'id' => '2656',
            'scientific_name' => 'Starksia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '2657',
            'scientific_name' => 'Stathmonotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '2658',
            'scientific_name' => 'Stauremys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Staurotypidae')->id
        ]);



        BioGender::create([
            'id' => '2659',
            'scientific_name' => 'Staurotypus',
            'common_name' => 'Tortugas tres lomos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Staurotypidae')->id
        ]);



        BioGender::create([
            'id' => '2660',
            'scientific_name' => 'Stegastes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pomacentridae')->id
        ]);



        BioGender::create([
            'id' => '2661',
            'scientific_name' => 'Stegoporus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2662',
            'scientific_name' => 'Steindachneria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Steindachneriidae')->id
        ]);



        BioGender::create([
            'id' => '2663',
            'scientific_name' => 'Steinegeria',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);



        BioGender::create([
            'id' => '2664',
            'scientific_name' => 'Stelgidopteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2665',
            'scientific_name' => 'Stellerina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);



        BioGender::create([
            'id' => '2666',
            'scientific_name' => 'Stellifer',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2667',
            'scientific_name' => 'Stellio',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2668',
            'scientific_name' => 'Stellula',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2669',
            'scientific_name' => 'Stemonosudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);



        BioGender::create([
            'id' => '2670',
            'scientific_name' => 'Stenella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '2671',
            'scientific_name' => 'Steno',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '2672',
            'scientific_name' => 'Stenobrachius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2673',
            'scientific_name' => 'Stenodactylus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gekkonidae')->id
        ]);



        BioGender::create([
            'id' => '2674',
            'scientific_name' => 'Stenorrhina',
            'common_name' => 'Culebras alacraneras',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2675',
            'scientific_name' => 'Stenotomus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sparidae')->id
        ]);



        BioGender::create([
            'id' => '2676',
            'scientific_name' => 'Stephanolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Monacanthidae')->id
        ]);



        BioGender::create([
            'id' => '2677',
            'scientific_name' => 'Stercorarius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stercorariidae')->id
        ]);



        BioGender::create([
            'id' => '2678',
            'scientific_name' => 'Stereolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polyprionidae')->id
        ]);



        BioGender::create([
            'id' => '2679',
            'scientific_name' => 'Sterna',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2680',
            'scientific_name' => 'Sternoptyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);



        BioGender::create([
            'id' => '2681',
            'scientific_name' => 'Sternula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2682',
            'scientific_name' => 'Stethojulis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2683',
            'scientific_name' => 'Stilbiscus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Moringuidae')->id
        ]);



        BioGender::create([
            'id' => '2684',
            'scientific_name' => 'Stilpnia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2685',
            'scientific_name' => 'Stoasodon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myliobatidae')->id
        ]);



        BioGender::create([
            'id' => '2686',
            'scientific_name' => 'Stolephorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Engraulidae')->id
        ]);



        BioGender::create([
            'id' => '2687',
            'scientific_name' => 'Stomias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '2688',
            'scientific_name' => 'Stomozoa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomozoidae')->id
        ]);



        BioGender::create([
            'id' => '2689',
            'scientific_name' => 'Storeria',
            'common_name' => 'Culebras pardas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '2690',
            'scientific_name' => 'Streptopelia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '2691',
            'scientific_name' => 'Streptophorus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2692',
            'scientific_name' => 'Streptoprocne',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Apodidae')->id
        ]);



        BioGender::create([
            'id' => '2693',
            'scientific_name' => 'Strix',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Strigidae')->id
        ]);



        BioGender::create([
            'id' => '2694',
            'scientific_name' => 'Stromateus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stromateidae')->id
        ]);



        BioGender::create([
            'id' => '2695',
            'scientific_name' => 'Strongylura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);



        BioGender::create([
            'id' => '2696',
            'scientific_name' => 'Sturnella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '2697',
            'scientific_name' => 'Sturnira',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2698',
            'scientific_name' => 'Sturnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sturnidae')->id
        ]);



        BioGender::create([
            'id' => '2699',
            'scientific_name' => 'Styela',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Styelidae')->id
        ]);



        BioGender::create([
            'id' => '2700',
            'scientific_name' => 'Stylephorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stylephoridae')->id
        ]);



        BioGender::create([
            'id' => '2701',
            'scientific_name' => 'Stypodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2702',
            'scientific_name' => 'Styracura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Potamotrygonidae')->id
        ]);



        BioGender::create([
            'id' => '2703',
            'scientific_name' => 'Sudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sudidae')->id
        ]);



        BioGender::create([
            'id' => '2704',
            'scientific_name' => 'Sufflamen',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);



        BioGender::create([
            'id' => '2705',
            'scientific_name' => 'Sula',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sulidae')->id
        ]);



        BioGender::create([
            'id' => '2706',
            'scientific_name' => 'Sus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Suidae')->id
        ]);



        BioGender::create([
            'id' => '2707',
            'scientific_name' => 'Swanka',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '2708',
            'scientific_name' => 'Syacium',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2709',
            'scientific_name' => 'Sylvilagus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Leporidae')->id
        ]);



        BioGender::create([
            'id' => '2710',
            'scientific_name' => 'Symbolophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2711',
            'scientific_name' => 'Symphimus',
            'common_name' => 'Culebras labios blancos',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2712',
            'scientific_name' => 'Sympholis',
            'common_name' => 'Culebra de cola corta',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2713',
            'scientific_name' => 'Symphurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cynoglossidae')->id
        ]);



        BioGender::create([
            'id' => '2714',
            'scientific_name' => 'Symplegma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Styelidae')->id
        ]);



        BioGender::create([
            'id' => '2715',
            'scientific_name' => 'Synagrops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acropomatidae')->id
        ]);



        BioGender::create([
            'id' => '2716',
            'scientific_name' => 'Synallaxis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2717',
            'scientific_name' => 'Synaphobranchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synaphobranchidae')->id
        ]);



        BioGender::create([
            'id' => '2718',
            'scientific_name' => 'Synbranchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synbranchidae')->id
        ]);



        BioGender::create([
            'id' => '2719',
            'scientific_name' => 'Synchiropus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Callionymidae')->id
        ]);



        BioGender::create([
            'id' => '2720',
            'scientific_name' => 'Syngnathus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Syngnathidae')->id
        ]);



        BioGender::create([
            'id' => '2721',
            'scientific_name' => 'Synodontis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mochokidae')->id
        ]);



        BioGender::create([
            'id' => '2722',
            'scientific_name' => 'Synodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synodontidae')->id
        ]);



        BioGender::create([
            'id' => '2723',
            'scientific_name' => 'Synthliboramphus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);



        BioGender::create([
            'id' => '2724',
            'scientific_name' => 'Syrrhaphus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2725',
            'scientific_name' => 'Syrrhophus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2726',
            'scientific_name' => 'Tachybaptus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Podicipedidae')->id
        ]);



        BioGender::create([
            'id' => '2727',
            'scientific_name' => 'Tachycineta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hirundinidae')->id
        ]);



        BioGender::create([
            'id' => '2728',
            'scientific_name' => 'Tachymenis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2729',
            'scientific_name' => 'Tachysurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ariidae')->id
        ]);



        BioGender::create([
            'id' => '2730',
            'scientific_name' => 'Tactostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '2731',
            'scientific_name' => 'Tadarida',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Molossidae')->id
        ]);



        BioGender::create([
            'id' => '2732',
            'scientific_name' => 'Taenioconger',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2733',
            'scientific_name' => 'Taenioides',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2734',
            'scientific_name' => 'Taeniophis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2735',
            'scientific_name' => 'Taeniophorus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cetomimidae')->id
        ]);



        BioGender::create([
            'id' => '2736',
            'scientific_name' => 'Takydromus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lacertidae')->id
        ]);



        BioGender::create([
            'id' => '2737',
            'scientific_name' => 'Talismania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);



        BioGender::create([
            'id' => '2738',
            'scientific_name' => 'Tamandua',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myrmecophagidae')->id
        ]);



        BioGender::create([
            'id' => '2739',
            'scientific_name' => 'Tamias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2740',
            'scientific_name' => 'Tamiasciurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2741',
            'scientific_name' => 'Tampichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2742',
            'scientific_name' => 'Tangara',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2743',
            'scientific_name' => 'Tanichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2744',
            'scientific_name' => 'Tantalophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2745',
            'scientific_name' => 'Tantilla',
            'common_name' => 'Culebritas de collar',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2746',
            'scientific_name' => 'Tantillita',
            'common_name' => 'Culebritas de collar enanas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2747',
            'scientific_name' => 'Tapaya',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2748',
            'scientific_name' => 'Tapera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cuculidae')->id
        ]);



        BioGender::create([
            'id' => '2749',
            'scientific_name' => 'Tapirella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tapiridae')->id
        ]);



        BioGender::create([
            'id' => '2750',
            'scientific_name' => 'Tapirus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tapiridae')->id
        ]);



        BioGender::create([
            'id' => '2751',
            'scientific_name' => 'Taraba',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);



        BioGender::create([
            'id' => '2752',
            'scientific_name' => 'Taractes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);



        BioGender::create([
            'id' => '2753',
            'scientific_name' => 'Taractichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bramidae')->id
        ]);



        BioGender::create([
            'id' => '2754',
            'scientific_name' => 'Tarentola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2755',
            'scientific_name' => 'Tarletonbeania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2756',
            'scientific_name' => 'Tatoua',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasypodidae')->id
        ]);



        BioGender::create([
            'id' => '2757',
            'scientific_name' => 'Tatu',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasypodidae')->id
        ]);



        BioGender::create([
            'id' => '2758',
            'scientific_name' => 'Tatusia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasypodidae')->id
        ]);



        BioGender::create([
            'id' => '2759',
            'scientific_name' => 'Taxidea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '2760',
            'scientific_name' => 'Tayassu',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tayassuidae')->id
        ]);



        BioGender::create([
            'id' => '2761',
            'scientific_name' => 'Tayra',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mustelidae')->id
        ]);



        BioGender::create([
            'id' => '2762',
            'scientific_name' => 'Telipomis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Centrarchidae')->id
        ]);



        BioGender::create([
            'id' => '2763',
            'scientific_name' => 'Terenotriccus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Onychorhynchidae')->id
        ]);



        BioGender::create([
            'id' => '2764',
            'scientific_name' => 'Terrapene',
            'common_name' => 'Tortugas de fango',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2765',
            'scientific_name' => 'Testudo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Testudinidae')->id
        ]);



        BioGender::create([
            'id' => '2766',
            'scientific_name' => 'Tetragonopterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2767',
            'scientific_name' => 'Tetragonurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetragonuridae')->id
        ]);



        BioGender::create([
            'id' => '2768',
            'scientific_name' => 'Tetraodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tetraodontidae')->id
        ]);



        BioGender::create([
            'id' => '2769',
            'scientific_name' => 'Tetrapleurodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Petromyzontidae')->id
        ]);



        BioGender::create([
            'id' => '2770',
            'scientific_name' => 'Tetrapturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Istiophoridae')->id
        ]);



        BioGender::create([
            'id' => '2771',
            'scientific_name' => 'Tetronarce',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Torpedinidae')->id
        ]);



        BioGender::create([
            'id' => '2772',
            'scientific_name' => 'Thalasseus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2773',
            'scientific_name' => 'Thalassochelys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cheloniidae')->id
        ]);



        BioGender::create([
            'id' => '2774',
            'scientific_name' => 'Thalassoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2775',
            'scientific_name' => 'Thalia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2776',
            'scientific_name' => 'Thalurania',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2777',
            'scientific_name' => 'Thamnistes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);



        BioGender::create([
            'id' => '2778',
            'scientific_name' => 'Thamnophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thamnophilidae')->id
        ]);



        BioGender::create([
            'id' => '2779',
            'scientific_name' => 'Thamnophis',
            'common_name' => 'Culebras semiacuáticas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '2780',
            'scientific_name' => 'Thayeria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Characidae')->id
        ]);



        BioGender::create([
            'id' => '2781',
            'scientific_name' => 'Thecadactylus',
            'common_name' => 'Cuijas cola de nabo',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2782',
            'scientific_name' => 'Theraps',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2783',
            'scientific_name' => 'Thetys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2784',
            'scientific_name' => 'Thomomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '2785',
            'scientific_name' => 'Thorichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2786',
            'scientific_name' => 'Thorius',
            'common_name' => '"Mexican pigmy salamanders, Salamandras pigmeas mexicanas"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Plethodontidae')->id
        ]);



        BioGender::create([
            'id' => '2787',
            'scientific_name' => 'Thraupis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2788',
            'scientific_name' => 'Thryomanes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2789',
            'scientific_name' => 'Thryophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2790',
            'scientific_name' => 'Thryothorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2791',
            'scientific_name' => 'Thunnus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scombridae')->id
        ]);



        BioGender::create([
            'id' => '2792',
            'scientific_name' => 'Thyreoconger',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2793',
            'scientific_name' => 'Thyrina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '2794',
            'scientific_name' => 'Thyrinops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '2795',
            'scientific_name' => 'Thyroptera',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thyropteridae')->id
        ]);



        BioGender::create([
            'id' => '2796',
            'scientific_name' => 'Thyrosternum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '2797',
            'scientific_name' => 'Thyrsoidea',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2798',
            'scientific_name' => 'Tiaris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2799',
            'scientific_name' => 'Tiaroga',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2800',
            'scientific_name' => 'Tigoma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2801',
            'scientific_name' => 'Tigrigobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2802',
            'scientific_name' => 'Tigrisoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ardeidae')->id
        ]);



        BioGender::create([
            'id' => '2803',
            'scientific_name' => 'Tilapia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2804',
            'scientific_name' => 'Tiliqua',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2805',
            'scientific_name' => 'Tilmatura',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trochilidae')->id
        ]);



        BioGender::create([
            'id' => '2806',
            'scientific_name' => 'Tinamus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tinamidae')->id
        ]);



        BioGender::create([
            'id' => '2807',
            'scientific_name' => 'Tinca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2808',
            'scientific_name' => 'Tityra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tityridae')->id
        ]);



        BioGender::create([
            'id' => '2809',
            'scientific_name' => 'Tlacuatzin',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didelphidae')->id
        ]);



        BioGender::create([
            'id' => '2810',
            'scientific_name' => 'Tlaloc',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Profundulidae')->id
        ]);



        BioGender::create([
            'id' => '2811',
            'scientific_name' => 'Tlalocohyla',
            'common_name' => '"Rain frogs, Rain treefrogs, Ranas arborícolas de la lluvia, Ranitas de la lluvia"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2812',
            'scientific_name' => 'Todirostrum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2813',
            'scientific_name' => 'Tolmomyias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2814',
            'scientific_name' => 'Toluca',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2815',
            'scientific_name' => 'Tomicodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiesocidae')->id
        ]);



        BioGender::create([
            'id' => '2816',
            'scientific_name' => 'Tomodactylus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Eleutherodactylidae')->id
        ]);



        BioGender::create([
            'id' => '2817',
            'scientific_name' => 'Tomodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2818',
            'scientific_name' => 'Tonatia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2819',
            'scientific_name' => 'Torpedo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Torpedinidae')->id
        ]);



        BioGender::create([
            'id' => '2820',
            'scientific_name' => 'Totoaba',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2821',
            'scientific_name' => 'Toxaspis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2822',
            'scientific_name' => 'Toxostoma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mimidae')->id
        ]);



        BioGender::create([
            'id' => '2823',
            'scientific_name' => 'Toxotes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Toxotidae')->id
        ]);



        BioGender::create([
            'id' => '2824',
            'scientific_name' => 'Trachemys',
            'common_name' => 'Jicoteas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emydidae')->id
        ]);



        BioGender::create([
            'id' => '2825',
            'scientific_name' => 'Trachichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2826',
            'scientific_name' => 'Trachinocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Synodontidae')->id
        ]);



        BioGender::create([
            'id' => '2827',
            'scientific_name' => 'Trachinotus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2828',
            'scientific_name' => 'Trachinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachinidae')->id
        ]);



        BioGender::create([
            'id' => '2829',
            'scientific_name' => 'Trachipterus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachipteridae')->id
        ]);



        BioGender::create([
            'id' => '2830',
            'scientific_name' => 'Trachops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2831',
            'scientific_name' => 'Trachurops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2832',
            'scientific_name' => 'Trachurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2833',
            'scientific_name' => 'Trachycephalus',
            'common_name' => 'Ranas marmoleadas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2834',
            'scientific_name' => 'Trachyderma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Helodermatidae')->id
        ]);



        BioGender::create([
            'id' => '2835',
            'scientific_name' => 'Trachylepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scincidae')->id
        ]);



        BioGender::create([
            'id' => '2836',
            'scientific_name' => 'Trachyops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2837',
            'scientific_name' => 'Trachyrincus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachyrincidae')->id
        ]);



        BioGender::create([
            'id' => '2838',
            'scientific_name' => 'Traustedtia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Salpidae')->id
        ]);



        BioGender::create([
            'id' => '2839',
            'scientific_name' => 'Tretanorhinus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2840',
            'scientific_name' => 'Triacanthodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triacanthodidae')->id
        ]);



        BioGender::create([
            'id' => '2841',
            'scientific_name' => 'Triaenodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carcharhinidae')->id
        ]);



        BioGender::create([
            'id' => '2842',
            'scientific_name' => 'Triakis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triakidae')->id
        ]);



        BioGender::create([
            'id' => '2843',
            'scientific_name' => 'Trichechus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichechidae')->id
        ]);



        BioGender::create([
            'id' => '2844',
            'scientific_name' => 'Trichidion',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Polynemidae')->id
        ]);



        BioGender::create([
            'id' => '2845',
            'scientific_name' => 'Trichiurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trichiuridae')->id
        ]);



        BioGender::create([
            'id' => '2846',
            'scientific_name' => 'Trichogaster',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Osphronemidae')->id
        ]);



        BioGender::create([
            'id' => '2847',
            'scientific_name' => 'Trichopodus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Osphronemidae')->id
        ]);



        BioGender::create([
            'id' => '2848',
            'scientific_name' => 'Trichopsetta',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bothidae')->id
        ]);



        BioGender::create([
            'id' => '2849',
            'scientific_name' => 'Trichromis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2850',
            'scientific_name' => 'Tridentiger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2851',
            'scientific_name' => 'Trididemnum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Didemnidae')->id
        ]);



        BioGender::create([
            'id' => '2852',
            'scientific_name' => 'Trigla',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Triglidae')->id
        ]);



        BioGender::create([
            'id' => '2853',
            'scientific_name' => 'Trigonostigma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2854',
            'scientific_name' => 'Trimeresurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viperidae')->id
        ]);



        BioGender::create([
            'id' => '2855',
            'scientific_name' => 'Trimorphodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2856',
            'scientific_name' => 'Trinectes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Achiridae')->id
        ]);



        BioGender::create([
            'id' => '2857',
            'scientific_name' => 'Tringa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2858',
            'scientific_name' => 'Trinycteris',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2859',
            'scientific_name' => 'Trionyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trionychidae')->id
        ]);



        BioGender::create([
            'id' => '2860',
            'scientific_name' => 'Triphoturus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Myctophidae')->id
        ]);



        BioGender::create([
            'id' => '2861',
            'scientific_name' => 'Triprion',
            'common_name' => '"Casque-headed treefrogs, Ranas de casco, Ranas de corona, Ranitas cabeza de casco, Spiny-headed treefrogs"',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Hylidae')->id
        ]);



        BioGender::create([
            'id' => '2862',
            'scientific_name' => 'Tripterygion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tripterygiidae')->id
        ]);



        BioGender::create([
            'id' => '2863',
            'scientific_name' => 'Trisotropis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Serranidae')->id
        ]);



        BioGender::create([
            'id' => '2864',
            'scientific_name' => 'Troglodytes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2865',
            'scientific_name' => 'Trogon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trogonidae')->id
        ]);



        BioGender::create([
            'id' => '2866',
            'scientific_name' => 'Tropidoclonion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '2867',
            'scientific_name' => 'Tropidoclonium',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Natricidae')->id
        ]);



        BioGender::create([
            'id' => '2868',
            'scientific_name' => 'Tropidodipsas',
            'common_name' => 'Culebras anilladas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2869',
            'scientific_name' => 'Tropidolepis',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2870',
            'scientific_name' => 'Tropidurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tropiduridae')->id
        ]);



        BioGender::create([
            'id' => '2871',
            'scientific_name' => 'Trygon',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dasyatidae')->id
        ]);



        BioGender::create([
            'id' => '2872',
            'scientific_name' => 'Tryngites',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2873',
            'scientific_name' => 'Tunchiornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);



        BioGender::create([
            'id' => '2874',
            'scientific_name' => 'Tupinambis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);



        BioGender::create([
            'id' => '2875',
            'scientific_name' => 'Turdus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Turdidae')->id
        ]);



        BioGender::create([
            'id' => '2876',
            'scientific_name' => 'Tursiops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Delphinidae')->id
        ]);



        BioGender::create([
            'id' => '2877',
            'scientific_name' => 'Tylomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2878',
            'scientific_name' => 'Tylosurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Belonidae')->id
        ]);



        BioGender::create([
            'id' => '2879',
            'scientific_name' => 'Typhlias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '2880',
            'scientific_name' => 'Typhliasina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Bythitidae')->id
        ]);



        BioGender::create([
            'id' => '2881',
            'scientific_name' => 'Typhlogobius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2882',
            'scientific_name' => 'Typhlops',
            'common_name' => 'Culebrillas ciegas',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Typhlopidae')->id
        ]);



        BioGender::create([
            'id' => '2883',
            'scientific_name' => 'Tyrannus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2884',
            'scientific_name' => 'Tyto',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tytonidae')->id
        ]);



        BioGender::create([
            'id' => '2885',
            'scientific_name' => 'Ulvicola',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pholidae')->id
        ]);



        BioGender::create([
            'id' => '2886',
            'scientific_name' => 'Uma',
            'common_name' => 'Lagartijas de arena',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2887',
            'scientific_name' => 'Umbrina',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciaenidae')->id
        ]);



        BioGender::create([
            'id' => '2888',
            'scientific_name' => 'Uncisudis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralepididae')->id
        ]);



        BioGender::create([
            'id' => '2889',
            'scientific_name' => 'Ungaliophis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charinidae')->id
        ]);



        BioGender::create([
            'id' => '2890',
            'scientific_name' => 'Upeneus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mullidae')->id
        ]);



        BioGender::create([
            'id' => '2891',
            'scientific_name' => 'Upsilonognathus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Opistognathidae')->id
        ]);



        BioGender::create([
            'id' => '2892',
            'scientific_name' => 'Uranoscopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Uranoscopidae')->id
        ]);



        BioGender::create([
            'id' => '2893',
            'scientific_name' => 'Uraspis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2894',
            'scientific_name' => 'Uria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alcidae')->id
        ]);



        BioGender::create([
            'id' => '2895',
            'scientific_name' => 'Urobatis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Urotrygonidae')->id
        ]);



        BioGender::create([
            'id' => '2896',
            'scientific_name' => 'Uroconger',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2897',
            'scientific_name' => 'Urocryptus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Emballonuridae')->id
        ]);



        BioGender::create([
            'id' => '2898',
            'scientific_name' => 'Urocyon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Canidae')->id
        ]);



        BioGender::create([
            'id' => '2899',
            'scientific_name' => 'Uroderma',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2900',
            'scientific_name' => 'Urolophus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Urolophidae')->id
        ]);



        BioGender::create([
            'id' => '2901',
            'scientific_name' => 'Uromastyx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agamidae')->id
        ]);



        BioGender::create([
            'id' => '2902',
            'scientific_name' => 'Uronyx',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Kinosternidae')->id
        ]);



        BioGender::create([
            'id' => '2903',
            'scientific_name' => 'Urophycis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gadidae')->id
        ]);



        BioGender::create([
            'id' => '2904',
            'scientific_name' => 'Uropsila',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Troglodytidae')->id
        ]);



        BioGender::create([
            'id' => '2905',
            'scientific_name' => 'Uropterygius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Muraenidae')->id
        ]);



        BioGender::create([
            'id' => '2906',
            'scientific_name' => 'Urosaurus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2907',
            'scientific_name' => 'Urotheca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2908',
            'scientific_name' => 'Urotrygon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Urotrygonidae')->id
        ]);



        BioGender::create([
            'id' => '2909',
            'scientific_name' => 'Ursus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ursidae')->id
        ]);



        BioGender::create([
            'id' => '2910',
            'scientific_name' => 'Uta',
            'common_name' => 'Lagartijas axila manchada',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phrynosomatidae')->id
        ]);



        BioGender::create([
            'id' => '2911',
            'scientific_name' => 'Valenciennellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sternoptychidae')->id
        ]);



        BioGender::create([
            'id' => '2912',
            'scientific_name' => 'Vampyressa',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2913',
            'scientific_name' => 'Vampyrodes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2914',
            'scientific_name' => 'Vampyrops',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2915',
            'scientific_name' => 'Vampyrum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2916',
            'scientific_name' => 'Vampyrus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phyllostomidae')->id
        ]);



        BioGender::create([
            'id' => '2917',
            'scientific_name' => 'Vanellus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Charadriidae')->id
        ]);



        BioGender::create([
            'id' => '2918',
            'scientific_name' => 'Varanus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Varanidae')->id
        ]);



        BioGender::create([
            'id' => '2919',
            'scientific_name' => 'Varicus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gobiidae')->id
        ]);



        BioGender::create([
            'id' => '2920',
            'scientific_name' => 'Veniliornis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Picidae')->id
        ]);



        BioGender::create([
            'id' => '2921',
            'scientific_name' => 'Verma',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ophichthidae')->id
        ]);



        BioGender::create([
            'id' => '2922',
            'scientific_name' => 'Vermivora',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2923',
            'scientific_name' => 'Verrugato',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Lobotidae')->id
        ]);



        BioGender::create([
            'id' => '2924',
            'scientific_name' => 'Verticaria',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Teiidae')->id
        ]);



        BioGender::create([
            'id' => '2925',
            'scientific_name' => 'Vesperimus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2926',
            'scientific_name' => 'Vespertilio',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2927',
            'scientific_name' => 'Vesperugo',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2928',
            'scientific_name' => 'Vesperus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vespertilionidae')->id
        ]);



        BioGender::create([
            'id' => '2929',
            'scientific_name' => 'Vieja',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2930',
            'scientific_name' => 'Villarius',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ictaluridae')->id
        ]);



        BioGender::create([
            'id' => '2931',
            'scientific_name' => 'Vinciguerria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2932',
            'scientific_name' => 'Vireo',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);



        BioGender::create([
            'id' => '2933',
            'scientific_name' => 'Vireolanius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Vireonidae')->id
        ]);



        BioGender::create([
            'id' => '2934',
            'scientific_name' => 'Viverra',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Viverridae')->id
        ]);



        BioGender::create([
            'id' => '2935',
            'scientific_name' => 'Volatinia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Thraupidae')->id
        ]);



        BioGender::create([
            'id' => '2936',
            'scientific_name' => 'Vomer',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2937',
            'scientific_name' => 'Vulpes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Canidae')->id
        ]);



        BioGender::create([
            'id' => '2938',
            'scientific_name' => 'Wajpamheros',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cichlidae')->id
        ]);



        BioGender::create([
            'id' => '2939',
            'scientific_name' => 'Wilsonia',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Parulidae')->id
        ]);



        BioGender::create([
            'id' => '2940',
            'scientific_name' => 'Xanthichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Balistidae')->id
        ]);



        BioGender::create([
            'id' => '2941',
            'scientific_name' => 'Xanthocephalus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Icteridae')->id
        ]);



        BioGender::create([
            'id' => '2942',
            'scientific_name' => 'Xantusia',
            'common_name' => 'Lagartijas nocturnas del desierto',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xantusiidae')->id
        ]);



        BioGender::create([
            'id' => '2943',
            'scientific_name' => 'Xema',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Laridae')->id
        ]);



        BioGender::create([
            'id' => '2944',
            'scientific_name' => 'Xenatherina',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Atherinopsidae')->id
        ]);



        BioGender::create([
            'id' => '2945',
            'scientific_name' => 'Xenendum',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '2946',
            'scientific_name' => 'Xeneretmus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);



        BioGender::create([
            'id' => '2947',
            'scientific_name' => 'Xenichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '2948',
            'scientific_name' => 'Xenistius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Haemulidae')->id
        ]);



        BioGender::create([
            'id' => '2949',
            'scientific_name' => 'Xenochirus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Agonidae')->id
        ]);



        BioGender::create([
            'id' => '2950',
            'scientific_name' => 'Xenodermichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Alepocephalidae')->id
        ]);



        BioGender::create([
            'id' => '2951',
            'scientific_name' => 'Xenodexia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2952',
            'scientific_name' => 'Xenodon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Dipsadidae')->id
        ]);



        BioGender::create([
            'id' => '2953',
            'scientific_name' => 'Xenolepidichthys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Grammicolepididae')->id
        ]);



        BioGender::create([
            'id' => '2954',
            'scientific_name' => 'Xenomedea',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labrisomidae')->id
        ]);



        BioGender::create([
            'id' => '2955',
            'scientific_name' => 'Xenomugil',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Mugilidae')->id
        ]);



        BioGender::create([
            'id' => '2956',
            'scientific_name' => 'Xenomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cricetidae')->id
        ]);



        BioGender::create([
            'id' => '2957',
            'scientific_name' => 'Xenomystax',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Congridae')->id
        ]);



        BioGender::create([
            'id' => '2958',
            'scientific_name' => 'Xenoophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '2959',
            'scientific_name' => 'Xenops',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2960',
            'scientific_name' => 'Xenopus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pipidae')->id
        ]);



        BioGender::create([
            'id' => '2961',
            'scientific_name' => 'Xenosaurus',
            'common_name' => 'Lagartijas de grieta',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xenosauridae')->id
        ]);



        BioGender::create([
            'id' => '2962',
            'scientific_name' => 'Xenoscarus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scaridae')->id
        ]);



        BioGender::create([
            'id' => '2963',
            'scientific_name' => 'Xenospiza',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '2964',
            'scientific_name' => 'Xenotaenia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '2965',
            'scientific_name' => 'Xenotoca',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '2966',
            'scientific_name' => 'Xenotriccus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '2967',
            'scientific_name' => 'Xenus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Scolopacidae')->id
        ]);



        BioGender::create([
            'id' => '2968',
            'scientific_name' => 'Xererpes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Pholidae')->id
        ]);



        BioGender::create([
            'id' => '2969',
            'scientific_name' => 'Xerobates',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Testudinidae')->id
        ]);



        BioGender::create([
            'id' => '2970',
            'scientific_name' => 'Xerospermophilus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Sciuridae')->id
        ]);



        BioGender::create([
            'id' => '2971',
            'scientific_name' => 'Xesurus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Acanthuridae')->id
        ]);



        BioGender::create([
            'id' => '2972',
            'scientific_name' => 'Xiphias',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Xiphiidae')->id
        ]);



        BioGender::create([
            'id' => '2973',
            'scientific_name' => 'Xiphister',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stichaeidae')->id
        ]);



        BioGender::create([
            'id' => '2974',
            'scientific_name' => 'Xiphocolaptes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2975',
            'scientific_name' => 'Xiphonura',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ambystomatidae')->id
        ]);



        BioGender::create([
            'id' => '2976',
            'scientific_name' => 'Xiphophorus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Poeciliidae')->id
        ]);



        BioGender::create([
            'id' => '2977',
            'scientific_name' => 'Xiphorhynchus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Furnariidae')->id
        ]);



        BioGender::create([
            'id' => '2978',
            'scientific_name' => 'Xyrauchen',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Catostomidae')->id
        ]);



        BioGender::create([
            'id' => '2979',
            'scientific_name' => 'Xyrichtys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Labridae')->id
        ]);



        BioGender::create([
            'id' => '2980',
            'scientific_name' => 'Xystaema',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Gerreidae')->id
        ]);



        BioGender::create([
            'id' => '2981',
            'scientific_name' => 'Xystreurys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Paralichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2982',
            'scientific_name' => 'Xystrosus',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2983',
            'scientific_name' => 'Yarrella',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2984',
            'scientific_name' => 'Yasuhikotakia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Botiidae')->id
        ]);



        BioGender::create([
            'id' => '2985',
            'scientific_name' => 'Yuriria',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '2986',
            'scientific_name' => 'Zalarges',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Phosichthyidae')->id
        ]);



        BioGender::create([
            'id' => '2987',
            'scientific_name' => 'Zalembius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Embiotocidae')->id
        ]);



        BioGender::create([
            'id' => '2988',
            'scientific_name' => 'Zalieutes',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ogcocephalidae')->id
        ]);



        BioGender::create([
            'id' => '2989',
            'scientific_name' => 'Zalocys',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Carangidae')->id
        ]);



        BioGender::create([
            'id' => '2990',
            'scientific_name' => 'Zalophus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Otariidae')->id
        ]);



        BioGender::create([
            'id' => '2991',
            'scientific_name' => 'Zamenis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Colubridae')->id
        ]);



        BioGender::create([
            'id' => '2992',
            'scientific_name' => 'Zameus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Somniosidae')->id
        ]);



        BioGender::create([
            'id' => '2993',
            'scientific_name' => 'Zanclus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zanclidae')->id
        ]);



        BioGender::create([
            'id' => '2994',
            'scientific_name' => 'Zaniolepis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zaniolepididae')->id
        ]);



        BioGender::create([
            'id' => '2995',
            'scientific_name' => 'Zapteryx',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Rhinobatidae')->id
        ]);



        BioGender::create([
            'id' => '2996',
            'scientific_name' => 'Zastomias',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Stomiidae')->id
        ]);



        BioGender::create([
            'id' => '2997',
            'scientific_name' => 'Zenaida',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '2998',
            'scientific_name' => 'Zenion',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zeniontidae')->id
        ]);



        BioGender::create([
            'id' => '2999',
            'scientific_name' => 'Zenopsis',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zeidae')->id
        ]);



        BioGender::create([
            'id' => '3000',
            'scientific_name' => 'Zentrygon',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Columbidae')->id
        ]);



        BioGender::create([
            'id' => '3001',
            'scientific_name' => 'Zesticelus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cottidae')->id
        ]);



        BioGender::create([
            'id' => '3002',
            'scientific_name' => 'Zeus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Zeidae')->id
        ]);



        BioGender::create([
            'id' => '3003',
            'scientific_name' => 'Zimmerius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Tyrannidae')->id
        ]);



        BioGender::create([
            'id' => '3004',
            'scientific_name' => 'Ziphius',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Ziphiidae')->id
        ]);



        BioGender::create([
            'id' => '3005',
            'scientific_name' => 'Zonotrichia',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Passerellidae')->id
        ]);



        BioGender::create([
            'id' => '3006',
            'scientific_name' => 'Zoogoneticus',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Goodeidae')->id
        ]);



        BioGender::create([
            'id' => '3007',
            'scientific_name' => 'Zophendum',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Cyprinidae')->id
        ]);



        BioGender::create([
            'id' => '3008',
            'scientific_name' => 'Zu',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Trachipteridae')->id
        ]);



        BioGender::create([
            'id' => '3009',
            'scientific_name' => 'Zygogeomys',
            'common_name' => '',
            'status' => 'válido',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Geomyidae')->id
        ]);



        BioGender::create([
            'id' => '3010',
            'scientific_name' => 'Zygonectes',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_family_id' => BioFamily::firstWhere('scientific_name', '=', 'Fundulidae')->id
        ]);
    }
}

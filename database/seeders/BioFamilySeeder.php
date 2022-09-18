<?php

namespace Database\Seeders;

use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BioFamily::create([
            'id' => '1',
            'scientific_name' => 'Acanthuridae',
            'common_name' => '"Cirujanos, Surgeonfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Acanthuriformes')->id
        ]);



        BioFamily::create([
            'id' => '2',
            'scientific_name' => 'Accipitridae',
            'common_name' => '"Aguilillas, Allies, Eagles, Gavilanes, Hawks, Kites, Milanos, Águilas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Accipitriformes')->id
        ]);



        BioFamily::create([
            'id' => '3',
            'scientific_name' => 'Achiridae',
            'common_name' => '"American soles, Lenguados suelas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '4',
            'scientific_name' => 'Acipenseridae',
            'common_name' => '"Esturiones, Sturgeons"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Acipenseriformes')->id
        ]);



        BioFamily::create([
            'id' => '5',
            'scientific_name' => 'Acropomatidae',
            'common_name' => '"Farolitos, Lanternbellies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '6',
            'scientific_name' => 'Aegithalidae',
            'common_name' => '"Bushtits, Long-tailed Tits, Sastrecillo, Sastrecillos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '7',
            'scientific_name' => 'Agamidae',
            'common_name' => 'Lagartos de fuego',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '8',
            'scientific_name' => 'Agonidae',
            'common_name' => '"Bandidos, Poachers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '9',
            'scientific_name' => 'Alaudidae',
            'common_name' => '"Alondras, Larks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '10',
            'scientific_name' => 'Albulidae',
            'common_name' => '"Bonefishes, Macabíes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Albuliformes')->id
        ]);



        BioFamily::create([
            'id' => '11',
            'scientific_name' => 'Alcedinidae',
            'common_name' => '"Kingfishers, Martines pescadores"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Coraciiformes')->id
        ]);



        BioFamily::create([
            'id' => '12',
            'scientific_name' => 'Alcidae',
            'common_name' => '"Alcas, Alcitas, Auks, Murres, Puffins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '13',
            'scientific_name' => 'Alepisauridae',
            'common_name' => '"Lancetfishes, Lanzones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '14',
            'scientific_name' => 'Alepocephalidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Alepocephaliformes')->id
        ]);



        BioFamily::create([
            'id' => '15',
            'scientific_name' => 'Alligatoridae',
            'common_name' => 'Caimanes',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Crocodylia')->id
        ]);



        BioFamily::create([
            'id' => '16',
            'scientific_name' => 'Alopiidae',
            'common_name' => '"Thresher sharks, Tiburones zorro"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '17',
            'scientific_name' => 'Ambassidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Incertae sedis')->id
        ]);



        BioFamily::create([
            'id' => '18',
            'scientific_name' => 'Ambystomatidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caudata')->id
        ]);



        BioFamily::create([
            'id' => '19',
            'scientific_name' => 'Ammodytidae',
            'common_name' => '"Peones, Sand lances"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachiniformes')->id
        ]);



        BioFamily::create([
            'id' => '20',
            'scientific_name' => 'Amydae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '21',
            'scientific_name' => 'Anablepidae',
            'common_name' => '"Cuatrojos, Four-eyed fishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '22',
            'scientific_name' => 'Anatidae',
            'common_name' => '"Cercetas, Cisnes, Ducks, Gansos, Geese, Patos, Swans"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anseriformes')->id
        ]);



        BioFamily::create([
            'id' => '23',
            'scientific_name' => 'Anguidae',
            'common_name' => '"Alicantes, Lagartijas lagarto"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '24',
            'scientific_name' => 'Anguillidae',
            'common_name' => '"Anguilas de río, Freshwater eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '25',
            'scientific_name' => 'Anhingidae',
            'common_name' => '"Anhingas, Darters"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Suliformes')->id
        ]);



        BioFamily::create([
            'id' => '26',
            'scientific_name' => 'Anniellidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '27',
            'scientific_name' => 'Anomalopidae',
            'common_name' => '"Flashlightfishes, Ojos de linterna"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachichthyiformes')->id
        ]);



        BioFamily::create([
            'id' => '28',
            'scientific_name' => 'Anoplogastridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachichthyiformes')->id
        ]);



        BioFamily::create([
            'id' => '29',
            'scientific_name' => 'Anoplopomatidae',
            'common_name' => '"Bacalaos negros, Sablefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '30',
            'scientific_name' => 'Anostomidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '31',
            'scientific_name' => 'Antennariidae',
            'common_name' => '"Frogfishes, Ranisapos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '32',
            'scientific_name' => 'Antilocapridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '33',
            'scientific_name' => 'Aplocheilidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '34',
            'scientific_name' => 'Apodidae',
            'common_name' => '"Swifts, Vencejos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Apodiformes')->id
        ]);



        BioFamily::create([
            'id' => '35',
            'scientific_name' => 'Apogonidae',
            'common_name' => '"Cardenales, Cardinalfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Kurtiformes')->id
        ]);



        BioFamily::create([
            'id' => '36',
            'scientific_name' => 'Apteronotidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gymnotiformes')->id
        ]);



        BioFamily::create([
            'id' => '37',
            'scientific_name' => 'Aramidae',
            'common_name' => '"Caraos, Carrao, Limpkins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gruiformes')->id
        ]);



        BioFamily::create([
            'id' => '38',
            'scientific_name' => 'Ardeidae',
            'common_name' => '"Bitterns, Garzas, Herons"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pelecaniformes')->id
        ]);



        BioFamily::create([
            'id' => '39',
            'scientific_name' => 'Argentinidae',
            'common_name' => '"Argentinas, Argentines"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Argentiniformes')->id
        ]);



        BioFamily::create([
            'id' => '40',
            'scientific_name' => 'Ariidae',
            'common_name' => '"Bagres marinos, Sea catfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '41',
            'scientific_name' => 'Ariommatidae',
            'common_name' => '"Ariommatids, Pastorcillos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '42',
            'scientific_name' => 'Ascidiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phlebobranchia')->id
        ]);



        BioFamily::create([
            'id' => '43',
            'scientific_name' => 'Ateleopodidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Ateleopodiformes')->id
        ]);



        BioFamily::create([
            'id' => '44',
            'scientific_name' => 'Atelidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Primates')->id
        ]);



        BioFamily::create([
            'id' => '45',
            'scientific_name' => 'Atherinidae',
            'common_name' => '"Old world silversides, Tinícalos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Atheriniformes')->id
        ]);



        BioFamily::create([
            'id' => '46',
            'scientific_name' => 'Atherinopsidae',
            'common_name' => '"Charales, New world silversides, Pejerreyes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Atheriniformes')->id
        ]);



        BioFamily::create([
            'id' => '47',
            'scientific_name' => 'Aulopidae',
            'common_name' => '"Aulópidos, Flagfins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '48',
            'scientific_name' => 'Aulorhynchidae',
            'common_name' => '"Trompudos, Tubesnouts"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '49',
            'scientific_name' => 'Aulostomidae',
            'common_name' => '"Trompetas, Trumpetfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '50',
            'scientific_name' => 'Balaenidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '51',
            'scientific_name' => 'Balaenopteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '52',
            'scientific_name' => 'Balistidae',
            'common_name' => '"Cochito, Triggerfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '53',
            'scientific_name' => 'Barbourisiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '54',
            'scientific_name' => 'Bataguridae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '55',
            'scientific_name' => 'Bathyclupeidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '56',
            'scientific_name' => 'Bathylagidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Argentiniformes')->id
        ]);



        BioFamily::create([
            'id' => '57',
            'scientific_name' => 'Bathymasteridae',
            'common_name' => '"Roncos pelones, Ronquils"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '58',
            'scientific_name' => 'Batrachoididae',
            'common_name' => '"Peces sapo, Toadfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Batrachoidiformes')->id
        ]);



        BioFamily::create([
            'id' => '59',
            'scientific_name' => 'Batrachylidae',
            'common_name' => 'Ranas sudamericanas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '60',
            'scientific_name' => 'Belonidae',
            'common_name' => '"Agujones, Needlefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beloniformes')->id
        ]);



        BioFamily::create([
            'id' => '61',
            'scientific_name' => 'Berycidae',
            'common_name' => 'Alfonsinos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '62',
            'scientific_name' => 'Bipedidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '63',
            'scientific_name' => 'Blenniidae',
            'common_name' => '"Borrachos, Combtooth blennies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '64',
            'scientific_name' => 'Boidae',
            'common_name' => 'Boas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '65',
            'scientific_name' => 'Bombycillidae',
            'common_name' => '"Ampelis, Chinitos, Waxwings"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '66',
            'scientific_name' => 'Bothidae',
            'common_name' => '"Lefteye flounders, Lenguados chuecos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '67',
            'scientific_name' => 'Botiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cypriniformes')->id
        ]);



        BioFamily::create([
            'id' => '68',
            'scientific_name' => 'Bovidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '69',
            'scientific_name' => 'Bramidae',
            'common_name' => '"Pomfrets, Tristones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '70',
            'scientific_name' => 'Branchiostomatidae',
            'common_name' => '"Anfioxos, Lancelets"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Amphioxiformes')->id
        ]);



        BioFamily::create([
            'id' => '71',
            'scientific_name' => 'Bregmacerotidae',
            'common_name' => '"Bacaletes, Codlets"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '72',
            'scientific_name' => 'Bucconidae',
            'common_name' => '"Bucos, Puffbirds"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Piciformes')->id
        ]);



        BioFamily::create([
            'id' => '73',
            'scientific_name' => 'Bufonidae',
            'common_name' => 'Sapos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '74',
            'scientific_name' => 'Burhinidae',
            'common_name' => '"Alcaravanes, Thick-knees"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '75',
            'scientific_name' => 'Bythitidae',
            'common_name' => '"Brótulas vivíparas, Viviparous brotulas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Ophidiiformes')->id
        ]);



        BioFamily::create([
            'id' => '76',
            'scientific_name' => 'Calcariidae',
            'common_name' => '"Escribanos, Longspurs"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '77',
            'scientific_name' => 'Callichthyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '78',
            'scientific_name' => 'Callionymidae',
            'common_name' => '"Dragoncillos, Dragonets"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Callionymiformes')->id
        ]);



        BioFamily::create([
            'id' => '79',
            'scientific_name' => 'Candoiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '80',
            'scientific_name' => 'Canidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '81',
            'scientific_name' => 'Caprimulgidae',
            'common_name' => '"Chotacabras, Goatsuckers, Tapacaminos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caprimulgiformes')->id
        ]);



        BioFamily::create([
            'id' => '82',
            'scientific_name' => 'Caproidae',
            'common_name' => '"Boarfishes, Verracos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caproiformes')->id
        ]);



        BioFamily::create([
            'id' => '83',
            'scientific_name' => 'Capromyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '84',
            'scientific_name' => 'Carangidae',
            'common_name' => '"Jacks, Jureles, Pámpanos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carangiformes')->id
        ]);



        BioFamily::create([
            'id' => '85',
            'scientific_name' => 'Carapidae',
            'common_name' => '"Pearlfishes, Perleros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Ophidiiformes')->id
        ]);



        BioFamily::create([
            'id' => '86',
            'scientific_name' => 'Carcharhinidae',
            'common_name' => '"Requiem sharks, Tiburones gambuso"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carcharhiniformes')->id
        ]);



        BioFamily::create([
            'id' => '87',
            'scientific_name' => 'Cardinalidae',
            'common_name' => '"Arroceros, Buntings, Cardenales, Cardinals, Colorines, Grosbeaks, Picogruesos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '88',
            'scientific_name' => 'Carettidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '89',
            'scientific_name' => 'Caristiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '90',
            'scientific_name' => 'Castoridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '91',
            'scientific_name' => 'Cathartidae',
            'common_name' => '"American Vultures, Zopilotes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cathartiformes')->id
        ]);



        BioFamily::create([
            'id' => '92',
            'scientific_name' => 'Catostomidae',
            'common_name' => '"Matalotes, Suckers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cypriniformes')->id
        ]);



        BioFamily::create([
            'id' => '93',
            'scientific_name' => 'Centrarchidae',
            'common_name' => '"Lobinas, Sunfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '94',
            'scientific_name' => 'Centriscidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '95',
            'scientific_name' => 'Centrolenidae',
            'common_name' => 'Ranas de cristal',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '96',
            'scientific_name' => 'Centrolophidae',
            'common_name' => '"Cojinoba, Medusafishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '97',
            'scientific_name' => 'Centrophoridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '98',
            'scientific_name' => 'Centropomidae',
            'common_name' => '"Robalos, Snooks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '99',
            'scientific_name' => 'Ceratiidae',
            'common_name' => '"Peces anzuelo, Seadevils"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '100',
            'scientific_name' => 'Certhiidae',
            'common_name' => '"Creepers, Trepadorcitos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '101',
            'scientific_name' => 'Cervidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '102',
            'scientific_name' => 'Cetomimidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '103',
            'scientific_name' => 'Cetorhinidae',
            'common_name' => '"Basking sharks, Tiburones peregrino"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '104',
            'scientific_name' => 'Chaenopsidae',
            'common_name' => '"Trambollos tubícolas, Tube blennies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '105',
            'scientific_name' => 'Chaetodontidae',
            'common_name' => '"Butterflyfishes, Peces mariposa"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '106',
            'scientific_name' => 'Chalceidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '107',
            'scientific_name' => 'Chamaeleonidae',
            'common_name' => 'Camaleones',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '108',
            'scientific_name' => 'Chanidae',
            'common_name' => '"Milkfishes, Sabalotes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gonorynchiformes')->id
        ]);



        BioFamily::create([
            'id' => '109',
            'scientific_name' => 'Channidae',
            'common_name' => '"Cabezas de serpiente, Snakeheads"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anabantiformes')->id
        ]);



        BioFamily::create([
            'id' => '110',
            'scientific_name' => 'Characidae',
            'common_name' => '"Pepescas, Sardinitas, Tetras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '111',
            'scientific_name' => 'Charadriidae',
            'common_name' => '"Chorlos, Lapwings, Plovers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '112',
            'scientific_name' => 'Charinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '113',
            'scientific_name' => 'Chaunacidae',
            'common_name' => '"Gapers, Gómitas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '114',
            'scientific_name' => 'Cheloniadae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '115',
            'scientific_name' => 'Chelonidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '116',
            'scientific_name' => 'Cheloniidae',
            'common_name' => 'Tortugas marinas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '117',
            'scientific_name' => 'Cheloniidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '118',
            'scientific_name' => 'Chelydrae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '119',
            'scientific_name' => 'Chelydridae',
            'common_name' => 'Tortugas lagarto',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '120',
            'scientific_name' => 'Chelydridae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '121',
            'scientific_name' => 'Chiasmodontidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachiniformes')->id
        ]);



        BioFamily::create([
            'id' => '122',
            'scientific_name' => 'Chimaeridae',
            'common_name' => '"Quimeras, Shortnose chimaeras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chimaeriformes')->id
        ]);



        BioFamily::create([
            'id' => '123',
            'scientific_name' => 'Chlamydoselachidae',
            'common_name' => '"Frill sharks, Tiburones anguila"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Hexanchiformes')->id
        ]);



        BioFamily::create([
            'id' => '124',
            'scientific_name' => 'Chlopsidae',
            'common_name' => '"False morays, Morenas falsas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '125',
            'scientific_name' => 'Chlorophthalmidae',
            'common_name' => '"Greeneyes, Ojiverdes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '126',
            'scientific_name' => 'Cichlidae',
            'common_name' => '"Cichlids, Mojarras de agua dulce, Tilapias"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cichliformes')->id
        ]);



        BioFamily::create([
            'id' => '127',
            'scientific_name' => 'Ciconiidae',
            'common_name' => '"Cigueñas, Cigüeñas, Storks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Ciconiiformes')->id
        ]);



        BioFamily::create([
            'id' => '128',
            'scientific_name' => 'Cinclidae',
            'common_name' => '"Cinclos, Dippers, Mirlos acuáticos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '129',
            'scientific_name' => 'Cinosternoidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '130',
            'scientific_name' => 'Cionidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phlebobranchia')->id
        ]);



        BioFamily::create([
            'id' => '131',
            'scientific_name' => 'Cirrhitidae',
            'common_name' => '"Halcones, Hawkfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '132',
            'scientific_name' => 'Clariidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '133',
            'scientific_name' => 'Clavelinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '134',
            'scientific_name' => 'Clinidae',
            'common_name' => '"Kelp blennies, Sargaceros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '135',
            'scientific_name' => 'Clupeidae',
            'common_name' => '"Herrings, Sardinas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Clupeiformes')->id
        ]);



        BioFamily::create([
            'id' => '136',
            'scientific_name' => 'Cobitidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cypriniformes')->id
        ]);



        BioFamily::create([
            'id' => '137',
            'scientific_name' => 'Colubridae',
            'common_name' => 'Culebras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '138',
            'scientific_name' => 'Columbidae',
            'common_name' => '"Doves, Palomas, Pigeons, Tórtolas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Columbiformes')->id
        ]);



        BioFamily::create([
            'id' => '139',
            'scientific_name' => 'Congridae',
            'common_name' => '"Conger eels, Congrios"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '140',
            'scientific_name' => 'Cordylidae',
            'common_name' => 'Lagartijas de faja',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '141',
            'scientific_name' => 'Corellidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phlebobranchia')->id
        ]);



        BioFamily::create([
            'id' => '142',
            'scientific_name' => 'Corvidae',
            'common_name' => '"Charas, Crows, Cuervos, Jays, Magpies, Urracas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '143',
            'scientific_name' => 'Coryphaenidae',
            'common_name' => '"Dolphinfishes, Dorados"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carangiformes')->id
        ]);



        BioFamily::create([
            'id' => '144',
            'scientific_name' => 'Corytophanidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '145',
            'scientific_name' => 'Cotingidae',
            'common_name' => 'Cotingas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '146',
            'scientific_name' => 'Cottidae',
            'common_name' => '"Charrascos espinosos, Sculpins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '147',
            'scientific_name' => 'Cracidae',
            'common_name' => '"Chachalacas, Currasows, Guans"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Galliformes')->id
        ]);



        BioFamily::create([
            'id' => '148',
            'scientific_name' => 'Craugastoridae',
            'common_name' => 'Ranas de hojarasca',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '149',
            'scientific_name' => 'Cricetidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '150',
            'scientific_name' => 'Crocodylidae',
            'common_name' => 'Cocodrilos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Crocodylia')->id
        ]);



        BioFamily::create([
            'id' => '151',
            'scientific_name' => 'Crotaphytidae',
            'common_name' => 'Cachorónes',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '152',
            'scientific_name' => 'Cuculidae',
            'common_name' => '"Anis, Correcaminos, Cuckoos, Cuclillos, Garrapateros, Roadrunners"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cuculiformes')->id
        ]);



        BioFamily::create([
            'id' => '153',
            'scientific_name' => 'Cuniculidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '154',
            'scientific_name' => 'Cyclopedidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pilosa')->id
        ]);



        BioFamily::create([
            'id' => '155',
            'scientific_name' => 'Cyematidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '156',
            'scientific_name' => 'Cynoglossidae',
            'common_name' => '"Lenguas, Tonguefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '157',
            'scientific_name' => 'Cyprinidae',
            'common_name' => '"Carpas, Carpitas, Carps, Minnows"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cypriniformes')->id
        ]);



        BioFamily::create([
            'id' => '158',
            'scientific_name' => 'Cyprinodontidae',
            'common_name' => '"Cachorritos, Pupfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '159',
            'scientific_name' => 'Cyttidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Zeiformes')->id
        ]);



        BioFamily::create([
            'id' => '160',
            'scientific_name' => 'Dactyloidae',
            'common_name' => 'Abaniquillos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '161',
            'scientific_name' => 'Dactylopteridae',
            'common_name' => '"Alones, Flying gurnards"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '162',
            'scientific_name' => 'Dactyloscopidae',
            'common_name' => '"Miraestrellas, Sand stargazers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '163',
            'scientific_name' => 'Dalatiidae',
            'common_name' => '"Kitefin sharks, Tiburones carochos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '164',
            'scientific_name' => 'Dasyatidae',
            'common_name' => '"Rayas látigo, Whiptail stingrays"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '165',
            'scientific_name' => 'Dasypodidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cingulata')->id
        ]);



        BioFamily::create([
            'id' => '166',
            'scientific_name' => 'Dasyproctidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '167',
            'scientific_name' => 'Delphinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '168',
            'scientific_name' => 'Dendrobatidae',
            'common_name' => 'Ranas venenosas de dardo',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '169',
            'scientific_name' => 'Derichthyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '170',
            'scientific_name' => 'Dermatemydae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '171',
            'scientific_name' => 'Dermatemydidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '172',
            'scientific_name' => 'Dermatemydidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '173',
            'scientific_name' => 'Dermochelyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '174',
            'scientific_name' => 'Dermochelyidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '175',
            'scientific_name' => 'Dermophiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gymnophiona')->id
        ]);



        BioFamily::create([
            'id' => '176',
            'scientific_name' => 'Dibamidae',
            'common_name' => 'Lagartijas lombriz',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '177',
            'scientific_name' => 'Didelphidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Didelphimorphia')->id
        ]);



        BioFamily::create([
            'id' => '178',
            'scientific_name' => 'Didemnidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '179',
            'scientific_name' => 'Diodontidae',
            'common_name' => '"Peces erizo, Porcupinefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '180',
            'scientific_name' => 'Diomedeidae',
            'common_name' => '"Albatros, Albatrosses"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Procellariiformes')->id
        ]);



        BioFamily::create([
            'id' => '181',
            'scientific_name' => 'Diplodactylidae',
            'common_name' => 'Gecos australianos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '182',
            'scientific_name' => 'Dipsadidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '183',
            'scientific_name' => 'Diretmidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachichthyiformes')->id
        ]);



        BioFamily::create([
            'id' => '184',
            'scientific_name' => 'Dysmydae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '185',
            'scientific_name' => 'Echeneidae',
            'common_name' => '"Remoras, Rémoras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carangiformes')->id
        ]);



        BioFamily::create([
            'id' => '186',
            'scientific_name' => 'Echinorhinidae',
            'common_name' => '"Bramble sharks, Tiburones espinosos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Echinorhiniformes')->id
        ]);



        BioFamily::create([
            'id' => '187',
            'scientific_name' => 'Elapidae',
            'common_name' => 'Coralillos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '188',
            'scientific_name' => 'Eleotridae',
            'common_name' => '"Guavinas, Sleepers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gobiiformes')->id
        ]);



        BioFamily::create([
            'id' => '189',
            'scientific_name' => 'Eleutherodactylidae',
            'common_name' => 'Ranas de dedos largos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '190',
            'scientific_name' => 'Elopidae',
            'common_name' => '"Machetes, Tenpounders"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Elopiformes')->id
        ]);



        BioFamily::create([
            'id' => '191',
            'scientific_name' => 'Emballonuridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '192',
            'scientific_name' => 'Emberizidae',
            'common_name' => '"Emberizids, Gorriones, Juncos, Rascadores, Semilleros, Zacatoneros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '193',
            'scientific_name' => 'Embiotocidae',
            'common_name' => '"Mojarras vivíparas, Surfperches"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Incertae sedis')->id
        ]);



        BioFamily::create([
            'id' => '194',
            'scientific_name' => 'Emydae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '195',
            'scientific_name' => 'Emydidae',
            'common_name' => 'Tortugas jicoteas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '196',
            'scientific_name' => 'Emydidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '197',
            'scientific_name' => 'Engraulidae',
            'common_name' => '"Anchoas, Anchovies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Clupeiformes')->id
        ]);



        BioFamily::create([
            'id' => '198',
            'scientific_name' => 'Ephippidae',
            'common_name' => '"Peluqueros, Spadefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Moroniformes')->id
        ]);



        BioFamily::create([
            'id' => '199',
            'scientific_name' => 'Epigonidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '200',
            'scientific_name' => 'Equidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perissodactyla')->id
        ]);



        BioFamily::create([
            'id' => '201',
            'scientific_name' => 'Erethizontidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '202',
            'scientific_name' => 'Erycidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '203',
            'scientific_name' => 'Eschrichtiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '204',
            'scientific_name' => 'Esocidae',
            'common_name' => '"Lucios, Mudminnows, Peces del fango, Pikes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Esociformes')->id
        ]);



        BioFamily::create([
            'id' => '205',
            'scientific_name' => 'Estrildidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '206',
            'scientific_name' => 'Etmopteridae',
            'common_name' => '"Lantern sharks, Tiburones luceros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '207',
            'scientific_name' => 'Eublepharidae',
            'common_name' => 'Geckos rayados',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '208',
            'scientific_name' => 'Euherdmaniidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '209',
            'scientific_name' => 'Eurypharyngidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '210',
            'scientific_name' => 'Eurypygidae',
            'common_name' => '"Ave sol, Eurípigas, Sunbitterns"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Eurypygiformes')->id
        ]);



        BioFamily::create([
            'id' => '211',
            'scientific_name' => 'Evermannellidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '212',
            'scientific_name' => 'Exocoetidae',
            'common_name' => '"Flyingfishes, Voladores"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beloniformes')->id
        ]);



        BioFamily::create([
            'id' => '213',
            'scientific_name' => 'Falconidae',
            'common_name' => '"Caracaras, Falcons, Halcones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Falconiformes')->id
        ]);



        BioFamily::create([
            'id' => '214',
            'scientific_name' => 'Felidae',
            'common_name' => 'Felinos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '215',
            'scientific_name' => 'Fistulariidae',
            'common_name' => '"Cornetas, Cornetfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '216',
            'scientific_name' => 'Formicariidae',
            'common_name' => '"Antbirds, Batarás, Hormigueros, Hormigueros cholinos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '217',
            'scientific_name' => 'Fregatidae',
            'common_name' => '"Fragatas, Frigatebirds"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Suliformes')->id
        ]);



        BioFamily::create([
            'id' => '218',
            'scientific_name' => 'Fringillidae',
            'common_name' => '"Cardueline Finches, Fringilline, Gorriones, Jilgueros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '219',
            'scientific_name' => 'Fundulidae',
            'common_name' => '"Sardinillas, Topminnows"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '220',
            'scientific_name' => 'Furnariidae',
            'common_name' => '"Furnáridos, Horneros, Ovenbirds"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '221',
            'scientific_name' => 'Gadidae',
            'common_name' => '"Bacalaos, Cods"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '222',
            'scientific_name' => 'Galbulidae',
            'common_name' => '"Gálbulas, Jacamares, Jacamars"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Piciformes')->id
        ]);



        BioFamily::create([
            'id' => '223',
            'scientific_name' => 'Gasteropelecidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '224',
            'scientific_name' => 'Gasterosteidae',
            'common_name' => '"Espinochos, Sticklebacks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '225',
            'scientific_name' => 'Gaviidae',
            'common_name' => '"Colimbos, Gavias, Loons"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gaviiformes')->id
        ]);



        BioFamily::create([
            'id' => '226',
            'scientific_name' => 'Gekkonidae',
            'common_name' => '"Geckos, Gecos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '227',
            'scientific_name' => 'Gempylidae',
            'common_name' => '"Escolares, Snake mackerels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '228',
            'scientific_name' => 'Geoemydidae',
            'common_name' => 'Tortugas sabaneras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '229',
            'scientific_name' => 'Geomyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '230',
            'scientific_name' => 'Gerreidae',
            'common_name' => 'Mojarras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '231',
            'scientific_name' => 'Ginglymostomatidae',
            'common_name' => '"Gatas, Nurse shark"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Orectolobiformes')->id
        ]);



        BioFamily::create([
            'id' => '232',
            'scientific_name' => 'Gobiesocidae',
            'common_name' => '"Chupapiedras, Clingfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gobiesociformes')->id
        ]);



        BioFamily::create([
            'id' => '233',
            'scientific_name' => 'Gobiidae',
            'common_name' => '"Gobies, Gobios"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gobiiformes')->id
        ]);



        BioFamily::create([
            'id' => '234',
            'scientific_name' => 'Gonostomatidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stomiiformes')->id
        ]);



        BioFamily::create([
            'id' => '235',
            'scientific_name' => 'Goodeidae',
            'common_name' => '"Goodeids, Mexclapiques"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '236',
            'scientific_name' => 'Grallariidae',
            'common_name' => '"Antpittas, Hormigueros cholinos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '237',
            'scientific_name' => 'Grammatidae',
            'common_name' => '"Basslets, Cabrilletas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Incertae sedis')->id
        ]);



        BioFamily::create([
            'id' => '238',
            'scientific_name' => 'Grammicolepididae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Zeiformes')->id
        ]);



        BioFamily::create([
            'id' => '239',
            'scientific_name' => 'Gruidae',
            'common_name' => '"Cranes, Grullas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gruiformes')->id
        ]);



        BioFamily::create([
            'id' => '240',
            'scientific_name' => 'Gymnophthalmidae',
            'common_name' => 'Lagartijas doradas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '241',
            'scientific_name' => 'Gymnotidae',
            'common_name' => '"Cuchillos, Nakedback knifefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gymnotiformes')->id
        ]);



        BioFamily::create([
            'id' => '242',
            'scientific_name' => 'Gymnuridae',
            'common_name' => '"Butterfly rays, Rayas mariposa"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '243',
            'scientific_name' => 'Gyrinocheilidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cypriniformes')->id
        ]);



        BioFamily::create([
            'id' => '244',
            'scientific_name' => 'Haematopodidae',
            'common_name' => '"Ostreros, Oystercatchers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '245',
            'scientific_name' => 'Haemulidae',
            'common_name' => '"Burros, Grunts, Roncos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '246',
            'scientific_name' => 'Heliornithidae',
            'common_name' => '"Pájaros cantil, Sungrebes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gruiformes')->id
        ]);



        BioFamily::create([
            'id' => '247',
            'scientific_name' => 'Helodermatidae',
            'common_name' => '"Escorpiones, Lagartos de chaquira, Monstruos de Gila"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '248',
            'scientific_name' => 'Helostomatidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anabantiformes')->id
        ]);



        BioFamily::create([
            'id' => '249',
            'scientific_name' => 'Hemiodontidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '250',
            'scientific_name' => 'Hemiramphidae',
            'common_name' => '"Halfbeaks, Pajaritos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beloniformes')->id
        ]);



        BioFamily::create([
            'id' => '251',
            'scientific_name' => 'Heptapteridae',
            'common_name' => '"Juiles, Seven-finned catfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '252',
            'scientific_name' => 'Heterenchelyidae',
            'common_name' => '"Anguilas de fango, Mud eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '253',
            'scientific_name' => 'Heterodontidae',
            'common_name' => '"Bullhead sharks, Tiburones cornudos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Heterodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '254',
            'scientific_name' => 'Heteromyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '255',
            'scientific_name' => 'Hexagrammidae',
            'common_name' => '"Greenlings, Molvas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '256',
            'scientific_name' => 'Hexanchidae',
            'common_name' => '"Cow sharks, Tiburones cañabota"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Hexanchiformes')->id
        ]);



        BioFamily::create([
            'id' => '257',
            'scientific_name' => 'Himantolophidae',
            'common_name' => '"Footballfishes, Peces balón"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '258',
            'scientific_name' => 'Hirundinidae',
            'common_name' => '"Golondrinas, Swallows"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '259',
            'scientific_name' => 'Holocentridae',
            'common_name' => '"Candiles, Squirrelfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Holocentriformes')->id
        ]);



        BioFamily::create([
            'id' => '260',
            'scientific_name' => 'Holozoidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '261',
            'scientific_name' => 'Homalopsidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '262',
            'scientific_name' => 'Horabagridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '263',
            'scientific_name' => 'Howellidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '264',
            'scientific_name' => 'Hydrobatidae',
            'common_name' => '"Paíños, Storm-Petrels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Procellariiformes')->id
        ]);



        BioFamily::create([
            'id' => '265',
            'scientific_name' => 'Hylidae',
            'common_name' => 'Ranas arborícolas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '266',
            'scientific_name' => 'Hylodidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '267',
            'scientific_name' => 'Hystricidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '268',
            'scientific_name' => 'Ictaluridae',
            'common_name' => '"Bagres de agua dulce, North American catfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '269',
            'scientific_name' => 'Icteridae',
            'common_name' => '"American Blackbirds, Bolseros, Calandrias, Orioles"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '270',
            'scientific_name' => 'Icteriidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '271',
            'scientific_name' => 'Iguanidae',
            'common_name' => '"Garrobos, Iguanas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '272',
            'scientific_name' => 'Istiophoridae',
            'common_name' => '"Billfishes, Picudos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Istiophoriformes')->id
        ]);



        BioFamily::create([
            'id' => '273',
            'scientific_name' => 'Jacanidae',
            'common_name' => 'Jacanas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '274',
            'scientific_name' => 'Kinosternidae',
            'common_name' => 'Tortugas casquitos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '275',
            'scientific_name' => 'Kinosternidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '276',
            'scientific_name' => 'Kuhliidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '277',
            'scientific_name' => 'Kyphosidae',
            'common_name' => '"Chopas, Sea chubs"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '278',
            'scientific_name' => 'Labridae',
            'common_name' => '"Doncellas, Loros, Parrotfishes, Señoritas, Wrasses"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Labriformes')->id
        ]);



        BioFamily::create([
            'id' => '279',
            'scientific_name' => 'Labrisomidae',
            'common_name' => '"Labrisomid blennies, Trambollos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '280',
            'scientific_name' => 'Lacantuniidae',
            'common_name' => '"Bagres del Lacantún, Lacantún catfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '281',
            'scientific_name' => 'Lacertidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '282',
            'scientific_name' => 'Lamnidae',
            'common_name' => '"Jaquetones, Mackerel sharks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '283',
            'scientific_name' => 'Lampridae',
            'common_name' => 'Opahs',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lampriformes')->id
        ]);



        BioFamily::create([
            'id' => '284',
            'scientific_name' => 'Laniidae',
            'common_name' => '"Shrikes, Verdugos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '285',
            'scientific_name' => 'Laridae',
            'common_name' => '"Gaviotas, Golondrinas Marinas, Gulls, Skimmer, Terns"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '286',
            'scientific_name' => 'Leiocephalidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '287',
            'scientific_name' => 'Leiosauridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '288',
            'scientific_name' => 'Lemuridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Primates')->id
        ]);



        BioFamily::create([
            'id' => '289',
            'scientific_name' => 'Lepisosteidae',
            'common_name' => '"Gars, Pejelagartos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lepisosteiformes')->id
        ]);



        BioFamily::create([
            'id' => '290',
            'scientific_name' => 'Leporidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lagomorpha')->id
        ]);



        BioFamily::create([
            'id' => '291',
            'scientific_name' => 'Leptodactylidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '292',
            'scientific_name' => 'Leptotyphlopidae',
            'common_name' => 'Agujillas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '293',
            'scientific_name' => 'Lestidiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '294',
            'scientific_name' => 'Linophrynidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '295',
            'scientific_name' => 'Liparidae',
            'common_name' => '"Peces babosos, Snailfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '296',
            'scientific_name' => 'Lobotidae',
            'common_name' => '"Dormilonas, Tripletails"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Spariformes')->id
        ]);



        BioFamily::create([
            'id' => '297',
            'scientific_name' => 'Lophiidae',
            'common_name' => '"Goosefishes, Rapes pescadores"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '298',
            'scientific_name' => 'Lophotidae',
            'common_name' => '"Crestfishes, Peces flecos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lampriformes')->id
        ]);



        BioFamily::create([
            'id' => '299',
            'scientific_name' => 'Loricariidae',
            'common_name' => '"Plecóstomas, Suckermouth armored catfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '300',
            'scientific_name' => 'Loxocemidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '301',
            'scientific_name' => 'Lutjanidae',
            'common_name' => '"Huachinangos, Pargos, Snappers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '302',
            'scientific_name' => 'Luvaridae',
            'common_name' => '"Emperadores, Louvars"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Acanthuriformes')->id
        ]);



        BioFamily::create([
            'id' => '303',
            'scientific_name' => 'Macroramphosidae',
            'common_name' => '"Snipefishes, Trompeteros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '304',
            'scientific_name' => 'Macrouridae',
            'common_name' => '"Granaderos, Grenadiers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '305',
            'scientific_name' => 'Malacanthidae',
            'common_name' => '"Blanquillos, Tilefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '306',
            'scientific_name' => 'Mastacembelidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Synbranchiformes')->id
        ]);



        BioFamily::create([
            'id' => '307',
            'scientific_name' => 'Megachasmidae',
            'common_name' => '"Megamouth sharks, Tiburones bocones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '308',
            'scientific_name' => 'Megalopidae',
            'common_name' => '"Sábalos, Tarpons"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Elopiformes')->id
        ]);



        BioFamily::create([
            'id' => '309',
            'scientific_name' => 'Melamphaidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '310',
            'scientific_name' => 'Melanocetidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '311',
            'scientific_name' => 'Melanotaeniidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Atheriniformes')->id
        ]);



        BioFamily::create([
            'id' => '312',
            'scientific_name' => 'Mephitidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '313',
            'scientific_name' => 'Merlucciidae',
            'common_name' => '"Merlucciid hakes, Merluzas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '314',
            'scientific_name' => 'Microdesmidae',
            'common_name' => '"Peces lombriz, Wormfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gobiiformes')->id
        ]);



        BioFamily::create([
            'id' => '315',
            'scientific_name' => 'Microhylidae',
            'common_name' => 'Sapos termiteros',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '316',
            'scientific_name' => 'Microstomatidae',
            'common_name' => '"Peces boquita, Pencilsmelts"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Argentiniformes')->id
        ]);



        BioFamily::create([
            'id' => '317',
            'scientific_name' => 'Mimidae',
            'common_name' => '"Allies, Cenzontles, Cuitlacoches, Mimidos, Mockingbirds, Mulatos, Thrashers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '318',
            'scientific_name' => 'Mirapinnidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '319',
            'scientific_name' => 'Mochokidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '320',
            'scientific_name' => 'Molgulidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stolidobranchia')->id
        ]);



        BioFamily::create([
            'id' => '321',
            'scientific_name' => 'Molidae',
            'common_name' => 'Molas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '322',
            'scientific_name' => 'Molossidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '323',
            'scientific_name' => 'Momotidae',
            'common_name' => '"Momotos, Motmots"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Coraciiformes')->id
        ]);



        BioFamily::create([
            'id' => '324',
            'scientific_name' => 'Monacanthidae',
            'common_name' => '"Filefishes, Lijas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '325',
            'scientific_name' => 'Monodactylidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '326',
            'scientific_name' => 'Monognathidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '327',
            'scientific_name' => 'Moridae',
            'common_name' => '"Carboneros, Codlings, Moras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '328',
            'scientific_name' => 'Moringuidae',
            'common_name' => '"Anguilas fideo, Spaghetti eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '329',
            'scientific_name' => 'Mormoopidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '330',
            'scientific_name' => 'Mormyridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Osteoglossiformes')->id
        ]);



        BioFamily::create([
            'id' => '331',
            'scientific_name' => 'Moronidae',
            'common_name' => '"Lobinas norteñas, Temperate basses"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Moroniformes')->id
        ]);



        BioFamily::create([
            'id' => '332',
            'scientific_name' => 'Moschidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '333',
            'scientific_name' => 'Motacillidae',
            'common_name' => '"Bisbitas, Lavanderas, Pipits, Wagtails"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '334',
            'scientific_name' => 'Mugilidae',
            'common_name' => '"Lisas, Mullets"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Mugiliformes')->id
        ]);



        BioFamily::create([
            'id' => '335',
            'scientific_name' => 'Mullidae',
            'common_name' => '"Chivos, Goatfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '336',
            'scientific_name' => 'Muraenesocidae',
            'common_name' => '"Congrios picudos, Pike congers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '337',
            'scientific_name' => 'Muraenidae',
            'common_name' => '"Morays, Morenas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '338',
            'scientific_name' => 'Muridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '339',
            'scientific_name' => 'Muscicapidae',
            'common_name' => '"Collalbas, Muscicapids, Papamoscas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '340',
            'scientific_name' => 'Mustelidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '341',
            'scientific_name' => 'Myctophidae',
            'common_name' => '"Lanternfishes, Linternillas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myctophiformes')->id
        ]);



        BioFamily::create([
            'id' => '342',
            'scientific_name' => 'Mydae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '343',
            'scientific_name' => 'Myliobatidae',
            'common_name' => '"Eagle rays, Mantas, Águilas marinas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '344',
            'scientific_name' => 'Myocastoridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '345',
            'scientific_name' => 'Myrmecophagidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pilosa')->id
        ]);



        BioFamily::create([
            'id' => '346',
            'scientific_name' => 'Myxinidae',
            'common_name' => '"Bruja, Hagfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myxiniformes')->id
        ]);



        BioFamily::create([
            'id' => '347',
            'scientific_name' => 'Narcinidae',
            'common_name' => '"Electric rays, Rayas eléctricas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Torpediniformes')->id
        ]);



        BioFamily::create([
            'id' => '348',
            'scientific_name' => 'Natalidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '349',
            'scientific_name' => 'Natricidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '350',
            'scientific_name' => 'Nematistiidae',
            'common_name' => '"Papagallos, Roosterfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carangiformes')->id
        ]);



        BioFamily::create([
            'id' => '351',
            'scientific_name' => 'Nemichthyidae',
            'common_name' => '"Anguilas tijera, Snipe eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '352',
            'scientific_name' => 'Neoscopelidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myctophiformes')->id
        ]);



        BioFamily::create([
            'id' => '353',
            'scientific_name' => 'Nettastomatidae',
            'common_name' => '"Duckbill eels, Serpentinas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '354',
            'scientific_name' => 'Noctilionidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '355',
            'scientific_name' => 'Nomeidae',
            'common_name' => '"Derivantes, Driftfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '356',
            'scientific_name' => 'Notacanthidae',
            'common_name' => '"Anguilas espinosas de profundidad, Deep-sea spiny eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Notacanthiformes')->id
        ]);



        BioFamily::create([
            'id' => '357',
            'scientific_name' => 'Nothobranchiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '358',
            'scientific_name' => 'Notopteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Osteoglossiformes')->id
        ]);



        BioFamily::create([
            'id' => '359',
            'scientific_name' => 'Notosudidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '360',
            'scientific_name' => 'Nycteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '361',
            'scientific_name' => 'Nyctibiidae',
            'common_name' => '"Nictibios, Potoos, Pájaros estaca"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Nyctibiiformes')->id
        ]);



        BioFamily::create([
            'id' => '362',
            'scientific_name' => 'Oceanitidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Procellariiformes')->id
        ]);



        BioFamily::create([
            'id' => '363',
            'scientific_name' => 'Odontaspididae',
            'common_name' => '"Sand tiger, Tiburón toro"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '364',
            'scientific_name' => 'Odontophoridae',
            'common_name' => '"Codornices, Codornices del nuevo mundo, Quails"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Galliformes')->id
        ]);



        BioFamily::create([
            'id' => '365',
            'scientific_name' => 'Ogcocephalidae',
            'common_name' => '"Batfishes, Murciélagos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lophiiformes')->id
        ]);



        BioFamily::create([
            'id' => '366',
            'scientific_name' => 'Onychorhynchidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '367',
            'scientific_name' => 'Ophichthidae',
            'common_name' => '"Snake eels, Tiesos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '368',
            'scientific_name' => 'Ophidiidae',
            'common_name' => '"Brótulas, Congriperlas, Cusk-eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Ophidiiformes')->id
        ]);



        BioFamily::create([
            'id' => '369',
            'scientific_name' => 'Opisthoproctidae',
            'common_name' => '"Peces duende, Spookfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Argentiniformes')->id
        ]);



        BioFamily::create([
            'id' => '370',
            'scientific_name' => 'Opistognathidae',
            'common_name' => '"Bocones, Jawfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Incertae sedis')->id
        ]);



        BioFamily::create([
            'id' => '371',
            'scientific_name' => 'Osmeridae',
            'common_name' => '"Capellanes, Smelts"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Osmeriformes')->id
        ]);



        BioFamily::create([
            'id' => '372',
            'scientific_name' => 'Osphronemidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anabantiformes')->id
        ]);



        BioFamily::create([
            'id' => '373',
            'scientific_name' => 'Osteoglossidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Osteoglossiformes')->id
        ]);



        BioFamily::create([
            'id' => '374',
            'scientific_name' => 'Ostraciidae',
            'common_name' => '"Boxfishes, Peces cofre"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '375',
            'scientific_name' => 'Otariidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '376',
            'scientific_name' => 'Oxudercidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gobiiformes')->id
        ]);



        BioFamily::create([
            'id' => '377',
            'scientific_name' => 'Oxynotidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '378',
            'scientific_name' => 'Pandionidae',
            'common_name' => '"Gavilán pescador, Osprey, Águila pescadora"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Accipitriformes')->id
        ]);



        BioFamily::create([
            'id' => '379',
            'scientific_name' => 'Pangasiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '380',
            'scientific_name' => 'Pantodontidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Osteoglossiformes')->id
        ]);



        BioFamily::create([
            'id' => '381',
            'scientific_name' => 'Paralepididae',
            'common_name' => '"Barracudinas, Dagas, Daggertooths"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '382',
            'scientific_name' => 'Paralichthyidae',
            'common_name' => '"Lenguados areneros, Sand flounders"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '383',
            'scientific_name' => 'Parazenidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Zeiformes')->id
        ]);



        BioFamily::create([
            'id' => '384',
            'scientific_name' => 'Paridae',
            'common_name' => '"Carboneros, Titmice"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '385',
            'scientific_name' => 'Parulidae',
            'common_name' => '"Chipes, Mascaritas, Parulas, Wood-Warblers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '386',
            'scientific_name' => 'Passerellidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '387',
            'scientific_name' => 'Passeridae',
            'common_name' => '"Gorriones del viejo mundo, Gorrión casero, Old World Sparrows"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '388',
            'scientific_name' => 'Pelecanidae',
            'common_name' => '"Pelicanos, Pelicans, Pelícanos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pelecaniformes')->id
        ]);



        BioFamily::create([
            'id' => '389',
            'scientific_name' => 'Pempheridae',
            'common_name' => '"Barrenderos, Sweepers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '390',
            'scientific_name' => 'Percidae',
            'common_name' => '"Darters, Percas, Perches"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '391',
            'scientific_name' => 'Percophidae',
            'common_name' => '"Flatheads, Picos de pato"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachiniformes')->id
        ]);



        BioFamily::create([
            'id' => '392',
            'scientific_name' => 'Peristediidae',
            'common_name' => '"Armored searobins, Vaquitas blindadas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '393',
            'scientific_name' => 'Perophoridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phlebobranchia')->id
        ]);



        BioFamily::create([
            'id' => '394',
            'scientific_name' => 'Petromyzontidae',
            'common_name' => '"Lampreas, Lampreys"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Petromyzontiformes')->id
        ]);



        BioFamily::create([
            'id' => '395',
            'scientific_name' => 'Peucedramidae',
            'common_name' => '"Ocotero, Ocoteros, Olive Warbler"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '396',
            'scientific_name' => 'Phaethontidae',
            'common_name' => '"Rabijuncos, Tropicbirds"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phaethontiformes')->id
        ]);



        BioFamily::create([
            'id' => '397',
            'scientific_name' => 'Phalacrocoracidae',
            'common_name' => '"Cormoranes, Cormorants"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Suliformes')->id
        ]);



        BioFamily::create([
            'id' => '398',
            'scientific_name' => 'Phasianidae',
            'common_name' => '"Codornices, Faisanes, Grouse, Guajolotes, Partridges, Perdices, Quail, Turkeys"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Galliformes')->id
        ]);



        BioFamily::create([
            'id' => '399',
            'scientific_name' => 'Phocidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '400',
            'scientific_name' => 'Phocoenidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '401',
            'scientific_name' => 'Phoenicopteridae',
            'common_name' => '"Flamencos, Flamingos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Phoenicopteriformes')->id
        ]);



        BioFamily::create([
            'id' => '402',
            'scientific_name' => 'Pholidae',
            'common_name' => '"Espinosos de marea, Gunnels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '403',
            'scientific_name' => 'Phosichthyidae',
            'common_name' => '"Lightfishes, Peces luminosos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stomiiformes')->id
        ]);



        BioFamily::create([
            'id' => '404',
            'scientific_name' => 'Phrynosomatidae',
            'common_name' => 'Lagartijas espinosas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '405',
            'scientific_name' => 'Phyllodactylidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '406',
            'scientific_name' => 'Phyllomedusidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '407',
            'scientific_name' => 'Phylloscopidae',
            'common_name' => '"Chipes, Mosquiteros, Warblers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '408',
            'scientific_name' => 'Phyllostomidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '409',
            'scientific_name' => 'Physeteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '410',
            'scientific_name' => 'Picidae',
            'common_name' => '"Allies, Carpinteros, Woodpeckers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Piciformes')->id
        ]);



        BioFamily::create([
            'id' => '411',
            'scientific_name' => 'Pimelodidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '412',
            'scientific_name' => 'Pipidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '413',
            'scientific_name' => 'Pipridae',
            'common_name' => '"Manakins, Manaquines, Pipras, Saltarines"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '414',
            'scientific_name' => 'Platyrhinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '415',
            'scientific_name' => 'Platytroctidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Alepocephaliformes')->id
        ]);



        BioFamily::create([
            'id' => '416',
            'scientific_name' => 'Plethodontidae',
            'common_name' => 'Salamandras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caudata')->id
        ]);



        BioFamily::create([
            'id' => '417',
            'scientific_name' => 'Pleuronectidae',
            'common_name' => '"Platijas, Righteye flounders"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '418',
            'scientific_name' => 'Podicipedidae',
            'common_name' => '"Grebes, Zambullidores"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Podicipediformes')->id
        ]);



        BioFamily::create([
            'id' => '419',
            'scientific_name' => 'Poeciliidae',
            'common_name' => '"Espadas, Livebearers, Topotes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '420',
            'scientific_name' => 'Poecilopsettidae',
            'common_name' => '"Bigeye flounders, Lenguados ojones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '421',
            'scientific_name' => 'Polioptilidae',
            'common_name' => '"Gnatcatchers, Gnatwren, Perlitas, Soterillos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '422',
            'scientific_name' => 'Polycitoridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '423',
            'scientific_name' => 'Polyclinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '424',
            'scientific_name' => 'Polymixiidae',
            'common_name' => '"Beardfishes, Colas de maguey"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Polymixiiformes')->id
        ]);



        BioFamily::create([
            'id' => '425',
            'scientific_name' => 'Polynemidae',
            'common_name' => '"Barbudos, Threadfins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '426',
            'scientific_name' => 'Polyprionidae',
            'common_name' => '"Náufragos, Wreckfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '427',
            'scientific_name' => 'Polypteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Polypteriformes')->id
        ]);



        BioFamily::create([
            'id' => '428',
            'scientific_name' => 'Pomacanthidae',
            'common_name' => '"Angelfishes, Ángeles"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '429',
            'scientific_name' => 'Pomacentridae',
            'common_name' => '"Castañetas, Damselfishes, Jaquetas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Incertae sedis')->id
        ]);



        BioFamily::create([
            'id' => '430',
            'scientific_name' => 'Pomatomidae',
            'common_name' => '"Anjovas, Bluefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '431',
            'scientific_name' => 'Potamotrygonidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '432',
            'scientific_name' => 'Priacanthidae',
            'common_name' => '"Bigeyes, Catalufas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '433',
            'scientific_name' => 'Pristidae',
            'common_name' => '"Peces sierra, Sawfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pristiformes')->id
        ]);



        BioFamily::create([
            'id' => '434',
            'scientific_name' => 'Pristigasteridae',
            'common_name' => '"Longfin herrings, Sardinas machete"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Clupeiformes')->id
        ]);



        BioFamily::create([
            'id' => '435',
            'scientific_name' => 'Procellariidae',
            'common_name' => '"Pardelas, Petrels, Shearwaters"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Procellariiformes')->id
        ]);



        BioFamily::create([
            'id' => '436',
            'scientific_name' => 'Procyonidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '437',
            'scientific_name' => 'Profundulidae',
            'common_name' => '"Escamudos, Middle american killifishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '438',
            'scientific_name' => 'Pseudocarchariidae',
            'common_name' => '"Crocodile shark, Tiburón cocodrilo"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lamniformes')->id
        ]);



        BioFamily::create([
            'id' => '439',
            'scientific_name' => 'Pseudopimelodidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '440',
            'scientific_name' => 'Psittacidae',
            'common_name' => '"Cotorras, Guacamayas, Lories, Loros, Macaws, Parakeets, Parrots, Pericos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Psittaciformes')->id
        ]);



        BioFamily::create([
            'id' => '441',
            'scientific_name' => 'Psittaculidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Psittaciformes')->id
        ]);



        BioFamily::create([
            'id' => '442',
            'scientific_name' => 'Ptiliogonatidae',
            'common_name' => '"Capulineros, Silky-flycatchers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '443',
            'scientific_name' => 'Pycnonotidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '444',
            'scientific_name' => 'Pyrosomatidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pyrosomatida')->id
        ]);



        BioFamily::create([
            'id' => '445',
            'scientific_name' => 'Pythonidae',
            'common_name' => 'Pitones',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '446',
            'scientific_name' => 'Pyuridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stolidobranchia')->id
        ]);



        BioFamily::create([
            'id' => '447',
            'scientific_name' => 'Rachycentridae',
            'common_name' => 'Cobias',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carangiformes')->id
        ]);



        BioFamily::create([
            'id' => '448',
            'scientific_name' => 'Radiicephalidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lampriformes')->id
        ]);



        BioFamily::create([
            'id' => '449',
            'scientific_name' => 'Rajidae',
            'common_name' => '"Rayas, Skates"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rajiformes')->id
        ]);



        BioFamily::create([
            'id' => '450',
            'scientific_name' => 'Rallidae',
            'common_name' => '"Coots, Gallaretas, Gallinules, Rails, Ralos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gruiformes')->id
        ]);



        BioFamily::create([
            'id' => '451',
            'scientific_name' => 'Ramphastidae',
            'common_name' => '"Toucans, Tucanes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Piciformes')->id
        ]);



        BioFamily::create([
            'id' => '452',
            'scientific_name' => 'Ranidae',
            'common_name' => 'Ranas manchadas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '453',
            'scientific_name' => 'Recurvirostridae',
            'common_name' => '"Avocetas, Avocets, Stilts"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '454',
            'scientific_name' => 'Regalecidae',
            'common_name' => '"Oarfishes, Peces remo"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lampriformes')->id
        ]);



        BioFamily::create([
            'id' => '455',
            'scientific_name' => 'Regulidae',
            'common_name' => '"Kinglets, Reyezuelos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '456',
            'scientific_name' => 'Remizidae',
            'common_name' => '"Baloncillo, Baloncillos, Penduline, Tits, Verdines, Verdins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '457',
            'scientific_name' => 'Rhincodontidae',
            'common_name' => '"Tiburón ballena, Whale sharks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Orectolobiformes')->id
        ]);



        BioFamily::create([
            'id' => '458',
            'scientific_name' => 'Rhinobatidae',
            'common_name' => '"Guitarfishes, Guitarras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pristiformes')->id
        ]);



        BioFamily::create([
            'id' => '459',
            'scientific_name' => 'Rhinochimaeridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chimaeriformes')->id
        ]);



        BioFamily::create([
            'id' => '460',
            'scientific_name' => 'Rhinophrynidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '461',
            'scientific_name' => 'Rhodinocichlidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '462',
            'scientific_name' => 'Rivulidae',
            'common_name' => '"Almirantes, New world rivulines"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cyprinodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '463',
            'scientific_name' => 'Rondeletiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beryciformes')->id
        ]);



        BioFamily::create([
            'id' => '464',
            'scientific_name' => 'Saccopharyngidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '465',
            'scientific_name' => 'Salamandridae',
            'common_name' => 'Salamandras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caudata')->id
        ]);



        BioFamily::create([
            'id' => '466',
            'scientific_name' => 'Salmonidae',
            'common_name' => '"Salmones, Salmons, Trouts, Truchas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Salmoniformes')->id
        ]);



        BioFamily::create([
            'id' => '467',
            'scientific_name' => 'Salpidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Salpida')->id
        ]);



        BioFamily::create([
            'id' => '468',
            'scientific_name' => 'Scaphiopodidae',
            'common_name' => 'Sapos excavadores',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anura')->id
        ]);



        BioFamily::create([
            'id' => '469',
            'scientific_name' => 'Scaridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Labriformes')->id
        ]);



        BioFamily::create([
            'id' => '470',
            'scientific_name' => 'Scatophagidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '471',
            'scientific_name' => 'Sciaenidae',
            'common_name' => '"Berrugatas, Corvinas, Croakers, Drums"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Acanthuriformes')->id
        ]);



        BioFamily::create([
            'id' => '472',
            'scientific_name' => 'Scincidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '473',
            'scientific_name' => 'Sciuridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Rodentia')->id
        ]);



        BioFamily::create([
            'id' => '474',
            'scientific_name' => 'Scolopacidae',
            'common_name' => '"Allies, Phalaropes, Playeros, Sandpipers, Zarapitos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '475',
            'scientific_name' => 'Scomberesocidae',
            'common_name' => '"Papardas, Sauries"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beloniformes')->id
        ]);



        BioFamily::create([
            'id' => '476',
            'scientific_name' => 'Scombridae',
            'common_name' => '"Macarelas, Mackerels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '477',
            'scientific_name' => 'Scombrolabracidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombrolabraciformes')->id
        ]);



        BioFamily::create([
            'id' => '478',
            'scientific_name' => 'Scopelarchidae',
            'common_name' => '"Ojos de perla, Pearleyes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '479',
            'scientific_name' => 'Scorpaenichthyidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '480',
            'scientific_name' => 'Scorpaenidae',
            'common_name' => '"Escorpiones, Rocotes, Scorpionfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '481',
            'scientific_name' => 'Scyliorhinidae',
            'common_name' => '"Cat sharks, Pejegatos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carcharhiniformes')->id
        ]);



        BioFamily::create([
            'id' => '482',
            'scientific_name' => 'Serranidae',
            'common_name' => '"Sea basses, Serranos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '483',
            'scientific_name' => 'Serrasalmidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Characiformes')->id
        ]);



        BioFamily::create([
            'id' => '484',
            'scientific_name' => 'Serrivomeridae',
            'common_name' => '"Anguilas dientes aserrados, Sawtooth eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '485',
            'scientific_name' => 'Sibynophiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '486',
            'scientific_name' => 'Siluridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Siluriformes')->id
        ]);



        BioFamily::create([
            'id' => '487',
            'scientific_name' => 'Siphonopidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gymnophiona')->id
        ]);



        BioFamily::create([
            'id' => '488',
            'scientific_name' => 'Sirenidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Caudata')->id
        ]);



        BioFamily::create([
            'id' => '489',
            'scientific_name' => 'Sittidae',
            'common_name' => '"Bajapalos, Nuthatches, Sitas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '490',
            'scientific_name' => 'Soleidae',
            'common_name' => '"Soles, Suelas soles"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pleuronectiformes')->id
        ]);



        BioFamily::create([
            'id' => '491',
            'scientific_name' => 'Somniosidae',
            'common_name' => '"Sleeper sharks, Tiburones dormilones"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '492',
            'scientific_name' => 'Soricidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Soricomorpha')->id
        ]);



        BioFamily::create([
            'id' => '493',
            'scientific_name' => 'Sparidae',
            'common_name' => '"Plumas, Porgies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Spariformes')->id
        ]);



        BioFamily::create([
            'id' => '494',
            'scientific_name' => 'Sphaerodactylidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '495',
            'scientific_name' => 'Sphargidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '496',
            'scientific_name' => 'Sphyraenidae',
            'common_name' => 'Barracudas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Istiophoriformes')->id
        ]);



        BioFamily::create([
            'id' => '497',
            'scientific_name' => 'Sphyrnidae',
            'common_name' => '"Hammerhead sharks, Tiburones martillo"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carcharhiniformes')->id
        ]);



        BioFamily::create([
            'id' => '498',
            'scientific_name' => 'Spindalidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '499',
            'scientific_name' => 'Squalidae',
            'common_name' => '"Cazones aguijones, Dogfish sharks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squaliformes')->id
        ]);



        BioFamily::create([
            'id' => '500',
            'scientific_name' => 'Squatinidae',
            'common_name' => '"Angel sharks, Angelotes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squatiniformes')->id
        ]);



        BioFamily::create([
            'id' => '501',
            'scientific_name' => 'Staurotypidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '502',
            'scientific_name' => 'Steindachneriidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '503',
            'scientific_name' => 'Stercorariidae',
            'common_name' => '"Escúas, Jaegers, Salteadores, Skuas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Charadriiformes')->id
        ]);



        BioFamily::create([
            'id' => '504',
            'scientific_name' => 'Sternoptychidae',
            'common_name' => '"Marine hatchetfishes, Peces hacha"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stomiiformes')->id
        ]);



        BioFamily::create([
            'id' => '505',
            'scientific_name' => 'Stichaeidae',
            'common_name' => '"Peces abrojo, Pricklebacks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '506',
            'scientific_name' => 'Stomiidae',
            'common_name' => '"Dragonfishes, Peces demonios"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stomiiformes')->id
        ]);



        BioFamily::create([
            'id' => '507',
            'scientific_name' => 'Stomozoidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aplousobranchia')->id
        ]);



        BioFamily::create([
            'id' => '508',
            'scientific_name' => 'Strigidae',
            'common_name' => '"Búhos, Tecolotes, Typical Owls"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Strigiformes')->id
        ]);



        BioFamily::create([
            'id' => '509',
            'scientific_name' => 'Stromateidae',
            'common_name' => '"Butterfishes, Palometas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '510',
            'scientific_name' => 'Sturnidae',
            'common_name' => '"Allies, Estorninos, Starlings"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '511',
            'scientific_name' => 'Styelidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stolidobranchia')->id
        ]);



        BioFamily::create([
            'id' => '512',
            'scientific_name' => 'Stylephoridae',
            'common_name' => '"Ojilargos, Tube-eyes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Stylephoriformes')->id
        ]);



        BioFamily::create([
            'id' => '513',
            'scientific_name' => 'Sudidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '514',
            'scientific_name' => 'Suidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '515',
            'scientific_name' => 'Sulidae',
            'common_name' => '"Bobos, Boobies, Gannets, Sulas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Suliformes')->id
        ]);



        BioFamily::create([
            'id' => '516',
            'scientific_name' => 'Sylviidae',
            'common_name' => '"Camea, Whitethroat, Wrentit"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '517',
            'scientific_name' => 'Synaphobranchidae',
            'common_name' => '"Anguilas branquias bajas, Cutthroat eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Anguilliformes')->id
        ]);



        BioFamily::create([
            'id' => '518',
            'scientific_name' => 'Synbranchidae',
            'common_name' => '"Anguilas de lodo, Swamp eels"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Synbranchiformes')->id
        ]);



        BioFamily::create([
            'id' => '519',
            'scientific_name' => 'Syngnathidae',
            'common_name' => '"Caballitos de mar, Peces pipa, Pipefishes, Seahorses"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Syngnathiformes')->id
        ]);



        BioFamily::create([
            'id' => '520',
            'scientific_name' => 'Synodontidae',
            'common_name' => '"Chiles, Lizardfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Aulopiformes')->id
        ]);



        BioFamily::create([
            'id' => '521',
            'scientific_name' => 'Talpidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Soricomorpha')->id
        ]);



        BioFamily::create([
            'id' => '522',
            'scientific_name' => 'Tapiridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perissodactyla')->id
        ]);



        BioFamily::create([
            'id' => '523',
            'scientific_name' => 'Tayassuidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Artiodactyla')->id
        ]);



        BioFamily::create([
            'id' => '524',
            'scientific_name' => 'Teiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '525',
            'scientific_name' => 'Testudinidae',
            'common_name' => 'Tortugas terrestres',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '526',
            'scientific_name' => 'Tetragonuridae',
            'common_name' => '"Colicuadrados, Squaretails"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '527',
            'scientific_name' => 'Tetraodontidae',
            'common_name' => '"Botetes, Puffers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '528',
            'scientific_name' => 'Thamnophilidae',
            'common_name' => '"Antbirds, Antshrikes, Antvireos, Antwrens, Batarás, Hormigueros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '529',
            'scientific_name' => 'Thraupidae',
            'common_name' => '"Eufonias, Mieleros, Tanagers, Tangaras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '530',
            'scientific_name' => 'Threskiornithidae',
            'common_name' => '"Ibis, Ibises, Spoonbills"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Pelecaniformes')->id
        ]);



        BioFamily::create([
            'id' => '531',
            'scientific_name' => 'Thyropteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '532',
            'scientific_name' => 'Tinamidae',
            'common_name' => '"Tinamous, Tinamúes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tinamiformes')->id
        ]);



        BioFamily::create([
            'id' => '533',
            'scientific_name' => 'Tityridae',
            'common_name' => '"Becards, Llorones, Mosqueros, Mourners, Purpletufts, Schiffornis, Titiras, Tityras"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '534',
            'scientific_name' => 'Torpedinidae',
            'common_name' => '"Torpedo electric rays, Torpedos"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Torpediniformes')->id
        ]);



        BioFamily::create([
            'id' => '535',
            'scientific_name' => 'Toxotidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Perciformes')->id
        ]);



        BioFamily::create([
            'id' => '536',
            'scientific_name' => 'Trachichthyidae',
            'common_name' => '"Relojes, Roughies"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachichthyiformes')->id
        ]);



        BioFamily::create([
            'id' => '537',
            'scientific_name' => 'Trachinidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachiniformes')->id
        ]);



        BioFamily::create([
            'id' => '538',
            'scientific_name' => 'Trachipteridae',
            'common_name' => '"Listoncillos, Ribbonfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Lampriformes')->id
        ]);



        BioFamily::create([
            'id' => '539',
            'scientific_name' => 'Trachyrincidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Gadiformes')->id
        ]);



        BioFamily::create([
            'id' => '540',
            'scientific_name' => 'Triacanthodidae',
            'common_name' => '"Cochis espinosos, Spikefishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Tetraodontiformes')->id
        ]);



        BioFamily::create([
            'id' => '541',
            'scientific_name' => 'Triakidae',
            'common_name' => '"Cazones, Hound sharks"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carcharhiniformes')->id
        ]);



        BioFamily::create([
            'id' => '542',
            'scientific_name' => 'Trichechidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Sirenia')->id
        ]);



        BioFamily::create([
            'id' => '543',
            'scientific_name' => 'Trichiuridae',
            'common_name' => '"Cutlassfishes, Sables"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scombriformes')->id
        ]);



        BioFamily::create([
            'id' => '544',
            'scientific_name' => 'Triglidae',
            'common_name' => '"Rubios, Searobins, Vacas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '545',
            'scientific_name' => 'Trionicidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '546',
            'scientific_name' => 'Trionychidae',
            'common_name' => 'Tortugas de concha blanda',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '547',
            'scientific_name' => 'Trionychidae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '548',
            'scientific_name' => 'Tripterygiidae',
            'common_name' => '"Tres aletas, Triplefins"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Blenniiformes')->id
        ]);



        BioFamily::create([
            'id' => '549',
            'scientific_name' => 'Trochilidae',
            'common_name' => '"Colibríes, Hummingbirds"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Apodiformes')->id
        ]);



        BioFamily::create([
            'id' => '550',
            'scientific_name' => 'Troglodytidae',
            'common_name' => '"Matracas, Trogloditidos, Wrens"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '551',
            'scientific_name' => 'Trogonidae',
            'common_name' => '"Trogones, Trogons"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trogoniformes')->id
        ]);



        BioFamily::create([
            'id' => '552',
            'scientific_name' => 'Tropiduridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '553',
            'scientific_name' => 'Turdidae',
            'common_name' => '"Azulejos, Mirlos, Thrushes, Zorzales"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '554',
            'scientific_name' => 'Tylopodae',
            'common_name' => '',
            'status' => 'sinónimo',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Testudines')->id
        ]);



        BioFamily::create([
            'id' => '555',
            'scientific_name' => 'Typhlopidae',
            'common_name' => 'Culebrillas ciegas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '556',
            'scientific_name' => 'Tyrannidae',
            'common_name' => '"Luises, Mosqueros, Papamoscas, Tiranos, Tyrant Flycatchers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '557',
            'scientific_name' => 'Tytonidae',
            'common_name' => '"Barn-Owls, Lechuzas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Strigiformes')->id
        ]);



        BioFamily::create([
            'id' => '558',
            'scientific_name' => 'Uranoscopidae',
            'common_name' => '"Miracielos, Stargazers"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Trachiniformes')->id
        ]);



        BioFamily::create([
            'id' => '559',
            'scientific_name' => 'Urolophidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '560',
            'scientific_name' => 'Urotrygonidae',
            'common_name' => '"American round stingrays, Rayas redondas americanas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Myliobatiformes')->id
        ]);



        BioFamily::create([
            'id' => '561',
            'scientific_name' => 'Ursidae',
            'common_name' => 'Familia de los osos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '562',
            'scientific_name' => 'Varanidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '563',
            'scientific_name' => 'Vespertilionidae',
            'common_name' => 'Vespertiliónidos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Chiroptera')->id
        ]);



        BioFamily::create([
            'id' => '564',
            'scientific_name' => 'Viperidae',
            'common_name' => 'Víboras',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '565',
            'scientific_name' => 'Vireonidae',
            'common_name' => 'Vireos',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Passeriformes')->id
        ]);



        BioFamily::create([
            'id' => '566',
            'scientific_name' => 'Viverridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Carnivora')->id
        ]);



        BioFamily::create([
            'id' => '567',
            'scientific_name' => 'Xantusiidae',
            'common_name' => 'Lagartijas nocturnas',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '568',
            'scientific_name' => 'Xenosauridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Squamata')->id
        ]);



        BioFamily::create([
            'id' => '569',
            'scientific_name' => 'Xiphiidae',
            'common_name' => '"Espadas, Swordfishes"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Istiophoriformes')->id
        ]);



        BioFamily::create([
            'id' => '570',
            'scientific_name' => 'Zanclidae',
            'common_name' => '"Moorish idols, Ídolos moros"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Acanthuriformes')->id
        ]);



        BioFamily::create([
            'id' => '571',
            'scientific_name' => 'Zaniolepididae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);



        BioFamily::create([
            'id' => '572',
            'scientific_name' => 'Zeidae',
            'common_name' => '"Dories, Peces de San Pedro"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Zeiformes')->id
        ]);



        BioFamily::create([
            'id' => '573',
            'scientific_name' => 'Zenarchopteridae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Beloniformes')->id
        ]);



        BioFamily::create([
            'id' => '574',
            'scientific_name' => 'Zeniontidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Zeiformes')->id
        ]);



        BioFamily::create([
            'id' => '575',
            'scientific_name' => 'Ziphiidae',
            'common_name' => '',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Cetacea')->id
        ]);



        BioFamily::create([
            'id' => '576',
            'scientific_name' => 'Zoarcidae',
            'common_name' => '"Eelpouts, Viruelas"',
            'status' => 'válido',
            'bio_order_id' => BioOrder::firstWhere('scientific_name', '=', 'Scorpaeniformes')->id
        ]);
    }
}

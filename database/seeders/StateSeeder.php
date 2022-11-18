<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location\State;


class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(
            [
                'id' => 1,
                'name' => 'Aguascalientes',
                'abbr' => 'Ags.',
            ]
        );
        State::create(
            [
                'id' => 2,
                'name' => 'Baja California',
                'abbr' => 'BC',
            ]
        );
        State::create(
            [
                'id' => 3,
                'name' => 'Baja California Sur',
                'abbr' => 'BCS',
            ]
        );
        State::create(
            [
                'id' => 4,
                'name' => 'Campeche',
                'abbr' => 'Camp.',
            ]
        );
        State::create(
            [
                'id' => 5,
                'name' => 'Coahuila de Zaragoza',
                'abbr' => 'Coah.',
            ]
        );
        State::create(
            [
                'id' => 6,
                'name' => 'Colima',
                'abbr' => 'Col.',
            ]
        );
        State::create(
            [
                'id' => 7,
                'name' => 'Chiapas',
                'abbr' => 'Chis.',
            ]
        );
        State::create(
            [
                'id' => 8,
                'name' => 'Chihuahua',
                'abbr' => 'Chih.',
            ]
        );
        State::create(
            [
                'id' => 9,
                'name' => 'Ciudad de México',
                'abbr' => 'CDMX',
            ]
        );
        State::create(
            [
                'id' => 10,
                'name' => 'Durango',
                'abbr' => 'Dgo.',
            ]
        );
        State::create(
            [
                'id' => 11,
                'name' => 'Guanajuato',
                'abbr' => 'Gto.',
            ]
        );
        State::create(
            [
                'id' => 12,
                'name' => 'Guerrero',
                'abbr' => 'Gro.',
            ]
        );
        State::create(
            [
                'id' => 13,
                'name' => 'Hidalgo',
                'abbr' => 'Hgo.',
            ]
        );
        State::create(
            [
                'id' => 14,
                'name' => 'Jalisco',
                'abbr' => 'Jal.',
            ]
        );
        State::create(
            [
                'id' => 15,
                'name' => 'México',
                'abbr' => 'Mex.',
            ]
        );
        State::create(
            [
                'id' => 16,
                'name' => 'Michoacán de Ocampo',
                'abbr' => 'Mich.',
            ]
        );
        State::create(
            [
                'id' => 17,
                'name' => 'Morelos',
                'abbr' => 'Mor.',
            ]
        );
        State::create(
            [
                'id' => 18,
                'name' => 'Nayarit',
                'abbr' => 'Nay.',
            ]
        );
        State::create(
            [
                'id' => 19,
                'name' => 'Nuevo León',
                'abbr' => 'NL',
            ]
        );
        State::create(
            [
                'id' => 20,
                'name' => 'Oaxaca',
                'abbr' => 'Oax.',
            ]
        );
        State::create(
            [
                'id' => 21,
                'name' => 'Puebla',
                'abbr' => 'Pue.',
            ]
        );
        State::create(
            [
                'id' => 22,
                'name' => 'Querétaro',
                'abbr' => 'Qro.',
            ]
        );
        State::create(
            [
                'id' => 23,
                'name' => 'Quintana Roo',
                'abbr' => 'Q. Roo',
            ]
        );
        State::create(
            [
                'id' => 24,
                'name' => 'San Luis Potosí',
                'abbr' => 'SLP',
            ]
        );
        State::create(
            [
                'id' => 25,
                'name' => 'Sinaloa',
                'abbr' => 'Sin.',
            ]
        );
        State::create(
            [
                'id' => 26,
                'name' => 'Sonora',
                'abbr' => 'Son.',
            ]
        );
        State::create(
            [
                'id' => 27,
                'name' => 'Tabasco',
                'abbr' => 'Tab.',
            ]
        );
        State::create(
            [
                'id' => 28,
                'name' => 'Tamaulipas',
                'abbr' => 'Tamps.',
            ]
        );
        State::create(
            [
                'id' => 29,
                'name' => 'Tlaxcala',
                'abbr' => 'Tlax.',
            ]
        );
        State::create(
            [
                'id' => 30,
                'name' => 'Veracruz de Ignacio de la Llave',
                'abbr' => 'Ver.',
            ]
        );
        State::create(
            [
                'id' => 31,
                'name' => 'Yucatán',
                'abbr' => 'Yuc.',
            ]
        );
        State::create(
            [
                'id' => 32,
                'name' => 'Zacatecas',
                'abbr' => 'Zac.',
            ]
        );
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert([
                
                [
                    'name' => 'REMOTE',
                ],
                [
                    'name' => 'Podgorica',
                ],
                [
                    'name' => 'Nikšić',
                ],
                [
                    'name' => 'Pljevlja',
                ],
                [
                    'name' => 'Bijelo Polje',
                ],
                [
                    'name' => 'Cetinje',
                ],
                [
                    'name' => 'Bar',
                ],
                [
                    'name' => 'Herceg Novi',
                ],
                [
                    'name' => 'Berane',
                ],
                [
                    'name' => 'Budva',
                ],
                [
                    'name' => 'Ulcinj',
                ],
                [
                    'name' => 'Tivat',
                ],
                [
                    'name' => 'Rožaje',
                ],
                [
                    'name' => 'Kotor',
                ],
                [
                    'name' => 'Danilovgrad',
                ],
                [
                    'name' => 'Mojkovac',
                ],
                [
                    'name' => 'Plav',
                ],
                [
                    'name' => 'Kolašin',
                ],
                [
                    'name' => 'Žabljak',
                ],
                [
                    'name' => 'Plužine',
                ],
                [
                    'name' => 'Andrijevica',
                ],
                [
                    'name' => 'Šavnik',
                ]
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('categories')->insert([

                [
                    'name' => 'Programiranje',
                ],
                [
                    'name' => 'Dizajn',
                ],
                [
                    'name' => 'Menadžment',
                ],
                [
                    'name' => 'Sistemska administracija',
                ],
                [
                    'name' => 'QA',
                ],
                [
                    'name' => 'Prodaja / konsultanti ',
                ],
                [
                    'name' => 'Podrška',
                ],
                [
                    'name' => 'Prakse',
                ],
                [
                    'name' => 'Ostalo',
                ]
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('types')->insert([

                [
                    'name' => 'Stalni',
                ],
                [
                    'name' => 'Honorarni',
                ],
                [
                    'name' => 'Freelance',
                ],
            ]);
    }
}

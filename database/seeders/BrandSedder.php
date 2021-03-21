<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'id' => 1,
                'name' => 'BMW'
            ],
            [
                'id' => 2,
                'name' => 'Mercedes-Benz'
            ],
            [
                'id' => 3,
                'name' => 'Audi'
            ],
            [
                'id' => 4,
                'name' => 'Lexus'
            ],
            [
                'id' => 5,
                'name' => 'Renault'
            ],
            [
                'id' => 6,
                'name' => 'Ford'
            ],
            [
                'id' => 7,
                'name' => 'Opel'
            ],
            [
                'id' => 8,
                'name' => 'Seat'
            ]
        ]);
    }
}

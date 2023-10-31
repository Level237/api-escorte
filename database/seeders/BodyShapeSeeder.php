<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BodyShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'shape_name'=>'Skinny',
            ],
            [
                'shape_name'=>'Ronde',
            ],
            [
                'shape_name'=>'Moyenne',
            ],
        ];

        DB::table('shapes')->insert($data);
    }
}

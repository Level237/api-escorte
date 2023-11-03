<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EthnicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [
            [
                'ethnic_name'=>'Beti',
            ],
            [
                'ethnic_name'=>'Bamileké',
            ],
            [
                'ethnic_name'=>'Douala',
            ],[
                'ethnic_name'=>'Eton',
            ],[
                'ethnic_name'=>'Yabassienne',
            ],[
                'ethnic_name'=>'Bafia',
            ],[
                'ethnic_name'=>'Bamenda',
            ]
        ];

        //Storing Data
        DB::table('ethnics')->insert($data);
    }
}

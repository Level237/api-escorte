<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Escorteseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [
            [
                
                'whatsapp_number'=>'693103785',
                'year_of_birth'=>'01/03/2000',
                'sexuality'=>'Heterosexuelle',
                'description'=>'Je suis une jolie fille noire vivant a Douala disponible pour vous satisafaire',
                'isVerified'=>1,
                'photo'=> 'sandra.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'whatsapp_number'=>'698034224',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Bisexuelle',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'photo'=> 'vanessa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'697434224',
                'year_of_birth'=>'01/04/1991',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        //Storing Data
        DB::table('escorts')->insert($data);
    }
}

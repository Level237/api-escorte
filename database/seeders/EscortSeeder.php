<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EscortSeeder extends Seeder
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
                'country_id' => 31,
                'quarter_id' => 2,
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
                'country_id' => 31,
                'quarter_id' => 3,
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
                'country_id' => 31,
                'quarter_id' => 6,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'697256314',
                'year_of_birth'=>'01/04/2006',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 7,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'657434226',
                'year_of_birth'=>'01/04/2008',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 10,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'677434224',
                'year_of_birth'=>'01/04/1996',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 2,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'678251224',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 14,
                'quarter_id' => 7,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'651253696',
                'year_of_birth'=>'01/04/1999',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 10,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'658789652',
                'year_of_birth'=>'01/04/1994',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 12,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'696365241',
                'year_of_birth'=>'01/04/2001',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 15,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'657968521',
                'year_of_birth'=>'01/04/1997',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 25,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'6999856321',
                'year_of_birth'=>'01/04/1990',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 16,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'675698541',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 14,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'655415287',
                'year_of_birth'=>'01/04/1993',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 20,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                
                'whatsapp_number'=>'658967412',
                'year_of_birth'=>'01/04/1995',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>1,
                'country_id' => 31,
                'quarter_id' => 11,
                'photo'=> 'leslie.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        //Storing Data
        DB::table('escorts')->insert($data);
    }
}

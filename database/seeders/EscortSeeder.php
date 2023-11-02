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
                
                'user_id' => 5,
                'whatsapp_number'=>'693103785',
                'year_of_birth'=>'01/03/2000',
                'sexuality'=>'Heterosexuelle',
                'description'=>'Je suis une jolie fille noire vivant a Douala disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 1,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=15&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 6,
                'whatsapp_number'=>'698034224',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Bisexuelle',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 1,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=11&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 7,
                'whatsapp_number'=>'697434224',
                'year_of_birth'=>'01/04/1991',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 1,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=18&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 8,
                'whatsapp_number'=>'697256314',
                'year_of_birth'=>'01/04/2006',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 1,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=1&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 9,
                'whatsapp_number'=>'657434226',
                'year_of_birth'=>'01/04/2008',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 6,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=9&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 10,
                'whatsapp_number'=>'677434224',
                'year_of_birth'=>'01/04/1996',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 6,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=19&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 11,
                'whatsapp_number'=>'678251224',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 6,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=2&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 12,
                'whatsapp_number'=>'651253696',
                'year_of_birth'=>'01/04/1999',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 7,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=10&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 13,
                'whatsapp_number'=>'658789652',
                'year_of_birth'=>'01/04/1994',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 7,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=7&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 14,
                'whatsapp_number'=>'696365241',
                'year_of_birth'=>'01/04/2001',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 7,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=4&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 15,
                'whatsapp_number'=>'657968521',
                'year_of_birth'=>'01/04/1997',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 8,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=8&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 16,
                'whatsapp_number'=>'6999856321',
                'year_of_birth'=>'01/04/1990',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 8,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=5&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 17,
                'whatsapp_number'=>'675698541',
                'year_of_birth'=>'01/04/1998',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 8,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=17&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 18,

                'whatsapp_number'=>'655415287',
                'year_of_birth'=>'01/04/1993',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 8,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=14&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 19,
                'whatsapp_number'=>'658967412',
                'year_of_birth'=>'01/04/1995',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 22,
                'photo'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRprjwQEoJL6htgncl7KuxQzZTFhb_gYuOU4yLtKMnJgcGVuffsg0cLPYzFT4rib0n8f9A&usqp=CAU',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 20,
                'whatsapp_number'=>'652526396',
                'year_of_birth'=>'01/04/1994',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 32,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=7&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 21,
                'whatsapp_number'=>'659859632',
                'year_of_birth'=>'01/04/1995',
                'sexuality'=>'Lesbienne',
                'description'=>'Je suis une jolie fille brune vivant a Yaounde disponible pour vous satisafaire',
                'isVerified'=>0,
                'quarter_id' => 32,
                'photo'=> 'https://premiummod.com/demoimages/img.php?imgid=8&t=es',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
           
        ];
        //Storing Data
        DB::table('escorts')->insert($data);
    }
}

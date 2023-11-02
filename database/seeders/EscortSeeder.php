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
                'photo'=> 'data:image/jpeg;base64,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',
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
                'photo'=> 'data:image/jpeg;base64,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',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
           
        ];
        //Storing Data
        DB::table('escorts')->insert($data);
    }
}

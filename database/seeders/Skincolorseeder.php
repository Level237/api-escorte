<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class Skincolorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data to store
        $data = [
            [
                'skin_color_name'=>'Brune',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],
            [
                'skin_color_name'=>'Noire',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],
            [
                'skin_color_name'=>'Metisse', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],
            [
                'skin_color_name'=>'Claire',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],
            [
                'skin_color_name'=>'Chocolat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],

        ];

        //Storing Data
        DB::table('skin_colors')->insert($data);

    }
}

<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'position'=>'header_promo',
                'description'=>"Espace promotionel",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'home_top',
                'description'=>"Page d'accueil Top",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'home_bottom',
                'description'=>"Page d'accueil Footer",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'ads_list_bottom',
                'description'=>"Page Listing des annonces",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'ads_detail_bottom',
                'description'=>"Page détail d'une annonce",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'ads_creation_bottom',
                'description'=>"Page création d'une annonce",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
            [
                'position'=>'search_result',
                'description'=>"Page résultats de recherche",
                'path' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
            ],
        
           
        ];

        DB::table('banners')->insert($data);
    }
}

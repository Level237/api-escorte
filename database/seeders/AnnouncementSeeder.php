<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [

            [
                'user_id'=>5,
                'town_id'=>1,
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                'title'=>'Baisseuse italienne',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'town_id'=>1,
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                'title'=>"J'ai été vilaine, ma fessé stp",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                'title'=>'Ta lycéenne, viens jouer au prof',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                'title'=>'Une bassa fontaine',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'isSubscribe'=>1,
                'title'=>'Ta bassa aux fesses douces',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Viens soumettre ta panthere',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Jouissance vaginale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Viens taper ta pute bassa',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Viens croquer une file brune Eton',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Ton chocolat blanc',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                'announcement_category_id'=>1,
                'title'=>'Baise annale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Pipe avec léchage de noyaux',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Jouissance faciale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'announcement_category_id'=>3,
                'title'=>'Baiseuse ProMax',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'title'=>"Pipe jouissance buccale",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'title'=>'Seins debout, fille brune à déguster',
                'Description'=>"Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>21,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'title'=>'La salope sim1 & sim2',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>5,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Baiseusse aux gros seins',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Ta libelulle brune',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Un plasir a couper le souffle',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>"Le plaisir c'est ici",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Viens glisser dans mes cuisses',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Ta Eton au gros cul',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'announcement_category_id'=>3,
                'title'=>'Ta baiseuse fontaine',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Partouze de couple',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Ta salope obeissante',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Viens conduire ta mercedez',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Petite Yaris',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Pimentiere de luxe',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>"Baise sans remords",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>18,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'title'=>'Viens baiser ta fille',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                'announcement_category_id'=>1,
                'title'=>'Lécheuse de tétons 😘',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                'announcement_category_id'=>1,
                'title'=>'Apoutchou sexy maquereau',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>21,
                'town_id'=>7,
                'announcement_category_id'=>1,
                'title'=>'Pinneuse bonne bosse',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>5,
                'town_id'=>1,
                'announcement_category_id'=>1,
                'title'=>'Partouze ce soir ',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'town_id'=>1,
                'announcement_category_id'=>1,
                'title'=>'Ta collégienne 😘',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                'announcement_category_id'=>1,
                'title'=>'La nuit du sexe 2 🤤',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Bangala ++ 🍆',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>"Croqueuse de penis 🍆",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'title'=>'Lécheuse🤤pro💦🍆',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'announcement_category_id'=>3,
                'title'=>"Viens realiser tes fantasmes",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Tu vas hurler de plaisir',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Baiseuse professionnelle',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'Skinny aux gros seins',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>'sensualité fatale❤️❤️❤️',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>"Ton bb bio 😘",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>"Suceuse de bite",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>18,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'title'=>"Baiseuse de luxe",
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'title'=>'Ta pineuse aux seins pointus',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'title'=>'Viens baiser une vraie salope',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        //Storing Data
        DB::table('announcements')->insert($data);
    }
}

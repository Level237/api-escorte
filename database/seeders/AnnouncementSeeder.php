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
                'quarter_id'=>1,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'698748596',
                'services'=>'Baisse',
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                'status'=>1,
                'subscribe_id'=>1,
                'title'=>'Baisseuse italienne',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'user_id'=>6,
                'town_id'=>1,
                'quarter_id'=>2,
                'gender'=>1,

                'age'=>21,
                'whatsapp'=>'698748595',
                'services'=>'Baisse',
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>1,
                'title'=>"J'ai été vilaine, ma fessé stp",
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                'quarter_id'=>6,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'678748596',
                'services'=>'Baisse',
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                 'status'=>1,
                 'subscribe_id'=>2,
                'title'=>'Ta lycéenne, viens jouer au prof',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'quarter_id'=>1,
                'gender'=>1,
                'age'=>25,
                'whatsapp'=>'675747972',
                'services'=>'Baisse',
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>3,
                'title'=>'Une bassa fontaine',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'quarter_id'=>6,
                'gender'=>1,
                'age'=>19,
                'whatsapp'=>'655204185',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                'isSubscribe'=>1,
                'subscribe_id'=>1,
                'title'=>'Ta bassa aux fesses douces',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>23,
                'whatsapp'=>'651749632',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                   'isSubscribe'=>0,
                'title'=>'Viens soumettre ta panthere',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'quarter_id'=>2,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'695853214',
                'services'=>'Baisse',
                'subscribe_id'=>0,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>21,
                'whatsapp'=>'672368596',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>23,
                'whatsapp'=>'671967485',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>22,
                'whatsapp'=>'698742535',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>33,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>24,
                'whatsapp'=>'681968520',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>33,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>21,
                'whatsapp'=>'653200033',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>25,
                'whatsapp'=>'670020622',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>1,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'690910023',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>92,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'681250010',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'subscribe_id'=>0,
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'699802541',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>93,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>22,
                'whatsapp'=>'675241000',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>22,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>22,
                'whatsapp'=>'671002563',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'subscribe_id'=>0,
                 'quarter_id'=>22,
                'gender'=>1,
                'age'=>26,
                'whatsapp'=>'652008596',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>4,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'655140306',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                'subscribe_id'=>0,
                 'quarter_id'=>3,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'690527485',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'subscribe_id'=>0,
                'quarter_id'=>8,
                'gender'=>1,
                'age'=>24,
                'whatsapp'=>'693526385',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>8,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'652100001',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>17,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>23,
                'whatsapp'=>'679853210',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>8,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'656321020',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'subscribe_id'=>0,
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'691528574',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                'quarter_id'=>32,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'698204152',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>46,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'692304158',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
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
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>19,
                'subscribe_id'=>0,
                'whatsapp'=>'672526396',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>49,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>18,
                'whatsapp'=>'694759685',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>48,
                'gender'=>1,
                'age'=>17,
                'whatsapp'=>'697854152',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
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
                 'quarter_id'=>93,
                'gender'=>1,
                'age'=>19,
                'subscribe_id'=>0,
                'whatsapp'=>'677854120',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>18,
                'whatsapp'=>'699968574',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>17,
                'subscribe_id'=>0,
                'whatsapp'=>'690909020',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>1,
                'gender'=>1,
                'age'=>21,
                'subscribe_id'=>0,
                'whatsapp'=>'650502030',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>2,
                'gender'=>1,
                'age'=>23,
                'subscribe_id'=>0,
                'whatsapp'=>'670758596',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>6,
                'gender'=>1,
                'age'=>22,
                'subscribe_id'=>0,
                'whatsapp'=>'651426352',
                'services'=>'Baisse',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>20,
                'whatsapp'=>'682528596',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>4,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'679632000',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
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
                'quarter_id'=>10,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'698748596',
                'services'=>'Baisse',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>10,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>21,
                'whatsapp'=>'698748596',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'678740506',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>1,
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
                 'quarter_id'=>41,
                'gender'=>1,
                'age'=>21,
                'subscribe_id'=>0,
                'whatsapp'=>'658748199',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'690258591',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>24,
                'whatsapp'=>'688749580',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>41,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'658728521',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>33,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'678943506',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'699745593',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'690418574',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
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
                 'quarter_id'=>93,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'697740596',
                'services'=>'Baisse',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
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

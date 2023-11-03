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
                'user_id'=>2,
                'town_id'=>1,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>2,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>7,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>1,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>28,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>28,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>28,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>28,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>1,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>17,
                'announcement_category_id'=>2,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>4,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>25,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>1,
                'town_id'=>25,
                'announcement_category_id'=>3,
                'type'=>1,
                'title'=>Str::random(30),
                'Description'=>Str::random(80),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ];

        //Storing Data
        DB::table('announcements')->insert($data);
    }
}

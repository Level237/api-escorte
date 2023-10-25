<?php

/**
 * Seeder for User Table
 * Created on 25 October 2023
 * Author : Frank Zohim
*/
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Data to store
        $data = [
            [
                'username'=>'delanofofe', 
                'email'=>'delanofofe@gmail.com', 
                'role_id' => 1,
                'phone_number' => "+237 675 82 43 49",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
             [
                'username'=>'level237', 
                'email'=>'martin@gmail.com', 
                'role_id' => 1,
                'phone_number' => "+237 690 39 43 65",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'username'=>'franknyawa', 
                'email'=>'franknyawa@gmail.com', 
                'role_id' => 1,
                'phone_number' => "+237 693 37 41 60",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

             [
                'username'=>'admin', 
                'email'=>'temerprodesign@yahoo.fr', 
                'role_id' => 1,
                'phone_number' => "+237 698 82 92 17",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'maeve', 
                'email'=>'maeve@gmail.com', 
                'role_id' => 2,
                'phone_number' => "+237 694 14 52 98",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'leila', 
                'email'=>'leila@gmail.com', 
                'role_id' => 2,
                'phone_number' => "+237 671 37 58 60",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'sheila', 
                'email'=>'sheila@gmail.com', 
                'role_id' => 2,
                'phone_number' => "+237 654 01 12 10",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'patrick', 
                'email'=>'patrick@gmail.com', 
                'role_id' => 3,
                'phone_number' => "+237 652 28 92 61",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'max', 
                'email'=>'max@gmail.com', 
                'role_id' => 3,
                'phone_number' => "+237 655 65 35 25",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'paulin', 
                'email'=>'paulin@gmail.com', 
                'role_id' => 3,
                'phone_number' => "+237 697 58 59 62",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              
        ];

        //Storing Data
        DB::table('users')->insert($data);
    }
}

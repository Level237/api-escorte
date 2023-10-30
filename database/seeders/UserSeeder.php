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
                'phone_number' => "675824349",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
             [
                'username'=>'level237', 
                'email'=>'martin@gmail.com', 
                'role_id' => 1,
                'phone_number' => "690394365",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'username'=>'franknyawa', 
                'email'=>'franknyawa@gmail.com', 
                'role_id' => 1,
                'phone_number' => "693374160",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

             [
                'username'=>'admin', 
                'email'=>'temerprodesign@yahoo.fr', 
                'role_id' => 1,
                'phone_number' => "698829217",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'maeve', 
                'email'=>'maeve@gmail.com', 
                'role_id' => 2,
                'phone_number' => "694145298",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'leila', 
                'email'=>'leila@gmail.com', 
                'role_id' => 2,
                'phone_number' => "671375860",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'sheila', 
                'email'=>'sheila@gmail.com', 
                'role_id' => 2,
                'phone_number' => "654011210",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'patrick', 
                'email'=>'patrick@gmail.com', 
                'role_id' => 3,
                'phone_number' => "652289261",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'max', 
                'email'=>'max@gmail.com', 
                'role_id' => 3,
                'phone_number' => "655653525",
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'paulin', 
                'email'=>'paulin@gmail.com', 
                'role_id' => 3,
                'phone_number' => "697585962",
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

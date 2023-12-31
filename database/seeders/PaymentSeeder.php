<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>5,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>6,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>7,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>8,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>9,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>10,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>11,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>12,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>13,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>14,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>15,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>16,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>17,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>8,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>19,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>20,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>21,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>5,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>6,
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>7,
            ],

        ];

        //Storing Data
        DB::table('payments')->insert($data);
    }
}

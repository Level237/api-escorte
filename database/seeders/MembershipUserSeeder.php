<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipUserSeeder extends Seeder
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
                'membership_id'=>1,
                'payment_id'=>1,
                'announcement_id'=>1,
                'status'=>1,
                'expire_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'membership_id'=>1,
                'payment_id'=>2,
                'announcement_id'=>2,
                'status'=>1,
                'expire_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'membership_id'=>2,
                'payment_id'=>3,
                'announcement_id'=>3,
                'status'=>1,
                'expire_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'membership_id'=>3,
                'payment_id'=>4,
                'announcement_id'=>4,
                'status'=>1,
                'expire_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'membership_id'=>1,
                'payment_id'=>5,
                'announcement_id'=>5,
                'status'=>1,
                'expire_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        //Storing Data
        DB::table('memberships_users')->insert($data);
    }
}

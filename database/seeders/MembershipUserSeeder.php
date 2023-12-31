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
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>6,
                'membership_id'=>1,
                'payment_id'=>2,
                'announcement_id'=>2,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>7,
                'membership_id'=>2,
                'payment_id'=>3,
                'announcement_id'=>3,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>8,
                'membership_id'=>3,
                'payment_id'=>4,
                'announcement_id'=>4,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>9,
                'membership_id'=>1,
                'payment_id'=>5,
                'announcement_id'=>5,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>10,
                'membership_id'=>1,
                'payment_id'=>6,
                'announcement_id'=>6,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>11,
                'membership_id'=>2,
                'payment_id'=>7,
                'announcement_id'=>7,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>12,
                'membership_id'=>2,
                'payment_id'=>8,
                'announcement_id'=>8,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>13,
                'membership_id'=>3,
                'payment_id'=>9,
                'announcement_id'=>9,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>14,
                'membership_id'=>3,
                'payment_id'=>10,
                'announcement_id'=>10,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>15,
                'membership_id'=>1,
                'payment_id'=>11,
                'announcement_id'=>11,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>16,
                'membership_id'=>2,
                'payment_id'=>12,
                'announcement_id'=>12,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>17,
                'membership_id'=>3,
                'payment_id'=>13,
                'announcement_id'=>13,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>8,
                'membership_id'=>1,
                'payment_id'=>14,
                'announcement_id'=>14,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>19,
                'membership_id'=>2,
                'payment_id'=>15,
                'announcement_id'=>15,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>20,
                'membership_id'=>3,
                'payment_id'=>16,
                'announcement_id'=>16,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>21,
                'membership_id'=>1,
                'payment_id'=>17,
                'announcement_id'=>17,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>5,
                'membership_id'=>2,
                'payment_id'=>18,
                'announcement_id'=>18,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>6,
                'membership_id'=>3,
                'payment_id'=>19,
                'announcement_id'=>19,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
            [
                'user_id'=>7,
                'membership_id'=>1,
                'payment_id'=>20,
                'announcement_id'=>20,
                'status'=>1,
                'expire_at'=>Carbon::now()->addDay(5)
            ],
        ];

        //Storing Data
        DB::table('memberships_users')->insert($data);
    }
}

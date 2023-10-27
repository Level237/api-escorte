<?php
/**
 * Seeder for User Table
 * Created on 25 October 2023
 * Author : Frank Zohim
*/
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            MemberShipSeeder::class,
            SkinColorSeeder::class,
            EscorteSeeder::class,
            Weightseeder::class,
            Heightseeder::class
        ]);
    }
}

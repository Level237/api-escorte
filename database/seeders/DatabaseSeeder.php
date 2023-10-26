<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $path = 'database/sql_files/countries.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');

        $path = 'database/sql_files/towns.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Town table seeded!');

        $path = 'database/sql_files/quarters.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Quarter table seeded!');

         $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            MemberShipSeeder::class,
        ]);

       

     
    }
}

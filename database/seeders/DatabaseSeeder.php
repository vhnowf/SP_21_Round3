<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            FeedbacksSeeder::class,
            CommentsSeeder::class, 
            InsurancesSeeder::class,       
            AdminSeeder::class
        ]);
    }
}

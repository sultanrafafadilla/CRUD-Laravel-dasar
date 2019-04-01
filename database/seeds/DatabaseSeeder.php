<?php

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
        $this->call(BlogsTableSeeder::class); //manggil seeder dari BlogsTableSeeder.php
        // $this->call(UsersTableSeeder::class);
    }
}

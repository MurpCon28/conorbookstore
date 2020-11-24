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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}

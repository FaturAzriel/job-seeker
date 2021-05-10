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
        $this->call(CitiesSeeder::class);
        $this->call(VacanciesSeeder::class);
        $this->call(UsersSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}

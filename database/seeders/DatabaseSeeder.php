<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
=======
    public function run()
    {
        $this->call([
            CategorySeeder::class,
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
            BookSeeder::class,
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Fiksi', 'description' => 'Buku cerita fiksi dan novel']);
        Category::create(['name' => 'Non-Fiksi', 'description' => 'Buku pelajaran dan sejarah']);
        Category::create(['name' => 'Komik', 'description' => 'Buku bergambar']);
    }
}
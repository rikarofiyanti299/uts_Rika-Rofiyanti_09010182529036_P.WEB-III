<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create(['category_id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 10]);
        Book::create(['category_id' => 1, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'publisher' => 'Hasta Mitra', 'year' => 1980, 'stock' => 5]);
        Book::create(['category_id' => 2, 'title' => 'Sejarah Indonesia Modern', 'author' => 'M.C. Ricklefs', 'publisher' => 'Serambi', 'year' => 2008, 'stock' => 3]);
        Book::create(['category_id' => 2, 'title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'publisher' => 'Kompas', 'year' => 2018, 'stock' => 15]);
        Book::create(['category_id' => 3, 'title' => 'One Piece Vol 1', 'author' => 'Eiichiro Oda', 'publisher' => 'Elex Media', 'year' => 1997, 'stock' => 20]);
    }
}
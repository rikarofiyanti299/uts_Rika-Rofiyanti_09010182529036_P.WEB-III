<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'author', 'publisher', 'year', 'stock'];

<<<<<<< HEAD
    // Relasi: buku milik satu kategori
=======
    // Relasi: Buku milik satu Kategori
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
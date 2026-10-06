<?php

namespace App\Http\Controllers;

use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalStock = Book::sum('stock');
        $latestBooks = Book::latest()->take(5)->get();

        return view('dashboard', compact('totalBooks', 'totalStock', 'latestBooks'));
    }
}
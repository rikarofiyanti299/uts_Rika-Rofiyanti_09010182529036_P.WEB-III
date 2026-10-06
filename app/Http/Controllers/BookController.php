<?php

namespace App\Http\Controllers;

use App\Models\Book;
<<<<<<< HEAD
=======
use App\Models\Category;
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
use Illuminate\Http\Request;

class BookController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");
            });
        }

        $books = $query->latest()->get();

=======
    public function index()
    {
        $books = Book::with('category')->latest()->get();
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
        return view('books.index', compact('books'));
    }

    public function create()
    {
<<<<<<< HEAD
        return view('books.create');
=======
        $categories = Category::all();
        return view('books.create', compact('categories'));
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $validated = $request->validate([
            'title'     => 'required|string|max:255',
            'author'    => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year'      => 'required|integer|min:1900|max:' . date('Y'),
            'stock'     => 'required|integer|min:0',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan. 💖');
=======
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|integer',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
<<<<<<< HEAD
        return view('books.edit', compact('book'));
=======
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    }

    public function update(Request $request, Book $book)
    {
<<<<<<< HEAD
        $validated = $request->validate([
            'title'     => 'required|string|max:255',
            'author'    => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year'      => 'required|integer|min:1900|max:' . date('Y'),
            'stock'     => 'required|integer|min:0',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui. 🌸');
=======
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|integer',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    }

    public function destroy(Book $book)
    {
        $book->delete();
<<<<<<< HEAD
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus. 💔');
=======
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    }
}
<?php

use App\Http\Controllers\BookController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
=======
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
<<<<<<< HEAD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('books', BookController::class);

=======
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Buku
    Route::resource('books', BookController::class);
    
    // Profile (bawaan Breeze)
>>>>>>> 2895cdc238ab8194246109497b428a73ba91a3bd
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
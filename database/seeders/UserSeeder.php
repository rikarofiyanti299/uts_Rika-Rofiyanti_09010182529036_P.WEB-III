<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Rika Rofiyanti',
            'email'    => 'rikarofiyanti299@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name'     => 'Admin Perpustakaan',
            'email'    => 'admin@perpus.test',
            'password' => Hash::make('password123'),
        ]);
    }
}
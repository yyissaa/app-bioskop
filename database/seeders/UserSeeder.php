<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. 15 Data Dummy Penonton Secara Manual
        $penontonList = [
            ['name' => 'Amirah Kayyisan', 'email' => 'mira@gmail.com'],
            ['name' => 'Nabila Filza', 'email' => 'abel@gmail.com'],
            ['name' => 'Sheanna', 'email' => 'shean@gmail.com'],
            ['name' => 'Marisa', 'email' => 'marisa@gmail.com'],
            ['name' => 'Icha', 'email' => 'icha@gmail.com'],
            ['name' => 'Kanaya', 'email' => 'naya@gmail.com'],
            ['name' => 'Aira', 'email' => 'aira@gmail.com'],
            ['name' => 'Kezya', 'email' => 'kezya@gmail.com'],
            ['name' => 'Maitsa', 'email' => 'maitsa@gmail.com'],
            ['name' => 'Alinda', 'email' => 'alinda@gmail.com'],
        ];

        foreach ($penontonList as $p) {
            User::create([
                'name' => $p['name'],
                'email' => $p['email'],
                'password' => Hash::make('password123'),
                'role' => 'penonton',
            ]);
        }
    }
}

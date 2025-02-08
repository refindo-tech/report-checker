<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Rizky Apriansyah',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $dosen = User::create([
            'name' => 'Rhein Kharnafis Dhirgam',
            'email' => 'dosen@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $mahasiswa = User::create([
            'name' => 'Akbar',
            'email' => 'mahasiswa@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        // assign Role menggunakan spatie
        $admin->assignRole('Admin');
        $dosen->assignRole('Dosen');
        $mahasiswa->assignRole('Mahasiswa');
    }
}

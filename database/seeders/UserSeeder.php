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
            'id_kampus' => 1,
            'name' => 'Admin Universitas Bina Bangsa',
            'email' => 'admin1@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'id_kampus' => 2,
            'name' => 'Admin Universitas Faletehan',
            'email' => 'admin2@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'id_kampus' => 3,
            'name' => 'Admin Universitas Islam Syekh Yusuf',
            'email' => 'admin3@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'id_kampus' => 4,
            'name' => 'Admin Universitas Mathlaul Anwar',
            'email' => 'admin4@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'id_kampus' => 5,
            'name' => 'Admin Universitas Pamulang',
            'email' => 'admin5@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'id_kampus' => 6,
            'name' => 'Admin Universitas Tangerang Raya',
            'email' => 'admin6@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $dosen = User::create([
            'id_kampus' => 1,
            'name' => 'Henny Septiani',
            'email' => 'dosen@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $mahasiswa = User::create([
            'id_kampus' => 1,
            'name' => 'Majid',
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

<?php

namespace Database\Seeders;

use App\Models\Kampus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kampus::create([
            'name' => 'Institut Teknologi Sepuluh Nopember',
        ]);
        Kampus::create([
            'name' => 'Institut Teknologi Bandung',
        ]);
        Kampus::create([
            'name' => 'Institut Teknologi Yogyakarta',
        ]);
        Kampus::create([
            'name' => 'Institut Teknologi Surabaya',
        ]);
    }
}

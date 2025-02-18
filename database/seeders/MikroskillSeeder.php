<?php

namespace Database\Seeders;

use App\Models\CplMikroskil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MikroskillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CplMikroskil::create([
            'name' => 'Kreatif Dan Bertakwa',
            'sks' => '3',
        ]);
        CplMikroskil::create([
            'name' => 'Inovatif Dan Rajin',
            'sks' => '2',
        ]);
        CplMikroskil::create([
            'name' => 'Pintar Dan manajemen waktu yang baik',
            'sks' => '2',
        ]);
        CplMikroskil::create([
            'name' => 'ini test aja',
            'sks' => '20',
        ]);
    }
}

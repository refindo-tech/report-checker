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
            'name' => 'UNIVERSITAS SULTAN AGENG TIRTAYASA',
            'address' => 'Jl. Jend. Sudirman No. 123, Jakarta Pusat, Indonesia',
            'phone' => '123-456-7890',
            'website' => 'www.fti.ac.id',
            'fax' => '123-456-7890',
        ]);
        Kampus::create([
            'name' => 'UNIVERSITAS INDONESIA',
            'address' => 'Jl. Jend. Sudirman No. 123, Jakarta Pusat, Indonesia',
            'phone' => '123-456-7890',
            'website' => 'www.fti.ac.id',
            'fax' => '123-456-7890',
        ]);
        Kampus::create([
            'name' => 'UNIVERSITAS GADJAH MADA',
            'address' => 'Jl. Jend. Sudirman No. 123, Jakarta Pusat, Indonesia',
            'phone' => '123-456-7890',
            'website' => 'www.fti.ac.id',
            'fax' => '123-456-7890',
        ]);
        Kampus::create([
            'name' => 'UNIVERSITAS GUNADARMA',
            'address' => 'Jl. Jend. Sudirman No. 123, Jakarta Pusat, Indonesia',
            'phone' => '123-456-7890',
            'website' => 'www.fti.ac.id',
            'fax' => '123-456-7890',
        ]);
    }
}

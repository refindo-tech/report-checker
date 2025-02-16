<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'user_id' => 3,
            'nim' => '123456789',
            'gender' => 'L',
            'phone' => '08123456789',
            'address' => 'Jl. Jend. Sudirman No. 123, Jakarta Pusat, Indonesia',
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'Fakultas Teknik',
            'semester' => '5',
            'mitra' => 'PT. Microsoft Indonesia',
            'alamatMitra' => 'Jakarta Stock Exchange Building Tower II, lantai 18 Sudirman Central Business District, Jl. Jenderal Sudirman No.Kav. 52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190',
        ]);
    }
}

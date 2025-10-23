<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas; // Pastikan kamu mengimpor model Kelas

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data kelas yang akan dimasukkan
        $kelasData = ['A', 'B', 'C', 'D'];

        // Looping untuk memasukkan setiap kelas ke database
        foreach ($kelasData as $namaKelas) {
            Kelas::create([
                'nama_kelas' => $namaKelas
            ]);
        }
    }
}
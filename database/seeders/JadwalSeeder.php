<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jadwal')->insert([
            [
                'hari' => 'Senin',
                'id_ruang' => 1,
                'kode_kelas' => 'A',
                'jam_mulai' => '08:00:00',
                'sks' => 3,
                'status' => 'pending',
            ],
            [
                'hari' => 'Selasa',
                'id_ruang' => 2,
                'kode_kelas' => 'A',
                'jam_mulai' => '10:00:00',
                'sks' => 4,
                'status' => 'approved',
            ],
            [
                'hari' => 'Rabu',
                'id_ruang' => 3,
                'kode_kelas' => 'B',
                'jam_mulai' => '13:00:00',
                'sks' => 2,
                'status' => 'pending',
            ],
            [
                'hari' => 'Kamis',
                'id_ruang' => 4,
                'kode_kelas' => 'B',
                'jam_mulai' => '15:00:00',
                'sks' => 3,
                'status' => 'rejected',
            ],
            [
                'hari' => 'Jumat',
                'id_ruang' => 5,
                'kode_kelas' => 'B',
                'jam_mulai' => '09:00:00',
                'sks' => 4,
                'status' => 'approved',
            ],
        ]);
    }
}

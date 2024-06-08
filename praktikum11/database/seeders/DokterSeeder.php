<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            ['nama_dokter' => 'Dr. Andi', 'spesialisasi' => 'Umum', 'unit_kerja_id' => 1],
            ['nama_dokter' => 'Dr. Budi', 'spesialisasi' => 'Penyakit Dalam', 'unit_kerja_id' => 2],
        ]);
    }
}

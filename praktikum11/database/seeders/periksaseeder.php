<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        DB::table('periksas')->insert([
            ['pasien_id' => 1, 'dokter_id' => 1, 'tanggal_periksa' => '2024-06-01', 'keluhan' => 'Demam', 'diagnosis' => 'Flu', 'tindakan' => 'Istirahat', 'resep' => 'Paracetamol'],
            ['pasien_id' => 2, 'dokter_id' => 2, 'tanggal_periksa' => '2024-06-02', 'keluhan' => 'Batuk', 'diagnosis' => 'Bronkitis', 'tindakan' => 'Pemeriksaan Lanjutan', 'resep' => 'Obat Batuk'],
        ]);
    }
}

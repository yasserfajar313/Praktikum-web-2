<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('unit_kerjas')->insert([
            ['nama_unit_kerja' => 'Unit Gawat Darurat'],
            ['nama_unit_kerja' => 'Unit Rawat Inap'],
            ['nama_unit_kerja' => 'Unit Rawat Jalan'],
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksas';

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal_periksa',
        'keluhan',
        'diagnosis',
        'tindakan',
        'resep',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PM_riwayat extends Model
{
    use HasFactory;
    protected $table = 'tb_konsultasi';

    protected $fillable = [
        'id_konsultasi',
        'id_pakar',
        'tanggal',
        'gejala',
        'hasil'
    ];
}

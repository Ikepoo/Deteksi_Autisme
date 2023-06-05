<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PM_jadwal extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwal';

    protected $fillable = [
        'id_jadwal',
        'id_pakar',
        'nama_pakar',
        'tanggal',
        'jam'
    ];
}

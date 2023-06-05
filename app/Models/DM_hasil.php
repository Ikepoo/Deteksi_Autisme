<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_hasil extends Model
{
    use HasFactory;
    protected $table = 'tb_hasildiagnosa';

    protected $fillable = [
        'id_aturan',
        'id_jenis',
        'id_penanganan',
        'id_gejala1',
        'id_gejala2',
        'id_gejala3',
        'id_gejala4',
        'id_gejala5',
        'umur_anak',
        'nama_jenis',
        'cara_penanganan',
        'tanggal'
    ];
}

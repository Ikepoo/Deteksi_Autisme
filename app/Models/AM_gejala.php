<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AM_gejala extends Model
{
    use HasFactory;
    protected $table = 'tb_gejala';

    protected $fillable = [
        'id_gejala',
        'nama_gejala',
        'add_time',
    ];

    public function getDropdownOptions()
    {
        return $this->pluck('nama_gejala', 'id_gejala');
    }
}

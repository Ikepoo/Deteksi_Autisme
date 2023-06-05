<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AM_jenis extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis';

    protected $fillable = [
        'id_jenis',
        'nama_jenis',
        'add_time',
    ];
    public function getDropdownOptions()
    {
        return $this->pluck('nama_jenis', 'id_jenis');
    }
}

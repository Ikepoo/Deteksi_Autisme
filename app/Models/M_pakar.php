<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pakar extends Model
{
    use HasFactory;
    protected $table = 'tb_pakar';

    protected $fillable = [
        'id_pakar',
        'nama_pakar',
        'bio',
        'username',
        'password'
    ];

    public function getDropdownOptions()
    {
        return $this->pluck('nama_pakar', 'id_pakar');
    }
}

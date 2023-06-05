<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AM_penanganan extends Model
{
    use HasFactory;
    protected $table = 'tb_penanganan';

    protected $fillable = [
        'id_penanganan',
        'id_jenis',
        'cara_penanganan',
        'add_time',
    ];

    public function getDropdownOptions()
    {
        return $this->pluck('id_jenis', 'id_penanganan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AM_aturan extends Model
{
    use HasFactory;
    protected $table = 'tb_aturan';

    protected $fillable = [
        'id_aturan',
        'id_gejala1',
        'id_gejala2',
        'id_gejala3',
        'id_gejala4',
        'id_gejala5',
        'id_jenis',
        'id_penanganan',
        'add_time'
    ];
    public function getDropdownOptions1()
    {
        return $this->pluck('id_gejala1');
        // return collect($this)->map(function ($aturan) {
        //     [
        //         'id_gejala1' => $aturan->id_gejala1,
        //         'id_gejala2' => $aturan->id_gejala2,
        //         'id_gejala3' => $aturan->id_gejala3,
        //         'id_gejala4' => $aturan->id_gejala4,
        //         'id_gejala5' => $aturan->id_gejala5,
        //     ];
        // })->pluck('id_gejala1', 'id_gejala2', 'id_gejala3', 'id_gejala4', 'id_gejala5');
    }
    public function getDropdownOptions2()
    {
        return $this->pluck('id_gejala2');
    }
    public function getDropdownOptions3()
    {
        return $this->pluck('id_gejala3');
    }
    public function getDropdownOptions4()
    {
        return $this->pluck('id_gejala4');
    }
    public function getDropdownOptions5()
    {
        return $this->pluck('id_gejala5');
    }
}

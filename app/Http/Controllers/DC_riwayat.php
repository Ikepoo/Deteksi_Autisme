<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DC_riwayat extends Controller
{
    public function tampil()
    {
        # code...
        return view('Diagnosa/riwayat');
    }
}

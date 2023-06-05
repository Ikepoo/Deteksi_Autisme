<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DC_form_riwayat_diagnosa extends Controller
{
    public function tampil()
    {
        # code...
        return view('Diagnosa/form/form_riwayat_diagnosa');
    }
}

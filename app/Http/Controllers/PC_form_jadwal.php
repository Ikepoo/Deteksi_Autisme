<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PC_form_jadwal extends Controller
{
    public function tampil()
    {
        # code...
        return view('Pakar/form/form_jadwal');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AC_form_gejala extends Controller
{
    public function tampil()
    {
        # code...
        return view('Autisme/form/form_gejala');
    }
}

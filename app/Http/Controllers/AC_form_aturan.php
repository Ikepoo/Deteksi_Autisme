<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AC_form_aturan extends Controller
{
    public function tampil()
    {
        # code...
        return view('Autisme/form/form_aturan');
    }
}

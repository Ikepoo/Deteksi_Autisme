<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PC_home extends Controller
{
    public function tampil()
    {
        # code...
        return view('Pakar/home_pakar');
    }
}

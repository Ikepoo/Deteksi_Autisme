<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_home extends Controller
{
    //
    public function tampil()
    {
        return view('home_dasboard');
    }
}

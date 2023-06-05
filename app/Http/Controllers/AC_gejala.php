<?php

namespace App\Http\Controllers;

use App\Models\AM_gejala;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class AC_gejala extends Controller
{
    public function index()
    {
        # code...
        $tb_gejala = AM_gejala::all();
        return view('Autisme.gejala', compact('tb_gejala'));
    }
    public function create()
    {
        return view('Autisme.form.form_gejala');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'id_gejala' => 'required|unique:tb_gejala',
            'nama_gejala' => 'required',
            'add_time' => 'required'
        ]);

        AM_gejala::create($request->all());
        return redirect()->route('gejala')->with('success', 'telah menambahkan jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tb_gejala = AM_gejala::where('id_gejala', $id)->get();
        return view('Autisme.form.edit.form_edit_gejala', compact('tb_gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $gejala)
    {
        //
        $this->validate($request, [
            'id_gejala' => 'required',
            'nama_gejala' => 'required',
            'add_time' => 'required'
        ]);
        $tb_gejala = AM_gejala::where('id_gejala', $gejala);
        $tb_gejala->update($request->except(['_token', '_method']));
        return redirect()->route('gejala')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $gejala)
    {
        //
        $tb_gejala = AM_gejala::where('id_gejala', $gejala);
        $tb_gejala->delete();
        return redirect()->route('gejala')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_gejala = AM_gejala::all();
        $pdf = PDF::loadView('Autisme.report.report_gejala', compact('tb_gejala'));

        return $pdf->stream('report_gejala.pdf');
    }
}

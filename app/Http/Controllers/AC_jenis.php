<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AM_jenis;
use Barryvdh\DomPDF\Facade\Pdf;

class AC_jenis extends Controller
{
    public function index()
    {
        # code...
        $tb_jenis = AM_jenis::all();
        return view('Autisme.jenis', compact('tb_jenis'));
    }
    public function create()
    {
        return view('Autisme.form.form_jenis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'id_jenis' => 'required|unique:tb_jenis',
            'nama_jenis' => 'required',
            'add_time' => 'required'
        ]);

        AM_jenis::create($request->all());
        return redirect()->route('jenis')->with('success', 'telah menambahkan jadwal');
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
        $tb_jenis = AM_jenis::where('id_jenis', $id)->get();
        return view('Autisme.form.edit.form_edit_jenis', compact('tb_jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jenis)
    {
        //
        $this->validate($request, [
            'id_jenis' => 'required',
            'nama_jenis' => 'required',
            'add_time' => 'required'
        ]);
        $tb_jenis = AM_jenis::where('id_jenis', $jenis);
        $tb_jenis->update($request->except(['_token', '_method']));
        return redirect()->route('jenis')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jenis)
    {
        //
        $tb_jenis = AM_jenis::where('id_jenis', $jenis);
        $tb_jenis->delete();
        return redirect()->route('jenis')->with('delete', 'jadwal telah dihapus');
    }

    public function generatePDF()
    {
        $tb_jenis = AM_jenis::all();
        $pdf = PDF::loadView('Autisme.report.report_jenis', compact('tb_jenis'));

        return $pdf->stream('report_jenis.pdf');
    }
}

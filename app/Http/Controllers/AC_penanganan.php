<?php

namespace App\Http\Controllers;

use App\Models\AM_penanganan;
use App\Models\AM_jenis;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AC_penanganan extends Controller
{
    public function index()
    {
        # code...
        $tb_penanganan = AM_penanganan::all();
        return view('Autisme.penanganan', compact('tb_penanganan'));
    }
    public function create()
    {
        $tb_jenis = (new AM_jenis)->getDropdownOptions();
        return view('Autisme.form.form_penanganan', compact('tb_jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'id_penanganan' => 'required|unique:tb_penanganan',
            'id_jenis' => 'required',
            'cara_penanganan' => 'required',
            'add_time' => 'required'
        ]);

        AM_penanganan::create($request->all());
        return redirect()->route('penanganan')->with('success', 'telah menambahkan jadwal');
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
        $tb_penanganan = AM_penanganan::where('id_penanganan', $id)->get();
        return view('Autisme.form.edit.form_edit_penanganan', compact('tb_penanganan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $penanganan)
    {
        //
        $this->validate($request, [
            'id_penanganan' => 'required',
            'id_jenis' => 'required',
            'cara_penanganan' => 'required',
            'add_time' => 'required'
        ]);
        $tb_penanganan = AM_penanganan::where('id_penanganan', $penanganan);
        $tb_penanganan->update($request->except(['_token', '_method']));
        return redirect()->route('penanganan')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $penanganan)
    {
        //
        $tb_penanganan = AM_penanganan::where('id_penanganan', $penanganan);
        $tb_penanganan->delete();
        return redirect()->route('penanganan')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_penanganan = AM_penanganan::all();
        $pdf = PDF::loadView('Autisme.report.report_penanganan', compact('tb_penanganan'));

        return $pdf->stream('report_penanganan.pdf');
    }
}

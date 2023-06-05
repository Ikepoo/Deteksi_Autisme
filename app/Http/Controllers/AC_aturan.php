<?php

namespace App\Http\Controllers;

use App\Models\AM_aturan;
use App\Models\AM_gejala;

use App\Models\AM_penanganan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AC_aturan extends Controller
{
    public function index()
    {
        # code...
        $tb_aturan = AM_aturan::all();
        return view('Autisme.aturan', compact('tb_aturan'));
    }
    public function create()
    {
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        $tb_penanganan = (new AM_penanganan)->getDropdownOptions();
        return view('Autisme.form.form_aturan', compact(['tb_gejala', 'tb_penanganan']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id_aturan' => 'required|unique:tb_aturan',
            'id_gejala1' => 'required',
            'id_gejala2' => 'required',
            'id_gejala3' => 'required',
            'id_gejala4' => 'required',
            'id_gejala5' => 'required',
            'id_penanganan' => 'required',
            'add_time' => 'required'
        ]);

        $id = $request->input('id_penanganan');
        $penanganan = AM_penanganan::where('id_penanganan', $id)->get();
        foreach ($penanganan as $id_jenis) {
            $name = $id_jenis->id_jenis;
        }
        $request->merge(['id_jenis' => $name]);

        AM_aturan::create($request->all());
        return redirect()->route('aturan')->with('success', 'telah menambahkan jadwal');
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
        $tb_aturan = AM_aturan::where('id_aturan', $id)->get();
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        $tb_penanganan = (new AM_penanganan)->getDropdownOptions();
        return view('Autisme.form.edit.form_edit_aturan', compact(['tb_aturan', 'tb_gejala', 'tb_penanganan']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $aturan)
    {
        //
        $this->validate($request, [
            'id_aturan' => 'required',
            'id_gejala1' => 'required',
            'id_gejala2' => 'required',
            'id_gejala3' => 'required',
            'id_gejala4' => 'required',
            'id_gejala5' => 'required',
            'id_penanganan' => 'required',
            'add_time' => 'required'
        ]);
        $tb_aturan = AM_aturan::where('id_aturan', $aturan);
        $tb_aturan->update($request->except(['_token', '_method']));
        return redirect()->route('aturan')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $aturan)
    {
        //
        $tb_aturan = AM_aturan::where('id_aturan', $aturan);
        $tb_aturan->delete();
        return redirect()->route('aturan')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_aturan = AM_aturan::all();
        $pdf = PDF::loadView('Autisme.report.report_aturan', compact('tb_aturan'));

        return $pdf->stream('report_aturan.pdf');
    }
}

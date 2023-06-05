<?php

namespace App\Http\Controllers;

use App\Models\PM_jadwal;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\M_pakar;

use Illuminate\Http\Request;

class PC_jadwal extends Controller
{
    public function index()
    {
        # code...
        $tb_jadwal = PM_jadwal::all();
        // $tasks = PM_jadwal::all();
        return view('Pakar.jadwal', compact('tb_jadwal'));
    }
    public function create()
    {
        $tb_pakar = (new M_pakar)->getDropdownOptions();
        return view('Pakar.form.form_jadwal', compact('tb_pakar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'id_jadwal' => 'required',
            'id_pakar' => 'required',
            'tanggal' => 'required',
            'jam' => 'required'
        ]);

        $id = $request->input('id_pakar');
        $pakar = M_pakar::where('id_pakar', $id)->get();
        foreach ($pakar as $id_pakar) {
            $name = $id_pakar->nama_pakar;
        }
        $request->merge(['nama_pakar' => $name]);

        PM_jadwal::create($request->all());
        return redirect()->route('jadwal')->with('success', 'telah menambahkan jadwal');
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
        $tb_jadwal = PM_jadwal::where('id_jadwal', $id)->get();
        return view('Pakar.form.form_edit_jadwal', compact('tb_jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jadwal)
    {
        //
        $this->validate($request, [
            'id_jadwal' => 'required',
            'id_pakar' => 'required',
            'tanggal' => 'required',
            'nama_pakar',
            'jam' => 'required'
        ]);
        $tb_jadwal = PM_jadwal::where('id_jadwal', $jadwal);
        $tb_jadwal->update($request->except(['_token', '_method']));
        return redirect()->route('jadwal')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jadwal)
    {
        //
        $tb_jadwal = PM_jadwal::where('id_jadwal', $jadwal);
        $tb_jadwal->delete();
        return redirect()->route('jadwal')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_jadwal = PM_jadwal::all();
        $pdf = PDF::loadView('Pakar.report.report_jadwal', compact('tb_jadwal'));

        return $pdf->stream('report_jadwal.pdf');
    }
}

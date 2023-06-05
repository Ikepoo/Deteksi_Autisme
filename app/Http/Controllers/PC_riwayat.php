<?php

namespace App\Http\Controllers;

use App\Models\PM_riwayat;
use App\Models\M_pakar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PC_riwayat extends Controller
{
    public function index()
    {
        # code...
        $tb_konsul = PM_riwayat::all();
        // $tasks = PM_jadwal::all();
        return view('Pakar.riwayat_konsul', compact('tb_konsul'));
    }
    public function create()
    {
        $tb_pakar = (new M_pakar)->getDropdownOptions();
        return view('Pakar.form.form_riwayat', compact('tb_pakar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id_konsultasi' => 'required',
            'id_pakar' => 'required',
            'tanggal' => 'required',
            'gejala' => 'required',
            'hasil' => 'required'
        ]);

        PM_riwayat::create($request->all());
        return redirect()->route('riwayat')->with('success', 'telah menambahkan riwayat konsultasi');
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
        $tb_konsul = PM_riwayat::where('id_konsultasi', $id)->get();
        return view('Pakar.form.form_edit_riwayat', compact('tb_konsul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $konsul)
    {
        //
        $this->validate($request, [
            'id_konsultasi' => 'required',
            'id_pakar' => 'required',
            'tanggal' => 'required',
            'gejala' => 'required',
            'hasil' => 'required'
        ]);
        $tb_konsul = PM_riwayat::where('id_konsultasi', $konsul);
        $tb_konsul->update($request->except(['_token', '_method']));
        return redirect()->route('riwayat')->with('success', 'berhasil memperbaharui riwayat konsultasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $konsul)
    {
        //
        $tb_konsul = PM_riwayat::where('id_konsultasi', $konsul);
        $tb_konsul->delete();
        return redirect()->route('riwayat')->with('delete', 'data konsultasi telah dihapus');
    }
    public function generatePDF()
    {
        $tb_konsul = PM_riwayat::all();
        $pdf = PDF::loadView('Pakar.report.report_konsultasi', compact('tb_konsul'));

        return $pdf->stream('report_konsultasi.pdf');
    }
}

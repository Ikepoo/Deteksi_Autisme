<?php

namespace App\Http\Controllers;

use App\Models\M_pakar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class C_pakar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tb_pakar = M_pakar::all();
        return view('Profile.pakar', compact('tb_pakar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Profile.form.form_pakar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id_pakar' => 'required|unique:tb_pakar',
            'nama_pakar' => 'required',
            'bio' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        M_pakar::create($request->all());
        return redirect()->route('pakar')->with('success', 'telah menambahkan jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(M_pakar $m_pakar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $m_pakar)
    {
        //
        $tb_pakar = M_pakar::where('id_pakar', $m_pakar)->get();
        return view('Profile.form.edit.form_edit_pakar', compact('tb_pakar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $m_pakar)
    {
        //
        $this->validate($request, [
            'id_pakar' => 'required',
            'nama_pakar' => 'required',
            'bio' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $tb_pakar = M_pakar::where('id_pakar', $m_pakar);
        $tb_pakar->update($request->except(['_token', '_method']));
        return redirect()->route('pakar')->with('success', 'telah menambahkan jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $m_pakar)
    {
        //
        $tb_jenis = M_pakar::where('id_pakar', $m_pakar);
        $tb_jenis->delete();
        return redirect()->route('pakar')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_pakar = M_pakar::all();
        $pdf = PDF::loadView('Profile.report.report_pakar', compact('tb_pakar'));

        return $pdf->stream('report_pakar.pdf');
    }
}

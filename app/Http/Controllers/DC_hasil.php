<?php

namespace App\Http\Controllers;

use App\Models\AM_aturan;
use App\Models\AM_jenis;
use App\Models\AM_gejala;
use App\Models\AM_penanganan;
use App\Models\DM_hasil;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DC_hasil extends Controller
{
    public function index()
    {
        # code...
        $tb_hasil = DM_hasil::all();
        // $tb_gejala = DM_hasil::all();
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        return view('Diagnosa.hasil_diagnosa', compact(['tb_hasil', 'tb_gejala']));
    }
    /**
     * 
     */
    protected function forwardChaining(Request $request)
    {
        // mencari id_aturan yang sesuai
        $gejala1 = $request->input('id_gejala1');
        $gejala2 = $request->input('id_gejala2');
        $gejala3 = $request->input('id_gejala3');
        $gejala4 = $request->input('id_gejala4');
        $gejala5 = $request->input('id_gejala5');

        $id_aturan1 = AM_aturan::whereIn('id_aturan', function ($query) use ($gejala1) {
            $query->select('id_aturan')
                ->from('tb_aturan')
                ->where('id_gejala1', $gejala1);
        })->pluck('id_aturan');
        foreach ($id_aturan1 as $id) {
            $id_aturan1 = $id;
        }

        $id_aturan2 = AM_aturan::whereIn('id_aturan', function ($query) use ($gejala2) {
            $query->select('id_aturan')
                ->from('tb_aturan')
                ->where('id_gejala2', $gejala2);
        })->pluck('id_aturan');
        foreach ($id_aturan2 as $id) {
            $id_aturan2 = $id;
        }
        $id_aturan3 = AM_aturan::whereIn('id_aturan', function ($query) use ($gejala3) {
            $query->select('id_aturan')
                ->from('tb_aturan')
                ->where('id_gejala3', $gejala3);
        })->pluck('id_aturan');
        foreach ($id_aturan3 as $id) {
            $id_aturan3 = $id;
        }
        $id_aturan4 = AM_aturan::whereIn('id_aturan', function ($query) use ($gejala4) {
            $query->select('id_aturan')
                ->from('tb_aturan')
                ->where('id_gejala4', $gejala4);
        })->pluck('id_aturan');
        foreach ($id_aturan4 as $id) {
            $id_aturan4 = $id;
        }
        $id_aturan5 = AM_aturan::whereIn('id_aturan', function ($query) use ($gejala5) {
            $query->select('id_aturan')
                ->from('tb_aturan')
                ->where('id_gejala5', $gejala5);
        })->pluck('id_aturan');
        foreach ($id_aturan5 as $id) {
            $id_aturan5 = $id;
        }
        $id_aturan = [$id_aturan1, $id_aturan2, $id_aturan3, $id_aturan4, $id_aturan5];
        $id_aturan = array_count_values($id_aturan);
        arsort($id_aturan);
        $id_aturan = array_key_first($id_aturan);

        return $id_aturan;
    }
    /**
     * 
     */
    protected function cariPenanganan(Request $request)
    {
        $id_aturan = $this->forwardChaining($request);
        // mencari id_jenis dan id_penanganan
        $id_penanganan = "";
        $cara_penanganan = "";
        $aturan = AM_aturan::where('id_aturan', $id_aturan)->get();
        foreach ($aturan as $aturans) {
            $id_penanganan = $aturans->id_penanganan;
        }
        $penanganan = AM_penanganan::where('id_penanganan', $id_penanganan)->get();
        foreach ($penanganan as $penanganans) {
            $cara_penanganan = $penanganans->cara_penanganan;
        }
        return $cara_penanganan;
    }
    /**
     * 
     */
    protected function cariJenis(Request $request)
    {
        $id_aturan = $this->forwardChaining($request);
        // mencari id_jenis dan id_penanganan
        $id_jenis = "";
        $nama_jenis = "";
        $aturan = AM_aturan::where('id_aturan', $id_aturan)->get();
        foreach ($aturan as $aturans) {
            $id_jenis = $aturans->id_jenis;
        }
        $jenis = AM_jenis::where('id_jenis', $id_jenis)->get();
        foreach ($jenis as $jeniss) {
            $nama_jenis = $jeniss->nama_jenis;
        }
        return $nama_jenis;
    }
    /**
     * 
     */
    public function create()
    {
        $tb1 = (new AM_aturan)->getDropdownOptions1();
        $tb2 = (new AM_aturan)->getDropdownOptions2();
        $tb3 = (new AM_aturan)->getDropdownOptions3();
        $tb4 = (new AM_aturan)->getDropdownOptions4();
        $tb5 = (new AM_aturan)->getDropdownOptions5();
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        return view('Diagnosa.form.form_hasil', compact(['tb1', 'tb2', 'tb3', 'tb4', 'tb5', 'tb_gejala']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dat yang perlu divalidasi
        // $id_aturan = $this->forwardChaining($request);
        $this->validate($request, [
            'id_gejala1' => 'required',
            'id_gejala2' => 'required',
            'id_gejala3' => 'required',
            'id_gejala4' => 'required',
            'id_gejala5' => 'required',
            'umur_anak' => 'required',
            'tanggal' => 'required'
        ]);

        // mencari id_aturan   
        $id_aturan = $this->forwardChaining($request);
        // mencari nama_jenis   
        $nama_jenis = $this->cariJenis($request);
        // mencari cara_penanganan
        $cara_penanganan = $this->cariPenanganan($request);
        // menambahkan ke inputan
        $request->merge(['id_aturan' => $id_aturan, 'nama_jenis' =>  $nama_jenis, 'cara_penanganan' => $cara_penanganan]);

        return redirect()->route('hasil')->with('delete', 'jdata telah bertambah');

        // return redirect()->route('hasil.tampil', 'id_diagnosa');
        // return ('Diagnosa.form.preview');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $tb_hasil = DM_hasil::all();
        // // $tb_gejala = DM_hasil::all();
        // $tb_gejala = (new AM_gejala)->getDropdownOptions();
        // return view('Diagnosa.form.preview', compact(['tb_hasil', 'tb_gejala']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tb_hasil = DM_hasil::where('id_diagnosa', $id)->get();
        $tb1 = (new AM_aturan)->getDropdownOptions1();
        $tb2 = (new AM_aturan)->getDropdownOptions2();
        $tb3 = (new AM_aturan)->getDropdownOptions3();
        $tb4 = (new AM_aturan)->getDropdownOptions4();
        $tb5 = (new AM_aturan)->getDropdownOptions5();
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        return view('Diagnosa.form.form_edit_hasil', compact(['tb_hasil', 'tb1', 'tb2', 'tb3', 'tb4', 'tb5', 'tb_gejala']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $hasil)
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
        $tb_hasil = DM_hasil::where('id_diagnosa', $hasil);
        $tb_hasil->update($request->except(['_token', '_method']));
        return redirect()->route('hasil')->with('success', 'telah diperbaharui jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $hasil)
    {
        //
        $tb_hasil = DM_hasil::where('id_diagnosa', $hasil);
        $tb_hasil->delete();
        return redirect()->route('hasil')->with('delete', 'jadwal telah dihapus');
    }
    public function generatePDF()
    {
        $tb_hasil = DM_hasil::all();
        // $tb_gejala = DM_hasil::all();
        $tb_gejala = (new AM_gejala)->getDropdownOptions();
        $pdf = PDF::loadView('Diagnosa.report.report_diagnosa', compact(['tb_hasil', 'tb_gejala']));

        return $pdf->stream('report_diagnosa.pdf');
    }
}

@extends('welcome')
@section('container')
@foreach ($tb_hasil as $hasil) 
<div class="me-3 d-flex justify-content-between align-items-center mt-2">
  <h2 class="fw-bold mb-4 mt-3">Diagnosa id_{{ $hasil->id_diagnosa}}</h2>
  <a class="btn btn-info ms-3" href="{{ route('pdf_diagnosaById', $hasil->id_diagnosa)}}">Cetak</a>
</div>

<form1 class="row g-3 w-100">
  <div>
    <table class="col-md-12 table table-striped table-hover">
      <tbody>
        <tr>
          <th>Umur</th>
          <td>{{ $hasil->umur_anak }}</td>
        </tr>
        <tr>
          <th>Tanggal</th>
          <td>{{ $hasil->tanggal }}</td>
        </tr>
        <tr>
          <th>gejala</th>
          <td>
            @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                @if ($hasil->id_gejala1 == $id_gejala1)
                    {{ $nama_gejala }}, 
                @endif
                @if ($hasil->id_gejala2 == $id_gejala1)
                    {{ $nama_gejala }}, 
                @endif
                @if ($hasil->id_gejala3 == $id_gejala1)
                    {{ $nama_gejala }}, 
                @endif
                @if ($hasil->id_gejala4 == $id_gejala1)
                    {{ $nama_gejala }}, 
                @endif
                @if ($hasil->id_gejala5 == $id_gejala1)
                    {{ $nama_gejala }}
                @endif
            @endforeach
          </td>
        </tr>
        <tr>
          <th>Jenis</th>
          <td>{{ $hasil->nama_jenis }}</td>
        </tr>
        <tr>
          <th>Cara penanganan</th>
          <td>{{ $hasil->cara_penanganan }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-6">
    <a href="{{ route('hasil.edit', $hasil->id_diagnosa) }}" class="btn btn-primary">Perbarui</a>
    <a class="btn btn-secondary ms-3" href="{{ route('hasil') }}">Kembali</a>
  </div>
</form>
<div class="col-md-12 text-end">
  <form action="{{ route('hasil.hapus', $hasil->id_diagnosa) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger px-5">Hapus</button>
  </form>
</div>
@endforeach
@endsection
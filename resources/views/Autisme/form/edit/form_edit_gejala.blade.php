@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Edit Gejala</h2>
@if ($errors->any())
  <div class="alert alert-danger">
    <strong>MAAF !</strong> Sepertinya terjadi kesalahan pada inputan data<br><br>
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif
@foreach($tb_gejala as $gejala)
<form action="{{ route('gejala.perbarui', $gejala->id_gejala) }}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-12">
      <label for="id_gejala" class="form-label">Id Gejala</label>
      <input type="text" class="form-control" name="id_gejala" value="{{ $gejala->id_gejala }}" readonly>
    </div>
  <div class="col-md-12">
    <label for="nama_gejala" class="form-label">Nama Gejala</label>
    <input type="text" class="form-control" name="nama_gejala" value="{{ $gejala->nama_gejala}}">
  </div>
  <div class="col-md-12">
    <label for="add_time" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="add_time" value="{{ $gejala->add_time }}">
  </div>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Perbarui</button>
    <a type="submit" class="btn btn-danger" href="{{ route('gejala') }}">Batal</a>
  </div>
</form>
<div class="col-md-12 text-end">
  <form action="{{ route('gejala.hapus', $gejala->id_gejala) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger px-5">Hapus</button>
  </form>
</div>
@endforeach
@endsection
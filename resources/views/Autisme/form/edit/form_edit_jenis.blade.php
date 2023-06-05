@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Edit Jenis</h2>
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
@foreach($tb_jenis as $jenis)
<form action="{{ route('jenis.perbarui', $jenis->id_jenis) }}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-12">
      <label for="id_jenis" class="form-label">Id Jenis</label>
      <input type="text" class="form-control" name="id_jenis" value="{{ $jenis->id_jenis }}" readonly>
    </div>
  <div class="col-md-12">
    <label for="nama_jenis" class="form-label">Nama Jenis</label>
    <input type="text" class="form-control" name="nama_jenis" value="{{ $jenis->nama_jenis}}">
  </div>
  <div class="col-md-12">
    <label for="add_time" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="add_time" value="{{ $jenis->add_time }}">
  </div>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Perbarui</button>
    <a type="submit" class="btn btn-danger" href="{{ route('jenis') }}">Batal</a>
  </div>
</form>
<div class="col-md-12 text-end">
  <form action="{{ route('jenis.hapus', $jenis->id_jenis) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger px-5">Hapus</button>
  </form>
</div>
@endforeach
@endsection
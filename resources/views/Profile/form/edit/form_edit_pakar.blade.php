@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Edit Data Pakar</h2>
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
@foreach ($tb_pakar as $pakar)
<form action="{{ route('pakar.perbarui', $pakar->id_pakar) }}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-4">
      <label for="id_jenis" class="form-label">Id pakar</label>
      <input type="text" class="form-control" name="id_pakar" value="{{ $pakar->id_pakar }}" readonly>
    </div>
  <div class="col-md-8">
    <label for="nama_jenis" class="form-label">Nama pakar</label>
    <input type="text" class="form-control" name="nama_pakar" value="{{ $pakar->nama_pakar }}">
  </div>
  <div class="col-md-6">
    <label for="nama_jenis" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" value="{{ $pakar->username }}">
  </div>
  <div class="col-md-6">
    <label for="nama_jenis" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" value="{{ $pakar->password }}">
  </div>
  <div class="col-md-8">
    <label for="add_time" class="form-label">bio</label>
    <textarea name="bio" class="form-control" id="" cols="70" rows="4">{{ $pakar->bio }}</textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    <a type="submit" class="btn btn-danger" href="{{ route('pakar') }}">Batal</a>
  </div>
</form>
<div class="col-md-12 text-end">
    <form action="{{ route('pakar.hapus', $pakar->id_pakar) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger px-5">Hapus</button>
    </form>
  </div>
@endforeach
@endsection
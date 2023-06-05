@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Pakar</h2>
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
<form action="{{ route('pakar.upload') }}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-4">
      <label for="id_jenis" class="form-label">Id pakar</label>
      <input type="text" class="form-control" name="id_pakar">
    </div>
  <div class="col-md-8">
    <label for="nama_jenis" class="form-label">Nama pakar</label>
    <input type="text" class="form-control" name="nama_pakar">
  </div>
  <div class="col-md-6">
    <label for="nama_jenis" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="col-md-6">
    <label for="nama_jenis" class="form-label">Password</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="col-md-8">
    <label for="add_time" class="form-label">bio</label>
    <textarea name="bio" class="form-control" id="" cols="70" rows="4"></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    <a type="submit" class="btn btn-danger" href="{{ route('pakar') }}">Batal</a>
  </div>
</form>
@endsection
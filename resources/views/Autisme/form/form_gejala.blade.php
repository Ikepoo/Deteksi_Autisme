@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Gejala</h2>
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
<form action="{{ route('gejala.upload') }}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-4">
      <label for="id_gejala" class="form-label">Id Gejala</label>
      <input type="text" class="form-control" name="id_gejala">
    </div>
  <div class="col-md-8">
    <label for="nama_gejala" class="form-label">Nama Gejala</label>
    <input type="text" class="form-control" name="nama_gejala">
  </div>
  <div class="col-md-4">
    <label for="add_time" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="add_time" placeholder="hari / tanggal">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    <a type="submit" class="btn btn-danger" href="{{ route('gejala') }}">Batal</a>
  </div>
</form>
@endsection
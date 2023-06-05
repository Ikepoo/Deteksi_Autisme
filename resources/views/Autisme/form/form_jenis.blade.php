@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Jenis</h2>
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
<form action="{{ route('jenis.upload') }}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-4">
      <label for="id_jenis" class="form-label">Id Jenis</label>
      <input type="text" class="form-control" name="id_jenis">
    </div>
  <div class="col-md-8">
    <label for="nama_jenis" class="form-label">Nama Jenis</label>
    <input type="text" class="form-control" name="nama_jenis">
  </div>
  <div class="col-md-4">
    <label for="add_time" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="add_time" placeholder="hari / tanggal">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    <a type="submit" class="btn btn-danger" href="{{ route('jenis') }}">Batal</a>
  </div>
</form>
@endsection
@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Konsultasi</h2>
@if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<form action="{{ route('riwayat.upload') }}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-4">
    <label for="id_konsultasi" class="form-label">ID Konsultasi</label>
    <input type="text" class="form-control" name="id_konsultasi">
  </div>
  <div class="col-md-4">
      <label for="id_Pakar" class="form-label">ID Pakar</label>
      <select name="id_pakar" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_pakar as $id_pakar => $nama_pakar)
          <option value="{{ $id_pakar }}">{{ $nama_pakar }}</option>
        @endforeach
      </select>
  </div>
  <div class="col-md-4">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="tanggal">
  </div>
  <div class="col-md-4">
    <label for="gejala" class="form-label">Gejala</label>
    <textarea name="gejala" class="form-control" cols="50" rows="7"></textarea>
  </div>
  <div class="col-md-8">
    <label for="hasil" class="form-label">Hasil</label>
    <textarea name="hasil" class="form-control" cols="50" rows="7"></textarea>
  </div>
          
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a type="submit" class="btn btn-danger" href="{{ route('riwayat') }}">Batal</a>
  </div>
</form>
@endsection
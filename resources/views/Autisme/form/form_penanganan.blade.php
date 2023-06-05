@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Penanganan</h2>
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
<form action="{{ route('penanganan.upload')}}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-6">
    <label for="id_penanganan" class="form-label">Id Penanganan</label>
    <input type="text" class="form-control" name="id_penanganan">
  </div>
  <div class="col-md-6">
    <label for="id_jenis" class="form-label">Id Jenis</label>
    <select name="id_jenis" class="form-select">
      <option>Choose...</option>
      @foreach ($tb_jenis as $id_jenis => $nama_jenis)
        <option value="{{ $id_jenis }}">{{ $id_jenis }} - {{ $nama_jenis }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-12">
    <label for="cara_penanganan" class="form-label">Cara Penanganan</label>
    <textarea type="text" class="form-control" name="cara_penanganan" rows="5"></textarea>
  </div>
  <div class="col-md-4">
    <label for="add_time" class="form-label">Tanggal Ditambahkan</label>
    <input type="date" class="form-control" name="add_time" placeholder="hari / tanggal">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    <a class="btn btn-danger" href="{{ route('penanganan') }}">Batal</a>
  </div>
</form>
@endsection
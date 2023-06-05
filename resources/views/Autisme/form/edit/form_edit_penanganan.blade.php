@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Perbarui Data Penanganan</h2>
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
@foreach ($tb_penanganan as $penanganan)
<form action="{{ route('penanganan.perbarui', $penanganan->id_penanganan)}}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-6">
    <label for="id_penanganan" class="form-label">Id Penanganan</label>
    <input type="text" class="form-control" name="id_penanganan" value="{{ $penanganan->id_penanganan }}" readonly>
  </div>
  <div class="col-md-6">
    <label for="id_jenis" class="form-label">Id Jenis</label>
    <input type="text" class="form-control" name="id_jenis" value="{{ $penanganan->id_jenis }}" readonly>
  </div>
  <div class="col-md-12">
    <label for="cara_penanganan" class="form-label">Cara Penanganan</label>
    <textarea type="text" class="form-control" name="cara_penanganan" rows="5">{{ $penanganan->cara_penanganan }}</textarea>
  </div>
  <div class="col-md-4">
    <label for="add_time" class="form-label">Tanggal Ditambahkan</label>
    <input type="date" class="form-control" name="add_time" value="{{ $penanganan->add_time }}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Perbarui</button>
    <a class="btn btn-danger" href="{{ route('penanganan') }}">Batal</a>
  </div>
</form>
<div class="col-md-12 text-end">
  <form action="{{ route('penanganan.hapus', $penanganan->id_penanganan) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger px-5">Hapus</button>
  </form>
</div>
@endforeach
@endsection
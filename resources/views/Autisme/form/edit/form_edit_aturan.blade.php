@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Edit Aturan</h2>
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
@foreach($tb_aturan as $aturan)
<form action="{{ route('aturan.perbarui', $aturan->id_aturan) }}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-12">
    <label for="id_aturan" class="form-label">Id Aturan</label>
    <input type="text" class="form-control" name="id_aturan" value="{{ $aturan->id_aturan }}" readonly>
  </div>
    <div class="col-md-12">
        <label class="form-label">Id Gejala</label>
        <select name="id_gejala1" class="form-select">
          <option value="{{ null }}">Gejala 1</option>
          @foreach ($tb_gejala as $id_gejala => $nama_gejala)
            <option value="{{ $id_gejala }}" @if ($id_gejala == $aturan->id_gejala1) selected @endif>{{ $id_gejala }} - {{ $nama_gejala }}</option>
          @endforeach
        </select>
        <select name="id_gejala2" class="form-select mt-1">
          <option value="{{ null }}">Gejala 2</option>
          @foreach ($tb_gejala as $id_gejala => $nama_gejala)
            <option value="{{ $id_gejala }}" @if ($id_gejala == $aturan->id_gejala2) selected @endif>{{ $id_gejala }} - {{ $nama_gejala }}</option>
          @endforeach
        </select>
        <select name="id_gejala3" class="form-select mt-1">
          <option value="{{ null }}">Gejala 3</option>
          @foreach ($tb_gejala as $id_gejala => $nama_gejala)
            <option value="{{ $id_gejala }}" @if ($id_gejala == $aturan->id_gejala3) selected @endif>{{ $id_gejala }} - {{ $nama_gejala }}</option>
          @endforeach
        </select>
        <select name="id_gejala4" class="form-select mt-1">
          <option value="{{ null }}">Gejala 4</option>
          @foreach ($tb_gejala as $id_gejala => $nama_gejala)
            <option value="{{ $id_gejala }}" @if ($id_gejala == $aturan->id_gejala4) selected @endif>{{ $id_gejala }} - {{ $nama_gejala }}</option>
          @endforeach
        </select>
        <select name="id_gejala5" class="form-select mt-1">
          <option value="{{ null }}">Gejala 5</option>
          @foreach ($tb_gejala as $id_gejala => $nama_gejala)
            <option value="{{ $id_gejala }}" @if ($id_gejala == $aturan->id_gejala5) selected @endif>{{ $id_gejala }} - {{ $nama_gejala }}</option>
          @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <label for="id_penanganan" class="form-label">Id Penanganan - Id Jenis</label>
        <select name="id_penanganan" class="form-select">
          <option value="{{ null }}">Choose...</option>
          @foreach ($tb_penanganan as $id_penanganan => $id_jenis)
            <option value="{{ $id_penanganan }}" @if ($id_penanganan == $aturan->id_penanganan) selected @endif>{{ $id_penanganan }} - {{ $id_jenis }} </option>
          @endforeach
        </select>
    </div>
    <div class="col-md-4">
      <label for="add_time" class="form-label">Tanggal</label>
      <input type="date" class="form-control" name="add_time" value="{{ $aturan->add_time }}">
    </div>
            
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Perbarui</button>
      <a class="btn btn-danger" href="{{ route('aturan') }}">Batal</a>
    </div>
</form>
<div class="col-md-12 text-end">
  <form action="{{ route('aturan.hapus', $aturan->id_aturan) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger px-5">Hapus</button>
  </form>
</div>
@endforeach
@endsection
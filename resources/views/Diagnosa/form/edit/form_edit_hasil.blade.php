@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Diagnosa</h2>
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
@foreach($tb_hasil as $hasil)
<form action="{{ route('hasil.perbarui', $hasil->id_diagnosa) }}" method="POST" class="row g-3 w-100">
  @csrf
  @method('PUT')
  <div class="col-md-6">
    <label for="umur_anak">umur anak</label>
    <input type="text" name="umur_anak" class="form-control mt-2" value="{{ $hasil->umur_anak }}">
  </div>
  <div class="col-md-6">
    <label for="umur_anak">Tanggal</label>
    <input type="date" name="tanggal" class="form-control mt-2" value="{{ $hasil->tanggal }}">
  </div>
    <div class="col-md-12">
      <label for="id_gejala1" class="form-label">Gejala 1</label>
      <select name="id_gejala1" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb1 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
                <option value="{{ $id_gejala }}" @if ($id_gejala == $hasil->id_gejala1) selected @endif>{{ $nama_gejala }}</option>
            @endif
          @endforeach  
        @endforeach
        <option value="0">...Tidak ada...</option>
      </select>
    </div>
    <div class="col-md-12">
      <label for="id_gejala2" class="form-label">Gejala 2</label>
      <select name="id_gejala2" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb2 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
                <option value="{{ $id_gejala }}" @if ($id_gejala == $hasil->id_gejala2) selected @endif>{{ $nama_gejala }}</option>
            @endif
          @endforeach  
        @endforeach
        <option value="0">...Tidak ada...</option>
      </select>
    </div>
    <div class="col-md-12">
      <label for="id_gejala3" class="form-label">Gejala 3</label>
      <select name="id_gejala3" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb3 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
              <option value="{{ $id_gejala }}" @if ($id_gejala == $hasil->id_gejala3) selected @endif>{{ $nama_gejala }}</option>
            @endif
          @endforeach  
        @endforeach
        <option value="0">...Tidak ada...</option>
      </select>
    </div>
    <div class="col-md-12">
      <label for="id_gejala4" class="form-label">Gejala 4</label>
      <select name="id_gejala4" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb4 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
                <option value="{{ $id_gejala }}" @if ($id_gejala == $hasil->id_gejala4) selected @endif>{{ $nama_gejala }}</option>
            @endif
          @endforeach  
        @endforeach
        <option value="0">...Tidak ada...</option>
      </select>
    </div>
    <div class="col-md-12">
      <label for="id_gejala5" class="form-label">Gejala 5</label>
      <select name="id_gejala5" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb5 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
                <option value="{{ $id_gejala }}" @if ($id_gejala == $hasil->id_gejala5) selected @endif>{{ $nama_gejala }}</option>
            @endif
          @endforeach  
        @endforeach
        <option value="0">...Tidak ada...</option>
      </select>
      </select>
    </div>
    <div class="col-12 d-flex justify-content-between">
      <a none></a>
      <button type="submit" class="btn btn-success p-2" style="width: 30vw">Periksa</button>
      <a class="btn btn-danger justify-between" href="{{ route('hasil') }}">Batal</a>
    </div>
  </form>
  @endforeach
@endsection
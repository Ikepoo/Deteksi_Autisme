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
<form action="{{ route('hasil.upload') }}" method="POST" class="row g-3 w-100">
  @csrf
  <div class="col-md-6">
    <label for="umur_anak">umur anak</label>
    <input type="text" name="umur_anak" class="form-control mt-2">
  </div>
  <div class="col-md-6">
    <label for="umur_anak">Tanggal</label>
    <input type="date" name="tanggal" class="form-control mt-2">
  </div>
    <div class="col-md-12">
      <label for="id_gejala1" class="form-label">Gejala 1</label>
      <select name="id_gejala1" class="form-select">
        <option>Choose...</option>
        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
          @foreach ($tb1 as $id_gejala)
            @if ($id_gejala == $id_gejala1)
              <option value="{{ $id_gejala }}">{{ $nama_gejala }}</option>
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
              <option value="{{ $id_gejala }}">{{ $nama_gejala }}</option>
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
              <option value="{{ $id_gejala }}">{{ $nama_gejala }}</option>
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
              <option value="{{ $id_gejala }}">{{ $nama_gejala }}</option>
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
              <option value="{{ $id_gejala }}">{{ $nama_gejala }}</option>
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
      <a type="submit" class="btn btn-danger justify-between" href="{{ route('hasil') }}">Batal</a>
    </div>
    {{-- <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Nama Jenis</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-8">
        <label for="inputAddress" class="form-label">Penanganan</label>
        <textarea type="text" class="form-control" id="catatan" rows="5"></textarea>
      </div> --}}
  </form>
@endsection
@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Riwayat Diagnosa</h2>
<form class="row g-3 w-100">

    <div class="col-md-4">
        <label for="inputState" class="form-label">Id Diagnosa</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
    <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Skor_Akhir</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputAddress" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="inputAddress">
    </div>
    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Catatan</label>
        <textarea type="text" class="form-control" id="catatan" rows="5"></textarea>
      </div>
    
    <div class="col-12">
      <a type="submit" class="btn btn-primary" href="{{ route('riwayat') }}">Tambahkan</a>
      <a type="submit" class="btn btn-danger" href="{{ route('riwayat') }}">Batal</a>
    </div>
  </form>
@endsection
@extends('welcome')
@section('container')
<h3 class="fw-bold text-uppercase mt-4">Selamat Datang di Dasboard</h3>
<div class="row ms-1" style="width: 70vw">
  {{-- <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card text-center pt-3" style="min-height: 25vh">
      <div class="card-body">
        <h4 class="card-title text-uppercase fw-bold" data-bs-toggle="modal">Mulai Periksa</h4>
        <a class="btn btn-primary p-3" style="min-width: 40%" data-bs-toggle="modal" data-bs-target="#formPeriksa">START</a>
        
      </div>
    </div>
  </div> --}}

  <div class="col-md-4 card p-3 m-2">
    <div>
      <p class="m-0">Data Anak</p>
      <p class="m-0">rata Umur : 8</p>
    </div>
    <div>
      <canvas id="anak" style="max-height: 10vh"></canvas>
    </div>
  </div>
  <div class="col-md-2 card p-3 m-2 text-center">
    <a class="btn" href="{{route('hasil.tambah')}}">
      Mulai Periksa
      <i class="bi bi-patch-check-fill fs-1"></i>
    </a>
  </div>
  <div class="col-md-5 card p-3 m-2">
    <div>
      <p class="m-0">Gejala</p>
      <p class="m-0">Total Data : 15</p>
    </div>
    <div>
      <canvas id="perkembangan" style="max-height: 10vh"></canvas>
    </div>
  </div>
</div>


<div class="row w-100 mt-3">
  <div class="col-sm-6">
    <div class="card text-center" style="min-width: 70vw;">
      <h4 class=" fw-semibold mt-3">Jadwal Konsultasi</h4>
      <div class="card-body text-center">
        <div class="card-text">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
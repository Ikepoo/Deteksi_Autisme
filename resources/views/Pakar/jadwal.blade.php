@extends('welcome')
@section('container')
{{-- <div class="card p-4">
    <canvas id="lineChart" style="max-height: 50vh"></canvas>
</div> --}}
<div class="card">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">jadwal Konsultasi</a>
        <div>
            <a class="btn btn-info" href="{{ route('pdf_jadwal')}}">Report</a>
            <a class="btn btn-success" href="{{ route('jadwal.tambah') }}">Tambah</a>
        </div>
    </div>
    <div class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Urutkan
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">A-Z</a></li>
                  <li><a class="dropdown-item" href="#">Z-A</a></li>
                  <li><a class="dropdown-item" href="#">...</a></li>
                </ul>
              </div>
            <form class="d-md-flex d-sm-none" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th class="col-1">id_jadwal</th>
                <th class="col-1">id_pakar</th>
                <th class="col-2">nama_pakar</th>
                <th class="col-2">tanggal</th>
                <th class="col-1">jam</th>
                <th class="col-1">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_jadwal as $jadwal)
                <tr>
                    <td>{{ $jadwal->id_jadwal }}</td>
                    <td>{{ $jadwal->id_pakar }}</td>
                    <td>{{ $jadwal->nama_pakar }}</td>
                    <td>{{ $jadwal->tanggal }}</td>
                    <td>{{ $jadwal->jam }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('jadwal.edit',  $jadwal->id_jadwal) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
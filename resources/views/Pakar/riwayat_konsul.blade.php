@extends('welcome')
@section('container')
<div class="card">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">Data Riwayat Konsultasi</a>
        <div>
            <a class="btn btn-info" href="{{ route('pdf_konsultasi') }}">Report</a>
            <a class="btn btn-success" href="{{ route('riwayat.tambah') }}">Tambah</a>
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
                <th class="col-1">id_konsultasi</th>
                <th class="col-1">id_pakar</th>
                <th class="col-1">tanggal</th>
                <th class="col-2">gejala</th>
                <th class="col-3">hasil</th>
                <th class="col-1">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_konsul as $konsul)
                <tr>
                    <td>{{ $konsul->id_konsultasi }}</td>
                    <td>{{ $konsul->id_pakar }}</td>
                    <td>{{ $konsul->tanggal }}</td>
                    <td>{{ $konsul->gejala }}</td>
                    <td>{{ $konsul->hasil }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('riwayat.edit',  $konsul->id_konsultasi) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
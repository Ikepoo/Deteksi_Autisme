@extends('welcome')
@section('container')
<div class="">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">Hasil Diagnosa</a>
        <div>
            <a class="btn btn-info" href="{{ route('pdf_diagnosa')}}">Report</a>
            <a class="btn btn-success" href="{{ route('hasil.tambah') }}">Tambah</a>
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
            <form class="d-md-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="table-primary text-center">
            <tr>
                <th>id</th>
                <th class="col-3">gejala</th>
                <th>umur</th>
                <th class="col-1">jenis</th>
                <th>tanggal</th>
                <th>Waktu Perbarui</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_hasil->sortByDesc('id_diagnosa') as $hasil)
                <tr>
                    <td>{{ $hasil->id_diagnosa }}</td>
                    <td>
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala1 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala2 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala3 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala4 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                        @foreach ($tb_gejala as $id_gejala1 => $nama_gejala)
                            @if ($hasil->id_gejala5 == $id_gejala1)
                                {{ $nama_gejala }}, 
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $hasil->umur_anak }}</td>
                    <td>{{ $hasil->nama_jenis }}</td>
                    <td>{{ $hasil->tanggal }}</td>
                    <td>{{ $hasil->updated_at }}</td>
                    <td class="text-center">
                        <a href="{{ route('hasil.tampil', $hasil->id_diagnosa) }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection
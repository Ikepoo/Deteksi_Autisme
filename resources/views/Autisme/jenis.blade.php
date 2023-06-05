@extends('welcome')
@section('container')
<div class="card">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">Data Jenis Autisme</a>
        <div>
            <a class="btn btn-info" href="{{route('pdf_jenis')}}">Report</a>
            <a class="btn btn-success" href="{{route('jenis.tambah')}}">Tambah</a>
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
                <th>id_jenis</th>
                <th>nama_jenis</th>
            <th>add_time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_jenis as $jenis)
                <tr>
                    <td>{{ $jenis->id_jenis }}</td>
                    <td>{{ $jenis->nama_jenis }}</td>
                    <td>{{ $jenis->add_time }}</td>
                    <td class="text-center">
                        <a href="{{ route('jenis.edit', $jenis->id_jenis)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection
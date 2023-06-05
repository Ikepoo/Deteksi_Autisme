@extends('welcome')
@section('container')
<div class="card">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">Data Aturan</a>
        <div>
            <a class="btn btn-info" href="{{ route('pdf_aturan') }}">Report</a>
            <a class="btn btn-success" href="{{route('aturan.tambah')}}">Tambah</a>
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
                <th>id_aturan</th>
                <th>id_gejala</th>
                <th>id_jenis</th>
                <th>id_penang</th>
                <th>add_time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_aturan as $aturan)
                <tr>
                    <td>{{ $aturan->id_aturan }}</td>
                    <td>{{ $aturan->id_gejala1 }}, {{ $aturan->id_gejala2 }}, {{ $aturan->id_gejala3 }}, {{ $aturan->id_gejala4 }}, {{ $aturan->id_gejala5 }}</td>
                    <td>{{ $aturan->id_jenis }}</td>
                    <td>{{ $aturan->id_penanganan }}</td>
                    <td>{{ $aturan->add_time }}</td>
                    <td class="text-center">
                        <a href="{{ route('aturan.edit', $aturan->id_aturan) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection
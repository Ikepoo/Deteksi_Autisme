@extends('welcome')
@section('container')
<div class="card">
    <div class="card m-4">
        <canvas id="perkembangan" style="max-height: 50vh"></canvas>
    </div>
    <div class="d-flex mt-3 me-3 justify-content-between align-items-center">
        <a class="btn fs-2 fw-bold">Data Perkembangan</a>
        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih ID Hasil Diagnosa
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">H001</a></li>
              <li><a class="dropdown-item" href="#">H002</a></li>
              <li><a class="dropdown-item" href="#">...</a></li>
            </ul>
        </div>
        <div>
            <a class="btn btn-info" href="">Report</a>
            <a class="btn btn-success" href="{{route('form_perkembangan')}}">Tambah</a>
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
                <th class="col-1">id_hasil</th>
                <th class="col-1">hari</th>
                <th class="col-1">skor</th>
                <th>catatan</th>
                <th>add_time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>H001</td>
                <td>1</td>
                <td>7</td>
                <td>Anak menunjukkan kondisi membaik namun masih melakukan perilaku yang sama</td>
                <td>25/5/2023</td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <tr>
                <td>H002</td>
                <td>2</td>
                <td>5</td>
                <td>anak kembali melakukan perilaku yang lebih buruk dari hari sebelumnya</td>
                <td>25/5/2023</td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <tr>
                <td>H003</td>
                <td>3</td>
                <td>8</td>
                <td>Kondisi psikis mulai membaik dan mulai mencoba bersosialisasi</td>
                <td>25/5/2023</td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div> 
@endsection
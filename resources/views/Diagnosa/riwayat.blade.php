@extends('welcome')
@section('container')
<div class="">
    <div class="mx-3 d-flex justify-content-between align-items-center mt-2">
        <a href=""></a>
        <a class="btn fs-3">Riwayat Diagnosa</a>
        <div>
            <a class="btn btn-info" href="">Report</a>
            <a class="btn btn-success" href="{{route('form_riwayat_diagnosa')}}">Tambah</a>
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
                <th class="col-1">id_riwayat</th>
                <th class="col-1">id_diagnosa</th>
                <th class="col-1">skor_akhir</th>
                <th class="col-1">tanggal</th>
                <th>catatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>R001</td>
                <td>D001</td>
                <td>5</td>
                <td>25/5/2023</td>
                <td>Dapat mempelajari kemampuan pendidikan dasar yang diperlukan dalam kehidupan sehari-hari. memerlukan pengawasan dan bimbingan serta pelatihan dan pendidikan khusus </td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <tr>
                <td>R002</td>
                <td>D002</td>
                <td>8</td>
                <td>26/5/2023</td>
                <td>disarankan untuk melaukan terapi BIT (Biomedical Intervention Therapy) Terapi melalui makanan (diet therapy) diberikan untuk anak-anak dengan masalah alergi makanan tertentu.</td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <tr>
                <td>R003</td>
                <td>D003</td>
                <td>7</td>
                <td>25/5/2023</td>
                <td>Disarankan untuk melakukan terapi ABA (Applied Behaviour Analysis) yang dimana Mendampingi dan mengamati perilaku anak, memberikan contoh perilaku yang aman bagi anak</td>
                <td class="text-center">
                    <a class="btn btn-primary">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div> 
@endsection
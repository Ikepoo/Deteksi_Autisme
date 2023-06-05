@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Jadwal</h2>
@if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
@if (session('success'))
    toastr.info("sddas")
@endif
<form action="{{ route('jadwal.upload') }}" method="POST" class="row g-3 w-100">
    @csrf
    <div class="col-md-4">
        <label for="id_jadwal" class="form-label">Id Jadwal</label>
        <input type="text" class="form-control" name="id_jadwal">
        <label for="id_pakar" class="form-label">Id Pakar</label>
        {{-- <input type="text" class="form-control" name="id_pakar"> --}}
        
        <select name="id_pakar" class="form-select">
          <option>Choose...</option>
          @foreach ($tb_pakar as $id_pakar => $nama_pakar)
            <option value="{{ $id_pakar }}">{{ $nama_pakar }}</option>
          @endforeach
        </select>
      </div>
    {{-- <div class="col-md-8">
      <label for="nama_pakar" class="form-label">Nama Pakar</label>
      <input type="text" class="form-control" name="nama_pakar">
    </div> --}}

    <div class="col-md-4">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" name="tanggal" placeholder="hari / tanggal">
    </div>
    <div class="col-md-4">
      <label for="jam" class="form-label">Jam</label>
      <input type="time" class="form-control" name="jam" placeholder="WIB">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Tambahkan</button>
      <a type="submit" class="btn btn-danger" href="{{ route('jadwal') }}">Batal</a>
    </div>
</form>

@endsection
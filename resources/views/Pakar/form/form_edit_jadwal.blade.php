@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Form Perbarui Jadwal</h2>
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
@foreach ($tb_jadwal as $jadwal)
    <form action="{{ route('jadwal.perbarui', $jadwal->id_jadwal) }}" method="POST" class="row g-3 w-100">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <label for="id_jadwal" class="form-label">Id Jadwal</label>
            <input type="text" class="form-control" name="id_jadwal" value="{{ $jadwal->id_jadwal }}" readonly>
            <label for="id_pakar" class="form-label">Id Pakar</label>
            <input type="text" class="form-control" name="id_pakar" value="{{ $jadwal->id_pakar }}" readonly>
          </div>
        <div class="col-md-8">
          <label for="nama_pakar" class="form-label">Nama Pakar</label>
          <input type="text" class="form-control" name="nama_pakar" value="{{ $jadwal->nama_pakar }}" readonly>
        </div>

        <div class="col-md-4">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" placeholder="hari / tanggal" value="{{ $jadwal->tanggal }}">
        </div>
        <div class="col-md-4">
          <label for="jam" class="form-label">Jam</label>
          <input type="time" class="form-control" name="jam" placeholder="WIB" value="{{ $jadwal->jam }}">
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Perbarui</button>
          <a type="submit" class="btn btn-secondary" href="{{ route('jadwal') }}">Batal</a>
        </div>
    </form>
    <div class="col-md-12 text-end">
      <form action="{{ route ('jadwal.hapus', $jadwal->id_jadwal) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger px-5">Hapus</button>
      </form>
  </div>
@endforeach
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
@endif
@endsection
@extends('welcome')
@section('container')
  <h2 class="fw-bold mb-4 mt-3">Form Edit Riwayat Konsultasi</h2>
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
  @foreach ($tb_konsul as $konsul)
    <form action="{{ route('riwayat.perbarui', $konsul->id_konsultasi) }}" method="POST" class="row g-3 w-100">
      @csrf
      @method('PUT')
      <div class="col-md-4">
        <label for="id_konsultasi" class="form-label">ID Konsultasi</label>
        <input type="text" class="form-control" name="id_konsultasi" value="{{ $konsul->id_konsultasi }}" readonly>
      </div>
      <div class="col-md-4">
          <label for="id_Pakar" class="form-label">ID Pakar</label>
          <input type="text" class="form-control" name="id_pakar" value="{{ $konsul->id_pakar }}" readonly>
      </div>

      <div class="col-md-4">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" value="{{ $konsul->tanggal }}">
      </div>
      <div class="col-md-4">
        <label for="gejala" class="form-label">Gejala</label>
        <textarea name="gejala" class="form-control" cols="50" rows="7"> {{ $konsul->gejala }} </textarea>
      </div>
      <div class="col-md-8">
        <label for="hasil" class="form-label">Hasil</label>
        <textarea name="hasil" class="form-control" cols="50" rows="7"> {{ $konsul->hasil }} </textarea>
      </div>
              
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a type="submit" class="btn btn-danger" href="{{ route('riwayat') }}">Batal</a>
      </div>
      <div class="col-6 text-end">
        <form action="{{ route('riwayat.hapus', $konsul->id_konsultasi) }}" method="POST">
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
    </form>
@endforeach
@endsection
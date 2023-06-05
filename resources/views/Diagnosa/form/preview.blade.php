@extends('welcome')
@section('container')
<h2 class="fw-bold mb-4 mt-3">Hasil</h2>
@if ($errors->any())
  <div class="alert alert-danger">
      <strong>MAAF !</strong> Sepertinya terjadi kesalahan pada inputan data<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<form1 class="row g-3 w-100">
    <div class="col-md-6">
      <label for="umur_anak">umur anak</label>
    @foreach ($tb_hasil as $hasil)
    @if(end($hasil))
    
      <input type="text" name="umur_anak" class="form-control mt-2" value="{{ $hasil->umur_anak }}">
    
    @endif
    @endforeach
</div>
</form>
 
@endsection
@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{route('pel_store')}}" method="POST">
    @csrf
    <div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Formulir</h3>
          </div>
          <div class="card-body">
          <form action="{{ route('store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                     <label for="gol_id" class="form-label">Kategori</label>
                            <select class="form-select" id="gol_id" name="gol_id" required>
                                <option value="" selected disabled>Pilih Kategori</option>
                                @foreach ($golongans as $golongan)
                                    <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">No</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="pel_no">    
                        </div>
                        <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="pel_nama">    
                        </div>
                        <div class="col-md-4">
                            <label for="user_id" class="form-label">Addopter</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>Pilih Addopter</option>
                                @if ($users->count() > 0)
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>Tidak ada Addopter tersedia</option>
                                @endif
                            </select>
                        </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Umur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_alamat">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_hp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Berat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_ktp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Warna</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_seri">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipe Makanan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_meteran">
</div>
<div class="col-md-4">
                            <label for="pel_aktif" class="form-label">Status</label>
                            <select name="pel_aktif" class="form-select" required>
                                <option value="" selected disabled>Pilih status</option>
                                <option value="Aktif">Sehat</option>
                                <option value="Non Aktif">Sakit</option>
                            </select>
                        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>

   <style>
  /* Gaya tambahan untuk form */
  .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background-color: #342D7E;
    color: white;
    border-radius: 10px 10px 0 0;
  }

  .card-title {
    margin-bottom: 0;
  }

  .card-body {
    padding: 30px;
  }

  .form-label {
    font-weight: 600;
  }

  .btn-primary {
    background-color: #342D7E;
    border: none;
  }

  .btn-primary:hover {
    background-color: #1E1A4F;
  }

  /* Gaya untuk pesan validasi */
  .invalid-feedback {
    color: red;
    font-size: 0.9em;
  }

  /* Gaya untuk menampilkan input yang tidak valid */
  input:invalid {
    border-color: red;
  }
</style>
@endsection
@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Edit Data</h3>
        </div>
        <div class="card-body">
   <form action="{{ route('pel_update',['id'=>$data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
                        <label for="golongan_id" class="form-label">Kategori</label>
                        <select class="form-select" name="gol_id" required>
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}"
                                    {{ $data->golongan->id == $golongan->id ? 'selected' : '' }}>
                                    {{ $golongan->gol_nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_no" value="{{ $data->pel_no }}">   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_nama" value="{{ $data->pel_nama }}">    
  </div>
  <div class="col-md-4">
                        <label for="user_id" class="form-label">Addopter</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $data->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada Addopter tersedia</option>
                            @endif
                        </select>
                    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Umur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_alamat" value="{{ $data->pel_alamat }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_hp" value="{{ $data->pel_hp }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Berat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_ktp" value="{{ $data->pel_ktp }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Warna</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_seri" value="{{ $data->pel_seri }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipe Makanan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_meteran" value="{{ $data->pel_seri }}">
</div>
<div class="col-md-4">
                        <label for="pel_aktif" class="form-label">Status</label>
                        <select name="pel_aktif" class="form-select" required>
                            <option value="Aktif" {{ $data->pel_aktif == 'Aktif' ? 'selected' : '' }}>Sehat</option>
                            <option value="Non-Aktif" {{ $data->pel_aktif == 'Non-Aktif' ? 'selected' : '' }}>Sakit
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary"
style="background-color: #342D7E;">Submit</button>
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
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
   <form action="{{ route('update',['id'=>$data->id]) }}" method="POST">
    @csrf
    @method('PUT')
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="gol_kode" value="{{ $data->gol_kode }}">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gol_nama" value="{{ $data->gol_nama }}">
    
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
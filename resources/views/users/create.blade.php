@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Formulir</h3>
        </div>
        <div class="card-body">
   <form action="{{route('user_store')}}" method="POST">
    @csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_alamat">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No hp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_hp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_pos">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_role">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_aktif">
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
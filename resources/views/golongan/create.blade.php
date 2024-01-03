@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Formulir</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
              <label for="gol_nama" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="gol_nama" name="gol_nama" required>
              <div class="invalid-feedback">
                Please enter the kategori.
              </div>
            </div>

            <div class="mb-3">
              <label for="gol_kode" class="form-label">Jenis</label>
              <input type="text" class="form-control" id="gol_kode" name="gol_kode" required>
              <div class="invalid-feedback">
                Please enter the jenis.
              </div>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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

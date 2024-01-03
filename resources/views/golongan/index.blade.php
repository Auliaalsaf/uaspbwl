@extends('layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('create') }}" class="btn btn-primary" style="background-color: #342D7E; color: white;">Tambah Data</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                    <tr>
        <th style="width: 10%; text-align: center;">No</th>
        <th style="width: 30%; text-align: center;">Jenis</th>
        <th style="width: 30%; text-align: center;">Kategori</th>
        <th style="width: 30%; text-align: center;">Aksi</th>
    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $d)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $d->gol_kode }}</td>
                                <td>{{ $d->gol_nama }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('golongan.edit', ['id' => $d->id]) }}" class="btn btn-warning me-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('delete', ['id' => $d->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

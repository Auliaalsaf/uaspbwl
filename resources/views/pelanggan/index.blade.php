@extends('layouts.app')
@section('content')
    <div class="card m-4">
    <div class="card-header">
            <h3 class="card-title">Data Teradopsi</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('pel_create') }}" class="btn btn-primary" style="background-color: #342D7E; color: white;">Tambah Data</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                    <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Kategori</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Addopter</th>
        <th style="text-align: center;">Umur</th>
        <th style="text-align: center;">Jenis</th>
        <th style="text-align: center;">Berat</th>
        <th style="text-align: center;">Warna</th>
        <th style="text-align: center;">Tipe Makanan</th>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">Aksi</th>
    </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $d)
                            <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-light' : 'bg-white' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->golongan->gol_nama }}</td>
                                <td>{{ $d->pel_nama }}</td>
                                <td>{{ $d->user->name }}</td>
                                <td>{{ $d->pel_alamat }}</td>
                                <td>{{ $d->pel_hp }}</td>
                                <td>{{ $d->pel_ktp }}</td>
                                <td>{{ $d->pel_seri }}</td>
                                <td>{{ $d->pel_meteran }}</td>
                                <td>{{ $d->pel_aktif }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('pel_edit', ['id' => $d->id]) }}" class="btn btn-warning me-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('pel_delete', ['id' => $d->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

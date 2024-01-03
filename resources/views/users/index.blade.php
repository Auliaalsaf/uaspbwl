@extends('layouts.app')
@section('content')
    <div class="card m-4">
    <div class="card-header">
            <h3 class="card-title">Data Pengadopsi</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('user_create') }}" class="btn btn-primary" style="background-color: #342D7E; color: white;">Tambah Data Pengadopsi</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white">
                    <tr>
    <th style="width: 5%; text-align: center;">No</th>
    <th style="text-align: center;">Email</th>
    <th style="text-align: center;">Nama</th>
    <th style="text-align: center;">Alamat</th>
    <th style="text-align: center;">No.Hp</th>
    <th style="text-align: center;">Pos</th>
    <th style="text-align: center;">Role</th>
    <th style="text-align: center;">Status</th>
    <th style="width: 15%; text-align: center;">Aksi</th>
</tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $index => $d)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->user_alamat }}</td>
                                <td>{{ $d->user_hp }}</td>
                                <td>{{ $d->user_pos }}</td>
                                <td>{{ $d->user_role }}</td>
                                <td>{{ $d->user_aktif }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('user_edit', ['id' => $d->id]) }}" class="btn btn-warning me-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('user_delete', ['id' => $d->id]) }}" method="POST">
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

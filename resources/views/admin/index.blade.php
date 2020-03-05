@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman User</div>
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah User</a>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin->user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $admin) }}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-success">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

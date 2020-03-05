@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman User</div>

                <div class="card-body">
                    <form action="{{ route('admin.update', $admin) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="nama" class="form-control" value="{{ $admin->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $admin->user->email }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

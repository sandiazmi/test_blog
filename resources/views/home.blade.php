@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Admin</div>

                <div class="card-body">
                    @if (auth()->user()->role == 'admin')
                    <a href="{{ route('post.index') }}" class="btn btn-primary btn-md">Post</a>
                    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-md">User</a>
                    @endif

                    @if (auth()->user()->role == 'author')
                    <a href="{{ route('post.index') }}" class="btn btn-primary btn-md">Post</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

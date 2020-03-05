@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Post</div>
                <a href="{{ route('post.create') }}" class="btn btn-primary">Tambah Post</a>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Opsi</th>
                            </tr>
                            <tr>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>
                                    <a href="{{ route('post.edit', $post) }}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-success">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

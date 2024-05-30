@extends('layoutadmin.template')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Music List</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('musics.create') }}" class="btn btn-warning mb-3">Create New Music</a>
       
                <tbody> <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Lagu</th>
                        <th>Level</th>
                        <th>Image</th>
                        <th>Lirik</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                    @foreach ($musics as $music)
                        <tr>
                            <td>{{ $music->id }}</td>
                            <td>{{ $music->nama_musik }}</td>
                            <td>{{ $music->level }}</td>
                            <td>
                                @if ($music->image)
                                    <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">
                                @endif
                            </td>
                            <td>{{ $music->lirik }}</td>
                            <td><a href="{{ $music->link }}" target="_blank">{{ $music->link }}</a></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('musics.show', $music->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('musics.edit', $music->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('musics.destroy', $music->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Resep?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

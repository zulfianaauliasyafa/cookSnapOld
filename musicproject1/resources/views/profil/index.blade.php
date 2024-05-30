@extends('layoutadmin.template')

@section('content')
    <div class="container">
        <h1>Profile List</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Create New Profile</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->nama }}</td>
                        <td>{{ $profile->username }}</td>
                        <td>
                            @if ($profile->foto)
                                <img src="{{ asset($profile->foto) }}" alt="{{ $profile->nama }}" width="50">
                                
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

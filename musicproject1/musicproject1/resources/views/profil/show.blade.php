@extends('layoutadmin.template')

@section('content')
    <div class="container">
        <h1>Profile Detail</h1>

        <div>
            <p><strong>Nama:</strong> {{ $profile->nama }}</p>
            <p><strong>Username:</strong> {{ $profile->username }}</p>
            <p><strong>Foto:</strong></p>
            @if ($profile->foto)
                <img src="{{ asset($profile->foto) }}" alt="{{ $profile->nama }}" width="200">
            @else
                No Image
            @endif
        </div>
    </div>
@endsection

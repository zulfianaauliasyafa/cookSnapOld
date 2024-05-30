@extends('layoutadmin.template')
  
@section('content')

<div class="container mt-5">
    <h1>View Music</h1>

    <div class="form-group">
        <label>Nama Musik:</label>
        <p>{{ $music->nama_musik }}</p>
    </div>
    <div class="form-group">
        <label>Level:</label>
        <p>{{ $music->level }}</p>
    </div>
    <div class="form-group">
        <label>Image:</label>
        @if ($music->image)
            <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="150">
        @endif
    </div>
    <div class="form-group">
        <label>Lirik:</label>
        <p>{{ $music->lirik }}</p>
    </div>
    <div class="form-group">
        <label>Link:</label>
        <p>{{ $music->link }}</p>
    </div>
    <a href="{{ route('musics.index') }}" class="btn btn-primary">Back to List</a>
</div>

@endsection
@extends('layoutadmin.template')
  
@section('content')
<div class="container mt-5">
    <h1>Edit Music</h1>

    <form action="{{ route('musics.update', $music->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="nama_musik" class="col-sm-2 col-form-label">Nama Musik:</label>
            <div class="col-sm-10">
                <input type="text" name="nama_musik" id="nama_musik" class="form-control" value="{{ $music->nama_musik }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="level" class="col-sm-2 col-form-label">Level:</label>
            <div class="col-sm-10">
                <input type="text" name="level" id="level" class="form-control" value="{{ $music->level }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Image:</label>
            <div class="col-sm-10">
                <input type="file" name="image" id="image" class="form-control-file">
                @if ($music->image)
                    <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <label for="lirik" class="col-sm-2 col-form-label">Lirik:</label>
            <div class="col-sm-10">
                <textarea name="lirik" id="lirik" class="form-control" rows="4">{{ $music->lirik }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="link" class="col-sm-2 col-form-label">Link:</label>
            <div class="col-sm-10">
                <input type="text" name="link" id="link" class="form-control" value="{{ $music->link }}">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection

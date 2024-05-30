@extends('layoutadmin.template')
  
@section('content')
<div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-body">
            <h1 class="card-title mb-4">Create Music</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('musics.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="nama_musik" class="col-sm-2 col-form-label">Nama Musik:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_musik" id="nama_musik" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="level" class="col-sm-2 col-form-label">Level:</label>
                    <div class="col-sm-10">
                        <input type="text" name="level" id="level" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" id="image" class="form-control-file">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lirik" class="col-sm-2 col-form-label">Lirik:</label>
                    <div class="col-sm-10">
                        <textarea name="lirik" id="lirik" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="link" class="col-sm-2 col-form-label">Link:</label>
                    <div class="col-sm-10">
                        <input type="text" name="link" id="link" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-warning">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

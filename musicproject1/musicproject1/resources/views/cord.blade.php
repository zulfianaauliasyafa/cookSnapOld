@extends('layout.template')

@section('content')

<main>
    <aside>
        <ul>
            <li><a href="{{ route('gitar') }}">Guitar</a></li>
            <li><a href="{{ route('piano') }}">Piano</a></li>
            <li><a href="{{ route('drum') }}">Drum</a></li>
            <li><a href="{{ route('violin') }}">Violin</a></li>
        </ul>
    </aside>
    <section class="main-content">
        <h1>Find chords for your favorite songs in seconds!</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
        <div class="song-list">
            @foreach ($musics as $music)
                <div class="song-item">
                    @if ($music->image)
                        <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}">
                    @endif
                    <div class="song-info">
                        <h2>{{ $music->nama_musik }}</h2>
                        <p>{{ $music->level }}</p>
                        <button class="play-button" onclick="window.location.href='{{ route('cordview', $music->id) }}'">Play</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header .logo {
        font-size: 24px;
    }

    header nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    header nav ul li {
        margin-left: 20px;
    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    main {
        display: flex;
        height: calc(100vh - 50px);
        background: url('https://c1.wallpaperflare.com/path/461/820/840/music-low-electric-bass-strings-475702149f76526165d83089b5aa5c3b.jpg') no-repeat center center/cover;
        color: #fff;
        padding: 20px;
    }

    aside {
        background-color: rgba(0, 0, 0, 0.5);
        width: 150px;
        padding: 20px;
        border-radius: 10px;
        margin-right: 20px;
    }

    aside ul {
        list-style: none;
        padding: 0;
    }

    aside ul li {
        margin-bottom: 10px;
    }

    aside ul li a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
        background-color: #333;
        border-radius: 5px;
        text-align: center;
    }

    aside ul li a:hover {
        background-color: #ffd700;
        color: #333;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .main-content h1 {
        margin-bottom: 20px;
    }

    .search-bar {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .search-bar input {
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        width: 300px;
    }

    .song-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        width: 100%;
    }

    .song-item {    
        background-color: #333;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
    }

    .song-item img {
        width: 100%;
        border-radius: 10px;
    }
    .logo {
      font-size: 24px;
      color: #ffd700;
  }

    .song-info {
        margin-top: 10px;
    }

    .song-info h2 {
        font-size: 18px;
        margin: 10px 0;
    }

    .song-info p {
        color: #ffd700;
        margin-bottom: 10px;
    }

    .play-button {
        padding: 10px 20px;
        background-color: #ffd700;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
    }
</style>

@endsection

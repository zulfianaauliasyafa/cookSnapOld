@extends('layout.template')

@section('content')


<main>
    <aside>
        <ul>
            <li><a href="#">Guitar</a></li>
            <li><a href="#">Piano</a></li>
            <li><a href="#">Drum</a></li>
            <li><a href="#">Biola</a></li>
        </ul>
    </aside>
    <section class="main-content">
        <div class="song-details">
            @if ($music->image)
            <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">
        @endif
           
            <div class="song-info">
                <h2>{{ $music->nama_musik }}</h2>
                <p>{{ $music->level }}</p>
                <p>5,433,172 views<br>
                Added to favorites 127,600 times</p>
            </div>
        </div>
        <div class="chords-section">
            <h1>Chords {{ $music->nama_musik }}</h1>
            
            <div class="lyrics-and-buttons">
                <div class="lyrics">
                    <p>[Verse 1]<br>

                    <span class="chord"></span>{!! nl2br(e($music->lirik)) !!}<br>
                    
                </div>
                <div class="buttons">
                    <button><a href="{{ $music->link }}">cord lengkap</a></button>
                    <button>Save to PDF</button>
                    <button>View full lyrics</button>
                </div>
            </div>
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
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
    }

    .song-details {
        display: flex;
        margin-bottom: 20px;
    }

    .song-details img {
        width: 150px;
        height: 150px;
        border-radius: 10px;
        margin-right: 20px;
    }

    .song-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .song-info h2 {
        margin: 0;
    }

    .chords-section {
        margin-bottom: 20px;
    }

    .chords-section h1 {
        margin-bottom: 20px;
        text-align: center;
        color: #ffd700;
    }

    .chords {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }

    .chords img {
        width: 60px;
        height: 150px;
    }

    .lyrics-and-buttons {
        display: flex;
        justify-content: space-between;
    }

    .lyrics {
        background-color: rgba(255, 255, 255, 0.2);
        padding: 5px;
        border-radius: 10px;
        flex: 1;
    }

    .chord {
        color: #ffd700;
        font-weight: bold;
    }

    .buttons {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-left: 20px;
    }

    .buttons button {
        background-color: #ffd700;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .buttons button:hover {
        background-color: #fff;
        color: #333;
    }
    </style>
@endsection
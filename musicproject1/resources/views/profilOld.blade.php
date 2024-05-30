
<body>
    @extends('layout.template')
  
    @section('content')
    <main>
        <div class="profile-container">
            <h1>MusicMe</h1>
            <div class="profile-card">
                <img src="images/guitar.png" alt="User" class="profile-icon">
                <div class="profile-info">
                    <p><strong>USERNAME:</strong></p>
                    <p>{{$username}}</p>
                    <p><strong>PASSWORD:</strong></p>
                    <p>*****</p>
                    <a href="{{ route('password') }}">Change Password</a>
                </div>
            </div>
        </div>
    </main>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    position: relative;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 50px;
    }

    header .logo {
        font-size: 24px;
        color: #ffeb3b;
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
        justify-content: center;
        align-items: center;
        height: calc(100vh - 50px);
        background: url('https://c1.wallpaperflare.com/path/461/820/840/music-low-electric-bass-strings-475702149f76526165d83089b5aa5c3b.jpg') no-repeat center center/cover;
        position: relative;
    }

    main::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.2);
        background-image: url('https://www.transparenttextures.com/patterns/noise.png');
        pointer-events: none;
    }

    .profile-container {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 40px;
        border-radius: 10px;
        max-width: 600px;
        margin: 0 20px;
        z-index: 1;
        position: relative;
        color: #ffeb3b;
    }

    .profile-container h1 {
        color: #ffeb3b;
        margin-bottom: 20px;
    }

    .profile-card {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .profile-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .profile-info {
        text-align: left;
        color: #fff;
    }

    .profile-info p {
        margin: 10px 0;
    }

    .profile-info a {
        color: #ffeb3b;
        text-decoration: none;
        margin-left: 10px;
    }
    </style>
    @endsection
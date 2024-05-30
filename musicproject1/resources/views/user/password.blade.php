<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicMe - Change Password</title>
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
            position: relative;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        header nav ul li:hover .dropdown-content {
            display: block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #444;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 110px);
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

        .change-password-container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
            z-index: 1;
            position: relative;
            color: #ffeb3b;
        }

        .change-password-container h2 {
            color: #ffeb3b;
            margin-bottom: 20px;
        }

        .change-password-container form {
            display: flex;
            flex-direction: column;
        }

        .change-password-container label {
            margin-bottom: 10px;
            color: #ffeb3b;
            text-align: left;
        }

        .change-password-container input {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .change-password-container button,
        .change-password-container a {
            padding: 10px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            width: 100%;
            box-sizing: border-box;
        }

        .change-password-container button {
            background-color: #333;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .change-password-container a {
            background-color: #ff0000;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">MusicMe</div>
    <nav>
        <ul>
            <li>
                <a href="user.html">User</a>
                <div class="dropdown-content">
                    <a href="profile.html">Profile</a>
                    <a href="admin.html">Admin</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<main>
    <div class="change-password-container">
        <h2>Change Password</h2>
        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Form untuk mengubah password -->
        <form action="{{ route('password.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="old_password" required />
            </div>
            <div class="mb-3">
                <label>New Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password" required />
            </div>
            <div class="mb-3">
                <label>New Password Confirmation <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password_confirmation" required />
            </div>
            <div class="mb-3">
                <button type="submit">Change</button>
                <a href="{{('home') }}">Back</a>
            </div>
        </form>
    </div>
</main>

</body>
</html>

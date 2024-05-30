@extends('layout.template')
  
@section('content')
<main>
  <div class="content">
      <h1>Welcome to MusicMe</h1>
      <p>MusicMe adalah platform untuk belajar dan berbagi tentang musik. Kami menyediakan berbagai kursus, chord, dan informasi seputar dunia musik.</p>
      <button class="next-learning" onclick="window.location.href='{{ route('course') }}'">Next Learning</button>
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
      padding: 10px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
  }

  .logo {
      font-size: 24px;
      color: #ffd700;
  }

  nav ul {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
  }

  nav ul li {
      margin-left: 20px;
      position: relative;
  }

  nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 16px;
  }

  nav ul li:hover .dropdown-content {
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
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: calc(100vh - 120px);
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

  .content {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border-radius: 10px;
      max-width: 800px;
      margin: 20px;
      z-index: 1;
      position: relative;
      color: #fff;
  }

  .content h1 {
      margin-bottom: 20px;
  }

  .next-learning {
      padding: 10px 20px;
      background-color: #ffd700;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      color: #333;
      font-size: 16px;
  }

  .next-learning:hover {
      background-color: #e5c100;
  }

  footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      width: 100%;
  }
</style>
@endsection

@extends('layout.template')
  
@section('content')
      

<main>
  <div class="content">
      <h1>Choose your Instrument!</h1>
      <div class="instruments">
          <div class="instrument">
              <img src="images/guitar.png" alt="Guitar">
              <button onclick="window.location.href='{{route('gitar')}}'">Guitar</button>
          </div>
          <div class="instrument">
              <img src="images/piano.jpg" alt="Piano">
              <button onclick="window.location.href='{{route('piano')}}'">Piano</button>
          </div>
          <div class="instrument">
              <img src="images/violin.jpg" alt="Drum">
              <button onclick="window.location.href='{{route('violin')}}'">Violin</button>
          </div>
          <div class="instrument">
              <img src="images/drum.jpeg" alt="Violin">
              <button onclick="window.location.href='{{route('drum')}}'">Drum</button>
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
  .logo {
      font-size: 24px;
      color: #ffd700;
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
      background: rgba(255, 255, 255, 0.2); /* Adjust opacity for white spots */
      background-image: url('https://www.transparenttextures.com/patterns/noise.png'); /* White noise effect */
      pointer-events: none; /* So that clicks go through the overlay */
  }

  .content {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5); /* Transparansi background */
      padding: 20px;
      border-radius: 10px;
      max-width: 800px;
      margin: 0 20px;
      z-index: 1; /* Ensure content is above the overlay */
      position: relative;
  }

  .content h1 {
      color: #fff;
      margin-bottom: 20px;
  }

  .instruments {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
  }

  .instrument {
      margin: 10px;
      text-align: center;
  }

  .instrument img {
      width: 150px;
      height: 150px;
      border-radius: 10px;
      border: 2px solid #ffd700;
  }

  .instrument button {
      display: block;
      margin: 10px auto 0;
      padding: 10px 20px;
      background-color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
  }

  .instrument button:hover {
      background-color: #ffd700;
  }
</style>

@endsection
        
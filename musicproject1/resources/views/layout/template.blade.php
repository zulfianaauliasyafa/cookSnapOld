<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookSnap</title>
   <style>
    body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    header {
        background: #fff;
        padding: 20px 0;
        border-bottom: 1px solid #ddd;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 100%;
        margin: 0 auto;
        padding: 10px 20px; /* Ukuran padding dikurangi */
        background-color: #fff;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000; /* Pastikan header berada di atas konten lainnya */
    }

    .navbar .logo img {
        width: 50px;
    }

    .navbar .profile img {
        width: 35px;
        border-radius: 50%;
    }

    .navbar nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .navbar nav ul li {
        margin-left: 20px; /* Margin antar item */
    }

    .navbar nav ul li a {
        text-decoration: none;
        color: #000;
        font-size: 16px; /* Ukuran font link */
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .navbar nav ul li a:hover {
        color: #f79e38;
    }

    .navbar nav ul li a:active {
        color: #f79e38!important;
    }

    .active-nav {
        color: #f79e38!important;
    }

    /* Media query untuk tampilan yang lebih kecil */
    @media screen and (max-width: 600px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
            padding: 5px 10px; /* Ukuran padding dikurangi lebih lanjut */
        }

        .navbar .logo img {
            width: 40px; /* Ukuran logo dikurangi */
        }

        .navbar nav ul {
            flex-direction: column;
            width: 100%;
        }

        .navbar nav ul li {
            margin: 5px 0; /* Margin antar item dikurangi */
        }

        .navbar nav ul li a {
            font-size: 14px; /* Ukuran font link dikurangi */
        }

        .navbar .profile img {
            width: 35px; /* Ukuran gambar profil dikurangi */
        }
    }

    
footer {
    background: #fff;
    color: #333;
    padding: 20px 0;
    border-top: 1px solid #ddd;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-contact, .footer-nav, .footer-social {
    flex: 1;
    text-align: center;
}

.footer-contact {
    text-align: left;
}

.footer-phone {
    color: #f79e38;
    font-weight: bold;
}

.footer-contact p {
    margin: 0;
    line-height: 1.5;
}

.footer-nav {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-nav img.footer-logo {
    width: 40px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 10px;
    background-color: #f79e38;
    border-radius: 50%;
}

.footer-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.footer-nav ul li {
    display: inline-block;
}

.footer-nav ul li a {
    text-decoration: none;
    color: #888;
    font-weight: bold;
}

.footer-social {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.footer-social a {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f1f1f1;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background 0.3s ease;
}

.footer-social a:hover {
    background: #f79e38;
}

.footer-social a img {
    width: 20px;
    height: 20px;
}

.footer-brand {
    text-align: center;
}

.footer-brand p {
    margin: 0;
    font-weight: bold;
    color: #333;
}


   </style>


  </head>
  <body>

  <header>
        <div class="navbar">
            <div class="logo">
            <img src="img/logo.png" alt="CookSnap Logo">
            </div>
            <nav>
                <ul>
                    <li><a class="active-nav" href="{{('home')}}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{route('cord')}}">Resep</a></li>
                    <li><a href="#">Contact</a></li>
                    
                </ul>
            </nav>
            <div class="profile">
            <a href="{{route('profil')}}"><img src="img/profile.png" alt="Profile"></a>
            <li><a style="color:black" href="">{{$username}}</a></li>
            </div>
        </div>
    </header>
    
    
     <!-- <header>
      <div class="logo">
        MusicMe
        <hr>
        <div style="font-size: 12px; color: #ffff;">
            {{$username}}
        </div>
    </div>
   
     
        <nav>
            <ul>
                <li><a href="{{('home')}}">Homepage</a></li>
                <li><a href="{{route('course')}}">Course</a></li>
                <li><a href="{{route('cord')}}">Chord</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('profil')}}">Profil</a></li>
                {{-- <li><a href="">{{$username}}</a></li> --}}
              
                <li>
                 
                  
                  <a href="{{route('logout')}}">logout</a>
                  
                </li>
            </ul>
        </nav>
    </header> -->

   
      <!-- Page content -->
    @yield('content')

    <footer>
    <footer>
    <div class="footer-container">
        <div class="footer-contact">
            <p class="footer-phone">+62 1234 5678 9101</p>
            <p>Perumahan Sukun Pondok Indah Blok L No.13 RT 6/ RW 7 Kelurahan Bandungrejosari Kecamatan Sukun kode pos 65484 Jakarta</p>
        </div>
        <div class="footer-nav">
              <img src="img/logo.png" alt="Logo" class="footer-logo">
              <ul>
                <li><a href="#">Breakfast</a></li>
                <li><a href="#">Lunch</a></li>
                <li><a href="#">Dinner</a></li>
                <li><a href="#">Dessert</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <a href="#"><img src="img/facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="img/twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="img/google-icon.png" alt="Google"></a>
        </div>
    </div>
    <div class="footer-brand">
    </div>
</footer>
    </footer>




  </body>
  </html>
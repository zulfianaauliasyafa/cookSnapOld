<!-- resources/views/contact.blade.php -->
@extends('layout.template')

@section('content')
<main>
    <div class="content">
        <h1>have any problem? contact us!</h1>
        <div class="contact-info">
            <div class="contact-item">
                <img src="images/icon_wa.png" alt="WhatsApp" class="contact-icon">
                <p>087777230724</p>
            </div>
            <div class="contact-item">
                <img src="images/icon_ig.png" alt="Instagram" class="contact-icon">
                <p>@Musicme.id</p>
            </div>
            <p>Thank you!</p>
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
    color: #ffd700;
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

.content {
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 20px;
    z-index: 1;
    position: relative;
}

.content h1 {
    color: #fff;
    margin-bottom: 20px;
}

.contact-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #fff;
}

.contact-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px 0;
}

.contact-icon {
    width: 48px;
    height: 48px;
    margin-bottom: 10px;
}

.contact-item p {
    margin: 0;
}

header nav ul li:hover .dropdown-content {
        display: block; /* Show the dropdown on hover */
    }
.dropdown-content {
        display: none;
        position: absolute;
        background-color: #333;
        min-width: 160px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 5px; /* Rounded corners */
    }

    .dropdown-content a {
        color: #fff;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        border-bottom: 1px solid #444; /* Divider */
    }

    .dropdown-content a:hover {
        background-color: #575757;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: relative; /* Ensure it is at the bottom of the content */
        width: 100%;
    }
</style>
@endsection

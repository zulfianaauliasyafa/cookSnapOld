@extends('layoutadmin.template')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Resep List</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('musics.create') }}" class="btn btn-primary">Create New Resep</a>
       
                <tbody> <div class="recipe-cards">
                
                    @foreach ($musics as $music)

                    <a href="{{ route('musics.show', $music->id) }}">

                    <div class="card" >
                    @if ($music->image)
                                    <div class="image-wraper">
                                    <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">

                                    </div>
                                @endif                   
                                 <h3>{{ $music->nama_musik }}</h3>
                    <p>{{ $music->lirik }}</p>
                    <span class="likes">{{ $music->level }}</span>
</a>
                </div>
                
               
                        <!-- <tr>
                            <td>{{ $music->id }}</td>
                            <td>{{ $music->nama_musik }}</td>
                            <td>{{ $music->level }}</td>
                            <td>
                                @if ($music->image)
                                    <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">
                                @endif
                            </td>
                            <td>{{ $music->lirik }}</td>
                            <td><a href="{{ $music->link }}" target="_blank">{{ $music->link }}</a></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('musics.show', $music->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('musics.edit', $music->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('musics.destroy', $music->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this music?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr> -->
                    @endforeach
                </tbody>
         
        </div>
    </div>


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
    color: #f79e38;
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

.hero {
    background: url('../img/hero-image.jpg') no-repeat center center/cover;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3em;
    margin: 0;
    color: #f90;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero p {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.2em;
    margin-top: 10px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}


.search-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px 20px;
    background: #f9f9f9;
}

.search-section h2 {
    font-size: 24px;
    margin: 0;
    margin-bottom: 8px;
}

.search-section p {
    font-size: 18px;
    color: #f90;
    margin-top: 0;
}

.search-container {
    display: flex;
    align-items: center;
    margin-top: 20px;
    border: 2px solid #ddd;
    border-radius: 25px;
    overflow: hidden;
    background-color: #fff;
    width: 90%;
    max-width: 600px;
    padding: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-container input[type="text"] {
    padding: 15px 20px;
    width: 100%;
    border: none;
    font-size: 18px;
    color: #333;
    background-color: #fff;
    outline: none;
    border-radius: 25px;
}

.search-container input[type="text"]::placeholder {
    color: #aaa;
}

.search-container button {
    padding: 15px 20px;
    background-color: #f90;
    border: none;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
    outline: none;
    border-radius: 25px;
    margin-left: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-container button:hover {
    background-color: #e68000;
}

.recipes {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.recipes h2 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: left;
}

.recipe-cards {
    display: flex;
    justify-content:center;
    flex-wrap: wrap;
    gap: 20px;
    }

.image-wraper{
    display:flex;
    
    height:50%;

}

.recipe-cards .card {
    width:25%;
    height:400px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    /* flex: 1 1 calc(33% - 20px); */
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    margin-bottom: 50px;
}

.recipe-cards .card:hover {
    background-color: #e68000;
}

.recipe-cards .card img {
    width: 100%;
    height: auto;
}

.recipe-cards .card h3 {
    font-size: 18px;
    margin: 10px;
}

.recipe-cards .card p {
    font-size: 14px;
    margin: 10px;
    flex-grow: 1;
}

.recipe-cards .card .likes {
    font-size: 14px;
    color: #f90;
    margin: 10px;
    text-align: right;
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

/PROFILE PAGE/

body {
    font-family: 'Montserrat', sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    width: 70%;
    margin: 50px auto;
    padding: 20px;
    background-color: #FFF5E1;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #F90;
    font-weight: bold;
}

.profile-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
}

.profile-header .profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border-color: #f90;
    background-color: #b3aaaa;
    background-image: url("../img/camera.png");
    background-size: 55px 55px;
    background-repeat: no-repeat;
    background-position: center;
    
}

.profile-header .info {
    flex-grow: 1;
    margin-left: 20px;
}

.profile-header .info h2 {
    margin: 0;
    font-size: 24px;
}

.profile-header .info p {
    margin: 5px 0 0;
    color: #777;
}

.edit-btn, .upload-btn, .save-btn, .delete-btn{
    background-color: #F90;
    color: #FFF;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    display: inline-block;
    margin-top: 20px;
}

.profile-info {
    margin-top: 20px;
}

.profile-info .row {
    display: flex;
    margin-bottom: 15px;
}

.profile-info .row .col {
    flex: 1;
    padding: 0 10px;
}

.profile-info label {
    display: block;
    margin-bottom: 5px;
    color: #F90;
}

.profile-info input, .profile-info select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 25px;
    box-sizing: border-box;
    background-color: white;
}

.profile-info input[disabled], .profile-info select[disabled], .profile-info .upload-btn[disabled] {
    background-color: #f9f9f9;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 15px;
}

.col {
    flex: 1;
    min-width: 45%;
    margin-right: 5%;
    border-radius: 60px;
}

.col:last-child {
    margin-right: 0;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #ff6600;
}

input[type="text"], input[type="date"], select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 60px;
    box-sizing: border-box;
}
.buttons {
    display: flex;
    justify-content: flex-start;
    align-content: space-between !important;
}
.buttons button {
    padding: 10px 15px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-radius: 60px;
    cursor: pointer;
}
.buttons button:disabled {
    background-color: #cccccc;
}

.save-btn{
    margin-left: 1%;
}

.delete-btn{
    margin-left: 1%;
    </style>
@endsection

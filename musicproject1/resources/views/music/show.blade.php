@extends('layoutadmin.template')
  
@section('content')

<div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h1>{{ $music->nama_musik }}</h1>
    <p>Tutorial telah direview oleh tim CookSnap</p>
  </div>
</div>

<div class="container mt-5">


<div class="home">
        <section>
            <div class="content container">
                <h1>Deskripsi</h1>
                <br>
                <p>{{ $music->lirik }}</p>
                <br>
                <p><span class="first-word">Resep dari</span> <span class="second-word">Sandy Jon</span>
                <br>
                <div class="recipe card">
                    <div class="wrapper">
                        <h2>Kesulitan</h2>
                        <p>{{ $music->level }}</p>
                       
                    </div>
                </div>
                <br>
                <div class="recipe card">
                    <h2>Tahapan</h2>
                    <p>{{ $music->link }}</p>
                    
                </div>
            </div>  
            <a href="{{ route('musics.index') }}" class="btn btn-primary">Back to List</a> 
            <a href="{{ route('musics.edit', $music->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('musics.destroy', $music->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this resep?')">Delete</button>
                                    </form>

</section>

    <!-- <h1>View Music</h1>

    <div class="form-group">
        <label>Nama Musik:</label>
        <p>{{ $music->nama_musik }}</p>
    </div>
    <div class="form-group">
        <label>Level:</label>
        <p>{{ $music->level }}</p>
    </div>
    <div class="form-group">
        <label>Image:</label>
        @if ($music->image)
            <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="150">
        @endif
    </div>
    <div class="form-group">
        <label>Lirik:</label>
        <p>{{ $music->lirik }}</p>
    </div>
    <div class="form-group">
        <label>Link:</label>
        <p>{{ $music->link }}</p>
    </div>
    <a href="{{ route('musics.index') }}" class="btn btn-primary">Back to List</a> -->
</div>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

.all-content {
    background: #fff;
}


.navbar {
    position:fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color: #fff;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#logo img {
    margin-bottom: 15px;
    width: 50px;
    border-radius: 50%;
}

.navbar-nav {
    text-align: center;
}

.nav-link {
    color: black;
    font-weight: bold;
    margin-left: 15px;
    transition: 0.5s ease;
}

.nav-link:hover {
    color: #FD8F13;
}

.icons {
    margin-left: 30px;
}

.icons img {
    margin-left: 40px;
}
/* <img src="search.png" alt="" width="25">
                    <img src="user.png" alt="" width="25"> */
.jumbotron {
    background: url('{{ asset($music->image) }}') no-repeat center center;
    background-size: cover;
    color: white;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: left;
}

.jumbotron h1, .jumbotron p {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin: 0;
}

/* .navbar-secondary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    padding: 10px 20px;
    background-color: #ffff; 
    margin-top: 20px; 
    border-bottom: 1px solid #ddd; 
}
.navbar-secondary ul.navbar-nav {
    display: flex;
    align-items: center;
} */

/* .navbar-secondary .nav-item {
    margin-left: 20px;
}

.navbar-secondary .nav-link {
    color: #000;
    font-size: 16px;
    transition: color 0.3s ease, background-color 0.3s ease;
    text-decoration: none;
}
.navbar-secondary .nav-link:hover,
.navbar-secondary .nav-link:active {
    color: #f79e38;
} */

.float-end {
    background-color: #FD8F13;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-right: 20px;
    cursor: pointer;
    border-radius: 8px;
} 

section {
    padding: 20px;
}

h2 {
    color: #333;
}
.first-word {
    color: black;
}
.second-word {
    color: orange;
    font-weight: bold;
}
.recipe-card {
        background-color: #fff;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan tanpa border */
        padding: 20px;
        margin-bottom: 20px;
        border: none; /* Menghilangkan border */
}

.recipe-card h3 {
color: #0000;
}
.recipe-card p {
color: #0000;
}
/* .wrapper {
display: flex;
justify-content: center;
/* height: 100vh; */

.recipe-card ul {
list-style-type: disc; 
padding-left: 40px;
}

footer {
    background: #ffff;
    color: #333;
    padding: 20px 0;
    border-top: 1px solid #ddd;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
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
    width: 50px; 
    height: auto; 
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
    padding: 10px 0;
    margin-top: 20px;
}

.footer-brand p {
    margin: 0;
    font-weight: bold;
    color: #333;
}
</style>

@endsection
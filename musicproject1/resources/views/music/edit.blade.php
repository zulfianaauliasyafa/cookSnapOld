@extends('layoutadmin.template')
  
@section('content')
<div class="container-fluid">



            <div class="container">
                <h1>Edit Resep</h1>
            </div>
            </div>

            <form action="{{ route('musics.update', $music->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class ="jangan-col">
            <label for="recipe-name"></label>
            <h2 class= "judul">Judul</h2>
            <input type="text" name="nama_musik" class="first-input" placeholder = "Buat nama makanan kamu" value="{{ $music->nama_musik }}">

            <label for="description"></label>
            <h2 class= "judul">Deskripsi</h2>
            <input type="text" name="lirik" class="first-input" id= "desc" placeholder = "Ceritakan tentang makanan yang ingin kamu bagikan " value="{{ $music->lirik }}">

            <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Image:</label>
            <div class="col-sm-10">
                <input type="file" name="image" id="image" class="form-control-file">
                @if ($music->image)
                    <img src="{{ asset($music->image) }}" alt="{{ $music->nama_musik }}" width="50">
                @endif
            </div>
        </div>
            <h2 class= "judul">Tahapan</h2>
            <div class="input-group">
                <input type="text" class= "first-input" name="link" value="{{ $music->link }}">
                
            </div>

            <h2 class= "judul">Kesulitan</h2>
            <div class="input-group">
            <input type="text" class= "first-input" name="level" value="{{ $music->level }}" >
                
            </div>

        </div>
            <div class = "serah">
                <button type="submit" class="upload-button">Update</button>
            </div>
            </form>
      
</div>

@endsection

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

.jangan-col{
    width: 50%;
}
/* <img src="search.png" alt="" width="25">
                    <img src="user.png" alt="" width="25"> */
.form {
    background: #ffff;
    color: #ffff;
    text-align: center;
    padding: 40px 20px;
    max-width: 1200px;
    width : 90%;
    margin-left: auto;
    margin-right: auto;
}

.form h1 { 
    color: #FD8F13;
    font-weight: bold;
}

.form p {
    color : orange;
}
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin: 10px 0 5px;
}

.first-input {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;  
    border-radius: 4px;
    max-width: 900px;
    background-color: #f9f9f9; 
    margin-left : auto !important;
    margin-right: auto !important;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    max-width: 900px;
    margin-left : center;
}

input[type="number"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    max-width: 400px;
}

.section {
    margin-bottom: 20px;
}

.file {
    margin-top: 20px;
    margin-bottom: 20px;
}

.input-group {
    display: flex;
    flex-direction: column;
}

.input-group input[type="text"] {
    flex: 1;
    margin-bottom: 10px;
    max-width: 900px;
}

.input-group input[type="file"] {
    margin-top: 10px;
    margin-bottom: 20px;
}

.add-button {
    margin-top: 10px;
    padding: 8px 12px;
    background-color: #ff6600;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    align-self: flex-start;
    margin-left: auto;
    margin-right: auto;
}

.add-button:hover {
    background-color: #e55b00;
}

.upload-button, .draft-button {
    padding: 10px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    justify-content: space-between;
}

.upload-button {
    background-color: #ff6600;
    color: #fff;
}

.upload-button:hover {
    background-color: #e55b00;
}

.draft-button {
    background-color: #ccc;
    color: #000;
}

.draft-button:hover {
    background-color: #bbb;
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

.serah {
    display: flex;
    justify-content: space-between;
    width: 52.5% !important;
}

.judul{
    margin-left: auto !important;
    margin-right: auto !important;
}

#desc{
    margin-bottom: 20px;
}
</style>


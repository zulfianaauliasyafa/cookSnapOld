
@extends('layout.template')
  
@section('content')
    


<main>
<div class="container">
        <div class="profile-header">
            <div class="info">
                <h2>{{ $username }}</h2>
                <p>*************</p>
                <a href="{{ route('password') }}">Change Password</a>

            </div>
            <img src="img/profile.png" class="profile-pic">
        </div>

        


</main>



<style>

main{

    margin-top:20%;
}
    
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
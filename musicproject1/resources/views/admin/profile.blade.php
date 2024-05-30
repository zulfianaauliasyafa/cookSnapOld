@extends('layoutadmin.template')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-container">
                    <h1>MusicMe</h1>
                    <div class="profile-card">
                        <i class="fas fa-guitar profile-icon"></i>
                        <div class="profile-info">
                            <p><strong>USERNAME:</strong></p>
                            <p>{{ $username }}</p>
                            <p><strong>PASSWORD:</strong></p>
                            <p>*****</p>
                            <a href="{{ route('password') }}">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .profile-container {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 40px;
        border-radius: 10px;
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
        font-size: 80px;
        margin-right: 20px;
        color: #ffeb3b;
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

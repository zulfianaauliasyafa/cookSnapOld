<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="CookSnap Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Recipe</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="profile">
            <a href="#"><img src="{{ asset('img/profile.png') }}" alt="Profile"></a>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="profile-header">
            <div class="info">
                <h2>{{ $user->username }}</h2>
                <p>{{ $user->email }}</p>
            </div>
            <img src="{{ $user->profile_pic }}" class="profile-pic">
        </div>

        <form id="edit-form" class="profile-info" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" value="{{ $user->username }}" disabled required>
                </div>
            <div class="row" id="profile-pic-row" style="display:none;">
                <div class="col">
                    <label for="profile_pic">Profile Picture</label>
                    <input type="file" name="profile_pic" id="profile_pic" class="upload-btn" disabled>
                </div>
            </div>
            <div class="buttons">
                <button type="button" class="edit-btn" onclick="enableEdit()">Edit</button>
                <button type="submit" class="save-btn" style="display:none;">Simpan Perubahan</button>
                <button type="button" class="delete-btn" style="display:none;" onclick="deleteData()">Delete</button>
            </div>
        </form>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-contact">
                <p class="footer-phone">+62 1234 5678 9101</p>
                <p>Perumahan Sukun Pondok Indah Blok L No.13 RT 6/ RW 7 Kelurahan Bandungrejosari Kecamatan Sukun kode pos 65484 Jakarta</p>
            </div>
            <div class="footer-nav">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="footer-logo">
                <ul>
                    <li><a href="#">Breakfast</a></li>
                    <li><a href="#">Lunch</a></li>
                    <li><a href="#">Dinner</a></li>
                    <li><a href="#">Dessert</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/twitter-icon.png') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ asset('img/google-icon.png') }}" alt="Google"></a>
            </div>
        </div>
    </footer>

    <script>
        function enableEdit() {
            const formElements = document.querySelectorAll('#edit-form input, #edit-form select');
            formElements.forEach(element => element.disabled = false);
            document.querySelector('.save-btn').style.display = 'inline-block';
            document.querySelector('.delete-btn').style.display = 'inline-block';
            document.getElementById('profile-pic-row').style.display = 'block';
        }

        function deleteData() {
            const formElements = document.querySelectorAll('#edit-form input, #edit-form select');
            formElements.forEach(element => {
                if (element.type === 'text' || element.tagName === 'SELECT') {
                    element.value = '';
                }
            });
            document.getElementById('profile_pic').value = '';
        }
    </script>

    <script>
        $(function() {
            $("#dob").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</body>
</html>
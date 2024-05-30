<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookSnap</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.css">
    <!-- css -->
    <link rel="stylesheet" href="css/styleLogin.css">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #FD8F13;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style> -->
</head>
<body>
<div class="container containerform">

            <div class="form" id="inputForm">
                <h1>Register to CookSnap<br></h1>
                <form action="{{ route('register.action') }}" method="post">
                @csrf
               
                    <div class="flex-column">
                        <label for="name">name</label>
                        <input type="text" class="inputForm" name="name" id="username" placeholder="Enter Your username">
                                        @if ($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    </div>

                    <div class="flex-column">
                        <label for="">Username</label>
                        <input type="text" class="inputForm" name="username" id="username" placeholder="Enter Your username">
                        @if ($errors->has('username'))
        <div class="text-danger">
            {{ $errors->first('username') }}
        </div>
        @endif
                    </div>

                    <div class="flex-column">
                        <label for="">Password</label>
                        <input type="password" class="inputForm" name="password" id="password" placeholder="Enter Your Password">
                        @if ($errors->has('password'))
        <div class="text-danger">
            {{ $errors->first('password') }}
        </div>
    @endif
                    </div>

                    <div class="flex-column">
                        <label for="password_cofirm">Password Confirmation</label>
                        <input type="password" class="inputForm" name="password_confirm" id="password" placeholder="Enter Your Password Confirmation" required>
                        @if ($errors->has('password_confirm'))
        <div class="text-danger">
            {{ $errors->first('password_confirm') }}
        </div>
    @endif
                    </div>

                  <div class="row">
                                <button type="submit" name="submit" class="button-submit" id="buttonSubmit">Register</button>
                                <!-- <input type="submit" name="" id="" value="submit"> -->
                    </div>

                    <div class="row">
                                <p class="text-center">Have an account? <a href="{{('/')}}"><span class="span">Login</span></a></p>
                                
                    </div>
                    
                    
                </form>
</body>
</html>
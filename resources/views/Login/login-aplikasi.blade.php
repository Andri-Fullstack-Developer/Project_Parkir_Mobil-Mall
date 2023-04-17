<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Petuagas Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('Dasboard/img/admin.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('login/css/login.css') }}">
    <style>
        button[type=submit] {
            background: none;
            border: none;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        @if (session('error'))
            <div class="alert text-white">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('postlogin') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <button type="submit"> <a>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </a></button>
        </form>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Admin || Petugas keluar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="{{ asset('Dasboard/img/P.jpg') }}" type="image/x-icon">
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="{{ asset('Masuk/css/masuk.css') }}">
    <style>
     
    </style>
</head>

<body>
    <!-- main -->
    <div class="line-hight main-w3layouts wrapper">
        <h1>Selamat Datang Parkir Keluar</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="/Petugas_Keluar" method="post">
                    {{ csrf_field() }}
                    @if (session('success1'))
                        <div class="alert alert-success">
                            {{ session('success1') }}
                        </div>
                    @endif
                    <select name="plat" class="text text-selc" required>
                        <option selected disabled value="">Pilih Plat</option>
                        @foreach ($data as $p)
                            @if ($p->status === 'masuk')
                                <option value="{{ $p->plat }}">{{ $p->plat }}</option>
                            @endif
                        @endforeach
                    </select>

                    <button type="submit" class="btn-car">Delete</button>

                </form>
            </div>
        </div>

        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    <!-- copyright -->
    <footer class="text-white ">
        <p>INFERNO Copyright &copy; 2023 Inferno - All rights reserved || Designed By: 4ndr1</p>
    </footer>

    <!-- //copyright -->

    <script src="{{ asset('Masuk/js/masuk.js') }}"></script>
</body>

</html>

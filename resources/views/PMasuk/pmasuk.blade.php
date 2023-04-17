<!DOCTYPE html>
<html>

<head>
    <title>Admin || Petugas Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="{{ asset('Dasboard/img/P.jpg') }}" type="image/x-icon">
    <!-- //Custom Theme files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="{{ asset('Masuk/css/masuk.css') }}">
    <style>
        input[type=text]{
            width: 100%;
        }
        button[type=submit] {
            background: none;
            border: none;
        }
    </style>
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Selamat Datang Parkir Masuk</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('simpan') }}" method="post">
                    {{ csrf_field() }}
                    @if (session('success1'))
                        <div class="alert alert-success">
                            {{ session('success1') }}
                        </div>
                    @endif
                    <select name="mall" class="text text-selc" required>
                        <option selected disabled value="">Pilih Mall 🗼</option>
                        <option value="Plazza Marina">Plazza Marina</option>
                        <option value="Plazza Dellta">Plazza Dellta</option>
                        <option value="Plazza Royal">Plazza Royal</option>
                    </select>
                    <input name="plat" class="text" type="text" placeholder="Masukan Nomer Plat" required>

                    <select name="gedung" class="text text-selc" required>
                        <option selected disabled value value="">Gedung</option>
                        <option value="A">' A '</option>
                        <option value="B">' B '</option>
                        <option value="C">' C '</option>
                    </select>

                    <select name="lantai" type="number" class="text text-selc" required>
                        <option selected disabled value="">Lantai 1-7</option>
                        <!-- Loop untuk menghasilkan opsi angka 1-7 -->
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>

                    {{-- <button type="submit" class="btn-car" d>
                        CETAK KARCIS
                    </button>

                    if()
                    @include('PMasuk.model') --}}
                    <button type="submit" class="btn-car">CETAK KARCIS</button>

                </form>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>INFERNO Copyright &copy; 2023 Inferno - All rights reserved || Designed By: 4ndr1</p>
        </div>

        <!-- //copyright -->
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

    <script src="{{ asset('Masuk/js/masuk.js') }}"></script>
</body>

</html>

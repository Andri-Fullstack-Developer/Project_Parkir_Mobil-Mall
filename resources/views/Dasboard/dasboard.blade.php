<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Panel Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="{{ asset('Dasboard/img/admin.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Dasboard/css/bootstrapmin.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Dasboard/css/style.css') }}" rel="stylesheet">

    <!-- Css Contend --->
    <link rel="stylesheet" href="{{ asset('Dasboard/css/conten.css') }}">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Parkir</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('Dasboard/img/admin.png') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ $nama }}</h6>
                        <span>{{ $username }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#Masuk" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Data Masuk</a>

                    <a href="#Keluar" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Data Keluar</a>
                    

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('Dasboard/img/admin.png') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ $nama }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">{{ $petugas }}</a>
                            <a href="#" class="dropdown-item">{{ $username }}</a>
                            <a href="#" class="dropdown-item">{{ $email }}</a>
                            <a href="{{ route('logout') }}" class="dropdown-item line mt-2">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            @section('KetData')
                @include('Dasboard.Data.KetData')
            @show

            <section id="Masuk">
                @section('DataMasuk')
                    @include('Dasboard.Data.DataMasuk')
                @show
            </section>

            <section id="Keluar">
                @section('DataKeluar')
                    @include('Dasboard.Data.DataKeluar')
                @show
            </section>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">4ndri Devoloper</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">HTML diginer</a>
                            <br>Distributed By: <a href="" target="_blank">4ndr1</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Dasboard/js/main.js') }}"></script>
</body>

</html>

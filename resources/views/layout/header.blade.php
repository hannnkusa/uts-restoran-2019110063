<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Landing Page | Resto - Restaurant Handy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../vendor/aos/aos.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../css/main.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Category 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Category</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Category 1</a></li>
                                    <li><a href="#">Deep Category 2</a></li>
                                    <li><a href="#">Deep Category 3</a></li>
                                    <li><a href="#">Deep Category 4</a></li>
                                    <li><a href="#">Deep Category 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                            <li><a href="#">Category 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="nav-link scrollto {{ Route::is('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a></li>
                    <li><a class="nav-link scrollto {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><a class="nav-link scrollto {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="d-flex flex-row logo">
                <span class="icon">
                    <img src="../icon/Home.svg" alt="Home" height="34" width="34">
                </span>
                <h1 class="title"><a href="#">Resto Handy</a></h1>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <div class="form-group has-search">
                    <span class="form-icon">
                        <img src="../icon/Search.svg"></img>
                    </span>
                    <input type="text" class="form-control" placeholder="Search your favorite food">
                </div>
                <button class="btn btn-login">Login</a>
            </div>

        </div>
    </header>
<x-guest-layout>
    @section('title', 'Welcome')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Logo at very start -->
            <img src="https://my.ispl-t10.com/assets/img/image-master/1760592722.png" 
                 alt="ISPL" class="img-fluid" width="70">

            <!-- Brand name next to logo -->
            <a class="navbar-brand ml-2" href="#">MTCL</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>

                <!-- Login & Register buttons -->
                <div class="ml-3">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-warning btn-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Full Page Carousel Slider -->
    <div id="home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-100" src="https://my.ispl-t10.com/images/banner-img/ILV9V8tTAqqTVj5zQoZrni128rGdmp30Bhd9vsHi.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slider One Item</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-100" src="https://my.ispl-t10.com/images/banner-img/mj3gw0TxpFmv45r5HhM3qaTPKf0gStpzC4SuFZ9p.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slider Two Item</h5>
                    <p>Deserunt excepturi quas vero.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-100" src="https://my.ispl-t10.com/images/banner-img/RP7gdj5l4YxEAaWVFCZQyX7pDuzYJ19aqmcHENqv.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slider Three Item</h5>
                    <p>Maxime, nulla, tempore.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#home" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Content Sections -->
    <div id="about" class="container p-0 m-0">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

    <div id="portfolio" class="container p-0 m-0 bg-light">
        <h2>Portfolio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

    <div id="services" class="container p-0 m-0">
        <h2>Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

    <div id="contact" class="container p-0 m-0 bg-light">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

    <!-- Floating Link -->
    <div class="link-area">
        <a href="https://www.youtube.com/channel/UCki4IDK86E6_pDtptmsslow" target="_blank">Click for More</a>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center">
        <div class="container">
            <p class="mb-1">&copy; 2026 MTCL. All rights reserved.</p>
            <p class="mb-0">
                <a href="#home" class="text-warning">Back to top</a> | 
                <a href="#contact" class="text-warning">Contact Us</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Background image like ISPL */
        body {
            margin: 0;
            padding-bottom: 80px; /* prevent content overlap with footer */
            background: url('https://wallpaperaccess.com/full/1088620.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Make carousel full page */
        .carousel-item {
            height: 100vh; /* full viewport height */
            min-height: 300px;
        }
        .carousel-item img {
            object-fit: cover; /* ensures image covers entire slide */
            height: 100vh;
        }

        .carousel-caption {
            bottom: 270px;
        }

        .carousel-caption h5 {
            font-size: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            color: #ffcc00;
        }

        .carousel-caption p {
            width: 75%;
            margin: auto;
            font-size: 18px;
            line-height: 1.9;
            color: #f8f9fa;
        }

        .navbar-dark .navbar-brand {
            color: #ffcc00;
        }

        .link-area {
            position: fixed;
            bottom: 100px; /* moved up so footer is visible */
            left: 20px;
            padding: 15px;
            border-radius: 40px;
            background: tomato;
        }

        .link-area a {
            text-decoration: none;
            color: #fff;
            font-size: 25px;
        }

        /* Sticky full-width footer */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px 0;
            background-color: #000;
            z-index: 999;
        }
    </style>
</x-guest-layout>

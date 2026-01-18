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
    <div id="about" class="container p-4 bg-dark text-light">
    <h2>About Us</h2>
    <p>
        Welcome to <strong>MTCL — Mumbai Talent Cricket League</strong>, a community‑driven initiative 
        dedicated to nurturing cricketing talent across Mumbai. Our mission is to provide aspiring players 
        with the exposure, training, and opportunities they need to shine while celebrating the city’s 
        unmatched passion for cricket.
    </p>
    <p>
        Founded in 2025, MTCL has quickly become a hub for grassroots cricket development. We organize 
        tournaments at iconic venues such as <strong>Azad Maidan</strong> and <strong>Wankhede Stadium</strong>, 
        giving young cricketers the chance to showcase their skills on legendary grounds. With strong 
        support from schools, colleges, and local communities, we are building a sustainable ecosystem 
        for cricket in Mumbai.
    </p>
    <p>
        Beyond the game, MTCL emphasizes discipline, teamwork, and sportsmanship — values that define 
        both cricket and life. Our vision is to inspire the next generation of players while bringing 
        fans, sponsors, and communities together through the spirit of the sport.
    </p>
    <p>
        Whether you are a player looking to register, a sponsor seeking opportunities, or a fan eager 
        to follow the action, MTCL welcomes you to be part of this exciting journey. Together, we are 
        shaping the future of cricket in Mumbai.
    </p>
</div>


   <div id="portfolio" class="container p-4 bg-dark text-light">
    <h2>Portfolio</h2>
    <p>
        MTCL Mumbai has proudly organized and participated in a variety of cricketing events, 
        showcasing the city’s vibrant sporting culture and nurturing young talent. 
        Here are some highlights from our journey:
    </p>
    <ul>
        <li>🏏 <strong>Mumbai Monsoon Cup</strong> — Annual tournament held at Azad Maidan with 20+ local teams competing.</li>
        <li>🎯 <strong>School Cricket Championship</strong> — Talent hunt across Mumbai schools, discovering future stars and giving them exposure.</li>
        <li>🏟️ <strong>Wankhede Exhibition Matches</strong> — Friendly matches hosted at the iconic Wankhede Stadium to inspire young cricketers.</li>
        <li>📸 <strong>Media Coverage</strong> — Featured in Mumbai Mirror, Mid‑Day, and local sports channels for our grassroots initiatives.</li>
        <li>🤝 <strong>Community Engagement</strong> — Cricket coaching camps in suburban areas like Borivali, Thane, and Navi Mumbai.</li>
        <li>🌐 <strong>Digital Presence</strong> — Live score updates, match highlights, and player stats shared through our official website and social media.</li>
    </ul>
    <p>
        Each of these milestones reflects our commitment to building a sustainable cricket ecosystem in Mumbai, 
        where players, fans, and sponsors come together to celebrate the sport.
    </p>
</div>


  <div id="services" class="container p-4 bg-dark text-light">
    <h2>Services</h2>
    <p>
        MTCL Mumbai offers a wide range of cricket‑related services designed to support players, 
        teams, sponsors, and fans. Our goal is to create a professional yet community‑driven 
        ecosystem for cricket in Mumbai.
    </p>
    <ul>
        <li>⚡ <strong>Player Registration & Management</strong> — Seamless online registration system for players, with profile management and performance tracking.</li>
        <li>🏟️ <strong>Tournament Organization</strong> — Planning and hosting local leagues, knockout tournaments, and exhibition matches at venues like Azad Maidan and Wankhede Stadium.</li>
        <li>📊 <strong>Match Statistics & Analytics</strong> — Real‑time score updates, player stats, and team performance reports available online.</li>
        <li>🎥 <strong>Live Streaming & Highlights</strong> — Broadcasting matches with professional coverage, plus highlight reels for fans and sponsors.</li>
        <li>🎯 <strong>Talent Hunt Programs</strong> — Scouting and nurturing young cricketers from schools and colleges across Mumbai.</li>
        <li>🤝 <strong>Sponsorship & Branding Opportunities</strong> — Connecting local businesses and brands with cricket events for promotion and community engagement.</li>
        <li>📚 <strong>Coaching & Training Camps</strong> — Organizing skill‑development workshops with experienced coaches to guide aspiring players.</li>
        <li>🌐 <strong>Digital Engagement</strong> — Maintaining an active online presence with match updates, social media campaigns, and fan interaction.</li>
    </ul>
    <p>
        Through these services, MTCL Mumbai ensures that cricket is not just a sport but a 
        celebration of community, talent, and opportunity.
    </p>
</div>

   <div id="contact" class="container p-4 bg-dark text-light">
    <h2>Contact Us</h2>
    <p>
        We’d love to hear from you! Whether you’re a player, sponsor, or fan, 
        MTCL Mumbai is always open to connect.
    </p>

    <!-- Contact Details -->
    <ul class="list-unstyled">
        <li>📍 <strong>Address:</strong> MTCL Office, Wankhede Stadium Complex, Mumbai, Maharashtra</li>
        <li>📞 <strong>Phone:</strong> +91 98765 43210</li>
        <li>📧 <strong>Email:</strong> info@mtclmumbai.com</li>
        <li>🌐 <strong>Website:</strong> www.mtclmumbai.com</li>
        <li>📱 <strong>Social Media:</strong> 
            <a href="#" class="text-warning">Facebook</a> | 
            <a href="#" class="text-warning">Instagram</a> | 
            <a href="#" class="text-warning">Twitter</a>
        </li>
    </ul>

    <!-- Contact Form -->
    <form class="mt-4">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write your message"></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Send Message</button>
    </form>
</div>

    <!-- Floating Link -->
    <!-- <div class="link-area">
        <a href="https://www.youtube.com/channel/UCki4IDK86E6_pDtptmsslow" target="_blank">Click for More</a>
    </div> -->

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


        .banner {
    position: relative;
    height: 100vh; /* full screen height */
    overflow: hidden;
}
.banner img {
    object-fit: cover;
    height: 100%;
}
.banner-caption {
    position: absolute;
    bottom: 30%;
    left: 50%;
    transform: translateX(-50%);
}
.banner-caption h5 {
    font-size: 45px;
    color: #ffcc00;
    text-transform: uppercase;
}
.banner-caption p {
    font-size: 18px;
    color: #f8f9fa;
}
    </style>
</x-guest-layout>

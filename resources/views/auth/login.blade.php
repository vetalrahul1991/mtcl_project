<x-guest-layout>
    @section('title')
        {{ 'Log in' }}
    @endsection
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
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="login" class="form-control" type="text" name="login" value="{{ old('login') }}"
                            required autofocus placeholder="Email or Mobile Number">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                        <x-input-error :messages="$errors->get('login')" class="text-danger" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="{{ route('facebook.login') }}" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="{{ route('google.login') }}" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                    <a href="{{ route('github.login') }}" class="btn btn-block btn-dark">
                        <i class="fab fa-github mr-2"></i> Sign in using Github
                    </a>
                </div> -->
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">Register a new Account</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
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


    <style>
    

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

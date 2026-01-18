<x-guest-layout>
@section('title')
    {{ 'Register' }}
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
                    <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                </ul>

                <!-- Login & Register buttons -->
                <div class="ml-3">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-warning btn-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>{{ config('app.name') }}</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Registration</p>

            {{-- Show validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <input id="first_name" class="form-control" type="text" name="first_name"
                                value="{{ old('first_name') }}" required placeholder="First Name">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('first_name')" class="text-danger" />
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <input id="middle_name" class="form-control" type="text" name="middle_name"
                                value="{{ old('middle_name') }}" placeholder="Middle Name">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('middle_name')" class="text-danger" />
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <input id="surname" class="form-control" type="text" name="surname"
                                value="{{ old('surname') }}" required placeholder="Surname">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('surname')" class="text-danger" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input id="mobile_number" class="form-control" type="text" name="mobile_number"
                                value="{{ old('mobile_number') }}" required placeholder="Mobile Number">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-phone"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('mobile_number')" class="text-danger" />
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input id="date_of_birth" class="form-control" type="date" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" required>
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-calendar"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('date_of_birth')" class="text-danger" />
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"
                        required placeholder="Email">
                    <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="text-danger" />

                <div class="row">
                    <div class="col-md-6">
                        <select id="district" name="district" class="form-control mb-3" required>
                            <option value="">Select District</option>
                            <option value="Ahmednagar">Ahmednagar</option>
                            <option value="Akola">Akola</option>
                            <option value="Amravati">Amravati</option>
                            <option value="Chhatrapati Sambhajinagar">Chhatrapati Sambhajinagar</option> <!-- updated -->
                            <option value="Beed">Beed</option>
                            <option value="Bhandara">Bhandara</option>
                            <option value="Buldhana">Buldhana</option>
                            <option value="Chandrapur">Chandrapur</option>
                            <option value="Dhule">Dhule</option>
                            <option value="Gadchiroli">Gadchiroli</option>
                            <option value="Gondia">Gondia</option>
                            <option value="Hingoli">Hingoli</option>
                            <option value="Jalgaon">Jalgaon</option>
                            <option value="Jalna">Jalna</option>
                            <option value="Kolhapur">Kolhapur</option>
                            <option value="Latur">Latur</option>
                            <option value="Mumbai City">Mumbai City</option>
                            <option value="Mumbai Suburban">Mumbai Suburban</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Nanded">Nanded</option>
                            <option value="Nandurbar">Nandurbar</option>
                            <option value="Nashik">Nashik</option>
                            <option value="Osmanabad">Osmanabad</option>
                            <option value="Palghar">Palghar</option>
                            <option value="Parbhani">Parbhani</option>
                            <option value="Pune">Pune</option>
                            <option value="Raigad">Raigad</option>
                            <option value="Ratnagiri">Ratnagiri</option>
                            <option value="Sangli">Sangli</option>
                            <option value="Satara">Satara</option>
                            <option value="Sindhudurg">Sindhudurg</option>
                            <option value="Solapur">Solapur</option>
                            <option value="Thane">Thane</option>
                            <option value="Wardha">Wardha</option>
                            <option value="Washim">Washim</option>
                            <option value="Yavatmal">Yavatmal</option>
                        </select>
                        <x-input-error :messages="$errors->get('district')" class="text-danger" />

                    </div>
                    <div class="col-md-6">
                        <input id="city" class="form-control mb-3" type="text" name="city"
                            value="{{ old('city') }}" required placeholder="City">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <select name="playing_role" class="form-control" required>
                            <option value="">Select Playing Role</option>
                            <option value="Batter">Batter</option>
                            <option value="Bowler">Bowler</option>
                            <option value="All-rounder">All-rounder</option>
                            <option value="Wicket-keeper">Wicket-keeper</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select name="batting_handedness" class="form-control" required>
                            <option value="">Select Handedness</option>
                            <option value="Right-hand">Right-hand</option>
                            <option value="Left-hand">Left-hand</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <select name="preferred_bowling_style" class="form-control" required>
                            <option value="">Select Preferred Bowling Style</option>
                            <option value="Fast">Fast</option>
                            <option value="Medium">Medium</option>
                            <option value="Off-spin">Off-spin</option>
                            <option value="Leg-spin">Leg-spin</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select name="preferred_batting_order" class="form-control" required>
                            <option value="">Select Preferred Batting Order</option>
                            <option value="Opener">Opener</option>
                            <option value="Top-order">Top-order</option>
                            <option value="Middle-order">Middle-order</option>
                            <option value="Finisher">Finisher</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input id="password" class="form-control" type="password" name="password" required
                                placeholder="Password">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="text-danger" />
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required placeholder="Confirm Password">
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                    </div>
                </div>

                <!-- Payment Screenshot Upload -->
                <div class="row">
                    <!-- Static image (e.g., QR code or payment info) -->
                    <div class="col-md-6 text-center">
                        <label class="form-label d-block">Payment On This *</label>
                        <img src="{{ asset('images/payment_qr.jpeg') }}" alt="Payment QR"
                            class="img-fluid rounded border p-2" style="max-height: 250px;">
                        <div class="mt-2">
                            <strong>UPI ID:</strong> dingdongmaster967@oksbi
                        </div>
                        <div class="mt-3 text-danger font-weight-bold">
                            <span>Note: If you have not made payment on this, please upload the screenshot below.</span>
                        </div>
                    </div>

                    <!-- File upload for screenshot -->
                    <div class="col-md-6">
                        <!-- payment_screenshot input field starts here -->
                        <label for="payment_screenshot" class="form-label">Upload Payment Screenshot *</label>
                        <div class="input-group mb-3">
                            <input id="payment_screenshot" class="form-control" type="file" name="payment_screenshot"
                                accept="image/*" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-image"></span></div>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('payment_screenshot')" class="text-danger" />
                        <!-- payment_screenshot input field ends here -->
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <div class="col-8 text-right align-self-center">
                        <a href="{{ route('login') }}">Already have an account? Login Here</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    .register-box {
        width: 900px !important;
        max-width: 100%;
        margin: 0 auto;
        margin-bottom: 120px; /* increased space for footer */
    }

    /* Sticky full-width footer for desktop */
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 15px 0;
        background-color: #000;
        z-index: 999;
    }

    /* On small screens, make footer static to avoid overlap */
    @media (max-width: 991px) {
        .footer {
            position: static;
        }
        .register-box {
            margin-bottom: 30px; /* less margin needed */
        }
    }
</style>
</x-guest-layout>

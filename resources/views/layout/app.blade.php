<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />

    <title>Crowd</title>
</head>

<body class="homeBody">

<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-para">
                        <p>As seen in TIME Magazine, Crowd is democratizing real estate! <a href="javascript:;">Read
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-last">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <a class="navbar-brand" href="#"><img src="{{ asset('/images/logo.png') }}" class="img-fluid"
                                                                  alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item active">
                                        @if(Auth::check() && Auth::user()->is_admin)
                                            <a class="nav-link" href="{{ route('admin_properties') }}">Properties</a>
                                        @else
                                            <a class="nav-link" href="{{ route('front.properties') }}">Properties</a>
                                        @endif
                                        {{-- <a class="nav-link" href="{{ route('front.properties') }}">Properties</a> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('crowd.about') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('crowd.golden_visa') }}">Golden Visa</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sell
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Learn
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                            <a class="dropdown-item" href="#">Lorem Ipsum</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <ul class="lang">
                            <li><a href="javascript:;"><i class="fal fa-globe"></i> EN</a></li>
                        </ul>
                        <div class="head-btn">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf <!-- CSRF Token -->
                                    <button class="headBtn" type="submit">Logout</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf <!-- CSRF Token -->
                                    <button class="headBtn" type="submit">Login</button>
                                </form>
                            @endauth
                            <a href="javascript:;" class="themeBtn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')

{{-- <section class="contact-sect">
    <img src="assets/images/cntImg.png" class="img-fluid cntImg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="sectionheading">Real Estate Combines<br><span class="yellow">The Best Of All Asset</span><br>
                    <span>Classes</span>
                </h2>
                <div class="contForm">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="themeBtn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footList">
                            <ul>
                                <li><a href="javascript:;">Properties</a></li>
                                <li><a href="javascript:;">About</a></li>
                                <li><a href="javascript:;">Golden Visa</a></li>
                                <li><a href="javascript:;">Sell</a></li>
                                <li><a href="javascript:;">Learn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footList">
                            <ul>
                                <li><a href="javascript:;">Properties</a></li>
                                <li><a href="javascript:;">About</a></li>
                                <li><a href="javascript:;">Golden Visa</a></li>
                                <li><a href="javascript:;">Sell</a></li>
                                <li><a href="javascript:;">Learn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footList">
                            <h4>Connect With US</h4>
                            <ul>
                                <li><a href="javascript:;">info@crowd.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

                <div class="applatform">
                    <img src="{{ asset('public/images/playstore.png') }}" class="img-fluid" alt=""><br>
                    <img src="{{ asset('public/images/apstore.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="row justify-content-between align-items-center mt-5">
            <div class="col-md-8">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="footList">
                            <p>© 2024 Crowd. All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footList">
                            <ul class="footTab">
                                <li><a href="javascript:;">Privacy Policy</a></li>
                                <li><a href="javascript:;">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

                <div class="applatform">
                    <a href="javascript:;">
                        <img src="{{ asset('public/images/footLogo.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="{{ asset('public/js/app.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
<script src="{{ asset('public/js/wow.min.js') }}"></script>
<script src="{{ asset('public/js/lightbox.js') }}"></script>
<script src="{{ asset('public/js/function.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

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
                    <img src="assets/images/playstore.png" class="img-fluid" alt=""><br>
                    <img src="assets/images/apstore.png" class="img-fluid" alt="">
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
                        <img src="assets/images/footLogo.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

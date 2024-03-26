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
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYvOXB3SFyyeR0usVOgnLyoDiAd2XDunU&libraries=places&callback=initialize" async defer></script>--}}
    <title>Crowd</title>
</head>

<body class="homeBody">



@yield('content')


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
                                <li><a href="{{ route('crowd.policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('crowd.terms') }}">Terms & Condition</a></li>
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
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ar',
        }, 'google_translate_element');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Handle dropdown change event
    var element = document.getElementById('currencyDropdown');
    if (element) {
        element.addEventListener('change', function() {
            var selectedCurrency = this.value;

            // Send AJAX request to set the selected currency
            axios.post('{{ route("set.currency") }}', { currency: selectedCurrency })
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.error('Error:', error.message);
                });
        });
    } else {
        console.error('Element not found:', 'currencyDropdown');
    }
</script>
{{--<script src="{{ asset('/js/mapInput.js') }}"></script>--}}
</body>

</html>

@extends('layout.app')

@section('content')
<section class="mainBanner">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-5">
                <div class="banCont">
                    <h2>The <span>Modern Way</span><br>
                        For <span>Anyone To Invest</span> In</h2>
                    <h1>Real Estate</h1>
                    <p>Digitally invest in prime rental properties from only AED 500 (USD 136), no matter where you are
                        in the world!</p>

                    <div class="banBtn">
                        <a href="javascript:;" class="themeBtn">Get Started</a>
                        <a href="javascript:;" class="videBtn"><i class="fas fa-caret-right"></i> How it works</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banCont">
                    <img src="{{ asset('/images/ban-img.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="count-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="count-cont">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contMain">
                                <h2>449K+</h2>
                                <p>Registered User</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contMain">
                                <h2>AED 276M+</h2>
                                <p>In Property Transactions</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contMain">
                                <h2>203</h2>
                                <p>User Nationalities</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contMain">
                                <h2>AED 10.2M+</h2>
                                <p>Rental Income Paid</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('/images/text.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<section class="how-sect">
    <img src="/public/images/howElm.png" class="img-fluid howElm" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="howCont">
                    <h2 class="sectionheading">How <span class="yellow">It</span> <span>Works</span></h2>
                    <p>Crowd is available to savvy investors all over the world</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="how-Cont">
                            <h4><span>01</span></h4>
                            <h3>Browse</h3>
                            <p>Sign up in less than 3 minutes and browse our collection of properties</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="how-Cont">
                            <h4><span>02</span></h4>
                            <h3>Purchace</h3>
                            <p>Sign up in less than 3 minutes and browse our collection of properties</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="how-Cont">
                            <h4><span>03</span></h4>
                            <h3>Own</h3>
                            <p>Sign up in less than 3 minutes and browse our collection of properties</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="how-Cont">
                            <h4><span>04</span></h4>
                            <h3>Exit</h3>
                            <p>Sign up in less than 3 minutes and browse our collection of properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mobile-sect">
    <img src="{{ asset('/images/mobImg.png') }}" class="img-fluid mobImg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="mobCont">
                    <p>Our team of property professionals combine a data driven valuation and analysis process with over
                        20 years of leadership experience at the top real estate companies in Dubai, to source the best
                        rental properties with the highest investment potential for you</p>

                    <div class="screenImg">
                        <img src="{{ asset('/images/screen.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="money-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="sectionheading">So, <span class="yellow">How Will You</span> <span>Make Money</span></h2>
                <p class="sectParagraph">Crowd was built to empower everyone to own and build wealth through real estate
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="howCard">
                    <div class="hwcHead">
                        <figure>
                            <img src="{{ asset('/images/moneyImg.png') }}" class="img-fluid w-100" alt="">
                            <a href="javascript:;" class="wishCart"><i class="fas fa-heart"></i></a>
                            <a href="javascript:;" class="themeBtn">Rented</a>
                        </figure>
                    </div>
                    <div class="hwcBody">
                        <h2>1 Bedroom in Burj Khalifa</h2>
                        <div class="downCard">
                            <h5><i class="far fa-map-marker-alt"></i> Downtown</h5>
                            <h6>
                                <figure><img src="{{ asset('/images/prog.png') }}" class="img-fluid" alt=""></figure> 85% Sold
                            </h6>
                        </div>
                        <ul>
                            <li>
                                <p>9%</p>
                                <span>gross yield</span>
                            </li>
                            <li>
                                <p>31%</p>
                                <span>capital appreciation</span>
                            </li>
                            <li>
                                <p>52%</p>
                                <span>total ROI</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="monRentHead">
                    <div class="monRental">
                        <figure>
                            <img src="{{ asset('/images/mn-1.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Monthly rental income</h3>
                        <p>Consistent passive income from<br> monthly rental payments</p>
                    </div>
                    <div class="monRental">
                        <figure>
                            <img src="{{ asset('/images/mn-2.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Long term capital appreciation</h3>
                        <p>Consistent passive income from<br> monthly rental payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="invest-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="sectionheading">Real Estate, <span class="yellow">Investing</span> <span>Made Easy</span>
                </h2>
                <p class="sectParagraph">90% of the worlds millionaires made their fortunes through real estate, but
                    it’s highly<br> inaccessible,
                    illiquid, and complicated - that’s where we come in!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="invCard">
                    <figure>
                        <img src="{{ asset('/images/inv-1.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Invest in real estate from
                        only AED 500</h3>
                    <p>With fractionalised properties there is no mortgage or large down payments required</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="invCard">
                    <figure>
                        <img src="{{ asset('/images/inv-1.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Digital and diversified real
                        estate investing</h3>
                    <p>With fractionalised properties there is no mortgage or large down payments required</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="invCard">
                    <figure>
                        <img src="{{ asset('/images/inv-1.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Hassle-free ownership</h3>
                    <p>With fractionalised properties there is no mortgage or large down payments required</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="invCard">
                    <figure>
                        <img src="{{ asset('/images/inv-1.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Trusted entity with real
                        estate expertise</h3>
                    <p>With fractionalised properties there is no mortgage or large down payments required</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="rev-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="sectionheading"><span>Don’t Just Take Our Word For It,<br> See What</span> <span
                        class="yellow">Our<br> Investors</span> <span>Have<br>
                        To Say</span>
                </h2>
            </div>
            <div class="col-md-6">
                <div class="testSlider">
                    <div class="testimonials">
                        <div class="review">
                            <div class="rev-rating">
                                <h4>A secure and easy platform to
                                    save your money by investing</h4>
                                <div class="rating">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <h5>Feb, 1, 2024</h5>
                                </div>
                            </div>
                        </div>
                        <p>Our team of property professionals combine a data driven valuation and analysis process with
                            over
                            20 years of leadership experience at the top real estate companies in Dubai, to source the
                            best
                            rental </p>
                        <div class="nameDiv">
                            <h6 class="name">Usman Ali Kasai</h6>
                            <figure>
                                <img src="{{ asset('/images/trustpilot.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="testimonials">
                        <div class="review">
                            <div class="rev-rating">
                                <h4>A secure and easy platform to
                                    save your money by investing</h4>
                                <div class="rating">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <h5>Feb, 1, 2024</h5>
                                </div>
                            </div>
                        </div>
                        <p>Our team of property professionals combine a data driven valuation and analysis process with
                            over
                            20 years of leadership experience at the top real estate companies in Dubai, to source the
                            best
                            rental </p>
                        <div class="nameDiv">
                            <h6 class="name">Usman Ali Kasai</h6>
                            <figure>
                                <img src="{{ asset('/images/trustpilot.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="testSliderBtn">
                    <button class="prev"><i class="far fa-long-arrow-left"></i></button>
                    <button class="next"><i class="far fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
</section>



<section class="cal-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="sectionheading"><span class="yellow">Investing</span> <span>Calculator</span>
                </h2>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-md-6">
                <div class="calForm">
                    <h3>How much do you want to invest ?</h3>
                    <form>
                        <div class="form-row mt-3">
                            <div class="col">
                                <label for="text">Initial Investment <span>AED</span></label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <label for="text">Property Value Growth <span>AED</span></label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <label for="text">Expected Rental Yeild <span>AED</span></label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <p>All projected values are before any property costs and platform fees, and based on a
                                    5-year holding period. We expect the asset value to grow 30% over the next 5 years.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">

                <div class="cal-hcont">
                    <h3>Projected investment return of <br>
                        <span class="yellow">AED 376,</span>425 in <span class="yellow">5 years</span>
                    </h3>
                    <img src="{{ asset('/images/progress.png') }}" class="img-fluid w-100    " alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fund-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="sectionheading"><span class="yellow">Funded</span> <span>Properties</span>
                </h2>
                <p class="sectParagraph">With over 20 years of experience leading major real estate companies in Dubai,
                    we utilize our<br> expertise and network to find properties with the greatest investment potential
                    for
                    you.

                </p>
            </div>
        </div>

        <div class="row">
            @foreach ($properties->take(3) as $property)
            <div class="col-md-4">
                <div class="howCard howCardNew">
                    <div class="hwcHead">
                        @foreach ($property->images->take(1) as $image)
                        <figure>
                            <img src="{{ url('images/property_images/' . $image->image_path) }}" class="img-fluid w-100" alt="">
                        </figure>
                        @endforeach
                    </div>
                    <div class="hwcBody">
                        <a href="{{ route('property_detail', ['id' => $property->id]) }}"><h2>{{ $property->name }}</h2></a>
                        <div class="downCard">
                            <h5><i class="far fa-map-marker-alt"></i> Downtown</h5>
                            <h6>
                                <figure><img src="{{ asset('/images/prog.png') }}" class="img-fluid" alt=""></figure>
                                @php
                                    $percentage = ($property->total_investment / $property->price) * 100;
                                    $percentage = min($percentage, 100);
                                @endphp
                                {{ number_format($percentage, 0) }}% Sold
                            </h6>
                        </div>
                        <ul>
                            <li>
                                <p>9%</p>
                                <span>gross yield</span>
                            </li>
                            <li>
                                <p>31%</p>
                                <span>capital appreciation</span>
                            </li>
                            <li>
                                <p>52%</p>
                                <span>total ROI</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="fundBtn">
                    <a href="{{ route('front.properties') }}" class="themeBtn">View All Properties</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="best-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sectionheading">Real Estate Combines<br><span class="yellow">The Best Of All Asset</span><br>
                    <span>Classes</span>
                </h2>
                <p class="sectParagraph">It is one of the most important asset classes to own and to build long term
                    wealth
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="bestCard">
                    <figure>
                        <img src="{{ asset('/images/bs-1.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Capital appreciation</h3>
                    <p>In addition to monthly passive income, real estate appreciates in value like equities, creating
                        long </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bestCard">
                    <figure>
                        <img src="{{ asset('/images/bs-2.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Passive income</h3>
                    <p>In addition to monthly passive income, real estate appreciates in value like equities, creating
                        long </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bestCard">
                    <figure>
                        <img src="{{ asset('/images/bs-3.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Hedge for inflation</h3>
                    <p>In addition to monthly passive income, real estate appreciates in value like equities, creating
                        long </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bestCard">
                    <figure>
                        <img src="{{ asset('/images/bs-4.png') }}" class="img-fluid" alt="">
                    </figure>
                    <h3>Storehold of wealth</h3>
                    <p>In addition to monthly passive income, real estate appreciates in value like equities, creating
                        long </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layout.app')

@section('content')
    <section class="aboutBanner sellpropBanner">
        <img src="{{ asset('/images/about-elm.png') }}" class="img-fluid about-elm" alt="">
        <img src="{{ asset('/images/divider.png') }}" class="img-fluid divider" alt="">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 text-center">
                    <div class="aboutCont">
                        <h2>Sell with Crowd</h2>
                        <h1>The <span>Easiest Home</span> Sale Ever</h1>
                        <p>We’ll pay market rate for your property, in cash. 1 viewing.</p>
                        <div class="banBtn">
                            <a href="javascript:;" class="themeBtn">Sell with Crowd</a>
                        </div>

                        <div class="logo-slider">
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-1.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>

                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-2.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-3.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-4.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-5.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-6.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>

                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-5.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="logos">
                                <figure>
                                    <img src="{{ asset('/images/logos/lg-6.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="paycash-sect">
        <img src="{{ asset('/images/cashElm.png') }}" class="img-fluid cashElm" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="payCont">
                        <h2 class="sectionheading">We’ll <span class="yellow">Pay Cash For</span><br> <span>Your
                                Property</span>
                        </h2>
                        <p>If you're interested in a quick sale of your property for cash, then Stake is the perfect
                            solution.</p>
                        <p>We have a 100% closing record and can offer fair market value - with none of the hassle. Our
                            team is incredibly knowledgeable and can help you navigate the process seamlessly</p>
                        <a href="javascript:;" class="themeBtn">Sell with Crowd</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure>
                        <img src="{{ asset('/images/cashImg.png') }}" class="img-fluid w-100" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="best-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sectionheading">How <span class="yellow">It</span>
                        <span>Works</span>
                    </h2>
                    <p class="sectParagraph">List your property on Stake and get paid in cash when funding closes.<br>
                        It's that simple
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="bestCard">
                        <figure>
                            <img src="{{ asset('/images/hw-1.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Quick offer</h3>
                        <p>Upload your property details
                            with no obligations. If we're
                            interested then we’ll provide an
                            offer </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bestCard">
                        <figure>
                            <img src="{{ asset('/images/hw-2.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Due diligence</h3>
                        <p>We’ll manage any necessary
                            upgrades and take
                            professional photography for
                            marketing</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bestCard">
                        <figure>
                            <img src="{{ asset('/images/hw-3.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Quick sale</h3>
                        <p>Your property will be listed
                            on the Stake platform and
                            typically sold within 30-45
                            days</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bestCard">
                        <figure>
                            <img src="{{ asset('/images/hw-4.png') }}" class="img-fluid" alt="">
                        </figure>
                        <h3>Easy close</h3>
                        <p>Sale proceeds will be
                            transferred to your bank
                            acount within 30 days of the
                            property closing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="whysell-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sectionheading">Why <span class="yellow">Sell With</span>
                        <span>Crowd?</span>
                    </h2>
                    <p class="sectParagraph">Sell your property for cash. Stake has a 100% closing rate and can
                        offer<br>
                        fair market value, with none of the hassle </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="bestCard bestsellCard">
                        <figure>
                            <img src="{{ asset('/images/ws-1.png') }}" class="img-fluid" alt="">
                        </figure>
                        <div>
                            <h3>Quick offer</h3>
                            <p>Upload your property details
                                with no obligations. If we're
                                interested then we’ll provide an
                                offer </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="bestCard bestsellCard">
                        <figure>
                            <img src="{{ asset('/images/ws-2.png') }}" class="img-fluid" alt="">
                        </figure>
                        <div>
                            <h3>Due diligence</h3>
                            <p>We’ll manage any necessary
                                upgrades and take
                                professional photography for
                                marketing</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="bestCard bestsellCard">
                        <figure>
                            <img src="{{ asset('/images/ws-3.png') }}" class="img-fluid" alt="">
                        </figure>
                        <div>
                            <h3>Quick sale</h3>
                            <p>Your property will be listed
                                on the Stake platform and
                                typically sold within 30-45
                                days</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="bestCard bestsellCard">
                        <figure>
                            <img src="{{ asset('/images/ws-4.png') }}" class="img-fluid" alt="">
                        </figure>
                        <div>
                            <h3>Easy close</h3>
                            <p>Sale proceeds will be
                                transferred to your bank
                                acount within 30 days of the
                                property closing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sellSmart">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="smartCont">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="sectionheading">The Smartest <br>
                                    <span>Way To Get Your<br>
                                        Golden Visa</span>
                                </h2>
                                <p>Invest in Dubai's real estate market globally, securing long-term UAE residency while
                                    diversifying your portfolio.
                                </p>
                                <div class="head-btn">
                                    <a href="javascript:;" class="headBtn">Login</a>
                                    <a href="javascript:;" class="themeBtn">Get Started</a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <figure>
                                    <img src="{{ asset('/images/smPhone.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="neighbour-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sectionheading">What <span class="yellow">Neighbourhoods </span>
                        <span>Do We Cover?</span>
                    </h2>
                    <p class="sectParagraph">We list properties in the following neighbourhoods. If you’re looking
                        to<br>
                        sell in these areas then we’ll consider a full cash offer!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-1.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-2.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-3.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-4.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-5.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-6.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-7.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="neigCont">
                        <figure>
                            <img src="{{ asset('/images/neighbours/ng-8.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                        <h3>Dubai Marina</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="freq-sect">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="sectionheading">Frequently <span class="yellow">Asked </span>
                        <span>Questions</span>
                    </h2>
                    <p class="sectParagraph">We list properties in the following neighbourhoods. If you’re looking
                        to<br>
                        sell in these areas then we’ll consider a full cash offer!</p>

                    <div class="freqCont">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            How long does it take to sell my property on Crowd? <span><i
                                                    class="fal fa-plus-circle"></i></span>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How does Crowd determine an offer price? <span><i
                                                    class="fal fa-plus-circle"></i></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What documents do I need to sell my property on Crowd? <span><i
                                                    class="fal fa-plus-circle"></i></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Why is selling on Crowd better than selling on the open market? <span><i
                                                    class="fal fa-plus-circle"></i></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Can I sell my property before the current lease expires and the property is
                                            vacated? <span><i class="fal fa-plus-circle"></i></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="fre-para">You can also reach out to us at <a
                            href="mailto:contact@crowd.com">contact@crowd.com</a>
                        if you have any other questions!</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('layout.main')

@section('content')
<body class="homeBody">

    @include('layout.dashboard-left')
    @php
        // Retrieve the selected currency from the session
        $selectedCurrency = session('selected_currency', 'USD');
//        dd($selectedCurrency);// Default to USD if not set
    @endphp
    <section class="prop-detail-banner">
        <div class="container-fluid">
            <div class="row">
                @foreach ($property->images as $image)
                <div class="col-md-6">
                    <div class="prop-det-cont">
                        <div class="first-image">
                            <figure>
                                <img src="{{ url('images/property_images/' . $image->image_path) }}" class="img-fluid w-100" alt="Property Image">
                            </figure>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class=" prop-detail-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="prop-det-cont">
                        {{-- @dd($property) --}}
                        <h2>{{ $property->name }}</h2>
                        <ul class="anim-list">
                            <li><span>{{ $property->bed }} bed</span></li>
                            <li><span>{{ $property->bath }} bath</span></li>
                            <li><span>{{ $property->area }} sq.ft</span></li>
                            <li><span>{{ $property->address_address }}</span></li>
                        </ul>

                        <ul class="icon-list">
                            <li>
                                <span><svg width="32" height="32" viewBox="0 0 66 66" fill="none">
                                        <path fill="#5B9D3B"
                                            d="M63.15405,21.6983C58.70056,9.06049,46.66138,0,32.5,0c-3.37939,0-6.63782,0.5166-9.70184,1.47375V21.6983H63.15405z">
                                        </path>
                                        <path fill="#FFFFFF"
                                            d="M22.79816,21.6983v21.68567h40.32806C64.33588,39.98053,65,36.31842,65,32.5c0-3.7879-0.65472-7.42133-1.84595-10.8017H22.79816z">
                                        </path>
                                        <path fill="#121C30"
                                            d="M22.79816,63.52625C25.86218,64.4834,29.12061,65,32.5,65c14.13086,0,26.14966-9.02087,30.62622-21.61603H22.79816V63.52625z">
                                        </path>
                                        <path fill="#B81942"
                                            d="M22.79816,21.6983V1.47375C9.58795,5.60034,0,17.93011,0,32.5s9.58795,26.89966,22.79816,31.02625V43.38397V21.6983z">
                                        </path>
                                    </svg></span>
                                <span>
                                    <h4>Dubai, United Arab Emirates</h4>
                                    <p>A mature real estate market with a high return on investment</p>
                                </span>
                            </li>

                            <li>
                                <span>
                                    <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-1dlsnza"
                                        aria-label="house-rented">
                                        <g fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <g>
                                                <path
                                                    d="M9 20V15C9 14.4477 9.44772 14 10 14H12 M18.5 16.45C18.4724 16.45 18.45 16.4724 18.45 16.5C18.45 16.5276 18.4724 16.55 18.5 16.55C18.5276 16.55 18.55 16.5276 18.55 16.5C18.55 16.4724 18.5276 16.45 18.5 16.45V16.45 M15.1976 17.615L13.2922 19.5243C13.1051 19.7118 13 19.9658 13 20.2306V21C13 21.5523 13.4477 22 14 22H14.7711C15.0367 22 15.2914 21.8944 15.479 21.7064L17.3814 19.8001 M3 10.5803L10.6984 3.9815C11.4474 3.3395 12.5526 3.3395 13.3016 3.9815L21 10.5803 M10 20H3 M15.6235 5.97182V3.75C15.6235 3.33579 15.9593 3 16.3735 3H18.9644C19.3787 3 19.7144 3.33579 19.7144 3.75V9.47839 M4.2854 9.47852V20.0001 M15.1985 17.6159C15.0715 17.2574 15.0045 16.8804 15 16.5001C15 15.0845 15.8527 13.8083 17.1606 13.2665C18.4685 12.7248 19.9739 13.0242 20.9749 14.0252C21.9759 15.0262 22.2753 16.5316 21.7336 17.8395C21.1918 19.1474 19.9156 20.0001 18.5 20.0001C18.119 19.9956 17.7413 19.9284 17.3821 19.8009">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span>
                                    <h4>Dubai, United Arab Emirates</h4>
                                    <p>A mature real estate market with a high return on investment</p>
                                </span>
                            </li>

                            <li>
                                <span>
                                    <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-1dlsnza"
                                        aria-label="money">
                                        <g fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <g>
                                                <path
                                                    d="M13.999 5C14 3.895 11.76 3 9 3C6.24 3 4.002 3.896 4 5C4 6.105 6.238 7 9 7C11.762 7 14 6.105 14 5 M14 5V12.76 M4.00098 9C4.00098 10.105 6.23898 11 9.00098 11C11.763 11 14.001 10.105 14.001 9 M19.6822 13.318C21.4392 15.075 21.4392 17.925 19.6822 19.682C17.9252 21.439 15.0752 21.439 13.3182 19.682C11.5612 17.925 11.5612 15.075 13.3182 13.318C15.0752 11.561 17.9252 11.561 19.6822 13.318 M12.505 14.425C11.603 14.78 10.366 15 8.99998 15C6.23898 15 4.00098 14.105 4.00098 13 M12.445 18.444C11.548 18.787 10.339 19 9 19C6.239 19 4.001 18.105 4 17V5">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span>
                                    <h4>Dubai, United Arab Emirates</h4>
                                    <p>A mature real estate market with a high return on investment</p>
                                </span>
                            </li>

                            <li>
                                <span>
                                    <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-1dlsnza"
                                        aria-label="graph-up">
                                        <g fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <g>
                                                <path
                                                    d="M5.00098 15.8891L10.072 10.8181C10.4629 10.4271 11.0959 10.4271 11.4859 10.8181L13.627 12.9591C14.0179 13.3501 14.6509 13.3501 15.0409 12.9591L21.001 7.00012">
                                                </path>
                                                <path d="M18.334 7.00012H21.001V9.66712"></path>
                                                <path d="M20.9998 20.9292H1.9248V3.22119"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span>
                                    <h4>Dubai, United Arab Emirates</h4>
                                    <p>A mature real estate market with a high return on investment</p>
                                </span>
                            </li>
                        </ul>



                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <div class="cal-hcont">

                                    <h2 class="newHeading">Investment calculator</h2>

                                    <h3>Projected investment return of <br>
                                        <span class="yellow">AED 376,</span>425 in <span class="yellow">5 years</span>
                                    </h3>
                                </div>
                                <div class="h3" id="future_balance">?</div>

                                <div class="invst-project">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="invReturn">
                                                <div>
                                                    <h5>Investment</h5>
                                                    <h6>AED 157,500</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="invReturn">
                                                <div>
                                                    <h5>Total Rental Income</h5>
                                                    <h6>AED 157,500</h6>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="invReturn">
                                                <div>
                                                    <h5>Investment</h5>
                                                    <h6>AED 157,500</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="col-md-12">
                                <div class="calForm calFormInn calPropDet">
                                    <form action="">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between calformLabel">
                                                <label for="initial_deposit">Initial Investment</label>
                                                <h4>AED 30,000</h4>
                                            </div>
                                            <div class="row">
                                                <div class="input-group col-md-12">

                                                    <input class="form-control text-center" id="initial_deposit"
                                                        type="range" name="initial_deposit" min="100" max="1000000"
                                                        step="100" value="$5000" data-value="5000">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between calformLabel">
                                                <label for="contribution_amount">Property Value Growth</label>
                                                <h4>38%</h4>
                                            </div>

                                            <div class="row">
                                                <div class="input-group col-md-12">

                                                    <input class="form-control text-center" id="contribution_amount"
                                                        type="range" name="contribution_amount" min="0" max="10000"
                                                        step="1" value="$100" data-value="100">

                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="contribution_period_monthly"
                                                    type="radio" name="contribution_period" value="12" checked>
                                                <label class="form-check-label"
                                                    for="contribution_period_monthly">monthly</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="contribution_period_annually"
                                                    type="radio" name="contribution_period" value="1">
                                                <label class="form-check-label"
                                                    for="contribution_period_annually">annually</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between calformLabel">
                                                <label for="investment_timespan">Investment Time Span</label>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" id="investment_timespan" type="range"
                                                        name="investment_timespan" min="2" max="50" step="1" value="5">
                                                </div>
                                            </div>
                                            <span id="investment_timespan_text">5 years</span>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between calformLabel">
                                                <label for="estimated_return">Expected annual rental yield</label>
                                                <h4>7%</h4>
                                            </div>
                                            <div class="row">
                                                <div class="input-group col-md-12">

                                                    <input class="form-control text-center" id="estimated_return"
                                                        type="range" name="estimated_return" min="0" max="50"
                                                        step="0.25" value="5.00%" data-value="5.00" data-append="%">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="compound_period_daily"
                                                        type="radio" name="compound_period" value="365">
                                                    <label class="form-check-label"
                                                        for="compound_period_daily">daily</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="compound_period_monthly"
                                                        type="radio" name="compound_period" value="12" checked>
                                                    <label class="form-check-label"
                                                        for="compound_period_monthly">monthly</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="compound_period_annually"
                                                        type="radio" name="compound_period" value="1">
                                                    <label class="form-check-label"
                                                        for="compound_period_annually">annually</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>


                        <div class="defaul-prop">
                            Default values are based on property numbers
                        </div>
                        <div class="overview">
                            <h2 class="newHeading">Property Overview</h2>
                            <p>{{ $property->property_overview }}</p>
                        </div>
                        <div class="financial">

                            <h2 class="newHeading">Financials</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Property cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>Property price</p>
                                                </td>
                                                <td>
                                                    <p><span>AED 1,611,000</span></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Transaction costs</p>
                                                </td>
                                                <td>
                                                    <p><span>AED 206,136</span></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Stake fee</p>
                                                </td>
                                                <td>
                                                    <p><span>1.5%</span></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    <p>Investment cost</p>
                                                </td>
                                                <td>
                                                    <p><span>AED 1,817,136</span></p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Rental income (Year 1)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>Annual gross rent</p>
                                                </td>
                                                <td>
                                                    <p><span>AED 118,000</span></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Service charges</p>
                                                </td>
                                                <td>
                                                    <p><span>(AED 9,000)</span></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Mgmt. and maintenance</p>
                                                </td>
                                                <td>
                                                    <p><span>(AED 16,385)</span></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    <p>Annual net income</p>
                                                </td>
                                                <td>
                                                    <p><span>AED 92,615</span></p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <p>This is an estimate for the 1st year of ownership</p>
                                </div>
                            </div>
                        </div>



                        <div class="financial-timline">
                            <h2 class="newHeading">Funding timeline</h2>
                            <p>The timeline is an estimate. Actual dates may vary.</p>

                            <ul class="ft-list">
                                <li>
                                    <span><i class="far fa-dot-circle"></i></span>
                                    <span>
                                        <h6>March 15, 2024</h6>
                                        <h5>Expected closing date</h5>
                                        <p>This is a conservative estimate for the closing date of the property funding
                                        </p>
                                    </span>
                                </li>

                                <li>
                                    <span><i class="far fa-dot-circle"></i></span>
                                    <span>
                                        <h6>March 15, 2024</h6>
                                        <h5>Expected closing date</h5>
                                        <p>This is a conservative estimate for the closing date of the property funding
                                        </p>
                                    </span>
                                </li>

                                <li>
                                    <span><i class="far fa-dot-circle"></i></span>
                                    <span>
                                        <h6>March 15, 2024</h6>
                                        <h5>Expected closing date</h5>
                                        <p>This is a conservative estimate for the closing date of the property funding
                                        </p>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="location">
                            <h2 class="newHeading">Location</h2>
                            <a href="javascript:;"><i class="fal fa-map-marker-alt"></i> 1 Bedroom in Burj Khalifa</a>
{{--                            <iframe--}}
{{--                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14440.714613798018!2d55.2743764!3d25.197197!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2s!4v1708013953285!5m2!1sen!2s"--}}
{{--                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"--}}
{{--                                referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--                            <div id="address-map-container" style="width:100%;height:400px; ">--}}
{{--                                <div style="width: 100%; height: 100%" id="address-map"></div>--}}
{{--                            </div>--}}
                            <div id="map" style="height: 400px;"></div>

                            <p>Dubai Marina is one of the premier neighbourhoods in Dubai. This impressive community
                                boasts luxury skyscrapers, a range of dining and entertainment options and urban
                                waterfront living to its residents. It is the most popular area for renting luxury
                                apartments in Dubai.</p>
                        </div>



                        <div class="amenities">
                            <h2 class="newHeading">Amenities</h2>
                            <ul>
                                @foreach($property->amenities as $amenity)
                                    <li>{{ $amenity->amenities }}</li>
                                @endforeach
                            </ul>
                        </div>


                        <div class="documents">
                            <h2 class="newHeading">Documents</h2>
                            <ul>
                                @foreach ($property->documents as $document)
                                    <li>
{{--                                        src="{{ url('images/property_images/' . $image->image_path) }}"--}}
                                        <a href="{{ url('documents/property_documents/' . $document->name) }}" download>{{ $document->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>



                        <div class="questions">
                            <h2 class="newHeading">Have more questions about this property?</h2>
                            <ul>
                                <li>
                                    <span>
                                        <figure>
                                            <img src="assets/images/property-expert-thumb.png" class="img-fluid" alt="">
                                        </figure>
                                    </span>
                                    <span>
                                        <p>Contact our real estate experts</p>
                                        <a href="javascript:;" class="themeBtn"><i class="far fa-comment"></i> Message
                                            us</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="col-md-5">
                    <div class="prop-price-fixed">
                        <div class="prop-price-card">
                            <h4>Property price</h4>
                            <h3>{{ convertPrice($property->price, $selectedCurrency) }}</h3>
                            @php
                                function convertPrice($price, $toCurrency) {
                                    // Define conversion rates based on target currency
                                    if ($toCurrency === 'GBP') {
                                        $conversionRate = 0.21;
                                    } elseif ($toCurrency === 'USD') {
                                        $conversionRate = 0.27;
                                    } elseif ($toCurrency === 'SAR') {
                                        $conversionRate = 1.02;
                                    } elseif ($toCurrency === 'AED') {
                                        $convertedPrice = \Akaunting\Money\Money::AED($price);
                                        $formattedPrice = $convertedPrice->getCurrency()->getCurrency() . ' ' .$convertedPrice->getAmount();
                                        return $formattedPrice;
                                    } elseif ($toCurrency === 'EUR') {
                                        $conversionRate = 0.25;
                                    } elseif ($toCurrency === 'KWD') {
                                        $conversionRate = 0.084;
                                    } elseif ($toCurrency === 'EGP') {
                                        $conversionRate = 13.01;
                                    } else {
                                        $conversionRate = 1;
                                    }
                                    $convertedPrice = \Akaunting\Money\Money::AED($price)->convert(\Akaunting\Money\Currency::$toCurrency(), $conversionRate);
                                    return $convertedPrice;
                                }
                            @endphp
                            <progress id="file" value="85" max="100"> 85% </progress>

                            <div class="funded">
                                {{-- @dd($property) --}}
                                @php
                                    $percentage = ($property->total_investment / $property->price) * 100;

                                    $percentage = min($percentage, 100);
                                @endphp
                                <h3>{{ number_format($percentage, 0) }}% funded</h3>
                                <h3>
                                    @php
                                        $available = max($property->price - $property->total_investment, 0);
                                    @endphp
                                    AED {{ number_format($available) }} Available
                                </h3>
                            </div>

                            <div class="funded fundedTime">
                                <h3><span>{{ \App\Models\Investment::where('property_id', $property->id)->distinct()->count('user_id') }}</span> investors</h3>
                                <h3><span><i class="fal fa-clock"></i></span> 44 days left</h3>
                            </div>
                            <div class="prop-table">
                                <table>
                                    <tr>
                                        <td>
                                            <p>Annualised return</p>
                                        </td>
                                        <td>
                                            <p><span>{{ $property->annualised_return }}%</span></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Annual appreciation</p>
                                        </td>
                                        <td>
                                            <p><span>{{ $property->annual_appreciation }}%</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Projected gross yield</p>
                                        </td>
                                        <td>
                                            <p><span>{{ $property->projected_gross_yield }}%</span></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Projected net yield</p>
                                        </td>
                                        <td>
                                            <p><span>{{ $property->projected_net_yield }}%</span></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @if(Auth::check() && !Auth::user()->is_admin)
{{--                            <form>--}}
{{--                                <div class="input-group mb-3">--}}
{{--                                    <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text" id="basic-addon1"><svg width="32" height="32"--}}
{{--                                                viewBox="0 0 66 66" fill="none">--}}
{{--                                                <path fill="#5B9D3B"--}}
{{--                                                    d="M63.15405,21.6983C58.70056,9.06049,46.66138,0,32.5,0c-3.37939,0-6.63782,0.5166-9.70184,1.47375V21.6983H63.15405z">--}}
{{--                                                </path>--}}
{{--                                                <path fill="#FFFFFF"--}}
{{--                                                    d="M22.79816,21.6983v21.68567h40.32806C64.33588,39.98053,65,36.31842,65,32.5c0-3.7879-0.65472-7.42133-1.84595-10.8017H22.79816z">--}}
{{--                                                </path>--}}
{{--                                                <path fill="#121C30"--}}
{{--                                                    d="M22.79816,63.52625C25.86218,64.4834,29.12061,65,32.5,65c14.13086,0,26.14966-9.02087,30.62622-21.61603H22.79816V63.52625z">--}}
{{--                                                </path>--}}
{{--                                                <path fill="#B81942"--}}
{{--                                                    d="M22.79816,21.6983V1.47375C9.58795,5.60034,0,17.93011,0,32.5s9.58795,26.89966,22.79816,31.02625V43.38397V21.6983z">--}}
{{--                                                </path>--}}
{{--                                            </svg> AED</span>--}}
{{--                                    </div>--}}
{{--                                    <input type="text" class="form-control" placeholder="2,000" aria-label="Username"--}}
{{--                                        aria-describedby="basic-addon1">--}}

{{--                                </div>--}}

{{--                            </form>--}}
                            <form action="{{ route('cart.add', $property) }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" placeholder="2,000" name="price"
                                        aria-describedby="basic-addon1">
                                <button type="submit" class="themeBtn">Add to Cart</button>
                            </form>
                            <ul>
                                <li><a href="javascript:;"><i class="fal fa-plus"></i> AFD 2,000</a></li>
                                <li><a href="javascript:;"><i class="fal fa-plus"></i> AFD 5,000</a></li>
                                <li><a href="javascript:;"><i class="fal fa-plus"></i> AFD 10,000</a></li>
                            </ul>
                            <p class="prop-para">You won't be charged yet</p>
                        </div>
                        @endif
                        <p class="prop-para"><i class="fal fa-stars"></i> 4,987 people viewed this property</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function initMap() {
            const property = @json($property);
            // console.log(property);
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: { lat: property.address_latitude, lng: property.address_longitude },
            });

            const marker = new google.maps.Marker({
                position: { lat: property.address_latitude, lng: property.address_longitude },
                map: map,
                title: property.address_address,
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYvOXB3SFyyeR0usVOgnLyoDiAd2XDunU&callback=initMap" async defer></script>
@endsection

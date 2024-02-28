@extends('layout.main')

@section('content')
@include('layout.dashboard-left')



    <section class="dashboard-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-3 p-0">
                    
                </div>
                <div class="col-md-9 p-0">
                    <div class="dashRight">
                        
                        <div class="drMedium">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="newRight">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="depCard">
                                                    <div>
                                                        <h3>Portfolio value</h3>
                                                        <h4>AED 0</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="transac-table">
                                                    <h3>Key financials</h3>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="finCard">
                                                                <div>
                                                                    <img src="assets/images/news/nw-1.png"
                                                                        class="img-fluid" alt="">
                                                                    <h3>Monthly income</h3>
                                                                </div>
                                                                <div>
                                                                    <h2>AED 0</h2>
                                                                    <h3>Jan 2024</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="finCard">
                                                                <div>
                                                                    <img src="assets/images/news/nw-2.png"
                                                                        class="img-fluid" alt="">
                                                                    <h3>Total rental income</h3>
                                                                </div>
                                                                <div>
                                                                    <h2>AED 0</h2>
                                                                    <h3>as of Jan 2024</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="finCard">
                                                                <div>
                                                                    <img src="assets/images/news/nw-3.png"
                                                                        class="img-fluid" alt="">
                                                                    <h3>Total appreciation</h3>
                                                                </div>
                                                                <div>
                                                                    <h2>AED 0</h2>
                                                                    <h3>as of Jan 2024</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="transac-table insights">
                                                    <h3>Quick insights</h3>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="insCard">
                                                                <img src="assets/images/news/nw-4.png" class="img-fluid"
                                                                    alt="">
                                                                <h5>Number of
                                                                    properties</h5>
                                                                <p>{{$properties->count()}} %</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="insCard">
                                                                <img src="assets/images/news/nw-5.png" class="img-fluid"
                                                                    alt="">
                                                                <h5>Occupancy
                                                                    rate</h5>
                                                                <p>0%</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="insCard">
                                                                <img src="assets/images/news/nw-3.png" class="img-fluid"
                                                                    alt="">
                                                                <h5>Annual rental
                                                                    yield
                                                                </h5>
                                                                <p>0%</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="insCard">
                                                                <h6>0% of limit used</h6>
                                                                <progress id="file" value="0" max="100">0%
                                                                </progress>
                                                                <table>
                                                                    <tr>
                                                                        <td>Annual limit</td>
                                                                        <td>AED 183,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Invested in the last 12 months</td>
                                                                        <td>AED 0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Available to invest</td>
                                                                        <td>AED 183,500</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="transac-table">
                                                    <h3>My Stakes</h3>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Property</th>
                                                                <th>Location</th>
                                                                <th>Investment Value</th>
                                                                <th>Total Rental Income</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($properties as $property)
                                                            <tr>
                                                                <td>
                                                                    {{ $property->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $property->investments->sum('investment_amount') }}
                                                                </td>
                                                            </tr>
                                                            
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
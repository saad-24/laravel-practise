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
                            <h2>Cart</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    @if ($cartItems->isNotEmpty())
                                        <!-- Display cart items -->
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Property Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <!-- Add more columns as needed -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cartItems as $item)
                                                    <tr>
                                                        <td>{{ $properties->where('id', $item->property_id)->first()->name }}</td>
                                                        <td>{{ $properties->where('id', $item->property_id)->first()->price }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>
                                                            <figure><img src="{{ asset('/images/prog.png') }}" class="img-fluid" alt=""></figure>
                                                            @php
                                                                $percentage = ($properties->where('id', $item->property_id)->first()->total_investment / $properties->where('id', $item->property_id)->first()->price) * 100;
                                                                $percentage = min($percentage, 100);
                                                            @endphp
                                                            {{ number_format($percentage, 0) }}% Funded
                                                        </td>
                                                    </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('processTransaction')}}" class="btn themeBtn">Pay</a>
                                    @else
                                        <!-- Show empty cart message -->
                                        <div class="cart-empty">
                                            <span><i class="fal fa-shopping-cart"></i></span>
                                            <h3>Your Cart Is Empty</h3>
                                            <p>Looks like you haven’t added any properties in your cart</p>
                                            <a href="{{ route('front.properties') }}" class="themeBtn">View Properties</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
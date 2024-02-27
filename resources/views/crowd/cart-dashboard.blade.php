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
                                    <div class="cart-empty">
                                        <span><i class="fal fa-shopping-cart"></i></span>
                                        <h3>Your Cart Is Empty</h3>
                                        <p>Looks like you haven’t added any properties in your cart</p>
                                        <a href="{{ route('front.properties')}}" class="themeBtn">View Properties</a>
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
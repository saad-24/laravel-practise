@extends('layout.app')

@section('content')
    <section class="registBanner">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-6 p-0">
                    <div class="registForm text-center">
                        <div>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="card regCard">
                                            <form action="{{ route('signup.step4.post') }}" method="POST" id="msform">
                                                @csrf
                                                <div class="form-card">
                                                    <h2 class="sectionheading"><span>Verify Phone Number</span></h2>
                                                    <p>Please enter the one-time-password (OTP) sent to you</p>
                                                    <input type="text" name="otp" placeholder="Code" />
                                                </div>
                                                <button type="submit" class="btn themeBtn">Next</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="registCont">
                        <figure>
                            <img src="{{ asset('/images/moneyImg.png') }}" class="img-fluid w-100" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

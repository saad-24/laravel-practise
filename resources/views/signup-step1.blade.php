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
                                            <form action="{{ route('signup.step1.post') }}" method="POST" id="msform">
                                                @csrf
                                                <div class="field-Display"> </div>
                                                <h2 class="sectionheading"><span>Join</span> <span
                                                        class="yellow">Us</span></h2>
                                                <div class="form-card">
                                                    <label class="fieldlabels">Full Name: *</label>
                                                    <input type="text" name="uname" />

                                                    <label class="fieldlabels">Email: *</label>
                                                    <input type="email" name="email" class="email-Input" />
                                                    <small class="smallForm">We'll never share your email.</small>

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

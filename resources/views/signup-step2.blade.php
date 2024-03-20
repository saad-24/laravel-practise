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
                                            <form action="{{ route('signup.step2.post') }}" method="POST" id="msform">
                                                @csrf
                                                <h2 class="sectionheading"><span>Create password</span></h2>
                                                <div class="form-card">
                                                    <label class="fieldlabels">Password *</label>
                                                    <input type="password" class="email-Input" name="password"
                                                           placeholder="Strong-Password123#." />
                                                    <small class="smallForm">Passwords should have:</small>
                                                    <ul class="passList">
                                                        <li>Minimum length at 8 characters</li>
                                                        <li>At least one uppercase character is required</li>
                                                        <li>At least one lowercase character is required</li>
                                                        <li>Number character(s) is required</li>
                                                    </ul>
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

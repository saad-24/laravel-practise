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
                            <h2>Tier</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="newRight">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="transac-table">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="insCard insQuick">
                                                                <h6>Crowd Intro <i class="far fa-angle-right"></i></h6>
                                                                <p>AED 0 <span>Invested in the last 12 months</span></p>
                                                                <progress id="file" value="0" max="100">0%
                                                                </progress>
                                                                <p>Invest AED 25,000 to reach Plus</p>
                                                            </div>
                                                            <a href="javascript:;" class="themeBtn themeBtnTwo">Learn
                                                                More
                                                                About
                                                                Tiers</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="financial-timline insCard insQuick">
                                                                <ul class="ft-list">
                                                                    <li>
                                                                        <span><i class="far fa-dot-circle"></i></span>
                                                                        <span>
                                                                            <h5>Intro </h5>
                                                                            <p>AED 200 for every qualified referral</p>
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span><i class="far fa-dot-circle"></i></span>
                                                                        <span>
                                                                            <div class="d-flex justify-content-between">
                                                                                <h5>Plus</h5>
                                                                                <p><i class="fal fa-lock-alt"></i> AED
                                                                                    25,000 to unlock</p>
                                                                            </div>
                                                                            <p>AED 400 for every qualified referral</p>
                                                                            <p>1% cashback on every investment</p>
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span><i class="far fa-dot-circle"></i></span>
                                                                        <span>
                                                                            <div class="d-flex justify-content-between">
                                                                                <h5>Elite</h5>
                                                                                <p><i class="fal fa-lock-alt"></i> AED
                                                                                    100,000 to unlock</p>
                                                                            </div>
                                                                            <p>AED 400 for every qualified referral</p>
                                                                            <p>2% cashback on every investment</p>
                                                                            <p>Welcome gift pack</p>
                                                                        </span>
                                                                    </li>
                                                                </ul>
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
                </div>
            </div>
        </div>
    </section>
@endsection

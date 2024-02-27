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
                            <h2>Rewards</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="newRight">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="depCardnew">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="depCard">
                                                                <div>
                                                                    <h3>Total rewards earned</h3>
                                                                    <h4>AED 0</h4>
                                                                    <p>view current balance <i
                                                                            class="far fa-angle-right"></i></p>
                                                                </div>
                                                                <div>
                                                                    <span>
                                                                        <img src="assets/images/star.png"
                                                                            class="img-fluid" alt="">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="depCard">
                                                                <table>
                                                                    <tr>
                                                                        <td><span><img src="assets/images/news/nw-1.png"
                                                                                    class="img-fluid" alt=""></span>
                                                                            Cashback</td>
                                                                        <td>AED 0</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td><span><img src="assets/images/news/nw-6.png"
                                                                                    class="img-fluid" alt=""> Referrals
                                                                        </td>
                                                                        <td>AED 0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span><img src="assets/images/news/nw-7.png"
                                                                                    class="img-fluid" alt=""> Promotions
                                                                        </td>
                                                                        <td>AED 0</td>
                                                                    </tr>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="transac-table insights">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="insCard insQuick">
                                                                <h6>Crowd Intro <i class="far fa-angle-right"></i></h6>
                                                                <p>AED 0 <span>Invested in the last 12 months</span></p>
                                                                <progress id="file" value="0" max="100">0%
                                                                </progress>
                                                                <p>Invest AED 25,000 to reach Plus</p>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="insCard insQuick">
                                                                <h6>Refer And Earn <i class="far fa-angle-right"></i>
                                                                </h6>
                                                                <p>Invite your friends and you’ll both receive a rewards
                                                                    balance to invest in
                                                                    our properties!</p>
                                                                <ul>
                                                                    <li><i class="far fa-check"></i> Friends get AED 200
                                                                        upon signing up</li>
                                                                    <li><i class="far fa-check"></i> You get AED 200
                                                                        after they invest AED 2,000</li>
                                                                </ul>

                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="inputPassword2">
                                                                    </div>
                                                                    <button type="submit" class="btn themeBtn">Confirm
                                                                        identity</button>
                                                                </form>
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
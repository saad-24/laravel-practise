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
                            <h2>Wallet</h2>
                        </div>
                        <div class="drBottom">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="newRight">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="depCard">
                                                    <div>
                                                        <h3>Cash Balance</h3>
                                                        <h4>AED {{ number_format($wallet->wallet_balance) }}</h4>
                                                    </div>
                                                    <div class="depButton">
                                                        <a href="{{ route('wallet') }}" class="depBtn">Deposit</a>
                                                        <button class="depBtn">Withdraw</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="depCard">
                                                    <div>
                                                        <h3>Cash Balance</h3>
                                                        <h4>AED 0</h4>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <img src="assets/images/star.png" class="img-fluid" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="transac-table">
                                                    <h3>Transactions</h3>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Type</th>
                                                                <th>Status</th>
                                                                <th>Date</th>
                                                                <th>Wallet</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <!-- <tbody>
                                                            <tr></tr>
                                                        </tbody> -->
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="bankCards">

                                                    <h3>Cards</h3>
                                                    <div class="bankCardInner">
                                                        @foreach ($card as $item)
                                                        <div class="card w-50 d-flex">
                                                            <div class="card-body">
                                                              <h5 class="card-title">{{$item->card_name}}</h5>
                                                              <p class="card-text font-weight-bold">{{$item->card_number}}</p>
                                                              {{-- <a href="#" class="btn btn-primary">Button</a> --}}
                                                            </div>
                                                            <div class="card-buttons">
                                                                <a href="{{ route('edit-card', $item->id) }}" class="btn btn-primary">Edit</a>
                                                                <a href="{{ route('delete-card', $item->id) }}" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                        <p><span><i class="fas fa-credit-card-blank"></i></span> Add a
                                                            card to enjoy instant deposits from
                                                            anywhere in the
                                                            world</p>
                                                        <a href="{{ route('crowd.card')}}"><button class="addcardBtn"><i class="fal fa-plus"></i> Add New
                                                            Card</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="bankCards">
                                                    <h3>Banks</h3>
                                                    <div class="bankCardInner">
                                                        <p><span><i class="fas fa-university"></i></span> Add a
                                                            bank account to deposit from anywhere in the world</p>
                                                        <button class="addcardBtn"><i class="fal fa-plus"></i> Add New
                                                            Card</button>
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

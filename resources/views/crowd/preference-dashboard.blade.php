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
                            <h2>Preferences</h2>
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
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for=""><span><i
                                                                                        class="fal fa-globe"></i></span>Language</label>
                                                                        </div>
                                                                        <div class="col">
                                                                                <div id="google_translate_element" class="menuDropdown mt-3"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for=""><span><i
                                                                                        class="far fa-dollar-sign"></i></span>
                                                                                Currency</label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <select id="currencyDropdown"
                                                                                    class="form-control">
                                                                                    <option selected>Select Currency</option>
                                                                                    <option value="AED">AED</option>
                                                                                    <option value="EGP">EGP</option>
                                                                                    <option value="USD">USD</option>
                                                                                    <option value="EUR">EUR</option>
                                                                                    <option value="GBP">GBP</option>
                                                                                    <option value="SAR">SAR</option>
                                                                                    <option value="KWD">KWD</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="mailMarket">
                                                                <h3>Marketing emails</h3>
                                                                <p>Receive newsletters, promotional offers, new property
                                                                    launch emails and more.</p>
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

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
                        <h2>Account information</h2>
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
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td>Name</td>
                                                                    <td>{{ ucwords($user->name) }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>{{ $user->email }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone Number</td>
                                                                    <td>1234567890</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Investor Type</td>
                                                                    <td>Retail</td>
                                                                </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <td>Need help updating information?</td>
                                                                    <td><a href="javascript:;"
                                                                           class="infotabBtn"> <i
                                                                                class="fal fa-comment"></i>
                                                                            Help
                                                                            and
                                                                            Support</a></td>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        <a href="javascript:;" class="btnRed">delete account</a>
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

@extends('layout.admin')

@section('content')
    @include('admin.admin-panel-left')
    <div class="container-fluid" style="padding-bottom: 3rem">
        <div class="col-md-12 d-flex justify-content-end mb-4 pt-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <h1 class="wallet-text text-center font-weight-bolder">Wallet Balance</h1>
            <br>
            <table class="table">

                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Wallet ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Wallet Balance</th>
                    <th scope="col">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wallet as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        @php
                            $user = \App\Models\User::find($item->user_id);
                        @endphp
                        <td>{{ $user->name }}</td>
                        <td>{{ $item->wallet_balance }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <h1 class="wallet-text text-center font-weight-bolder">Wallet Logs</h1>
            <br>
            <table class="table">

                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Log ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wallet_logs as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        @php
                            $user = \App\Models\User::find($item->user_id);
                        @endphp
                        <td>{{ $user->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->amount }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

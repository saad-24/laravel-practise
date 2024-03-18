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
            <h1 class="wallet-text text-center font-weight-bolder">Property Ownerships</h1>
            <br>
            <table class="table">

                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Ownership ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Property Name</th>
                    <th scope="col">Percentage Ownership</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ownerships as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        @php
                            $user = \App\Models\User::find($item->user_id);
                        @endphp
                        <td>{{ $user->name }}</td>
                        @php
                            $property = \App\Models\Property::find($item->property_id);
                        @endphp
                        <td>{{ $property->name }}</td>
                        <td>{{ $item->percentage_ownership }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

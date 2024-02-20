@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Welcome to Your Dashboard, {{ $user->name }}</h1>

        <div class="d-flex justify-content-center">
            <h2>Investment History</h2>
            <table>
                <thead>
                <tr>
                    <th>Apartment</th>
                    <th>Amount</th>
                    <th>Total Investment</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($properties as $property)
                        <tr>
                            <th>{{ $property->name }}</th>
                            <th>{{ $property->price }}</th>
                            <th>{{ $property->total_investment }}</th>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

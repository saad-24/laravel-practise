@extends('layout.app')

@section('content')
    <h2 class="alert alert-primary" role="alert">{{ $property->name }}</h2>
    <h6>
        @php
            $percentage = ($property->total_investment / $property->price) * 100;

            $percentage = min($percentage, 100);
        @endphp
        {{ number_format($percentage, 0) }}% Funded
    </h6>
    <h6>
        @php
//            $available = $property->price - $property->total_investment;
            $available = max($property->price - $property->total_investment, 0);
        @endphp
        AED {{ number_format($available) }} Available
    </h6>
@endsection

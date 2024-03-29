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
            $available = max($funded->price - $property->total_investment, 0);
        @endphp
        AED {{ number_format($available) }} Available
    </h6>
{{--    <h6>--}}
{{--        Total Investors: {{ \App\Models\Investment::where('property_id', $property->id)->distinct()->count('user_id') }}--}}
{{--    </h6>--}}
{{--    <div>--}}
{{--        @foreach ($property->images as $image)--}}
{{--            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid" alt="Property Image">--}}
{{--        @endforeach--}}
{{--    </div>--}}

@endsection

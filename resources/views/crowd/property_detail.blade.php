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
            $available = max($property->price - $property->total_investment, 0);
        @endphp
        AED {{ number_format($available) }} Available
    </h6>
    <h6>
        Total Investors: {{ \App\Models\Investment::where('property_id', $property->id)->distinct()->count('user_id') }}
    </h6>
    <div>
        @foreach ($property->images as $image)
            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid" alt="Property Image">
        @endforeach
    </div>
    @if(Auth::check() && !Auth::user()->is_admin)
        <form action="{{ route('properties.pay', $property) }}" method="post">
            @csrf
            <input type="number" name="amount" placeholder="Enter amount">
            <button type="submit">Pay</button>
        </form>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Auth::check() && Auth::user()->is_admin)
    <form action="{{ route('properties.move-to-funded', $property) }}" method="post">
        @csrf
        <button type="submit">Move to Funded</button>
    </form>
    @endif
@endsection

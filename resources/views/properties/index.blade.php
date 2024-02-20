@extends('layout.app')

@section('content')
    @foreach ($properties as $property)
        <div>
            <h3>{{ $property->name }}</h3>
            <p>{{ $property->description }}</p>
            <p>Price: ${{ $property->price }}</p>
            <form action="{{ route('properties.pay', $property) }}" method="post">
                @csrf
                <input type="number" name="amount" placeholder="Enter amount">
                <button type="submit">Pay</button>
            </form>
            <hr>
        </div>
    @endforeach
@endsection

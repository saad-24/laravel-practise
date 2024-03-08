@extends('layout.app')

@section('content')
@if(Auth::check() && !Auth::user()->is_admin)
        <form action="{{ route('properties.pay') }}" method="post">
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
@endsection
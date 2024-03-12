@extends('layout.app')

@section('content')
    <a href="{{ route('processTransaction')}}" class="btn themeBtn">Pay with Paypal</a>
    <a href="{{ route('stripe')}}" class="btn themeBtn">Pay with Stripe</a>
    <a href="{{ route('properties.pay')}}" class="btn themeBtn">Test Payment</a>
    <a href="{{ route('cart.withdraw')}}" class="btn themeBtn">Pay by Wallet</a>
@endsection

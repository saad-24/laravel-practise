@extends('layout.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                {{ session('error') }}
            </div>

            <img src="{{ asset('/images/wallet_error.jpg') }}" class="img-fluid">
        </div>
    </div>
@endsection

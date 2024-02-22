@extends('layout.app')

@section('content')
    @foreach ($properties as $property)
    <h2 class="alert alert-primary" role="alert">{{ $property->name }}</h2>
    @endforeach
@endsection

@extends('layout.app')

@section('content')
    <div>
        <h2>Add New Property</h2>
        <form method="POST" action="{{ route('admin.property.store') }}">
            @csrf
            <div>
                <label for="name">Property Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <button type="submit">Save Property</button>
        </form>
    </div>
@endsection

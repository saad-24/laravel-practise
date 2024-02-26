@extends('layout.app')

@section('content')
    <div>
        <h2>Edit Property</h2>
        <form method="POST" action="{{ route('admin.property.update', $property) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Include method spoofing for PUT request -->
            <div>
                <label for="name">Property Name:</label>
                <input type="text" id="name" name="name" value="{{ $property->name }}" required>
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="{{ $property->price }}" required>
            </div>
            <!-- Add image display and update functionality if needed -->
            <button type="submit">Update Property</button>
        </form>
    </div>
@endsection

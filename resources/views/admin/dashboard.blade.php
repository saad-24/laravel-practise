@extends('layout.app')

@section('content')
    <div>
        <h2>Add New Property</h2>
        <form method="POST" action="{{ route('admin.property.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Property Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div>
                <label for="images">Images:</label>
                <input type="file" id="images" name="images[]" accept="image/*" multiple required>
            </div>
            <button type="submit">Save Property</button>
        </form>
    </div>
@endsection

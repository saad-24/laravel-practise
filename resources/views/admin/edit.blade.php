@extends('layout.app')

@section('content')
    <div class="edit-form">
        <h2>Edit Property</h2>
        <form method="POST" action="{{ route('admin.property.update', $property) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Include method spoofing for PUT request -->
            <div class="form-row">
            <div class="form-group">
                <label for="name">Property Name:</label>
                <input type="text" id="name" name="name" value="{{ $property->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="{{ $property->price }}" required>
            </div>
            </div>
            
            <div class="form-row">
            <div class="form-group">
                <label for="images">Images:</label>
                <input type="file" id="images" name="images[]" accept="image/*" multiple required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group">
                <label for="price">Bed:</label>
                <input type="text" id="bed" name="bed" value="{{ $property->bed }}" required>
            </div>
            <div class="form-group">
                <label for="price">Bath:</label>
                <input type="text" id="bath" name="bath" value="{{ $property->bath }}" required>
            </div>
            <div class="form-group">
                <label for="price">Area:</label>
                <input type="text" id="area" name="area" value="{{ $property->area }}" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group">
                <label for="price">Category:</label>
                <input type="text" id="category" name="category" value="{{ $property->category }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" value="{{ $property->status }}" required>
                    <option value="available">available</option>
                    <option value="funded">funded</option>
                    <option value="exited">exited</option>
                </select>
            </div>
            </div>
            <!-- Add image display and update functionality if needed -->
            <button type="submit">Update Property</button>
        </form>
    </div>
@endsection

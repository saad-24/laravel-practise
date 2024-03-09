@extends('layout.app')

@section('content')
    <div class="edit-form">
        <h2>Add New Property</h2>
        <form method="POST" action="{{ route('admin.property.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Property Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                </div>

                <div class="form-row">
                <div class="form-group">
                    <label for="images">Images:</label>
                    <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group">
                    <label for="price">Bed:</label>
                    <input type="text" class="form-control" id="bed" name="bed" required>
                </div>
                <div class="form-group">
                    <label for="price">Bath:</label>
                    <input type="text" class="form-control" id="bath" name="bath" required>
                </div>
                <div class="form-group">
                    <label for="price">Area:</label>
                    <input type="text" class="form-control" id="area" name="area" required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group">
                    <label for="price">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" class="custom-select" name="status" required>
                        <option value="available">available</option>
                        <option value="funded">funded</option>
                        <option value="exited">exited</option>
                    </select>
                </div>
                </div>
                <!-- Add image display and update functionality if needed -->
                <div class="form-group">
                <button type="submit" class="btn themeBtn">Add Property</button>
                </div>
        </form>
    </div>
@endsection

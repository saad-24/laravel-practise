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
                <div class="form-group">
                    <label for="address_address">Address</label>
                    <input type="text" id="address-input" name="address_address" class="form-control map-input">
                    <input name="address_latitude" id="address-latitude" />
                    <input name="address_longitude" id="address-longitude" />
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="annualized_return">Annualized Return:</label>
                        <input type="text" class="form-control" name="annualized_return" required>
                    </div>
                    <div class="form-group">
                        <label for="annual_appreciation">Annual Appreciation:</label>
                        <input type="text" class="form-control" name="annual_appreciation" required>
                    </div>
                    <div class="form-group">
                        <label for="projected_gross_yield">Projected Gross Yield:</label>
                        <input type="text" class="form-control" name="projected_gross_yield" required>
                    </div>
                    <div class="form-group">
                        <label for="projected_net_yield">Projected Net Yield:</label>
                        <input type="text" class="form-control" name="projected_net_yield" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Property Overview:</label>
                    <textarea name="property_overview" id="editor"></textarea>
                </div>
                <div id="amenities">
                    <div class="amenity">
                        <input type="text" name="amenities[]" placeholder="Amenity">
                        <button type="button" class="add-amenity">Add Amenity</button>
                    </div>
                </div>
                <!-- Add image display and update functionality if needed -->
                <div class="form-group">
                <button type="submit" class="btn themeBtn">Add Property</button>
                </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const amenitiesContainer = document.getElementById('amenities');
            const addAmenityButton = document.querySelector('.add-amenity');

            addAmenityButton.addEventListener('click', function() {
                const newAmenityField = document.createElement('div');
                newAmenityField.classList.add('amenity');
                newAmenityField.innerHTML = `
                <input type="text" name="amenities[]" placeholder="Amenity">
                <button type="button" class="remove-amenity">Remove</button>
            `;
                amenitiesContainer.appendChild(newAmenityField);
            });

            amenitiesContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-amenity')) {
                    event.target.closest('.amenity').remove();
                }
            });
        });
    </script>
@endsection

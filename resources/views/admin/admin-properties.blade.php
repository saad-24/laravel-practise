@extends('layout.admin')

@section('content')
    @include('admin.admin-panel-left')
    <div class="container-fluid">
        <div class="col-md-12 d-flex justify-content-end mb-4 pt-4">
            <a href="{{ route('admin.property.store') }}" class="btn themeBtn">Add Property</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <h1 class="wallet-text text-center font-weight-bolder">Property Details</h1>
            <br>
            <table class="table">
                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Property ID</th>
                    <th scope="col">Property Name</th>
                    <th scope="col">Property Price</th>
                    <th scope="col">Bed</th>
                    <th scope="col">Bath</th>
                    <th scope="col">Area</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                    <tr>
                        <th scope="row">{{ $property->id }}</th>
                        <td>{{ $property->name }}</td>
                        <td>{{ $property->price }}</td>
                        <td>{{ $property->bed }}</td>
                        <td>{{ $property->bath }}</td>
                        <td>{{ $property->area }}</td>
                        <td>
                            <a href="{{ route('admin.property.edit', $property->id) }}" class="btn themeBtn">Edit</a>
                            <a href="{{ route('admin.property.destroy', $property->id) }}" class="btn btn-danger danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

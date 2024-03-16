@extends('layout.admin')

@section('content')
    @include('admin.admin-panel-left')
    <div class="container-fluid">
        <div class="col-md-12 d-flex justify-content-end mb-4 pt-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <table class="table">
                <thead style="background: linear-gradient(180deg, #d7960a, #b68911);color: white;">
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="" class="btn btn-danger danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

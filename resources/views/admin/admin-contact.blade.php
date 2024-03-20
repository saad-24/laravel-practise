@extends('layout.admin')

@section('content')
    @include('admin.admin-panel-left')
    <div class="container-fluid" style="padding-bottom: 3rem">
        <div class="col-md-12 d-flex justify-content-end mb-4 pt-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <h1 class="wallet-text text-center font-weight-bolder">Customer Queries</h1>
            <br>
            <table class="table">
                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Query ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Query</th>
                    <th scope="col">Response</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($queries as $query)
                    <tr>
                        <th scope="row">{{ $query->id }}</th>
                        @php
                            $user = \App\Models\User::find($query->user_id);
                        @endphp
                        <td>{{ $user->name }}</td>
                        <td>{{ $query->query }}</td>
                        <td>{{ $query->response }}</td>
                        <td>
                            <a href="{{ route('contacts.respond', $query) }}" class="btn btn-danger danger">Respond</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

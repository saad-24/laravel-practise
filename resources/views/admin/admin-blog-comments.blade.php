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
            <h1 class="wallet-text text-center font-weight-bolder">Blog Comments</h1>
            <br>
            <table class="table">
                <thead style="background-color: #f8f8f8;">
                <tr>
                    <th scope="col">Blog ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Blog Comment</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blog_comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->blog_id }}</th>
                        @php
                            $user = \App\Models\User::find($comment->user_id);
                        @endphp
                        <td>{{ $user->name }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>
                            <a href="{{ route('comments.destroy', $comment->id) }}" class="btn btn-danger danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@extends('layout.admin')

@section('content')
    @include('admin.admin-panel-left')
    <div class="container-fluid">
        <div class="col-md-12 d-flex justify-content-end mb-4 pt-4">
            <a href="{{ route('admin.blog.form') }}" class="btn themeBtn">Add Blog</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10" style="padding-left: 75px;">
            <table class="table">
                <thead style="background: linear-gradient(180deg, #d7960a, #b68911);color: white;">
                <tr>
                    <th scope="col">Blog ID</th>
                    <th scope="col">Blog Name</th>
                    <th scope="col">Blog Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td>{{ $blog->blog_name }}</td>
                        <td>{{ $blog->blog_content }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>
                            <a href="" class="btn themeBtn">Edit</a>
                            <a href="" class="btn btn-danger danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@extends('layout.app')

@section('content')
<body class="regBody">
    <section class="registBanner">
        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('signup') }}">
                @csrf <!-- CSRF Token -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn themeBtn">Signup</button>
            </form>
        </div>
    </section>
@endsection

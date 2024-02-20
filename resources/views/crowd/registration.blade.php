@extends('layout.app')

@section('content')

<body class="regBody">
    <section class="registBanner">
        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('signup') }}">
                @csrf <!-- CSRF Token -->
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <button class="next themeBtn" type="submit">Signup</button>
                </div>
            </form>
        </div>
    </section>
@endsection

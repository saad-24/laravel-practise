@extends('layout.app')

@section('content')
<h2>Login</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf <!-- CSRF Token -->

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
<form method="GET" action="{{ route('signup') }}">
    @csrf
    <div>
        <button type="submit">Signup</button>
    </div>
</form>
@endsection

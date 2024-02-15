@extends('layout.app')

@section('content')
<h2>Signup</h2>

<!-- Form for signup -->
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
        <button type="submit">Signup</button>
    </div>
</form>
@endsection

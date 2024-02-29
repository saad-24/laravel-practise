@extends('layout.app')

@section('content')
<section>
    <div class="container d-flex justify-content-center">
        <h2>Signup</h2>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
    </div>
</section>
@endsection

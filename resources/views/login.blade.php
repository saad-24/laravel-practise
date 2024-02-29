@extends('layout.app')

@section('content')
    <section>
        <div class="container d-flex justify-content-center">
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
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn themeBtn">Login</button>
                <a href="{{ route('signup') }}" class="btn themeBtn">Signup</a>
            </form>
            
            

        </div>
    </section>

@endsection

<form method="POST" action="{{ route('logout') }}">
    @csrf <!-- CSRF Token -->
    <button type="submit">Logout</button>
</form>

<h1>Home Page</h1>

@extends('layout.app')

@section('content')
    <form action="{{ route('wallet.deposit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
            <label for="amount">Amount to Deposit</label>
            <input type="number" class="form-control" name="amount">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

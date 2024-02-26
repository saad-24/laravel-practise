@extends('layout.app')

@section('content')
    @foreach ($properties as $property)
        <div>
            <h2 class="alert alert-primary" role="alert">{{ $property->name }}</h2>
            <a href="{{ route('admin.property.edit', $property->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.property.destroy', $property->id) }}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

@extends('layout.admin')

@section('content')
<form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Blog Name:</label>
        <input type="text" class="form-control" id="name" name="blog_name" value="{{ $blog->blog_name }}" required>
    </div>
    <div class="form-group">
        <label for="content">Blog Content:</label>
        <textarea name="blog_content" id="editor">{{ $blog->blog_content }}</textarea>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="images">Images:</label>
            <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple required>
        </div>
    </div>

    <div class="form-group">
        <label for="price">Category:</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ $blog->category }}" required>
    </div>

    <!-- Add image display and update functionality if needed -->
    <div class="form-group">
        <button type="submit" class="btn themeBtn">Add Blog</button>
    </div>
</form>
@endsection

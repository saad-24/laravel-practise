@extends('layout.app')

@section('content')
    <div class="edit-form">
        <h2>Add New Blog</h2>
        <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Blog Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="content">Blog Content:</label>
                <textarea name="content" id="editor"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="images">Images:</label>
                    <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple required>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Category:</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>

            <!-- Add image display and update functionality if needed -->
            <div class="form-group">
                <button type="submit" class="btn themeBtn">Add Blog</button>
            </div>
        </form>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        // Create the comment
        $comment = new BlogComment();
        $comment->blog_id = $blog->id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function destroy(BlogComment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}

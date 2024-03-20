<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function edit(Blog $blog)
    {
        return view('admin.edit_blog', compact('blog'));
    }

    public function blogDetail(Blog $blog)
    {
        $blog->load('comments.user');
        $blog->loadCount('comments');
        return view('crowd.blog-single', compact('blog'));
    }

    public function adminBlogComment()
    {
        $blog_comments = BlogComment::all();
        return view('admin.admin-blog-comments', compact('blog_comments'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blog_name' => 'required',
            'blog_content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update blog data
        $blog->update($request->all());

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $blog->image = $imagePath;
            $blog->save();
        }

        return redirect()->route('admin.panel.blog', $blog)->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        // Delete the blog record
        $blog->delete();

        return redirect()->route('admin.panel.blog')->with('success', 'Blog deleted successfully.');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function edit(Blog $blog)
    {
        return view('admin.edit_blog', compact('blog'));
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

}

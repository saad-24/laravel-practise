<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['blog_name', 'blog_content', 'category'];

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;
    public function blogsData(){
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}

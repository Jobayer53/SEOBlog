<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }
    public function cat_to_blog()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function breadcrumbs()
    {
        $breadcrumbs = [];
        $category = $this;
        while ($category) {
            array_unshift($breadcrumbs, $category);
            $category = $category->parentCategory;
        }
        return $breadcrumbs;
    }
    // public function blogData(){
    //     return $this->hasMany(Blog::class, 'category_id');
    // }
}

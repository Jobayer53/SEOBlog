<?php

namespace App\Http\Controllers;

use Photo;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        return view('backend.category.category');
    }
    function categoryCreate(){
        return view('backend.category.categoryCreate');
    }
    function categoryStore(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        Photo::upload($request->image,'upload/category','CAT');

        $category = new Category();
        $category->parent_category  = $request->parent_category;
        $category->name             = $request->name;
        $category->image            = Photo::$name;
        $category->slugs            = Str::slug($request->name);
        $category->seo_title        = $request->seo_title;
        $category->seo_description  = $request->seo_description;
        $category->seo_tags         = $request->seo_tag;
        $category->save();

        return redirect(route('category'));
    }

    public function categoryDelete($id){
        echo $id;
    }


}

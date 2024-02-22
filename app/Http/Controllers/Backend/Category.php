<?php

namespace App\Http\Controllers\Backend;

use Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;

class Category extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     $categories = ModelsCategory::orderBy('id','desc')->get();
    //     return view('backend.category.category',compact('categories'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $categories = ModelsCategory::all();
    //     return view('backend.category.categoryCreate',compact('categories'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //     ]);

    //     Photo::upload($request->image,'upload/category','CAT');

    //     $category = new ModelsCategory();
    //     $category->parent_category  = $request->parent_category;
    //     $category->name             = $request->name;
    //     $category->image            = Photo::$name;
    //     $category->slugs            = Str::slug($request->name);
    //     $category->seo_title        = $request->seo_title;
    //     $category->seo_description  = $request->seo_description;
    //     $category->seo_tags         = $request->seo_tag;
    //     $category->save();

    //     return redirect(route('category.index'));
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Category $category)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     $category = ModelsCategory::find($id);
    //     $categories = ModelsCategory::all();

    //     return view('backend.category.categoryEdit',compact('category','categories'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, ModelsCategory $category)
    // {


    //     if ($request->image) {
    //         if($category->image == null){
    //             Photo::upload($request->image,'upload/category','CAT');
    //             $category->image = Photo::$name;
    //         }else{
    //             Photo::delete('upload/category',$category->image);
    //             Photo::upload($request->image,'upload/category','CAT');
    //             $category->image = Photo::$name;
    //         }
    //     }

    //     $category->parent_category  = $request->parent_category;
    //     $category->name             = $request->name;
    //     $category->slugs            = Str::slug($request->name);
    //     $category->seo_title        = $request->seo_title;
    //     $category->seo_description  = $request->seo_description;
    //     $category->seo_tags         = $request->seo_tags;
    //     $category->save();
    //     return redirect(route('category.index'));
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     $category = ModelsCategory::find($id);
    //     if($category->image == null){
    //         $category->delete();
    //     }else{
    //         $delete_from = public_path("upload/category/".$category->image);
    //         unlink($delete_from);
    //         $category->delete();
    //     }



    //   return back();
    // }
}





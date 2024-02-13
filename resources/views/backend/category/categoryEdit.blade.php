@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-xl-8 col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Category </h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <select name="parent_category" class="form-control default-select">
                                @if ($category->parent_category == null)
                                <option selected value="" >NO CATEGORY SELECTED</option>
                                @foreach ($categories as $data )
                                <option value="{{$data->id}}"> {{$data->name}} </option>
                                @endforeach
                                @else
                                    @foreach ($categories as $data )
                                        <option {{$data->id == $category->parent_category?'selected':'' }} value="{{$data->id}}"> {{$data->name}} </option>
                                    @endforeach
                                @endif


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control input-default " id="name" name="name" value="{{$category->name}}">
                            @error('name')
                            <strong class="text text-danger"> {{$message}} </strong>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Seo Title</label>
                            <input type="text" class="form-control input-default " id="seo_title" name="seo_title" value="{{$category->seo_title}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Seo Description</label>
                           <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10">{{$category->seo_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Seo Tags</label>
                            <input type="text" class="form-control input-default " id="seo_tags" name="seo_tags"value="{{$category->seo_tags}}" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control input-default " id="image" name="image" >
                        </div>
                        <div class="form-group text-center">
                           <button class="btn btn-info">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

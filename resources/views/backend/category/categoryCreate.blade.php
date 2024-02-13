@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-xl-8 col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Category</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <select name="parent_category" class="form-control default-select">
                                @if ($categories->count('id') == 0)
                                <option value="" >NO DATA TO SHOW</option>
                                @else
                                <option value="">SELECT CATEGORY</option>
                                    @foreach ($categories as $data )

                                        <option value="{{$data->id}}"> {{$data->name}} </option>
                                    @endforeach

                                @endif


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control input-default " id="name" name="name" >
                            @error('name')
                            <strong class="text text-danger"> {{$message}} </strong>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Seo Title</label>
                            <input type="text" class="form-control input-default " id="seo_title" name="seo_title" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Seo Description</label>
                           <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Seo Tags</label>
                            <input type="text" class="form-control input-default " id="seo_tag" name="seo_tag" >
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

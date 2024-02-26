@extends('layouts.dashboard')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"  />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
@endsection
@section('content')
<div class="container-fluid">
    <div  class="page-titles ">
        <h4>Blog </h4>
        <ol class="breadcrumb">
            <li class=""><a href="{{route('home')}}">Dashboard </a></li>
            <li style="margin:0px 5px 0px 2px!important">/</li>
            <li class=""><a href="{{route('blogs')}}"> Blogs</a></li>
            <li style="margin:0px 5px 0px 2px!important">/</li>
            <li class=""><a href="{{route('blog.content',$blogs->id)}}"> Blog Content</a></li>
            <li style="margin:0px 5px 0px 2px!important">/</li>
            <li class="active"><a href="#">Create Blog Content</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create BLog Content</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('blog_content.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf


                            <div class="form-group">
                                <label for="" class="form-label">Blog Title</label>
                                <input type="text" class="form-control input-default " value="{{ $blogs->title }}" readonly>
                                <input type="hidden"  value="{{ $blogs->id }}" name="blog_id" >

                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Blog Content Title</label>
                                <input type="text" class="form-control input-default " name="contentTitle">
                                @error('contentTitle')
                                <strong class="text text-danger"> {{$message}} </strong>
                                @enderror
                            </div>


                            <div  class="form-group">
                                <label for="" class="form-label">Content</label>
                                <textarea  id="summernote"  name="content"></textarea>
                            </div>

                            @error('content')
                                    <strong class="text text-danger"> {{$message}} </strong>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Video Link</label>
                                <input type="text" class="form-control input-default "  name="videoLink" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Video</label>
                                <input type="file" class="form-control input-default "  name="video" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control input-default " id="image"  name="image" >
                            </div>

                            <div class="form-group text-center">
                               <button  class="btn btn-info btn-sm">Create</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" ></script>
<script>
    $(document).ready(function() {
    $('#summernote').summernote();
  });

</script>
@endsection

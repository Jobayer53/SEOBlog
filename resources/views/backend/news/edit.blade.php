@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update News</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('news.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control input-default " name="title"  value="{{$news->title}}">
                                <input type="hidden"  name="news_id"  value="{{$news->id}}">
                                @error('title')
                                <strong class="text text-danger"> {{$message}} </strong>

                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="" class="form-label">Content</label>
                                <textarea  id="summernote" cols="30" rows="30" placeholder="Body" name="content">{{$news->content}}</textarea>
                            </div>

                            @error('content')
                                    <strong class="text text-danger"> {{$message}} </strong>
                            @enderror

                            <div class="form-group">
                                <label for="" class="form-label">Seo Title</label>
                                <input type="text" class="form-control input-default " id="seo_title"  name="seo_title" value="{{$news->seo_title}}" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Seo Description</label>
                               <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10" name="seo_description" >{{$news->seo_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Seo Tags</label>
                                <input type="text" class="form-control input-default " id="seo_tags"  name="seo_tags" value="{{$news->seo_tags}}" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control input-default " id="image"  name="image" >
                            </div>
                            <div class="form-group text-center">
                               <button  class="btn btn-info btn-sm">Update</button>
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
<script>
    $(document).ready(function() {
    $('#summernote').summernote();
  });

</script>
@endsection
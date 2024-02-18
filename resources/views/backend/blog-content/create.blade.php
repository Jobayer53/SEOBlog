@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

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
                                <label for="" class="form-label">Blog Content Title</label>
                                <input type="text" class="form-control input-default " name="contentTitle">
                                @error('contentTitle')
                                <strong class="text text-danger"> {{$message}} </strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Blog Title</label>
                                <input type="text" class="form-control input-default " value="" readonly>

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
<script>
    $(document).ready(function() {
    $('#summernote').summernote();
  });

</script>
@endsection

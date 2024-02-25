@extends('layouts.dashboard')
@section('content')


<div class="container-fluid">
    <div  class="page-titles ">
        <h4>Blog </h4>
        <ol class="breadcrumb">
            <li class=""><a href="{{route('home')}}">Dashboard </a></li>
            <li style="margin:0px 5px 0px 2px!important">/</li>
            <li class=""><a href="{{route('blogs')}}"> Blogs</a></li>
            <li style="margin:0px 5px 0px 2px!important">/</li>
            <li class="active"><a href="#"> Blog Content</a></li>
        </ol>
    </div>
    <div class="row">
        {{-- <div class="col-lg-12 ">
            <a href="{{route('blog.content.create',$blogs->id)}}">
                <button  type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add Content
                </button>
            </a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Content </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th ><strong>#</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>BLOG TITLE</strong></th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if ($blogContents->count('id')== 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">NO DATA TO SHOW</p>
                                    </td>
                                </tr>

                                @endif


                                @foreach ($blogContents as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if ($data->image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/blog-content')}}/{{$data->image}}" alt="">
                                        @else
                                            <p class="text text-warning" style="height: 80px; width:80px;">NO IMAGE</p>
                                        @endif

                                    </td>
                                    <td> {{$data->title}} </td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('blog_content.edit',$data->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-pencil"></i></a>
                                            <button value="{{$data->id}}"  class="btn btn-danger shadow btn-xs sharp deleteBtn " data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12">
            <a href="{{route('blog.content.create',$blogs->id)}}">
                <button  type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add Content
                </button>
            </a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Contents</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850  table">
                            <thead>
                                <tr>
                                    <th >#</th>
                                    <th>IMAGE</th>
                                    <th>BLOG TITLE</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogContents as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if ($data->image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/blog-content')}}/{{$data->image}}" alt="">
                                        @else
                                            <p class="text text-warning" >NO IMAGE</p>
                                        @endif

                                    </td>
                                    <td> {{$data->title}} </td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('blog_content.edit',$data->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-pencil"></i></a>
                                            <button value="{{$data->id}}"  class="btn btn-danger shadow btn-xs sharp deleteBtn " data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
                                            <a href="{{route('blog.content.status',$data->id)}}"  class="btn btn-{{$data->status == 0? 'dark':'success   '}} shadow btn-xs sharp me-1" ><i class="fa fa-toggle-{{$data->status == 0? 'off':'on'}}" style='font-size:18px'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>




@if(session('added'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{session('added')}}"
        });
    </script>
@endif
@if(session('updated'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{session('updated')}}"
        });
    </script>
@endif










<script>
    $('.deleteBtn').click(function(){
        let id = $(this).val();
        $('#delete_id').val(id);

    })
</script>
<div  class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModal">ARE YOU SURE?</h5>
        </div>

        <div class="modal-footer text-center">
            <form action="{{route('blog.content.delete')}}"  method="POST">
                @csrf

                <input type="hidden" name="delete_id" id="delete_id" value="">
                <button  type="submit" class="btn btn-danger btn-xs ">Delete</button>
            </form>
            <button type="button" class="btn btn-primary btn-xs  " data-bs-dismiss="modal">NO</button>
        </div>
      </div>
    </div>
</div>

@endsection

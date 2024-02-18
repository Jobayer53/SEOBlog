@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <a href="{{route('blog_content.create')}}">
                <button  type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add Content
                </button>
            </a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Lists</h4><br>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>BLOG TITLE</strong></th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if ($blogs->count('id')== 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">NO DATA TO SHOW</p>
                                    </td>
                                </tr>

                                @endif


                                @foreach ($blogs as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if ($data->features_image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/blog')}}/{{$data->features_image}}" alt="">
                                        @else
                                            <p class="text text-warning" style="height: 80px; width:80px;">NO IMAGE</p>
                                        @endif

                                    </td>
                                    <td> {{$data->title}} </td>

                                    <td>
                                        <div class="d-flex">

                                            <a href="{{route('blog_content.show',$data->id)}}" class="btn btn-outline-dark btn-rounded btn-sm  " >Content </a>
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



@endsection


@section('script')
<script>
  document.addEventListener('close-modal', event => {

      $('#createModal').modal('hide');
      $('#deleteModal').modal('hide');
      $('#editModal').modal('hide');

  })
</script>


@endsection

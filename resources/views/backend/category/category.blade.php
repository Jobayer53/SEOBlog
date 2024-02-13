
@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add
            </button>
            </a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>PRIMARY NAME</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($categories->count('id')== 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">NO DATA TO SHOW</p>
                                    </td>
                                </tr>

                                @endif


                                @foreach ($categories as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if ($data->image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/category')}}/{{$data->image}}" alt="">
                                        @else
                                            <p class="text text-warning" style="height: 80px; width:80px;">NO IMAGE</p>
                                        @endif

                                    </td>
                                    <td> {{$data->parent? $data->parent->name:'Unknown' }} </td>
                                    <td> {{$data->name}} </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('category.edit',$data->id)}}" class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-pencil"></i></a>
                                            <button  class="btn btn-danger shadow btn-xs sharp deleteBtn" value="{{$data->id}}" data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
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


<!-- delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModal">ARE YOU SURE?</h5>
        </div>
        <div class="modal-footer text-center">
            <span id="form"></span>
            <button type="button" class="btn btn-primary btn-xs  " data-bs-dismiss="modal">NO</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        // var delete_id =null;
        $(".deleteBtn").click(function(){
            var delete_id = $(this).val();
            let form = `<form action="{{route('category.destroy',':delete_id')}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger btn-xs  ">Delete</button>
            </form>`;
            forms = form.replace(':delete_id', delete_id);
            $('#form').html(forms);
        });
    });
</script>

 </script> --}}

@endsection



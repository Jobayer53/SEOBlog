<div>

@include('livewire.blog.modal')

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <button data-bs-toggle="modal" data-bs-target="#createModal" type="button" class="btn btn-rounded btn-info mb-3">
                <span class="btn-icon-left text-info ">
                    <i class="fa fa-plus color-info"></i>
                </span>
                Add
            </button>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>CATEGORY</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>TITLE</strong></th>

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
                                    <td> {{$data->categoryData->name}} </td>
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
                                            <a href="{{route('blog_content.show',$data->id)}}" class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-eye"></i></a>
                                            <button wire:click="edit({{$data->id}})" class="btn btn-primary shadow btn-xs sharp me-1"  data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa fa-pencil"></i></button>
                                            <button  class="btn btn-danger shadow btn-xs sharp " wire:click="delete_assing({{$data->id}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
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



</div>

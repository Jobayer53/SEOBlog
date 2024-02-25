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
                        <form wire:submit="search">
                            <button class="btn btn-info float-end " type="submit">Search</button>
                            <input class="form-control float-end mx-2" style="width:230px;" type="text" wire:model="query" placeholder="Search here">
                        </form>
                </div>
              



                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
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

                                @foreach ($blogs as $key=> $item)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{ $item->categoryData ? $item->categoryData->name:'UNKNOWN'}} </td>
                                    <td>
                                        @if ($item->features_image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/blog')}}/{{$item->features_image}}" alt="">
                                        @else
                                            <p class="text text-warning" style="height: 80px; width:80px;">NO IMAGE</p>
                                        @endif

                                    </td>

                                    <td> {{$item->title}} </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('blog.content',$item->id)}}" class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-eye"></i></a>
                                            <button wire:click="edit({{$item->id}})" class="btn btn-primary shadow btn-xs sharp me-1"  data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa fa-pencil"></i></button>
                                            <button  class="btn btn-danger shadow btn-xs sharp me-1" wire:click="delete_assing({{$item->id}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
                                            <button wire:click="status({{$item->id}})"  class="btn btn-{{$item->status == 0? 'dark':'success   '}} shadow btn-xs sharp me-1" ><i class="fa fa-toggle-{{$item->status == 0? 'off':'on'}}" style='font-size:18px'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            </table>
                        {{ $blogs->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>











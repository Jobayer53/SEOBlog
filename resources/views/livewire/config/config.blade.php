<div>

@include('livewire.config.modal')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-8 m-auto">
            <button data-bs-toggle="modal" data-bs-target="#createModal" type="button" class="btn btn-rounded btn-info mb-3">
                <span class="btn-icon-left text-info ">
                    <i class="fa fa-plus color-info"></i>
                </span>
                Add
            </button>
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Config List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th ><strong>#</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($configs->count('id')== 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">NO DATA TO SHOW</p>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($configs as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$data->name}} </td>
                                    <td>
                                        <div class="d-flex">
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

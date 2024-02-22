<div>

    @include('livewire.news.modal')

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <a href="{{route('news.create')}}">
                <button  type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add
                </button></a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">News List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850  table">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>TITLE</strong></th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($news->count('id')== 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">NO DATA TO SHOW</p>
                                    </td>
                                </tr>

                                @endif


                                @foreach ($news as $data)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td>
                                        @if ($data->image)
                                            <img style="height: 80px; width:80px;" src="{{asset('upload/news')}}/{{$data->image}}" alt="">
                                        @else
                                            <p class="text text-warning" style="height: 80px; width:80px;">NO IMAGE</p>
                                        @endif

                                    </td>
                                    <td> {{$data->title}} </td>
                                    {{-- <td class="text text-danger" style="cursor: pointer;">  CLICK HERE </td> --}}
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('news.edit',$data->id)}}"   class="btn btn-primary shadow btn-xs sharp me-1" ><i class="fa fa-pencil"></i></a>
                                            <button  class="btn btn-danger shadow btn-xs sharp me-1  " wire:click="delete_assing({{$data->id}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"  ><i class="fa fa-trash"></i> </button>
                                            <button wire:click="status({{$data->id}})"  class="btn btn-{{$data->status == 0? 'dark':'success   '}} shadow btn-xs sharp me-1" ><i class="fa fa-toggle-{{$data->status == 0? 'off':'on'}}" style='font-size:18px'></i></button>


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

@section('script')
<script>
  document.addEventListener('close-modal', event => {

      $('#createModal').modal('hide');
      $('#deleteModal').modal('hide');
      $('#editModal').modal('hide');

  })
</script>

@endsection

</div>




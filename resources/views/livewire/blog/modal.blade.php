<div>

<!-- create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModal">Create Blog</h5>
          <button type="button" class="btn-close" wire:click="close" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store" >
                @csrf
                <div class="form-group">

                    <select name="category_id" wire:model="category_id" class="form-control default-select">
                        @if ($categories->count('id') == 0)
                        <option value="" >NO DATA TO SHOW</option>
                        @else
                        <option value="" >SELECT CATEGORY</option>
                            @foreach ($categories as $data )
                                <option value="{{$data->id}}"> {{$data->name}} </option>
                            @endforeach
                        @endif
                    </select>

                    @error('category_id')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control input-default " wire:model="title">
                    @error('title')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Seo Title</label>
                    <input type="text" class="form-control input-default " id="seo_title" name="seo_title"  wire:model="seo_title" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Seo Description</label>
                   <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10" wire:model="seo_description"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Seo Tags</label>
                    <input type="text" class="form-control input-default " id="seo_tags" name="seo_tags" wire:model="seo_tags" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Features Image</label>
                    <input type="file" class="form-control input-default " id="image" name="image" wire:model="features_image" >
                    @error('features_image')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>
                <div class="form-group text-center">
                   <button  class="btn btn-info btn-sm">Create</button>
                </div>

            </form>
        </div>

      </div>
    </div>
  </div>
<!-- create Modal -->

<!-- edit Modal -->
<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModal">Update Blog</h5>
          <button type="button" class="btn-close" wire:click="close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update" >
                @csrf
                <div class="form-group">
                    <select name="category_id" wire:model="category_id" class="form-control default-select">
                        @if ($categories->count('id') == 0)
                        <option value="" >NO DATA TO SHOW</option>
                        @else

                            @foreach ($categories as $data )
                                <option value="{{$data->id}}"> {{$data->name}} </option>
                            @endforeach
                        @endif
                    </select>
                    @error('category_id')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control input-default " wire:model="title">
                    <input type="hidden"  wire:model="blog_id">
                    @error('title')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Seo Title</label>
                    <input type="text" class="form-control input-default " id="seo_title" name="seo_title"  wire:model="seo_title" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Seo Description</label>
                   <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10" wire:model="seo_description"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Seo Tags</label>
                    <input type="text" class="form-control input-default " id="seo_tags" name="seo_tags" wire:model="seo_tags" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Features Image</label>
                    <input type="file" class="form-control input-default " id="image" name="image" wire:model="features_image" >
                    @error('features_image')
                    <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>
                <div class="form-group text-center">
                   <button  class="btn btn-info btn-sm">Update</button>
                </div>

            </form>
        </div>

      </div>
    </div>
</div>
<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Deleting this blog will result in the deletion of all associated blog content! Are you sure?</h5>
        </div>

        <div class="modal-footer text-center">
            <form wire:submit.prevent="delete" method="POST">
                @csrf
                @method("DELETE")
                <button  type="submit" class="btn btn-danger btn-xs ">Delete</button>
            </form>
            <button type="button" class="btn btn-primary btn-xs  " data-bs-dismiss="modal">NO</button>
        </div>
      </div>
    </div>
</div>



  {{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}



  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div> --}}

</div>

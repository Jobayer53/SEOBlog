<div>
    <!-- create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModal">Create Config</h5>
          <button type="button" class="btn-close" wire:click="close" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store" >
                @csrf


                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <div class="form-group">
                        <select name="name" wire:model="name" class="form-control default-select">
                            <option value="" >SELECT CONFIG</option>
                            <option value="home" >HOME</option>
                            <option value="about" >ABOUT</option>
                            <option value="contact" >CONTACT</option>
                            <option value="privacy" >PRIVACY</option>   
                        </select>
                    </div>
                    @error('name')
                    <strong class="text text-danger"> {{$message}} </strong>

                    @enderror
                    @if($error)
                    <strong class="text text-danger">Config already exsits </strong>

                    @endif
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
          <h5 class="modal-title" id="editModal">Update Config</h5>
          <button type="button" class="btn-close" wire:click="close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update" >
                @csrf


                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <div class="form-group">
                        <select name="name" wire:model="name" class="form-control default-select">
                            <option value="" >SELECT CONFIG</option>
                            <option value="home" >HOME</option>
                            <option value="about" >ABOUT</option>
                            <option value="contact" >CONTACT</option>
                            <option value="privacy" >PRIVACY</option>   
                        </select>
                    </div>
                    @error('name')
                    <strong class="text text-danger"> {{$message}} </strong>

                    @enderror
                    @if($error)
                    <strong class="text text-danger">Config already exsits </strong>

                    @endif
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Seo Title</label>
                    <input type="text" class="form-control input-default " id="seo_title" name="seo_title"  wire:model="seo_title" >
                    <input type="hidden"  wire:model="config_id" >
                </div>
               
                <div class="form-group">
                    <label for="" class="form-label">Seo Description</label>
                   <textarea id="seo_description" name="seo_description" class="form-control" cols="30" rows="10" wire:model="seo_description"></textarea>
                </div>
               
                <div class="form-group">
                    <label for="" class="form-label">Seo Tags</label>
                    <input type="text" class="form-control input-default " id="seo_tags" name="seo_tags" wire:model="seo_tags" >
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
          <h5 class="modal-title" id="deleteModal">ARE YOU SURE?</h5>
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


</div>

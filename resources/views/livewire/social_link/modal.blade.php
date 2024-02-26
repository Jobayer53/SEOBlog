<div>
    <!-- create Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModal">Create Social Links</h5>
          <button type="button" class="btn-close" wire:click="close" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="store" >
                @csrf


                <div x-data="{ selectedIcon: '' }">
                    <div class="form-group">
                        <i class="fa-brands fa-facebook fa-2x icons" style="cursor: pointer; margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-facebook'; $wire.set('icon', 'fa-brands fa-facebook');" data-icon="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-twitter'; $wire.set('icon', 'fa-brands fa-twitter');" data-icon="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-youtube'; $wire.set('icon', 'fa-brands fa-youtube');" data-icon="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-telegram fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-telegram'; $wire.set('icon', 'fa-brands fa-telegram');" data-icon="fa-brands fa-telegram"></i>
                        <i class="fa-brands fa-instagram fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-instagram'; $wire.set('icon', 'fa-brands fa-instagram');" data-icon="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-pinterest fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-pinterest'; $wire.set('icon', 'fa-brands fa-pinterest');" data-icon="fa-brands fa-pinterest"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Icon</label>

                    <input type="text" class="form-control input-default"  x-model="selectedIcon" wire:model="icon" readonly>
                    @error('icon')
                        <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Link</label>
                    <input type="text" class="form-control input-default "     wire:model="link" >
                    @error('link')
                        <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control input-default "  wire:model="name" >
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
          <h5 class="modal-title" id="editModal">Update Social Links</h5>
          <button type="button" class="btn-close" wire:click="close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update" >
                @csrf


                <div x-data="{ selectedIcon: '' }">
                    <div class="form-group">
                        <i class="fa-brands fa-facebook fa-2x icons" style="cursor: pointer; margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-facebook'; $wire.set('icon', 'fa-brands fa-facebook');" data-icon="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-twitter'; $wire.set('icon', 'fa-brands fa-twitter');" data-icon="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-youtube'; $wire.set('icon', 'fa-brands fa-youtube');" data-icon="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-telegram fa-2x  icons" style="cursor: pointer;  margin-right: 20px;" @click="selectedIcon = 'fa-brands fa-telegram'; $wire.set('icon', 'fa-brands fa-telegram');" data-icon="fa-brands fa-telegram"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Icon</label>

                    <input type="text" class="form-control input-default"  x-model="selectedIcon" wire:model="icon" readonly>
                    <input type="hidden"  wire:model="social_id" >
                    @error('icon')
                        <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Link</label>
                    <input type="text" class="form-control input-default "     wire:model="link" >
                    @error('link')
                        <strong class="text text-danger"> {{$message}} </strong>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control input-default "  wire:model="name" >
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



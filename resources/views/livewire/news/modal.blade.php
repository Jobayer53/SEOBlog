<div>


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

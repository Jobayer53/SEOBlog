@extends('layouts.dashboard')
@section('content')

@livewire('sociallink')

@endsection
@section('script')
<script>
  document.addEventListener('close-modal', event => {

      $('#createModal').modal('hide');
      $('#deleteModal').modal('hide');
      $('#editModal').modal('hide');

  })
</script>

<script>
    $('.icons').click(function(){

        var icon = $(this).attr('data-icon');
        $('#links').val(icon);
    });

    // Get all icons
    var icons = document.querySelectorAll('.icons');

    // Add click event listener to each icon
    icons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            // Remove 'selected' class from all icons
            icons.forEach(function(icon) {
                icon.classList.remove('selected');
            });

            // Add 'selected' class to the clicked icon
            this.classList.add('selected');
        });
    });
</script>

@endsection

@extends('layouts.dashboard')
@section('content')

@livewire('news')

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
    $('#summernote').summernote({
      placeholder: 'Type content here',
      tabsize: 2,
      height: 100
    });
  </script>
@endsection

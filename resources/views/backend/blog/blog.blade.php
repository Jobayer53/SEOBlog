
@extends('layouts.dashboard')
@section('content')

@livewire('blog')

@endsection

@section('script')
<script>
  document.addEventListener('close-modal', event => {

      $('#createModal').modal('hide');
      $('#deleteModal').modal('hide');
      $('#editModal').modal('hide');

  })
</script>
@endsection



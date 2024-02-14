
@extends('layouts.dashboard')
@section('content')

@livewire('category')

@endsection

{{-- <script>
    $(document).ready(function(){
        // var delete_id =null;
        $(".deleteBtn").click(function(){
            var delete_id = $(this).val();
            let form = `<form action="{{route('category.destroy',':delete_id')}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger btn-xs  ">Delete</button>
            </form>`;
            forms = form.replace(':delete_id', delete_id);
            $('#form').html(forms);
        });
    });
</script> --}}

@section('script')
<script>
  document.addEventListener('close-modal', event => {

      $('#createModal').modal('hide');
      $('#deleteModal').modal('hide');
      $('#editModal').modal('hide');

  })
</script>
@endsection





@extends('layouts.dashboard')
@section('content')
<h2 class=" card-header bg-light text-center">
    welcome to Dashboard
</h2>
@if($showAlert)
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Signed in successfully"
        });
    </script>
@endif

@endsection

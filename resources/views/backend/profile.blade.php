@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('profile_update')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="oldpass" id="" class="form-control" placeholder="Old Password">
                            @error('oldpass')
                            <strong class="text text-danger">{{$message}}</strong>
                            @enderror
                            @if('notmatch')
                            <strong class="text text-danger">{{session('notmatch')}}</strong>
                            @endif

                        </div>
                        <div class="mb-4">
                            <input type="text" name="password" id="" class="form-control" placeholder="New Password">
                            @error('password')
                            <strong class="text text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="text" name="password_confirmation" id="" class="form-control" placeholder="Confirm Password">
                             @error('password_confirmation')
                            <strong class="text text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4 text-center">
                           <button class="btn btn-info btn-sm">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

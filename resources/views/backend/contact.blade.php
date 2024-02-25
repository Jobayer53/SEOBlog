@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Messages</h4>
                </div>
                <div class="card-body">
                    <div class="basic-list-group">
                        <div class="list-group">
                            {{-- <a href="javascript:void()" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-3 text-white">List group item heading</h5><small>3 days
                                        ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi
                                    porta.</small>
                            </a> --}}
                            @foreach($contacts as $data)
                            <a class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-3">{{$data->subject}}</h5><small class="text-muted">{{$data->created_at->diffForHumans()}}</small>
                                </div>
                                <p class="mb-1">{{$data->message}}</p><small class="text-muted">{{$data->name}}</small>
                                <br/> <small class="text-muted"> {{$data->email}} </small>
                            </a>
                            @endforeach
                        </div>
                        {{$contacts->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-rounded btn-info mb-3">
                    <span class="btn-icon-left text-info ">
                        <i class="fa fa-plus color-info"></i>
                    </span>
                    Add
            </button>
            </a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Payments Queue</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>PATIENT</strong></th>
                                    <th><strong>DR NAME</strong></th>
                                    <th><strong>DATE</strong></th>
                                    <th><strong>STATUS</strong></th>
                                    <th><strong>PRICE</strong></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>Dr. Jackson</td>
                                    <td>01 August 2020</td>
                                    <td><span class="badge light badge-warning">Pending</span></td>
                                    <td>$21.56</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

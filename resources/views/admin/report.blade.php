@extends('layouts-admin')

@section('title')
Report Full Trash
@endsection

@section('body')
<div class="content-wrapper">
    @if(session()->has('message'))
    <div class="alert alert-primary" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-led-on"></i>
            </span> @yield('title')
            <button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary btn-sm mx-2">Add
                Report</button>
        </h3>
    </div>
    <div wire:ignore class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">@yield('title')</h4>
                        <div id="visit-sale-chart-legend"
                            class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Location Name</th>
                                    <th>E-Mail</th>
                                    <th>Information</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#edit"
                                            class="btn btn-success btn-sm">
                                            Show Capture
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#edit"
                                            class="btn btn-info btn-sm">
                                            Edit Status
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
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

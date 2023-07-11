<div>
    <div class="content-wrapper">
        @if(session()->has('message'))
        <div class="alert alert-primary" role="alert">
            {{ session('message') }}
        </div>
        @endif
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-map-marker"></i>
                </span> <span wire:ignore>@yield('title')</span>
                <button type="button" data-bs-toggle="modal" data-bs-target="#add"
                    class="btn btn-primary btn-sm mx-2">Add
                    Location</button>
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
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit"
                                                class="btn btn-info btn-sm">
                                                Edit
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

    <!-- Add Modal -->
    <div wire:ignore.self class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" wire:submit.prevent='store()'>
                        <div class="form-group">
                            <label>Location Name</label>
                            <input wire:model='location_name' type="text" class="form-control">
                            @error('location_name')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input wire:model='lat' type="text" class="form-control">
                            @error('lat')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input wire:model='long' type="text" class="form-control">
                            @error('long')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" wire:submit.prevent='update()'>
                        <div class="form-group">
                            <label>Location Name</label>
                            <input wire:model='location_name' type="text" class="form-control">
                            @error('location_name')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input wire:model='lat' type="text" class="form-control">
                            @error('lat')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input wire:model='long' type="text" class="form-control">
                            @error('long')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

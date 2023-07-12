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
                    <i class="mdi mdi-led-on"></i>
                </span> <span wire:ignore>@yield('title')</span>
                <button type="button" data-bs-toggle="modal" data-bs-target="#add"
                    class="btn btn-primary btn-sm mx-2">Add
                    Report</button>
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left" wire:ignore>@yield('title')</h4>
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
                                        <th>Date</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($getReport as $item)
                                    <tr>
                                        <td>{{ ($getReport->currentpage()-1) * $getReport->perpage() + $loop->index + 1 }}.</td>
                                        <td>{{ $item->location_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->information }}</td>
                                        <td>
                                            @if($item->status == 'open')
                                            <span class="badge badge-secondary">
                                                {{ $item->status }}
                                            </span>
                                            @elseif($item->status == 'progress')
                                            <span class="badge badge-primary">
                                                {{ $item->status }}
                                            </span>
                                            @elseif($item->status == 'reject')
                                            <span class="badge badge-danger">
                                                {{ $item->status }}
                                            </span>
                                            @elseif($item->status == 'done')
                                            <span class="badge badge-success">
                                                {{ $item->status }}
                                            </span>
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <button wire:click="show({{ $item->id }})" type="button" data-bs-toggle="modal" data-bs-target="#show"
                                                class="btn btn-success btn-sm">
                                                Show Capture
                                            </button>
                                            <button wire:click="edit({{ $item->id }})" type="button" data-bs-toggle="modal" data-bs-target="#edit"
                                                class="btn btn-info btn-sm">
                                                Edit Status
                                            </button>
                                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan='6' class="text-center">Data Not Avalailable</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $getReport->links() }}
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" wire:submit.prevent='store()' enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Location Name</label>
                            <select wire:model='location_id' class="form-control">
                                <option value="">Select Location</option>
                                @foreach($getLocation as $itemLocation)
                                <option value="{{ $itemLocation->id }}">{{ $itemLocation->location_name }}</option>
                                @endforeach
                            </select>
                            @error('location_id')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input wire:model='email' type="email" class="form-control">
                            @error('email')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Information</label>
                            <input wire:model='information' type="text" class="form-control">
                            @error('information')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select wire:model='status' class="form-control">
                                <option value="">Select Status</option>
                                <option value="open">Open</option>
                                <option value="progress">Progress</option>
                                <option value="reject">Reject</option>
                                <option value="done">Done</option>
                            </select>
                            @error('status')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Photo Evidence</label>
                            <input wire:model='photo_evidence' type="file" class="form-control">
                            @error('photo_evidence')
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Status Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" wire:submit.prevent='update()'>
                        <div class="form-group">
                            <label>Status</label>
                            <select wire:model='status' class="form-control">
                                <option value="">Select Status</option>
                                <option value="open">Open</option>
                                <option value="progress">Progress</option>
                                <option value="reject">Reject</option>
                                <option value="done">Done</option>
                            </select>
                            @error('status')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Location Name</label>
                            <input wire:model='location_id' type="text" class="form-control" disabled>
                            @error('location_name')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input wire:model='email' type="email" class="form-control" disabled>
                            @error('email')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Information</label>
                            <input wire:model='information' type="text" class="form-control" disabled>
                            @error('information')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Photo Evidence</label>
                            <img class="img-fluid" src="{{ asset('images/'.$photo_evidence) }}">
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

    <!-- Show Capture Modal -->
    <div wire:ignore.self class="modal fade" id="show" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $location_id }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Photo Evidence</label>
                        <img class="img-fluid" src="{{ asset('images/'.$photo_evidence) }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

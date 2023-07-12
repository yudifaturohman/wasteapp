<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\TrashLocation;
use App\Models\Report as ModelReport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Report extends Component
{
    use WithFileUploads, WithPagination;
    public $selected_id, $location_id, $email, $information, $status, $photo_evidence;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $getLocation = TrashLocation::select('id', 'location_name')
        ->orderBy('location_name', 'ASC')
        ->get();

        $getReport = ModelReport::select('reports.*', 'locations.location_name')
        ->join('locations', 'reports.location_id', 'locations.id')
        ->orderBy('reports.created_at', 'DESC')
        ->paginate(10);

        return view('livewire.admin.report', compact('getLocation', 'getReport'));
    }

    private function resetInput()
    {
        $this->location_id = NULL;
        $this->email = NULL;
        $this->information = NULL;
        $this->status = NULL;
        $this->photo_evidence = NULL;
    }

    public function store()
    {
        $this->validate([
            'location_id' => 'required',
            'email' => 'required|email',
            'information' => 'required',
            'status' => 'required',
            'photo_evidence' => 'mimes:jpeg,jpg,png'
        ]);

        ModelReport::create([
            'location_id' => $this->location_id,
            'email' => $this->email,
            'information' => $this->information,
            'status' => $this->status,
            'photo_evidence' => $this->photo_evidence->store($this->location_id, 'public')
        ]);

        session()->flash('message', 'Success! Data has been created');
        $this->resetInput();
    }

    public function edit($id)
    {
        $this->selected_id = $id;
        $getById = ModelReport::select('reports.*', 'locations.location_name')
        ->join('locations', 'reports.location_id', 'locations.id')
        ->findOrFail($id);

        $this->location_id = $getById->location_name;
        $this->email = $getById->email;
        $this->information = $getById->information;
        $this->status = $getById->status;
        $this->photo_evidence = $getById->photo_evidence;
        
    }

    public function show($id)
    {
        $this->selected_id = $id;
        $getById = ModelReport::select('reports.*', 'locations.location_name')
        ->join('locations', 'reports.location_id', 'locations.id')
        ->findOrFail($id);

        $this->photo_evidence = $getById->photo_evidence;
        $this->location_id = $getById->location_name;
    }

    public function update()
    {
        $this->validate([
            'status' => 'required'
        ]);

        $updateById = ModelReport::find($this->selected_id);
        $updateById->status = $this->status;
        $updateById->update();

        session()->flash('message', 'Success! Data has been updated');
        $this->resetInput();
    }

    public function delete($id)
    {
        $deleteById = ModelReport::find($id);
        $deleteById->delete();

        session()->flash('message', 'Success! Data has been deleted');
    }
}

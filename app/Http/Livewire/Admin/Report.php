<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\TrashLocation;
use App\Models\Report as ModelReport;

class Report extends Component
{
    public $selected_id, $location_id, $email, $information, $status, $photo_evidence;

    public function render()
    {
        $getLocation = TrashLocation::select('id', 'location_name')
        ->orderBy('location_name', 'ASC')
        ->get();

        return view('livewire.admin.report', compact('getLocation'));
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

        session()->flash('message', 'Success! Data has been created');
        $this->resetInput();
    }

    public function edit($id)
    {
        
    }

    public function show($id)
    {
        
    }

    public function update()
    {
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

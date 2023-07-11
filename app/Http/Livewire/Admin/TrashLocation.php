<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class TrashLocation extends Component
{
    public $location_name, $lat, $long;

    public function render()
    {
        return view('livewire.admin.trash-location');
    }

    private function resetInput()
    {
        $this->location_name = NULL;
        $this->lat = NULL;
        $this->long = NULL;
    }

    public function store()
    {
        $this->validate([
            'location_name' => 'required|min:3',
            'lat' => 'required',
            'long' => 'required'
        ]);

        session()->flash('message', 'Success! Data has been created');
        $this->resetInput();
    }

    public function edit()
    {

    }

    public function update()
    {
        $this->validate([
            'location_name' => 'required|min:3',
            'lat' => 'required',
            'long' => 'required'
        ]);

        session()->flash('message', 'Success! Data has been updated');
        $this->resetInput();
    }

    public function delete()
    {
        session()->flash('message', 'Success! Data has been deleted');
    }
}

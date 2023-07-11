<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\TrashLocation as ModelTrashLocation;
use Livewire\WithPagination;

class TrashLocation extends Component
{
    use WithPagination;
    public $selected_id, $location_name, $lat, $long;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $getLocation = ModelTrashLocation::orderBy('location_name' , 'ASC')
        ->paginate(10);

        return view('livewire.admin.trash-location', compact('getLocation'));
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
        
        ModelTrashLocation::create([
            'location_name' => $this->location_name,
            'lat' => $this->lat,
            'long' => $this->long,
        ]);

        session()->flash('message', 'Success! Data has been created');
        $this->resetInput();
    }

    public function edit($id)
    {
        $this->selected_id = $id;
        $getById = ModelTrashLocation::findOrFail($id);
        $this->location_name = $getById->location_name;
        $this->lat = $getById->lat;
        $this->long = $getById->long;
    }

    public function update()
    {
        $this->validate([
            'location_name' => 'required|min:3',
            'lat' => 'required',
            'long' => 'required'
        ]);

        $updateById = ModelTrashLocation::find($this->selected_id);
        $updateById->location_name = $this->location_name;
        $updateById->lat = $this->lat;
        $updateById->long = $this->long;
        $updateById->update();

        session()->flash('message', 'Success! Data has been updated');
        $this->resetInput();
    }

    public function delete($id)
    {
        $deleteById = ModelTrashLocation::find($id);
        $deleteById->delete();

        session()->flash('message', 'Success! Data has been deleted');
    }
}

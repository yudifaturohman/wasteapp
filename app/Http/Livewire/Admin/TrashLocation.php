<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\TrashLocation as ModelTrashLocation;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class TrashLocation extends Component
{
    use WithPagination;
    public $selected_id, $location_name, $lat, $long, $search_location_name;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $getLocation = ModelTrashLocation::orderBy('location_name' , 'ASC')
        ->where('location_name', 'like', '%'.$this->search_location_name.'%')
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

        try {
            ModelTrashLocation::create([
                'location_name' => $this->location_name,
                'lat' => $this->lat,
                'long' => $this->long,
            ]);

            Log::info('Success! Data has been created for location {location_name} : ', ['location_name' => $this->location_name]);

            session()->flash('message', 'Success! Data has been created');
            $this->resetInput();
        } catch (\Exception $e) {
            Log::error('This message error : '.$e->getMessage());
            session()->flash('message_danger', $e->getMessage());
        }
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

        try {
            $updateById = ModelTrashLocation::find($this->selected_id);
            $updateById->location_name = $this->location_name;
            $updateById->lat = $this->lat;
            $updateById->long = $this->long;
            $updateById->update();

            Log::info('Success! Data has been updated {location_name} : ', ['location_name' => $updateById->location_name]);

            session()->flash('message', 'Success! Data has been updated');
            $this->resetInput();
        } catch (\Exception $e) {
            Log::error('This message error : '.$e->getMessage());
            session()->flash('message_danger', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $deleteById = ModelTrashLocation::find($id);
        $deleteById->delete();

        session()->flash('message', 'Success! Data has been deleted');
    }
}

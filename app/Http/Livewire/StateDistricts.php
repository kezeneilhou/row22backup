<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StateDistrict;

class StateDistricts extends Component
{
    public $state_name;
    public $state_input_name;
    public $district_input_name;
    public $district_name;
    public $districts=[];
    public $present_state;
    public $present_state_edit;
    public $present_district_edit;

    public function stateChange()
    {
      $this->districts = StateDistrict::where('state',$this->present_state)->get();
    }

    public function render()
    {
        $states = StateDistrict::select('state')->distinct()->get();
        return view('livewire.state-districts',[
          'states' => $states
        ]);
    }
}

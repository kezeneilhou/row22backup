<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RowVillage;

class RowDistrict extends Component
{
    public $district;
    public $block;
    public $lat;
    public $long;
    public $village;
    public $villages = [];

    public function districtChange()
    {
      $this->villages = RowVillage::where('district',$this->district)->get();
      $this->block = null;
      $this->lat = null;
      $this->long = null;
    }

    public function villageChange()
    {
      $block = RowVillage::where('village_name',$this->village)->first();
      $this->block = $block->sub_district;
      $this->lat = $block->latitude;
      $this->long = $block->longitude;
    }

    public function render()
    {
        $districts = RowVillage::select('district')->distinct()->orderBy('district','ASC')->get();
        return view('livewire.row-district',[
          'districts' => $districts
        ]);
    }
}

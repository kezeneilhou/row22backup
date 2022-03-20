<div class="col-md-12">
  <div class="row">
    <x-form-select label="District" name="district" col="3" wire:model="district" wire:change="districtChange" required>
      <option value="" selected>Select</option>
      @foreach($districts as $item)
      <option value="{{$item->district}}">{{$item->district}}</option>
      @endforeach
    </x-form-select>
    <x-form-select label="City/Town/Village" name="city_town_village" col="3" wire:model="village" wire:change="villageChange" required>
      <option value="" selected>Select</option>
      @foreach($villages as $item)
      <option value="{{$item->village_name}}">{{$item->village_name}}</option>
      @endforeach
    </x-form-select>
    <x-form-input label="Block" type="text" name="block" col="3" wire:model="block" readonly required/>
    <x-form-input label="Tower Latitude" type="text" name="tower_lat" col="3" wire:model="lat" oninput="validateLat(this);" required/>
    <x-form-input label="Tower Longitude" type="text" name="tower_long" col="3" wire:model="long" oninput="validateLong(this);" required/>
  </div>
</div>

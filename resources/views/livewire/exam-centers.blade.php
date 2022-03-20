<div class="col-md-6">
  <div class="row">
    <div class="col-md-6 pb-2">
      <x-form-select name="exam_center_city" label="Exam Center City / Town ?" required wire:model="exam_city" wire:change="loadCenters" required>
        <option selected value="">Select</option>
        <option value="KOHIMA">KOHIMA</option>
        <option value="DIMAPUR">DIMAPUR</option>
        <option value="MOKOKCHUNG">MOKOKCHUNG</option>
        <option value="MON">MON</option>
        <option value="TUENSANG">TUENSANG</option>
      </x-form-select>
    </div>
    <div class="col-md-6 pb-2">
      <x-form-select name="exam_center_area" label="Area of residence?" required>
        <option selected value="">Select</option>
        @foreach($centers as $center)
        <option value="{{$center->area_residence}}">{{$center->area_residence}}</option>
        @endforeach
      </x-form-select>
    </div>
  </div>
</div>

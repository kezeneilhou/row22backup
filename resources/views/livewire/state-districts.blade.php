<div class="col-md-12">
  <div class="row">
      <x-register-select name="{{$state_input_name}}" label="State" wire:model="present_state" wire:change="stateChange" col="4" required>
        @if(isset($present_state_edit))<option value="{{$present_state_edit}}">{{$present_state_edit}}</option>@endif
        <option value="">Select</option>
        @foreach($states as $state)
        <option value="{{$state->state}}">{{$state->state}}</option>
        @endforeach
      </x-register-select>
      <x-register-select name="{{$district_input_name}}" label="District" col="4" required>
        @if(isset($present_district_edit))<option value="{{$present_district_edit}}">{{$present_district_edit}}</option>@endif
        <option value="">Select</option>
        @foreach($districts as $district)
        <option value="{{$district->district}}">{{$district->district}}</option>
        @endforeach
      </x-register-select>
  </div>

</div>

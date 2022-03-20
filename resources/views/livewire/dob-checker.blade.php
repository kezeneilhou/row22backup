<div class="col-md-{{$col}}">
  <div class="form-group">
    <label class="control-label" for="{{$name}}">{{$label}}</label>
      <div class="input-group">
        <span class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-calendar-alt"></i>
          </span>
        </span>
        <input style="background:#fff" type="text" class="form-control datepicker" name="{{$name}}" id="{{$name}}" required readonly wire:model="date">
      </div>
  </div>
</div>

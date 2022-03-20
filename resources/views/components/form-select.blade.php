<div class="col-md-{{$col}} mb-4">
  <div class="form-group mt-1">
    <label class="control-label" for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <select class="form-control" name="{{$name}}" id="{{$name}}" {{$attributes}}>
      {{$slot}}
    </select>
    @error($name)
    <div id="{{$name}}" class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
</div>

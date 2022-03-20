<div class="col-md-{{$col}} mb-4">
  <div class="form-group">
    <label for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{$attributes}}>
    @error($name)
    <div id="{{$name}}" class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
</div>

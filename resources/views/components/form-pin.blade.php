<div class="col-md-{{$col}} mb-4">
  <div class="form-group @error($name) has-danger @enderror">
    <label class="control-label pt-1" for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <input type="text" class="form-control" name="{{$name}}" maxlength = "6" minlength="6" placeholder="Enter 6 digit PIN" {{$attributes}}>
    @error($name)
    <div style="color:Red">
      {{$message}}
    </div>
    @enderror
  </div>
</div>

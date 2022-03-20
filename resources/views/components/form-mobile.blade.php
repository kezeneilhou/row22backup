<div class="col-md-{{$col}} mb-4">
  <div class="form-group @error($name) has-danger @enderror">
    <label class="control-label pt-1" for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <input type="text" class="form-control" name="{{$name}}" id="{{$name}}" minlength="10" maxlength="10" placeholder="Enter 10 digit mobile number" {{$attributes}}>
    @error($name)
    <div style="color:Red">
      {{$message}}
    </div>
    @enderror
  </div>
</div>

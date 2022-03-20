<div class="col-md-{{$col}} mb-4">
  <div class="form-group @error($name) has-danger @enderror">
    <label for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{$attributes}} value="{{old($name)}}">
    @error($name)
    <div style="color:Red">
      {{$message}}
    </div>
    @enderror
  </div>
</div>

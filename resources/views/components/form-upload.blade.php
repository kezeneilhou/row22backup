<div class="col-md-{{$col}} mb-4" id={{$name}}>
  <div class="form-group row @error($name) has-danger @enderror">
    <label class="col-lg-3 control-label text-lg-right pt-2" for="{{$name}}">{{$label}} <span style="color:red;">*</span></label>
    <div class="col-lg-6">
      <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="input-append">
          <div class="uneditable-input">
            <i class="fas fa-file fileupload-exists"></i>
            <span class="fileupload-preview"></span>
          </div>
          <span class="btn btn-default btn-file">
            <span class="fileupload-exists">Change</span>
            <span class="fileupload-new">Select file</span>
            <input type="file" name="{{$name}}" id="{{$name}}" class="" {{$attributes}}/>
          </span>
          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
        </div>
      </div>
      @error($name)
      <div style="color:Red">
        {{$message}}
      </div>
      @enderror
    </div>

  </div>
</div>

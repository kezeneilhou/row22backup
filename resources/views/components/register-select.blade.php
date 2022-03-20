<div class="col-md-{{$col}} mb-4">
  <div class="form-group mt-1">
    <label class="control-label" for="{{$name}}">{{$label}}</label>
    <select class="form-control tab-two" name="{{$name}}" id="{{$name}}" {{$attributes}}>
      {{$slot}}
    </select>
  </div>
</div>

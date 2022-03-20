<div class="col-md-{{$col}} mb-4">
  <div class="form-group mt-1">
    <label class="control-label" for="{{$name}}">{{$label}}</label>
    <select class="form-control" name="{{$name}}" id="{{$name}}" {{$attributes}}>
      <option selected disabled>Select</option>
      @foreach($tribes as $tribe)
      <option value="{{ $tribe->Master_Name }}">{{ $tribe->Master_Name }}</option>
      @endforeach
    </select>
  </div>
</div>

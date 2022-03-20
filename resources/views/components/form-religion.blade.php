<div class="col-md-{{$col}} mb-4">
  <div class="form-group mt-1">
    <label class="control-label" for="{{$name}}">{{$label}}</label>
    <select class="form-control" name="{{$name}}" id="{{$name}}" {{$attributes}}>
      @foreach($religions as $item)
      <option value="{{ $item->name }}">{{ $item->name }}</option>
      @endforeach
    </select>
  </div>
</div>

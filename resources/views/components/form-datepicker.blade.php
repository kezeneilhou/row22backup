<div class="col-lg-{{$col}}">
  <label for="{{$name}}">{{$label}}</label>
  <div class="input-group">
  	<span class="input-group-prepend">
  		<span class="input-group-text">
  			<i class="fas fa-calendar-alt"></i>
  		</span>
  	</span>
  	<input type="text" class="form-control form-control-sm datepicker" name="{{$name}}" id="{{$name}}" {{$attributes}} readonly>
  </div>
</div>

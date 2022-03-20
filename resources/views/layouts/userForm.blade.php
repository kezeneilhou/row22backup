@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-10 mb-8 mb-xl-0">
    <div class="card shadow">
      <header class="card-header">
        <h2 class="card-title">Permission for Registration of New Mobile Tower</h2>
        <p class="card-subtitle">New Application Form</p>
      </header>
      <div class="card-body">
				@yield('form')
			</div>
    </div>
  </div>

	<div class="col-md-2">
		<div class="card shadow">
      <header class="card-header">
        <!-- <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
          <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
        </div> -->
        <h2 class="card-title">Application Progress</h2>
        <p class="card-subtitle">Complete all steps to submit</p>
      </header>
			<div class="card-body">
				<ul class="simple-todo-list">
					<li @if($status == "create" || $status == "edit") class="completed" @endif>@if($status == "edit") Edit @endif Fill Form</li>
					<li @if($status == "preview") class="completed" @endif>Preview</li>
					<li @if($status == "submit") class="completed" @endif>Submit</li>
				</ul>
				<hr>
				<!-- <a href="{{route('dashboard')}}" class="btn btn-default btn-sm"><i class="fas fa-times-circle"></i> Cancel Application</a> -->
			</div>
		</div>
	</div>

</div>

@endsection

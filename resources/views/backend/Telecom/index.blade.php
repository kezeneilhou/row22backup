@extends('layouts.dashboard')
@section('content')
@if(Auth::user()->status == 'PENDING' && Auth::user()->profile_complete == 'COMPLETE')
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<b>Your registration form is under verification and will be activated shortly.</b>
			</div>
		</div>
	</div>
</div>
@elseif(Auth::user()->profile_complete == 'COMPLETE' && Auth::user()->status == 'APPROVED')
<div class="row">
	<style media="screen">
		.row-tiles a:hover{text-decoration: none !important}
		.row-tiles li:hover{background: #0374ad}
	</style>
  <div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6 text-right">
				<a href="{{route('rowTower.create')}}" class="btn btn-primary btn-sm">Create New Application <i class="fas fa-file-alt"></i></a>
				<a href="" class="btn btn-danger btn-sm">Payment / Challans <i class="fas fa-file-alt"></i></a>
			</div>
		</div>
		<hr class="dotted">
  </div>
	<div class="col-md-4">
		<section class="card card-transparent">
			<div class="card-body">
				<section class="card card-group">
					<header class="card-header bg-primary w-100">

						<div class="widget-profile-info">
							<div class="profile-picture">
								<img src="{{asset('backendAssets/img/!logged-user.jpg')}}">
							</div>
							<div class="profile-info">
								<h4 class="name font-weight-semibold">{{Auth::user()->name}}</h4>
								<h5 class="role">{{Auth::user()->designation}}</h5>
								<h5 class="role">{{Auth::user()->email}}</h5>
								<h5 class="role">{{Auth::user()->mobile}}</h5>
							</div>
						</div>

					</header>
					<div id="accordion" class="w-100">
						<div class="card card-accordion card-accordion-first">

							<div id="collapse1One" class="accordion-body collapse show">
								<div class="card-body">
									<p><b>GST No:</b> {{Auth::user()->licensee_gst}}</p>
									<p><b>PAN No:</b> {{Auth::user()->licensee_pan}}</p>
									<p><b>TAN No:</b> {{Auth::user()->licensee_tan}}</p>
									<hr class="solid mt-3 mb-3">
									<button type="button" name="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#passwordModal">Change Password</button>
									<button type="button" name="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#profileModal">View Profile</button>
								</div>
							</div>
						</div>

					</div>
				</section>

			</div>
		</section>
	</div>

	<x-count-cards :count='$counts'/>




    <div class="col-md-6 mt-4">
      <section class="card h-100">
        <header class="card-header card-header-transparent">
          <h2 class="card-title">Activity</h2>
        </header>
        <div class="card-body">
          <div class="timeline timeline-simple mt-3 mb-3">
            <div class="tm-body">
              @foreach($alerts as $alert)
              <div class="tm-title">
                <h5 class="m-0 pt-2 pb-2 text-uppercase">{{Carbon\Carbon::parse($alert->created_at)->format('d-M-Y')}}</h5>
              </div>
              <ol class="tm-items">
                <li>
                  <div class="tm-box">
                    <!-- <p class="text-muted mb-0">7 months ago.</p> -->
                    <p>
                      <b>{{$alert->alert_type}}</b> <br>
                      {{$alert->message}}
                    </p>
                  </div>
                </li>
              </ol>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    </div>
		<div class="col-md-6 mt-4">
			<section class="card card-transparent">
				<header class="card-header">
					<h2 class="card-title">My Stats</h2>
				</header>
				<div class="card-body">
					<section class="card">
						<div class="card-body">
							<!-- <div class="small-chart float-right" id="sparklineBarDash"><a href=# class="btn btn-danger btn-sm disabled" disabled>Renew</a></div> -->

							<div class="h4 font-weight-bold mb-0">{{$counts['total']}}</h4></div>
							<p class="text-3 text-muted mb-0">Total Application Submitted</p>
						</div>
					</section>
					<section class="card">
						<div class="card-body">
								<div class="small-chart float-right" id="sparklineBarDash"><a href='#' class="btn btn-primary btn-sm">Make Payment</a></div>
							<div class="h4 font-weight-bold mb-0">{{$counts['approved']}}</div>
							<p class="text-3 text-muted mb-0">Application Approved | Awaiting payment</p>
						</div>
					</section>
					<section class="card">
						<div class="card-body">

							<div class="h4 font-weight-bold mb-0">{{$counts['active']}}</div>
							<p class="text-3 text-muted mb-0">Permission Issued</p>
						</div>
					</section>
				</div>
			</section>
		</div>

</div>
@else
<div class="row">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-header">
				<h4><b>Please complete your profile to proceed:</b></h4>
			</div>
			<div class="card-body">
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
				<form class="" action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<x-form-select name="licensee_type" label="Licensee Type" col="4" required>
							<option selected disabled> -- Choose -- </option>
							<option value="TSP">Telecom Service Provider</option>
							<option value="IP">Infrastructure Provider</option>
						</x-form-select>
						<x-form-input type="text" name="licensee_name" label="Licensee Name" col="4" required/>

						<x-form-input type="text" name="licensee_gst" label="GST No." col="4" minlength="15" maxlength="15" pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}" required/>
						<x-form-input type="text" name="licensee_pan" label="PAN No." col="4"  minlength="10" maxlength="10" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" required/>
						<x-form-input type="text" name="licensee_tan" label="TAN No." col="4" minlength="10" maxlength="10" pattern="^([a-zA-Z]){4}([0-9]){5}([a-zA-Z]){1}?$" required/>
						<x-form-input type="text" name="dot_reg_no" label="DOT Regd. No." col="4" minlength="20" required/>

						<x-form-datepicker name="dot_reg_date" label="DOT Regd. Date" col="4" value="{{old('dot_reg_date')}}" required/>
						<x-form-datepicker name="dot_reg_expiry" label="DOT Expiry Date" col="4" value="{{old('dot_reg_expiry')}}" required/>
						<x-form-input-blank type="text" name="name" label="Authorized Person's Name:" col="4" value="{{Auth::user()->name}}" readonly required/>
						<x-form-input-blank type="text" name="designation" label="Authorized Person's Designation:" col="4"  value="{{Auth::user()->designation}}" readonly required/>
						<x-form-input-blank type="text" name="mobile" label="Authorized Person's Mobile:" col="4" value="{{Auth::user()->mobile}}" readonly required/>
						<x-form-select name="auth_id_proof_type" label="Authorized Person's ID Proof:" col="4" required>
							<option selected disabled> -- Choose -- </option>
							<option value="AADHAAR">Aadhaar</option>
							<option value="DL">Driving License</option>
							<option value="PASSORT">Passport</option>
							<option value="VC">Voter Card</option>
						</x-form-select>
						<x-form-input type="text" name="auth_id_proof_no" label="Authorized Person's ID No.:" col="4" required/>

						<div class="col-md-12">
							<h5><b>Head Office Details</b></h5>
							<hr class="dotted">
						</div>
						<x-form-input type="text" name="ho_address" label="Address Line" col="4" required/>
						<x-form-pin name="ho_pin" label="PIN" col="4" required/>

							@livewire('state-districts',[
							'state_input_name' => 'ho_state',
							'district_input_name' => 'ho_district',
							])
							<x-form-mobile name="ho_mobile" label="Mobile" col="4" oninput="validate(this);" required/>
							<x-form-input type="email" name="ho_email" label="Email" col="4" required/>

							 <div class="col-md-12">
								 <h5><b>State/Circle Office Details</b></h5>
								 <hr class="dotted">
							 </div>
							 <x-form-input type="text" name="so_address" label="Address Line" col="4" required/>
	 						<x-form-pin name="so_pin" label="PIN" col="4" required/>
							 @livewire('state-districts',[
 							'state_input_name' => 'so_state',
 							'district_input_name' => 'so_district',
 							])
							<x-form-mobile name="so_mobile" label="Mobile" col="4" oninput="validate(this);" required/>
							<x-form-input type="email" name="so_email" label="Email" col="4" required/>
							<div class="col-md-12">
								<h5><b>Attachements</b></h5>
								(Only jpg, jpeg, pdf files accepted)
								<hr class="dotted">
							</div>
							<x-form-upload name="dot_license" label="DOT License" col="12" required/>
							<x-form-upload name="id_proof" label="Authorized Persons ID Proof" col="12" required/>
							<x-form-upload name="auth_letter" label="Authorization Letter" col="12" required/>
							<hr>

					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endif
<!-- modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="passwordModalLabel"><b>Change Password</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
					@csrf
        	<div class="form-group">
        		<label for="">New Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off" required>
        	</div>
        	<div class="form-group">
        		<label for="">Retype New Password</label>
						<input type="password" name="password_confirmation" class="form-control" autocomplete="off" required>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
				</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="profileModalLabel"><b>Your Profile</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-sm table-striped">
          <tr>
            <td><b>Name</b> : {{Auth::user()->name}}</td>
            <td><b>Licensee Type</b> : {{Auth::user()->licensee_type}}</td>
            <td><b>GSt No.</b> : {{Auth::user()->licensee_gst}}</td>
            <td><b>PAN No.</b> : {{Auth::user()->licensee_pan}}</td>
          </tr>
          <tr>
            <td><b>TAN No.</b> : {{Auth::user()->licensee_tan}}</td>
            <td><b>DoT Registration No.</b> : {{Auth::user()->dot_reg_no}}</td>
            <td><b>DoT Registration Date.</b> : {{Carbon\Carbon::parse(Auth::user()->dot_reg_date)->format('d-m-Y')}}</td>
            <td><b>DoT Registration Expiry.</b> : {{Carbon\Carbon::parse(Auth::user()->dot_reg_expiry)->format('d-m-Y')}}</td>
          </tr>
          <tr>
            <td><b>Authorized Person</b> : {{Auth::user()->auth_person}}</td>
            <td><b>Authorized Person Designation</b> : {{Auth::user()->auth_designation}}</td>
            <td><b>Authorized Person Mobile</b> : {{Auth::user()->auth_mobile}}</td>
            <td><b>Authorized Person ID</b> : {{Auth::user()->auth_id_proof_type}}</td>
          </tr>
          <tr>
            <td><b>Authorized Person ID No.</b> : {{Auth::user()->auth_id_proof_no}}</td>
          </tr>
          <tr class="bg-dark text-white">
            <td colspan = "4" ><b>Head Office Details : </b></td>
          </tr>
          <tr>
						<td><b>Address</b> : {{Auth::user()->ho_address}}</td>
						<td><b>PIN</b> : {{Auth::user()->	ho_pin}}</td>
						<td><b>State</b> : {{Auth::user()->		ho_state}}</td>
						<td><b>District</b> : {{Auth::user()->ho_districtho_district}}</td>
          </tr>
					<tr>
						<td colspan = "2"><b>Mobile</b> : {{Auth::user()->ho_mobile}}</td>
						<td colspan = "2"><b>Email</b> : {{Auth::user()->ho_email}}</td>
					</tr>
          <tr class="bg-dark text-white">
            <td colspan = "4"><b>State Office Details :</b></td>
          </tr>
          <tr>
						<td><b>Address</b> : {{Auth::user()->so_address}}</td>
						<td><b>PIN</b> : {{Auth::user()->	so_pin}}</td>
						<td><b>State</b> : {{Auth::user()->		so_state}}</td>
						<td><b>District</b> : {{Auth::user()->so_districtho_district}}</td>
          </tr>
					<tr>
						<td colspan = "2"><b>Mobile</b> : {{Auth::user()->so_mobile}}</td>
						<td colspan = "2"><b>Email</b> : {{Auth::user()->so_email}}</td>
					</tr>
        </table>
				<hr>
				For any changes in profile information, Please fill up the form below mentioning the changes required.
				<form class="" action="" method="post">
					@csrf
					<div class="form-group">
						<textarea name="profile_change" rows="8" cols="80" id="profile_change" class="form-control" required></textarea>
					</div>
					<button type="submit" name="button" class="btn btn-primary btn-sm mt-3">Submit</button>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



@if(Session::has('passwordChanged'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Success',
	  'Password has been changed.',
	  'success'
		);
	})
</script>
@endif
@if(Session::has('profileChangeRequest'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Success',
	  'Your profile change request has been submitted.',
	  'success'
		);
	})
</script>
@endif
@if(Session::has('cancelled'))
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire(
	  'Cancelled',
	  'Your application has been cancelled.',
	  'error'
		);
	})
</script>
@endif

@endsection

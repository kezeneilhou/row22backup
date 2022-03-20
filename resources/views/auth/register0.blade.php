<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="Row Portal : Nagaland" />
		<meta name="description" content="Official Portal of Right of Way : Nagaland">
		<meta name="author" content="ditc.nagaland.gov.in">
		<title>Register : Row Portal, Nagaland</title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/boxicons/css/boxicons.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('backendAssets/vendor/modernizr/modernizr.js')}}"></script>
		@livewireStyles
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
        <a href="/" class="logo d-inline-block text-center mb-4">
					<img src="assets/images/row-logo.png"/>
				</a>

				<div class="panel card-sign">
					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="register-form">
              @csrf
							 <x-auth-validation-errors class="mb-4" :errors="$errors" />
							 <span class="one-tab">
								 <div class="form-group mb-3">
	 								<label>Licensee Name</label>
	 								<input name="name" id="name" type="text" class="form-control form-control-md tab-one" value="{{old('name')}}" oninput="validateA(this);" required/>
	 							</div>



	 							<div class="form-group mb-3">
	 								<label>Licensee Type</label>
	 								<select name="licensee_type" class="form-control form-control-md tab-one" required >
	 									<option selected disabled> -- Choose -- </option>
	 									<option value="TSP">Telecom Service Provider</option>
	 									<option value="IP">Infrastructure Provider</option>
	 								</select>
	 							</div>

	 							<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>GST No.</label>
	 										<input type="text" name="licensee_gst" class="form-control form-control-md tab-one" minlength="15" maxlength="15" value="{{old('licensee_gst')}}" pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}" required />
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>PAN No.</label>
	 										<input name="licensee_pan" type="text" class="form-control form-control-md tab-one" minlength="10" maxlength="10" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" value="{{old('licensee_pan')}}" required/>
	 									</div>
	 								</div>
	 							</div>

	 							<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>TAN No.</label>
	 										<input type="text" name="licensee_tan" class="form-control form-control-md tab-one" minlength="10" maxlength="10" value="{{old('licensee_tan')}}"  pattern="^([a-zA-Z]){4}([0-9]){5}([a-zA-Z]){1}?$" required />
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>DOT Regd. No.</label>
	 										<input name="dot_reg_no" type="text" class="form-control form-control-md tab-one" value="{{old('dot_reg_no')}}" maxlength="20" required/>
	 									</div>
	 								</div>
	 							</div>

	 							<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>DOT Regd. Date</label>
	 										<input type="text" name="dot_reg_date" id="dotReg" class="form-control form-control-md tab-one datepicker" value="{{old('dot_reg_date')}}" readonly required />
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>DOT Expiry Date</label>
	 										<input name="dot_reg_expiry" id="dotExp" type="text" class="form-control form-control-md tab-one datepicker" value="{{old('dot_reg_expiry')}}" readonly required/>
	 									</div>
	 								</div>
	 							</div>
	 							<hr>
	 							<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Name:</label>
	 										<input type="text" name="auth_person" id="name" oninput="validateA(this);" class="form-control form-control-md tab-one" value="{{old('auth_person')}}" required />
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Designation:</label>
	 										<input name="auth_designation" type="text" class="form-control form-control-md tab-one"  value="{{old('auth_designation')}}"required/>
	 									</div>
	 								</div>
	 							</div>
								<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Email:</label>
	 										<input name="email" type="email" class="form-control form-control-md tab-one" value="{{old('email')}}" required/>
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Mobile.:</label>
	 										<input name="auth_mobile" type="text"  oninput="validate(this);" class="form-control form-control-md tab-one" minlength="10" maxlength="10" value="{{old('auth_mobile')}}" pattern="\d*" id="auth_mobile" required/>
	 									</div>
	 								</div>
	 							</div>

	 							<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's ID Proof:</label>
	 										<select name="auth_id_proof_type" class="form-control form-control-md tab-one" id="id_proof_type"required >
	 											<option selected disabled> -- Choose -- </option>
	 											<option value="AADHAAR">Aadhaar</option>
	 											<option value="DL">Driving License</option>
	 											<option value="PASSORT">Passport</option>
	 											<option value="VC">Voter Card</option>
	 										</select>
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's ID No.:</label>
	 										<input name="auth_id_proof_no" type="text" class="form-control form-control-md tab-one" value="{{old('auth_id_proof_no')}}" id="id_no" maxlength="16" required/>
	 									</div>
	 								</div>
	 							</div>
								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-primary next2">Next</button>
									</div>
								</div>
							 </span>

							 <span class="two-tab d-none row">
								 <div class="col-md-12">
									 <h4><b>Head Office Details</b></h4>
									 <hr class="dotted">
								 </div>
								 <div class="col-md-6">
									 <div class="form-group">
  									 <label for="">Address Line</label>
  									 <input type="text" name="ho_address" class="form-control tab-two" value="{{old('ho_address')}}" required>
  								 </div>
								 </div>
								 <div class="col-md-6">
									 <div class="form-group">
  									 <label for="">PIN</label>
  									 <input type="text" name="ho_pin" class="form-control tab-two" value="{{old('ho_pin')}}" minlength="6" maxlength="6" oninput="validate(this);" required>
  								 </div>
								 </div>
								@livewire('state-districts')
								<div class="col-sm-6 mb-3">
									<label>Mobile</label>
									<input name="ho_mobile" type="text" class="form-control form-control-md tab-two" oninput="validate(this);" minlength="10" maxlength="10" value="{{old('ho_mobile')}}" required/>
								</div>
								<div class="col-sm-6 mb-3">
									<label>Email</label>
									<input name="ho_email" type="email" class="form-control form-control-md tab-two" value="{{old('ho_email')}}" required/>
								</div>
								 <div class="col-md-12">
									 <h4><b>State Office Details</b></h4>
									 <hr class="dotted">
								 </div>
								 <div class="col-md-6">
									 <div class="form-group">
  									 <label for="">Address Line</label>
  									 <input type="text" name="so_address" class="form-control tab-two" value="{{old('so_address')}}" required>
  								 </div>
								 </div>
								 <div class="col-md-6">
									 <div class="form-group">
  									 <label for="">PIN</label>
  									 <input type="text" name="so_pin" class="form-control tab-two" value="{{old('so_pin')}}" minlength="6" maxlength="6" oninput="validate(this);" required>
  								 </div>
								 </div>
								 <div class="col-md-6">
									 <div class="form-group">
  									 <label for="">State</label>
  									 <input type="text" name="so_state" value="Nagaland" class="form-control tab-two" value="{{old('so_state')}}" readonly>
  								 </div>
								 </div>
								 <div class="col-md-6 form-group">
                   <label for="district">District</label>
                   <select class="form-control tab-two" name="so_district" required>
                     <option selected disabled> -- Choose District -- </option>
                     <option value="DIMAPUR">DIMAPUR</option>
                     <option value="KIPHIRE">KIPHIRE</option>
                     <option value="KOHIMA">KOHIMA</option>
                     <option value="LONGLENG">LONGLENG</option>
                     <option value="MOKOKCHUNG">MOKOKCHUNG</option>
                     <option value="MON">MON</option>
                     <option value="PEREN">PEREN</option>
                     <option value="PHEK">PHEK</option>
                     <option value="TUENSANG">TUENSANG</option>
                     <option value="WOKHA">WOKHA</option>
                     <option value="ZUNHEBOTO">ZUNHEBOTO</option>
                   </select>
                 </div>
								<div class="col-sm-6 mb-3">
									<label>Mobile</label>
									<input name="so_mobile" type="text" class="form-control form-control-md tab-two" oninput="validate(this);"  minlength="10" maxlength="10" value="{{old('so_mobile')}}" required/>
								</div>
								<div class="col-sm-6 mb-3">
									<label>Email</label>
									<input name="so_email" type="email" class="form-control form-control-md tab-two" value="{{old('so_email')}}" required/>
								</div>

									<div class="col-md-12 text-right mt-3">
										<button class="btn btn-primary previous1">Back</button>
										<button class="btn btn-primary next3">Next</button>
									</div>
							 </span>

							 <span class="three-tab d-none row">
								 <div class="col-md-12">
									 <h4><b>Attachements</b></h4>
									 (Only jpg, jpeg, pdf files accepted)
									 <hr class="dotted">
								 </div>
								 <div class="col-sm-12 mb-3">
									 <label>DOT License</label>
									 <input name="dot_license" type="file" class="form-control form-control-md tab-three" required/>
								 </div>
								 <div class="col-sm-12 mb-3">
									 <label>Authorized Persons ID Proof</label>
									 <input name="id_proof" type="file" class="form-control form-control-md tab-three" required/>
								 </div>
								 <div class="col-sm-12 mb-3">
									 <label>Authorization Letter</label>
									 <input name="auth_letter" type="file" class="form-control form-control-md tab-three" required/>
									 <hr>
								 </div>
								 <div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>Password (Min length 8 characters)</label>
	 										<input name="password" type="password" class="form-control form-control-md tab-three" minlength="8" id="password" required/>
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>Retype Password</label>
	 										<input name="password_confirmation" type="password" class="form-control form-control-md tab-three" minlength="8" id="password_confirmation" required/>
	 									</div>
	 								</div>
	 							</div>
								<div class="form-group mb-3">
	                  <div class="captcha">
	                      <span>{!! captcha_img() !!}</span>
	                      <button type="button" class="btn btn-danger" class="reload" id="reload">
	                          ↻
	                      </button>
	                  </div>
	              </div>
								<div class="form-group mb-3">
	                  <input id="captcha" type="text" class="form-control tab-three" placeholder="Enter Captcha" name="captcha" required>
	              </div>

								<div class="row">
									<div class="col-sm-12">
										<!-- <div class="checkbox-custom checkbox-default">
											<input id="RememberMe" name="rememberme" type="checkbox"/>
											<label for="RememberMe">Remember Me</label>
										</div> -->
									</div>
									<div class="col-sm-12 text-right">
										<button  class="btn btn-primary mt-2 previous2">Back</button>
										<button type="submit" name="submit" class="btn btn-danger mt-2 submit-btn">Sign Up</button>
									</div>
									<div class="col-md-12">
										<hr class="dotted">
											<p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign In!</a></p>
									</div>
								</div>
							 </span>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright {{date('Y')}}. DIT&amp;C All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->


    <!-- Vendor -->
    <script src="{{asset('backendAssets/vendor/jquery/jquery.js')}}"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('backendAssets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/common/common.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('backendAssets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('backendAssets/js/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('backendAssets/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('backendAssets/js/theme.init.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/additional-methods.min.js')}}"></script>
		<!-- Date picker -->
		 <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		 <script type="text/javascript">
			 $('.next2').click(function(e){
				 e.preventDefault();
				 if($('.register-form .tab-one').valid())
				 {
					 $('.one-tab').addClass('d-none');
					 $('.two-tab').removeClass('d-none');
					 $('.three-tab').addClass('d-none');
				 }
			 });
			 $('.previous1').click(function(e){
				 e.preventDefault();
				 $('.one-tab').removeClass('d-none');
				 $('.two-tab').addClass('d-none');
				 $('.three-tab').addClass('d-none');
			 });
			 $('.next3').click(function(e){
				 e.preventDefault();
				 if($('.register-form .tab-two').valid())
				 {
					 $('.one-tab').addClass('d-none');
					 $('.two-tab').addClass('d-none');
					 $('.three-tab').removeClass('d-none');
			 	}
			 });
			 $('.previous2').click(function(e){
				 e.preventDefault();
				 $('.one-tab').addClass('d-none');
				 $('.two-tab').removeClass('d-none');
				 $('.three-tab').addClass('d-none');
			 });
			 $('.submit-btn').click(function(e){
				 if($('.register-form .tab-three').valid())
	 				{
						var password = $('#password').val();
						var confPass = $('#password_confirmation').val();
						if(password !== confPass)
						{
							Swal.fire(
						 'Error',
						 'Password Mismatch',
						 'Error'
						 );
						 e.preventDefault();
						}
	 					return;
	 			 }
				 e.preventDefault();

			 });
		 </script>

		<script type="text/javascript">
			$('#reload').click(function () {
					$.ajax({
							type: 'GET',
							url: 'reload-captcha',
							success: function (data) {
									$(".captcha span").html(data.captcha);
							}
					});
			});
		</script>

		<script>
		  $( function() {
		    $( ".datepicker" ).datepicker({
		      dateFormat: 'dd-mm-yy',
		      yearRange: '1940:2030',
		      changeYear: true,
		      changeMonth: true,
		    });
		  } );
		 </script>
		 <script type="text/javascript">
		 	var validNumber = new RegExp(/^\d*\.?\d*$/);
		 	var lastValid = document.getElementById('auth_mobile','so_mobile','ho_mobile', 'ho_pin', 'so_pin').value;
		 	function validate(elem) {
		 	  if (validNumber.test(elem.value)) {
		 	    lastValid = elem.value;
		 	  } else {
		 	    elem.value = lastValid;
		 	  }
		 	}
		 </script>

		 <script type="text/javascript">
		 	var validAlpha = new RegExp(/^[a-zA-Z ]*$/);
		 	var lastValidA = document.getElementById('auth_person','name','ho_mobile').value;
		 	function validateA(elem) {
		 	  if (validAlpha.test(elem.value)) {
		 	    lastValidA = elem.value;
		 	  } else {
		 	    elem.value = lastValidA;
		 	  }
		 	}
		 </script>

		 <script type="text/javascript">
		 	$('#password_confirmation').click(function(){

			});
		 </script>
	@livewireScripts
	</body>
</html>

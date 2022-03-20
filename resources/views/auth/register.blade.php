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
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
        <a href="/" class="logo d-inline-block text-center mb-4">
					<img src="{{asset('assets/images/row-logo.png')}}"/>
				</a>

				<div class="panel card-sign">
					<div class="card-body">
						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="register-form">
              @csrf
							 <x-auth-validation-errors class="mb-4" :errors="$errors" />
							 <span class="one-tab">
								 <div class="form-group mb-3">
	 								<label>Authorized Persons Name</label>
	 								<input name="name" id="name" type="text" class="form-control form-control-md tab-one" value="{{old('name')}}" oninput="validateA(this);" required/>
	 							</div>

								<div class="form-group mb-0">
	 								<div class="row">
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Email:</label>
	 										<input name="email" type="email" class="form-control form-control-md tab-one" value="{{old('email')}}" required/>
	 									</div>
	 									<div class="col-sm-6 mb-3">
	 										<label>Authorized Person's Mobile:</label>
	 										<input name="mobile" type="text"  oninput="validate(this);" class="form-control form-control-md tab-one" minlength="10" maxlength="10" value="{{old('mobile')}}" pattern="\d*" id="mobile" required/>
	 									</div>
	 									<div class="col-sm-12 mb-3">
	 										<label>Authorized Person's Designation:</label>
	 										<input name="designation" type="text" class="form-control form-control-md" value="{{old('designation')}}"  id="designation" required/>
	 									</div>
	 								</div>
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
		 <script type="text/javascript">
		 	var validNumber = new RegExp(/^\d*\.?\d*$/);
		 	var lastValid = document.getElementById('mobile').value;
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
		 	var lastValidA = document.getElementById('name').value;
		 	function validateA(elem) {
		 	  if (validAlpha.test(elem.value)) {
		 	    lastValidA = elem.value;
		 	  } else {
		 	    elem.value = lastValidA;
		 	  }
		 	}
		 </script>
	</body>
</html>

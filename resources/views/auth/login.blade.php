<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="Right of Way Portal | Government of Nagaland" />
		<meta name="description" content="Official portal of Right of Way | Government of Nagaland">
		<meta name="author" content="Government of Nagaland">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Right of Way Portal | Government of Nagaland</title>
		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/boxicons/css/boxicons.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

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
					<img src="assets/images/row-logo.png"/>
				</a>

				<div class="panel card-sign">
					<div class="card-body">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
						<form method="POST" action="{{ route('login') }}" id="loginForm">
              @csrf
							<div class="form-group mb-3">
								<label>Authorised Person Email</label>
								<div class="input-group">
									<input name="email" type="email" id="email" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-user text-4"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="{{route('password.request')}}" class="float-right">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="password" id="login-form-password" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-lock text-4"></i>
										</span>
									</span>
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
                  <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
              </div>

							<div class="row">
								<!-- <div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div> -->
								<div class="col-sm-12 text-right">
									<button type="submit" id="submitBtn" class="btn btn-primary mt-2">Sign In</button>
								</div>
							</div>

					         <hr>

							<p class="text-left mt-4">Don't have an account yet? <a href="{{route('register')}}"><b>Sign Up!</b></a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright {{date('Y')}}. All Rights Reserved.</p>
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
		<!-- Captcha Reload -->
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
		<!-- <script>
		$( "#submitBtn" ).click(function() {
	       var pass = document.getElementById('login-form-password');
	       var passval = pass.value;
				 var pwd = btoa(passval);
				 console.log(pwd);
	       var email = $('#email').val();
	       /* TODO
	       Call an api with unique key by email for this request and clear id in backend on login success??
	     Use unique key to hash using other hash algorithm instead of base64
	        */
	    /* Encyrpt password */
	      $.ajax({
	        url: "/ajaxForm",
	        type:"GET",
	        data:{
						email:email,
	          pwd: pwd,
	        },
	        success:function(response){
	          console.log(response);
	          if(response) {
	            pass.value = response.encrypted;
	            console.log(pass);
							$('#loginForm').submit();
	          }
	        },
	        error: function(error) {
	         console.log(error);
					 Swal.fire(
			 	  'Error',
			 	  'Email mismatch or Email not found.',
			 	  'error'
			 		);
	        }
	       });

	     });
	</script> -->

		<!-- Specific Page Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('backendAssets/js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('backendAssets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('backendAssets/js/theme.init.js')}}"></script>
		@if(Session::has('userSubmitted'))
		<script type="text/javascript">
			$(document).ready(function(){
				Swal.fire(
			 'Success',
			 'Your user registration has been submitted. Awaiting activation by DITC: Nagaland. Please check your registered email for more information',
			 'success'
			 );
			});
		</script>
		@endif
	</body>
</html>

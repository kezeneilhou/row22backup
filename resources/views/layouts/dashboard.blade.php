<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Row Portal: Nagaland</title>
		<meta name="keywords" content="Row Portal: Nagaland" />
		<meta name="description" content="Row Portal: Nagaland">
		<meta name="author" content="Kezeneilhou">

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
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/morris/morris.css')}}" />
		<link rel="stylesheet" href="{{asset('backendAssets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('backendAssets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('backendAssets/vendor/jquery/jquery.js')}}"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<script src="{{asset('backendAssets/vendor/modernizr/modernizr.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/sweetAlert/sweetalert.js')}}"></script>
		@livewireStyles
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="{{url('/')}}" class="logo">
						<img src="{{asset('assets/images/row-logo.png')}}" width="100%" height="35" alt="Porto Admin" />
					</a>

					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>

				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="bx bx-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">230</span>
									Messages
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>

					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<i class="fas fa-user"></i>
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{Auth::user()->name}}</span>
								<span class="role">{{Auth::user()->designation}}</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>

								@if(Auth::user()->role == null)
								<li>
								  <a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#profileModal"><i class="bx bx-user-circle"></i> Profile</a>
								</li>
								@endif
								<li>
								  <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off"></i> Logout</a>
								</li>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
								    {{ csrf_field() }}
								</form>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">

								<ul class="nav nav-main">
									<li>
										<a class="nav-link" href="{{route('dashboard')}}">
											<i class="bx bx-home-alt" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<x-sidebar-menu :count='$counts'/>
								</ul>
							</nav>
						</div>

						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');

									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{route('dashboard')}}">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Dashboard</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->


          @yield('content')



					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="{{asset('backendAssets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/common/common.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		<!-- Specific Page Vendor -->
		<script src="{{asset('backendAssets/vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/jquery-appear/jquery.appear.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('backendAssets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('backendAssets/js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('backendAssets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('backendAssets/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('backendAssets/js/examples/examples.dashboard.js')}}"></script>
		@include('dashboardPartials.scripts')
		@include('dashboardPartials.flashMessages')
		@livewireScripts
	</body>
</html>

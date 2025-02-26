<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink"
	data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0 bg-dark box-shadow-none">

		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="{{ url('/')}}">
								<img alt="Logo" width="165" height="70"
									src="{{ asset('') }}img/gen_img/logo-design.png">
							</a>
						</div>

					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div
							class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
							<div
								class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<!-- <li>
												<a class="nav-link active" href="{{ url('/')}}">
													Home
												</a>
											</li> -->
										<li class="dropdown dropdown-primary">
											<a class="dropdown-toggle nav-link" href="{{ url('/')}}">
												Home
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="{{ url('/mission-vision')}}">
														Our Mission & Vision
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="{{ url('/mentors')}}">
														Our Mentors
													</a>
												</li>
												<!-- <li>
														<a class="dropdown-item" href="{{ url('/leadership-team')}}">
															Our Leadership Team
														</a>
													</li> -->
												<!-- <li>
														<a class="dropdown-item" href="{{ url('/')}}">
															Our Memories
														</a>
													</li> -->
												<li>
													<a class="dropdown-item" href="{{ url('/core-team')}}">
														Our Core Team
													</a>
												</li>
												<!-- <li>
													<a class="dropdown-item" target="_blank"
														href="{{ url('https://forms.gle/6tur28y68aAx1ajf9')}}">
														Become Volunteer
													</a>
												</li> -->
												<!-- <li>
													<a class="dropdown-item" data-bs-toggle="modal"
														data-bs-target="#login" href="">
														Become Member
													</a>
												</li> -->


											</ul>
										</li>
										<li>
											<a class="nav-link" href="{{ url('/about')}}">
												About Us
											</a>
										</li>
										<li class="dropdown dropdown-primary">
											<a class="dropdown-toggle nav-link" href="#">
												Committee
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Pune</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'nashik']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'nashik']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Bangalore</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'bangalore']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'nashik']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Mumbai</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'mumbai']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'nashik']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Nashik</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'nashik']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'nashik']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Solapur</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'solapur']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'solapur']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Bangalore</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'bangalore']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'bangalore']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">Indore</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item"
																href="{{ route('managing-committee', ['city' => 'indore']) }}">Managing
																Committee</a>
														</li>
														<li><a class="dropdown-item" href="{{ route('mentor-president', ['city' => 'indore']) }}">Current Mentor & Past
																President</a></li>
														<li><a class="dropdown-item" href="{{ url('/event')}}">Current &
																Past Event</a>
														</li>
													</ul>
												</li>
											</ul>

										</li>
										<!-- <li>
											<a class="nav-link" href="#">
												Gen Z Resources
											</a>
										</li> -->
										<li class="dropdown dropdown-primary">
											<a class="nav-link" href="#">
												knowledge center
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="{{ url('/')}}">
														Hr Form
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="{{ url('/hr-terminology')}}">
														HR Terminology [ A - Z ]
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="{{ url('/hr-certification')}}">
														HR Certification
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="{{ url('/')}}">
														Webinars
													</a>
												</li>

											</ul>
										</li>
										<!-- <li class="dropdown dropdown-primary">
												<a class="dropdown-toggle nav-link" href="#">
													Awards 
												</a>
												<ul class="dropdown-menu">
													<li class="dropdown-submenu">
														<a class="dropdown-item" href="#">Year List</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="#">2023</a></li>
															<li><a class="dropdown-item" href="#">2024</a></li>
															<li><a class="dropdown-item" href="#">2025</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-item" href="#">Awards Jury</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Our Past Sponsers</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Award Testimonial</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Media Coverage</a>
													</li>
												</ul>
												
											</li> -->
										<li>
											<a class="nav-link" href="#">
												Gallery
											</a>
										</li>

										<li>
											<a class="nav-link" href="#">
												Contact Us
											</a>
										</li>
									</ul>


									@if (Auth::check())
										<a href="/profile" class=" font-weight-bold text-2 mt-4"
											data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
											style="height: 50px;border-radius: 50px;">
											<i class='fas fa-user-circle' style='font-size:36px'></i></a>
									@else
										<a data-bs-toggle="modal" data-bs-target="#login"
											class="btn btn-primary btn-modern font-weight-bold text-2 mt-4"
											data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
											style="height: 50px;border-radius: 50px;">Login</a>
									@endif

									<!-- <a data-bs-toggle="modal" data-bs-target="#login" 
											class="btn btn-primary btn-modern font-weight-bold text-2 mt-4"
											data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
											style="height: 50px;border-radius: 50px;">Login</a> -->
									@if (Auth::check())
										<form action="{{ route('logout') }}" method="POST">
											@csrf
											<button type="submit" class=" font-weight-bold text-2 mt-4" style='height: 41px;
															border-radius: 50px;
															padding: 7px;
															margin-left: 10px;
															margin-top: 21px !important;'>
												<i class="fa fa-power-off" style='font-size:24px'
													aria-hidden="true"></i></button>
										</form>
									@endif
								</nav>
							</div>
							<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
								data-bs-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<!-- login Model Box -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="font-weight-bold text-5 mb-0">Log In</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb-4">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 mb-5 mb-lg-0">

							<!-- Regular Login Form -->
							<div id="regular-login">
								<form action="{{ route('login') }}" id="frmSignIn" method="post"
									class="needs-validation">
									@csrf
									<input type="hidden" name="redirect_to"
										value="{{ request('redirect_to', url()->previous()) }}">
									<div class="row">
										<div class="form-group col">
											<label class="form-label text-color-dark text-3">Email address <span
													class="text-color-danger">*</span></label>
											<input type="email" name="email" value="{{ old('email') }}"
												class="form-control form-control-lg text-4 @error('email') is-invalid @enderror"
												required>
											@error('email')
												<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label text-color-dark text-3">Password <span
													class="text-color-danger">*</span></label>
											<input type="password" name="password"
												class="form-control form-control-lg text-4 @error('password') is-invalid @enderror"
												required>
											@error('password')
												<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="row justify-content-between">
										<div class="form-group col-md-auto">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" name="remember" class="custom-control-input"
													id="rememberme">
												<label class="form-label custom-control-label cur-pointer text-2"
													for="rememberme">Remember Me</label>
											</div>
										</div>
										<div class="form-group col-md-auto">
											<a href="{{ url('/forgot-password')}}" class="text-decoration-none text-color-dark text-color-hover-primary 
												font-weight-semibold text-2">Forgot Password?</a>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<button type="submit"
												class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
												data-loading-text="Loading...">Login</button>

											<div class="divider">
												<span
													class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
											</div>

											<button type="button" id="guestaccountform"
												class="btn btn-dark btn-modern w-100 mb-4" style="display: none;">
												Login With Guest Account
											</button>

											<div class="row">
												<div class="col-md-6">
													<button type="button" id="showOtpForm" class="btn btn-dark btn-modern w-100 text-transform-none rounded-0
													 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3">
														Login With OTP
													</button>

												</div>
												<div class="col-md-6">
													<a href="{{ route('login.google', ['redirect_to' => request('redirect_to')]) }}"
														class="btn btn-dark btn-modern w-100 text-transform-none rounded-0
													 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3"
														data-loading-text="Loading...">
														Login With Google
													</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								<div class="tab_end_text">Don't have an account? <a href="" data-bs-toggle="modal"
										data-bs-target="#signup">Create an
										Account</a></div>
							</div>

							<!-- Login with OTP Form (Initially Hidden) -->
							<div id="otp-login" style="display: none;">
								<form action="{{ route('send-otp', ['redirect_to' => request('redirect_to')]) }}"
									id="frmOtpSignIn" method="post">
									@csrf
									<div class="row">
										<div class="form-group col">
											<label class="form-label text-color-dark text-3">Email address <span
													class="text-color-danger">*</span></label>
											<input type="email" name="otpemail" value="{{ old('email') }}"
												class="form-control form-control-lg text-4 @error('otpemail', 'otp_form') is-invalid @enderror"
												required>
											@error('otpemail', 'otp_form') <!-- Specify error bag -->
												<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<button type="submit"
										class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
										data-loading-text="Loading...">Send OTP</button>

									<!-- Button to go back to regular login -->
									<button type="button" id="showLoginForm"
										class="btn btn-link w-100 text-center mt-3">
										Back to Login
									</button>
								</form>
							</div>

							<!-- guest account -->
							<div id="guest-login" style="display: none;">
								<form
									action="{{ route('guest-account-sendotp', ['redirect_to' => request('redirect_to')]) }}"
									id="guestaccount" method="post">
									@csrf
									<div class="row">
										<div class="form-group col">
											<label class="form-label text-color-dark text-3">Email address <span
													class="text-color-danger">*</span></label>
											<input type="email" name="otpemail" value="{{ old('email') }}"
												class="form-control form-control-lg text-4 @error('otpemail', 'otp_form') is-invalid @enderror"
												required>
											@error('otpemail', 'otp_form') <!-- Specify error bag -->
												<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<button type="submit"
										class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
										data-loading-text="Loading...">Send OTP</button>

									<!-- Button to go back to regular login -->
									<button type="button" id="showLoginForm"
										class="btn btn-link w-100 text-center mt-3">
										Back to Login
									</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Model Box -->

<!-- sign up Model Box -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="font-weight-bold text-5 mb-0">Create Your Account</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb-4">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 mb-5 mb-lg-0">



							<form action="/register" method="POST" class="needs-validation" novalidate>
								@csrf
								<div class="row">
									<div class="form-group col">
										<label for="first_name" class="form-label text-color-dark text-3">
											{{ __('First Name') }} <span class="text-color-danger">*</span>
										</label>
										<input type="text" id="first_name" name="first_name"
											class="form-control form-control-lg text-4 @error('first_name') is-invalid @enderror"
											value="{{ old('first_name') }}" required minlength="2">
										@error('first_name')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label for="last_name" class="form-label text-color-dark text-3">
											{{ __('Last Name') }} <span class="text-color-danger">*</span>
										</label>
										<input type="text" id="last_name" name="last_name"
											class="form-control form-control-lg text-4 @error('last_name') is-invalid @enderror"
											value="{{ old('last_name') }}" required minlength="2">
										@error('last_name')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label for="email" class="form-label text-color-dark text-3">
											{{ __('Email address') }} <span class="text-color-danger">*</span>
										</label>
										<input type="email" id="email" name="email"
											class="form-control form-control-lg text-4 @error('email') is-invalid @enderror"
											value="{{ old('email') }}" required>
										@error('email')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label for="password" class="form-label text-color-dark text-3">
											{{ __('Password') }} <span class="text-color-danger">*</span>
										</label>
										<input type="password" id="password" name="password"
											class="form-control form-control-lg text-4 @error('password') is-invalid @enderror"
											required minlength="8">
										@error('password')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label for="password_confirmation" class="form-label text-color-dark text-3">
											{{ __('Confirm Password') }} <span class="text-color-danger">*</span>
										</label>
										<input type="password" id="password_confirmation" name="password_confirmation"
											class="form-control form-control-lg text-4" required>
										<div class="invalid-feedback" id="confirm-password-feedback">Please confirm your
											password.</div>

									</div>
								</div>

								<div class="row justify-content-between">
									<div class="form-group col-md-auto">
										<div class="custom-control custom-checkbox">
											<input type="checkbox"
												class="custom-control-input @error('terms') is-invalid @enderror"
												id="rememberme" name="terms" required>
											{{ __('By creating an account, I agree to') }}
											<a href="#" target="blank">{{ __('Terms of Use') }}</a> {{ __('and') }}
											<a href="#" target="blank">{{ __('Privacy Policy') }}</a>.
											<div class="invalid-feedback">You must agree to the terms and privacy
												policy.</div>
											<label class="form-label custom-control-label cur-pointer text-2"
												for="rememberme"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<button type="submit"
											class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
											data-loading-text="Loading...">
											{{ __('Create Account') }}
										</button>
									</div>
								</div>
							</form>


						</div>

					</div>
				</div>
				<!-- <div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					</div> -->
			</div>
		</div>
	</div>
</div>

<!-- otp login Model Box -->
<div class="modal fade" id="verifyotp" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="font-weight-bold text-5 mb-0">Verify OTP</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb-4">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 mb-5 mb-lg-0">

							@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
							@endif
							<form action="{{ route('verify-otp') }}" id="verify-otp" method="post"
								class="needs-validation">
								@csrf
								<!-- Hidden field to pass email -->
								<input type="hidden" name="email" value="{{ session('otp_email') }}">
								<div class="row">
									<div class="form-group col">
										<label class="form-label text-color-dark text-3">OTP <span
												class="text-color-danger">*</span></label>
										<input type="text" name="otp" value="{{ old('otp') }}"
											class="form-control form-control-lg text-4 @error('otp', 'otp_form') is-invalid @enderror"
											required pattern="\d{6}" maxlength="6" placeholder="Enter 6-digit OTP">
										@error('otp', 'otp_form')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<button type="submit"
									class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
									data-loading-text="Loading...">Verify OTP</button>
							</form>

						</div>
						<!-- end Login with OTP Form -->
					</div>
				</div>
				<!-- <div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					</div> -->
			</div>
		</div>
	</div>
</div>

<!-- guest otp login Model Box -->
<div class="modal fade" id="guestverifyotp" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
	aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="font-weight-bold text-5 mb-0">Guest Account Verify OTP</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb-4">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 mb-5 mb-lg-0">

							@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
							@endif
							<form action="{{ route('guest-verify-otp') }}" id="verify-otp" method="post"
								class="needs-validation">
								@csrf
								<!-- Hidden field to pass email -->
								<input type="hidden" name="email" value="{{ session('otp_email') }}">
								<div class="row">
									<div class="form-group col">
										<label class="form-label text-color-dark text-3">OTP <span
												class="text-color-danger">*</span></label>
										<input type="text" name="otp" value="{{ old('otp') }}"
											class="form-control form-control-lg text-4 @error('otp', 'otp_form') is-invalid @enderror"
											required pattern="\d{6}" maxlength="6" placeholder="Enter 6-digit OTP">
										@error('otp', 'otp_form')
											<div class="otp-error-message">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<button type="submit"
									class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
									data-loading-text="Loading...">Verify OTP</button>
							</form>

						</div>
						<!-- end Login with OTP Form -->
					</div>
				</div>
				<!-- <div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					</div> -->
			</div>
		</div>
	</div>
</div>


<script>
	document.addEventListener("DOMContentLoaded", function () {
		// Get the current URL
		const currentURL = window.location.href;

		// Check if the URL contains '/event'
		if (currentURL.includes('/event') || currentURL.includes('/event-booking')) {
			document.getElementById("guestaccountform").style.display = "block";
		}
	});

	document.addEventListener('DOMContentLoaded', function () {
		const passwordField = document.getElementById('password');
		const confirmPasswordField = document.getElementById('password_confirmation');
		const confirmPasswordFeedback = document.getElementById('confirm-password-feedback');

		if (passwordField && confirmPasswordField) { // Prevents errors if fields are missing
			confirmPasswordField.addEventListener('input', function () {
				if (passwordField.value !== confirmPasswordField.value) {
					confirmPasswordField.setCustomValidity("Passwords do not match.");
					confirmPasswordFeedback.textContent = "Passwords do not match.";
					confirmPasswordFeedback.style.color = "red";
				} else {
					confirmPasswordField.setCustomValidity("");
					confirmPasswordFeedback.textContent = "Passwords match.";
					confirmPasswordFeedback.style.color = "green";
				}
			});
		}
	});

	document.getElementById("showOtpForm").addEventListener("click", function () {
		document.getElementById("regular-login").style.display = "none";
		document.getElementById("otp-login").style.display = "block";
	});

	document.getElementById("guestaccountform").addEventListener("click", function () {
		document.getElementById("regular-login").style.display = "none";
		document.getElementById("guest-login").style.display = "block";
	});

	document.getElementById("showLoginForm").addEventListener("click", function () {
		document.getElementById("regular-login").style.display = "block";
		document.getElementById("otp-login").style.display = "none";
	});

	document.addEventListener("DOMContentLoaded", function () {
		const urlParams = new URLSearchParams(window.location.search);
		const guestLogin = urlParams.get("guestLogin");

		if (guestLogin === "1") {
			document.getElementById("guestaccountform").style.display = "block"; // Show the button
		}
	});

	document.addEventListener("DOMContentLoaded", function () {


		// Get the current page URL
		const currentURL = window.location.href;
		const loginError = "{{ session('loginError') }}";
		const guestotpError = "{{ session('loginError') }}";
		const registerError = "{{ session('registerError') }}";
		const guestotp = "{{ session('guest_verify_otp') }}";

		const urlParams = new URLSearchParams(window.location.search);


		const showLogin = urlParams.get("showLogin");

		if (guestotp) {
			const guestverifyotp = new bootstrap.Modal(document.getElementById('guestverifyotp'), {});
			guestverifyotp.show();

			const loginModal = new bootstrap.Modal(document.getElementById('login'), {});
			loginModal.hide();
		} else if (currentURL.includes('login') || showLogin || loginError) {
			// Trigger the modal
			const loginModal = new bootstrap.Modal(document.getElementById('login'), {});
			loginModal.show();
		}
		if (currentURL.includes('register') || registerError) {
			const signupModal = new bootstrap.Modal(document.getElementById('signup'), {});
			signupModal.show();
		}

		if (currentURL.includes('verify-otp')) {
			const verifyotp = new bootstrap.Modal(document.getElementById('verifyotp'), {});
			verifyotp.show();
		}
	});


</script>
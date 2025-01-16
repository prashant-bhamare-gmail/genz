@extends('master')
@section('content')
<div role="main" class="main">
	<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside 
		dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1 
		nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}"
		style="height: 100vh;">
		<div class="owl-stage-outer">
			<div class="owl-stage">

				<!-- Carousel Slide 1 -->
				<div class="owl-item position-relative pt-5"
					style="background-image: url(img/gen_img/banner_image.png); background-size: cover; background-position: center;">
					<div class="container position-relative z-index-3 pb-5 h-100">
						<div class="row align-items-center pb-5 h-100">
							<div class="col text-center">
								<h2 class="custom-secondary-font text-color-light text-center font-weight-extra-bold text-8 line-height-1 line-height-sm-3 appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
									data-plugin-options="{'minWindowWidth': 0}">
									<span class="custom-secondary-font text-5-6">
										Welcome to HR Connect
									</span>
									<br>
								</h2>
								<h4 class="custom-secondary-font text-color-light text-center font-weight-extra-bold text-6 mb-5 appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
									data-plugin-options="{'minWindowWidth': 0}">
									A Global community of 150,000 + HR Professionals & Business Leaders in 11 Countries
								</h4>

								<a href="https://api.whatsapp.com/send?phone=911234567890" target="_blank"
									class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
									data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Join
									Whatsapp Group
								</a>
								<!-- <a href="#" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Explore Services
									</a> -->
							</div>
						</div>
					</div>
				</div>

				<!-- Carousel Slide 2 -->
				<div class="owl-item position-relative pt-5"
					style="background-image: url(img/gen_img//slide-2.jpg); background-size: cover; background-position: center;">
					<div class="container position-relative z-index-3 pb-5 h-100">
						<div class="row align-items-center pb-5 h-100">
							<!-- <div class="col">
									<h1 class="custom-secondary-font text-color-light font-weight-extra-bold text-8 line-height-1 line-height-sm-3 mb-5 appear-animation" 
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" 
										data-plugin-options="{'minWindowWidth': 0}">
										<span class="custom-secondary-font text-4-5">
											Empowering Workplaces, Enabling Success
										</span>
										<br>
										Your go-to hub for Gen Z insights, ideation, and HR transformation	
									</h1>
									<a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 
									py-3 btn-px-4 appear-animation" data-appear-animation="fadeInUpShorter" 
									data-appear-animation-delay="800">GET STARTED</a>
								</div> -->
							<div class="col text-center">
								<h2 class="custom-secondary-font text-color-light text-center font-weight-extra-bold text-8 line-height-1 line-height-sm-3 appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
									data-plugin-options="{'minWindowWidth': 0}">
									<span class="custom-secondary-font text-5-6">
										Welcome to HR Connect
									</span>
									<br>
								</h2>
								<h4 class="custom-secondary-font text-color-light text-center font-weight-extra-bold text-6 mb-5 appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500"
									data-plugin-options="{'minWindowWidth': 0}">
									A Global community of 150,000 + HR Professionals & Business Leaders in 11 Countries
								</h4>

								<a href="#"
									class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
									data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Join
									Whatsapp Group
								</a>
								<!-- <a href="#" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Explore Services
									</a> -->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="owl-nav">
			<button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
			<button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
		</div>
	</div>

	<section class="looking-for custom-position-1 custom-md-border-top z-index-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<div class="looking-for-box">
						<h2>- <span class="text-1 custom-secondary-font mb-4">Are You Looking For HR Consultation
								Session</span><br>
						</h2>
						<!-- <p>Would you like to be part of HR growth or attend consulting sessions?</p> -->
						<a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 mt-3
								py-3 btn-px-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
							data-bs-toggle="modal" data-bs-target="#booknow">Book Now</a>
					</div>
				</div>

				<div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
					<a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
						<span class="custom-call-to-action">
							<span class="action-title text-color-primary">Call Us Now</span>
							<span class="action-info text-color-light">+001 1230 4567</span>
						</span>
					</a>
				</div>
				<div class="col-md-3 col-lg-2">
					<a class="text-decoration-none" href="mail:hrconnect2025@gmail.com" target="_blank"
						title="Email Us Now">
						<span class="custom-call-to-action">
							<span class="action-title text-color-primary">Email Us Now</span>
							<span class="action-info text-color-light">hrconnect2025@gmail.com</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>


	<!-- Book Now Model Box -->
	<div class="modal fade" id="booknow" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
		aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <div class="">
						<h4 class="modal-title" id="largeModalLabel">Name</h4>
						<p class="lead pt-1">CEO &amp; Founder</p>
						</div> -->

					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row mb-4">
						<div class="tab-pane" id="formsStyleWithIcons">
							<!-- <h4 class="mb-3">With Icons</h4> -->
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<form class="contact-form form-with-icons" action="php/contact-form.php"
												method="POST">
												<div class="contact-form-success alert alert-success d-none mt-4">
													<strong>Success!</strong> Your message has been sent to us.
												</div>

												<div class="contact-form-error alert alert-danger d-none mt-4">
													<strong>Error!</strong> There was an error sending your message.
													<span class="mail-error-message text-1 d-block"></span>
												</div>

												<div class="row">
													<div class="form-group col-lg-12">
														<label class="form-label mb-1 text-2">Full Name</label>
														<div class="position-relative">
															<i
																class="icons icon-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
															<input type="text" value=""
																data-msg-required="Please enter your name."
																maxlength="100" class="form-control text-3 h-auto py-2"
																name="name" required>
														</div>
													</div>
													<div class="form-group col-lg-12">
														<label class="form-label mb-1 text-2">Email Address</label>
														<div class="position-relative">
															<i
																class="icons icon-envelope text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
															<input type="email" value=""
																data-msg-required="Please enter your email address."
																data-msg-email="Please enter a valid email address."
																maxlength="100" class="form-control text-3 h-auto py-2"
																name="email" required>
														</div>
													</div>
													<div class="form-group col-lg-12">
														<label class="form-label mb-1 text-2">Phone Number</label>
														<div class="position-relative">
															<i class="icons icon-phone text-color-primary text-3 
																position-absolute left-15 top-50pct transform3dy-n50"></i>
															<input type="email" value=""
																data-msg-required="Please enter your phone Number."
																data-msg-email="Please enter a valid email address."
																maxlength="100" class="form-control text-3 h-auto py-2"
																name="email" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<label class="form-label mb-1 text-2">Subject</label>
														<div class="position-relative">
															<i
																class="icons icon-note text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
															<input type="text" value=""
																data-msg-required="Please enter the subject."
																maxlength="100" class="form-control text-3 h-auto py-2"
																name="subject" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<label class="form-label">City</label>
														<div class="position-relative">
															<i
																class="icons icon-location-pin text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
															<div class="custom-select-1">
																<select class="form-select form-control h-auto"
																	data-msg-required="Please select a city."
																	name="city" required>
																	<option value="">--- Please Select City ---</option>
																	<option value="1">Pune</option>
																	<option value="2">Solapur</option>
																	<option value="3">Mumbai</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<label class="form-label mb-1 text-2">Subject</label>
														<div class="position-relative">
															<i
																class="icons icon-note text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
															<input type="text" value=""
																data-msg-required="Please enter the subject."
																maxlength="100" class="form-control text-3 h-auto py-2"
																name="subject" required>
														</div>
													</div>
												</div>
												<!-- <div class="row">
														<div class="form-group col">
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio1" value="option1" required> Option 1
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio2" value="option2" required> Option 2
																</label>
															</div>
															<div class="form-check form-check-inline">
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="tabContent13Radio3" value="option3" required> Option 3
																</label>
															</div>
														</div>
													</div> -->
												<div class="row">
													<div class="form-group col">
														<label class="form-label mb-1 text-2">Message</label>
														<div class="position-relative">
															<i
																class="icons icon-bubble text-color-primary text-3 position-absolute left-15 top-15"></i>
															<textarea maxlength="5000"
																data-msg-required="Please enter your message." rows="3"
																class="form-control text-3 h-auto py-2" name="message"
																required></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value=""
																name="agree" id="tabContent13Checkbox"
																data-msg-required="You must agree before submiting."
																required>
															<label class="form-check-label" for="tabContent13Checkbox">
																Agree to terms and conditions
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<input type="submit" value="Submit Form" class="btn btn-primary"
															data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Model Box -->

		<!--<section class=" custom-section-padding">
			<div class="container">
				<div class="row mb-4">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">-	Key Offering</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="#" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
						data-appear-animation-delay="0">
						<div class="feature-box custom-feature-box feature-box-style-2">
							<div class="counter-icon">
								<img src="{{ asset('') }}img/gen_img/icon-3.png" alt="" width="64px">
							</div>
							<div class="feature-box-info ms-3">
								<h4 class="font-weight-normal text-5">HR Meet </h4>
								<p class="text-2">IT aims to foster collaboration and strategic insights by bringing
									together HR
									leaders to share knowledge, best practices, and innovative approaches to workforce
									management.
									It serves as a platform for empowering professionals to drive organizational growth
									through
									focused discussions on learning, strategy, and the evolving role of human resources.
									By
									facilitating strategic dialogue, skill enhancement, and idea exchange, the meet
									seeks to
									shape the future of HR through shared expertise and innovative thinking.</p>
							</div>
						</div>
					</a>
				</div>
				 <div class="row">
					<div class="col-lg-4">
						<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="feature-box-icon">
									<img src="{{ asset('') }}img/demos/business-consulting/expertise/expertise-4.jpg" alt="">
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">Litigation Consulting</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="feature-box-icon">
									<img src="{{ asset('') }}img/demos/business-consulting/expertise/expertise-5.jpg" alt="">
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">Strategic Consulting</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="500">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="feature-box-icon">
									<img src="{{ asset('') }}img/demos/business-consulting/expertise/expertise-6.jpg" alt="">
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">Tech Consulting</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
					</div>
				</div>
			</div>
		</section> -->

	<section class="section-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="mt-5 mb-5">
						<div class="row">
							<div class="col-md-2 col-lg-2 ">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/classroom.png"
											width="65" height="65" alt="icon" />
										<strong class="text-color-primary custom-primary-font" data-to="5000"
											data-append="+">0</strong>
										<label>Trained</label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-lg-2 ">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/google-icon.png"
											width="65" height="65" alt />
										<strong class="text-color-primary custom-primary-font" data-to="100"
											data-append="+">0</strong>
										<label>HR Meet </label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-lg-2">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-2" src="{{ asset('') }}img/gen_img/cooperation.png"
											width="65" height="65" alt />
										<strong class="text-color-primary custom-primary-font" data-to="30"
											data-append="+">0</strong>
										<label>Corporate Partners</label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-lg-2 ">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/online-class.png"
											width="65" height="65" alt />
										<strong class="text-color-primary custom-primary-font" data-to="10000"
											data-append="+">0</strong>
										<label>HR Connections</label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-lg-2 ">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/partners.png"
											width="65" height="65" alt />
										<strong class="text-color-primary custom-primary-font" data-to="70"
											data-append="+">0</strong>
										<label>College Partner</label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-lg-2">
								<div class="counters bg-color-light p-4">
									<div class="counter custom-sm-counter-style">
										<img class="counter-icon mb-4"
											src="{{ asset('') }}img/gen_img/business-report.png" width="65" height="65"
											alt />
										<strong class="text-color-primary custom-primary-font" data-to="90"
											data-append="%">0</strong>
										<label>Career Benefits</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<form id="quiz-form" method="POST">
		@csrf
		<section class="custom-section-padding">
			<div class="container">
				<div class="row mb-3">
					<h2 class="font-weight-bold text-color-dark">- Quizzes Let's Have Fun Test Your Basic HR Fundamentals</h2>
					<div class="col-lg-9">
						<!-- Quiz -->
						<div class="wizard">
							<div class="tab-content" id="main_form">
								@foreach($randomQuestions as $index => $question)
									<div class="tab-pane @if($index == 0) active @endif" role="tabpanel"
										id="step{{ $index + 1 }}">
										<div class="step-content custom-step-item">
											<span class="step text-uppercase">
												<span class="step-number text-color-primary">
													{{ $index + 1 }}
												</span>
											</span>
											<div class="step-content">
												<h4 class="mb-3">{{ $question['question'] }}</h4>
											</div>
											@foreach($question['options'] as $option)
												<input type="radio" id="option{{ $loop->index }}_{{ $index }}"
													name="questions[{{ $index }}]" value="{{ $option }}">
												<label for="option{{ $loop->index }}_{{ $index }}">{{ $option }}</label><br>
											@endforeach
										</div>
										<ul class="list-inline pull-right">
											@if($index == 0)
												<li><button type="button" class="default-btn next-step">Next</button></li>
											@elseif($index == count($randomQuestions) - 1)
												<li><button type="button" class="default-btn prev-step">Back</button></li>
												<li><button type="button" class="default-btn next-step"
														id="submit-quiz">Finish</button></li>
											@else
												<li><button type="button" class="default-btn prev-step">Back</button></li>
												<li><button type="button" class="default-btn next-step">Next</button></li>
											@endif
										</ul>
									</div>
								@endforeach
								<div class="clearfix"></div> 
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="progress-ring-container">
							<svg class="progress-ring" width="200" height="200">
								<circle class="progress-ring-background" cx="100" cy="100" r="90" stroke-width="12" />
								<circle class="progress-ring-bar" cx="100" cy="100" r="90" stroke-width="12"
									stroke-dasharray="565.488" stroke-dashoffset="565.488" />
							</svg>
							<strong class="progress-percentage">0%</strong>
						</div>

						<!-- <div class="circular-bar">
							<div class="circular-bar-chart" id="circular-bar-chart" data-percent=0
								data-plugin-options="{'barColor': '#ff6708'}">
								<strong>0%</strong>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>

<script>
	// Quiz submission
	document.getElementById('submit-quiz').addEventListener('click', function () {
			const form = document.getElementById('quiz-form');
			const formData = new FormData(form);

			const questions = @json($randomQuestions);
			const submissionData = questions.map((question, index) => {
				const selectedOption = form.querySelector(`input[name="questions[${index}]"]:checked`);
				return {
					question: question.question,
					selectedAnswer: selectedOption ? selectedOption.value : '',
					correctAnswer: question.answer,
				};
			});

			formData.append('submissionData', JSON.stringify(submissionData));

			// Send data to the backend
			fetch('{{ route('submitQuiz') }}', {
				method: 'POST',
				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}',
				},
				body: formData,
			})
				.then(response => response.json())
				.then(data => {
					// Update the progress bar
					const percentage = data.percentage;

					const circle = document.querySelector('.progress-ring-bar');
					const radius = circle.r.baseVal.value;
					const circumference = 2 * Math.PI * radius;

					const offset = circumference - (percentage / 100) * circumference;
					circle.style.strokeDashoffset = offset;

					document.querySelector('.progress-percentage').textContent = `${percentage.toFixed(0)}%`;
				})
				.catch(error => {
					console.error('Error submitting quiz:', error);
				});
		});
</script>
		<section class="section-secondary custom-section-padding-2">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">- Activities Connected to HR Connect Forum</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 
				custom-dots-style-1 custom-xs-arrows-style-2 mb-0"
			data-plugin-options="{'items': 4, 'loop': true, 'dots': true, 'nav': true}">
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/HRCounsellingPhoto.jpg" style="height:229px"
								class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Counselling</span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/HRPodcast.jpg" style="height:229px"
								class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Podcast </span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/HR_Meet.jpg" style="height:229px"
								class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Meet</span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/hrlearning.png" style="height:229px"
								class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Learning & Certification </span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/HRCommittee.jpg" class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Committee </span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/CampusConnect.jpg" class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Campus
									Connect </span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>
			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/Awards.jpg" class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span
									class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Awards</span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>

			<div>
				<a href="#" class="text-decoration-none">
					<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
						<span class="thumb-info-wrapper m-0">
							<img src="{{ asset('') }}img/gen_img/event/HRKnowledge.jpg" style="height:255px"
								class="img-fluid" alt="">
						</span>
						<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
							<span class="custom-thumb-info-title">
								<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR
									Knowledge</span>
								<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
							</span>
							<span class="custom-arrow"></span>
						</span>
					</span>
				</a>
			</div>

		</div>
	</section>

	<section class="section border-0 bg-light m-0">
		<div class="container py-5">
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-color-dark">- Our Corporate Partner</h2>
					<div class="owl-carousel owl-theme stage-margin"
						data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-8.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-9.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded"
								src="img/gen_img/logo-10.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded"
								src="img/gen_img/logo-11.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded"
								src="img/gen_img/logo-12.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded"
								src="img/gen_img/logo-13.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-9.png">
						</div>
						<div>
							<img alt="" style="max-width: 90px;" class="img-fluid rounded"
								src="img/gen_img/logo-11.png">
						</div>

					</div>
				</div>
			</div>
</div>

@endsection

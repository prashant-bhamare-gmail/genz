@extends('master')
@section('content')
		<div role="main" class="main">
		<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside 
		dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1 
		nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
			<div class="owl-stage-outer">
				<div class="owl-stage">

					<!-- Carousel Slide 1 -->
					<div class="owl-item position-relative pt-5" style="background-image: url(img/gen_img/banner_image.png); background-size: cover; background-position: center;">
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
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
										A Global community of 150,000 + HR  Professionals & Business Leaders in 11 Countries</h4>
										 
									<a href="https://api.whatsapp.com/send?phone=911234567890" target="_blank" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Join Whatsapp Group
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
					<div class="owl-item position-relative pt-5" style="background-image: url(img/gen_img//slide-2.jpg); background-size: cover; background-position: center;">
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
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
										A Global community of 150,000 + HR  Professionals & Business Leaders in 11 Countries</h4>
										 
									<a href="#" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Join Whatsapp Group
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
							<h2>- <span class="text-1 custom-secondary-font mb-4">Are You Looking For HR Consultation Session</span><br>
							</h2>
							<!-- <p>Would you like to be part of HR growth or attend consulting sessions?</p> -->
							<a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 mt-3
								py-3 btn-px-4 appear-animation" data-appear-animation="fadeInUpShorter" 
								data-appear-animation-delay="800" data-bs-toggle="modal" data-bs-target="#booknow">Book Now</a>
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
						<a class="text-decoration-none" href="mail:hrconnect2025@gmail.com" target="_blank" title="Email Us Now">
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
		<div class="modal fade" id="booknow" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
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
												<form class="contact-form form-with-icons" action="php/contact-form.php" method="POST">
													<div class="contact-form-success alert alert-success d-none mt-4">
														<strong>Success!</strong> Your message has been sent to us.
													</div>

													<div class="contact-form-error alert alert-danger d-none mt-4">
														<strong>Error!</strong> There was an error sending your message.
														<span class="mail-error-message text-1 d-block"></span>
													</div>

													<div class="row">
														<div class="form-group col-lg-6">
															<label class="form-label mb-1 text-2">Full Name</label>
															<div class="position-relative">
																<i class="icons icon-user text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<label class="form-label mb-1 text-2">Email Address</label>
															<div class="position-relative">
																<i class="icons icon-envelope text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group col">
															<label class="form-label">City</label>
															<div class="position-relative">
																<i class="icons icon-location-pin text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
																<div class="custom-select-1">
																	<select class="form-select form-control h-auto" data-msg-required="Please select a city." name="city" required>
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
																<i class="icons icon-note text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
																<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
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
																<i class="icons icon-bubble text-color-primary text-3 position-absolute left-15 top-15"></i>
																<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control text-3 h-auto py-2" name="message" required></textarea>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group col">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent13Checkbox" data-msg-required="You must agree before submiting." required>
																<label class="form-check-label" for="tabContent13Checkbox">
																	Agree to terms and conditions
																</label>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group col">
															<input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
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

		<section class=" custom-section-padding">
			<div class="container">
				<div class="row mb-4">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">-	Key Offering</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<a href="#" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="counter-icon">
									<img src="{{ asset('') }}img/gen_img/icon-3.png" alt="" width="64px">
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">HR Meet </h4>
									<p class="text-2">IT aims to foster collaboration and strategic insights by bringing together HR 
										leaders to share knowledge, best practices, and innovative approaches to workforce management. 
										It serves as a platform for empowering professionals to drive organizational growth through 
										focused discussions on learning, strategy, and the evolving role of human resources. By 
										facilitating strategic dialogue, skill enhancement, and idea exchange, the meet seeks to 
										shape the future of HR through shared expertise and innovative thinking.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="#" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="counter-icon">
									<img src="{{ asset('') }}img/gen_img/hr-icon.png" alt="" >
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">HR Podcast </h4>
									<p class="text-2">It serves as a dynamic platform to explore evolving trends, share best practices, 
										and discuss innovative strategies shaping the future of human resources. It provides insightful 
										conversations with industry leaders, experts, and practitioners, offering practical knowledge 
										and thought-provoking ideas to address challenges in workforce management, employee engagement, 
										and organizational growth. Through engaging dialogues, the podcast aims to inspire HR 
										professionals to lead with innovation and strategic impact.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="#" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
							<div class="feature-box custom-feature-box feature-box-style-2">
								<div class="counter-icon">
									<img src="{{ asset('') }}img/gen_img/nextgeneration.png" alt="">
								</div>
								<div class="feature-box-info ms-3">
									<h4 class="font-weight-normal text-5">GenZ HR</h4>
									<p class="text-2">The expectations of meaningful work, purpose-driven roles, and opportunities for 
										growth and learning. They value flexible work arrangements, modern tools, and a strong focus on 
										mental health, well-being, and inclusivity. Transparency, clear career progression, and regular 
										feedback are essential, alongside structured training programs and mentorship to build their 
										expertise. These professionals also seek supportive leadership, exposure to diverse HR functions, 
										and recognition for their contributions, fostering a collaborative 
										and innovative work environment.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- <div class="row">
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
				</div> -->
			</div>
		</section>

		<section class="section-secondary">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="mt-5 mb-5">
							<div class="row">
								<div class="col-md-2 col-lg-2 ">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/classroom.png" width="65" height="65" alt="icon"  />
											<strong class="text-color-primary custom-primary-font" data-to="5000" data-append="+">0</strong>
											<label>Trained</label>
										</div>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2 ">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/google-icon.png" width="65" height="65" alt />
											<strong class="text-color-primary custom-primary-font" data-to="100" data-append="+">0</strong>
											<label>HR Meet </label>
										</div>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-2" src="{{ asset('') }}img/gen_img/cooperation.png" width="65" height="65" alt />
											<strong class="text-color-primary custom-primary-font" data-to="30" data-append="+">0</strong>
											<label>Corporate Partners</label>
										</div>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2 ">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/online-class.png" width="65" height="65" alt />
											<strong class="text-color-primary custom-primary-font" data-to="10000" data-append="+">0</strong>
											<label>HR Connections</label>
										</div>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2 ">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/partners.png" width="65" height="65" alt />
											<strong class="text-color-primary custom-primary-font" data-to="70" data-append="+">0</strong>
											<label>College Partner</label>
										</div>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2">
									<div class="counters bg-color-light p-4">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon mb-4" src="{{ asset('') }}img/gen_img/business-report.png" width="65" height="65" alt />
											<strong class="text-color-primary custom-primary-font" data-to="90" data-append="%">0</strong>
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

		<section class="custom-section-padding">
			<div class="container">
				<div class="row mb-3">
				<h2 class="font-weight-bold text-color-dark">- Quizzes</h2>
					<!-- <div class="col-lg-12">
						<h2 class="font-weight-bold text-color-dark">- Quizzes</h2>
						<div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots ps-1 pe-1"  data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
							<div>
								<div class="custom-step-item">
									<span class="step text-uppercase">
										
										<span class="step-number text-color-primary">
											01
										</span>
									</span>
									<div class="step-content">
										<h4 class="mb-3">The first meeting <strong>Understanding the Problem ?</strong></h4>
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">YES</label><br>
										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">NO</label>
									</div>
								</div>
							</div>
							 <div>
								<div class="custom-step-item">
									<span class="step text-uppercase">
										
										<span class="step-number text-color-primary">
											02
										</span>
									</span>
									<div class="step-content">
										<h4 class="mb-3">The second meeting <strong>Business Plan Consultant</strong></h4>
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">YES</label><br>
										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">NO</label>
									</div>
								</div>
							</div>
							<div>
								<div class="custom-step-item">
									<span class="step text-uppercase">
										
										<span class="step-number text-color-primary">
											03
										</span>
									</span>
									<div class="step-content">
										<h4 class="mb-3">The final meeting <strong>Problem Solved</strong></h4>
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">YES</label><br>
										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">NO</label>
									</div>
								</div>
							</div>
							<div>
								<div class="custom-step-item">
									<span class="step text-uppercase">
										
										<span class="step-number text-color-primary">
											04
										</span>
									</span>
									<div class="step-content">
										<h4 class="mb-3">The final meeting <strong>Problem Solved</strong></h4>
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">YES</label><br>
										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">NO</label>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					
					<div class="col-lg-9">
						<div class="wizard">
							<div class="tab-content" id="main_form">
								<div class="tab-pane active" role="tabpanel" id="step1">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												01
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What is the strategic role of HR in an organization?
											</h4>
										</div>
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Ensuring compliance with laws and regulations</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Aligning HR policies with business goals and driving organizational growth</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Managing day-to-day employee grievances</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Processing payroll and benefits</label>
									</div>
									<ul class="list-inline pull-right">
										<li>
											<button type="button" class="default-btn next-step">Next</button>
										</li>
									</ul>
								</div>

								<div class="tab-pane" role="tabpanel" id="step2">


									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												02
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">Which of the following describes human capital management?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Tracking employee attendance</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Viewing employees as assets to invest in for maximizing organizational value</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A method of conducting annual appraisals
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Ensuring compliance with workplace regulations</label>
									</div>
									
									
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>

								<div class="tab-pane" role="tabpanel" id="step3">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												03
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">Which workforce planning tool is used to identify critical roles and their future replacements?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Balanced Scorecard</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Succession planning</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">SWOT Analysis
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Employee Net Promoter Score (eNPS)</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>
								<div class="tab-pane" role="tabpanel" id="step4">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												04
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What does a high employee turnover rate indicate?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Employees are highly engaged</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Employees are leaving the organization at an increased pace</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Recruitment processes are highly effective
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Workforce planning is successful</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>
								<div class="tab-pane" role="tabpanel" id="step5">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												05
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What is the main objective of job evaluation?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Enhancing employee satisfaction</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Determining the relative worth of a job within an organization</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Assessing employee performance
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Streamlining recruitment processes</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>

								<div class="tab-pane" role="tabpanel" id="step6">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												06
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">In HR analytics, what does predictive analytics focus on?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Analyzing historical HR data</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Forecasting future trends and outcomes</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Measuring current workforce engagement
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Tracking compliance violations</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>

								<div class="tab-pane" role="tabpanel" id="step7">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												07
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What is a competency framework?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">A tool for measuring employee performance only</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A model that defines the skills, knowledge, and behaviors required for specific roles</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A system for processing employee benefits
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A legal document outlining employment terms</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>
								<div class="tab-pane" role="tabpanel" id="step8">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												08
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What is constructive dismissal?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">When an employer terminates an employee for gross misconduct</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">When an employee is forced to resign due to employer’s behaviour</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A layoff due to redundancy
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">A termination following performance reviews</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>

								<div class="tab-pane" role="tabpanel" id="step9">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												09
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">What does psychometric testing aim to assess during recruitment?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Candidate’s technical skills</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Candidate’s personality, cognitive abilities, and aptitude</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Candidate’s physical health
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Candidate’s background verification</label>
									</div>
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
										<li><button type="button" class="default-btn next-step">Next</button></li>
									</ul>
								</div>
								
								<div class="tab-pane" role="tabpanel" id="step10">
									<div class="step-content custom-step-item">
										<span class="step text-uppercase">
											<span class="step-number text-color-primary">
												10
											</span>
										</span>
										<div class="step-content">
											<h4 class="mb-3">Which HR strategy is most effective in fostering innovation?</h4>
										</div>
										
										<input type="radio" id="Yes" name="fav_language" value="Yes">
										<label for="Yes">Strict performance management</label>
										<br>

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Diversity and inclusion practices</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Micromanagement of teams
										</label>
										<br />

										<input type="radio" id="NO" name="fav_language" value="NO">
										<label for="NO">Lengthy hierarchical approval processes</label>
									</div>
									
									<ul class="list-inline pull-right">
										<li><button type="button" class="default-btn prev-step">Back</button></li>
										<li><button type="button" class="default-btn next-step">Finish</button></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div> 
					<div class="col-lg-3">
						<div class="circular-bar">
							<div class="circular-bar-chart" data-percent="75" data-plugin-options="{'barColor': '#ff6708'}">
								<strong>75%</strong>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-secondary custom-section-padding-2">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">- Our Services</h2>
					</div>
				</div>
			</div>
			<div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 
				custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'loop': true, 'dots': true, 'nav': true}">
				<div>
					<a href="#" class="text-decoration-none">
						<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
							<span class="thumb-info-wrapper m-0">
								<img src="{{ asset('') }}img/gen_img/event/HRCounsellingPhoto.jpg" style="height:229px" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Counselling</span>
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
								<img src="{{ asset('') }}img/gen_img/event/HRPodcast.jpg" style="height:229px" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Podcast </span>
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
								<img src="{{ asset('') }}img/gen_img/event/HR_Meet.jpg" style="height:229px" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Meet</span>
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
								<img src="{{ asset('') }}img/gen_img/event/hrlearning.png" style="height:229px" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Learning & Certification </span>
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
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Committee </span>
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
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Campus Connect </span>
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
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Awards</span>
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
								<img src="{{ asset('') }}img/gen_img/event/HRKnowledge.jpg" style="height:255px" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Knowledge</span>
									<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
								</span>
								<span class="custom-arrow"></span>
							</span>
						</span>
					</a>
				</div>
				
				<!-- <div>
					<a href="#" class="text-decoration-none">
						<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
							<span class="thumb-info-wrapper m-0">
								<img src="{{ asset('') }}img/gen_img/event/event-4.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Other Benefits</span>
									
								</span>
								<span class="custom-arrow"></span>
							</span>
						</span>
					</a>
				</div> -->
				
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
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-10.png">
							</div>
							<div>
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-11.png">
							</div>
							<div>
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-12.png">
							</div>
							<div>
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-13.png">
							</div>
							<div>
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-9.png">
							</div>
							<div>
								<img alt="" style="max-width: 90px;" class="img-fluid rounded" src="img/gen_img/logo-11.png">
							</div>
							
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark">- Our Corporate Partner</h2>
					</div>
				</div>
				<div class="row align-items-center text-center">
					<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
						<img src="img/gen_img/logo-8.png" alt="" class="img-fluid" style="max-width: 90px;">
					</div>
					<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
						<img src="img/gen_img/logo-9.png" alt="" class="img-fluid" style="max-width: 140px;">
					</div>
					<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
						<img src="img/gen_img/logo-10.png" alt="" class="img-fluid" style="max-width: 140px;">
					</div>
					<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
						<img src="img/gen_img/logo-11.png" alt="" class="img-fluid" style="max-width: 140px;">
					</div>
					<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
						<img src="img/gen_img/logo-12.png" alt="" class="img-fluid" style="max-width: 100px;">
					</div>
					<div class="col-sm-4 col-lg-2">
						<img src="img/gen_img/logo-13.png" alt="" class="img-fluid" style="max-width: 100px;">
					</div>
				</div> -->
			</div>
		</section>

		<!-- <section class="custom-section-padding">	
			<div class="container">
				<div class="row pt-1 pb-4 mb-3">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">- Events</h2>
					</div>
				</div>
					<div class="col">

						<ul class="nav nav-pills sort-source mb-4" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
							<li class="nav-item active" data-option-value="*" class=""><a class="nav-link active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Show All</a></li>
							<li class="nav-item" data-option-value=".economic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Economic</a></li>
							<li class="nav-item" data-option-value=".strategic"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Strategic</a></li>
							<li class="nav-item" data-option-value=".tech"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Tech</a></li>
						</ul>

						<div class="sort-destination-loader sort-destination-loader-showing">
							<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
								<div class="col-lg-4 isotope-item economic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-1.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item economic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-2.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>	
								</div>
								<div class="col-lg-4 isotope-item strategic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-3.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item tech">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-4.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item economic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-5.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item strategic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-6.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item economic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-2.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item tech">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-5.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 isotope-item economic">
									<a href="#" class="text-decoration-none">
										<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="img/gen_img/event/event-1.jpg" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-secondary p-3 pt-4 pb-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Event Name</span>
													<span class="custom-thumb-info-desc font-weight-light">10 Jan 2025</span>
												</span>
												<span class="custom-arrow"></span>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>	

		<section class="section-secondary custom-section-padding">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark">- Our Blog</h2>
					</div>
				</div>
				<div class="row">						
					<div class="col">
						<div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position 
						custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
							<div class="row">
								<div class="col-sm-8 col-lg-5">
									<div class="blog-post-image-wrapper">
										<img src="{{ asset('') }}img/gen_img/blog-img.jpg" alt="" class="img-fluid mb-4">
										 <span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
											20
											<span class="month-year font-weight-light">
												Oct-16
											</span>
										</span> 
									</div>
								</div>
								<div class="col-sm-12 col-lg-7">
									<h2> Blog Heading </h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat 
										ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi.</p>
									<hr class="solid">
									<div class="post-infos d-flex">
										<span class="info posted-by">
											Posted by:
											<span class="post-author font-weight-semibold text-color-dark">
												Full Name
											</span>
										</span>
										<span class="info comments ms-5">
											Comments:
											<span class="comments-number text-color-primary font-weight-semibold">
												15
											</span>
										</span>
										<span class="info like ms-5">
											Like:
											<span class="like-number font-weight-semibold custom-color-red">
												38
											</span>
										</span>
									</div>
									<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-4" href="#" title="Read More">Read More</a>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8 col-lg-5">
									<div class="blog-post-image-wrapper">
										<img src="{{ asset('') }}img/gen_img/blog-img-1.jpg" alt="" class="img-fluid mb-4">
										
									</div>
								</div>
								<div class="col-sm-12 col-lg-7">
									<h2> Blog Heading 2</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat 
										ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi.</p>
									<hr class="solid">
									<div class="post-infos d-flex">
										<span class="info posted-by">
											Posted by:
											<span class="post-author font-weight-semibold text-color-dark">
												Full Name
											</span>
										</span>
										<span class="info comments ms-5">
											Comments:
											<span class="comments-number text-color-primary font-weight-semibold">
												15
											</span>
										</span>
										<span class="info like ms-5">
											Like:
											<span class="like-number font-weight-semibold custom-color-red">
												38
											</span>
										</span>
									</div>
									<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-4" href="#" title="Read More">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="looking-for section-primary">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<div class="looking-for-box">
							<h2>- <span class="text-1 custom-secondary-font">Lorem Ipsum is simply dummy text</span><br>
							Lorem Ipsum </h2>
							<p class="mb-4 mb-md-0">Lorem Ipsum is simply dummy text</p>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
						<a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
							<span class="custom-call-to-action white-border text-color-light">
								<span class="action-title">Call Us Now</span>
								<span class="action-info">+001 1230 4567</span>
							</span>
						</a>
					</div>
					<div class="col-md-3 col-lg-2">
						<a class="text-decoration-none" href="mail:mail@example.com" target="_blank" title="Email Us Now">
							<span class="custom-call-to-action white-border text-color-light">
								<span class="action-title">Email Us Now</span>
								<span class="action-info">mail@example.com</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		
		<section class="custom-section-padding">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark">- Certificate </h2>
					</div>
				</div>
				<div class="row">
					<article class="blog-post col">
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="blog-post-image-wrapper">
									<img src="{{ asset('') }}img/gen_img/Certificate-img.jpg" style="width: 338px;height: 292px;" alt class="img-fluid mb-4" />
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="blog-post-image-wrapper">
									<img src="{{ asset('') }}img/gen_img/Certificate-img-1.jpg" style="width: 338px;height: 292px;" alt class="img-fluid mb-4" />
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="blog-post-image-wrapper">
									<img src="{{ asset('') }}img/gen_img/blog-img.jpg" style="width: 338px;height: 292px;" alt class="img-fluid mb-4" />
								</div>
							</div>
							
						</div>
					</article>
				</div>
			</div>
		</section>

		<section class="section-secondary custom-section-padding">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark">- Our Team</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'margin': 20, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
							<div>
								<div class="team-item p-0">
									<a href="#" class="text-decoration-none">
										<span class="image-wrapper">
											<img src="{{ asset('') }}img/gen_img/team-1.jpg" 
											style="width:266px; height:266px;" alt="" class="img-fluid" />
										</span>
									</a>
									<div class="team-infos">
										<div class="share">
											<i class="fas fa-share-alt"></i>
											<div class="share-icons bg-color-light">
												<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</div>
										</div>
										<a href="#" class="text-decoration-none">
											<span class="team-member-name text-color-dark font-weight-semibold text-4">Full Name</span>
											<span class="team-member-desc font-weight-light">Designation</span>
										</a>
									</div>
								</div>
							</div>
							<div>
								<div class="team-item p-0">
									<a href="#" class="text-decoration-none">
										<span class="image-wrapper">
											<img src="{{ asset('') }}img/gen_img/team-5.jpg" style="width:266px; height:266px;" alt="" class="img-fluid" />
										</span>
									</a>
									<div class="team-infos">
										<div class="share">
											<i class="fas fa-share-alt"></i>
											<div class="share-icons bg-color-light">
												<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</div>
										</div>
										<a href="#" class="text-decoration-none">
											<span class="team-member-name text-color-dark font-weight-semibold text-4">Full Name</span>
											<span class="team-member-desc font-weight-light">Designation</span>
										</a>
									</div>
								</div>
							</div>
							<div>
								<div class="team-item p-0">
									<a href="#" class="text-decoration-none">
										<span class="image-wrapper">
											<img src="{{ asset('') }}img/gen_img/team-3.jpg" alt="" class="img-fluid" />
										</span>
									</a>
									<div class="team-infos">
										<div class="share">
											<i class="fas fa-share-alt"></i>
											<div class="share-icons bg-color-light">
												<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</div>
										</div>
										<a href="#" class="text-decoration-none">
											<span class="team-member-name text-color-dark font-weight-semibold text-4">Full Name</span>
											<span class="team-member-desc font-weight-light">Designation</span>
										</a>
									</div>
								</div>
							</div>
							<div>
								<div class="team-item p-0">
									<a href="#" class="text-decoration-none">
										<span class="image-wrapper">
											<img src="{{ asset('') }}img/gen_img/team-4.jpg" alt="" class="img-fluid" />
										</span>
									</a>
									<div class="team-infos">
										<div class="share">
											<i class="fas fa-share-alt"></i>
											<div class="share-icons bg-color-light">
												<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</div>
										</div>
										<a href="#" class="text-decoration-none">
											<span class="team-member-name text-color-dark font-weight-semibold text-4">Full Name</span>
											<span class="team-member-desc font-weight-light">Designation</span>
										</a>
									</div>
								</div>
							</div>
							<div>
								<div class="team-item p-0">
									<a href="#" class="text-decoration-none">
										<span class="image-wrapper">
											<img src="{{ asset('') }}img/gen_img/team-5.jpg" alt="" class="img-fluid" />
										</span>
									</a>
									<div class="team-infos">
										<div class="share">
											<i class="fas fa-share-alt"></i>
											<div class="share-icons bg-color-light">
												<a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
												<a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</div>
										</div>
										<a href="#" class="text-decoration-none">
											<span class="team-member-name text-color-dark font-weight-semibold text-4">Full Name</span>
											<span class="team-member-desc font-weight-light">Designation</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center mt-5">
					<div class="col">
						<a class="btn btn-outline custom-border-width btn-primary custom-border-radius 
						font-weight-semibold text-uppercase" href="#">View All</a>
					</div>
				</div> 
			</div>
		</section>
			 -->

		
	</div> 
@endsection
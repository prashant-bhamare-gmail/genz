@extends('master')
@section('content')
		<div role="main" class="main">
		<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside 
		dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1 
		nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
			<div class="owl-stage-outer">
				<div class="owl-stage">

					<!-- Carousel Slide 1 -->
					<div class="owl-item position-relative pt-5" style="background-image: url(img/gen_img/banner_image.jpg); background-size: cover; background-position: center;">
						<div class="container position-relative z-index-3 pb-5 h-100">
							<div class="row align-items-center pb-5 h-100">
								<div class="col">
									<h2 class="custom-secondary-font text-color-light font-weight-extra-bold text-8 line-height-1 line-height-sm-3 mb-5 appear-animation" 
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" 
										data-plugin-options="{'minWindowWidth': 0}">
										<span class="custom-secondary-font text-5-6">
											Empowering Workplaces, Enabling Success
										</span>
										<br>
										Your go-to hub for Gen Z insights, ideation, and HR transformation	
									</h2>
									<a href="#" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Join the Movement
									</a>
									<a href="#" 
										class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation" 
										data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Explore Services
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Carousel Slide 2 -->
					<div class="owl-item position-relative pt-5" style="background-image: url(img/gen_img//slide-2.jpg); background-size: cover; background-position: center;">
						<div class="container position-relative z-index-3 pb-5 h-100">
							<div class="row align-items-center pb-5 h-100">
								<div class="col">
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
							<h2>- <span class="text-1 custom-secondary-font">Are you looking for free consultation</span><br>
							</h2>
							<p>Would you like to be part of HR growth or attend consulting sessions?</p>
							<a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 
									py-3 btn-px-4 appear-animation" data-appear-animation="fadeInUpShorter" 
									data-appear-animation-delay="800">Book Now</a>
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
						<a class="text-decoration-none" href="mail:mail@example.com" target="_blank" title="Email Us Now">
							<span class="custom-call-to-action">
								<span class="action-title text-color-primary">Email Us Now</span>
								<span class="action-info text-color-light">mail@example.com</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class=" custom-section-padding">
			<div class="container">
				<div class="row mb-4">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark mb-3">-	Key Features</h2>
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
									<h4 class="font-weight-normal text-5">Skill-building for a modern workforce</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
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
									<h4 class="font-weight-normal text-5">Innovative HR solutions</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
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
									<h4 class="font-weight-normal text-5">Empowering the next generation</h4>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
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

		<section class=" section-secondary about-us custom-section-padding" id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<h2 class="font-weight-bold text-color-dark">- About Us</h2>
						<p class="ps-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>
						<div class="ps-4">
							<div class="row">
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-3 list-tertiary">
										<li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
										<li><i class="fas fa-chevron-right"></i> Former Chief Executives</li>
										<li><i class="fas fa-chevron-right"></i> Real Estate Professionals</li>
									</ul>	
								</div>
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-3 list-tertiary">
										<li><i class="fas fa-chevron-right"></i> Nobel Laureate Economists</li>
										<li><i class="fas fa-chevron-right"></i> Former Political Leaders</li>
										<li><i class="fas fa-chevron-right"></i> Chartered Financial Analysts</li>
									</ul>
								</div>
							</div>
							<a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius 
							font-weight-semibold text-uppercase" href="#">Read More</a>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 position-relative">
						<div class="content-grid custom-content-grid mt-5 mb-4">
							<div class="row content-grid-row">
								<div class="content-grid-item col-lg-6 bg-color-light p-4">
									<div class="counters">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon" src="{{ asset('') }}img/demos/business-consulting/icons/icon-1.png" alt />
											<strong class="text-color-primary custom-primary-font" data-to="15" data-append="+">0</strong>
											<label>Years in Business</label>
										</div>
									</div>	
								</div>
								<div class="content-grid-item col-lg-6 p-4">
									<div class="counters">
										<div class="counter margin-style-2 custom-sm-counter-style">
											<img class="counter-icon" src="{{ asset('') }}img/demos/business-consulting/icons/icon-2.png" alt />
											<strong class="text-color-primary custom-primary-font" data-to="2000" data-append="+">0</strong>
											<label>Successfull Cases</label>
										</div>
									</div>	
								</div>
							</div>
							<div class="row content-grid-row">
								<div class="content-grid-item col-lg-6 p-4">
									<div class="counters">
										<div class="counter custom-sm-counter-style">
											<img class="counter-icon" src="{{ asset('') }}img/demos/business-consulting/icons/icon-3.png" alt />
											<strong class="text-color-primary custom-primary-font" data-to="240" data-append="+">0</strong>
											<label>Satisfied Clients</label>
										</div>
									</div>	
								</div>
								<div class="content-grid-item col-lg-6 bg-color-light p-4">
									<div class="counters">
										<div class="counter margin-style-2 custom-sm-counter-style">
											<img class="counter-icon" src="{{ asset('') }}img/demos/business-consulting/icons/icon-4.png" alt />
											<strong class="text-color-primary custom-primary-font" data-to="130" data-append="+">0</strong>
											<label>Pro Consultants</label>
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
					<div class="col-lg-6">
						<h2 class="font-weight-bold text-color-dark">- Quizzes</h2>
						<div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots ps-1 pe-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
							<div>
								<div class="custom-step-item">
									<span class="step text-uppercase">
										
										<span class="step-number text-color-primary">
											01
										</span>
									</span>
									<div class="step-content">
										<h4 class="mb-3">The first meeting<br> <strong>Understanding the Problem</strong></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
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
										<h4 class="mb-3">The second meeting<br> <strong>Business Plan Consultant</strong></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
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
										<h4 class="mb-3">The final meeting<br> <strong>Problem Solved</strong></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="font-weight-bold text-color-dark">- Our Services</h2>
						<div class="accordion without-bg custom-accordion-style-1" id="accordion7">
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7One" aria-expanded="true">
										HR Podcast 
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7One" class="collapse show" aria-expanded="true">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
										HR Meet - Committee-Membership
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
										HR Learning Session Certification 
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
										Campus - HR Connect 
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7Five" aria-expanded="false">
										HR Counselling
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7Five" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7six" aria-expanded="false">
										HR Newsletter and "Paid" HR Magazine
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7six" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7seven" aria-expanded="false">
										Awards
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7seven" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-header">
									<h4 class="card-title m-0">
										<a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion7" href="#collapse7eight" aria-expanded="false">
										Other Benefits
											<span class="custom-accordion-plus"></span>
										</a>
									</h4>
								</div>
								<div id="collapse7eight" class="collapse" aria-expanded="false" style="height: 0px;">
									<div class="card-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
									</div>
								</div>
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
			<div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'loop': false, 'dots': true, 'nav': false}">
				<div>
					<a href="#" class="text-decoration-none">
						<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
							<span class="thumb-info-wrapper m-0">
								<img src="{{ asset('') }}img/gen_img/event/event-1.jpg" class="img-fluid" alt="">
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
								<img src="{{ asset('') }}img/gen_img/event/event-2.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Meet - Committee-Membership</span>
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
								<img src="{{ asset('') }}img/gen_img/event/event-3.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Learning Session Certification </span>
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
								<img src="{{ asset('') }}img/gen_img/event/event-4.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Campus - HR Connect </span>
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
								<img src="{{ asset('') }}img/gen_img/event/event-5.jpg" class="img-fluid" alt="">
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
								<img src="{{ asset('') }}img/gen_img/event/event-6.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">HR Newsletter and "Paid" HR Magazine</span>
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
								<img src="{{ asset('') }}img/gen_img/event/event-2.jpg" class="img-fluid" alt="">
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
								<img src="{{ asset('') }}img/gen_img/event/event-4.jpg" class="img-fluid" alt="">
							</span>
							<span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
								<span class="custom-thumb-info-title">
									<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Other Benefits</span>
									<!-- <span class="custom-thumb-info-desc font-weight-light">Event Date</span> -->
								</span>
								<span class="custom-arrow"></span>
							</span>
						</span>
					</a>
				</div>
				
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


		<section class="section border-0 bg-light m-0">
			<div class="container py-5">
				<div class="row">
					<div class="col">
						<h2 class="font-weight-bold text-color-dark">- Heading</h2>
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
				</div>
			</div>
		</section> -->

		

	</div> 
@endsection
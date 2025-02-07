@extends('master')
@section('content')

<div role="main" class="main">

	<section class=" page-header-modern custom-page-header bg-color-quaternary">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
						data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Event</h1>
				</div>
				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-end appear-animation"
						data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
						<li><a href="/">Home</a></li>
						<li class="active">Event</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-tertiary section-no-border m-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<h2 class="text-color-dark font-weight-bold">Next Event</h2>
					<article class="thumb-info custom-thumb-info custom-box-shadow">
						<span class="thumb-info-wrapper">
							<a href="demo-church-events-detail.html">
								<img src="img/demos/church/event/event-1.jpg" alt class="img-fluid" />
							</a>
						</span>
						<span class="thumb-info-caption">
							<!-- <span class="custom-thumb-info-wrapper-box text-center justify-content-center d-flex mb-4">
								<div class="countdown custom-newcomers-class custom-secondary-font 
								custom-box-shadow font-weight-bold text-color-dark clock-one-events"
									data-plugin-countdown
									data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 
									'SEC', 'date': '2025/01/01 12:00:00', 'numberClass': 'font-weight-bold text-color-primary', 
									'wrapperClass': 'text-color-dark', 'textDay': 'DAYS', 'textHour': 'Hrs', 'textMin': 'Min', 
									'textSec': 'Sec', 'uppercase': false}">
								</div>
							</span> -->
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										5:00 PM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-calendar"></i>
										8 February 2025
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<span class="thumb-info-caption-text">
								<h4 class="font-weight-bold mb-2">
									<a href="demo-church-events-detail.html"
										class="text-decoration-none custom-secondary-font text-color-dark">
										Event Title
									</a>
								</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu
									bibendum condimentum. In a porta nunc ...</p>
								<div class="d-flex justify-content-end">
									<a href="#" class="btn btn-primary font-weight-bold" data-bs-toggle="modal"
									data-bs-target="#bookevent">
										Book Now
									</a>
								</div>
							</span>
						</span>
					</article>
				</div>
				<div class="col-lg-6">
					<h2 class="text-color-dark font-weight-bold">Upcoming Event</h2>
					<article class="custom-post-event">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">March</span>
							<span class="day font-weight-bold text-color-light">1</span>
							<span class="year text-color-light">2025</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										5:00 PM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">Event Title</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo nisl a fermentum
								varius. Aenean interdum lectus at tortor ullamcorper, eu maximus...</p>
							<div class="d-flex justify-content-end">
								<a href="#" class="btn btn-primary font-weight-bold" data-bs-toggle="modal"
									data-bs-target="#bookevent">
									Book Now
								</a>
							</div>
						</div>
					</article>


					<div class="modal fade" id="bookevent" tabindex="-1" role="dialog"
						aria-labelledby="defaultModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="defaultModalLabel">Event Booking</h4>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
									<div class="tab-pane tab-pane-navigation active" id="formsStyleDefault">
										<div class="mb-4">
											<div class="card-body" style="padding: 0;">
												<div class="row">
													<div class="col">
														<form class="contact-form" action=""
															method="POST">
															<!-- <div class="contact-form-success alert alert-success d-none mt-4">
																<strong>Success!</strong> Your message has been sent to
																us.
															</div>

															<div class="contact-form-error alert alert-danger d-none mt-4">
																<strong>Error!</strong> There was an error sending your
																message.
																<span class="mail-error-message text-1 d-block"></span>
															</div> -->

															<div class="row">
																<div class="form-group col-lg-12">
																	<label class="form-label mb-1 text-2">Full Name</label>
																	<input type="text" value=""
																		data-msg-required="Please enter your name."
																		maxlength="100"
																		class="form-control text-3 h-auto py-2"
																		name="name" required>
																</div>
																<div class="form-group col-lg-12">
																	<label class="form-label mb-1 text-2">Email Address</label>
																	<input type="email" value=""
																		data-msg-required="Please enter your email address."
																		data-msg-email="Please enter a valid email address."
																		maxlength="100"
																		class="form-control text-3 h-auto py-2"
																		name="email" required>
																</div>
																<div class="form-group col-lg-12">
																	<label class="form-label mb-1 text-2">Comapny Name</label>
																	<input type="text" value=""
																		data-msg-required="Please enter your comapny name."
																		data-msg-company="Please enter a valid comapny name"
																		maxlength="100"
																		class="form-control text-3 h-auto py-2"
																		name="email" required>
																</div>
																<div class="form-group col-lg-12">
																	<label class="form-label mb-1 text-2">Current Designation</label>
																	<input type="text" value=""
																		data-msg-required="Please enter your Current Designation"
																		data-msg-designation="Please enter a valid Current Designation"
																		maxlength="100"
																		class="form-control text-3 h-auto py-2"
																		name="email" required>
																</div>
															</div>
															<!-- <div class="row">
																<div class="form-group col">
																	<label class="form-label">City</label>
																	<div class="custom-select-1">
																		<select
																			class="form-select form-control h-auto py-2"
																			data-msg-required="Please select a city."
																			name="city" required>
																			<option value="">Choose...</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																		</select>
																	</div>
																</div>
															</div> -->
															<div class="row">
																<div class="form-group col">
																	<label
																		class="form-label mb-1 text-2">Contact Number</label>
																	<input type="number" value=""
																		data-msg-required="Please enter your contact number ."
																		maxlength="100"
																		class="form-control text-3 h-auto py-2"
																		name="subject" required>
																</div>
															</div>
															<div class="row">
																<div class="form-group col">
																	<label class="form-check-label"
																		for="tabContent9Checkbox">
																		I am interested in the event.
																	</label>
																	<div class="form-check form-check-inline">
																		<label class="form-check-label">
																			<input class="form-check-input" type="radio"
																				name="radios"
																				data-msg-required="Please select at least one option."
																				id="tabContent9Radio1" value="option1"
																				required> Yes
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="form-check-label">
																			<input class="form-check-input" type="radio"
																				name="radios"
																				data-msg-required="Please select at least one option."
																				id="tabContent9Radio2" value="option2"
																				required> No
																		</label>
																	</div>
																	
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
									<div class="row">
										<div class="form-group col">
											<input type="submit" value="Submit"
												class="btn btn-primary"
												data-loading-text="Loading...">
										</div>
									</div>
									<!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> -->
								</div>
							</div>
						</div>
					</div>

					<hr class="solid">

					<article class="custom-post-event">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">March</span>
							<span class="day font-weight-bold text-color-light">11</span>
							<span class="year text-color-light">2025</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										5:00 PM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">Event Title</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero
								tincidunt commodo. Proin eget venenatis mauris.</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-no-border bg-color-light m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-color-dark mb-3">Past Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">Oct</span>
							<span class="day font-weight-bold text-color-light">05</span>
							<span class="year text-color-light">2024</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										5:00 PM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold text-color-dark">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">
									Event Title
								</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at
								tempor ut, egestas...</p>
						</div>
						<hr class="solid">
					</article>
				</div>
				<div class="col-lg-6">
					<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
							<span class="day font-weight-bold text-color-light">30</span>
							<span class="year text-color-light">2024</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										2:00 PM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold text-color-dark">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">
									Event Title
								</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at
								tempor ut, egestas...</p>
						</div>
						<hr class="solid">
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<article class="custom-post-event bg-color-light custom-sm-margin-bottom-2">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
							<span class="day font-weight-bold text-color-light">25</span>
							<span class="year text-color-light">2024</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										8:00 AM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold text-color-dark">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">
									Event Title
								</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at
								tempor ut, egestas...</p>
						</div>
						<hr class="solid d-lg-none">
					</article>
				</div>
				<div class="col-lg-6">
					<article class="custom-post-event bg-color-light">
						<div class="post-event-date bg-color-primary text-center">
							<span class="month text-uppercase custom-secondary-font text-color-light">Set</span>
							<span class="day font-weight-bold text-color-light">17</span>
							<span class="year text-color-light">2024</span>
						</div>
						<div class="post-event-content custom-margin-1">
							<span class="custom-event-infos">
								<ul>
									<li>
										<i class="far fa-clock"></i>
										11:00 AM
									</li>
									<li class="text-uppercase">
										<i class="fas fa-map-marker-alt"></i>
										Pune
									</li>
								</ul>
							</span>
							<h4 class="font-weight-bold text-color-dark">
								<a href="demo-church-events-detail.html"
									class="text-decoration-none custom-secondary-font text-color-dark">
									Event Title
								</a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex odio, venenatis at
								tempor ut, egestas...</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>



</div>

@endsection
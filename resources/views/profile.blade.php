@extends('master')
@section('content')

<div role="main" class="main">

	<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
						data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">User Profile</h1>
				</div>
				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-end appear-animation"
						data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
						<li><a href="#">Home</a></li>
						<li class="active">User Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<button type="submit" class="btn btn-danger">Logout</button>
	</form>
	<div class="container pt-3 pb-2">

		<div class="row pt-2">
			<div class="col-lg-3 mt-4 mt-lg-0">

				<!-- Upload  -->
				<form id="file-upload-form" class="d-flex justify-content-center mb-4 uploader">
					<input id="file-upload" type="file" name="fileUpload" accept="image/*" />

					<label for="file-upload" id="file-drag">
						<img id="file-image" src="#" alt="Preview" class="hidden">
						<div id="start">
							<i class="fa fa-download" aria-hidden="true"></i>
							<div> upload Your Photo</div>
							<div id="notimage" class="hidden">Please select an image</div>
						</div>
						<div id="response" class="hidden">
							<div id="messages"></div>
						</div>
					</label>
				</form>

				<aside class="sidebar mt-2" id="sidebar">
					<div class="tabs tabs-vertical tabs-right tabs-navigation tabs-simple">
						<ul class="nav nav-tabs col-sm-3">
							<li class="nav-item">
								<a class="nav-link active" href="#tabsNavigationVertSimple1" data-bs-toggle="tab">My
									Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple2" data-bs-toggle="tab">Download</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple3"
									data-bs-toggle="tab">Membership</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple4" data-bs-toggle="tab">Social
									Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple5"
									data-bs-toggle="tab">Notification</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple6" data-bs-toggle="tab">Blog</a>
							</li>
						</ul>
					</div>

					<!-- <ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link text-3 text-dark active" href="#">My Profile</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">User Preferences</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">Billing</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">Invoices</a></li>
								</ul> -->
				</aside>
			</div>
			<div class="col-lg-9">

				<div class="tab-pane tab-pane-navigation active" id="tabsNavigationVertSimple1">
					<form role="form" class="needs-validation">
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Name</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="name"
									value="{{ Auth::user()->name }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Email</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="email" name="email"
									value="{{ Auth::user()->email }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Current
								Role</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="company" value="">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Comapny Name</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="description" value="">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Phone</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="url" name="website" value="">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Address</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="address" value=""
									placeholder="Street">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
							<div class="col-lg-6">
								<input class="form-control text-3 h-auto py-2" type="text" name="city" value=""
									placeholder="City">
							</div>
							<div class="col-lg-3">
								<input class="form-control text-3 h-auto py-2" type="text" name="state" value=""
									placeholder="State">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Username</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="username" value=""
									required>
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Password</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="password" name="password" value=""
									required>
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Confirm
								password</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="password" name="confirmPassword"
									value="" required>
							</div>
						</div>
						<div class="form-group row">
							<div class="form-group col-lg-9">

							</div>
							<div class="form-group col-lg-3">
								<input type="submit" value="Save" class="btn btn-primary btn-modern float-end"
									data-loading-text="Loading...">


							</div>

						</div>
					</form>
				</div>

				<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">
					<section class="call-to-action with-borders mb-5 appear-animation" data-appear-animation="fadeIn">
						<div class="col-sm-9 col-lg-9">
							<div class="call-to-action-content">
								<h5>Human Resource Management Certification (IIM Calcutta)</h5>
							</div>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="#" target="_blank" class="btn btn-modern dwn_btn text-2 btn-primary">
									<i class="fa fa-download" aria-hidden="true"></i>
								</a>

							</div>
						</div>
					</section>
				</div>
				<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
					<section class="call-to-action featured featured-primary mb-5">
						<div class="col-sm-12 col-lg-12">
							<div class="call-to-action-content">
							
								<h3>You do not have an active membership. 
									<a href="#" data-bs-toggle="modal" data-bs-target="#pricing"> 
										<strong class="font-weight-extra-bold"> Choose a membership level.</strong> 
									</a>
								</h3>
								
							</div>
						</div>
						<!-- <div class="col-sm-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="#"  class="btn btn-modern text-2 btn-primary">Buy Now</a>
							</div>
						</div> -->
					</section>

					
					<div class="col-lg-12">
						<div class="card border-width-3 border-radius-0 border-color-success">
							<div class="card-body text-center">
								<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success me-1"></i> Thank You. Your Order has been received.</p>
							</div>
						</div>
						<div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
							<div class="text-center">
								<span>
									Start Date <br>
									<strong class="text-color-dark">January 25, 2025</strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									End Date <br>
									<strong class="text-color-dark">January 25, 2026</strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									Email <br>
									<strong class="text-color-dark">abc@abc.com</strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									Total <br>
									<strong class="text-color-dark">$30</strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									Your Plan <br>
									<strong class="text-color-dark">1 Year</strong>
								</span>
							</div>
								<!-- <div class="text-center mt-4 mt-md-0">
									<div class="form-group row pb-4">
										<select class="form-control mb-3">
											<option>Select Plan </option>
											<option>1 Year</option>
											<option>06 Months</option>
										</select>
									</div>
								</div> -->
							</div>
						</div>
						
				</div>

				<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">

					<div class="alert alert-info">
						<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
					</div>
					<div class="alert alert-info">
						<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
					</div>
					<div class="alert alert-info">
						<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
					</div>
					<div class="alert alert-info">
						<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
					</div>
				</div>
				
			</div>
		</div>

	</div>
</div>

<!-- Pricing Model Box -->
<div class="modal fade" id="pricing" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="font-weight-bold text-5 mb-0">Pricing Table</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb-4">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 mb-5 mb-lg-0">
							<div class="pricing-table row g-0 mb-4">
								<div class="col-md-6">
									<div class="plan">
										<div class="plan-header">
											<h3>Basic</h3>
										</div>
										<div class="plan-price">
											<span class="price"><span class="price-unit">&#8377;</span>1500</span>
											<label class="price-label">Monthly</label>
										</div>
										<div class="plan-features">
											<ul>
												<li>1GB Disk Space</li>
												<li>10GB Monthly Bandwith</li>
												<li>2 Email Accounts</li>
												<li>Unlimited Subdomains</li>
											</ul>
										</div>
										<div class="plan-footer">
											<a href="#" class="btn btn-dark btn-modern btn-outline py-2 px-4">Book Now</a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="plan">
										<div class="plan-header">
											<h3>Standard</h3>
										</div>
										<div class="plan-price">
											<span class="price"><span class="price-unit">&#8377;</span>2000</span>
											<label class="price-label">Yearly</label>
										</div>
										<div class="plan-features">
											<ul>
												<li>3GB Disk Space</li>
												<li>25GB Monthly Bandwith</li>
												<li>5 Email Accounts</li>
												<li>Unlimited Subdomains</li>
											</ul>
										</div>
										<div class="plan-footer">
											<a href="#" class="btn btn-dark btn-modern btn-outline py-2 px-4">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Model Box -->

@endsection
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
							<li class="nav-item">
								<a class="nav-link" href="#tabsNavigationVertSimple3"
									data-bs-toggle="tab">Membership</a>
							</li>
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
							<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Cureent
								Role</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="company" value="">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Description</label>
							<div class="col-lg-9">
								<input class="form-control text-3 h-auto py-2" type="text" name="description" value="">
							</div>
						</div>
						<div class="form-group row">
							<label
								class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Website</label>
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
				<!-- <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
								<h4>500+ Google Fonts</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
								<img class="float-start" width="200" src="img/device.png" alt="">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							</div>
							<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple4">
								<h4>Colors</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							</div>
							<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">
								<h4>Sliders</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							</div> -->
			</div>
		</div>

	</div>
</div>

@endsection
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
		@if(session('success-pdf-upload'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success-pdf-upload') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif
		<!-- <form action="{{ route('logout') }}" method="POST">
										@csrf
										<button type="submit" class="btn btn-danger">Logout</button>
									</form> -->
		<div class="container pt-3 pb-2">

			<div class="row pt-2">
				<div class="col-lg-3 mt-4 mt-lg-0">

					<!-- Upload  -->
					<form id="file-upload-form" class="d-flex justify-content-center mb-4 uploader"
						style="border: 1px solid #ccc;">
						@if(Auth::check() && Auth::user()->profile_photo)
							<img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" width="100">
						@endif

					</form>

					<aside class="sidebar mt-2" id="sidebar">
						<div class="tabs tabs-vertical tabs-right tabs-navigation tabs-simple">
							<ul class="nav nav-tabs col-sm-3">
								<li class="nav-item">
									<a class="nav-link active" href="#tabsNavigationVertSimple1" data-bs-toggle="tab">My
										Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabsNavigationVertSimple2" data-bs-toggle="tab">My
										Contribution</a>
								</li>
								<!-- <li class="nav-item">
																																																																		<a class="nav-link" href="#tabsNavigationVertSimple3"
																																																																			data-bs-toggle="tab">Membership</a>
																																																																	</li> -->
								<li class="nav-item">
									<a class="nav-link" href="#tabsNavigationVertSimple3" data-bs-toggle="tab">Knowledge
										Search</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabsNavigationVertSimple4" data-bs-toggle="tab">Social
										Media</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabsNavigationVertSimple5" data-bs-toggle="tab"> My Event</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#tabsNavigationVertSimple6"
										data-bs-toggle="tab">Notification</a>
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
						@if(session('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}

							</div>
						@endif
						<form role="form" class="needs-validation" action="{{ route('profile.update') }}" method="POST"
							enctype="multipart/form-data">
							@csrf



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
									<input class="form-control text-3 h-auto py-2" type="text" name="current_role"
										value="{{ Auth::user()->current_role }}">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Company
									Name</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="company_name"
										value="{{ Auth::user()->company_name }}">
								</div>
							</div>

							<div class="form-group row">
								<label
									class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Phone</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="phone"
										value="{{ Auth::user()->phone }}">
								</div>
							</div>

							<div class="form-group row">
								<label
									class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Address</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="address"
										value="{{ Auth::user()->address }}" placeholder="Street">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
								<div class="col-lg-6">
									<input class="form-control text-3 h-auto py-2" type="text" name="city"
										value="{{ Auth::user()->city }}" placeholder="City">
								</div>
								<div class="col-lg-3">
									<input class="form-control text-3 h-auto py-2" type="text" name="state"
										value="{{ Auth::user()->state }}" placeholder="State">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Profile
									Photo</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="file" name="profile_photo"
										accept="image/*">
									<!-- @if(Auth::user()->profile_photo)
																	<img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo"
																		width="100">
																@endif -->
								</div>
							</div>

							<div class="form-group row">
								<div class="form-group col-lg-9"></div>
								<div class="form-group col-lg-3">
									<input type="submit" value="Save" class="btn btn-primary btn-modern float-end"
										data-loading-text="Loading...">
								</div>
							</div>

						</form>

					</div>

					<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">
						<h2>My Contribution</h2>

						@if ($userPDFs->isEmpty())
							<div class="alert alert-info text-center">
								No documents uploaded yet.
							</div>
						@else
							<div class="container mt-4">
								<div class="row">
									@foreach ($userPDFs as $pdf)
										<div class="col-md-12 col-lg-12">
											<div class="card shadow-sm border-0 mb-4">
												<div class="card-body" style="display: flex;">
													<div class="docu_name" style="width: 78%;">
														<h5 class="card-title">
															<a href="{{ asset('storage/' . $pdf->path) }}" target="_blank"
																class="text-decoration-none">📄 {{ $pdf->filename }}
															</a>
														</h5>
														<span class="approved_clr">
															{{ $pdf->is_approved ? '✔ Approved' : '⏳ Pending Approval' }}
														</span>
														<span class="reject_clr">
															✔ Reject
														</span>
													</div>
													<div class="count_sect">
														<div class="">
															<span>👁 Views: <span
																	id="views-{{ $pdf->id }}">{{ $pdf->views }}</span></span>
															<span>👍 Likes:
																<span id="likes-{{ $pdf->id }}">{{ $pdf->likes->count() }}</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						@endif



						<!-- My Contribution -->
						<form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<label for="formFile" class="form-label">Upload PDF or Text File</label>
							<section class="call-to-action with-borders mb-2 appear-animation"
								data-appear-animation="fadeIn">
								<div class="col-sm-12 col-lg-12">
									<div class="call-to-action-content">
										<input name="pdf" class="form-control" type="file" id="formFile"
											accept=".pdf,.doc,.docx,.txt">
									</div>
								</div>

							</section>
							<div class="form-group mt-3 d-flex gap-2">
								<button type="submit" class="btn btn-primary mr-2">Send</button>
							</div>
						</form>
						<p class="text-center">Or</p>
						<label for="editor" class="form-label">Enter Text</label>
						<form id="documentForm">
							<textarea id="textContent" name="content" rows="5"
								style="width: 100%; border-radius: 5px; border: 1px solid #DFDFDF;"></textarea>
							<button type="button" id="saveDocument" class="btn btn-primary mt-2">Upload</button>
						</form>

						<script>
							document.getElementById('saveDocument').addEventListener('click', function () {
								let button = this;
								let content = document.getElementById('textContent').value;

								if (!content.trim()) {
									alert("Please enter some text.");
									return;
								}

								// Disable button and show waiting message
								button.disabled = true;
								button.textContent = "Please wait...";

								fetch("{{ route('upload.text.document') }}", {
									method: "POST",
									headers: {
										"Content-Type": "application/json",
										"X-CSRF-TOKEN": "{{ csrf_token() }}"
									},
									body: JSON.stringify({ content: content })
								})
									.then(response => response.json())
									.then(data => {
										if (data.message) {
											alert("Document uploaded successfully! Awaiting approval.");
											document.getElementById('textContent').value = "";
										} else {
											alert("Error: " + data.error);
										}
									})
									.catch(error => {
										console.error("Error:", error);
										alert("An error occurred while uploading the document.");
									})
									.finally(() => {
										// Re-enable button and reset text
										button.disabled = false;
										button.textContent = "Upload";
									});
							});
						</script>



					</div>

					<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
						<!-- Knowledge Search-->
						<section class="call-to-action with-borders mb-5 appear-animation" data-appear-animation="fadeIn">
							<form class="form-group my-2 my-lg-0 w-100">
								<div class="input-group">
									<input class="form-control" type="search" id="searchInput"
										placeholder="Search documents..." aria-label="Search" style="width: 100%;">
									<!-- <div class="input-group-append">
														<button class="btn btn-primary mt-2" type="button">Search</button>
													</div> -->
								</div>
							</form>
						</section>

						@if ($approvedPDFs->isEmpty())
							<p>No Documents available.</p>
						@else
							<div class="container mt-4">
								<div class="row" id="pdfList">
									@foreach ($approvedPDFs as $pdf)
										<div class=" pdf-item" data-filename="{{ strtolower($pdf->filename) }}">
											<div class="card shadow-sm border-0 mb-4">
												<div class="card-body">
													<div class="search_document_sec d-flex justify-content-between">
														<h5 class="card-title">
															<a href="{{ route('document.open', $pdf->id) }}" target="_blank"
																class="pdf-link text-decoration-none">
																📄 {{ $pdf->filename }}
															</a>
															<br />
															<span class="card-text text-muted">Uploaded by:
																<strong>{{ $pdf->user->name }}</strong>
															</span>
														</h5>

														<div class="d-flex justify-content-between">
															<span>👁 Views: <span
																	id="views-{{ $pdf->id }}">{{ $pdf->views }}</span></span>
															<!-- <span>👍 Likes: <span
																																		id="likes-{{ $pdf->id }}">{{ $pdf->likes->count() }}</span></span> -->
														</div>

														<!-- Like Button Added -->
														@auth
															<div class="text-center">
																<button
																	class="btn like-button 																																																								@if($pdf->likes->where('user_id', Auth::id())->count()) btn-success 																																																								@else btn-outline-primary @endif"
																	data-pdf-id="{{ $pdf->id }}" @if($pdf->likes->where('user_id', Auth::id())->count()) disabled @endif>
																	👍 Like {{ $pdf->likes->count() }}
																</button>
																<span class="text-success d-block mt-2"
																	id="like-message-{{ $pdf->id }}"></span>
															</div>
														@endauth

													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>

							<!-- JavaScript -->
							<script defer>
								// Live Search Functionality
								document.getElementById('searchInput').addEventListener('input', function () {
									let searchValue = this.value.toLowerCase();
									let pdfItems = document.querySelectorAll('.pdf-item');

									pdfItems.forEach(item => {
										let filename = item.getAttribute('data-filename');
										if (filename.includes(searchValue)) {
											item.style.display = "block"; // Show matching items
										} else {
											item.style.display = "none"; // Hide non-matching items
										}
									});
								});

								// Like Button Functionality
								document.addEventListener("DOMContentLoaded", function () {
									document.querySelectorAll(".like-button").forEach(button => {
										button.addEventListener("click", function () {
											let pdfId = this.getAttribute("data-pdf-id");
											let likeButton = this;
											let likeCount = document.getElementById("likes-" + pdfId);
											let likeMessage = document.getElementById("like-message-" + pdfId);

											fetch(`/document/${pdfId}/like`, {
												method: "POST",
												headers: {
													"Content-Type": "application/json",
													"X-CSRF-TOKEN": "{{ csrf_token() }}",
												},
												body: JSON.stringify({})
											})
												.then(response => response.json())
												.then(data => {
													if (data.success) {
														likeButton.disabled = true; // Disable the button
														likeButton.classList.remove("btn-outline-primary");
														likeButton.classList.add("btn-success");
														likeCount.textContent = parseInt(likeCount.textContent) + 1;
														// likeMessage.textContent = "Liked!";
													} else {
														likeMessage.textContent = data.message;
													}
												})
												.catch(error => console.error("Error:", error));
										});
									});
								});

							
							</script>
						@endif
					</div>

					<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple4">
						<h4 class="mb-3">Social Networks</h4>
						<div class=" mb-4">
							<div class="">
								<div class="row">
									<div class="col">
										<div class="input-group mb-3">
											<span class="input-group-text text-3" id="basic-addon1"><i
													class="fab fa-linkedin-in"></i></span>
											<input type="text" class="form-control text-3 h-auto py-2"
												placeholder="Enter Your linkedin Link" aria-label="Username"
												aria-describedby="basic-addon1">
										</div>
										<div class="input-group mb-3">
											<span class="input-group-text text-3" id="basic-addon1"><i
													class="fa-brands fa-square-instagram"></i></span>
											<input type="text" class="form-control text-3 h-auto py-2"
												placeholder="Enter Your Instagram Link" aria-label="Username"
												aria-describedby="basic-addon1">
										</div>
										<div class="input-group mb-3">
											<span class="input-group-text text-3" id="basic-addon1"><i
													class="fa-brands fa-square-facebook"></i></span>
											<input type="text" class="form-control text-3 h-auto py-2"
												placeholder="Enter Your Facebook Link" aria-label="Username"
												aria-describedby="basic-addon1">
										</div>
										<div class="input-group mb-3">
											<span class="input-group-text text-3" id="basic-addon1"><i
													class="fa-brands fa-square-x-twitter"></i></span>
											<input type="text" class="form-control text-3 h-auto py-2"
												placeholder="Enter Your Twitter Link" aria-label="Username"
												aria-describedby="basic-addon1">
										</div>
										<div class="input-group mb-3">
											<span class="input-group-text text-3" id="basic-addon1"><i
													class="fa-solid fa-link"></i></span>
											<input type="text" class="form-control text-3 h-auto py-2"
												placeholder="Enter Your Prtfolio Link" aria-label="Username"
												aria-describedby="basic-addon1">
										</div>
										<div class="form-group mt-3 d-flex gap-2">
											<button type="submit" class="btn btn-primary mr-2">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




					<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">
						<h3 class="mb-3">My Events</h3>
						<!-- Today's Events -->
						<!-- <div class="card mb-4">
										<div class="card-header bg-primary text-white">Today's Events</div>
										<div class="card-body">
											@if(count($todayEvents) > 0)
												<ul class="list-group">
													@foreach($todayEvents as $event)
														<li class="list-group-item">
															<strong>{{ $event->title }}</strong><br>
															<span>Date: {{ $event->event_date }}</span><br>
															<span>Time: {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span><br>
															<span>Location: {{ $event->location }}</span>
														</li>
													@endforeach
												</ul>
											@else
												<p class="text-muted">No events today.</p>
											@endif
										</div>
									</div> -->
						<div class="col mb-4 mb-lg-0">
							<div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
								id="accordion200">
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												data-bs-toggle="collapse" data-bs-target="#collapse200One"
												aria-expanded="false" aria-controls="collapse200One">
												Upcoming Events
											</a>
										</h4>
									</div>
									<div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
										data-bs-parent="#accordion200">
										<!-- Upcoming Events -->
										<div class="my_up_evt p-3">
											@if(count($upcomingEvents) > 0)
												<ul class="list-group">
													@foreach($upcomingEvents as $event)
														<li class="list-group-item mb-4">
															<strong>{{ $event->title }}</strong><br>
															<span>Date: {{ $event->event_date }}</span><br>
															<span>Time:
																{{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span><br>
															<span>Location: {{ $event->location }}</span>
														</li>
													@endforeach
												</ul>
											@else
												<p class="text-muted">No upcoming events.</p>
											@endif
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												data-bs-toggle="collapse" data-bs-target="#collapse200Two"
												aria-expanded="false" aria-controls="collapse200Two">
												Past Event
											</a>
										</h4>
									</div>
									<div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo"
										data-bs-parent="#accordion200">
										<!-- Completed Events -->
										<div class="my_up_evt p-3">
											@if(count($completedEvents) > 0)
												<ul class="list-group">
													@foreach($completedEvents as $event)
														<li class="list-group-item">
															<strong>{{ $event->title }}</strong><br>
															<span>Date: {{ $event->event_date }}</span><br>
															<span>Time:
																{{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span><br>
															<span>Location: {{ $event->location }}</span>
														</li>
													@endforeach
												</ul>
											@else
												<p class="text-muted">No completed events.</p>
											@endif
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												data-bs-toggle="collapse" data-bs-target="#collapse200Three"
												aria-expanded="false" aria-controls="collapse200Three">
												My Reward
											</a>
										</h4>
									</div>
									<div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree"
										data-bs-parent="#accordion200">
										<div class="row p-4">
											<div class="col-md-4 col-lg-4">
												<div class="counters bg-color-light p-4">
													<div class="counter custom-sm-counter-style">
														<img class="counter-icon mb-4"
															src="http://genz.test/img/gen_img/classroom.png" width="65"
															height="65" alt="icon">
														<strong class="text-color-primary custom-primary-font"
															data-to="5000" data-append="+">5000+</strong>
														<label>Total Points</label>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-lg-4 ">
												<div class="counters bg-color-light p-4">
													<div class="counter custom-sm-counter-style">
														<img class="counter-icon mb-4"
															src="http://genz.test/img/gen_img/google-icon.png" width="65"
															height="65" alt="">
														<strong class="text-color-primary custom-primary-font" data-to="100"
															data-append="+">100+</strong>
														<label>Total Rewards</label>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-lg-4 ">
												<div class="counters bg-color-light p-4">
													<div class="counter custom-sm-counter-style">
														<img class="counter-icon mb-4"
															src="http://genz.test/img/gen_img/google-icon.png" width="65"
															height="65" alt="">
														<strong class="text-color-primary custom-primary-font" data-to="100"
															data-append="+">100+</strong>
														<label>Redeem Point</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFour">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												data-bs-toggle="collapse" data-bs-target="#collapse200Four"
												aria-expanded="false" aria-controls="collapse200Four">
												My Membership
											</a>
										</h4>
									</div>
									<div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour"
										data-bs-parent="#accordion200">
										<div class="card-body pt-0">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis
												quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
												Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.
												Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
												massa, tristique sit amet condim vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
					<div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple6">

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
												<a href="#" class="btn btn-dark btn-modern btn-outline py-2 px-4">Book
													Now</a>
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
												<a href="#" class="btn btn-dark btn-modern btn-outline py-2 px-4">Book
													Now</a>
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
@endsection
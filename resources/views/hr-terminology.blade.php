@extends('master')
@section('content')

<div role="main" class="main">

	<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
						data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">HR Terminology</h1>
				</div>
				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-end appear-animation"
						data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
						<li><a href="#">Home</a></li>
						<li class="active">HR Terminology</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container py-5">
		<!-- <div class="row align-items-center">
						<div class="col">
                        <h2 class="font-weight-bold text-color-dark mb-3">-	Who We Are</h2>
						</div>
					</div> -->
		<div class="row">
			<div class="container">

				<!-- Tab navigation -->
				<div class="tabs">
					<ul class="nav nav-tabs" id="alphabetTab" role="tablist">
						@foreach (range('A', 'Z') as $letter)
							<li class="nav-item" role="presentation">
								<a class="nav-link @if($letter == 'A') active @endif" id="{{ $letter }}-tab"
									data-bs-toggle="tab" href="#{{ $letter }}" role="tab" aria-controls="{{ $letter }}"
									aria-selected="{{ $letter == 'A' ? 'true' : 'false' }}">
									{{ $letter }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>



				<!-- Tab content -->
				<div class="tab-content mt-3" id="alphabetTabContent">
					@foreach ($terms as $letter => $types)
						<div class="tab-pane fade @if($letter == 'A') show active @endif" id="{{ $letter }}">
							<div class="">

								<ul class="list list-icons list-icons-style-2">
									@foreach ($types['type1'] as $definition)
										<li>
											<i class="fas fa-check"></i>
											<strong>{{ strstr($definition, ':', true) }}</strong>{{ strstr($definition, ':') }}
										</li>
									@endforeach
								</ul>

								<!-- Optional: Divider between types -->
								<div class="divider divider-style-2 divider-secondary taller">
									<i class="fas fa-chevron-down"></i>
								</div>

								<ul class="list list-icons list-icons-style-2">
									@foreach ($types['type2'] as $definition)
										<li>
											<i class="fas fa-caret-right"></i>
											<strong>{{ strstr($definition, ':', true) }}</strong>{{ strstr($definition, ':') }}
										</li>
									@endforeach
								</ul>

							</div>
						</div>
					@endforeach
				</div>
			</div>

			<!--  -->
		</div>
	</div>
</div>



<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="call-to-action-btn">
					<a href="#" target="_blank" class="btn btn-modern text-2 btn-primary">Join us at HRConnect</a>
					<span
						class="arrow hlb d-none d-md-block appear-animation animated rotateInUpLeft appear-animation-visible"
						data-appear-animation="rotateInUpLeft"
						style="left: 110%; top: -40px; animation-delay: 100ms;"></span>
				</div>
			</div>
			<div class="col-sm-9 col-lg-9">
				<div class="call-to-action-content">
					<h3>your partner in <strong class="font-weight-extra-bold">progress and your professional
						</strong> home.</h3>

				</div>
			</div>
		</div>
	</div>
</section>


<!-- <div class="container-fluid">
					<div class="row py-3 mt-2">

						<div class="col-lg-6 p-0">
							<section class="section section-height-3 bg-color-primary-darken-1 h-100 m-0 border-0">
								<div class="row justify-content-end m-0">
									<div class="col-half-section col-half-section-right text-color-light">
										<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                                            <span class="line-pre-title bg-color-secondary ms-0 me-3 appear-animation" 
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                        </span>Our Mission</p>
										<h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Budget Friendly</h2>
										<span class="opacity-7 d-block">
											<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" 
                                            data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit 
                                            amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. 
                                            Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
										</span>
									</div>
								</div>
							</section>
						</div>

						<div class="col-lg-6 p-0">
							<section class="section section-height-3 bg-color-primary h-100 m-0 border-0">
								<div class="row m-0">
									<div class="col-half-section text-color-light text-end">
										<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100">Our vision<span class="line-pre-title me-0 ms-3 bg-color-secondary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200"></span></p>
										<h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Experienced Team</h2>
										<span class="opacity-7 d-block">
											<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInLeftShorter" 
                                            data-appear-animation-delay="300">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. 
                                                Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, 
                                                quis sollicitudin.</p>
										</span>
									</div>
								</div>
							</section>
						</div>

					</div>
				</div>

				<div class="container py-5 mb-3">
					<div class="row align-items-center">
						<div class="col-lg-5 pt-3 pt-lg-0 pb-4 pb-lg-0">
							<div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
								<img src="img/demos/business-consulting-2/bg/bg-1.jpg" class="img-fluid border-radius-0" alt="">
							</div>
						</div>
						<div class="col-lg-7">
							<p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<p class="m-0 p-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="counters custom-counters mt-5 d-flex">
								<div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
									<strong data-to="240" data-append="+">0</strong>
									<label class="text-color-primary font-weight-bold">Satisfied Clients</label>
								</div>
								<div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
									<strong data-to="2000" data-append="+">0</strong>
									<label class="text-color-primary font-weight-bold">Successfull Cases</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="are-you-looking-for bg-color-secondary">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-xl-5">
								<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Are you looking for a</p>
								<h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Business Plan Consultant?</h2>
								<p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Schedule your company strategy session right now!</p>
							</div>
							<div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">
								<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
									<span>
										<img width="18" height="25" src="img/demos/business-consulting-2/icons/phone.svg" alt="Phone">
									</span>
									<a class="text-color-light text-decoration-none" href="tel:123-456-7890">(800) 123-4567</a>
								</span>
								<a href="demo-business-consulting-2-contact-us.html" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">free initial consultation</a>
							</div>
						</div>
					</div>
				</section>				 -->

</div>

@endsection
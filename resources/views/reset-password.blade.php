@extends('master')
@section('content')

	<div role="main" class="main">

				<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold text-9 text-color-secondary appear-animation" 
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Forgot Password</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<li><a href="#">Home</a></li>
									<li class="active">Forgot Password</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-5 mb-0">Forgot Password</h2>
							<form action="/" id="frmSignIn" method="post" class="needs-validation">
								<div class="row">
									<div class="form-group col">
										<label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
										<input type="text" value="" class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase 
                                        rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Send</button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>

@endsection
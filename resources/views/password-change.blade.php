@extends('master')
@section('content')

<div role="main" class="main">


	<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
						data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Reset Password
					</h1>
				</div>
				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-end appear-animation"
						data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
						<li><a href="#">Home</a></li>
						<li class="active">Reset Password</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0 text-center">Reset Password</h2>

                @if (session('status'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.update') }}" method="POST" class="needs-validation">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">

                    <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">Email Address <span
                                class="text-color-danger">*</span></label>
                        <input type="email" name="email" value="{{ request()->email }}"
                            class="form-control form-control-lg text-4" readonly>
                    </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="form-label text-color-dark text-3">New Password <span
                            class="text-color-danger">*</span></label>
                    <input type="password" name="password"
                        class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="form-label text-color-dark text-3">Confirm Password <span
                            class="text-color-danger">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control form-control-lg text-4"
                        required>
                </div>
            </div>

            <div class="row mt-4">
                <div class="form-group col">
                    <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase 
                                rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">
                        Reset Password
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>

@endsection
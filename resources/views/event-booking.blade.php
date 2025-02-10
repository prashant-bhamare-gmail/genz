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
                        <li><a href="/event">Event</a></li>
                        <li class="active">Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-color-dark font-weight-bold">Event</h2>
                    <article class="thumb-info custom-thumb-info custom-box-shadow">
                        <span class="thumb-info-wrapper">
                            <a href="demo-church-events-detail.html">
                                <img src="{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid" />
                            </a>
                        </span>
                        <span class="thumb-info-caption">

                            <span class="custom-event-infos">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}
                                    </li>
                                    <li class="text-uppercase">
                                        <i class="fas fa-calendar"></i>
                                        {{ $event->event_date }}
                                    </li>
                                    <li class="text-uppercase">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$event->location}}
                                    </li>
                                </ul>
                            </span>
                            <span class="thumb-info-caption-text">
                                <h4 class="font-weight-bold mb-2">
                                    <a href="demo-church-events-detail.html"
                                        class="text-decoration-none custom-secondary-font text-color-dark">
                                        {{ $event->title }}
                                    </a>
                                </h4>
                                <p>{{ $event->description }}</p>
                                <!-- <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary font-weight-bold" data-bs-toggle="modal"
                                        data-bs-target="#bookevent">
                                        Book Now
                                    </a>
                                </div> -->
                            </span>
                        </span>
                    </article>
                </div>
                <div class="col-lg-6  p-4 bg-white">
                    <div class="card-body" style="padding: 0;">
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="contact-form" action="{{ route('event-register') }}" method="POST">
                            @csrf

                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            @auth
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            @endauth

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                        class="form-control text-3 h-auto py-2" name="name" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="{{ auth()->check() ? auth()->user()->email : '' }}"
                                        class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Company Name</label>
                                    <input type="text" class="form-control text-3 h-auto py-2" name="company_name"
                                        required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Current Designation</label>
                                    <input type="text" class="form-control text-3 h-auto py-2" name="designation"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Contact Number</label>
                                    <input type="number" class="form-control text-3 h-auto py-2" name="contact_number" pattern="[0-9]{10}" maxlength="10" 
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-check-label">I am interested in the event.</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="interested" value="1"
                                            required> Yes
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="interested" value="0"
                                            required> No
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <input type="submit" value="Register" class="btn btn-primary">
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

@endsection
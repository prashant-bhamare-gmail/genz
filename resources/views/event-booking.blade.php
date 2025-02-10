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
                        <form class="contact-form" action="" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Comapny Name</label>
                                    <input type="text" value="" data-msg-required="Please enter your comapny name."
                                        data-msg-company="Please enter a valid comapny name" maxlength="100"
                                        class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label mb-1 text-2">Current Designation</label>
                                    <input type="text" value=""
                                        data-msg-required="Please enter your Current Designation"
                                        data-msg-designation="Please enter a valid Current Designation" maxlength="100"
                                        class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Contact Number</label>
                                    <input type="number" value="" data-msg-required="Please enter your contact number ."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-check-label" for="tabContent9Checkbox">
                                        I am interested in the event.
                                    </label>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="radios"
                                                data-msg-required="Please select at least one option."
                                                id="tabContent9Radio1" value="option1" required> Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="radios"
                                                data-msg-required="Please select at least one option."
                                                id="tabContent9Radio2" value="option2" required> No
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="submit" value="Submit" class="btn btn-primary"
                                        data-loading-text="Loading...">
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
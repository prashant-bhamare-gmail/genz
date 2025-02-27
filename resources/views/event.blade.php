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
					@if(session('success'))
						<div class="alert alert-success mt-3">
							{{ session('success') }}
						</div>
					@endif
				</div>
				<div class="row">
					<div class="col-lg-6 mb-4 mb-lg-0">
						<h2 class="text-color-dark font-weight-bold">Next Event</h2>
						@if ($nextEvent)
										<article class="thumb-info custom-thumb-info custom-box-shadow">
											<span class="thumb-info-wrapper">
												<a href="demo-church-events-detail.html">
													<img src="{{ $nextEvent->image }}" alt="{{ $nextEvent->title }}" class="img-fluid" />
												</a>
											</span>
											<span class="thumb-info-caption">
												<span class="custom-event-infos">
													<ul>
														<li>
															<i class="far fa-clock"></i>
															{{ \Carbon\Carbon::parse($nextEvent->event_time)->format('h:i A') }}

														</li>
														<li class="text-uppercase">
															<i class="fas fa-calendar"></i>
															{{ $nextEvent->event_date }}
														</li>
														<li class="text-uppercase">
															<i class="fas fa-map-marker-alt"></i>
															{{ $nextEvent->location }}
														</li>
													</ul>
												</span>
												<span class="thumb-info-caption-text">
													<h4 class="font-weight-bold mb-2">
														<a href="demo-church-events-detail.html"
															class="text-decoration-none custom-secondary-font text-color-dark">
															{{ $nextEvent->title }}
														</a>
													</h4>
													<p>{{ $nextEvent->description }}</p>
													<div class="d-flex justify-content-end">
														@if(in_array($nextEvent->id, array_column($registeredEvents, 'event_id')))
																						@php
																							// Find the registered event that matches $nextEvent->id
																							$registeredEvent = collect($registeredEvents)->firstWhere('event_id', $nextEvent->id);
																						@endphp
																						<form action="{{ route('event.cancel', ['id' => $registeredEvent['id']]) }}"
																							method="POST">
																							@csrf
																							@method('DELETE')
																							<button type="submit" class="btn btn-danger">Cancel Booking</button>
																						</form>
														@else
															<a href="{{ route('event-booking', ['eventId' => $nextEvent->id]) }}"
																class="btn btn-primary font-weight-bold">
																Book Now
															</a>
														@endif

													</div>
												</span>
											</span>
										</article>
						@else
							<p>No upcoming events.</p>
						@endif
					</div>
					<div class="col-lg-6">
						<h2 class="text-color-dark font-weight-bold">Upcoming Event</h2>
						@if ($upcomingEvents->count() > 0)
									@foreach ($upcomingEvents as $event)
												<article class="custom-post-event">
													<div class="post-event-date bg-color-primary text-center">
														<span class="month text-uppercase custom-secondary-font text-color-light">
															{{ \Carbon\Carbon::parse($event->event_date)->format('F') }}
														</span>
														<span class="day font-weight-bold text-color-light">
															{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}
														</span>
														<span class="year text-color-light">
															{{ \Carbon\Carbon::parse($event->event_date)->format('Y') }}
														</span>
													</div>
													<div class="post-event-content custom-margin-1">
														<span class="custom-event-infos">
															<ul>
																<li>
																	<i class="far fa-clock"></i>
																	{{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}
																</li>
																<li class="text-uppercase">
																	<i class="fas fa-map-marker-alt"></i>
																	{{ $event->location }}
																</li>
															</ul>
														</span>
														<h4 class="font-weight-bold">
															<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
																{{ $event->title }}
															</a>
														</h4>
														<p>{{ Str::limit($event->description, 150, '...') }}</p>
														<div class="d-flex justify-content-end">
															@if(in_array($event->id, array_column($registeredEvents, 'event_id')))
																					@php
																						// Find the registered event that matches $nextEvent->id
																						$registeredEvent = collect($registeredEvents)->firstWhere('event_id', $event->id);
																					@endphp
																					<form action="{{ route('event.cancel', ['id' => $registeredEvent['id']]) }}"
																						method="POST">
																						@csrf
																						@method('DELETE')
																						<button type="submit" class="btn btn-danger">Cancel Booking</button>
																					</form>
															@else
																<a href="{{ route('event-booking', ['eventId' => $event->id]) }}"
																	class="btn btn-primary font-weight-bold">
																	Book Now
																</a>
															@endif

														</div>
														<!-- <div class="d-flex justify-content-end">
															@if(in_array($event->id, $registeredEvents))
																<button class="btn btn-success" disabled>Booked</button>
															@else
																<a href="{{ route('event-booking', ['eventId' => $event->id]) }}"
																	class="btn btn-primary font-weight-bold">
																	Book Now
																</a>
															@endif

														</div> -->
													</div>
												</article>
												<hr class="solid">
									@endforeach
						@else
							<p>No upcoming events.</p>
						@endif
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
					@if ($completedEvents->count() > 0)
						@foreach ($completedEvents as $cevent)
							<div class="col-lg-6">
								<article class="custom-post-event bg-color-light">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light">
											{{ \Carbon\Carbon::parse($cevent->event_date)->format('M') }}
										</span>
										<span class="day font-weight-bold text-color-light">
											{{ \Carbon\Carbon::parse($cevent->event_date)->format('d') }}
										</span>
										<span class="year text-color-light">
											{{ \Carbon\Carbon::parse($cevent->event_date)->format('Y') }}
										</span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													{{ \Carbon\Carbon::parse($cevent->event_time)->format('g:i A') }}
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													{{ $cevent->location }}
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
												{{ $cevent->title }}
											</a>
										</h4>
										<p>{{ Str::limit($cevent->description, 100) }}</p>
									</div>
								</article>
								<hr class="solid">
							</div>
						@endforeach
					@else
						<p>No completed events.</p>
					@endif
				</div>
		</section>



	</div>

@endsection
@extends('master')
@section('content')

    <div role="main" class="main">
        <section class="page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Our Core Team</h1>
                    </div>

                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="#">Committee</a></li>
                            <li>{{ $city }}</li>
                            <li class="active">managing committee</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-secondary custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="">
                        <h1 class="font-weight-bold text-color-dark mb-3" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="100">Our Core Team</h1>
                    </div>
                    <div class="col">

                        <!-- <ul class="nav nav-pills sort-source mb-4" data-sort-id="team" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                                    <li class="nav-item active" data-option-value="*"><a class="active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Show All</a></li>
                                    <li class="nav-item" data-option-value=".leadership"><a class="btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Leadership</a></li>
                                    <li class="nav-item" data-option-value=".other"><a class="btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Other</a></li>
                                </ul> -->

                        <div class="row team-list sort-destination" data-sort-id="team">
                            <div class="col-md-3 isotope-item leadership">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-4.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>

                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Model Box -->
                                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                    aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h4 class="modal-title" id="largeModalLabel">Name</h4>
                                                    <p class="lead pt-1">CEO &amp; Founder</p>
                                                </div>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-4">
                                                    <div class="col-md-3 text-center">
                                                        <div class="team-item">
                                                            <span class="image-wrapper">
                                                                <img src="{{ asset('img/gen_img/team-4.jpg') }}" alt=""
                                                                    class="img-fluid" />
                                                            </span>
                                                            <div class="team-infos">
                                                                <div class="share">
                                                                    <i class="fas fa-share-alt"></i>
                                                                    <div class="share-icons bg-color-light">
                                                                        <a href="#" class="text-decoration-none"
                                                                            title="Share on Facebook"><i
                                                                                class="fab fa-facebook-f"></i></a>
                                                                        <a href="#" class="text-decoration-none"
                                                                            title="Share on Instagram"><i
                                                                                class="fab fa-instagram"></i></a>
                                                                        <a href="#" class="text-decoration-none"
                                                                            title="Share on Linkedin"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <p class="lead">Curabitur pellentesque neque eget diam posuere
                                                            porta. Quisque ut
                                                            nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,
                                                            ut feugiat nibh
                                                            adipiscing sit amet. In eu justo a felis faucibus ornare vel id
                                                            metus.
                                                            Vestibulum ante ipsum primis.</p>

                                                        <ul class="list list-icons">
                                                            <li><i class="icon-phone icons"></i> <strong>Phone:</strong>
                                                                (123) 456-789</li>
                                                            <li><i class="icon-envelope icons"></i> <strong>Email:</strong>
                                                                <a href="mailto:mail@example.com">mail@example.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">

                                                        <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut
                                                            nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,
                                                            ut feugiat nibh adipiscing sit amet. In eu justo a felis
                                                            faucibus ornare vel id metus. Vestibulum ante ipsum primis in
                                                            faucibus orci luctus et ultrices posuere cubilia Curae; In eu
                                                            libero ligula. Fusce eget metus lorem, ac viverra leo.
                                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                                            posuere cubilia Curae; In eu libero ligula. Fusce eget metus
                                                            lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus
                                                            orci.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Curabitur pellentesque neque eget diam posuere porta. Quisque ut
                                                            nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing
                                                            porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a
                                                            felis faucibus ornare vel id metus. Vestibulum ante ipsum primis
                                                            in faucibus orci luctus et ultrices posuere cubilia Curae; In eu
                                                            libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam
                                                            convallis, arcu vel pellentesque sodales, nisi est varius diam,
                                                            ac ultrices sem ante quis sem. Proin ultricies volutpat sapien,
                                                            nec scelerisque ligula mollis lobortis.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Model Box -->

                            </div>
                            <div class="col-md-3 isotope-item other">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-2.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>
                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 isotope-item other">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-3.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>
                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 isotope-item other">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-4.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>
                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 isotope-item other">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-4.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>
                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 isotope-item other">
                                <div class="team-item mb-4 p-0 pb-2" data-bs-toggle="modal" data-bs-target="#largeModal">
                                    <a href="#" class="text-decoration-none">
                                        <span class="image-wrapper">
                                            <img src="{{ asset('img/gen_img/team-4.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </a>
                                    <div class="team-infos">
                                        <a href="#" class="text-decoration-none">
                                            <span
                                                class="team-member-name text-color-dark font-weight-semibold text-4">Name</span>
                                            <span class="team-member-desc font-weight-light">Current Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
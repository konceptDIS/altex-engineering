@extends('layout.app', ['activePage' => 'Services'])

@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title">SERVICES</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="#" class="home"><span>HOME</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-double-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">SERVICES</span></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-double-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">ALTERNATIVE ENERGY</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <!-- service Details -->
        <section class="service-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 service-left-col order-2 order-lg-1">
                        @php
                            $sidebar = 'Alternative Energy';
                        @endphp
                        @include('services.side-menu', ['sidebar' => $sidebar])
                    </div>
                    <div class="col-lg-9 service-right-col order-1">
                        <div class="pbmit-service-single">
                            <img src="images/blog-blog-new-03.jpg" class="img-fluid w-100" alt="">
                        </div>
                        <div class="service-details">
                            <div class="pbmit-service-contant">
                                <h3 class="pbmit-title">Description of service</h3>
                                <p>
                                    We leverage on years of experience to provide innovative energy solutions to clients in line with national and international standards on the use of renewable energy. We provide engineering services that are ecofriendly, cost intensive, and characterized by zero emissions and zero radiation.
                                </p>
                                <p>
                                    These innovative alternative energies also have low maintenance costs. The services below are targeted towards providing alternative energy solution:
                                </p>
                            </div>
                            <div class="service-page-infobox">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Hydro Power (Gas to Power)</li>
                                            <li class="list-group-item">Smart Grids and meters</li>
                                            <li class="list-group-item">Eco-friendly Power Unit</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">Lithium Power Storage Systems</li>
                                            <li class="list-group-item">Solar Systems</li>
                                            <li class="list-group-item">Energy Monitoring Consultancy</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/portfolio-project-new-05.jpg" class="img-fluid img-grid" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/alternative-energy-2.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="service-plan">
                                <h3 class="pbmit-title">Frequently Asked Questions</h3>
                                <p>With whom you will work, it totally depends on your project requirements They are highly trained for quickly response and provide great service to our customers. Experts are give profitability and success of our business growth &amp; marketing.</p>
                                <div class="accordion accordion-style-2" id="accordionExample">
                                    <div class="accordion-item active">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            I NEED HELP ASAP, CAN YOU COME TODAY?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour. Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat.</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <img src="images/service-tab-new-01.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                HOW MUCH TIME THE SERVICE WILL TAKE?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour. Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat.</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <img src="images/service-tab-new-02.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            HOW I CAN CONTACT WITH YOUR HANDYMAN?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour. Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat.</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <img src="images/service-tab-new-03.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-team">
                                <h3 class="pbmit-title">Our Team Members</h3>
                                <p>Meet our team of experts</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="pbmit-team-style-2">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-team-image-box">
                                                    <div class="pbminfotech-box-social-links">
                                                        <ul class="pbmit-social-links pbmit-team-social-links">
                                                            <li class="pbmit-social-li pbmit-social-facebook">
                                                                <a href="#" title="Facebook" target="_blank">
                                                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-twitter">
                                                                <a href="#" title="Twitter" target="_blank">
                                                                    <span><i class="pbmit-base-icon-twitter"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-youtube">
                                                                <a href="#" title="Youtube" target="_blank">
                                                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-linkedin">
                                                                <a href="#" title="LinkedIn" target="_blank">
                                                                    <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/team/team-2.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-content">
                                                    <h5 class="pbmit-team-title">
                                                        <a href="team-member-details.html">Dr. Aisha Achimugu</a>
                                                    </h5>
                                                    <div class="pbminfotech-box-team-position-wrap">
                                                        <div class="pbminfotech-box-team-position">CO-FOUNDER, CEO</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="pbmit-team-style-2">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-team-image-box">
                                                    <div class="pbminfotech-box-social-links">
                                                        <ul class="pbmit-social-links pbmit-team-social-links">
                                                            <li class="pbmit-social-li pbmit-social-facebook">
                                                                <a href="#" title="Facebook" target="_blank">
                                                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-twitter">
                                                                <a href="#" title="Twitter" target="_blank">
                                                                    <span><i class="pbmit-base-icon-twitter"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-youtube">
                                                                <a href="#" title="Youtube" target="_blank">
                                                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-linkedin">
                                                                <a href="#" title="LinkedIn" target="_blank">
                                                                    <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/team/team-1.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-content">
                                                    <h5 class="pbmit-team-title">
                                                        <a href="team-member-details.html">Aina Segun Aina</a>
                                                    </h5>
                                                    <div class="pbminfotech-box-team-position-wrap">
                                                        <div class="pbminfotech-box-team-position">GENERAL MANAGER</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="pbmit-team-style-2">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-team-image-box">
                                                    <div class="pbminfotech-box-social-links">
                                                        <ul class="pbmit-social-links pbmit-team-social-links">
                                                            <li class="pbmit-social-li pbmit-social-facebook">
                                                                <a href="#" title="Facebook" target="_blank">
                                                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-twitter">
                                                                <a href="#" title="Twitter" target="_blank">
                                                                    <span><i class="pbmit-base-icon-twitter"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-youtube">
                                                                <a href="#" title="Youtube" target="_blank">
                                                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="pbmit-social-li pbmit-social-linkedin">
                                                                <a href="#" title="LinkedIn" target="_blank">
                                                                    <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/team-team-img-01.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-content">
                                                    <h5 class="pbmit-team-title">
                                                        <a href="team-member-details.html">Justin Novak</a>
                                                    </h5>
                                                    <div class="pbminfotech-box-team-position-wrap">
                                                        <div class="pbminfotech-box-team-position">Founder, CEO</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Details End -->

    </div>
    <!-- Page Content End -->
@endsection

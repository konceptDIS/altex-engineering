@extends('layout.app', [$activePage = 'Home'])

@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- About Us Start -->
        <section class="section-md">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="about-single-one">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">ABOUT OUR INDUSTRY</h4>
                                <h2 class="pbmit-title">We understand the engineering industry</h2>
                            </div>
                            <div class="about-us-single-one" style="margin-bottom: 100px">
                                <p style="text-align: justify">
                                    The engineering industry is faced with several challenges that impact the sustained operations of companies in the industry. The core challenge facing the industry relates to the climate change debacle. Particulate matter emerging from large engineering firms are leading contributor to environmental pollution. This has informed the need for eco-conscious engineers and practices who are able to reduce the environmental imprints of engineering practices. This calls for the adoption of renewable energy and best environmentally friendly approach to engineering operations.... <a href="{{route('about')}}">read more</a>
                                </p>
                                {{-- <ul class="list-group list-group-borderless">
                                    <li class="list-group-item"> Nsectetur adipisicing elit, sed do eiusmod Tempord</li>
                                    <li class="list-group-item"> Labore et dolore magna aliqua ut enim</li>
                                    <li class="list-group-item"> Veniam quis nostrud exercitation ullamco laboris</li>
                                </ul> --}}
                                <div class="progressbar">
                                    <span class="progress-label">Carbon Footprint</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                        </div>
                                        <span class="progress-percent" style=" right:330px">30%</span>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <span class="progress-label">Renewable Energy Projects</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                        </div>
                                        <span class="progress-percent" style=" right:120px">75%</span>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <span class="progress-label">Highly Professional Staff</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        </div>
                                        <span class="progress-percent" style=" right:50px">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-img-one">
                            <img src="images/home-01.png" class="img-fluid" alt="">
                            <div class="button-wrapper">
                                <a href="#" class="button-link">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon">
                                            <i aria-hidden="true" class="fa fa-youtube-play"></i>
                                        </span>
                                        <span class="button-text">See Our Industry</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->

        <section>
            <div class="container">
                <div class="pbmit-element-miconheading-style-1">
                    <div class="swiper-slider" data-autoplay="false" data-dots="true" data-arrows="false" data-columns="1" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
                                <article class="pbmit-miconheading-style-1">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-trophy"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">2016 Best Quality <br>Awards Winner</h2>
                                            </div>
                                            <div class="pbmit-ihbox-overlay">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper">
                                                        <i class="pbmit-industrey-icon pbmit-industrey-icon-trophy"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
                                <article class="pbmit-miconheading-style-1">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-medal"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">The World's Most Powerful Industry</h2>
                                            </div>
                                            <div class="pbmit-ihbox-overlay">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper">
                                                        <i class="pbmit-industrey-icon pbmit-industrey-icon-medal"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
                                <article class="pbmit-miconheading-style-1">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-winner"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">International Awards for Access</h2>
                                            </div>
                                            <div class="pbmit-ihbox-overlay">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper">
                                                        <i class="pbmit-industrey-icon pbmit-industrey-icon-winner"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Start -->
        <section class="service-bg-one">
            <div class="container">
                <div class="pbmit-heading-subheading text-light text-center">
                    <h4 class="pbmit-subtitle">WHAT WE DO FOR YOU!</h4>
                    <h2 class="pbmit-title">Get best industrial services <br> for your business</h2>
                </div>
                <div class="swiper-slider" data-autoplay="false" data-dots="true" data-arrows="false" data-columns="3" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/bg-2.png" class="img-fluid" alt="Civil & Building Engineering" style="height: 253.3px;object-fit: cover;width: 100%;">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Civil & Building Engineering</a></h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-drilling-rig"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    Our services cover the design and construction of small, medium and large-scale projects ranging from office and business complexes, residential estates, and parks.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide2 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/alternative-energy.png" class="img-fluid" alt="" style="height: 253.3px;object-fit: cover;width: 100%;">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Alternative Energy Solutions</a></h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-coal"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    We provide engineering services that are ecofriendly, cost intensive, and characterized by zero emissions and zero radiation.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide4 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/service-service-new-04.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Oil &amp; Gas Engineering</a>
                                                </h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-cargo-ship"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">We offer expert services that enhance the supply chain of oil and gas. Our services support plant safety, productivity, and efficiency while reducing production costs.</p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide5 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/service-service-new-05.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Sustainable Water Solution</a></h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-factory-2"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    With our team of world class experts, we profer a wide range of integrated water treatment solutions that efficiently treat raw process and waste water to ensure the sustainable supply of safe drinking water for numerous communities.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide6 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/service-service-new-06.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Advisory &amp; Consultancy</a></h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-engineer"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    We offer a range of innovative consulting and advisory services in engineering that enhance the value of our valued clients in areas such as quality management, sourcing solutions, operations management and maintenance, business development, product design and development.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide7 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/service-service-new-07.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Rural Electrification</a></h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-battery-1"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    We provide integrated electricity to rural and remote areas of grid to support economic activities and social development.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide9 -->
                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-service-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/service-service-new-09.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="pbmit-service-title">
                                                    <a href="services-details.html">Procurement Management</a>
                                                </h3>
                                                <div class="pbmit-service-icon-wrapper">
                                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-control-panel"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-service-content">
                                                <p class="two-lines">
                                                    We have referenced experience in providing supply chain value through offering cost-efficient materials and services to our valued clients.
                                                </p>
                                            </div>
                                            <div class="pbmit-service-btn">
                                                <a class="btn-arrow" href="services-details.html"><span>View More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                            <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img src="images/testimonail-testimonial-01.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Need any of our services? We respond quickly. <a href="#">Contact Us<br> </a> today.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <!-- Counter Start -->
        <section class="section-xt pbmit-bg-color-blackish">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-heading-subheading text-global mb-0 pt-2">
                            <h4 class="pbmit-subtitle">NUMBERS SPEAK</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-heading-subheading text-white">
                            <h2 class="pbmit-title">We have twenty years of great experience of industries</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                            <div class="pbmit-fld-contents">
                                <div class="pbmit-sbox-icon-wrapper"><i class="fas fa-star"></i></div>
                                <div class="pbmit-fld-wrap">
                                    <h4 class="pbmit-fid-inner">
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="12" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">12</span>
                                        <span class="pbmit-fid"></span>
                                    </h4>
                                    <div class="pbmit-fid-contents">
                                        <div class="pbmit-fid-title"><span>Project Completed<br>Last 5 Years</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                            <div class="pbmit-fld-contents">
                                <div class="pbmit-sbox-icon-wrapper"><i class="fas fa-star"></i></div>
                                <div class="pbmit-fld-wrap">
                                    <h4 class="pbmit-fid-inner">
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="50" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">50</span>+
                                        <span class="pbmit-fid"></span>
                                    </h4>
                                    <div class="pbmit-fid-contents">
                                        <div class="pbmit-fid-title"><span>Experienced <br> Team Members</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                            <div class="pbmit-fld-contents">
                                <div class="pbmit-sbox-icon-wrapper"><i class="fas fa-star"></i></div>
                                <div class="pbmit-fld-wrap">
                                    <h4 class="pbmit-fid-inner">
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="60" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">70</span>+
                                        <span class="pbmit-fid"></span>
                                    </h4>
                                    <div class="pbmit-fid-contents">
                                        <div class="pbmit-fid-title"><span>Clients Worldwide <br> in 10 Years</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbminfotech-ele-fid-style-1 ">
                            <div class="pbmit-fld-contents">
                                <div class="pbmit-sbox-icon-wrapper"><i class="fas fa-star"></i></div>
                                <div class="pbmit-fld-wrap">
                                    <h4 class="pbmit-fid-inner">
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="15" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">14</span>
                                        <span class="pbmit-fid"></span>
                                    </h4>
                                    <div class="pbmit-fid-contents">
                                        <div class="pbmit-fid-title"><span>Universal <br> Awards</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="static-box-one">
                    <div class="pbmit-static-box-style-1-dots"></div>
                    <div class="swiper-slider pbmit-client-light" data-autoplay="false" data-dots="true" data-dots-class="pbmit-static-box-style-1-dots" data-arrows="false" data-columns="1" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
                                <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1">
                                    <div class="pbmit-imgbox">
                                        <img src="images/olympic-stadium.webp" alt="Constructed Olympic Sized Stadium" style="height: 420px; object-fit:cover;">
                                    </div>
                                    <div class="pbmit-contentbox">
                                        <div class="pbminfotech-box-title">
                                            <h4>Constructed Olympic Sized Stadium</h4>
                                        </div>
                                        <div class="pbminfotech-static-box-desc">
                                            <p>
                                                <strong><u>Project Title:</u> </strong> Construction of Olympic Standard Size Stadium at the Nigerian Maritime University, Delta State.
                                            </p>
                                            <p>
                                                <strong><u>Client:</u> </strong> Nigerian Maritime Administration and
                                                Safety Agency.
                                            </p>
                                            <p>
                                                <strong><u>Date:</u> </strong> September, 2013.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
                                <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1">
                                    <div class="pbmit-imgbox">
                                        <img src="images/construction-plans.jpg" alt="Constructed an Amenity Ward" style="height: 420px; object-fit:cover;">
                                    </div>
                                    <div class="pbmit-contentbox">
                                        <div class="pbminfotech-box-title">
                                            <h4>Constructed an Amenity Ward</h4>
                                        </div>
                                        <div class="pbminfotech-static-box-desc">
                                            <p>
                                                <strong><u>Project Title:</u> </strong> Construction of Amenity Ward at Federal Medical Centre, Jalingo.
                                            </p>
                                            <p>
                                                <strong><u>Client:</u> </strong> Federal Medical Centre, Jalingo.
                                            </p>
                                            <p>
                                                <strong><u>Date:</u> </strong> October, 2011.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
                                <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1">
                                    <div class="pbmit-imgbox">
                                        <img src="images/homepage-1-staticbox-03.jpg" alt="Electrifed 3 towns">
                                    </div>
                                    <div class="pbmit-contentbox">
                                        <div class="pbminfotech-box-title">
                                            <h4>Electrifed 3 towns</h4>
                                        </div>
                                        <div class="pbminfotech-static-box-desc">
                                            <p>
                                                <strong><u>Project Title:</u> </strong> Rural Electrification Projects NOS. 1-5 In Okobo L.G.A, NOS 7-14IN Oruk Anam L.G.Aand NOS 8-10 In
                                                Obot Akara L.G.A.
                                            </p>
                                            <p>
                                                <strong><u>Client:</u> </strong> Finance and General-Purpose Committee.
                                            </p>
                                            <p>
                                                <strong><u>Date:</u> </strong> May, 2012.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter End -->

        <!-- Tab  Start -->
        <section class="tab-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-md-12">
                        <div class="tab-single-one">
                            <div class="pbmit-heading-subheading text-light">
                                <h4 class="pbmit-subtitle">HOW WE EXECUTE INDUSTRIES</h4>
                                <h2 class="pbmit-title">Ready to bring bigger, better, faster and stronger projects before!</h2>
                            </div>
                            <div class="pbmit-tab-style-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-2-1" aria-selected="true" role="tab">
                                            <span>OUR MISSION</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2-2" aria-selected="false" role="tab" tabindex="-1">
                                            <span>OUR VISION</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2-3" aria-selected="false" role="tab" tabindex="-1">
                                            <span>OUR CORE VALUES</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="tab-2-1" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-6">
                                                    <div class="tab-img-wrapper">
                                                        <img src="images/homepage-1-tab-01.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pbmit-tab-content-wrapper">
                                                        To consistently provide our clients with cost effective solutions in project implementation and service delivery by utilizing advanced technology, and international best practices.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2-2" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-6">
                                                    <div class="tab-img-wrapper">
                                                        <img src="images/homepage-1-tab-02.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pbmit-tab-content-wrapper">
                                                        To be the leading engineering, construction and energy solution company, providing unparalleled services to satisfy our partners and clients locally and internationally.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2-3" role="tabpanel">
                                        <div class="pbmit-column-inner">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-6">
                                                    <div class="tab-img-wrapper">
                                                        <img src="images/homepage-1-tab-03.jpg" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pbmit-tab-content-wrapper">
                                                        Our operations at AESL are driven by 5Cs
                                                        <ul class="list-group list-group-borderless">
                                                            <li class="list-group-item">
                                                                <strong>Commitment</strong>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <strong>Collaboration</strong>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <strong>Cutting-Edge Technology</strong>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <strong>Competitive Advantage</strong>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <strong>Client Satisfaction</strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12">
                        <div class="tab-img">
                            <img src="images/home-02.png" class="img-fluid" alt="" style="height: 700px">
                            <div class="pbmit-ihbox pbmit-ihbox-style-4">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                <img src="images/homepage-1-icon-box-4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title"> We're thriving and <br> building better products </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab End -->

        <!-- Portfolio Start -->
        {{-- <section class="section-lg">
            <div class="container-fluid">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">RECENT PROJECT'S GALLERY</h4>
                    <h2 class="pbmit-title">Some of our finished projects that will <br> amaze your industry</h2>
                </div>
                <div class="swiper-slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-portfolio-style-1 Construction">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-01.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Building Construction Project" href="images/homepage-1/portfolio/project-new-01.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Construction</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Building Construction Project</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide2 -->
                            <article class="pbmit-portfolio-style-1 Engineering">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-02.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Boston Railway Elements" href="images/homepage-1/portfolio/project-new-02.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Engineering</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Boston Railway Elements</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide3 -->
                            <article class="pbmit-portfolio-style-1 manufacture">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-03.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="GC Phoenix Engineering" href="images/homepage-1/portfolio/project-new-03.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Manufacture</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">GC Phoenix Engineering</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide4 -->
                            <article class="pbmit-portfolio-style-1 Industrial">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-04.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Industry Logistic Solutions" href="images/homepage-1/portfolio/project-new-04.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Industrial</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Industry Logistic Solutions</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide5 -->
                            <article class="pbmit-portfolio-style-1 Construction">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-06.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Construction Online Event" href="images/homepage-1/portfolio/project-new-06.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Construction</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Construction Online Event</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide6 -->
                            <article class="pbmit-portfolio-style-1 Engineering">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-05.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Mineral Specialty Solutions" href="images/homepage-1/portfolio/project-new-05.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Engineering</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Mineral Specialty Solutions</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide7 -->
                            <article class="pbmit-portfolio-style-1 Industrial">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-07.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="SGA Recruitment Solutions" href="images/homepage-1/portfolio/project-new-07.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Industrial</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">SGA Recruitment Solutions</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide8 -->
                            <article class="pbmit-portfolio-style-1 Chemical">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-08.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Chemical Industry Innovation" href="images/homepage-1/portfolio/project-new-08.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Chemical</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Chemical Industry Innovation</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <!-- Slide9 -->
                            <article class="pbmit-portfolio-style-1 Factory">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-portfolio-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/portfolio-project-new-09.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox" title="Manufacture Petroleum Camber" href="images/homepage-1/portfolio/project-new-09.jpg">
                                                <i class="pbmit-base-icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <h6 class="pbmit-port-cat">
                                                <a href="project-style-1.html" rel="tag">Factory</a>
                                            </h6>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="project-single-details.html">Manufacture Petroleum Camber</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Portfolio End -->

        <!-- Testimonial Start -->
        <section class="testimonial-bg-one" style="margin-top: 100px">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="images/homepage-1-demo1-img-03.jpg" class="img-fluid w-100 testimonial-img" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="pbmit-element-testimonial-style-1">
                            <div class="pbmit-stroke-heading">
                                <h2 class="pbmit-title">Reviews</h2>
                            </div>
                            <div class="testimonial-arrow swiper-btn-custom d-flex flex-row-reverse">
                                <div class="swiper-slider" data-arrows-class="testimonial-arrow" data-autoplay="false" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Slide1 -->
                                            <article class="pbmit-testimonial-style-1">
                                                <div class="pbminfotech-post-item">
                                                    <div class="pbminfotech-box-content">
                                                        <div class="pbminfotech-box-desc">
                                                            <blockquote class="pbminfotech-testimonial-text">
                                                                <p>&ldquo; After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin.&rdquo;</p>
                                                            </blockquote>
                                                        </div>
                                                        <div class="pbminfotech-box-author">
                                                            <h3 class="pbminfotech-box-title">Amanda Pryor</h3>
                                                            <div class="pbminfotech-testimonial-detail">Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Slide2 -->
                                            <article class="pbmit-testimonial-style-1">
                                                <div class="pbminfotech-post-item">
                                                    <div class="pbminfotech-box-content">
                                                        <div class="pbminfotech-box-desc">
                                                            <blockquote class="pbminfotech-testimonial-text">
                                                                <p>&ldquo; After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin.&rdquo;</p>
                                                            </blockquote>
                                                        </div>
                                                        <div class="pbminfotech-box-author">
                                                            <h3 class="pbminfotech-box-title">Rick Jason</h3>
                                                            <div class="pbminfotech-testimonial-detail">Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Slide3 -->
                                            <article class="pbmit-testimonial-style-1">
                                                <div class="pbminfotech-post-item">
                                                    <div class="pbminfotech-box-content">
                                                        <div class="pbminfotech-box-desc">
                                                            <blockquote class="pbminfotech-testimonial-text">
                                                                <p>&ldquo; After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin.&rdquo;</p>
                                                            </blockquote>
                                                        </div>
                                                        <div class="pbminfotech-box-author">
                                                            <h3 class="pbminfotech-box-title">Cheryl Dunye</h3>
                                                            <div class="pbminfotech-testimonial-detail">Managing Director</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Slide4 -->
                                            <article class="pbmit-testimonial-style-1">
                                                <div class="pbminfotech-post-item">
                                                    <div class="pbminfotech-box-content">
                                                        <div class="pbminfotech-box-desc">
                                                            <blockquote class="pbminfotech-testimonial-text">
                                                                <p>&ldquo; After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business from the brink of ruin.&rdquo;</p>
                                                            </blockquote>
                                                        </div>
                                                        <div class="pbminfotech-box-author">
                                                            <h3 class="pbminfotech-box-title">Striven Smith</h3>
                                                            <div class="pbminfotech-testimonial-detail">CEO of Buildguy</div>
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
            </div>
            <div class="client-section-one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="swiper-slider pbmit-client-light" data-autoplay="false" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Slide1 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 06</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-06.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-06.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide2 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 05</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-05.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-05.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide3 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 04</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-04.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-04.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide4 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 03</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-03.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-03.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide5 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 02</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-02.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-02.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide6 -->
                                        <article class="pbmit-client-style-1 white">
                                            <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                                <h4 class="pbmit-hide">client 01</h4>
                                                <div class="pbmit-client-hover-img">
                                                    <img src="images/client-client-01.png" alt="">
                                                </div>
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="images/client-client-white-01.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="client-ihbox">
                                <div class="pbmit-ihbox pbmit-ihbox-style-2">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-ihbox-headingicon"></div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title"> We have worked with <br>some awesome brands.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial End -->

        <!-- Appoinment Start -->
        <section class="appoinment-bg-one">
            <div class="container g-0">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-6">
                        <div class="appoinment-form">
                            <div class="pbmit-heading-subheading text-white">
                                <h4 class="pbmit-subtitle">CONATCT US</h4>
                                <h2 class="pbmit-title">Request a call back</h2>
                            </div>
                            <div class="pbmit-heading-desc">Quis ipsum suspendisse ultrices gravida risus commodo viverra maecenas accumsan lacus vel facilisis.</div>
                            <form class="form-style-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="your-name" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="Email address" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="your-email" class="form-control" placeholder="Your Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Select Industry Services</option>
                                                <option value="1">Manufacturing</option>
                                                <option value="2">Construction</option>
                                                <option value="3">Energy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="message" class="form-control" placeholder="Write here message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="pbmit-btn pbmit-btn-shape-round pbmit-btn-blackish">
                                            <span>Request an Estimate</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="appoinment-single">
                            <div class="appoinment-content">
                                <div class="pbmit-heading-subheading text-light">
                                    <h4 class="pbmit-subtitle">DO YOU NEES ANY HELP?</h4>
                                    <h2 class="pbmit-title">Industry's frequently asked queries</h2>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item active">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                01. WHY ARE THE SANDS IMPORTANT TO THE INDUSTRY?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Our country possesses approximately 170 billion barrels of oil that can be recovered with today&rsquo;s technology. Of that number, 165 billion barrels are located in the oil sands.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            02. CAN YOU EXPLAIN WHAT ARE OF MARKETING RESEARCH?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Our country possesses approximately 170 billion barrels of oil that can be recovered with today&rsquo;s technology. Of that number, 165 billion barrels are located in the oil sands.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            03. HOW I CAN WITH YOUR ADVISOR IN STRATEGIC ISSUE?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Our country possesses approximately 170 billion barrels of oil that can be recovered with today&rsquo;s technology. Of that number, 165 billion barrels are located in the oil sands.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            04. CAN YOU PROVIDE TIPS FOR IN STOCK MARKET?
                                            </button>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Our country possesses approximately 170 billion barrels of oil that can be recovered with today&rsquo;s technology. Of that number, 165 billion barrels are located in the oil sands.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="html-demo.html" class="pbmit-btn pbmit-btn-shape-round pbmit-btn-inline">
                                    <span>Ask question more </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appoinment End -->

        <!-- Blog Start -->
        {{-- <section class="section-mdb">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">OUR LATEST NEWS</h4>
                    <h2 class="pbmit-title">What's going on in our blog?</h2>
                </div>
                <div class="row g-3">
                    <article class="pbmit-blog-style-1 col-xl-4 col-md-6">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/blog-blog-new-01.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="pbmit-meta-date-wrapper">
                                    <span>29 Jun 2021</span>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-author-wrapper pbmit-meta-line">
                                        <a href="blog-classic.html" title="Posted admin" rel="author"> admin</a>
                                    </div>
                                    <div class="pbmit-meta-comment-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <div class="pbmit-comment-wrapper">
                                                <span class="pbmit-meta pbmit-meta-comments">3
                                                <span class="pbmit-meta pbmit-comments-hide">Comments</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-details.html">We provide Asset Management and Monitoring System</a>
                                </h3>
                                <div class="pbminfotech-box-desc">Consectetur adipiscing elit sed do tempor labor dolore magna&hellip;</div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-blog-style-1 col-xl-4 col-md-6">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/blog-blog-new-02.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="pbmit-meta-date-wrapper">
                                    <span>18 Jun 2021</span>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-author-wrapper pbmit-meta-line">
                                        <a href="blog-classic.html" title="Posted admin" rel="author"> admin</a>
                                    </div>
                                    <div class="pbmit-meta-comment-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <div class="pbmit-comment-wrapper">
                                                <span class="pbmit-meta pbmit-meta-comments">3
                                                <span class="pbmit-meta pbmit-comments-hide">Comments</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-details.html">MODERN STEEL FOR APPARATUS MIX &amp; FILLING CONSTRUCTION</a>
                                </h3>
                                <div class="pbminfotech-box-desc">Consectetur adipiscing elit sed do tempor labor dolore magna&hellip;</div>
                            </div>
                        </div>
                    </article>
                    <div class="col-xl-4 col-md-12">
                        <div class="blog-right-one">
                            <div class="row">
                                <article class="pbmit-blog-style-2 col-xl-12 col-md-6">
                                    <div class="post-item">
                                        <div class="pbmit-featured-container">
                                            <div class="pbmit-meta-date-wrapper">
                                                <span>29 Jun 2021</span>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <div class="pbmit-meta-container">
                                                <div class="pbmit-meta-author-wrapper pbmit-meta-line">
                                                    <a href="blog-classic.html" title="Posted admin" rel="author"> admin</a>
                                                </div>
                                                <div class="pbmit-meta-comment-wrapper pbmit-meta-line">
                                                    <div class="pbmit-meta-category">
                                                    <div class="pbmit-comment-wrapper">
                                                        <span class="pbmit-meta pbmit-meta-comments">3
                                                        <span class="pbmit-meta pbmit-comments-hide">Comments</span></span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbmit-post-title">
                                                <a href="blog-single-details.html">We provide Asset Management and Monitoring System</a>
                                            </h3>
                                        </div>
                                    </div>
                                </article>
                                <article class="pbmit-blog-style-2 col-xl-12 col-md-6">
                                    <div class="post-item">
                                        <div class="pbmit-featured-container">
                                            <div class="pbmit-meta-date-wrapper">
                                                <span>18 Jun 2021</span>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <div class="pbmit-meta-container">
                                                <div class="pbmit-meta-author-wrapper pbmit-meta-line">
                                                    <a href="blog-classic.html" title="Posted admin" rel="author"> admin</a>
                                                </div>
                                                <div class="pbmit-meta-comment-wrapper pbmit-meta-line">
                                                    <div class="pbmit-meta-category">
                                                    <div class="pbmit-comment-wrapper">
                                                        <span class="pbmit-meta pbmit-meta-comments">3
                                                        <span class="pbmit-meta pbmit-comments-hide">Comments</span></span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="pbmit-post-title">
                                                <a href="blog-single-details.html">MODERN STEEL FOR APPARATUS MIX &amp; FILLING CONSTRUCTION</a>
                                            </h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="blog-grid-view.html" class="pbmit-btn pbmit-btn-shape-round pbmit-btn-outline">
                            <span>View All blogs</span>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Blog End -->

    </div>
    <!-- Page Content End -->
@endsection


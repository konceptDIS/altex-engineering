@extends('layout.app', [$activePage = 'Contact'])

@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title"> Contact Us</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="index.html" class="home"><span>HOME</span></a></span>
                            <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                            <span><span class="post-root post post-post current-item">Contact Us</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">
        <!-- Contact Start -->
        <section class="section-xt">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="pbmit-heading-subheading">
                            <h2 class="pbmit-title">You can connect with us, we are ready to help!</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-heading-desc" style="margin-bottom: 20px;">
                            The engineering industry is cost, personnel, quality, and time intensive. The effective maximization of these aspects leads to reduced production cost and increased company profits. This informs the need for effective project management to enable organizations effectively combine the technical and non-technical aspects of operations and management to result in excellent service delivery. With over 15 years of experience, we are sure to bring your idea to life.
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="container g-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <div class="contact-ihbox">
                                <div class="pbmit-ihbox pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i class="pbmit-industrey-icon pbmit-industrey-icon-location"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title"> Our Location</h2>
                                            <div class="pbmit-heading-desc">No. 6c Rudolf Close, Off Katsina Ala Crescent, Maitama, Abuja.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i class="pbmit-industrey-icon pbmit-industrey-icon-telephone"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title"> PHONE NUMBER</h2>
                                            <div class="pbmit-heading-desc">
                                                +234 (0) 810 388 0336 <br>
                                                +234 (0) 905 320 0000 <br>
                                                +234 (0) 909 996 6648
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i class="pbmit-industrey-icon pbmit-industrey-icon-email"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title"> EMAIL ADDRESS </h2>
                                            <div class="pbmit-heading-desc">
                                                <a href="#" class="__cf_email__ text-white">info@altexengineering.net</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form class="contact-form-single form-style-2" method="post" id="contact-form" action="send.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="number" class="form-control" placeholder="Your Number" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="department" class="form-select">
                                            <option value="Mechanical" selected>Mechanical</option>
                                            <option value="Petroleum &amp; Gas">Petroleum &amp; Gas</option>
                                            <option value="Constructions">Constructions</option>
                                            </select>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" cols="40" rows="5" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <button type="submit" class="pbmit-btn pbmit-btn-shape-round w-100">
                                            <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                    <div class="col-md-12 col-lg-12 message-status"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-client-section">
                <div class="container g-0">
                    <div class="row">
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
                                                    <img src="images/client-client-dark-06.png" class="img-fluid" alt="">
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
                                                    <img src="images/client-client-dark-05.png" class="img-fluid" alt="">
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
                                                    <img src="images/client-client-dark-04.png" class="img-fluid" alt="">
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
                                                    <img src="images/client-client-dark-03.png" class="img-fluid" alt="">
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
                                                    <img src="images/client-client-dark-02.png" class="img-fluid" alt="">
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
                                                    <img src="images/client-client-dark-01.png" class="img-fluid" alt="">
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
        <!-- Contact End -->

    </div>
    <!-- Page Content End -->
@endsection

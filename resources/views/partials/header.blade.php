<!-- Header Main Area -->
<header class="site-header header-style-1">
    <div class="pbmit-header-overlay">
        <div class="pre-header">
            <div class="container">
                <div class="d-flex align-items-center">
                   <div class="site-branding pbmit-logo-area">
                      <div class="wrap">
                         <h1 class="site-title">
                            <a href="index.html" rel="home">
                                <span class="site-title-text">Altex Engineering</span>
                                <img class="pbmit-main-logo" src="images/logo-light.png" alt="Altex Engineering" title="Altex Engineering">
                            </a>
                        </h1>
                      </div>
                   </div>
                   <div class="pbmit-header-info ml-auto">
                      <div class="pbmit-header-info-inner">
                         <div class="pbmit-header-box pbmit-header-box-1">
                            <a href="#">
                                <span class="pbmit-header-box-icon">
                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-world"></i>
                                </span>
                                <span class="pbmit-header-box-title">Our Location</span>
                                <span class="pbmit-header-box-content">No. 6c Rudolf Close, Maitama</span>
                            </a>
                         </div>
                         <div class="pbmit-header-box pbmit-header-box-2">
                            <a href="#">
                                <span class="pbmit-header-box-icon">
                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-send"></i>
                                </span>
                                <span class="pbmit-header-box-title">E-mail Address</span>
                                <span class="pbmit-header-box-content"><span class="__cf_email__">info@altexengineering.net</span></span>
                            </a>
                         </div>
                         <div class="pbmit-header-box pbmit-header-box-3">
                            <a href="#">
                                <span class="pbmit-header-box-icon">
                                    <i class="pbmit-industrey-icon pbmit-industrey-icon-telephone"></i>
                                </span>
                                <span class="pbmit-header-box-title">Hot Line</span>
                                <span class="pbmit-header-box-content">+(234) 810 388 0336</span>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
        </div>
        <div class="site-header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between header-menu-area">
                            <div class="site-branding">
                                <span class="site-title">
                                    <a href="index.html">
                                        <img class="pbmit-sticky-logo" src="images/logo.png" alt="Altex Engineering" title="Altex Engineering">
                                    </a>
                                </span>
                            </div>
                            <div class="site-navigations">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <i class="pbmit-base-icon-cancel"></i>
                                            </span>
                                            <ul class="navigation clearfix">
                                                <li class="{{$activePage == 'Home' ? 'active' : ''}}">
                                                    <a href="{{route('home')}}">Home</a>
                                                </li>
                                                <li class="{{$activePage == 'About' ? 'active' : ''}}">
                                                    <a href="{{route('about')}}">About Us</a>
                                                </li>
                                                <li class="{{$activePage == 'Services' ? 'active' : ''}}">
                                                    <a href="{{route('services')}}">Services</a>
                                                </li>
                                                {{-- <li class="dropdown">
                                                    <a href="#">Projects</a>
                                                    <ul>
                                                        <li><a href="project-style-1.html">Project Style 1</a></li>
                                                        <li><a href="project-style-2.html">Project Style 2</a></li>
                                                        <li><a href="project-style-3.html">Project Style 3</a></li>
                                                        <li><a href="project-single-details.html">Project Single Details</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li class="{{$activePage == 'Contact' ? 'active' : ''}}">
                                                    <a href="{{route('contact')}}">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="pbmit-right-side">
                                <div class="pbmit-header-search-btn">
                                    <a href="#">
                                        <i class="pbmit-base-icon-search-1"></i>
                                    </a>
                                </div>
                                <div class="pbmit-header-button">
                                    <a href="{{route('contact')}}" class="pbmit-btn">
                                        <span>Get a quote</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($activePage == 'Home')
            <ul class="pbmit-social-links">
                <li class="pbmit-social-li pbmit-social-facebook">
                    <a href="#" target="_blank">
                        <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                    </a>
                </li>
                <li class="pbmit-social-li pbmit-social-twitter">
                    <a href="#" target="_blank">
                        <span><i class="pbmit-base-icon-twitter"></i></span>
                    </a>
                </li>
                <li class="pbmit-social-li pbmit-social-instagram">
                    <a href="#" target="_blank">
                        <span><i class="pbmit-base-icon-instagram"></i></span>
                    </a>
                </li>
                <li class="pbmit-social-li pbmit-social-youtube">
                    <a href="#" target="_blank">
                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                    </a>
                </li>
            </ul>
        @endif
    </div>
    @if ($activePage == 'Home')
        <div class="pbmit-slider-area">
            <!-- START SliderDemo1 REVOLUTION SLIDER 6.5.20 --><p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="slider-demo-1" data-source="gallery" style="visibility:hidden;background:#efeeee;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_1_1" data-version="6.5.20">
                    <rs-slides>
                        <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide" data-thumb="revolution/images/slider01-img1-new-50x100.jpg" data-in="o:0;" data-out="a:false;">
                            <img src="images/bg-1.png" alt="" title="slider01-img1-new" width="1920" height="820" class="rev-slidebg tp-rs-img" data-bg="p:right top;" data-no-retina>
                            <!--
                            --><rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:-145px,-156px,-110px,-81px;" data-text="w:normal;s:24,22,20,18;l:24,19,20,18;ls:5px,4px,3px,1px;fw:500;a:center;" data-frame_0="y:50,41,31,19;" data-frame_1="st:1150;sp:1000;sR:1150;" data-frame_999="o:0;st:w;sR:6850;" style="z-index:8;font-family:'Teko';text-transform:uppercase;">Construction, Engineering, Alternative Energy Solutions
                            </rs-layer><!--

                            --><rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:12px,-25px,-1px,-7px;" data-text="w:normal;s:250,210,160,100;l:250,210,160,100;ls:30px,24px,18px,11px;fw:600;a:center;" data-frame_0="x:50,41,31,19;" data-frame_1="st:1840;sp:1000;sR:1840;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:'Teko';text-transform:uppercase;">Quality
                            </rs-layer><!--

                            --><a id="slider-1-slide-1-layer-4" class="rs-layer rev-button rev-btn" href="{{route('contact')}}" target="_self" data-type="button" data-rsp_ch="on" data-xy="x:c;y:m;yo:200px,132px,101px,74px;" data-text="w:normal;s:18;l:60,55,55,50;ls:1px,1px,1px,0px;fw:500;a:center;" data-dim="minh:0px,none,none,none;" data-padding="t:4,5,5,5;r:50,42,40,35;l:50,42,40,35;" data-border="bor:0px,25px,0px,0px;" data-frame_0="y:50,41,31,19;" data-frame_1="st:3120;sp:1000;sR:3120;" data-frame_999="o:0;st:w;sR:4880;" data-frame_hover="bgc:#111010;boc:#111010;bor:0px,25px,0px,0px;" style="z-index:11;background-color:#ffba07;font-family:'Teko';text-transform:uppercase;"><span>Contact Us</span>
                            </a><!--

                            --><rs-layer id="slider-1-slide-1-layer-7" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:126px,66px,50px,30px;" data-text="w:normal;s:36,32,24,14;l:40,32,24,14;ls:7px,5px,3px,1px;fw:700;a:center;" data-vbility="t,t,f,f" data-frame_0="y:50,41,31,19;" data-frame_1="st:2410;sp:1000;sR:2410;" data-frame_999="o:0;st:w;sR:5590;" style="z-index:10;font-family:'Yantramanav';">Is what we deliver to you.
                            </rs-layer><!--
                        -->
                        </rs-slide>
                        <rs-slide style="position: absolute;" data-key="rs-20" data-title="Slide" data-thumb="revolution/images/slider01-img2-50x100.jpg" data-in="o:0;" data-out="a:false;">
                            <img src="images/images-slider01-img2.jpg" alt="" title="slider01-img2" width="1920" height="820" class="rev-slidebg tp-rs-img" data-bg="p:right top;" data-no-retina>
                            <!--
                            --><rs-layer id="slider-1-slide-20-layer-1" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:-145px,-156px,-110px,-81px;" data-text="w:normal;s:24,22,20,18;l:24,19,20,18;ls:5px,4px,3px,1px;fw:500;a:center;" data-frame_0="y:50,41,31,19;" data-frame_1="st:1150;sp:1000;sR:1150;" data-frame_999="o:0;st:w;sR:6850;" style="z-index:8;font-family:'Teko';text-transform:uppercase;">Construction, Engineering, Alternative Energy Solutions
                            </rs-layer><!--

                            --><rs-layer id="slider-1-slide-20-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:12px,-25px,-1px,-7px;" data-text="w:normal;s:250,210,160,100;l:250,210,160,100;ls:30px,24px,18px,11px;fw:600;a:center;" data-frame_0="x:50,41,31,19;" data-frame_1="st:1840;sp:1000;sR:1840;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:'Teko';text-transform:uppercase;">Quality
                            </rs-layer><!--

                            --><a id="slider-1-slide-20-layer-4" class="rs-layer rev-button rev-btn" href="{{route('contact')}}" target="_self" data-type="button" data-rsp_ch="on" data-xy="x:c;y:m;yo:198px,132px,102px,69px;" data-text="w:normal;s:18;l:60,55,50,45;ls:1px,1px,1px,0px;fw:300;a:center;" data-dim="minh:0px,none,none,none;" data-padding="t:4,5,3,4;r:50,42,40,35;l:50,42,40,35;" data-border="bor:0px,25px,0px,0px;" data-frame_0="y:50,41,31,19;" data-frame_1="st:3120;sp:1000;sR:3120;" data-frame_999="o:0;st:w;sR:4880;" data-frame_hover="bgc:#111010;boc:#111010;bor:0px,25px,0px,0px;" style="z-index:11;background-color:#ffba07;font-family:'Teko';text-transform:uppercase;"><span>Contact Us</span>
                            </a><!--

                            --><rs-layer id="slider-1-slide-20-layer-7" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:127px,66px,50px,30px;" data-text="w:normal;s:36,32,24,14;l:40,32,24,14;ls:7px,5px,3px,1px;fw:700;a:center;" data-vbility="t,t,f,f" data-frame_0="y:50,41,31,19;" data-frame_1="st:2410;sp:1000;sR:2410;" data-frame_999="o:0;st:w;sR:5590;" style="z-index:10;font-family:'Yantramanav';">Is what we deliver to you.
                            </rs-layer><!--
                        -->
                        </rs-slide>
                        <rs-slide style="position: absolute;" data-key="rs-21" data-title="Slide" data-thumb="revolution/images/slider01-img3-50x100.jpg" data-in="o:0;" data-out="a:false;">
                            <img src="images/bg-3.jpeg" alt="" title="slider01-img3" width="1920" height="820" class="rev-slidebg tp-rs-img" data-bg="p:right top;" data-no-retina>
                            <!--
                            --><rs-layer id="slider-1-slide-21-layer-1" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:-145px,-156px,-110px,-81px;" data-text="w:normal;s:24,22,20,18;l:24,19,20,18;ls:5px,4px,3px,1px;fw:500;a:center;" data-frame_0="y:50,41,31,19;" data-frame_1="st:1150;sp:1000;sR:1150;" data-frame_999="o:0;st:w;sR:6850;" style="z-index:8;font-family:'Teko';text-transform:uppercase;">Construction, Engineering, Alternative Energy Solutions
                            </rs-layer><!--

                            --><rs-layer id="slider-1-slide-21-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:12px,-25px,-1px,-7px;" data-text="w:normal;s:250,210,160,100;l:250,210,160,100;ls:30px,24px,18px,11px;fw:600;a:center;" data-frame_0="x:50,41,31,19;" data-frame_1="st:1840;sp:1000;sR:1840;" data-frame_999="o:0;st:w;sR:6160;" style="z-index:9;font-family:'Teko';text-transform:uppercase;">Quality
                            </rs-layer><!--

                            --><a id="slider-1-slide-21-layer-4" class="rs-layer rev-button rev-btn" href="{{route('contact')}}" target="_self" data-type="button" data-rsp_ch="on" data-xy="x:c;y:m;yo:198px,132px,102px,69px;" data-text="w:normal;s:18;l:60,55,50,45;ls:1px,1px,1px,0px;fw:300;a:center;" data-dim="minh:0px,none,none,none;" data-padding="t:4,5,3,4;r:50,42,40,35;l:50,42,40,35;" data-border="bor:0px,25px,0px,0px;" data-frame_0="y:50,41,31,19;" data-frame_1="st:3120;sp:1000;sR:3120;" data-frame_999="o:0;st:w;sR:4880;" data-frame_hover="bgc:#111010;boc:#111010;bor:0px,25px,0px,0px;" style="z-index:11;background-color:#ffba07;font-family:'Teko';text-transform:uppercase;"><span>Contact Us</span>
                            </a><!--

                            --><rs-layer id="slider-1-slide-21-layer-7" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:127px,66px,50px,30px;" data-text="w:normal;s:36,32,24,14;l:40,32,24,14;ls:7px,5px,3px,1px;fw:700;a:center;" data-vbility="t,t,f,f" data-frame_0="y:50,41,31,19;" data-frame_1="st:2410;sp:1000;sR:2410;" data-frame_999="o:0;st:w;sR:5590;" style="z-index:10;font-family:'Yantramanav';">Is what we deliver to you.
                            </rs-layer><!--
                        -->
                        </rs-slide>
                    </rs-slides>
                </rs-module>
            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
        </div>
    @endif
</header>
<!-- Header Main Area End Here -->

<!-- Search Box Start Here -->
<div class="pbmit-search-overlay">
    <div class="pbmit-icon-close"></div>
    <div class="pbmit-search-outer">
        <form class="pbmit-site-searchform">
            <input type="search" class="form-control field searchform-s" name="s" placeholder="Search &hellip;">
            <button type="submit">
                <i class="pbmit-base-icon-search-1"></i>
            </button>
        </form>
    </div>
</div>
<!-- Search Box End Here -->

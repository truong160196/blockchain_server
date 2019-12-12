@extends('layout_user.main')

@section('page_title')
    Home
@endsection

@section('css')
{{--    <link href="{{asset('assets/css_admin/dashboard.css')}}" rel="stylesheet">--}}
@endsection

@section('page_content')

<!-- start page-wrapper -->
<div class="page-wrapper">

    {{--<!-- start preloader -->--}}
    {{--<div class="preloader">--}}
        {{--<div class="sk-folding-cube">--}}
            {{--<div class="sk-cube1 sk-cube"></div>--}}
            {{--<div class="sk-cube2 sk-cube"></div>--}}
            {{--<div class="sk-cube4 sk-cube"></div>--}}
            {{--<div class="sk-cube3 sk-cube"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- end preloader -->--}}

    <!-- Start header -->
    <header id="header" class="site-header header-style-1">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-4">
                        <div class="social">
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Help Desk</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="social center">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="text">
                            <p> <a href=""><span>Join Us</span></a> </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="index-2.html">Home Style 2</a></li>
                                <li><a href="index-3.html">Home Style 3</a></li>
                                <li><a href="index-4.html">Home Style 4</a></li>
                                <li><a href="index-5.html">Home Style 5</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Causes</a>
                            <ul class="sub-menu">
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="causes-s2.html">Causes style 2</a></li>
                                <li><a href="causes-single.html">Causes single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Volunteer</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="testimonials-s2.html">Testimonials style 2</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Event</a>
                            <ul class="sub-menu">
                                <li><a href="event.html">Event</a></li>
                                <li><a href="event-s2.html">Event style 2</a></li>
                                <li><a href="event-single.html">Event single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="projects-s2.html">Projects style 2</a></li>
                                <li><a href="project-single.html">Project single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-fullwidth.html">Blog full width</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#Level3">Blog Details</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single.html">Blog Single Default</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Blog single left sidebar</a></li>
                                        <li><a href="blog-single-fullwidth.html">Blog single full width</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->

                <div class="search-contact">
                    <div class="header-search-area">
                        <div class="header-search-form">
                            <form class="form">
                                <div>
                                    <input type="text" class="form-control" placeholder="Search here">
                                </div>
                                <button type="submit" class="btn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <div>
                            <button class="btn open-btn"><i class="ti-search"></i></button>
                        </div>
                    </div>
                    <div class="contact">
                        <a href="#" class="theme-btn">Donate Now</a>
                    </div>
                </div>
                <div class="separator"></div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->


    <!-- start of hero -->
    <section class="hero-slider hero-style-1">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-1.jpg">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Small Effort Make Big Change.</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Every day we bring hope to millions of children in the world's   hardest places as a sign of God's unconditional love</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s2">Donate Now</a>
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="hero-video-btn video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button"></i>Watch About</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-2.jpg">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Help The Poor For Their Better Future </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Every day we bring hope to millions of children in the world's   hardest places as a sign of God's unconditional love.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s2">Donate Now</a>
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="hero-video-btn video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button"></i>Watch About</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start features-section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="feature-grids clearfix">
                        <div class="grid">
                            <div class="header">
                                <img src="assets/images/add/f1.png" alt="">
                            </div>
                            <div class="details">
                                <h3>Healp The Child</h3>
                                <p>We connects nonprofits, donors, and companies in nearly every country around.</p>
                                <a href="#" class="read-more">Join us Now</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="header">
                                <img src="assets/images/add/f4.png" alt="">
                            </div>
                            <div class="details">
                                <h3>Become a Volunteer</h3>
                                <p>We connects nonprofits, donors, and companies in nearly every country around.</p>

                                <a href="#" class="read-more">Join us Now</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="header">
                                <img src="assets/images/add/f2.png" alt="">
                            </div>
                            <div class="details">
                                <h3>Get Involved</h3>
                                <p>We connects nonprofits, donors, and companies in nearly every country around.</p>
                                <a href="#" class="read-more">Join us Now</a>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="header">
                                <img src="assets/images/add/f3.png" alt="">
                            </div>
                            <div class="details">
                                <h3>Emergency Case</h3>
                                <p>We connects nonprofits, donors, and companies in nearly every country around.</p>
                                <a href="#" class="read-more">Join us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end features-section -->


    <!-- start case-studies-section -->
    <section class="recent-blog-section bg-w section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 mar-bot-20 recent-cases-thumbs">
                    <div class="recent-cases-thumbs-outer">
                        <h2>Join  <span class="theme_color">our event &amp;</span> helping us by donation</h2>
                        <div class="recent-case-thumb " data-case="#case-content-1">
                            <div class="content">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/project-single/img-2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Gear up for giving</a></h4>
                                        <span class="date"><i class="ti-timer"></i> at 5.00 pm - 7.30 pm</span>
                                        <br>
                                        <span class="date"><i class="ti-timer"></i>  25 Newyork City.</span>
                                    </div>
                                </div>
                                <div class="dates">
                                    <p>16 <span>Feb</span></p>
                                </div>
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <h3>Gear up for giving</h3>
                                </div>
                            </div>
                        </div>
                        <div class="recent-case-thumb" data-case="#case-content-2">
                            <div class="content">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/project-single/img-3.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#"> Foods For Poor</a></h4>
                                        <span class="date"><i class="ti-timer"></i> at 5.00 pm - 7.30 pm</span>
                                        <br>
                                        <span class="date"><i class="ti-timer"></i>  25 Newyork City.</span>
                                    </div>
                                </div>
                                <div class="dates">
                                    <p>17 <span>Feb</span></p>
                                </div>
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <h3>Foods For Poor</h3>
                                </div>
                            </div>
                        </div>
                        <div class="recent-case-thumb" data-case="#case-content-3">
                            <div class="content">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/project-single/img-4.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Save The Water</a></h4>
                                        <span class="date"><i class="ti-timer"></i> at 5.00 pm - 7.30 pm</span>
                                        <br>
                                        <span class="date"><i class="ti-timer"></i>  25 Newyork City.</span>
                                    </div>
                                </div>
                                <div class="dates">
                                    <p>23 <span>Feb</span></p>
                                </div>
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <h3> Save The Water</h3>
                                </div>
                            </div>
                        </div>
                        <div class="recent-case-thumb" data-case="#case-content-4">
                            <div class="content">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/project-single/img-5.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Help The Children</a></h4>
                                        <span class="date"><i class="ti-timer"></i> at 5.00 pm - 7.30 pm</span>
                                        <br>
                                        <span class="date"><i class="ti-timer"></i>  25 Newyork City.</span>
                                    </div>
                                </div>
                                <div class="dates">
                                    <p>27 <span>Feb</span></p>
                                </div>
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <h3>Help The Children</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 mar-bot-20 recent-cases-content">
                    <div class="recent-cases-content-outer">
                        <div class="recent-case-data active-case-data" id="case-content-1">
                            <img src="assets/images/portfolio/img-1.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="75"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                        <div class="recent-case-data" id="case-content-2">
                            <img src="assets/images/portfolio/img-2.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="45"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                        <div class="recent-case-data" id="case-content-3">
                            <img src="assets/images/portfolio/img-3.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="85"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                        <div class="recent-case-data" id="case-content-4">
                            <img src="assets/images/portfolio/img-4.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="35"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 mar-bot-20">
                    <div class=" event-slider">
                        <div class="slider">
                            <img src="assets/images/portfolio/img-3.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="55"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                        <div class="slider">
                            <img src="assets/images/portfolio/img-2.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="75"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                        <div class="slider">
                            <img src="assets/images/portfolio/img-5.jpg" alt="" />
                            <div class="content-meta">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="75"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                                <div class="meta">
                                    <div class="goal">
                                        <p> Goal : <span class="color-yeollo">17000$</span></p>
                                    </div>
                                    <div class="raised">
                                        <p> Raised <span class="color-green">8000$</span></p>
                                    </div>
                                </div>
                                <p class="talk">We are charity, non-profit, fundraising, NGO organizations. Our activities are taken place around the world, let contribute to them with us</p>
                                <a href="#" class="theme-btn-s4">Donate Now</a>
                                <a href="#" class="theme-btn-s5">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end case-studies-section -->


    <!-- start about-section -->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="grid-left">
                        <div class="details">
                            <h3><a href="#">Warmth <span class="color-yeollo"> & True Support </span> For Needed People </a></h3>

                        </div>
                        <div class="img-holder">
                            <img src="assets/images/about/about.jpg" alt>
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="grid-right">
                        <div class="img-holder-2">
                            <img src="assets/images/about/img-1.jpg" alt>
                        </div>
                        <div class="details">

                            <h3><a href="#">Over <span class="color-yeollo">250 Million</span>  Children Around The World Are <span>Out Of School.</span> </a></h3>
                            <p>Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                            <a href="#" class="theme-btn-s2">Read More About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-section -->

    <!-- start cta-section-s2 -->
    <section class="cta-section-s2 cta-layer cta-bg">
        <div class="container ">
            <div class="row">
                <div class="col col-lg-10 col-sm-8">
                    <div class="text">
                        <h2>Join your hand with us for a better life and  beautiful future</h2>
                    </div>
                    <div class="icon">
                        <img src="assets/images/add/c-1.png" alt="">
                    </div>
                </div>
                <div class="col col-lg-2 col-sm-4">
                    <div class="contact-info">

                        <a href="#" class="theme-btn-s7">Join with us</a>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta-section-s2 -->

    <!-- start recent-project-section -->
    <section class="recent-project-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3">
                    <div class="section-title-s3">
                        <span>See Recent Work</span>
                        <h2>Recent Case Studies</h2>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->

        <div class="content-area">
            <div class="case-grids projects-slider">
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-1.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="content-meta">
                        <div class="skills">
                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="75"></div>
                                </div>
                            </div>
                        </div>
                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-2.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="content-meta">
                        <div class="skills">

                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="95"></div>
                                </div>
                            </div>
                        </div>
                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-3.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="content-meta">
                        <div class="skills">

                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="95"></div>
                                </div>
                            </div>
                        </div>

                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-4.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="content-meta">
                        <div class="skills">

                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="95"></div>
                                </div>
                            </div>
                        </div>

                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-5.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="content-meta">
                        <div class="skills">

                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="95"></div>
                                </div>
                            </div>
                        </div>

                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-2.jpg" alt>
                        </div>
                        <div class="details">
                            <div class="info">
                                <h3><a href="#">Save the children</a></h3>
                                <p class="cat"> <a href="">Vew Details</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="content-meta">
                        <div class="skills">

                            <div class="skill">
                                <div class="progress">
                                    <div class="progress-bar" data-percent="95"></div>
                                </div>
                            </div>
                        </div>

                        <h3><a href="#">Supply Quality Foods To Africa's Village Area</a> </h3>
                        <div class="meta">
                            <div class="goal">
                                <p> Goal : <span class="color-yeollo">17000$</span></p>
                            </div>
                            <div class="raised">
                                <p> Raised <span class="color-green">8000$</span></p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn-s4">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent-project-section -->


    <!-- start fun-fact-section -->
    <section class="fun-fact-section section-padding pt0">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Doing the right thing, at the right time.</h2>
                    <div class="fun-fact-grids clearfix">
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="250">00</span>+</h3>
                                <p>Delivered Packages</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="177">00</span>+</h3>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="130">00</span>+</h3>
                                <p>Countries Covered</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="100">00</span>%</h3>
                                <p>Satisfied customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact-section -->


    <!-- start team-section -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3">
                    <div class="section-title-s3">
                        <span>Members</span>
                        <h2>Our Volunteers</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-1.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Jodra Adil</h3>
                                <span>Managing Director</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-2.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Willum Biala</h3>
                                <span>Site Manager</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-3.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Sahim Mcildi</h3>
                                <span>Testing Manager</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-4.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Jhain dow</h3>
                                <span>Cheif Officer</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-5.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Jodra Adil</h3>
                                <span>Managing Director</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-6.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Willum Biala</h3>
                                <span>Site Manager</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-7.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Sahim Mcildi</h3>
                                <span>Testing Manager</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/images/team/img-8.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Jhain dow</h3>
                                <span>Cheif Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end team-section -->


    <!-- start donat-contact -->
    <section class="donat-contact fun-bg-1 layer-blue">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="track-trace-quote-form clearfix">
                        <div class="track-trace">
                            <h2>Make a Donation Now</h2>
                            <h3>Payment Type</h3>
                            <div class="donat-single-tab">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#onetime" data-toggle="tab">One time</a>
                                    </li>
                                    <li>
                                        <a href="#recurring" data-toggle="tab">Recurring</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="onetime">
                                        <form>
                                            <div>
                                                <label for="want">I Want to Donate for</label>
                                                <select id="want" class="form-control">
                                                    <option>Educate Children</option>
                                                    <option>Child Camps</option>
                                                    <option>Clean Water for Life</option>
                                                    <option>Campaign for Child Poverty</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="currency">Currency</label>
                                                <select id="currency" class="form-control">
                                                    <option value="USD" selected="selected">USD - U.S. Dollars</option>
                                                    <option value="AUD">AUD - Australian Dollars</option>
                                                    <option value="BRL">BRL - Brazilian Reais</option>
                                                    <option value="GBP">GBP - British Pounds</option>
                                                    <option value="HKD">HKD - Hong Kong Dollars</option>
                                                    <option value="HUF">HUF - Hungarian Forints</option>
                                                    <option value="INR">INR - Indian Rupee</option>
                                                    <option value="ILS">ILS - Israeli New Shekels</option>
                                                    <option value="JPY">JPY - Japanese Yen</option>
                                                    <option value="MYR">MYR - Malaysian Ringgit</option>
                                                    <option value="MXN">MXN - Mexican Pesos</option>
                                                    <option value="TWD">TWD - New Taiwan Dollars</option>
                                                    <option value="NZD">NZD - New Zealand Dollars</option>
                                                    <option value="NOK">NOK - Norwegian Kroner</option>
                                                    <option value="PHP">PHP - Philippine Pesos</option>
                                                    <option value="PLN">PLN - Polish Zlotys</option>
                                                    <option value="RUB">RUB - Russian Rubles</option>
                                                    <option value="SGD">SGD - Singapore Dollars</option>
                                                    <option value="SEK">SEK - Swedish Kronor</option>
                                                    <option value="CHF">CHF - Swiss Francs</option>
                                                    <option value="THB">THB - Thai Baht</option>
                                                    <option value="TRY">TRY - Turkish Liras</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="donate">How much do you want to donate?</label>
                                                    <select id="donate" class="form-control">
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="500">500</option>
                                                        <option value="other">Other Amount</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="submit-btn mar-top-30">Donat Now</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="recurring">
                                        <label><strong>Donation Type</strong></label>
                                        <div class="radio mt-5">
                                            <label class="radio-inline">
                                                <input type="radio" value="D" name="t3" checked=""> Daily
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="W" name="t3"> Weekly
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="M" name="t3"> Monthly
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Y" name="t3"> Yearly
                                            </label>
                                        </div>
                                        <form>
                                            <div>
                                                <label for="want">I Want to Donate for</label>
                                                <select id="want" class="form-control">
                                                    <option>Educate Children</option>
                                                    <option>Child Camps</option>
                                                    <option>Clean Water for Life</option>
                                                    <option>Campaign for Child Poverty</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="currency">Currency</label>
                                                <select id="currency" class="form-control">
                                                    <option value="USD" selected="selected">USD - U.S. Dollars</option>
                                                    <option value="AUD">AUD - Australian Dollars</option>
                                                    <option value="BRL">BRL - Brazilian Reais</option>
                                                    <option value="GBP">GBP - British Pounds</option>
                                                    <option value="HKD">HKD - Hong Kong Dollars</option>
                                                    <option value="HUF">HUF - Hungarian Forints</option>
                                                    <option value="INR">INR - Indian Rupee</option>
                                                    <option value="ILS">ILS - Israeli New Shekels</option>
                                                    <option value="JPY">JPY - Japanese Yen</option>
                                                    <option value="MYR">MYR - Malaysian Ringgit</option>
                                                    <option value="MXN">MXN - Mexican Pesos</option>
                                                    <option value="TWD">TWD - New Taiwan Dollars</option>
                                                    <option value="NZD">NZD - New Zealand Dollars</option>
                                                    <option value="NOK">NOK - Norwegian Kroner</option>
                                                    <option value="PHP">PHP - Philippine Pesos</option>
                                                    <option value="PLN">PLN - Polish Zlotys</option>
                                                    <option value="RUB">RUB - Russian Rubles</option>
                                                    <option value="SGD">SGD - Singapore Dollars</option>
                                                    <option value="SEK">SEK - Swedish Kronor</option>
                                                    <option value="CHF">CHF - Swiss Francs</option>
                                                    <option value="THB">THB - Thai Baht</option>
                                                    <option value="TRY">TRY - Turkish Liras</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="donate">How much do you want to donate?</label>
                                                    <select id="donate" class="form-control">
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="500">500</option>
                                                        <option value="other">Other Amount</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="submit-btn mar-top-30">Donat Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <p>NB: Sometime it may be take few time, please wait.</p>
                        </div>
                        <div class="quote-form">
                            <h2>Become a Volunteer </h2>
                            <p>It only takes a minute to set up a campaign. Decide what to do. Pick a name. Pick a photo. And just like that, you’ll be ready to start raising money.</p>
                            <form>
                                <div>
                                    <label>Personal Information</label>
                                    <input type="text" class="form-control" placeholder="Enter Name :">
                                    <input type="email" class="form-control" placeholder="Enter Email :">
                                    <select id="shipment2" class="form-control">
                                        <option selected disabled>Sex</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <select id="shipment2" class="form-control">
                                        <option selected disabled>Choose Branch </option>
                                        <option>UK</option>
                                        <option>Canada</option>
                                        <option>Austrilia</option>
                                        <option>Honkong</option>
                                        <option>Pakistan</option>
                                        <option>Srilonka</option>
                                        <option>France</option>
                                        <option>Jerman</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea class="form-control" name="note" id="note" placeholder="Write a Message ..."></textarea>
                                </div>
                                <div>
                                    <label>Shipment Information</label>
                                    <div class="form-group">
                                        <label for="form_attachment">C/V Upload</label>
                                        <input id="form_attachment" name="form_attachment" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
                                        <small>Maximum upload file size: 12 MB</small>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="submit-btn">Apply Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end donat-contact -->

    <!-- start project-section-s2 -->
    <section class="project-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col col-lg-6 col-lg-offset-3">
                    <div class="section-title-s3">
                        <span>Recently Finished</span>
                        <h2>Featured Projects</h2>
                    </div>
                </div>
                <div class="col col-xs-12">
                    <div class="sortable-grids">
                        <div class="grids-filters isotope-filter-center">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".building" href="#">Child</a></li>
                                <li><a data-filter=".interior" href="#">Charity</a></li>
                                <li><a data-filter=".commercial" href="#">Volunteering</a></li>
                                <li><a data-filter=".residential" href="#">Sponsorship</a></li>
                                <li><a data-filter=".plants" href="#">Plants</a></li>
                            </ul>
                        </div>
                        <div class="projects-grids grids-container">
                            <div class="grid interior commercial">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-1.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid building residential">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-2.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid interior residential">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-3.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid building commercial">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-4.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-4.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid residential plants">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-5.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-5.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid commercial ">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-1.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid residential plants">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-5.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-5.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid building commercial plants">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-4.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-4.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                            <div class="grid interior commercial">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/img-1.jpg" class="fancybox"><i class="ti-move"></i></a>
                                    <img src="assets/images/portfolio/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end project-section-s2 -->

    <!--  start meta-blog-section -->
    <section class="meta-blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s2">
                        <span>Our Blogs</span>
                        <h2>Recent News </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/blog/img-8.jpg" alt>
                            </div>
                            <div class="date">
                                <p>16 <span>Jul</span></p>
                            </div>
                            <div class="details">
                                <h3><a href="#">A single person can change million lives</a></h3>
                                <div class="meta">
                                    <ul >
                                        <li><a href="#"><i class="ti-comment"></i> 5 Comment </a></li>
                                        <li><a href="#"><i class="ti-heart"></i> 9 Love </a></li>
                                    </ul>
                                </div>
                                <p>We are confident to confirm that all members in Charity are professionals in <br> the charity. Donate Fund club .</p>
                                <div class="view-all">
                                    <a href="#">Read More </a>
                                </div>

                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/blog/img-9.jpg" alt>
                            </div>
                            <div class="date">
                                <p>16 <span>Jul</span></p>
                            </div>
                            <div class="details">
                                <h3><a href="#">Donate your woolens this winter </a></h3>
                                <div class="meta">
                                    <ul >
                                        <li><a href="#"><i class="ti-comment"></i> 5 Comment </a></li>
                                        <li><a href="#"><i class="ti-heart"></i> 9 Love </a></li>
                                    </ul>
                                </div>
                                <p>We are confident to confirm that all members in Charity are professionals in <br> the charity. Donate Fund club .</p>

                                <div class="view-all">
                                    <a href="#">Read More </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/blog/img-10.jpg" alt>
                            </div>
                            <div class="date">
                                <p>16 <span>Jul</span></p>
                            </div>
                            <div class="details">
                                <h3><a href="#">How to survive the tough path of life</a></h3>
                                <div class="meta">
                                    <ul >
                                        <li><a href="#"><i class="ti-comment"></i> 5 Comment </a></li>
                                        <li><a href="#"><i class="ti-heart"></i> 9 Love </a></li>
                                    </ul>
                                </div>
                                <p>We are confident to confirm that all members in Charity are professionals in <br> the charity. Donate Fund club .</p>

                                <div class="view-all">
                                    <a href="#">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end meta-blog-section -->


    <!-- start testimonials-section -->
    <section class="testimonials-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3">
                    <div class="section-title-s3">
                        <span>Testimonials</span>
                        <h2>Our Donors say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonial-grids clearfix">
                        <div class="grid">
                            <div class="client-info">
                                <div class="img-holder">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h5>Jhon dow</h5>
                                    <p>Shipment CEO</p>
                                </div>
                            </div>
                            <div class="quote">
                                <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-info">
                                <div class="img-holder">
                                    <img src="assets/images/testimonials/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h5>Alaska</h5>
                                    <p>Business Officer</p>
                                </div>
                            </div>
                            <div class="quote">
                                <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-info">
                                <div class="img-holder">
                                    <img src="assets/images/testimonials/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h5>Shain on</h5>
                                    <p>Shiping Manager</p>
                                </div>
                            </div>
                            <div class="quote">
                                <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end testimonials-section -->



    <!-- start partners-section -->
    <section class="partners-section">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partner-grids partners-slider">
                        <div class="grid">
                            <img src="assets/images/partners/img-1.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/img-2.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/img-3.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/img-4.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/img-5.png" alt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
        </div> <!-- end container -->
    </section>
    <!-- end partners-section -->

    <!-- start site-footer -->
    <footer class="site-footer bg-img-1">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <img src="assets/images/logo.png" alt>
                            </div>
                            <p>DonateFund is a library of Crowdfunding and Charity templates with predefined elements which helps you to build your own site. ibrary of Crowdfunding and Charity templates with predefined .</p>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Causes</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Faq & News</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Donor Policy</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Copyright Notice</a></li>
                                <li><a href="#">Media Center</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget-title">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="widget instagram-widget">
                            <ul>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-1.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-2.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-3.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-4.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-5.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-6.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-7.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-8.png" alt="" class="img img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/add/flickr-thumb-9.png" alt="" class="img img-responsive"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget contact-widget service-link-widget  newsletter-widget">
                            <div class="widget-title">
                                <h3>Our Address</h3>
                            </div>
                            <ul>
                                <li>19/11 New town avene, new Dusting, Canada</li>
                                <li><span>Phone:</span> 12347541</li>
                                <li><span>Email:</span> demo@example.com</li>
                                <li><span>Office Time:</span> 09AM- 5PM</li>
                            </ul>
                            <form>
                                <div class="input-1">
                                    <input type="email" class="form-control" placeholder="Email Address *" required>
                                </div>
                                <div class="submit clearfix">
                                    <button type="submit"><i class="ti-email"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="separator"></div>
                    <div class="col col-xs-12">
                        <p class="copyright">Copyright &copy; 2019 Donate Fund. All rights reserved.</p>
                        <div class="extra-link">
                            <ul>
                                <li><a href="#">Privace & Policy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end site-footer -->
</div>
<!-- end of page-wrapper -->

@endsection

@section('js')
{{--    <script src="{{asset('assets/js_admin/dashboard.js')}}"></script>--}}
@endsection


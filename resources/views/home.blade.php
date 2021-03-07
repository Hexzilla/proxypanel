<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ProxyPanel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/bootstrap.min.css')}}">
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/font-awesome.min.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/slicknav.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/owl.theme.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/main.css')}}">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/extras.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('land/css/responsive.css')}}">

</head>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-menu"></span>
                        <span class="icon-menu"></span>
                        <span class="icon-menu"></span>
                    </button>
                    <!-- <a href="index.html" class="navbar-brand"><img src="{{asset('land/img/logo.png')}}" alt=""></a> -->
                    <a href="#" class="navbar-brand"><Span>ProxyPanel</Span></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item active">
                            <a class="nav-link" href="#sliders">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#location">
                                Locations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                Instant Trial
                            </a>
                        </li>
                        <li class="nav-item">
                            <?php $email = session('email')?>
                            @if (!$email)
                                <a class="nav-link" href="{{url('signin')}}">
                                    Login
                                </a>
                            @else
                                <a class="nav-link" href="{{url('dashboard')}}">
                                    Dashboard
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="mobile-menu navbar-nav">
                <li>
                    <a class="page-scroll" href="#sliders">
                        Home
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">
                        Services
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#location">
                        Locations
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#pricing">
                        Pricing
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">
                        Trial
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu End -->

        </nav>
        <!-- Navbar End -->

        <!-- sliders -->
        <div id="sliders">
            <div class="full-width">
                <!-- light slider -->
                <div id="light-slider" class="carousel slide">
                    <div id="carousel-area">
                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-slider" data-slide-to="1"></li>
                                <li data-target="#carousel-slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{asset('land/images/tech2.png')}}" alt="">
                                    <div class="carousel-caption">
                                        <h3 class="slide-title animated fadeInDown">Best proxy panel in world</h3>
                                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('land/images/tech3.png')}}" alt="">
                                    <div class="carousel-caption">
                                        <h3 class="slide-title animated fadeInDown"><span>Cutting-edge</span> Features</h3>
                                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('land/images/tech4.png')}}" alt="">
                                    <div class="carousel-caption">
                                        <h3 class="slide-title animated fadeInDown"><span>Your story</span> start with us</h3>
                                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <!-- Start Service Icon 1 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">Easy to Customize</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 1 -->

                <!-- Start Service Icon 2 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">100+ Components</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 2 -->

                <!-- Start Service Icon 3 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">Super Fast</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 3 -->

                <!-- Start Service Icon 4 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">Clean Design</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 4 -->

                <!-- Start Service Icon 5 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-flash"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">Bootstrap 4 UI Kit</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 5 -->

                <!-- Start Service Icon 6 -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-hand-pointer-o"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#">Advanced Features</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 6 -->
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding">
        <!-- Container Starts -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Portfolio Controller/Buttons -->
                    <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
                        <a class="filter active btn btn-common" data-filter="all">
                            All
                        </a>
                        <a class="filter btn btn-common" data-filter=".branding">
                            Branding
                        </a>
                        <a class="filter btn btn-common" data-filter=".marketing">
                            Marketing
                        </a>
                        <a class="filter btn btn-common" data-filter=".planning">
                            Planning
                        </a>
                        <a class="filter btn btn-common" data-filter=".research">
                            Research
                        </a>
                    </div>
                    <!-- Portfolio Controller/Buttons Ends-->
                </div>

                <!-- Portfolio Recent Projects -->
                <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
                    <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix branding planning pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer3.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix branding research pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix marketing research pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer3.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mix planning research pb-1 pl-1">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{asset('land/images/computer3.png')}}" alt="" />
                            </div>
                            <div class="portfoli-content">
                                <div class="sup-desc-wrap">
                                    <div class="sup-desc-inner">
                                        <div class="sup-link">
                                            <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                            <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="sup-meta-wrap">
                                            <a class="sup-title" href="#">
                                                <h4>TITLE HERE</h4>
                                            </a>
                                            <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->

    <section id="location" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInDown animated mb-0" data-wow-delay="0.3s">Proxy Locations</h2>
                    <p class="wow fadeInDown animated text-center" style="color:#888" data-wow-delay="0.3s">You can choose from the locations that we offer. You can even ask for one location that we build for you!</p>
                </div>
            </div>
            <div class="row" style="max-width: 700px; margin: 0 auto;">
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Denver</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Los Angeles</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Dallas</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">New York</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Atlanta</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Seattle</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Orlando</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Philadelphia</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Portland</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">Helena</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">London</a></div>
                <div class="col-md-3 col-sm-4 text-center">
                    <a href="" class="btn btn-info mb-1" style="width: 150px">New Delhi</a></div>
            </div>
        </div>
    </section>

    <!-- Pricing section Start -->
    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Pricing Table</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="pricing-table-item">
                        <div class="plan-name">
                            <h3>Monthly</h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value">$ 175</div>
                            <!-- <div class="interval">per month</div> -->
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Multi location</li>
                                <li><i class="fa fa-check"></i>month</li>
                                <li><i class="fa fa-check"></i>175$</li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="#" class="btn btn-common">Buy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="pricing-table-item table-active">
                        <div class="plan-name">
                            <h3>WEEKLY</h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value">$ 75 </div>
                            <!-- <div class="interval">per month</div> -->
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Multi location</li>
                                <li><i class="fa fa-check"></i>week</li>
                                <li><i class="fa fa-check"></i>75$</li>
                                <!-- <li><i class="fa fa-check"></i>Unlimited Users</li> -->
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="#" class="btn btn-common">Buy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="pricing-table-item">
                        <div class="plan-name">
                            <h3>Daily</h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value">$ 20 </div>
                            <!-- <div class="interval">per month</div> -->
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Multi location</li>
                                <li><i class="fa fa-check"></i>1day</li>
                                <li><i class="fa fa-check"></i>20$</li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="#" class="btn btn-common">Buy</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="pricing-table-item">
                        <div class="plan-name">
                            <h3>One hour trial</h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value">$ 1 </div>
                            <!-- <div class="interval">per month</div> -->
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Multi location</li>
                                <li><i class="fa fa-check"></i>1hour</li>
                                <li><i class="fa fa-check"></i>1$</li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="#" class="btn btn-common">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table Section End -->


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Get Immediate Trial Access</h2>
                </div>
            </div>
        </div>
        <div class="container" style="max-width: 600px; margin: 0 auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="Password" class="form-control" placeholder="Your Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
            <p class="mb-0" style="font-size: 18px">Proxy Configurations</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <p class="mb-0">Nickname:</p>
                        <input type="text" class="form-control" placeholder="NickName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <p class="mb-0">Rotations:</p>
                        <select class="form-control mb-0">
                            <option>No rotations</option>   
                            <option>5 Minutes</option>
                            <option>10 Minutes</option>
                            <option>15 Minutes</option>
                            <option>30 Minutes</option>
                            <option>1 Hour</option>
                        </select>
                    </div>
                    <p class="mb-0" style="color: #999">How frequent you want proxy to change, you can change this later</p>
                </div>
            </div>
            <p class="mb-0" style="font-size: 18px">Payment Method</p>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-filled"><i class="fa fa-bitcoin"></i>&nbsp;&nbsp;BitCoin</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-common"><i class="fa fa-paypal"></i>&nbsp;&nbsp;PayPal</button>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button class="btn-success btn">Get your one hour trial</button>
            </div>  
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <p class="copyright-text">All copyrights reserved © ProxyPanel, USA 2020
                        </p>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-xs-12">
                        <ul class="nav nav-inline  justify-content-end ">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sitemap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms of services</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>

    </footer>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('land/js/jquery-min.js')}}"></script>
    <script src="{{asset('land/js/popper.min.js')}}"></script>
    <script src="{{asset('land/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('land/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('land/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('land/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('land/js/jquery.nav.js')}}"></script>
    <script src="{{asset('land/js/scrolling-nav.js')}}"></script>
    <script src="{{asset('land/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('land/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('land/js/form-validator.min.js')}}"></script>
    <script src="{{asset('land/js/contact-form-script.js')}}"></script>
    <script src="{{asset('land/js/main.js')}}"></script>

</body>

</html>
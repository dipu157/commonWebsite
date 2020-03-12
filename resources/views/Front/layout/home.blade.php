@extends('Front.layout.master')
@section('body-content')

        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />
            <input type="radio" name="slides" id="slides_4" />
            <ul>
                <li>
                    <div id="bg">
                        <div class="banner-info-wthree">
                            <div class="container">
                                <h3>24*7 Services Provided For Customers</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="bg1">
                        <div class="banner-info-wthree">
                            <div class="container">
                                <h3> Transport Your Cargo Everywhere</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="bg2">
                        <div class="banner-info-wthree">
                            <div class="container">
                                <h3>Propel yourself into the future.</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="bg3">
                        <div class="banner-info-wthree">
                            <div class="container">
                                <h3>Premium Worldwide Logistics Network</h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="arrows">
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
            </div>
            <div class="navigation">
                <div>
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </section>
    <!--// mian-content -->
    <!--/ about -->
    <section class="about py-5" id="about">
        <div class="container py-3">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">About Us</h3>
            </div>
            <div class="row about-grids mt-lg-5">
                <div class="col-lg-6 ab-info">
                    <h3 class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    </h3>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum dolor sit amet,sed diam nonumy.

                    </p>
                </div>
                <div class="col-lg-6 ab-img">
					<img class="img-fluid" src="{{ asset('/') }}viewend/images/1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--// about -->
    <!--/services -->
    <section class="blog_hcls_w3layouts py-lg-5 py-md-4" id="services">
        <div class="container py-sm-5 py-4">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3"> Services</h3>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-anchor mb-2"></span>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Ocean Freight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">

                                <span class="fa fa-fighter-jet mb-2"></span>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Air Freight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-truck mb-2"></span>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Land Transport</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-ship mb-2"></span>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Supply</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-compass mb-2"></span>

                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Fast &amp; On Time</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-money mb-2"></span>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Weather Insurance</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </section>
    <!--// services -->
    <!--/counter-->
    <section class="stats py-lg-5 py-4" id="stats">
        <div class="container">
            <div class="row text-center">
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-thumbs-o-up mb-2"></span>
                        <h3 class="timer count-title count-number">250</h3>
                        <p class="count-text">Projects Done</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-smile-o mb-2"></span>
                        <h3 class="timer count-title count-number">600</h3>
                        <p class="count-text">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-users mb-2"></span>
                        <h3 class="timer count-title count-number">900</h3>
                        <p class="count-text">Team Workers</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-trophy mb-2"></span>
                        <h3 class="timer count-title count-number">7</h3>
                        <p class="count-text">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <!--/team -->
    <section class="blog_hcls_w3layouts py-lg-5 py-5" id="team">
        <div class="container py-sm-5 py-4">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">We Offered Services</h3>
            </div>
            <div class="feature-grids row text-center">
                <div class="col-lg-6 photo-gd">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="list-group-image img-fluid" src="{{ asset('/') }}viewend/images/team1.jpg" alt="">
                        </div>
                        <div class="caption card-body p-lg-5 p-3">
                            <h4 class="group card-title inner list-group-item-heading">
                                Expert Staff</h4>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 photo-gd">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="list-group-image img-fluid" src="{{ asset('/') }}viewend/images/team2.jpg" alt="">
                        </div>
                        <div class="caption card-body p-lg-5 p-3">
                            <h4 class="group card-title inner list-group-item-heading">
                                Trucking Services</h4>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// services -->
    <!-- Gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-lg-5 py-3">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3"> Our Work</h3>
            </div>
            <div class="row news-grids text-center">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="{{ asset('/') }}viewend/images/1.jpg" alt="news image" class="img-fluid"></a>
                    <a href="#gal2"><img src="{{ asset('/') }}viewend/images/2.jpg" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="{{ asset('/') }}viewend/images/3.jpg" alt="news image" class="img-fluid"></a>

                    <a href="#gal4"><img src="{{ asset('/') }}viewend/images/4.jpg" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="{{ asset('/') }}viewend/images/5.jpg" alt="news image" class="img-fluid"></a>
                    <a href="#gal6"><img src="{{ asset('/') }}viewend/images/6.jpg" alt="news image" class="img-fluid"></a>
                </div>
            </div>
        </div>
        <!-- popup-->
        <div id="gal1" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/1.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal2" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/2.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/3.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/4.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal5" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/5.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal6" class="pop-overlay animate">
            <div class="popup">
                <img src="{{ asset('/') }}viewend/images/6.jpg" alt="Popup Image" class="img-fluid" />
                <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
    </section>
    <!--// gallery -->

@endsection

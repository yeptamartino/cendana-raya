@extends('layouts.user-theme')
@section('content')
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="{{asset('user-theme/images/slider/bg1x.jpg')}}" alt="slider">
            </div>
            <!--/ Carousel item end -->

            <div class="item">
                <img class="img-responsive" src="{{asset('user-theme/images/slider/bg2.jpg')}}" alt="slider">
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="{{asset('user-theme/images/slider/bg3.jpg')}}" alt="slider">
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>

<div class="container">
    <div class="row">
        <div class="section full-width-portfolio">

            <div class="col-md-7">

                <!-- Classic Heading -->
                <div class="big-title animated fadeInDown delay-01" data-animation="fadeInDown"
                    data-animation-delay="01">
                    <h1>Welcome To PT. Cendana Raya Aviation Website</h1>
                </div>

                <!-- Some Text -->
                <p class="text-justify">PT Cendana Raya Aviation is aircraft parts supplier in Indonesia.
                    Military, commercial and private aircraft. Cendana Raya Aviation has exceeded the
                    expectation of its customers in terms of quality, services and the products
                    it supplies. An important difference distinguishing "PT Cendana Raya Aviation" from
                    others are the innovative way of spare parts sourcing, provisioning and primary focus on
                    quality products supplied to the customer. Industry
                    focused on providing the end customer or passenger a safe journey with an affordable
                    price. Our focus at PT Cendana Raya Aviation is to assist in providing those
                    airline/carriers the highest quality product for a reasonable
                    cost in a short period of time. So how can we assist you? We invite you to surf and view
                    our website to learn more about our services, products and our quality standard that we
                    have to offer. SO GIVE US OPPORTUNITIES TO
                    ASSIST YOU We invite you to surf and view our website to learn more about our services,
                    products and our quality standard that we have to offer..</p>


            </div>

            <div class="col-md-5">

                <!-- Start Touch Slider -->
                <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                    <div class="item"><img alt="" src="{{asset('user-theme/images/products/sperpat-1.jpg')}}"></div>
                    <div class="item"><img alt="" src="{{asset('user-theme/images/products/sperpat-2.jpg')}}"></div>
                    <div class="item"><img alt="" src="{{asset('user-theme/images/products/sperpat-3.jpg')}}"></div>
                </div>
                <!-- End Touch Slider -->

            </div>


        </div>
    </div>
</div>

<!-- End Portfolio Section -->
<!-- Product -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Start Portfolio Section -->
            <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

                <!-- Start Big Heading -->
                <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown"
                    data-animation-delay="01">
                    <h1>PT Cendana Raya Aviation is aircraft parts supplier in Indonesia</h1>
                </div>
                <!-- End Big Heading -->

                <p class="text-center">PT Cendana Raya Aviation is aircraft parts supplier in Indonesia. Military,
                    commercial and private aircraft. Cendana Raya Aviation has exceeded the expectation of its customers
                    in terms of quality, services and the products it supplies.</p>


                <!-- Start Recent Projects Carousel -->
                <ul id="portfolio-list" data-animated="fadeIn">

                    <li>
                        <img src="{{asset('user-theme/images/products/sperpat-3.jpg')}}" alt="">
                        <div class="portfolio-item-content">
                            <span class="header">Town winter 2016</span>
                            <p class="body animated8">web develpment, design</p>
                        </div>
                        <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="{{asset('user-theme/images/products/sperpat-3.jpg')}}"><i
                                    class="fa fa-search-plus"></i></a>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('user-theme/images/products/sperpat-4.jpg')}}" alt="">
                        <div class="portfolio-item-content">
                            <span class="header">Quarterly Musashino</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="{{asset('user-theme/images/products/sperpat-4.jpg')}}"><i
                                    class="fa fa-search-plus"></i></a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('user-theme/images/products/sperpat-5.jpg')}}" alt="">
                        <div class="portfolio-item-content">
                            <span class="header">Mainichi April 2016</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="{{asset('user-theme/images/products/sperpat-5.jpg')}}"><i
                                    class="fa fa-search-plus"></i></a>
                        </div>
                    </li>
                </ul>

                <!-- End Recent Projects Carousel -->


            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<!-- End Product -->

<div class="partner">
    <div class="container">
        <div class="row">
            <!--Start Clients Carousel-->
           <div class="col-md-12">
            <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5"
                    data-navigation="true">
                    <!-- Client 1 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-1.jpg')}}">
                            <img src="{{asset('user-theme/images/products/sperpat-1.jpg')}}" alt="" />
                        </a>
                    </div>

                    <!-- Client 2 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-2.jpg')}}">
                            <img src="{{asset('user-theme/images/products/sperpat-2.jpg')}}" alt="" />
                        </a>
                    </div>

                    <!-- Client 3 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-3.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-3.jpg')}}" alt="" /></a>
                    </div>

                    <!-- Client 4 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-4.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-4.jpg')}}" alt="" /></a>
                    </div>

                    <!-- Client 5 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-5.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-5.jpg')}}" alt="" /></a>
                    </div>

                    <!-- Client 6 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-6.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-6.jpg')}}" alt="" /></a>
                    </div>

                    <!-- Client 7 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-7.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-7.jpg')}}" alt="" /></a>
                    </div>

                    <!-- Client 8 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-8.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-8.jpg')}}" alt="" /></a>
                    </div>
                    <!-- Client 9 -->
                    <div class="client-item item">
                        <a href="{{asset('user-theme/images/products/sperpat-9.jpg')}}"><img
                                src="{{asset('user-theme/images/products/sperpat-9.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
           </div>
            <!-- End Clients Carousel -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>




@endsection

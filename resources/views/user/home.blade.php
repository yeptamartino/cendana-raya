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
            <h4 class="classic-title"><span>Welcome To PT. Cendana Raya Aviation Website</span></h4>

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
                <div class="item"><img alt="" src="{{asset('user-theme/images/about-01.jpg')}}"></div>
                <div class="item"><img alt="" src="{{asset('user-theme/images/about-02.jpg')}}"></div>
                <div class="item"><img alt="" src="{{asset('user-theme/images/about-03.jpg')}}"></div>
            </div>
            <!-- End Touch Slider -->

        </div>


    </div>
    </div>
</div>
<!-- End Portfolio Section -->




@endsection

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Basic -->
    <title>Margo | Home</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="GrayGrids">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{asset('user-theme/asset/css/bootstrap.min.css')}}" type="text/css" media="screen">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('user-theme/css/settings.css')}}" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('user-theme/css/font-awesome.min.css')}}" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-theme/css/slicknav.css')}}" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-theme/css/style.css')}}" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-theme/css/responsive.css')}}" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-theme/css/animate.css')}}" media="screen">

    <!-- Color Defult -->
    <link rel="stylesheet" type="text/css" href="{{asset('user-theme/css/colors/red.css')}}" media="screen" />



    <!-- Margo JS  -->
    <script type="text/javascript" src="{{asset('user-theme/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.migrate.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/modernizrr.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/asset/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.fitvids.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/nivo-lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/count-to.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.textillate.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.lettering.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.easypiechart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/skrollr.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/mediaelement-and-player.js')}}"></script>
    <script type="text/javascript" src="{{asset('user-theme/js/jquery.slicknav.js')}}"></script>

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js')}}"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js')}}"></script><![endif]-->

</head>

<body>

    <!-- Full Body Container -->
    <div id="container">

        <!-- Start Header Section -->
       <x-user-header></x-user-header>
        <!-- End Header Section -->


        @yield('content')
        <!-- End Portfolio Section -->


        <!-- Start Footer Section -->
        <footer>
            <div class="container">
                <div class="row footer-widgets">


              
                    <div class="col-md-12">
                        <div class="footer-widget flickr-widget">
                            <h4>Location PT Cendana Raya Aviation<span class="head-line"></span></h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.206490337561!2d106.886589!3d-6.38734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0c0f8f82fb7c3a2!2sCendana%20Raya%20Aviation%2C%20PT.!5e0!3m2!1sid!2sid!4v1629181021631!5m2!1sid!2sid"
                                width="1140" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div>
                </div>
                <!-- .row -->

                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Copyright © 2021 Cendana Raya Aviation - Designed &amp; Developed by <a
                                    href="https://www.linkedin.com/in/yepta-martino-1050b5147/">Yepta Martino</a></p>
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="{{ route('user.home') }}">Home</a>
                                </li>
                                <li><a href="{{ route('user.about-us') }}">About Us</a>
                                </li>
                                <li><a href="{{ route('user.contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- End Copyright -->

            </div>
        </footer>
        <!-- End Footer Section -->


    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    {{--  <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>  --}}

    <script type="text/javascript" src="{{asset('user-theme/js/script.js')}}"></script>

</body>

</html>

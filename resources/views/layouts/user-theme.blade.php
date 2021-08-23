<!DOCTYPE html>
<html lang="en">

<x-user-header></x-user-header>

<body class="goto-here">
    <div class="py-1 bg-primary">
    </div>
    <x-user-navbar></x-user-navbar>
    <!-- END nav -->



  @yield('content')

    
    <footer class="ftco-footer ftco-section">
        <div class="container">
            {{-- <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div> --}}
            <div class="row mb-4">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">PT Cendana Raya Aviation</h2>
                        <p>PT Cendana Raya Aviation is aircraft parts supplier in Indonesia. Military, commercial and private aircraft. Cendana Raya Aviation has exceeded the expectation of its customers in terms of quality, services and the products it supplies.</p>
                    </div>
                </div>
                {{-- <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-md 4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Us</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text"> Jalan Bungur 1 No. 34 RT/RW 006/007 Harjomukti, Depok 16454</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +62-812-1939-7519</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">  alex@cendanarayaaviation.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md 4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Location</h2>
                         <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.206490337561!2d106.886589!3d-6.38734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0c0f8f82fb7c3a2!2sCendana%20Raya%20Aviation%2C%20PT.!5e0!3m2!1sid!2sid!4v1629181021631!5m2!1sid!2sid"
                                width="1140" height="500" style="border:0; responisve" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/"
                            target="_blank">Themeslab</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div> --}}
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('user-theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('user-theme/js/popper.min.js')}}"></script>
    <script src="{{asset('user-theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('user-theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user-theme/js/aos.js')}}"></script>
    <script src="{{asset('user-theme/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('user-theme/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('user-theme/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('user-theme/js/google-map.js')}}"></script>
    <script src="{{asset('user-theme/js/main.js')}}"></script>

</body>

</html>
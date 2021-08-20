<header class="clearfix">
    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- Start Contact Info -->
                    <ul class="contact-details">
                        <li><a href="#"><i class="fa fa-envelope-o"></i> annisa@cendanarayaaviation.com</a>
                        </li>
                        <li><a href="#"><i class="fa fa-phone"></i> +6281219397519</a>
                        </li>
                    </ul>
                    <!-- End Contact Info -->
                </div>
                <!-- .col-md-6 -->
                <div class="col-md-5">
                    <!-- Start Social Links -->
                    <ul class="social-list">
                        
                        <li>
                            <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i
                                    class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i
                                    class="fa fa-linkedin"></i></a>
                        </li>
                        
                    </ul>
                    <!-- End Social Links -->
                </div>
                <!-- .col-md-6 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .top-bar -->
    <!-- End Top Bar -->


    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a class="navbar-brand" href="index.html">
                    {{-- <img alt="" src="{{asset('user-theme/images/margo.png')}}"> --}}
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Stat Search -->
                <div class="search-side">
                    <a class="show-search"><i class="fa fa-search"></i></a>
                    <div class="search-form">
                        <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                            <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                        </form>
                    </div>
                </div>
                <!-- End Search -->
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('user.home') }}">HOME</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('about-us') ? 'active' : '' }}"
                            href="{{ route('user.about-us') }}">ABOUT US</a>
                    </li>

                    <li>
                        <a class="{{ Request::is('capability') ? 'active' : '' }}"
                            href="{{ route('user.capability') }}">CAPABILITY</a>
                    </li>

                    <li>
                        <a class="{{ Request::is('inventory') ? 'active' : '' }}"
                            href="{{ route('user.inventory') }}">INVENTORY</a>
                    </li>

                    <li>
                        <a class="{{ Request::is('track-order') ? 'active' : '' }}" href="{{ route('user.track-order') }}">TRACK ORDER
                        </a>
                    </li>

                    <li><a class="{{ Request::is('contact-us') ? 'active' : '' }}"
                            href="{{ route('user.contact-us') }}">CONTACT US</a>
                    </li>
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <li>
                <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('user.home') }}">HOME</a>
            </li>
            <li>
                <a class="{{ Request::is('about-us') ? 'active' : '' }}"
                    href="{{ route('user.about-us') }}">ABOUT US</a>
            </li>

            <li>
                <a class="{{ Request::is('capability') ? 'active' : '' }}"
                    href="{{ route('user.capability') }}">CAPABILITY</a>
            </li>

            <li>
                <a class="{{ Request::is('inventory') ? 'active' : '' }}"
                    href="{{ route('user.inventory') }}">INVENTORY</a>
            </li>

            <li>
                <a class="{{ Request::is('track-order') ? 'active' : '' }}" href="{{ route('user.track-order') }}">TRACK ORDER
                </a>
            </li>

            <li><a class="{{ Request::is('contact-us') ? 'active' : '' }}"
                    href="{{ route('user.contact-us') }}">CONTACT US</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

    </div>
    <!-- End Header Logo & Naviagtion -->

</header>

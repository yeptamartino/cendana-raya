<div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="{{ route('user.home') }}">
                <img alt="" src="{{asset('user-theme/images/margo.png')}}">
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
                    <a class="{{ Request::is('home') ? 'active' : '' }}" href="{{ route('user.home') }}">Home</a>
                </li>
                <li>
                    <a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('user.about-us') }}">About Us</a>
                </li>

                <li>
                    <a class="{{ Request::is('capability') ? 'active' : '' }}" href="{{ route('user.capability') }}">Capability</a>
                </li>

                <li>
                    <a class="{{ Request::is('inventory') ? 'active' : '' }}" href="{{ route('user.inventory') }}">Inventory</a>
                </li>

                <li>
                    <a {{ Request::is('track-order') ? 'active' : '' }} href="{{ route('user.track-order') }}">Track Order</a>
                </li>

                <li><a class="{{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('user.contact-us') }}">Contact Us</a>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a class="active" href="{{ route('user.home') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('user.about-us') }}">About Us</a>
        </li>

        <li>
            <a href="{{ route('user.capability') }}">Capability</a>
        </li>

        <li>
            <a href="{{ route('user.inventory') }}">Inventory</a>
        </li>

        <li>
            <a href="{{ route('user.track-order') }}">Track Order</a>
        </li>

        <li><a href="{{ route('user.contact-us') }}">Contact Us</a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</div>
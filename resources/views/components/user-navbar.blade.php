<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.home') }}"><img src="{{asset('user-theme/images/logo.svg')}}" alt="" style="width: 6em;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('user.home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}"><a href="{{ route('user.about-us') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li>
                <li class="nav-item {{ Request::is('capability') ? 'active' : '' }}"><a href="{{ route('user.capability') }}" class="nav-link {{ Request::is('capability') ? 'active' : '' }}">Capability</a></li>
                <li class="nav-item {{ Request::is('inventory') ? 'active' : '' }}"><a href="{{ route('user.inventory') }}" class="nav-link {{ Request::is('inventory') ? 'active' : '' }}">Inventory</a></li>
                <li class="nav-item {{ Request::is('track-order') ? 'active' : '' }}"><a href="{{ route('user.track-order') }}" class="nav-link {{ Request::is('track-order') ? 'active' : '' }}">Track Order</a></li>
                <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{ route('user.contact-us') }}" class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
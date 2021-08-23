<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{asset('user-theme/images/logo.svg')}}" alt="" style="width: 6em;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('user.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="{{ route('user.about-us') }}" class="nav-link">About Us</a></li>
                <li class="nav-item active"><a href="{{ route('user.capability') }}" class="nav-link">Capability</a></li>
                <li class="nav-item active"><a href="{{ route('user.inventory') }}" class="nav-link">Inventory</a></li>
                <li class="nav-item active"><a href="{{ route('user.track-order') }}" class="nav-link">Track Order</a></li>
                <li class="nav-item active"><a href="{{ route('user.contact-us') }}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- 
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
</ul> --}}
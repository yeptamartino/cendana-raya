<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

    
        <div class="p-15 p-b-0">
            <div class="main-menu-header">
                <img class="img-80 img-radius mCS_img_loaded" src="{{url($setting->logo)}}" alt="User-Profile-Image">
            </div>
        </div>
        <div class="pcoded-navigation-label">Menu Website</div>

        
        <ul class="pcoded-item pcoded-left-item">


            @if(Auth::user()->role === 'CANDIDATE')
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{route('user.dashboard')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('video','video/create') ? 'active' : '' }}">
                <a href="{{route('video.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-video"></i><b>CP</b></span>
                    <span class="pcoded-mtext">Video</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('profile','profile/edit') ? 'active' : '' }}">
                <a href="{{url('profile')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>Profile</b></span>
                    <span class="pcoded-mtext">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endif

            @if(Auth::user()->role === 'ADMIN')
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('about-us','admin/about-us/create') ? 'active' : '' }}">
                <a href="{{route('about-us.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-users"></i><b>About Us</b></span>
                    <span class="pcoded-mtext">About Us</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ Request::is('admin/slider','admin/slider/create') ? 'active' : '' }}">
                <a href="{{route('slider.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-sliders"></i><b>Slider</b></span>
                    <span class="pcoded-mtext">Slider</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="{{ Request::is('admin/capability/','admin/capability/create') ? 'active' : '' }}">
                <a href="{{route('capability.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-deaf"></i><b>Capability</b></span>
                    <span class="pcoded-mtext">Capability</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('admin/inventory/','admin/inventory/create') ? 'active' : '' }}">
                <a href="{{route('inventory.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-database"></i><b>Inventory</b></span>
                    <span class="pcoded-mtext">Inventory</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('admin/track-order','admin/track-order') ? 'active' : '' }}">
                <a href="{{route('track-order.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-map-pin"></i><b>Track Order</b></span>
                    <span class="pcoded-mtext">Track Order</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact-us/','admin/contact-us/create') ? 'active' : '' }}">
                <a href="{{route('contact-us.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-phone"></i><b>Contact Us</b></span>
                    <span class="pcoded-mtext">Contact Us</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('video','video/create') ? 'active' : '' }}">
                <a href="{{route('video.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-video"></i><b>CP</b></span>
                    <span class="pcoded-mtext">Video</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>


            <li class="{{ Request::is('photo','photo/create') ? 'active' : '' }}">
                <a href="{{route('photo.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-image"></i><b>Photo</b></span>
                    <span class="pcoded-mtext">Photo</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
            

            {{-- <li class="{{ Request::is('banner','banner/create') ? 'active' : '' }}">
                <a href="{{route('banner.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-image"></i><b>BN</b></span>
                    <span class="pcoded-mtext">Banner</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}
            
            <li class="{{ Request::is('calon-peserta','calon-peserta/create') ? 'active' : '' }}">
                <a href="{{route('calon-peserta.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>Users</b></span>
                    <span class="pcoded-mtext">Users  <label class="badge badge-warning"></span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
     
            <div class="pcoded-navigation-label">Konfigurasi</div>
            <li class="{{ Request::is('admin','admin/create') ? 'active' : '' }}">
                <a href="{{route('admin.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-user-secret"></i><b>Admin</b></span>
                    <span class="pcoded-mtext">Admin</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('profile','profile/edit') ? 'active' : '' }}">
                <a href="{{url('profile')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>Profile</b></span>
                    <span class="pcoded-mtext">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            {{-- <li class="{{ Request::is('pengumuman','pengumuman/edit') ? 'active' : '' }}">
                <a href="{{url('pengumuman')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-bell"></i><b>Pengumuman</b></span>
                    <span class="pcoded-mtext">Pengumuman</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}
            <li class="{{ Request::is('pengaturan') ? 'active' : '' }}">
                <a href="{{route('pengaturan.edit')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-gear"></i><b>P</b></span>
                    <span class="pcoded-mtext">Pengaturan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>
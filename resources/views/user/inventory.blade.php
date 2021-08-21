@extends('layouts.user-theme')
@section('content')
<div class="page-banner" style="padding:40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Inventory</h2>
                <p>We Are Professional</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li>Inventory</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-text">
                        <p>
                            Below is the list of parts that is available in our stock. Should the item that you are
                            searching is not in the list does not mean thet we don't have that in our stock or could not
                            obtain it very rapidly for you. We have a team of people who can able to source for any
                            requirement within a short time of period in the surplus market and with our reliable
                            suppliers. Don't hesistate to send us your requirements to our email:
                            info@cendanarayaaviation.com and we will respond to you within 24 to 48 hours.

                        </p>
                        <p> Inventory list: <a style="color: blue" href="{{asset('user-theme/file/xlsx.xlsx')}}">Excel format <i class="fa fa-download"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Start Touch Slider -->
                    <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                        <div class="item"><img alt="" src="`"></div>
                        <div class="item"><img alt="" src="{{asset('user-theme/images/about-02.jpg')}}"></div>
                        <div class="item"><img alt="" src="{{asset('user-theme/images/about-03.jpg')}}"></div>
                    </div>
                    <!-- End Touch Slider -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->
@endsection

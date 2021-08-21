@extends('layouts.user-theme')
@section('content')
<div class="page-banner" style="padding:40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Track Order</h2>
                <p>We Are Professional</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li>Track Order</li>
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
                            PT. CENDANA RAYA AVIATION has access to many aircraft parts manufacturers and distributors of
                            the following military aircrafts:
    
                        </p>
    
                    </div>
    
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">FIXED WINGS</th>
                                <th scope="col">ROTARI WINGS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Aermacchi MB-339</td>
                                <td>AH-64 Apache</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Airbus A300</td>
                                <td>AS332 Super Puma</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Airbus A310</td>
                                <td>AS350 Écureuil</td>
                            </tr>
                        </tbody>
                    </table>
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
</div>
<!-- End content -->
@endsection

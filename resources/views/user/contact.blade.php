@extends('layouts.user-theme')
@section('content')
@include('sweetalert::alert')

<!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="margin-top: 60px;">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.2s">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>Kalasan, Yogyakarta</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.4s">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Telepon / WA</h2>
                                <p>0822-2009-3197</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.6s">
                            <i class="far fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>lamaorepics@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
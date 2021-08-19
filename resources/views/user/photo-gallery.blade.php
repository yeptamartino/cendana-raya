@extends('layouts.user-theme')
@section('content')
@include('sweetalert::alert')
<!-- Hero Start -->
    <!-- <div class="hero">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1>Yoga Practice For Good Health</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasell nec pretum mi. Curabi ornare velit non. Aliqua metus tortor auctor quis sem.
                        </p>
                        <div class="hero-btn">
                            <a class="btn" href="">Join Now</a>
                            <a class="btn" href="">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{asset('user-theme/assets/img/hero.jpg')}}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="margin-top: 60px;">
                <!-- <p>Yoga Pose</p> -->
                <h2>Galery Foto</h2>
            </div>
            <div class="row portfolio-container" style="margin-top: 60px;">
                @foreach ($photos as $photo )
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <a href="{{asset('images/'.$photo->thumbnail)}}" data-lightbox="portfolio">
                            <img src="{{asset('images/'.$photo->thumbnail)}}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio Start -->

@endsection
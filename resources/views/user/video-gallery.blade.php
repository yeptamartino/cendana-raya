@extends('layouts.user-theme')
@section('content')
@include('sweetalert::alert')

    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="margin-top: 60px;">
                <!-- <p>Yoga Pose</p> -->
                <h2>Galery Video</h2>
            </div>
            <div class="row portfolio-container" style="margin-top: 60px;">
                @foreach ($videos as $video )
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <iframe width="315" height="150" src="https://www.youtube.com/embed/{{($video->url_youtube)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio Start -->

@endsection
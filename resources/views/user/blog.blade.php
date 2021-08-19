@extends('layouts.user-theme')
@section('content')
@include('sweetalert::alert')
    <div class="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="margin-top: 60px;">
                <p>From Blog</p>
                <h2>Latest Lamorepics Articles</h2>
            </div>
            <div class="row blog-page">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    @foreach ($articles as $article )
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{url($article->thumbnail)}}" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>{{$article->title}}</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-calendar-alt"></i>{{ $article->created_at }}</p>
                            </div>
                            <p>
                                {!! ( Str::limit($article->description,20)) !!} 
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{--  <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>  --}}
        </div>
    </div>
    <!-- Blog End -->

@endsection
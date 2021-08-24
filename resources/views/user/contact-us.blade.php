@extends('layouts.user-theme')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('user-theme/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('user.home') }}">Home</a></span> <span>About us</span></p>
                <h1 class="mb-0 bread">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                <div class="cart-list">
                    <table class="table table-striped table-hover">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">Jalan Bungur 1 No. 34 RT/RW 006/007 Harjomukti, Depok 16454</a></td>
                                <td><a href="">081219397519</a></td>
                                <td><a href="">alex@cendanarayaaviation.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
        <div class="col-md-6 d-flex">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.206490337561!2d106.886589!3d-6.38734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0c0f8f82fb7c3a2!2sCendana%20Raya%20Aviation%2C%20PT.!5e0!3m2!1sid!2sid!4v1629181021631!5m2!1sid!2sid"
                    width="1140" height="500" style="border:0; responisve" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
      </div>
    </div>
  </section>
{{-- <div class="page-banner" style="padding:40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <p>We Are Professional</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li>Contact Us</li>
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
    
                    <table class="table table-hover table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Annisa Rahmawaty</td>
                                <td>annisa@cendanarayaaviation.com</td>
                                <td>+6281219397519</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rahmat</td>
                                <td>rahmat@cendanarayaaviation.com</td>
                                <td>+628129411721</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Velisah </td>
                                <td>velisah@cendanarayaaviation.com</td>
                                <td> <a href="https://api.whatsapp.com/send?phone=628132290123421&text=Halo%0ASaya%20Ingin%20Bekerja%20Sama">081373760666</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Hendri Wanadri</td>
                                <td>hendri@cendanarayaaviation.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>General Inquiry</td>
                                <td>info@cendanarayaaviation.com</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Alex Yohansyah</td>
                                <td>alex@cendanarayaaviation.com (Executive)</td>
                                <td>-</td>
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
</div> --}}
<!-- End content -->
@endsection

@extends('layouts.user-theme')
@section('content')
@include('sweetalert::alert')
    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
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

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <!-- <p>Booking Sekarang</p> -->
                <h2>Booking Sekarang</h2>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" method="POST" novalidate="novalidate"  action="{{url('boking')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" required="required" data-validation-required-message="Masukkan email anda" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required="required" data-validation-required-message="Masukkan email anda" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="phone">Telepon</label>
                                <input type="number" name="phone" class="form-control" id="phone" required="required" data-validation-required-message="Masukkan nomor telepon anda" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="booking_day">Tanggal Booking</label>
                                <input type="date" name="booking_day" class="form-control" id="booking_day" required="required" data-validation-required-message="Tambahkan Tanggal acara" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" class="form-control" id="address" required="required" data-validation-required-message="Masukkan alamat anda" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="note">Catatan</label>
                                <textarea name="note" class="form-control" id="note" required="required" data-validation-required-message="Tambahkan Catatan: "></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">BOOKING</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
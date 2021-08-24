@extends('layouts.user-theme')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('user-theme/images/bg_12.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Track Order</h1>
                <h5><p style="color: white;">Locate Your Order Here</p></h5>

            </div>
        </div>
    </div>
</div>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-12 pb-3">
            <div class="col-md-12 heading-section ftco-animate text-center">
                {{-- <span class="subheading">Testimony</span> --}}
               
                <h3 class="mb-4">
                    <a href="https://www.track-trace.com/" class="btn btn-primary">Track Order Now</a>

                </h3>
                
                <p>PT. CENDANA RAYA AVIATION has access to many aircraft parts manufacturers and distributors of the following military aircrafts:</p>
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="cart-list">
                        <table class="table table-hover">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>FIXED WINGS</th>
                                    <th>ROTARI WINGS</th>
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

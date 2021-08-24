@extends('layouts.user-theme')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('user-theme/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('user.home') }}">Home</a></span> <span>About us</span></p>
                <h1 class="mb-0 bread">Capability</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <p>PT. CENDANA RAYA AVIATION has access to many aircraft parts manufacturers and distributors of the
                following military aircrafts:</p>
            <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                <div class="cart-list">
                    <table class="table table-striped table-hover">
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
                                <td>CASA C-212 Aviocar All Series</td>
                                <td>Bell 206</td>
                            </tr> 
                            <tr>
                                <th scope="row">2</th>
                                <td>CASA/IPTN CN-235</td>
                                <td>Bell 2012</td>
                            </tr> 
                             <tr>
                                <th scope="row">3</th>
                                <td>CASA C-295</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Aermacchi MB-339</td>
                                <td>AH-64 Apache</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Airbus A300</td>
                                <td>AS332 Super Puma</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Airbus A310</td>
                                <td>AS350 Écureuil</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Airbus A320</td>
                                <td>AS355 Écureuil 2</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Airbus A330</td>
                                <td>AS365 Dauphin</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Airbus A340</td>
                                <td>Bell 47</td>
                            </tr> 
                            <tr>
                                <th scope="row">10</th>
                                <td>Boeing 737 Series</td>
                                <td>Bell 204</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Boeing 747 Series</td>
                                <td>Bell 205</td>
                            </tr> 
                           
                            <tr>
                                <th scope="row">12</th>
                                <td>Many more...</td>
                                <td>-</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

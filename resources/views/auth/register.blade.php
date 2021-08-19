


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Limtara</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="{{asset('admin-theme/images/favicon.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-theme/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('admin-theme/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-theme/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-theme/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-theme/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-theme/css/style.css')}}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-12">
                <form  method="POST" action="{{url('registrasi-peserta')}}" class="md-float-material form-material" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <img src="{{asset('admin-theme/images/logo.png')}}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <label>Pilih Foto</label>
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                               
                            </div>
                            <div class="form-group form-primary">
                                <label>Nama Lengkap</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                               
                            </div>
                            <div class="form-group form-primary">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                                
                            </div>
                            <div class="form-group form-primary">
                                
                                <label>Telepon</label>
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>
                            <div class="form-group form-primary">
                                <label>Alamat Lengkap</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <label>Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <span class="form-bar"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <label>Konfirmasi Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class="form-bar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Registrasi</button>
                                    <a href="{{route('login')}}" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">Sudah Punya Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('admin-theme/js/jquery/jquery.min.js')}} "></script>
<script type="text/javascript" src="{{asset('admin-theme/js/jquery-ui/jquery-ui.min.js')}} "></script>
<script type="text/javascript" src="{{asset('admin-theme/js/popper.js')}}/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-theme/js/bootstrap/js/bootstrap.min.js')}} "></script>
<!-- waves js -->
<script src="{{asset('admin-theme/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin-theme/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-theme/js/common-pages.js')}}"></script>
</body>

</html>
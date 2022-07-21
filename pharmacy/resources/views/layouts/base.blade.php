
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/remixicon/remixicon') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</head>

<body>

<style>
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    .seminor-login-modal-body .close {
      position: relative;
      top: -45px;
      left: 10px;
      color: #1cd8ad;
    }

    .seminor-login-modal-body .close {
      opacity: 0.75;
    }

    .seminor-login-modal-body .close:focus,
    .seminor-login-modal-body .close:hover {
      color: #39e8b0;
      opacity: 1;
      text-decoration: none;
      outline: 0;
    }

    .seminor-login-modal .modal-dialog .modal-content {
      border-radius: 0px;
    }

    /* form animation */
    .seminor-login-form .form-group {
      position: relative;
      margin-bottom: 1.5em !important;
    }

    .seminor-login-form .form-control {
      border: 0px solid #ced4da !important;
      border-bottom: 1px solid #adadad !important;
      border-radius: 0 !important;
    }

    .seminor-login-form .form-control:focus,
    .seminor-login-form .form-control:active {
      outline: none !important;
      outline-width: 0;
      border-color: #adadad !important;
      box-shadow: 0 0 0 0.2rem transparent;
    }

    *:focus {
      outline: none;
    }

    .seminor-login-form {
      padding: 2em 0 0;
    }

    .form-control-placeholder {
      position: absolute;
      top: 0;
      padding: 7px 0 0 13px;
      transition: all 200ms;
      opacity: 0.5;
      border-top: 0px;
      border-left: 0;
      border-right: 0;
    }

    .form-control:focus+.form-control-placeholder,
    .form-control:valid+.form-control-placeholder {
      font-size: 75%;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
      opacity: 1;
    }

    .container-checkbox input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkmark-box {
      position: absolute;
      top: -5px;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #adadad;
    }

    .container-checkbox {
      display: block;
      position: relative;
      padding-left: 40px;
      margin-bottom: 20px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      line-height: 1.1;
    }

    .container-checkbox input:checked~.checkmark-box:after {
      color: #fff;
    }

    .container-checkbox input:checked~.checkmark-box:after {
      display: block;
    }

    .container-checkbox .checkmark-box:after {
      left: 10px;
      top: 4px;
      width: 7px;
      height: 15px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .checkmark:after,
    .checkmark-box:after {
      content: "";
      position: absolute;
      display: none;
    }

    .container-checkbox input:checked~.checkmark-box {
      background-color: #f58220;
      border: 0px solid transparent;
    }

    .btn-check-log .btn-check-login {
      font-size: 16px;
      padding: 10px 0;
    }

    button.btn-check-login:hover {
      color: #fff;
      background-color: #f58220;
      border: 2px solid #f58220;
    }

    .btn-check-login {
      color: #f58220;
      background-color: transparent;
      border: 2px solid #f58220;
      transition: all ease-in-out .3s;
    }

    .btn-check-login {
      display: inline-block;
      padding: 12px 0;
      margin-bottom: 0;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border-radius: 0;
      width: 100%;
    }

    .forgot-pass-fau a {
      text-decoration: none !important;
      font-size: 14px;
    }

    .text-primary-fau {
      color: #1959a2;
    }

    .select-form-control-placeholder {
      font-size: 100%;
      padding: 7px 0 0 13px;
      margin: 0;
    }

    .modal {
      overflow-y: scroll;
    }
</style>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ route('index') }}">SMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="{{ asset('frontend/img/logo') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{route('register')}}">Register</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      @if(isset(Auth::user()->email))
      <div>
        <strong>Welcome {{ Auth::user()->email}}</strong>
      </div>
      <a href="{{ route('logout')}}" >  {{ __('Logout') }}<b class="caret"></b></a>
      @else
      <li class="dropdown">
        <a href="{{ route('login-user')}}" data-toggle="modal" data-toggle="modal" data-target="#sem-login">{{ __('Login') }}<b class="caret"></b></a>
        <div class="dropdown-menu" style="width: 400px">

        </div>
        </li>
     
      @endif




    </div>
  </header>



  <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-reg">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">CREATE AN ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>

            <form method="POST" action="{{ route('register-user') }}" class="seminor-login-form">
              @csrf
          
          
              <div class="form-group">
                <input type="name" name="name" id="name" class="form-control" required>
                <label class="form-control-placeholder" for="name">User Name</label>
                <span class="text-danger"> @error('name'){{$message}} @enderror</span>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" required >
                <label class="form-control-placeholder" for="name">Email address</label>
              </div>
             
            
            
              <div class="form-group">
                <input type="password" name="password" id="password"  class="form-control" required >
                <label class="form-control-placeholder" for="password">Password</label>
              </div>
              <div class="form-group">
                <input type="password"  name="confirm_password" id="confirm_password" class="form-control" required >
                <label class="form-control-placeholder" for="password">Confirm Password</label>
              </div>

              <div class="form-group forgot-pass-fau text-center ">
                <a href="#" class="text-secondary">
                  By Clicking "SIGN UP" you accept our<br>
                  <span class="text-primary-fau">Terms and Conditions</span>
                </a>
              </div>

              <div class="btn-check-log">
                <button type="submit" class="btn-check-login">SIGN UP</button>
              </div>
              <div class="create-new-fau text-center pt-3">
                <a href="#" class="text-primary-fau"><span data-toggle="modal" data-target="#sem-login" data-dismiss="modal">Already Have An Account</span></a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>




    <!-- The Modal Login -->
    <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-login">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">LOGIN TO MY ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>


            <form method="POST" action="{{ route('login-user') }}" class="seminor-login-form">
              @csrf
          
              <div class="form-group">
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" required >
                <label class="form-control-placeholder" for="name">Email address</label>
              </div>
              <div class="form-group">
                <input type="password"  name="password" id="password" value="" class="form-control" required >
                <label class="form-control-placeholder" for="password">Password</label>
              </div>
              <div class="form-group">
                <label class="container-checkbox">
                  Remember Me On This Computer
                  <input type="checkbox" checked="checked" required>
                  <span class="checkmark-box"></span>
                </label>
              </div>

              <div class="btn-check-log">
                <button type="submit" class="btn-check-login">LOGIN</button>
              </div>


              <div class="forgot-pass-fau text-center pt-3">
                <a href="#" class="text-secondary">Forgot Your Password?</a>

              </div>
              <div class="create-new-fau text-center pt-3">
                <a href="{{ route('register') }}" class="text-primary-fau"><span data-toggle="modal" data-target="#sem-reg" data-dismiss="modal">Create A New Account</span></a>
              </div>



            </form>

          </div>
        </div>
      </div>
    </div>

  </div>





   

  @yield('content')



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



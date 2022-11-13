<!DOCTYPE html>
<html>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark/user-pages/login-2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:20:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>CENTRALNEWS.NG</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="oOLyGNNeqfhi9zfCkncpLkbOwrD2deERm7QFtEFd">
  
  <link rel="shortcut icon" href="../admin/favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="../admin/assets/plugins/%40mdi/font/css/materialdesignicons.min.css">
  <link media="all" type="text/css" rel="stylesheet" href="../admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

  <!-- plugin css -->
    <!-- end plugin css -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="../admin/css/app.css">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark">

  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
  <div class="row flex-grow">
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
      <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
          <img src="../site/assets/images/logo3.png" alt="logo">
        </div>
        <h4>Welcome back!</h4>
        <h6 class="font-weight-light">Happy to see you again!</h6>
        <form class="pt-3"  method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                  <i class="mdi mdi-account-outline text-primary"></i>
                </span>
              </div>
              
              <input type="email" id="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

            </div>
          </div>
          <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                  <i class="mdi mdi-lock-outline text-primary"></i>
                </span>
              </div>
              <input type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
          <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <label class="form-check-label text-muted" for="remember">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="input-helper"></i>  {{ __('Remember Me') }} </label>
            </div>
            {{-- <a href="#" class="auth-link">Forgot password?</a> --}}
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href=""> {{ __('Login') }}</a> --}}
          </div>
         
          
        </form>
      </div>
    </div>
    <div class="col-lg-6 d-flex flex-row">
        <div class="slide-image" style="background-image: url(../admin/assets/images/auth/log_bk.jpg); background-size: cover;">
          <p class="slide-content">Copyright &copy; 2022 All rights reserved.</p>
        </div> 
    </div>
  </div>
</div>

    </div>
  </div>

    <!-- base js -->
    <script src="../admin/js/app.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    </body>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark/user-pages/login-2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:20:44 GMT -->
</html>
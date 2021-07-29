

  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Admin') }}</title>
          <!-- plugins:css -->
          <link rel="stylesheet" href="{{asset('Admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
          <link rel="stylesheet" href="{{asset('Admin/assets/vendors/css/vendor.bundle.base.css')}}">
          <link rel="stylesheet" href="{{asset('Admin/assets/vendors/css/vendor.bundle.base.css')}}">
          <link rel="stylesheet" href="{{asset('Admin/assets/css/style.css')}}">
          <link rel="stylesheet" href="{{asset('Admin/assets/images/favicon.ico')}}">
  </head>
  <body>
                <div class="container-scroller">
                    <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="content-wrapper d-flex align-items-center auth">
                        <div class="row flex-grow">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="Admin/assets/images/logo.svg">
                            </div>
                            <h4>New here?</h4>
                            <form class="pt-3"  method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="form-group">
                            
                                </div>
                                <div class="form-group">
                                <input id="email" type="email" placeholder="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                <input id="password-confirm"  placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            
                                <div class="mt-3">
                                {{-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</a> --}}

                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
                                    {{ __('Register') }}
                                </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="#" target="_blank">Admin</a> from User</span>
                    </div>
                </footer>
              <!-- partial -->
      <script src="{{asset('Admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
      <script src="{{asset('Admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('Admin/assets/js/off-canvas.js')}}"></script>
      <script src="{{asset('Admin/assets/js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('Admin/assets/js/misc.js')}}"></script>
      <script src="{{asset('Admin/assets/js/dashboard.js')}}"></script>
      <script src="{{asset('Admin/assets/js/todolist.js')}}"></script>
  </body>
  </html>
  
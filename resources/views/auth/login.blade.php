<!DOCTYPE html>
<html>

<head>
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('admin/img/logo1.ico') }}" />
    <!--Global styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/wow/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/login1.css') }}" />
</head>

<body>
    <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
        <div class="{{ asset('admin/preloader_img') }}" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
            <img src="{{ asset('admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    <div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
                <div class="row">
                    <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-center">
                                <img src="{{ asset('admin/img/logow2.png') }}" alt="{{ config('app.name') }} logo"
                                    class="admire_logo"><span class="text-white">
                                    {{ config('app.name') }} &nbsp;<br />
                                    Log In</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <form action="{{ route('login') }}" id="login_validator" method="post"
                                class="login_validator">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label"> {{ __('E-Mail Address') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon input_email"><i
                                                class="fa fa-envelope text-primary"></i></span>
                                        <input id="email" type="email" name="email"
                                            class="form-control  form-control-md @error('email') is-invalid @enderror"
                                            id="email" name="username" value="{{ old('email') }}" placeholder="E-mail"
                                            required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--</h3>-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input id="password" type="password"
                                            class="form-control form-control-md @error('password') is-invalid @enderror"
                                            id="password" name="password" required autocomplete="current-password"
                                            placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" value="{{ __('Login') }}"
                                                class="btn btn-primary btn-block login_button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}
                                                class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">{{ __('Keep me logged in') }}</a>
                                        </label>
                                    </div>
                                    <div class="col-6 text-right forgot_pwd">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="custom-control-description forgottxt_clr">{{ __('Forgot Password?') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm m-t-10">
                                        <div class="icon-white btn-facebook icon_padding loginpage_border">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span class="text-white icon_padding text-center question_mark">Log In With
                                                Facebook</span>
                                        </div>
                                    </div>
                                    <div class="col-sm m-t-10">
                                        <div class="icon-white btn-google icon_padding loginpage_border">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            <span class="text-white icon_padding question_mark">Log In With
                                                Google+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Don't you have an Account? </label>
                                <a href="{{ route('register') }}" class="text-primary"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- end of global js-->
    <!--Plugin js-->
    <script src="{{ asset('admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/login1.js') }}"></script>
</body>

</html>
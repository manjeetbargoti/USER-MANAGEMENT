<!DOCTYPE html>
<html>

<head>
    <title>Register | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('admin/img/logo1.ico') }}" />
    <!-- Global styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/wow/css/animate.css') }}" />
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link rel="stylesheet" href="{{ asset('admin/css/pages/login1.css') }}" />
    <!--End of Page level styles-->
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
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row login_top_bottom">
            <div class="col-12 mx-auto">
                <div class="row">
                    <div class="col-lg-8 col-sm-12  col-md-8 mx-auto">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-center">
                                <img src="{{ asset('admin/img/logow2.png') }}" alt="{{ config('app.name') }} logo"
                                    class="admire_logo"><span class="text-white">
                                    {{ config('app.name') }}<br />
                                    {{ __('Register') }}</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <!-- Register Form Start here -->
                            <form class="form-horizontal login_validator m-b-20" id="register_valid"
                                action="{{ url('/user/register') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">{{ __('You are?') }}</label>
                                    </div>
                                    @foreach(Spatie\Permission\Models\Role::whereIn('name', array('lawyer','client','agent'))->get() as $roles)
                                    <div class="col-sm-3 col-12">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="roles" value="{{ $roles->name }}" class="custom-control-input form-control @error('roles') is-invalid @enderror" required>
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">{{ $roles->name }}</a>
                                        </label>
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @endforeach
                                </div>
                                <div class="form-group row">
                                    <!-- Title field -->
                                    <div class="col-sm-6">
                                        <label for="title" class="col-form-label">{{ __('Title *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="fa fa-get-pocket text-primary"></i>
                                            </span>
                                            <select type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                value="{{ old('title') }}" required id="title">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>
                                            </select>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Title field -->
                                    <!-- Username field -->
                                    <div class="col-sm-6">
                                        <label for="username" class="col-form-label">{{ __('Username *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="fa fa-user-circle-o text-primary"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}" required id="username"
                                                placeholder="Username">

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Username field -->
                                </div>
                                <div class="form-group row">
                                    <!-- First Name field -->
                                    <div class="col-sm-6">
                                        <label for="first name" class="col-form-label">{{ __('First Name *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" value="{{ old('first_name') }}" required
                                                autocomplete="first_name" id="first_name" placeholder="First Name">

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.First Name field -->
                                    <!-- Last Name field -->
                                    <div class="col-sm-6">
                                        <label for="last name" class="col-form-label">{{ __('Last Name *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="fa fa-user-plus text-primary"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" value="{{ old('last_name') }}" required
                                                autocomplete="last_name" id="last_name" placeholder="Last Name">

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Last Name field -->
                                </div>
                                <div class="form-group row">
                                    <!-- Email Address field -->
                                    <div class="col-sm-6">
                                        <label for="email" class="col-form-label">{{ __('Email Address *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope text-primary"></i>
                                            </span>
                                            <input type="email" placeholder="Email Address" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required autocomplete="email" />

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Email Address field -->
                                    <!-- Phone number field -->
                                    <div class="col-sm-6">
                                        <label for="phone" class="col-form-label">{{ __('Phone *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone text-primary"></i>
                                            </span>
                                            <input type="tel" id="phone" placeholder="Phone Number" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" required autocomplete="phone" />

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Phone number field -->
                                </div>
                                <div class="form-group row">
                                    <!-- Password field -->
                                    <div class="col-sm-6">
                                        <label for="password"
                                            class="col-form-label text-sm-right">{{ __('Password *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key text-primary"></i>
                                            </span>
                                            <input type="password" placeholder="Password" id="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror" required />

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Password Field -->
                                    <!-- Confirm Password field -->
                                    <div class="col-sm-6">
                                        <label for="confirmpassword"
                                            class="col-form-label">{{ __('Confirm Password *') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key text-primary"></i>
                                            </span>
                                            <input type="password" placeholder="Confirm Password" name="confirmpassword"
                                                id="confirmpassword"
                                                class="form-control @error('password') is-invalid @enderror" required />

                                            @error('confirmpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.Confirm Password field -->
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">Send me latest news and updates.</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="submit" value="Submit" class="btn btn-primary" />
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <label class="col-form-label">Already have an account?</label> <a
                                            href="{{ route('login') }}" class="text-primary login_hover"><b>Log
                                                In</b></a>
                                    </div>
                                </div>
                            </form>
                            <!-- /.Register form ends here -->
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
    <script src="{{ asset('admin/vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/select2/js/select2.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/wow/js/wow.min.js') }}"></script>
    <!--End of plugin js-->
    <!--Page level js-->
    <script src="{{ asset('admin/js/pages/register.js') }}"></script>
    <!-- end of page level js -->
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | {{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/logo1.ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--global styles-->
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="{{ asset('admin/vendors/c3/css/c3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/toastr/css/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/switchery/css/switchery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/new_dashboard.css') }}" />
    <link rel="stylesheet" href="#" id="skin_change" />
</head>
<body>

    <!-- Pre-Loader Starts here -->
    <div class="preloader" style=" position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 100000;
        backface-visibility: hidden;
        background: #ffffff;">
        <div class="preloader_img" style="width: 200px;
            height: 200px;
            position: absolute;
            left: 48%;
            top: 48%;
            background-position: center;
            z-index: 999999">
            <img src="{{ asset('admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    <!-- /.Pre-Loader End here -->

    <!-- Body wrap start here -->
    <div id="wrap">

    @include('layouts.panel.panel_header')

    <!-- Wrapper Start here -->
    <div class="wrapper">
        @include('layouts.panel.panel_sidebar')

        <!-- Content Section start here -->
        <div id="content" class="bg-container">
            @yield('content')
        </div>
        <!-- /.COntent section end here -->
    </div>
    <!-- /.Wrapper ends here -->

    @include('layouts.panel.panel_footer')

    </div>
    <!-- /.Body wrap ends here -->
    
    <!-- Scripts -->
    <!-- global scripts-->
    <script src="{{ asset('admin/js/components.js') }} "></script>
    <script src="{{ asset('admin/js/custom.js') }} "></script>
    <!-- global scripts end-->
    <script src="{{ asset('admin/vendors/raphael/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/d3/js/d3.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/c3/js/c3.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/switchery/js/switchery.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotspline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin/vendors/flotchart/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery_newsTicker/js/newsTicker.js') }}"></script>
    <script src="{{ asset('admin/vendors/countUp.js/js/countUp.min.js') }}"></script>
    <!--end of plugin scripts-->
    <script src="{{ asset('admin/js/pages/new_dashboard.js') }}"></script>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head data-theme="light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>dd</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/img/favicon.ico')}}">
    {!! \Vdes\Dreams\Dream::css() !!}
    {{-- <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css"> --}}
    @stack('css')
    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
</head>
<body>
    {{-- loading --}}
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="assets/img/logo-small.png" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">
                {{-- menu notifikasi --}}
                @include('template.dreams.menunotifikasi')
            </ul>


            <div class="dropdown mobile-user-menu">
                {{-- menu user kanan --}}
                @include('template.dreams.menuuser')
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            {{-- menu sidebar --}}
            @include('template.dreams.sidebar')
        </div>

        <div class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>


    {!! \Vdes\Dreams\Dream::js() !!}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('js')
    {{-- <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script> --}}
    <script src="{{url('/assets/js/script.js')}}"></script>
    @stack('html')
</body>
</html>

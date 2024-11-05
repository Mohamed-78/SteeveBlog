<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ page_title($title) ?? '' }}</title>

    <link href="{{asset('backend/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('backend/assets/js/layout.js')}}"></script>
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="layout-wrapper">
        @include('layouts.backend.header')
        @yield('content')
        @include('layouts.backend.footer')
    </div>

    <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('backend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
    <script src="{{asset('backend/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>

</html>

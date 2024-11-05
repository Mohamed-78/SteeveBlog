<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ page_title($title) ?? '' }}</title>

    <link rel="stylesheet" href="{{asset('assets/font/flaticon_jio_-_influencer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/splide/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/plyr/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slim-select/slimselect.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/no-ui-slider/nouislider.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

    @include('layouts.frontend.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/splide/splide.min.js')}}"></script>
    <script src="{{asset('assets/vendor/splide/splide-extension-auto-scroll.min.js')}}"></script>
    <script src="{{asset('assets/vendor/slim-select/slimselect.min.js')}}"></script>
    <script src="{{asset('assets/vendor/plyr/plyr.polyfilled.js')}}"></script>
    <script src="{{asset('assets/vendor/no-ui-slider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/vendor/fs-lightbox/fslightbox.js')}}"></script>
    <script src="{{asset('assets/js/tab.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>

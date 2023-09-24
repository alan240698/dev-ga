<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>My Blog</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- theme meta -->
    <meta name="theme-name" content="reader" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('/css/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins/slick/slick.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    @include('user.layouts.header')

    @yield('banner')

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')

                @yield('sidebar')
            </div>
        </div>
    </section>

    @include('user.layouts.footer')


    <!-- JS Plugins -->
    <script src="{{ asset('/css/plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('/css/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/css/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/css/plugins/instafeed/instafeed.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>

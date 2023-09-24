<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@stack('title')</title>
    @include('admin.layouts.partials.head')
    @stack('style')
    @stack('js')
</head>

<body class="app">
    @include('admin.layouts.partials.header') 

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            @stack('content')
        </div><!--//app-content-->

        @include('admin.layouts.partials.footer') 
    </div><!--//app-wrapper-->

    <!-- Javascript -->
    <script src="{{ asset('themes/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('themes/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Charts JS -->
    <script src="{{ asset('themes/assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('themes/assets/js/index-charts.js') }}"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('themes/assets/js/app.js') }}"></script>

    @stack('script')

</body>

</html>

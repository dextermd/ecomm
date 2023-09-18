<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/summernote/summernote-bs4.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        @include('admin.layouts.navbar')

        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/assets/modules/popper.js')}}"></script>
<script src="{{asset('backend/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('backend/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('backend/assets/js/page/index-0.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('backend/assets/js/scripts.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            @php
                toastr()->error($error);
            @endphp
        @endforeach
    @endif
</script>
@stack('scripts')
</body>
</html>

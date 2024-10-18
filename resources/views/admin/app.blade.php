<!DOCTYPE html>
<title>@yield('title')</title>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <script src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/adminlte.js')}}"></script>
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/x-icon">
    <!-- Theme style -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav>
        @include ('admin.layouts.navbar')
    </nav>
    @yield('content')
    @include('admin.layouts.footer')

</body>
<style>
    .validation_err{
        color: red;
        font-size: 90%;
    }
</style>
</html>


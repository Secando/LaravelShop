<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset("/css/index.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
          rel="stylesheet">
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/x-icon">

</head>


<body>
<div style="
    display: flex;
    flex-direction: column;
    min-height: 100vh;
justify-content: space-between;">
    <nav>
        @include ('layouts.navbar')
    </nav>
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>
<style>

</style>

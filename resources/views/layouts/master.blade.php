<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<section class="main container-fluid">

    <div class="row">
        <!--sidebar start-->
        @include('layouts.sidebar')
        <!--sidebar end-->

        <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">

            <!--header start-->
            @include('layouts.header')
            <!--header end-->

            <!--content Area Start-->
            @yield('content')
            <!--content Area Start-->

        </div>
    </div>

</section>

    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>

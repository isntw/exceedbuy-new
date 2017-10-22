<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/styles-merged.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">

        <!--[if lt IE 9]>
          <script src="{{ URL::asset('js/vendor/html5shiv.min.js')}}"></script>
          <script src="{{ URL::asset('js/vendor/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        @include('layouts/web/_templates/header')
        @yield('content')
        @include('layouts/web/_templates/footer')
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
        </div>
        <script src="{{ URL::asset('js/scripts.min.js')}}"></script>
        <script src="{{ URL::asset('js/main.min.js')}}"></script>
        <script src="{{ URL::asset('js/custom.js')}}"></script>
    </body>
</html>

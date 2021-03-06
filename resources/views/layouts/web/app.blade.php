<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <meta name="description"
              content="We established ExceedBuy, to offer babies aged 3-36 months PREMIUM QUALITY products, in addictive TRENDY DESIGNS that will make your little treasure shine!">
        <meta name="keywords" content="baby,babies products, baby product, product, shop, baby shop, ear defender">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="img/slide.jpg"/>
        {!! Html::style('/resources/libs/vendors/vendors.min.css') !!}   
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        @stack('style')

        <!--Custom CSS-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="{{ URL::asset('js/vendor/html5shiv.min.js')}}"></script>
        <script src="{{ URL::asset('js/vendor/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        @include('layouts/web/_templates/header')
        @yield('content')
        @include('layouts.web._templates.people_say')
        @include('layouts/web/_templates/footer')
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
        </div>
        <a href="https://twitter.com/home?status=ExceedBuy">Share on Twitter</a>


        @include('layouts.web._templates.floating_social_media')

        <!--Custom SCRIPTS-->
        {!! Html::script('/resources/libs/vendors/vendors.min.js') !!}
        @stack('scripts')

        @include('layouts.web._templates.messenger')
        @include('layouts.web._templates.notifications')
    </body>
</html>

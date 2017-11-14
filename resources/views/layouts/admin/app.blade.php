<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Administrare Transport">
        <meta name="author" content="Iustinian Monea">

        <title>Administrare Transport</title>

        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
        <script src="{{ URL::asset('resources/theme/js/jquery.min.js')}}"></script>
        
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>


        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('resources/theme/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ URL::asset('resources/theme/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ URL::asset('https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" >
        <link href="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" rel="stylesheet" >
        <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" >
        <link href="{{ URL::asset('resources/theme/css/startmin.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ URL::asset('resources/theme/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
                <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('layouts.admin._templates.top-navbar')
                @include('layouts.admin._templates.side-navbar')
            </nav>
            @include('layouts.admin._templates.content')
        </div>
        <!-- jQuery -->

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('resources/theme/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ URL::asset('resources/theme/js/metisMenu.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->

        <script src="{{ URL::asset('resources/theme/js/startmin.js')}}"></script>
        <script src="{{ URL::asset('resources/theme/js/custom.js')}}"></script>
        @stack('scripts')
        @include('layouts.admin._templates.notifications')
    </body>
</html>

<!DOCTYPE html>
<html >
    <head>
        <title>Nora</title>
        <link rel="icon" href="{{asset('loginicon.png')}}">
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" >  
        <link rel="stylesheet" type="text/css" href="{{asset('css/logo-nav.css')}}" > 
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >


    </head>

    <body>

        @include('layouts.navbar')
        <div class="container">
            <div class="content">
            @yield('content')
            </div>
        </div>
        <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    

    </body>
</html>

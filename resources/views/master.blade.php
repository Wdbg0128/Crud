<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Crud Productos')</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
    @include('partials.nav-header-main')

    <div class="container">

        @include('partials.session-flash-status')
        @include('partials.validacion-errors')  
        @yield('content')
    </div>
 
</body>
</html>
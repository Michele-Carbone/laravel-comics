<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!--HEADER-->
    @include('includes.header')


    <!--MAIN: CARD AND PRODUCTS -->
    <main>
        @yield('content')
        
    </main>
    @include('includes.products')
    
    <!--FOOTER (file contenuto all interno della cartella includes/main/ )-->
    @include('includes.main.footer')
</body>
</html>
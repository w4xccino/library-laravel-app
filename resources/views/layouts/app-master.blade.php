<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
@include("layouts.navbar")
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>

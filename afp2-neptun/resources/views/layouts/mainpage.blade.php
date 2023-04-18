<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NeptunPlus EKE_HALLGTÓI_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains+Mono&amp;display=swap">
    <link rel="stylesheet" href="{{URL::asset('/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/Footer-Dark-icons.css')}}">
</head>

<body class="flex-column" style="min-height: 100vh;display: flex;">
    @include('layouts._header')
    @yield('content')
    @include('layouts._footer')

</body>

</html>
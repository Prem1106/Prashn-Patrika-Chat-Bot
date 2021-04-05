<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset(url('assets_navbar_navbar/bootstrap/css/bootstrap.min.css'))}}">
    <link rel="stylesheet" href="{{asset(url('assets_navbar/css/styles.css'))}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="{{asset(url('assets_navbar/img/Logo2.png'))}}" alt="Logo"></a></div>
</nav>
<script src="{{asset(url('assets_navbar/js/jquery.min.js'))}}"></script>
<script src="{{asset(url('assets_navbar/bootstrap/js/bootstrap.min.js'))}}"></script>
</body>

</html>

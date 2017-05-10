<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

@yield('content')

<script src="/js/app.js"></script>
<script src="/js/materialize.min.js"></script>
<script> $(".button-collapse").sideNav();</script>
<script>
    $(document).ready(function () {
        $('.modal').modal();
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta property="og:title" content="CreaDent"/>
{{--    <meta property="og:image" content="https://alpina-interiror.ru/img/fav.jpg" />--}}
    <meta property="og:video:width" content="40" />
    <meta property="og:video:height" content="40" />
    <meta property="og:description" content="Стоматологическая клиника" />
{{--    <meta property="og:url" content= "https://alpina-interior.ru/" />--}}
    <meta name="keywords" content="
        Стоматология новороссийск, лечение зубов новороссийск, зубы новороссийск, creadent, creadent новороссийск,
        чистка зубов новороссийск, имплантация зубов новороссийск, стоматологическая клиника новороссийск,
    ">

    <title>@yield('title')</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit-icons.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    {{--    <link rel="icon" href="{{ asset('css/favicon.png') }}" type="image/x-icon"/>--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/glob.css?v=1') }}">
@yield('css')

</head>
<body>

<div id="app">
    <h1 hidden></h1>
    @include('layouts.header')
    @yield('main')
    @include('layouts.footer')
</div>



<!-- Scripts -->
<script src="{{ asset('js/app.js?v=1') }}" defer></script>

</body>
</html>

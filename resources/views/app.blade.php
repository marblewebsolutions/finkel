<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>FINKEL</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @if (getenv('APP_ENV') != 'local')
        <link rel="stylesheet" href="https://use.typekit.net/rpb0woy.css">
    @endif


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- SEO
    <meta name="description" content="Enter Description Here">
    <meta name="keywords" content="Finkel">
    -->

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    <div class="view {{ strtolower($page_class) }}" id="top">
        @if ($static)
            @include('partials.static')
        @endif

        <video class="wind-bg" id="wind-bg" autoplay loop muted playsinline preload="metadata">
            <source src="{{ asset('video/FKL7.mp4') }}" type="video/mp4">
        </video>

        @yield('modal')

        <div class="main">
            @yield('main')
        </div>

        @include('partials.footer')
    </div>

    @hasSection('js')
        @yield('js')
    @else
        <script src="{{ url('js/app.js') }}"></script>
    @endif
</body>
</html>

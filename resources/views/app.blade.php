<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>F I N K E L {{ ($page_title != 'Home' ? '| '.$page_title : '') }}</title>
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

    <meta name="description" content="FINKEL is an electronic, soul / pop duo comprised of Jane and Brian Spencer. The project is based in Los Angeles, CA. The duo previously made up the band Less Is More and were based in Kalamazoo, Michigan.">
    <meta name="keywords" content="Finkel, Band, Music, Video, Design, Animation, Alternative, Pop">

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="view">
        <div class="loading-screen show">
            <img src="{{ asset('images/Finkel_Warp.gif') }}" alt="Loading...">
            
            <noscript>
                <p>For full functionality of this page, it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank">instructions how to enable JavaScript in your web browser</a></p>
            </noscript>
        </div>
        
        @include('partials.header')
        <div class="page-border left"></div>
        <div class="page-border right"></div>
        @include('partials.footer')
        
        <main class="main">
            @yield('main')
        </main>
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>

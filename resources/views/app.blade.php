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

    <!--<meta name="description" content="Enter Description Here">-->
    <meta name="keywords" content="finkel, band">

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="view" id="top">
        @include('partials.static')

        <video class="wind-bg" id="wind-bg" autoplay loop muted playsinline preload="metadata">
            <source src="{{ asset('video/FKL7.mp4') }}" type="video/mp4">
        </video>

        <div class="main">
            <div class="page home active">
                @include('pages.home')
            </div>
            
            <div class="page story">
                @include('pages.story')
            </div>
            
            <div class="page music-media">
                @include('pages.music-media')
            </div>
            
            <div class="page digs">
                @include('pages.digs')
            </div>
            
            @include('partials.back-to-top')
        </div>

        @include('partials.footer')
    </div>

    <!--<script src="https://sdks.shopifycdn.com/js-buy-sdk/v1/latest/index.umd.min.js"></script>-->
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>

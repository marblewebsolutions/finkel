<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>F I N K E L</title>
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
    <div class="view">
        @include('partials.header')
        <div class="page-border left"></div>
        <div class="page-border right"></div>
        @include('partials.footer')
        
        <div class="main">
            <section id="home">
                <div class="section-content">
                    <div class="video-container">
                        <video id="header-animation" autoplay loop muted playsinline preload="metadata">
                            <source src="{{ asset('video/FINKEL-web.mov') }}" type="video/mp4">
                            <img src="{{ asset('images/IMG_9806.PNG') }}" alt="FINKEL BAND">
                        </video>
                    </div>
                </div>
            </section>
            
            <section id="tour">
                <div class="section-content">
                    <h2 class="sub-title">Tour Dates</h2>
                    <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="FINKEL" data-display-local-dates="false" data-display-past-dates="false" data-auto-style="false" data-text-color="#000000" data-link-color="#FF4141" data-background-color="rgba(0,0,0,0)" data-display-limit="5" data-link-text-color="#000000" data-display-lineup="false" data-separator-color="rgba(255, 255, 255, 0.5)"></a>
                </div>
            </section>
            
            <section id="contact">
                <div class="section-content">
                    <h1>Contact</h1>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>

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
            <section id="section-1">
                <div class="section-content">
                    <h1>Home</h1>
                </div>
            </section>
            
            <section id="section-2">
                <div class="section-content">
                    <h1>Live</h1>
                </div>
            </section>
            
            <section id="section-3">
                <div class="section-content">
                    <h1>Contact</h1>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>

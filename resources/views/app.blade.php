<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-135116374-1');
    </script>

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

    <meta name="description" content="Los Angeles based electronic soul / pop duo. Members: Jane & Brian Spencer">
    <meta name="keywords" content="Finkel, Band, Music, Video, Design, Animation, Alternative, Pop">

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2815296555169723');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2815296555169723&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <div class="view {{ (isset($page_class) ? $page_class : '') }}">
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

@extends('app', ['page_title' => 'Home'])


@section('main')
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
        <h2 class="sub-title">Contact</h2>
        
        <p class="mb-md">To stay up to date with the latest <span class="stretch-word">FINKEL</span> info,<br>sign up for our newsletter</p>
        
        <div class="mailchimp-wrapper">
            @include('partials.mailchimp')
        </div>
        
        <div class="btn mailchimp-toggle"><p>Sign Up for our Newsletter</p></div>
        
        <hr>
        
        <p class="email-link mb-md">Management:<br><a class="text-link" href="mailto:Brian@plustalent.net">Brian@plustalent.net</a></p>
        
        <p class="email-link">Label:<br><a class="text-link" href="mailto:Justin@blossomrecs.com">Justin@blossomrecs.com</a></p>
    </div>
</section>
@stop
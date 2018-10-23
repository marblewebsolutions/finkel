<div class="block header">
    <div class="container">
        @include('partials.nav')
        
        <div class="move-with-mouse">
            <video class="border-orange" id="header-animation" autoplay loop muted playsinline preload="metadata">
                <source src="{{ asset('video/FINKEL-web.mov') }}" type="video/mp4">
                <img src="{{ asset('images/IMG_9806.PNG') }}" alt="FINKEL BAND">
            </video>
        </div>
        <p class="down"><a class="smooth-scroll" href="{{ (!empty($shows) ? '#shows' : '#preorder') }}"><i class="material-icons">keyboard_arrow_down</i></a></p>
    </div>
</div>

<div class="block block-preorder" id="preorder">
    <div class="container move-with-mouse">
        <div class="box border-orange">
            <h3 class="mb-xs">L E X I C O N</h3>
            
            <p class="mb-med">PRE-ORDER NOW ON</p>
            
            <p>
                <a class="btn" href="https://blssmr.co/2PnMJQk" target="_blank">Apple Music</a>
            </p>
        </div>
    </div>
</div>

@if (!empty($shows))
    <div class="block shows" id="shows">
        <div class="move-with-mouse">
            <div class="box border-orange">
                <h3>TOUR SCHEDULE</h3>
                <table>
                    @foreach ($shows as $index => $show)
                        @if ($index == 4)
                            </table>
                            <div class="show-on-more">
                                <table>
                        @endif
                        <tr class="show">
                            <td class="info date"><span class="month">{{date('M', $show['time'])}}</span><br><span class="day">{{date('j', $show['time'])}}</span></td>
                            <td class="info location">{{$show['location']}}</td>
                            <td class="info tix"><a target="_blank" href="{{$show['link']}}"><p><span class="x">TIX</span><span class="ckets">TICKETS</span></p></a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
                <h3 class="more-toggle"><a href="#">Show More</a></h3>
            </div>
        </div>
    </div>
@endif

<div class="block gallery" id="gallery">
    <img class="border-red" src="{{asset('images/finkel-square.jpg')}}" alt="gallery-photo">
    <img class="border-white" src="{{asset('images/287A2921.jpg')}}" alt="gallery-photo">
    <img class="border-red" src="{{asset('images/287A2858.jpg')}}" alt="gallery-photo">
    <img class="border-white" src="{{asset('images/387ED5C2-D5FE-43E7-A8E8-EE705FD8062F.jpg')}}" alt="gallery-photo">
    <img class="border-red" src="{{asset('images/Crouching_Tiger_PROMO.png')}}" alt="Crouching Tiger">
    <img class="border-white" src="{{asset('images/j_b_2.jpg')}}" alt="Brian & Jane 2">
    <img class="border-red" src="{{asset('images/Two_Faced.jpg')}}" alt="Two Faced">
    <img class="border-white" src="{{asset('images/j_b_1.jpg')}}" alt="Brian & Jane 1">
    
    <img class="border-red" src="{{asset('images/finkel-square.jpg')}}" alt="gallery-photo">
    <img class="border-white" src="{{asset('images/287A2921.jpg')}}" alt="gallery-photo">
    <img class="border-red" src="{{asset('images/287A2858.jpg')}}" alt="gallery-photo">
    <img class="border-white" src="{{asset('images/387ED5C2-D5FE-43E7-A8E8-EE705FD8062F.jpg')}}" alt="gallery-photo">
    <img class="border-red" src="{{asset('images/Crouching_Tiger_PROMO.png')}}" alt="Crouching Tiger">
    <img class="border-white" src="{{asset('images/j_b_2.jpg')}}" alt="Brian & Jane 2">
    <img class="border-red" src="{{asset('images/Two_Faced.jpg')}}" alt="Two Faced">
    <img class="border-white" src="{{asset('images/j_b_1.jpg')}}" alt="Brian & Jane 1">
    
    <div class="cover"></div>
    
    <div class="close-container">
        <p><a href="#">&times;</a></p>
    </div>
</div>

<div class="block contact btt-show" id="contact">
    <div class="container pr-sm move-with-mouse">
        <div class="border-orange social box">
            <h3>FIND US ON SOCIAL</h3>
            <p>
                <a target="_blank" href="http://twitter.com/finkelband"><img src="{{ asset('images/twitter_black.png') }}" alt="Twitter" height="83px" width="83px"></a>
                <a target="_blank" href="http://instagram.com/finkel_band"><img src="{{asset('images/instagram_black.png')}}" alt="Instagram"></a>
                <a target="_blank" href="http://facebook.com/finkelband"><img src="{{asset('images/facebook_black.png')}}" alt="Facebook"></a>
            </p>
        </div>
    </div><div class="container px-sm move-with-mouse">
        <div class="border-orange email box">
            <h3>CONNECT WITH US</h3>
            <p class="mb-sm"><span class="stretch-word">management</span> || <a href="mailto:john@plustalent.net">john@plustalent.net</a></p>
            <p class="mb-sm"><span class="stretch-word">press</span> || <a href="mailto:george@planetarygroup.com">george@planetarygroup.com</a></p>
            <p><span class="stretch-word">band</span> || <a href="mailto:finkelband@gmail.com">finkelband@gmail.com</a></p>
            
            <div class="mailchimp-wrapper">
                @include('partials.mailchimp')
            </div>
            
            <div class="btn mailchimp-toggle"><p>Sign up for our Newsletter</p></div>
        </div>
    </div><div class="container pl-sm move-with-mouse">
        <div class="box border-orange tune-links">
            <h3>LISTEN ON</h3>
            <p>
                <a target="_blank" href="https://open.spotify.com/artist/4LLNGLNjMcaomz222tTNph?si=NZfpZc4hTl2ej9CslAwWYg"><img src="{{asset('images/spotify_black.png')}}" alt="Spotify"></a>
                <a target="_blank" href="https://www.youtube.com/channel/UC1i3es2uL002PbLxXV0KzpQ?view_as=subscriber"><img src="{{asset('images/youtube_black.png')}}" alt="YouTube"></a>
                <iframe allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fuser-657791&color=black_white&size=56" style="width: 56px; height: 56px;"></iframe>
            </p>
        </div>
    </div>
</div>

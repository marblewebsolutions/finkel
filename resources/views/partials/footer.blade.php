<footer class="footer">
    <div class="footer-left">
        <nav class="nav-links">
            <a class="nav-link {{ ($page_title == 'Home' ? 'active' : '') }}" href="{{ url('/#home') }}" section="home">Home</a>
            <a class="nav-link" href="{{ url('/#tour') }}" section="tour">Tour</a>
            <a class="nav-link" href="{{ url('/#contact') }}" section="contact">Contact</a>
            <a class="nav-link {{ ($page_title == 'Shop' ? 'active' : '') }}" href="{{ url('shop') }}">Shop</a>
            <a class="nav-link social-expand" href="#">Social</a>
        </nav>
    </div>
    
    <div class="footer-right">
        <div class="social">
            <a target="_blank" href="https://open.spotify.com/artist/4LLNGLNjMcaomz222tTNph?si=NZfpZc4hTl2ej9CslAwWYg"><img src="{{asset('images/spotify_black.png')}}" alt="Spotify"></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC1i3es2uL002PbLxXV0KzpQ?view_as=subscriber"><img src="{{asset('images/youtube_black.png')}}" alt="YouTube"></a>
            <iframe allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fuser-657791&color=black_white&size=24" height="24px" width="24px"></iframe>
            <a target="_blank" href="http://twitter.com/finkelband"><img src="{{ asset('images/twitter_black.png') }}" alt="Twitter"></a>
            <a target="_blank" href="http://instagram.com/finkel_band"><img src="{{asset('images/instagram_black.png')}}" alt="Instagram"></a>
            <a target="_blank" href="http://facebook.com/finkelband"><img src="{{asset('images/facebook_black.png')}}" alt="Facebook"></a>
        </div>
        
        <div class="legal">
            <p>&copy; {{ date("Y") }} Finkel</p>
            <p><a class="text-link" href="#">Privacy Policy</a></p>
        </div>
    </div>
    
    <p class="mws-credit"><a target="_blank" href="http://marblewebsolutions.com">Designed & Developed by<br><span class="blue">Marble Web Solutions</span> <span class="orange">LLC</span></a></p>
</footer>

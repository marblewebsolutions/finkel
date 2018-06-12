<nav class="nav">
    <div class="mobile-toggle">
        <div class="top line"></div>
        <div class="middle line"></div>
        <div class="bottom line"></div>
    </div>
    <ul class="nav-links">
        <li class="nav-link {{($currentPage == 'home' ? 'active' : '')}}"><a href="{{ url('/') }}">HOME</a></li>
        <li class="nav-link {{($currentPage == 'story' ? 'active' : '')}}"><a href="{{ url('/story') }}">STORY</a></li>
        <li class="nav-link {{($currentPage == 'music + media' ? 'active' : '')}}"><a href="{{ url('/music-media') }}">MUSIC + MEDIA</a></li>
        <li class="nav-link {{($currentPage == 'digs' ? 'active' : '')}}"><a href="{{ url('/digs') }}">DIGS</a></li>
        <li class="nav-link"><a class="{{($currentPage == 'home' ? 'smooth-scroll' : '')}}" href="{{ url('/#contact') }}">CONTACT</a></li>
    </ul>
</nav>

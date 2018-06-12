@extends('app', ['page_class' => 'music-media'])


@section('main')
    @include('partials.nav', ['currentPage' => 'music + media'])
    <div class="block music">
        <div class="album-cover split border-white">
            <img src="{{ url('images/finkel-square.jpg') }}" alt="">
        </div><div class="tune-links split pl-med">
            <div class="box border-orange">
                <h3>LISTEN ON</h3>
                <p>
                    <a target="_blank" href="https://open.spotify.com/artist/4LLNGLNjMcaomz222tTNph?si=NZfpZc4hTl2ej9CslAwWYg"><img src="{{asset('images/spotify_black.png')}}" alt="Spotify"></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UC1i3es2uL002PbLxXV0KzpQ?view_as=subscriber"><img src="{{asset('images/youtube_black.png')}}" alt="YouTube"></a>
                    <iframe allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fuser-657791&color=black_white&size=56" style="width: 56px; height: 56px;"></iframe>
                </p>
            </div>
        </div>
    </div>
@stop

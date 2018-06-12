@extends('app', ['page_class' => 'home'])


@section('main')
    <div class="block header">
        <div class="container">
            @include('partials.nav', ['currentPage' => 'home'])
            <video class="border-orange" autoplay loop muted playsinline preload="metadata">
                <source src="{{ asset('video/FINKEL-web.mov') }}" type="video/mp4">
                <img src="{{ asset('images/IMG_9806.PNG') }}" alt="FINKEL BAND">
            </video>
            <p class="down"><a class="smooth-scroll" href="#shows"><i class="material-icons">keyboard_arrow_down</i></a></p>
        </div>
    </div>

    <div class="block shows" id="shows">
        <div class="box border-orange">
            <h3>TOUR SCHEDULE</h3>
            <table>
                @foreach ($shows as $index => $show)
                    @if (time()/60/60/24 < date($show['time']))
                        <tr class="show @if ($index > 4) show-on-more @endif">
                            <td class="info date"><span class="month">{{date('M', $show['time'])}}</span><br><span class="day">{{date('j', $show['time'])}}</span></td>
                            <td class="info location">{{$show['location']}}</td>
                            <td class="info tix"><a target="_blank" href="{{$show['link']}}"><p><span class="x">TIX</span><span class="ckets">TICKETS</span></p></a></td>
                        </tr>
                    @endif
                @endforeach
                </div>
            </table>
            <h3 class="more-toggle"><a href="#">Show More</a></h3>
        </div>
    </div>

    <div class="block" id="gallery">
        <div class="gallery">
            <div class="row">
                <div class="photo photo-left">
                    <img class="border-red" src="{{asset('images/01F0EBB7-1D49-4E42-B3D6-89370282CDC9.jpg')}}" alt="J B 2">
                </div><div class="photo photo-right">
                    <img class="border-white" src="{{asset('images/287A2921.jpg')}}" alt="J B 1">
                </div>
            </div>
            <div class="row">
                <div class="photo photo-left">
                    <img class="border-white" src="{{asset('images/287A2858.jpg')}}" alt="J B 2">
                </div><div class="photo photo-right">
                    <img class="border-red" src="{{asset('images/387ED5C2-D5FE-43E7-A8E8-EE705FD8062F.jpg')}}" alt="J B 1">
                </div>
            </div>
        </div>
    </div>

    <div class="block contact btt-show" id="contact">
        <div class="container pr-sm">
            <div class="border-orange social box">
                <h3>FIND US ON SOCIAL</h3>
                <p>
                    <a target="_blank" href="http://twitter.com/finkelband"><img src="{{ asset('images/twitter_black.png') }}" alt="Twitter" height="83px" width="83px"></a>
                    <a target="_blank" href="http://instagram.com/finkel_band"><img src="{{asset('images/instagram_black.png')}}" alt="Instagram"></a>
                    <a target="_blank" href="http://facebook.com/finkelband"><img src="{{asset('images/facebook_black.png')}}" alt="Facebook"></a>
                </p>
            </div>
        </div><div class="container pl-sm">
            <div class="border-orange email box">
                <h3>CONNECT WITH US</h3>
                <p class="mb-sm"><span class="stretch-word">management</span> || <a href="mailto:john@plustalent.net">john@plustalent.net</a></p>
                <p class="mb-sm"><span class="stretch-word">press</span> || <a href="mailto:george@planetarygroup.com">george@planetarygroup.com</a></p>
                <p><span class="stretch-word">band</span> || <a href="mailto:finkelband@gmail.com">finkelband@gmail.com</a></p>
            </div>
        </div>
    </div>

    @include('partials.back-to-top')
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

@extends('app', ['page_title' => 'Link2Fink', 'page_class' => 'view-link2fink'])


@section('main')
<section id="link2fink-grid">
    <div class="section-content">
        <div class="mt-md mb-sm">
            <p class="text-center">Tap on any image to learn more.</p>
        </div>
        <div class="grid">
            @foreach($photos as $photo)
                @php
                    $link = $photo[0];
                    $src = $photo[1];
                @endphp
                <a class="grid-item" href="{{ $link }}" target="_blank">
                    <img src="{{ asset('images/link2fink/'.$src) }}" alt="">
                    <div class="grid-cover"></div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@stop
@extends('app', ['page_class' => 'story'])


@section('main')
    @include('partials.nav', ['currentPage' => 'story'])
    
    <div class="block">
        <div class="border-orange">
            <img src="{{asset('/images/FINKEL_Comic_Bio.jpg')}}" alt="Brian & Jane Comic">
        </div>
    </div>
    
    <div class="block hide">
        <div class="img-container border-white">
            <img src="{{asset('images/Crouching_Tiger_PROMO.png')}}" alt="Crouching Tiger">
        </div>

        <div class="box border-orange ml-med">
            <p>Jane and Brian Spencer of F I N K E L seem to arrive from the near future, or perhaps somewhere out there,
                appearing with a slight shimmer of a dimension adjacent to our own. With an atmosphere treading the
                periphery of pop, the duo’s tangible vocal presence overlays hypnotic electro pulsations in a combination
                that teases out details of last night’s otherworldly dreams and tempts the waking state to return to its
                astral analog.</p>
        </div>
    </div>

    <div class="block hide">
        <div class="box border-red mr-med">
            <p>Not quite definable by conventional genres, their avant-garde sensibilities will appeal to an audience
                seeking a respite from the pedestrian daily grind and typical expectations. There’s an enchanting quality
                that pervades the work of this singing and songwriting combo. Their lyrics explore themes of love and
                desire; understanding oneself and one another beyond surface qualities; and questioning the status quo. With
                every track, they’re suggesting we take another, closer look, because what we think we see and hear just
                might deserve inspection.</p>
        </div>

        <div class="img-container border-white">
            <img src="{{asset('images/j_b_2.jpg')}}" alt="Brian & Jane 2">
        </div>
    </div>

    <div class="block hide">
        <div class="img-container border-white">
            <img src="{{asset('images/Two_Faced.jpg')}}" alt="Two Faced">
        </div>

        <div class="box border-orange ml-med">
            <p>While it remains unclear where these two have been, it’s evident enough that they’re here now. She triggering
                a MIDI mixing board, he on guitar, their vocals intertwine with a shadowy fluidity that invokes notions of
                another time; perhaps the middle of next week. They sense you wondering what you’re doing then, and invite
                you back to the present with a wink.</p>
        </div>
    </div>

    <div class="block btt-show hide">
        <div class="box border-red mr-med">
            <p>A tale of two spirits unravels curiously from the seams of F I N K E L’s new singles. Their ethereal
                synthetic textures and rich vocal harmonies produce an aesthetic that grabs attention and gives it a nudge.
                The result somehow distills the mood of a strange day’s fleeting moments into a potent, lingering hex. Like
                the feeling of a passing glance with a mysterious stranger, we’re left assured we just encountered something
                ineffable, and wondering if someone else felt it too.</p>
        </div>

        <div class="img-container border-white">
            <img src="{{asset('images/j_b_1.jpg')}}" alt="Brian & Jane 1">
        </div>
    </div>

    @include('partials.back-to-top')
@stop
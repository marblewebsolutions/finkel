@extends('app', ['page_title' => 'Shop'])


@section('main')
<section id="shop">
    <div class="section-content">
        <h2 class="sub-title">Shop</h2>
        
        <div class="product-items">
            @include('partials.products.shirt')
            @include('partials.products.hat')
            @include('partials.products.poster')
        </div>
    </div>
</section>
@stop
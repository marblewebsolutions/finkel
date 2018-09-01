@include('partials.nav')

<div class="block">
    <!--<div class="box border-red">
        <h3>MERCHANDISE COMING SOON</h3>
        <p><a class="home-link" href="#">BACK TO HOME</a></p>
    </div>-->
    
    <div class="product-items">
        @include('partials.products.shirt')
        @include('partials.products.hat')
        @include('partials.products.poster')
    </div>
</div>


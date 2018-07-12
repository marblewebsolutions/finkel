@extends('app', ['page_class' => 'digs'])


@section('main')
    @include('partials.nav', ['currentPage' => 'digs'])
    <div class="block">
        <div class="box border-red">
            <h3>MERCHANDISE COMING SOON</h3>
            <p><a href="/">BACK TO HOME</a></p>
        </div>
    </div>
@stop

@section('js')
    <script src="http://sdks.shopifycdn.com/js-buy-sdk/v1/latest/index.umd.min.js"></script>
    <script src="{{ url('/js/digs.js') }}"></script>
@stop

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

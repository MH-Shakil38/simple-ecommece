@extends('website.layouts.master')

@section('content')
    @php
        $slider      = slider();
        $hot_deal    = hot_deal();
        $categories  = categoris();
        $products    = products();
    @endphp

    @include('website.include.slider')

   @include('website.include.all-categories')

   @include('website.include.hot-deal')

    @include('website.include.all-product')
@endsection

@extends('_layouts.master')

@section('pageID', 'checkout-canceled')

@section('pageNameSegment', 'checkout-canceled')

@section('pageTitle', 'Checkout error.')

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
        <p>There was an error during the checkout process, please try again.</p>
    </div>

@endsection
@extends('_layouts.master')

@section('pageID', 'checkout-success')

@section('pageTitle', 'Success! Your X Cloud Vision is on its way.')

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
    </div>

@endsection
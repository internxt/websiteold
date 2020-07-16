@extends('_layouts.master')

@section('pageID', '404')

@section('pageTitle', 'Page Not Found')

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
        <p>The page you were trying to view does not exist.</p>
    </div>

@endsection

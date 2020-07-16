@extends('_layouts.master')

@section('pageID', '500')

@section('pageTitle', 'Server Error')

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
        <p>There was a problem rendering this page.</p>
    </div>

@endsection

@extends('_layouts.master')

@section('pageID', '503')

@section('pageTitle', $exception->getMessage())

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
    </div>

@endsection

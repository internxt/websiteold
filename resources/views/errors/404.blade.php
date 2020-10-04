@extends('_layouts.master')

@section('pageID', '404')

@section('pageTitle', 'Page Not Found')

@push('additionalMeta')
    <!-- Bootstrap 4.5.2 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
@endpush

@section('body')

    <div class="flex flex-col h-full justify-center items-center">
        <h1 class="text-2xl">@yield('pageTitle')</h1>
        <p>The page you were trying to view does not exist.</p>
    </div>

@endsection

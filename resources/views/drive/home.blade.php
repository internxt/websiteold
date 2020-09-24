@extends('_layouts.master')

@section('pageID', 'internxt-home')

@section('pageTitle', 'Internxt – Be limitless.')

@section('metaDescription',
    'Internxt is excitement, ambition, innovation. Join the revolution. The future is now. Make
    the switch to Internxt Drive, a private, green, safe and free cloud storage.',)

@section('additionalMeta')
    <link rel="alternate" href="https://internxt.com/" hreflang="x-default">
@endsection

@section('body')

    <div class="__container">
        <div class="__sections">

            @include('drive.home-sections.welcome')

            @include('drive.home-sections.second')

            @include('drive.home-sections.footer')

        </div>
    </div>

@endsection

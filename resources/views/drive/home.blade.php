@extends('_layouts.master')

@section('pageID', 'internxt-home')

@section('pageNameSegment', 'home')

@section('pageTitle', 'Internxt – Be limitless.')

@section('metaDescription', 'Internxt is excitement, ambition, innovation. Join the revolution. The future is now. Make the switch to Internxt Drive, a private, green, safe and free cloud storage.')

@push('additionalMeta')
    <!-- Bootstrap 4.5.2 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="alternate" href="https://internxt.com/" hreflang="x-default">
    <!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
    <link href="css/style.min.css" rel="stylesheet" />
@endpush

@section('body')

    @include('drive.home-sections.welcome')

@endsection

@push('js')
    <!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- 
       Google maps JS API 
       Don't forget to replace the key "AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U" to your own! 
       Learn how to get a key: https://help.designmodo.com/article/startup-google-maps-api/ 
      -->
    <!--
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
    -->
    <!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <!-- Startup JS (Custom js for all blocks) -->
    <script src="js/script.js"></script>

@endpush

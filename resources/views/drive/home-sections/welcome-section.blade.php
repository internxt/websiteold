@extends('drive.home-sections.welcome-template')

<div class="line line01">
  <svg class="line__svg" xmlns="http://www.w3.org/2000/svg" width="542" height="820">
  <path fill="none" stroke="#d1ecfd" stroke-width="2" d="M67.002 1c-9.846 2.322-18.256 5.77-25.23 10.347C14.268 29.392 1 59 1 80.242c0 19.465 4.22 33.53 10.7 44.064 8.173 13.266 21.127 23.34 35.946 31.717S81 167.65 99.544 164.4s35.194-14.103 42.438-25.04c6.803-10.273 9.465-18.356 10.034-26.6.594-8.62.814-19.894-12.9-35.218-3.31-3.697-9.405-8.03-15.145-10.693-2.098-.973-14.094-6.014-27.454-5.476-11.45.46-24.028 5.89-30.787 11.675C50.498 86.087 44.87 111.313 47.656 129c2.55 16.172 13.563 35.116 33.645 48.24 11.517 7.526 26.962 13.923 42.67 16.554 15.095 2.53 36.494 6.735 53.47 12.248 16.285 5.29 28.394 11.897 31.848 13.942 6.62 3.92 11.166 8.683 13.38 10.648 4.286 3.803 19.582 21.91 25.16 36.19 9.54 24.417 8.908 49.09 8.256 54.772-1.8 15.703-7 27.963-12.697 37.603-9.28 15.704-21.97 24.68-33.526 28.574-10.768 3.63-20.613 2.77-24.24.96-5.258-2.624-13.262-6.02-18.323-15.728-.928-1.78-2.566-4.622-3.738-9.447-.664-2.732-1.82-19.51 3.738-34.634 2.365-6.435 7.644-21.235 18.323-34.158 14.42-17.453 35.752-33.512 45.406-39.992 16.803-11.278 32.187-19.34 48.6-22.522 3.183-.617 17.907-2.69 31.893-.54 13.195 2.03 25.598 8.157 31.39 11.784 12.017 7.524 21.507 18.63 28.876 37.773 1.484 3.855 2.396 10.446 2.868 15.367.5 5.11.503 8.59 0 14.718-1.117 13.603-4.78 29.58-14.285 47.846-3.29 6.323-8.076 14.9-16.05 25.698-4.696 6.36-13.85 17.642-27.464 33.846l-42.38 50.89c-16.087 20.25-28.28 36.992-36.11 52.17-5.392 10.447-15.198 27.915-20.753 48.628-1.272 4.743-5.466 30.186-2.688 54.394 2.714 23.655 12.28 45.97 21.036 60.27 19.17 31.318 50.474 51.02 59.716 55.687 19.282 9.734 45.952 18.277 76.11 25.364C399.75 772.703 430.5 777.88 466 785.023l175.725 33.055"></path>
</svg></div>

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

    <style>
      #welcome-header {
        position: relative;
      }
    </style>
@endpush

@push('js')

    <!-- Bootstrap 4.5.2 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- 
       Google maps JS API 
       Don't forget to replace the key "AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U" to your own! 
       Learn how to get a key: https://help.designmodo.com/article/startup-google-maps-api/ 
      -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
    <!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <!-- Startup JS (Custom js for all blocks) -->
    <script src="js/script.js"></script>

@endpush

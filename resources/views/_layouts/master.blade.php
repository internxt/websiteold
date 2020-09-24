<!DOCTYPE html>
<html lang="en" class='h-full'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="canonical" href="{{ $canonical }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <!-- <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml" /> -->
        @yield('additionalMeta')

        <title>@hasSection('pageTitle') @yield('pageTitle') @else Internxt @endif</title>
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

        <!-- <link rel="stylesheet" href="{{ asset('bootstrap-customize/css/bootstrap.min.css') }}" /> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

        <meta name="description" content="@yield('metaDescription')">

        <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_V3_PK') }}"></script>
        <script src="{{ asset('js/load.js') }}"></script>

        <script src="https://kit.fontawesome.com/b5adb1202b.js"></script>

        

        <link rel="stylesheet" href="{{ asset('one-page-scroll-fsscroll/src/jquery.fsscroll.css') }}">

        <style>
            .__inxt-buy-form-section {
                padding-left: 20px;
                padding-right: 20px;
            }

            .__section-buy {
                display: flex !important;
                justify-content: space-between;
            }

            .__invisible-input {
                border-style: none;
            }

            .nav-link {
                font-weight: 600 !important;
                font-size: 13px;
                letter-spacing: 1px;
                color: black !important;
            }

            .navbar-brand {
                margin-right: 0;
            }

            .navbar-dark {
                background-color: transparent !important;
            }

            .__container, .__sections, .__section {
                position: relative !important;
                height: 100% !important;
                width: 100% !important;
            }

            header {
                opacity: 1 !important;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 1;
                background-color: transparent;
            }

            .section0, .section--header {
                /* background: url('/img/logos/slide-3.9.1-min.png') center no-repeat; */
                background: url('/img/logos/slide-2.6-min.jpg') center no-repeat;
                background-size: cover;
                background-position: top;
            }
		
            .section1 {
                /* background: url('/img/logos/slide-3.12.jpeg') center no-repeat; */
                background: url('/img/logos/slide-3.9.1-min.png') center no-repeat;
                background-size: cover;
                background-position: top;
            }


            .__btn-content-primary {
                background-color: rgba(23,26,32,.8);
                border-color: rgba(23,26,32,.8);
                outline: none;
                color: white;
                border-style: none;
            }

            .__btn-content-primary:hover {
                background-color: rgba(23,26,32,.8);
                border-color: rgba(23,26,32,.8) !important;
                outline: none;
                color: white;
                border-style: none;
            }

            @media only screen and (max-width: 426px) {
                .navbar-brand {
                    margin-left: 1rem !important;
                }

                .navbar {
                    padding-top: 9px !important;
                    padding-bottom: 9px !important;
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                
                .section0, .section--header {
                    background: none;
                }

                #driveSlideMobile {
                    visibility: visible;
                    display: flex;
                }

                #driveSlidePC {
                    visibility: hidden;
                    display: none;
                }

                .section1 {
                    visibility: hidden;
                    display: none;
                }

                .__mobile-home-content {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    height: 63vh;
                    top: -40px;
                }

                .page.vertical {
                    visibility: hidden;
                    display: none;
                }

                
            }

            @media only screen and (min-width: 427px) {
                #driveSlideMobile {
                    visibility: hidden;
                    display: none;
                }

                #driveSlidePC {
                    visibility: visible;
                    display: flex;
                }
            }
            

            .navbar-toggler,
            .navbar-toggler:focus,
            .navbar-toggler:active,
            .navbar-toggler-icon:focus {
                outline: none;
                box-shadow: none;
                border-color: transparent !important;
            }

            .__btn-content-primary:focus {
                background-color: rgba(23,26,32,.8) !important;
                border-color: rgba(23,26,32,.8) !important;
                outline: none !important;
                color: white !important;
                border-style: none !important;
                box-shadow: none !important;
            }

            .__btn-content {
                background-color: hsla(0,0%,100%,.5);
                color: rgba(23,26,32,.8);
                border-color: hsla(0,0%,100%,.5);
                border-style: none;
            }

            .__btn-content:hover {
                background-color: hsla(0,0%,100%,.5);
                color: rgba(23,26,32,.8);
                border-color: hsla(0,0%,100%,.5);
                border-style: none;
                box-shadow: none !important;
            }

            .__btn-content:focus {
                background-color: hsla(0,0%,100%,.5) !important;
                color: rgba(23,26,32,.8) !important;
                border-color: hsla(0,0%,100%,.5) !important;
                border-style: none !important;
            }

footer {
    
    background-color: white;
    height: 7%;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}

.__internal-footer {
    width: 60%;
    margin: auto;
}

footer > div {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    font-size: 0.8rem;
    font-weight: 500;
    letter-spacing: 0.1vw;
}

.__footer-link {
    color: var(--tds-color--black);
}


/** SLIDE */

.__slide-content-text, .__slide-content-title {
    color: rgba(23,26,32,0.8);
}

.__slide-content-container-container {
    height: 90%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.__slide-content-container {
    width: 43%;
    height: 40% !important;
    padding-left: 7%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.__slide-content-body {
    padding-bottom: 33px;
}

.__slide-content-footer {
    /* width: 70%; */
    display: flex;
    justify-content: flex-start;
    padding-right: 70px;
}

.__slide-content-footer > button {
    margin-right: 30px;
    white-space: nowrap;
}

.__slide-content-title {
    font-size: 2.6rem;
    font-weight: 600;
}

.__slide-content-text {
    font-size: 1.2rem;
}

.__slide-arrow {
    position: absolute;
    bottom: 0px;
    left: 50%;
}

.__arrow-image {
    width: 2.5rem;
    height: 2.5rem;
}

.__slide_content-container-content {
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
.__footer-link:hover {
    color: black;
    text-decoration: none;
}


/*****************/

.__content-home {
    height: 93%;
    width: 43%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-left: 100px;
}

.__content-home > section {
    width: 100%;
}

@media only screen and (max-width: 426px) {

    .__internal-footer {
        width: 100%;
        font-size: 0.7rem;
    }

    .__slide-content-container {
        width: auto;
        
        height: 40% !important;
        padding: 6%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .__slide-content-title {
        font-size: 2.1rem;
        font-weight: 600;
        text-align: center;
    }
    
    .__slide-content-text {
        font-size: 1.2rem;
        text-align: center;
    }

    .navbar-collapse {
        height: 100vh !important;
        background-color:white;
    }

    header {
        opacity: 1 !important;
        width: 100% !important;
        background-color: transparent;
    }

    /* .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
    } */

    .section0, .section--header {
        background: url('/img/logos/mobile-wp3.png') center no-repeat;
        background-size: cover;
        background-position: bottom;
        /* background-position-y: 90px;
        background-position-x: -240px; */
    }

    .nav-link {
        font-size: 1.5rem;
    }

    .navbar-nav {
        height: 50vh;
        justify-content: space-evenly !important;
        align-items: center;
    }

    .__link-login {
        display: flex;
        justify-content: center;
        
    }

    .section0, .section1, .section--xcloud-header-overview {
        /* background-position: right;
        background-size: auto; */
    }

    .__slide-content-footer {
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        padding-right: 0;
    }

    .__slide-content-footer > button {
        margin-right: 0px;
        white-space: none;
    }

    .__content-home {
        height: 93%;
        width: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 0;
        padding: 16px;
    }

    footer > div {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        font-size: 1.1vw;
        font-weight: 500;
        letter-spacing: 0.1vw;
    }
}


        </style>
        
        

        @stack('css')
    </head>

    <body id="page--@yield('pageID')" class='flex flex-col h-full'>

        <div id='content' class='flex-1 w-full mx-auto'>

            @yield('body')

        </div>

        <!-- @include('_includes.footer') -->

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https://internxt.com",
            "name": "{{ config('services.internxt.name') }}",
            "image": "https://internxt.com/img/logos/logo.png",
            "description": "Internxt is excitement, ambition, innovation. Join the revolution. The future is now.",
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "{{ config('services.internxt.email') }}",
                "contactType": "PR"
            }
        }
        </script>

        @if(app()->environment('production'))

            {{-- This will load tracking scripts only if cookie consent is provided --}}
            @include('_includes.scripts.cookie-consent')

        @endif

        @stack('js')

        <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
        <script type="text/javascript">twttr.conversion.trackPid('nzi1i', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
        <script src="{{ asset('one-page-scroll-fsscroll/src/jquery.fsscroll.js') }}"></script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nzi1i&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nzi1i&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        </noscript>
    </body>
</html>

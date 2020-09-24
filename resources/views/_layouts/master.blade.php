<!DOCTYPE html>
<html lang="en" class='h-full'>
    <head>
        @include('head')
    </head>

    <body id="page--@yield('pageID')" class='flex flex-col h-full'>

        <div id='content' class='flex-1 w-full mx-auto'>

            @include('_includes.navbar.newNavBar')

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

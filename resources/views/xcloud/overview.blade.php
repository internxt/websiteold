@extends('_layouts.master')

@section('pageID', 'xcloud-overview')

@section('pageNameSegment', 'drive')

@section('pageTitle', 'Internxt Drive – A different cloud storage service.')

@section('metaDescription', 'Internxt Drive is a private, green, free cloud storage service. Make the switch to a better cloud.')

    @push('additionalMeta')
        <!-- Bootstrap 4.5.2 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @endpush

@section('body')


    @include('drive.home-sections.welcome-section')

    <section class="section section--xcloud-feature section--xcloud-enhanced-technology" id="xcloud-enhanced-technology"
        data-gradient-heading>
        <div class="container">

            <div class="section__content" style="width: 100%">
                <p class="section__heading">Privacy, reimagined.</p>
                <p class="section__highlight" style="font-weight: 600;">A zero-knowledge file storage service that’s based
                    on absolute privacy and uncompromising security, Internxt Drive was designed from the inside out. It's a
                    cloud built so you can safely store all your digital possessions.</p>
            </div>
        </div>
    </section>

    <!-- Team section -->

    <section class="section section--business-feature section--xcloud-protect-your-digital-security"
        id="xcloud-protect-your-digital-security" data-heading>

        <div class="line line02" data-aos="animation-line" data-aos-once="false" data-aos-mirror="false">
            <svg class="line__svg" xmlns="http://www.w3.org/2000/svg" width="603" height="1099">
                <path fill="none" stroke="#d1ecfd" stroke-width="2"
                    d="M 67.002,0.97330036 C 57.156,3.2953004 48.746,6.7433004 41.772,11.3203 14.268,29.3653 1,58.9733 1,80.2153 c 0,19.465 4.22,33.53 10.7,44.064 8.173,13.266 21.127,23.34 35.946,31.717 14.819,8.377 33.354,11.627 51.898,8.377 18.544,-3.25 35.194,-14.103 42.438,-25.04 6.803,-10.273 9.465,-18.356 10.034,-26.6 0.594,-8.62 0.814,-19.894 -12.9,-35.218 -3.31,-3.697 -9.405,-8.03 -15.145,-10.693 -2.098,-0.973 -14.094,-6.014 -27.454,-5.476 -11.45,0.46 -24.028,5.89 -30.787,11.675 -15.232,13.039 -20.86,38.265 -18.074,55.952 2.55,16.172 13.563,35.116 33.645,48.24 11.517,7.526 26.962,13.923 42.67,16.554 15.095,2.53 36.494,6.735 53.47,12.248 16.285,5.29 28.394,11.897 31.848,13.942 6.62,3.92 11.166,8.683 13.38,10.648 4.286,3.803 19.582,21.91 25.16,36.19 9.54,24.417 8.908,49.09 8.256,54.772 -1.8,15.703 -7,27.963 -12.697,37.603 -9.28,15.704 -21.97,24.68 -33.526,28.574 -10.768,3.63 -20.613,2.77 -24.24,0.96 -5.258,-2.624 -13.262,-6.02 -18.323,-15.728 -0.928,-1.78 -2.566,-4.622 -3.738,-9.447 -0.664,-2.732 -1.82,-19.51 3.738,-34.634 2.365,-6.435 7.644,-21.235 18.323,-34.158 14.42,-17.453 35.752,-33.512 45.406,-39.992 16.803,-11.278 32.187,-19.34 48.6,-22.522 3.183,-0.617 17.907,-2.69 31.893,-0.54 13.195,2.03 25.598,8.157 31.39,11.784 12.017,7.524 21.507,18.63 28.876,37.773 1.484,3.855 2.396,10.446 2.868,15.367 0.5,5.11 0.503,8.59 0,14.718 -1.117,13.603 -4.78,29.58 -14.285,47.846 -3.29,6.323 -8.076,14.9 -16.05,25.698 -4.696,6.36 -13.85,17.642 -27.464,33.846 l -42.38,50.89 c -16.087,20.25 -28.28,36.992 -36.11,52.17 -5.392,10.447 -15.198,27.915 -20.753,48.628 -1.272,4.743 -5.466,30.186 -2.688,54.394 2.714,23.655 12.28,45.97 21.036,60.27 19.17,31.318 82.41365,58.39069 91.65565,63.05769 19.282,9.734 75.43476,24.41924 105.59276,31.50624 39.01904,6.558 63.62679,10.50655 94.213,18.878 0,0 180.46922,46.94198 -19.0331,233.84937 -81.07758,58.9655 -269.59533,65.7789 -269.59533,65.7789">
                </path>
            </svg>
        </div>

        <div class="section__image-container">
            <img class="section__image" src="{{ asset('img/sections/xcloud/teams/protect-your-digital-security/1.jpg') }}"
                alt="Designed to protect your digital security.">
        </div>

        <div class="section__content">
            <p class="section__heading">Designed to protect your digital security.</p>
            <p class="section__explanation">Files are end-to-end encrypted, fragmented, and then distributed amongst
                different machines around the world. Your personal data is part of our distributed network and no longer
                sitting in one central location.</p>
        </div>

    </section>

    <!-- End team section -->

    <!-- Security section -->

    <div>

		<div class="line line03" data-aos="animation-line" data-aos-once="false" data-aos-mirror="false">
            <svg class="line__svg" xmlns="http://www.w3.org/2000/svg" width="1413" height="700">
                <path fill="none" stroke="#d1ecfd" stroke-width="2"
                    d="M 67.002,0.97330036 C 57.156,3.2953004 48.746,6.7433004 41.772,11.3203 14.268,29.3653 1,58.9733 1,80.2153 c 0,19.465 4.22,33.53 10.7,44.064 8.173,13.266 21.127,23.34 35.946,31.717 14.819,8.377 33.354,11.627 51.898,8.377 18.544,-3.25 35.194,-14.103 42.438,-25.04 6.803,-10.273 9.465,-18.356 10.034,-26.6 0.594,-8.62 0.814,-19.894 -12.9,-35.218 -3.31,-3.697 -9.405,-8.03 -15.145,-10.693 -2.098,-0.973 -14.094,-6.014 -27.454,-5.476 -11.45,0.46 -24.028,5.89 -30.787,11.675 -15.232,13.039 -20.86,38.265 -18.074,55.952 2.55,16.172 26.592661,55.09481 46.674661,68.21881 53.160779,38.4299 76.066869,30.24359 109.314869,94.53179 C 290.71918,478.16107 42.23499,534.93868 18.742329,443.81393 17.513881,234.97773 483.09576,370.10703 483.09576,370.10703 l 529.46114,111.78879 265.3449,72.47845 c 0,0 142.5,27.02587 132.6724,99.50431 0,0 1.2285,92.13361 -168.2974,14.74137 -126.5302,-95.81896 168.2974,-191.63792 168.2974,-191.63792">
                </path>
            </svg>
        </div>

        <section class="section section--xcloud-feature section--xcloud-secure-individuals" id="xcloud-secure-individuals"
            data-gradient-heading>
            <div class="container">

                <div class="section__content" style="width: 100%">
                    <p class="section__heading" style="font-weight: 600;">Secure Individuals.</p>
                    <p class="section__highlight" style="font-weight: 600;">All users receive a free 2 GB storage plan to
                        experience Internxt Drive. If you enjoy the service you can upgrade to our 20 GB plan for €0.89, 200
                        GB plan for €3.49 or our 2 TB plan for €8.99.</p>
                </div>
            </div>
        </section>

        <section class="section section--xcloud-mockup section--xcloud-mockup-secure-individuals">
            <div class="container">
                @include('_includes.sections.xcloud.plans')
            </div>
        </section>
    </div>

    <section class="section section--xcloud-eco-partners" id="xcloud-eco-partners">
        <div class="container">

            <p class="section__heading" style="font-weight: 600;">
                Internxt has partnered with non-profit organization OneTreePlanted. For every year you're subscribed to one
                of Internxt's premium plans, you'll be tackling deforestation by planting a tree across the planet.
            </p>

            <img class="section__image" src="{{ asset('/img/logos/one-tree.png') }}">

        </div>
    </section>

    <section class="section section--xcloud-secure-every-way">
        <div class="container" id="xcloud-secure-every-way-container" data-dark>

            <p class="section__heading">Secure. In every way.</p>

        </div>
    </section>

    <section class="section section--xcloud-decentralization">
        <div class="container">

            <p class="section__heading" style="font-weight: 600;">Decentralization.<span
                    style="font-weight: 600; top: 10px;" class="section__highlight">A new kind of technology that gives you
                    more privacy, security and freedom.</span></p>

            <div class="lg:flex">
                <div class="section__content">
                    <div class="decentralization__point">
                        <p style="font-weight: 600;">Files uploaded are <span>client-side encrypted</span> and fragmented
                            into independent <span>shards</span>.</p>
                    </div>

                    <div class="decentralization__point">
                        <p style="font-weight: 600;">Machines hold encrypted shards, never whole files. Servers are
                            <span>distributed</span> all over the globe.</span></p>

                    </div>

                    <div class="decentralization__point">
                        <p style="font-weight: 600;">An answer to the challenge of providing a <span>truly secure and
                                <br>private</span> cloud storage solution.</p>
                    </div>

                    <div class="decentralization__point">
                        <p style="font-weight: 600;">No <span>third-party</span> can ever access your files. <span>Only
                                you</span> hold the decryption key and can retrieve the fragments.</p>

                    </div>
                </div>

                <img class="section__image" src="{{ asset('img/sections/xcloud/technology/decentralization/mockup.png') }}"
                    alt="A new kind of technology that gives you more privacy, security and freedom">
            </div>

        </div>
    </section>

    <!-- End security section -->

    <section class="section section--xcloud-mockup section--xcloud-mockup-enhanced-technology">

    </section>

    <section class="section section--xcloud-feature section--xcloud-beautiful-interface" id="xcloud-beautiful-interface"
        data-gradient-heading>
        <div class="container">

            <div class="section__content">
                <p class="section__heading" style="font-weight: 600;">Beautiful Interface.</p>
                <p class="section__highlight" style="font-weight: 600;">Browse your files with absolute ease with an
                    interface designed to be functional and intuitive. Letting your files and folders take center stage with
                    a variety of different customizations.</p>
            </div>

        </div>
    </section>

    <div class="section section--xcloud-mockup section--xcloud-mockup-beautiful-interface">
        <div class="container">
            <div class="img-flex">
                <div class="img-container flex-shrink-0" style="padding-top: 200px">
                    <img src="{{ asset('img/sections/xcloud/overview/beautiful-interface/1.png') }}"
                        alt="The X Cloud iPhone app">
                </div>
                <div class="img-container flex-shrink-0" style="padding-top: 150px">
                    <img src="{{ asset('img/sections/xcloud/overview/beautiful-interface/2.png') }}"
                        alt="The X Cloud iPhone app">
                </div>
                <div class="img-container flex-shrink-0" style="padding-top: 100px">
                    <img src="{{ asset('img/sections/xcloud/overview/beautiful-interface/3.png') }}"
                        alt="The X Cloud iPhone app">
                </div>
                <div class="img-container flex-shrink-0" style="padding-top: 50px">
                    <img src="{{ asset('img/sections/xcloud/overview/beautiful-interface/4.png') }}"
                        alt="The X Cloud iPhone app">
                </div>
                <div class="img-container flex-shrink-0" style="padding-top: 0">
                    <img src="{{ asset('img/sections/xcloud/overview/beautiful-interface/5-updated.png') }}"
                        alt="The X Cloud iPhone app">
                </div>
            </div>
        </div>
    </div>

    <!-- Interface section -->
    <section class="section section--xcloud-control-in-your-hands">
        <div class="container" id="control-in-your-hands-container" data-dark>
            <p class="section__heading">Control in your hands.</p>
        </div>
    </section>

    <section class="section section--xcloud-folder-customisation" id="xcloud-folder-customisation" data-gradient-heading>
        <div class="container">

            <div class="section__content">
                <p class="section__heading" style="font-weight: 600;">
                    Folders.
                    <span class="section__highlight" style="font-weight: 600;">Customize your folders, just how you like
                        them.</span>
                </p>

                <div class="lg:flex lg:items-center">
                    <img loading="lazy" class="section__image"
                        src="{{ asset('img/sections/xcloud/interface/folder-customisation/mockup.png') }}"
                        alt="Customize your folders, just how you like them">

                    <div class="jade">

                        <div class="bob" style="font-weight: 600;">You can add a variety of different colors and cover icons
                            to any folder. On your salary folder you can choose to color it green and apply a dollar sign as
                            its cover icon, to increase its visibility, suit the contents theme, or to just simply appeal to
                            your taste.</div>

                        <div class="alan">
                            <img src="{{ asset('img/sections/xcloud/interface/folder-customisation/folder-examples.png') }}"
                                alt="You can add a variety of different colors and cover icons to any folder">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- End Interface section -->

    <section class="section section--xcloud-subscribe-to-a-plan" id="xcloud-subscribe-to-a-plan" data-gradient-heading>
        <div class="container">
            <p class="section__heading" style="font-weight: 600;">Subscribe to a plan.</p>
            <p class="section__highlight" style="font-weight: 600;">2 GB of free storage to get started <br> and it’s simple
                to upgrade at any time.</p>
            <div class="section__content">

                @include('_includes.sections.xcloud.plans')

            </div>
        </div>
    </section>


    <section class="section section--xcloud-secure-teams">
        <div class="container">

            <div class="section__content">
                <p class="section__heading" style="font-weight: 600;">Secure Teams.</p>
                <p class="section__highlight" style="font-weight: 600;">Internxt Drive for teams helps your company grow
                    without limits, while you keep complete control of important company information with our advanced file
                    encryption and secure infrastructure.</p>
            </div>

        </div>
    </section>

    <section class="section section--xcloud-feature section--xcloud-plans">

        <div class="section__image-container"></div>

        <div class="container">

            <div class="section__content">
                <p class="section__heading" style="font-weight: 600;">Secure Teams.</p>
                <p class="section__highlight" style="font-weight: 600; text-indent: 261px !important;">Internxt Drive for
                    teams helps your company grow without limits, while you keep complete control of important company
                    information with our advanced file encryption and secure infrastructure.</p>
            </div>



        </div>

        <div class="plan-container">
            <div class="plan">
                <div class="plan__heading">
                    <p class="plan__name">200 GB</p>
                    <p class="plan__price">€9.49/month</p>
                </div>
                <p class="plan__additional-users">200 GB shared across up to 10 team members</p>
                <div class="plan__prepayment-details">
                    <div class="prepay-6">
                        <p class="prepayment__label">Prepay 6 months</p>
                        <p class="prepayment__price">€8.99/mo</p>
                    </div>
                    <div class="prepayment__separator"></div>
                    <div class="prepay-12">
                        <p class="prepayment__label">Prepay 12 months</p>
                        <p class="prepayment__price">€8.49/mo</p>
                    </div>
                </div>
                <div class="plan__features">
                    <ul>
                        <li>200 GB of storage</li>
                        <li>Secure file sharing</li>
                        <li>10 team members</li>
                    </ul>
                    <ul>
                        <li>End-to-end encryption</li>
                        <li>Collaboration</li>
                        <li>Administration tools</li>
                    </ul>
                </div>
            </div>
            <div class="plan plan--featured">
                <div class="plan__heading">
                    <p class="plan__name">2 TB</p>
                    <p class="plan__price">€19.99/month</p>
                </div>
                <p class="plan__additional-users">2 TB shared across unlimited team members</p>
                <div class="plan__prepayment-details">
                    <div class="prepay-6">
                        <p class="prepayment__label">Prepay 6 months</p>
                        <p class="prepayment__price">€19.49/mo</p>
                    </div>
                    <div class="prepayment__separator"></div>
                    <div class="prepay-12">
                        <p class="prepayment__label">Prepay 12 months</p>
                        <p class="prepayment__price">€18.99/mo</p>
                    </div>
                </div>
                <div class="plan__features">
                    <ul>
                        <li>2 TB of storage</li>
                        <li>Secure file sharing</li>
                        <li>Infinite members</li>
                    </ul>
                    <ul>
                        <li>End-to-end encryption</li>
                        <li>Collaboration</li>
                        <li>Administration tools</li>
                    </ul>
                </div>
            </div>

            <div class="plan">
                <div class="plan__heading">
                    <p class="plan__name">20 TB</p>
                    <p class="plan__price">€149.99/month</p>
                </div>
                <p class="plan__additional-users">20 TB shared across unlimited team members</p>
                <div class="plan__prepayment-details">
                    <div class="prepay-6">
                        <p class="prepayment__label">Prepay 6 months</p>
                        <p class="prepayment__price">€145.49/mo</p>
                    </div>
                    <div class="prepayment__separator"></div>
                    <div class="prepay-12">
                        <p class="prepayment__label">Prepay 12 months</p>
                        <p class="prepayment__price">€139.99/mo</p>
                    </div>
                </div>
                <div class="plan__features">
                    <ul>
                        <li>20 TB of storage</li>
                        <li>Secure file sharing</li>
                        <li>Infinite members</li>
                    </ul>
                    <ul>
                        <li>End-to-end encryption</li>
                        <li>Collaboration</li>
                        <li>Administration tools</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>



    @include('_includes.sections.xcloud.get-started-with-1gb')

    @include('_includes.sections.intro-xcore')

    @include('_includes.sections.intro-inxt')

    @include('_includes.sections.about.find-out-more', ['links' => [
    'About Us' => 'more.about',
    'Consultancy' => 'more.consultancy',
    'Resources' => 'more.resources',
    'Vision' => 'more.vision',
    ]])

    @include('_includes.sections.subscribe')

@endsection

@push('js')

    <script>
        $(document).ready(function() {

            $('.btnStartForFree').click(function(e) {
                window.location.href = 'https://drive.internxt.com/new';
            });

            if (windowWidth > 1024) {

                var ScrollMagicController2 = new ScrollMagic.Controller({
                    container: 'body',
                });

                var headerSelector = '.section--header';

                var timeline = new TimelineMax();

                var tween1 = new TweenMax.staggerFromTo(headerSelector + ' .section__image', 1, {
                    opacity: 0,
                    y: 30,
                }, {
                    opacity: 1,
                    y: 0,
                    ease: Power2.easeOut,
                }, 0.3);

                var tween2 = TweenMax.staggerFromTo([
                    `${headerSelector} .section__icon-container`,
                    `${headerSelector} .section__heading`,
                    `${headerSelector} .section__highlight`,
                    `${headerSelector} .section__link-container`,
                ], 0.5, {
                    opacity: 0,
                    y: 30,
                }, {
                    opacity: 1,
                    y: 0,
                    delay: 1,
                }, 0.15);

                timeline.add([tween1, tween2]);

                new ScrollMagic.Scene({
                        triggerElement: headerSelector,
                        triggerHook: 0,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(timeline)
                    .addTo(ScrollMagicController2);

                // Scale down phone mockups in enhanced technology section, RTL
                var technologySelector = '.section--xcloud-mockup-enhanced-technology';

                new ScrollMagic.Scene({
                        triggerElement: technologySelector,
                        triggerHook: 0.8,
                        duration: '100%',
                    })
                    .setTween(new TweenMax.from(technologySelector + ' img', 0.5, {
                        scaleX: 1.05,
                        scaleY: 1.05,
                        ease: Power2.easeInOut,
                    }))
                    .addTo(ScrollMagicController2);

                // iPhones in interface section, staggered
                var interfaceSelector = '.section--xcloud-mockup-beautiful-interface';

                var interfaceTimeline = new TimelineMax();

                interfaceTimeline.add([

                    new TweenMax.staggerFromTo(interfaceSelector + " .img-container", 0.7, {
                        opacity: 0,
                        top: 100,
                        ease: Power1.easeIn,
                    }, {
                        opacity: 1,
                        top: 0,
                        ease: Power1.easeOut,
                    }, 0.25),

                    new TweenMax.staggerFromTo(interfaceSelector + " p", 0.7, {
                        opacity: 0,
                        y: 30,
                    }, {
                        opacity: 1,
                        y: 0,
                        ease: Power1.easeOut,
                        delay: 0.7,
                    }, 0.25)

                ]);


                new ScrollMagic.Scene({
                        triggerElement: interfaceSelector,
                        triggerHook: 0.85,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(interfaceTimeline)
                    .addTo(ScrollMagicController2);


                // Plans
                var planSectionSelector = '.section--xcloud-plans';

                var timeline2 = new TimelineMax();

                var tweenContentContainerIn = TweenMax.fromTo(planSectionSelector + " .container", 20, {
                    y: 1800,
                    ease: Power2.easeOut,
                }, {
                    y: 180,
                    delay: 5,
                });

                var tween3 = TweenMax.fromTo(planSectionSelector + " .section__image-container", 10, {
                    opacity: 1,
                    ease: Power1.easeIn,
                    delay: 5,
                }, {
                    opacity: 0.25,
                    ease: Power2.easeOut,
                });

                var tweenContentContainerOut = TweenMax.to(planSectionSelector + " .container", 15, {
                    y: '-100vh',
                    delay: 10,
                    ease: Power1.easeInOut,
                });

                var tweenPlansContainerUp = TweenMax.to(planSectionSelector + " .plan-container", 15, {
                    y: '-40%',
                    ease: Power1.easeInOut,
                });

                var tween4 = TweenMax.staggerTo(planSectionSelector + " .plan", 5, {
                    opacity: 1,
                    top: 0,
                }, 2);

                timeline2
                    .add([tweenContentContainerIn, tween3, tweenPlansContainerUp])
                    .add(tweenContentContainerOut)
                    .add(tween4);

                new ScrollMagic.Scene({
                        triggerElement: planSectionSelector,
                        triggerHook: 0,
                        duration: '300%',
                    })
                    .setTween(timeline2)
                    .setPin(planSectionSelector)
                    .addTo(ScrollMagicController2);


                // Mass Storage
                var benefitSectionSelector = '.section--xcloud-benefits';

                var tween5 = TweenMax.staggerFromTo(benefitSectionSelector + " .xcloud-benefit", 0.5, {
                    opacity: 0,
                    left: 50,
                    ease: Power1.easeIn,
                }, {
                    opacity: 1,
                    left: 0,
                    ease: Power1.easeOut,
                }, 0.1);

                new ScrollMagic.Scene({
                        triggerElement: benefitSectionSelector,
                        triggerHook: 0.8,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(tween5)
                    .addTo(ScrollMagicController2);

                // Test phone mockups and plans - secure individuals
                if (windowWidth > 992) {
                    var secureIndividualsSelector = '.section--xcloud-mockup-secure-individuals';

                    new ScrollMagic.Scene({
                            triggerElement: secureIndividualsSelector,
                            triggerHook: 0.8,
                            duration: 0,
                            reverse: false,
                        })
                        .setTween(new TweenMax.staggerFromTo(`${secureIndividualsSelector} .plan-wrapper`, 0.3, {
                            y: 50,
                            opacity: 0,
                        }, {
                            y: 0,
                            opacity: 1,
                        }, 0.25))
                        .addTo(ScrollMagicController2);
                }

            }

        });

        $(document).ready(function() {

            if (windowWidth > 1024) {

                var ScrollMagicController2 = new ScrollMagic.Controller({
                    container: 'body',
                });

                // Data slide in - explanation
                var explanationSectionSelector = '.section--xcore-explanation';

                new ScrollMagic.Scene({
                        triggerElement: explanationSectionSelector,
                        triggerHook: 0.7,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(new TweenMax.staggerFromTo([
                        `${explanationSectionSelector} .section__heading`,
                        `${explanationSectionSelector} .section__button`,
                        `${explanationSectionSelector} .section__content`,
                    ], 0.3, {
                        opacity: 0,
                        y: 30,
                    }, {
                        opacity: 1,
                        y: 0,
                    }, 0.25))
                    .addTo(ScrollMagicController2);


                // Data slide in - explanation
                var encryptionSectionSelector = '.section--xcloud-encryption';

                new ScrollMagic.Scene({
                        triggerElement: encryptionSectionSelector,
                        triggerHook: 0.7,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(new TweenMax.staggerFromTo([
                        `${encryptionSectionSelector} .section__heading`,
                        `${encryptionSectionSelector} .section__highlight`,
                        `${encryptionSectionSelector} .flex`,
                    ], 0.3, {
                        opacity: 0,
                        y: 30,
                    }, {
                        opacity: 1,
                        y: 0,
                    }, 0.25))
                    .addTo(ScrollMagicController2);


                // Section wipe - Secure in every way
                var secureSectionSelector = '.section--xcloud-secure-every-way';

                var tween1 = new TweenMax.fromTo(secureSectionSelector + " .section__heading", 1, {
                    opacity: 0,
                    y: 700,
                    ease: Power1.easeIn,
                }, {
                    opacity: 1,
                    y: 0,
                    ease: Power1.easeOut,
                });

                var scene2 = new ScrollMagic.Scene({
                        triggerElement: secureSectionSelector,
                        triggerHook: 0.8,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(tween1)
                    .addTo(ScrollMagicController2);


                // Phone wipe - decentralization
                var decentralizationSectionSelector = '.section--xcloud-decentralization';

                var timeline = new TimelineMax();

                var tween2 = new TweenMax.fromTo(decentralizationSectionSelector + " .section__image", 1.5, {
                    x: -10,
                }, {
                    x: 106,
                    ease: Power2.easeInOut,
                });

                var tween3 = new TweenMax.staggerFromTo(decentralizationSectionSelector +
                    " .decentralization__point", 1, {
                        opacity: 0,
                        y: 30,
                        ease: Power1.easeIn,
                        delay: 1.5,
                    }, {
                        opacity: 1,
                        y: 0,
                        ease: Power1.easeOut,
                    }, 0.15);

                timeline.add([tween2, tween3]);

                var scene3 = new ScrollMagic.Scene({
                        triggerElement: decentralizationSectionSelector,
                        triggerHook: 0.25,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(timeline)
                    .addTo(ScrollMagicController2);

                let tween = new TweenMax.staggerFromTo([
                    `${decentralizationSectionSelector} .section__heading`,
                    `${decentralizationSectionSelector} .section__highlight`,
                ], 0.3, {
                    opacity: 0,
                    y: 30,
                }, {
                    opacity: 1,
                    y: 0,
                }, 0.25);

                new ScrollMagic.Scene({
                        triggerElement: decentralizationSectionSelector,
                        triggerHook: 0.7,
                        duration: 0,
                        reverse: false,
                    })
                    .setTween(tween)
                    .addTo(ScrollMagicController2);


                var linkSectionSelector = '.section--xcloud-section-link-container';

                var tween6 = new TweenMax.fromTo([
                    linkSectionSelector + ' .link--teams',
                    linkSectionSelector + ' .link--mass-storage',
                ], 1, {
                    opacity: 0.25,
                    top: 300,
                }, {
                    opacity: 1,
                    top: 0,
                    ease: Power2.easeOut,
                });

                var scene4 = new ScrollMagic.Scene({
                        triggerElement: linkSectionSelector,
                        triggerHook: 0.3,
                        duration: 0,
                    })
                    .setTween(tween6)
                    .addTo(ScrollMagicController2);

            }

        });

    </script>

@endpush

@extends('_layouts.master')

@section('pageID', 'home')

@section('pageTitle', 'Internxt – Be limitless.')

@section('metaDescription', 'Internxt is excitement, ambition, innovation. Join the revolution. The future is now. Make the switch to Internxt Drive, a private, green, safe and free cloud storage.')

@section('additionalMeta')
	<link rel="alternate" href="https://internxt.com/" hreflang="x-default">
@endsection

@section('body')
    <script>
		$( document ).ready(function() {
			$('.__container').fsScroll({
				selectors: {
					sections: '.__sections',
					section: '.__section',
					page: '.page',
					active: '.active'
				}
			})
		});
	</script>
	
	<div class="__container" data-fs-scroll>
        <div class="__sections">
          <div class="__section section0">
					
				<header id="__header">

					<nav class="navbar navbar-expand-lg navbar-light bg-dark">

							<a class="navbar-brand" href="#">
								@if(
									Route::currentRouteName() == "xcore.overview" || 
									Route::currentRouteName() == "inxt.overview" || 
									Route::currentRouteName() == "inxt.buy" || 
									Route::currentRouteName() == "xcore.get-started"
								)
									@include('_includes.navbar.logo-white')
									@php $textColor = '#FFF'; @endphp
								@else 
									@include('_includes.navbar.logo')
									@php $textColor = '#000'; @endphp
								@endif
							</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo02" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarTogglerDemo01" style=" justify-content: space-between !important;">
							
							<div></div>
							<ul class="navbar-nav mt-2 mt-lg-0">
								<li class="nav-item active">
									<a class="nav-link" href="{{ route('xcloud.overview') }}">DRIVE</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="https://send.internxt.com/">SEND</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="{{ route('more.about') }}">ABOUT</a>
								</li>
								
							</ul>
							<div><a class="nav-link __link-login" href="https://drive.internxt.com/login" style="color:#FFFF">SIGN IN</a></div>
						</div>
					</nav>
				</header>


				<section id="driveSlideMobile" class="__content-home">
						
					<div class="__mobile-home-content">

						<!-- <div class="section__icon-container">
							<img class="relative section__icon" src="{{ asset('img/logos/drive-logo.svg') }}" alt="Introducing X Cloud">
						</div> -->

						<p class="relative section__heading">Internxt Drive</p>
						<p class="section__highlight">Secure file storage</p>

						<div class="section__link-container md:hidden flex flex-col items-center" style="z-index: 0; padding-top: 20px;">

							<a class="section__link section__link--ios" href="https://apps.apple.com/us/app/x-cloud-secure-file-storage/id1465869889" rel="nofollow" target="_blank">
								<img loading="lazy" src="{{ asset('/img/logos/apple-app-store.png') }}" height="51" alt="Download X Cloud on the Apple App Store">
							</a>

							<a class="section__link section__link--android" href="https://play.google.com/store/apps/details?id=com.internxt.cloud" rel="nofollow" target="_blank">
								<img loading="lazy" alt="Get it on Google Play" src="{{ asset('/img/logos/google-play-store.png') }}" height="51">
							</a>
						</div>

						<div class="section__link-container hidden md:block">
							<a class="section__link" href="https://drive.internxt.com/new">Get Started for Free with 2 GB</a>
						</div>

					</div>
				
				</section>
			


				<section id="driveSlidePC" class="__content-home">
					<!-- <section class="__slide-content-container-container"> -->

						
							<div class="__slide-content-title">Internxt Drive</div>

							<div class="__slide-content-body">
								<div class="__slide-content-text">Switch to the only cloud storage service that truly respects your privacy. End-to-end encrypted, free, open source, trustless. Say hello to the new security and privacy standard. Start with 2 GB free for life.</div>
							</div>

							<div class="__slide-content-footer">
								<button type="button" class="w-full btnLearnMore btn rounded-pill btn-outline-light __btn-content" style="">Learn More</button>
								<button type="button" class="w-full btnStartForFree btn rounded-pill btn-outline-light __btn-content-primary" style="">Start for free</button>
							</div>

						<!-- </section> -->
				
				</section>
            
          </div>
		  
		  <div class="__section section1">
		  	<section class="__content-home">
			  

                    
                    
                        <div class="__slide-content-title">Internxt Send</div>

                        <div class="__slide-content-body">
                            <div class="__slide-content-text">Securely share files for free, instantly. No sign up required. End-to-end encrypted, open source, trustless. Say hello to the new file sharing standard.</div>
                        </div>

                        <div class="__slide-content-footer">
							<button type="button" class="w-full btnStartForFreeSend btn rounded-pill btn-outline-light __btn-content-primary" style="">Start sharing for free</button>
							<button type="button" class="invisible btn rounded-pill btn-outline-light" style="">Start for free</button>
                        </div>

                
				
				
			</section>

			<footer>
				<div class="__internal-footer">
					<a href="#"></a>
					<a href="#"></a>
					<a class="__footer-link" href="/">Internxt</a>
					<a class="__footer-link" href="/inxt">Token</a>
					<a class="__footer-link" href="/core">Core</a>
					<a class="__footer-link" href="mailto:{{ config('services.internxt.email') }}">Contact</a>
					<a class="__footer-link" href="https://twitter.com/internxt" target='_blank'>Twitter</a>				
					<a class="__footer-link" href="https://github.com/internxt" target='_blank'> GitHub</a>				
					<a class="__footer-link" href="https://medium.com/internxt" target='_blank'>News</a>
					<a class="__footer-link" href="/terms">Legal</a>
					<a href="#"></a>
					<a href="#"></a>
				</div>
				
			</footer>
			
			
          </div>


		</div>
      </div>


	<!-- @include('_includes.sections.intro-internxt')

	@include('_includes.sections.subscribe') -->

@endsection

@push('js')

	<script>

		$(document).ready(function(){
			$('.btnLearnMore').click(function(e) {
				window.location.href = '/drive';
			});

			$('.btnStartForFree').click(function(e) {
				window.location.href = 'https://drive.internxt.com/new';
			});

			$('.btnStartForFreeSend').click(function(e) {
				window.location.href = 'https://send.internxt.com';
			});
		});

		
		// $(document).ready(function(){

		// 	var ScrollMagicController = new ScrollMagic.Controller({
		// 		container: 'body',
		// 	});

		// 	var headerSelector = '.section--header';

		// 	var timeline = new TimelineMax();

		// 	var tween1 = new TweenMax.staggerFromTo(headerSelector + ' .section__image', 1, {
		// 		opacity: 0,
		// 		y: 30,
		// 	},{
		// 		opacity: 1,
		// 		y: 0,
		// 		ease: Power2.easeOut,
		// 	}, 0.3);

		// 	var tween2 = TweenMax.staggerFromTo([
		// 		`${headerSelector} .section__icon-container`,
		// 		`${headerSelector} .section__heading`,
		// 		`${headerSelector} .section__highlight`,
		// 		`${headerSelector} .section__link-container`,
		// 	], 0.5, {
		// 		opacity: 0,
		// 		y: 30,
		// 	},{
		// 		opacity: 1,
		// 		y: 0,
		// 		delay: 1,
		// 	}, 0.15);

		// 	timeline.add([tween1, tween2]);

		// 	var scene = new ScrollMagic.Scene({
		// 			triggerElement: headerSelector,
		// 			triggerHook: 0,
		// 			duration: 0,
		// 			reverse: false,
		// 		})
		// 		.setTween(timeline)
		// 		.addTo(ScrollMagicController)
		// 	;


		// 	// Scale down background graphic on X Core section
		// 	var xCoreSectionSelector = '.section--intro-xcore';

		// 	new ScrollMagic.Scene({
		// 			triggerElement: xCoreSectionSelector,
		// 			triggerHook: 0.8,
		// 			duration: '100%',
		// 		})
		// 		.setTween(
		//           new TweenMax.to(`${xCoreSectionSelector} .section__graphic`, 0.5, {
		//           		scale: 1,
		// 				ease: Power2.easeOut,
		// 			}))
		// 		.addTo(ScrollMagicController)
		// 	;

		// 	// Scale down background graphic on INXT section
		// 	var inxtSectionSelector = '.section--intro-inxt';
		// 	var scene3 = new ScrollMagic.Scene({
		// 			triggerElement: inxtSectionSelector,
		// 			triggerHook: 0.6,
		// 			duration: '100%',
		// 		})
		// 		.setTween(new TweenMax.fromTo(inxtSectionSelector, 0.5, {
		// 			"background-size" : "110% 110%",
		// 			ease: Power2.easeIn,
		// 		},{
		// 			"background-size" : "100% 100%",
		// 			ease: Power2.easeOut,
		// 		}))
		// 		.addTo(ScrollMagicController)
		// 	;

		// 	// Scale down background graphic on INXT section
		// 	var internxtSectionSelector = '.section--intro-internxt';
		// 	var scene4 = new ScrollMagic.Scene({
		// 			triggerElement: internxtSectionSelector,
		// 			triggerHook: 0.6,
		// 			duration: '100%',
		// 		})
		// 		.setTween(new TweenMax.to(internxtSectionSelector + ' .background', 0.5, {
		// 			scale: 1,
		// 			ease: Power2.easeOut,
		// 		}))
		// 		.addTo(ScrollMagicController)
		// 	;


		// 	// No scroll, trigger as soon as page is ready
		// 	new TweenMax.to(xCoreSectionSelector, 2, {
		// 		opacity: 1,
		// 		ease: Power2.easeOut,
		// 	});

		// });
	</script>

@endpush

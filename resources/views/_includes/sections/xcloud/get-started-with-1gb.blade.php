<section class="section section--get-started-with-1gb" id="get-started-with-1gb">
	<div class="container">

		<p class="section__heading">Start using Drive today with 2 GB on us.</p>
		<p class="section__explanation">Internxt Drive is available on Web, Desktop and Mobile. We have a range of storage plans to suit your needs. 20 GB for €0.89, 200 GB for €3.49 or 2 TB for just €8.99.</p>

		<div class="section__link-container">
			<a class="section__link" href="https://drive.internxt.com/new">Get Started for Free with 2 GB</a>
			<a class="section__link section__link--ios" href="https://apps.apple.com/us/app/x-cloud-secure-file-storage/id1465869889" rel="nofollow" target="_blank">
				<img loading="lazy" src="{{ asset('/img/logos/apple-app-store.png') }}" height="51" alt="Download X Cloud on the Apple App Store">
			</a>

			<a class="section__link section__link--android" href="https://play.google.com/store/apps/details?id=com.internxt.cloud" rel="nofollow" target="_blank">
				<img loading="lazy" alt="Get it on Google Play" src="{{ asset('/img/logos/google-play-store.png') }}" height="51">
			</a>
		</div>

		<img class="section__image lg:hidden" src="{{ asset('/img/sections/xcloud/technology/get-started-with-1gb/bg-mobile.png') }}">
		<img class="section__image hidden lg:block" src="{{ asset('/img/sections/xcloud/technology/get-started-with-1gb/bg.png') }}">
	</div>
</section>

@push('js')
	<script type="text/javascript">

		let
			ScrollMagicController = new ScrollMagic.Controller(),
			selector = '#get-started-with-1gb',
			timeline = new TimelineMax()
		;

		timeline.add([
            new TweenMax.staggerFromTo([
            	`${selector} .section__heading`,
				`${selector} .section__explanation`,
				`${selector} .section__link`,
            ], 0.3, {
                opacity: 0,
                y: 30,
            },{
                opacity: 1,
                y: 0,
                ease: Power2.easeOut,
            }, 0.25),
            new TweenMax.fromTo([
				`${selector} .section__image`
            ], 0.5, {
                opacity: 0.5,
            },{
                opacity: 1,
                delay: 0.75,
            })
        ]);

	    new ScrollMagic.Scene({
	            triggerElement: selector,
	            triggerHook: 0.5,
	            reverse: false,
	            duration: 0,
	        })
	        .setTween(timeline)
	        .addTo(ScrollMagicController)
	    ;
	</script>
@endpush

@extends('_layouts.master')

@section('pageID', 'xcore-overview')

@section('pageTitle', 'Internxt Core – Get Paid to Share.')

@section('metaDescription', 'Get paid to share the exceeding disk space of your computer to host encrypted shards of data as part of a decentralized network of servers.')

@section('body')

	<section class="section section--header section--xcore-header-overview" id="xcore-header-overview" data-dark>
		<div class="container">

			<img class="section__icon" src="{{ asset('img/logos/xcore.svg') }}">

			<p class="section__heading" style="font-weight: 600;">Internxt Core</p>
			<p class="section__highlight" style="font-weight: 600;">Get paid to share</p>


			<div class="section__link-container hidden lg:inline-block">
				<a class="section__link" href="{{ route('xcore.get-started') }}">Setup &amp; Tips</a>
				<a class="section__link" href="{{ $xcoreDownloadLink }}">Download</a>
            </div>

		</div>
	</section>

	<section class="section section--xcore-earn-money">
		<div class="container">

			<div class="section__content">
				<div class="lg:flex lg:justify-between lg:items-center">

					<p class="section__explanation">Internxt Core is a simple peer-to-peer downloadable application that enables hosts to act as computing servers who securely store and share encrypted shards of Internxt Drive users data.</p>

					<div class="separator"></div>

				</div>
			</div>
			<div class="section__data">
				<div class="lg:flex lg:justify-between">
					<div class="data">
						<p class="data__label">Nodes in over</p>
						<img class="data__value" src="{{ asset('/img/sections/xcore/overview/earn-money/countries.svg') }}">
						<p class="data__label">Different countries</p>
					</div>
					<div class="data">
						<p class="data__label">More than</p>
						<img class="data__value" src="{{ asset('/img/sections/xcore/overview/earn-money/available-data.svg') }}">
						<p class="data__label">Available data</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="section section--xcore-overview-mockup">
		<div class="section__background"></div>
	</section>

	<section class="section section--xcore-hard-work-done-for-you">
		<div class="container">
			<div class="lg:flex lg:justify-between lg:items-start">
				<p class="section__heading">All the hard work has been done for you.</p>
				<p class="section__explanation">Internxt Core is quick and easy to set up. Simply download the desktop application, create your node and your device will automatically be connected, and will always be connected unless you say otherwise.</p>
			</div>

			<div class="section__separator"></div>

			<div class="lg:flex lg:justify-between">
				<div class="feature">
					<p class="feature__heading">Store more. Earn more.</p>
					<p class="feature__explanation">Hosts rent out their computers extra hard-drive space which allows the storing and uploading of users encrypted data. In return hosts will be paid in our cryptocurrency, INXT. The more hard-drive space you allocate to the network, the more INXT you will earn.</p>
				</div>
				<div class="feature">
					<p class="feature__heading">Reclaiming your power.</p>
					<p class="feature__explanation">Each host can decide how much computer resources they designate to the network, as well as when and for how long. You can leave Internxt Core running in the background and your computer will earn you passive income. Better by design.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--xcore-get-started" id="xcore-get-started" data-heading data-dark>
		<div class="container">
			<div class="section__content">
				<p class="section__heading">Setup &amp; Tips</p>
				<p class="section__subheading">Get paid to share</p>
				<a class="section__button section__button--light-transparent" href="{{ route('xcore.get-started') }}">Learn more</a>
			</div>
		</div>

	</section>

	<section class="section section--xcore-calculator">

		<div class="container">
			<p class="section__heading">Calculate how much you can earn from your unused storage space.</p>
			<p class="section__explanation">The more storage you host and the more INXT you own will calculate to a greater passive income. Below is an estimation of how much you could earn by using Internxt Core.</p>

			<x-core-earnings-calculator></x-core-earnings-calculator>
		</div>

	</section>

	<section class="section section--xcore-features">

		<div class="container">
			<div class="lg:flex lg:justify-center">
				<div class="feature feature--active" data-image="dashboard">
					<div class="feature__active-marker"></div>
					<p class="feature__heading">Dashboard</p>
					<p class="feature__explanation">Internxt Core homescreen displays only your necessary information, so you can get started as quickly as possible without having to learn anything new.</p>
				</div>
				<div class="feature feature--setup" data-image="setup">
					<div class="feature__active-marker"></div>
					<p class="feature__heading">Set-up</p>
					<p class="feature__explanation">Setting up your Internxt Core is simple and easy. Enter your ERC20 address, select where you want to store data and then choose how much storage you want to allocate. </p>
				</div>
			</div>
		</div>

		<div class="section__image-container">
			<img class="section__image section__image--active lg:hidden" data-feature="dashboard" src="{{ asset('img/sections/xcore/overview/features/dashboard-mobile.png') }}">
			<img class="section__image section__image--active hidden lg:block" data-feature="dashboard" src="{{ asset('img/sections/xcore/overview/features/dashboard.jpg') }}">
			<img class="section__image" data-feature="setup" src="{{ asset('img/sections/xcore/overview/features/setup.jpg') }}">
		</div>

	</section>

	<section class="section section--intro-xcore" id="xcore-intro" data-dark data-heading data-zoom>
	<div class="section__graphic"></div>
	<div class="container">

		<div class="section__content">
			<img loading="lazy" class="section__icon" src="{{ asset('img/logos/xcore.svg') }}" alt="Introducing X Core">

			<p class="section__heading" style="font-weight: 600">Introducing Core <span style="font-weight: 600" class="section__highlight">Get paid to share</span></p>

			<div class="section__link-container invisible lg:visible">
				<a class="section__link section__link--xcore" href="{{ route('xcore.get-started') }}">Setup &amp; Tips</a>
				<a class="section__link section__link--xcore section__link--download" href="{{ $xcoreDownloadLink }}">Download</a>
			</div>
		</div>

	</div>
</section>

	@include('_includes.sections.intro-inxt')

	@include('_includes.sections.xcloud.get-started-with-1gb')

	@include('_includes.sections.about.find-out-more', ['links' => [
		'About Us' => 'more.about',
		'Consultancy' => 'more.consultancy',
		'Resources' => 'more.resources',
		'X Cloud Vision' => 'more.vision',
	]])

	@include('_includes.sections.subscribe')

@endsection

@push('js')

	<script>
		$(document).ready(function(){

			$('.btnStartForFree').click(function(e) {
				window.location.href = 'https://drive.internxt.com/new';
			});

			var
				features = $('.feature'),
				featureImage = $('.section--xcore-features .section__image'),
				sectionImageSelector = '.section--xcore-features .section__image',
				activeFeatureClass = 'feature--active',
				activeImageClass = 'section__image--active'
			;

			features.click(function(e){

				var clickedFeature = $(e.currentTarget);
				var image = clickedFeature.data('image');

				features.removeClass(activeFeatureClass);
				clickedFeature.addClass(activeFeatureClass);

				$(sectionImageSelector).removeClass(activeImageClass);
				$(`${sectionImageSelector}[data-feature="${image}"]`).addClass(activeImageClass);

			});

			var ScrollMagicController2 = new ScrollMagic.Controller({
				container: 'body',
			});


			if (windowWidth > 1024) {

				// X Core header bg
				var headerSelector = '.section--xcore-header-overview';

				var headerTimeline = new TimelineMax();

				headerTimeline.add(
					new TweenMax.fromTo(headerSelector, 1.5, {
						'background-position': 'right -47vw top -130vh',
						'background-size': '300%',
					},{
						'background-position': 'right -26vw top -48vh',
						'background-size': '110%',
						ease: Power2.easeOut,
					})
				);

				headerTimeline.add(
					new TweenMax.staggerFromTo([
						`${headerSelector} .section__icon`,
						`${headerSelector} .section__heading`,
						`${headerSelector} .section__highlight`,
						`${headerSelector} .section__link-container`,
					], 0.3, {
						opacity: 0,
						y: 30,
					},{
						opacity: 1,
						y: 0,
					}, 0.1)
				);

				// Phones slide out from left - earn money section
				var moneySectionSelector = '.section--xcore-earn-money';
				var moneyTimeline = new TimelineMax();

				moneyTimeline.add([
					new TweenMax.from(moneySectionSelector + ' .section__explanation', 1, {
						opacity: 0,
						y: 30,
						ease: Power2.easeOut,
					}),
					new TweenMax.from(moneySectionSelector + ' .section__data', 1, {
						x: -450,
						ease: Power2.easeOut,
					})
				]);

				var scene = new ScrollMagic.Scene({
						triggerElement: moneySectionSelector,
						triggerHook: 0.65,
						duration: 0,
						reverse: false,
					})
					.setTween(moneyTimeline)
					.addTo(ScrollMagicController2)
				;


				// Pin and cover mockup
				var mockupSectionSelector = '.section--xcore-overview-mockup';

				new ScrollMagic.Scene({
						triggerElement: mockupSectionSelector,
						triggerHook: "onLeave",
						duration: '200%',
					})
					.setTween(
						new TweenMax.to( `${mockupSectionSelector} .section__background`, 5, {
							opacity: 0.5,
						})
					)
					.setPin(mockupSectionSelector, {
						pushFollowers: false,
					})
					.addTo(ScrollMagicController2)
				;


				var getStartedSectionSelector = '.section--xcore-get-started';

				new ScrollMagic.Scene({
						triggerElement: getStartedSectionSelector,
						triggerHook: 0.5,
						duration: "100%",
					})
					.setTween(
						new TweenMax.fromTo(getStartedSectionSelector, 2, {
								'background-size': '105%',
							},{
								'background-size': '100%',
								ease: Power1.easeInOut,
							}
						)
					)
					.addTo(ScrollMagicController2)
				;

			}

		});

	</script>
@endpush

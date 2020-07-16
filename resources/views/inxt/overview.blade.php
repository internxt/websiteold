@extends('_layouts.master')

@section('pageID', 'inxt-overview')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt Token – Our tokenized asset.')

@section('metaDescription', 'Internxt token. Learn all about our cryptocurrency, INXT.')

@section('body')

	<section class="section section--header section--inxt-header-overview" id="inxt-overview" data-dark data-inxt-heading>
		<div class="container">

			<p class="section__subheading" style="font-weight: 600;">Internxt Token</p>

			<p class="section__heading" style="font-weight: 600;"><span class="hidden lg:inline">INXT.</span> Our tokenised asset.</p>

			<a class="section__button section__button--dark-transparent" style="font-weight: 600;" href="{{ route('inxt.buy') }}">Buy INXT</a>

		</div>
	</section>

	<section class="section section--inxt-description">
		<div class="container">
			<p class="section__heading">Internxt's token INXT is used as a means of payment to Hosts <br> who contribute to our distributed network by storing and sharing encrypted shards of Drive users files.
			<a href='https://medium.com/internxt/internxts-token-inxt-embrace-the-power-99dc8940a4b6' target='_blank'><b>Learn more</b></a>.
			</p>
		</div>
	</section>

	<section class="section section--inxt-features">
		<div class="container">
			<div class="feature feature--revenue">
				<p class="feature__heading">Part of our revenues are used<span class="feature__highlight"> to market buy INXT</span></p>
			</div>
			<div class="feature feature--utilize">
				<p class="feature__heading">Those INXT <br> are then <br>used to <span class="feature__highlight">pay <br>Internxt Core <br>Hosts</span></p>
			</div>
			<div class="feature feature--bonus">
				<p class="feature__heading">Core hosts receive a 10% bonus for <span class="feature__highlight">owning & holding INXT</span></p>
			</div>
			<div class="feature feature--maximum">
				<p class="feature__heading">There are 629,000 INXT available. <span class="feature__highlight">This <br> is the max supply</span></p>
			</div>
			<div class="feature feature--benefits">
				<p class="feature__heading">INXT holders will receive additional <span class="feature__highlight">benefits & bonuses</span></p>
			</div>
			<div class="feature feature--organic">
				<p class="feature__heading">This organic demand ensures a <span class="feature__highlight">reliable growth</span></p>
			</div>
		</div>
	</section>

	<section class="section section--inxt-secure-ways-to-store">
		<div class="container">
			<p class="section__heading">Secure ways to store INXT tokens</p>

			<div class="flex flex-wrap justify-center">

				<a class="method method--coinbase" href="https://wallet.coinbase.com/" rel="nofollow" target="_blank">
					<p class="method__heading">Coinbase Wallet</p>
				</a>
				<a class="method method--trezor" href="https://trezor.io/" rel="nofollow" target="_blank">
					<p class="method__heading">Trezor Wallet</p>
				</a>
				<a class="method method--ledger" href="https://www.ledger.com/" rel="nofollow" target="_blank">
					<p class="method__heading">Ledger Wallet</p>
				</a>
				<a class="method method--binance-trust" href="https://trustwallet.com/" rel="nofollow" target="_blank">
					<p class="method__heading">Binance Trust Wallet</p>
				</a>
				<a class="method method--my-ether-wallet" href="https://www.myetherwallet.com/" rel="nofollow" target="_blank">
					<p class="method__heading">MyEtherWallet</p>
				</a>
				<a class="method method--samsung-keystore" href="https://www.samsung.com/uk/smartphones/galaxy-s10/" rel="nofollow" target="_blank">
					<p class="method__heading">Samsung Keystore</p>
				</a>
				<a class="method method--my-crypto" href="https://mycrypto.com/account" rel="nofollow" target="_blank">
					<p class="method__heading">MyCrypto Wallet</p>
				</a>
				<a class="method method--status" href="https://status.im/" rel="nofollow" target="_blank">
					<p class="method__heading">Status Wallet</p>
				</a>
			</div>

		</div>
	</section>


	@include('_includes.sections.inxt.links.exchanges')

	<div class="lg:flex" id="inxt-previews" data-dark>

		@include('_includes.sections.inxt.previews.metrics')

		@include('_includes.sections.inxt.previews.buy')


	</div>

	@include('_includes.sections.inxt.links.performance')

	@include('_includes.sections.inxt.articles')

	<section class="section section--intro-inxt" id="intro-inxt" data-dark data-heading data-zoom>
		<div class="container">

			<p class="section__label">Internxt Token</p>

			<p class="section__heading"><span class="hidden lg:inline-block">INXT.</span> Our tokenised asset.</p>


			<div class="section__link-container">
				<a class="section__link section__link--buy" href="{{ route('inxt.buy') }}">Buy INXT</a>
			</div>

		</div>
	</section>

	@include('_includes.sections.intro-xcore')

	@include('_includes.sections.xcloud.get-started-with-1gb')

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
		$(document).ready(function(){

			if (windowWidth > 1024) {

				var ScrollMagicController2 = new ScrollMagic.Controller({
					container: 'body',
				});

				// Fade in - features
				var featuresSectionSelector = '.section--inxt-features';

				var tween1 = new TweenMax.staggerFrom(featuresSectionSelector + ' .feature__heading', 0.5, {
					opacity: 0,
					y: 20,
					ease: Sine.easeInOut,
				}, 0.175);

				var scene = new ScrollMagic.Scene({
						triggerElement: featuresSectionSelector,
						triggerHook: 0.75,
						duration: 0,
					})
					.setTween(tween1)
					.addTo(ScrollMagicController2)
				;

				// Fade in - ways to store
				var secureWaysSectionSelector = '.section--inxt-secure-ways-to-store';

				new ScrollMagic.Scene({
						triggerElement: secureWaysSectionSelector,
						triggerHook: 0.6,
						duration: 0,
						reverse: false,
					})
					.setTween(
						new TweenMax.staggerFrom(secureWaysSectionSelector + ' .method', 0.75, {
							opacity: 0,
						}, 0.1)
					)
					.addTo(ScrollMagicController2)
				;

			}

		});

	</script>

@endpush

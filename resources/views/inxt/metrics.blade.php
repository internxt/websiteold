@extends('_layouts.master')

@inject('formatter', 'App\Services\FormattingService')

@section('pageID', 'inxt-metrics')

@section('pageNameSegment', 'metrics')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt Token – Token Metrics.')

@section('metaDescription', 'Internxt token (INXT) price, supply, growth, utility.')

@section('body')

	<section class="section section--header section--inxt-header-metrics" id="header-metrics" data-dark data-inxt-heading>
		<div class="container">

			<p class="section__subheading">Internxt Token</p>

			<p class="section__heading">INXT Token Metrics.</p>

			<a class="section__button section__button--dark-transparent" href="{{ route('inxt.buy') }}">Buy INXT</a>

		</div>
	</section>

	<section class="section section--inxt-metrics">
		<div class="container">

			<div class="metric">
				<p class="metric__label">Price per INXT</p>
				<p class="metric__value" id="metric-price" title="{{ $metrics['price'] }}">€{{ sprintf("%.2f", $metrics['price']) }}</p>
			</div>

			<div class="metric">
				<p class="metric__label">Change / 24 Hours</p>
				<p class="metric__value metric__value--neutral" id="metric-change-24h">{{ sprintf("%.2f", $metrics['percent_change_24h']) }}%</p>
			</div>

			<div class="metric">
				<p class="metric__label">Change / 7 Days</p>
				<p class="metric__value metric__value--neutral">{{ sprintf("%.2f", $metrics['percent_change_7d']) }}%</p>
			</div>

			<div class="metric">
				<p class="metric__label">Current Market Cap</p>
				<p class="metric__value" title="{{ $metrics['market_cap'] }}">{{ $formatter->useShorthand($metrics['market_cap'])}}</p>
			</div>

			<div class="metric">
				<p class="metric__label">All-time high market cap</p>
				<p class="metric__value metric__value--highlight" title="{{ $metrics['market_cap'] }}">€18.2M</p>
			</div>

			<div class="metric">
				<p class="metric__label">All-time high price</p>
				<p class="metric__value metric__value--highlight" title="{{ $metrics['market_cap'] }}">€33.71</p>
			</div>

			<div class="metric">
				<p class="metric__label">24 Hour Volume</p>
				<p class="metric__value" title="{{ $metrics['volume_24h'] }}">{{ $formatter->useShorthand($metrics['volume_24h'])}}</p>
			</div>

			<div class="metric">
				<p class="metric__label">Circulating Supply</p>
				<p class="metric__value">629,610</p>
			</div>

			<div class="metric">
				<p class="metric__label">Maximum Supply</p>
				<p class="metric__value">629,610</p>
			</div>

		</div>
	</section>

	@include('_includes.sections.inxt.links.performance')

	<div class="lg:flex" id="inxt-previews" data-dark>

		@include('_includes.sections.inxt.previews.overview')

		@include('_includes.sections.inxt.previews.buy')

	</div>

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

			// Add positive class to metrics which require it
			var neutralClass = 'metric__value--neutral',
				positiveClass = 'metric__value--positive'
			;

			$('.' + neutralClass).each(function(metric){

				if (!$(this).text().startsWith('-')) {

					$(this)
						.removeClass(neutralClass)
						.addClass(positiveClass)
					;

				}

			});

			var ScrollMagicController2 = new ScrollMagic.Controller({
				container: 'body',
			});

			// Fade in - features
			var metricsSectionSelector = '.section--inxt-metrics';

			var tween1 = new TweenMax.staggerFrom(metricsSectionSelector + ' .metric', 0.5, {
				opacity: 0,
				y: 20,
				ease: Sine.easeInOut,
			}, 0.1);

			var scene = new ScrollMagic.Scene({
					triggerElement: metricsSectionSelector,
					triggerHook: 0.75,
					duration: 0,
					reverse: false,
				})
				.setTween(tween1)
				.addTo(ScrollMagicController2)
			;

		});

	</script>

@endpush

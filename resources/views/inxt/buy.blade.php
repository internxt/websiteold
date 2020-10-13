@extends('_layouts.master')

@section('pageID', 'inxt-buy')

@section('pageNameSegment', 'buy-token')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt Token – Buy INXT Tokens.')

@section('metaDescription', 'Buy Internxt tokens (INXT) through an exchange or directly from our website.')

@section('body')

	<section class="section section--header section--inxt-header-buy" id="header-buy" data-dark data-inxt-heading>
		<div class="container">

			<p class="section__subheading">Internxt Token</p>

			<p class="section__heading">Buy INXT Tokens.</p>

		</div>
	</section>

	<section class="section section--inxt-buy-directly">
		<div class="container">
			<p class="section__heading">Buy directly through us.</p>
			<p class="section__explanation">You can buy INXT directly through our website. Our system tracks down and offers the best exchange rates available on the market. Follow the steps below to buy or sell your INXT without the hassle of an exchange.
			<a href='https://medium.com/internxt/buy-inxt-without-an-exchange-buying-crypto-has-never-been-so-simple-b6e073cb76ab' target='_blank'><b>Learn more</b></a>.
			</p>

			
			@include('_includes.inxt-buy-form')
		</div>
	</section>
	@include('_includes.sections.inxt.links.exchanges')

	<div class="lg:flex" id="inxt-previews" data-dark>

		@include('_includes.sections.inxt.previews.overview')

		@include('_includes.sections.inxt.previews.metrics')

	</div>

	@include('_includes.sections.inxt.articles')

	<section class="section section--intro-inxt" id="intro-inxt" data-dark data-heading data-zoom>
		<div class="container">

			<p class="section__label">Internxt Token</p>

			<p class="section__heading"><span class="hidden lg:inline-block">INXT.</span> Our tokenised asset.</p>


			<div class="section__link-container">
				<a class="section__link section__link--buy" href="#">Buy INXT</a>
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

@push('css')
	    <!-- Bootstrap 4.5.2 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
@endpush

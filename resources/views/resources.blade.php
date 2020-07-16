@extends('_layouts.master')

@section('pageID', 'resources')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt – Enliven words with the right visual.')

@section('metaDescription', 'Internxt logo, Drive logo, Internxt assets.')


@section('body')

	<section class="section section--header section--resources-header" id="resources-header" data-dark data-hero>
		<div class="container">

			<p class="section__heading">Enliven words with the right visual.</p>

		</div>
	</section>

	<section class="section section--resources-logos">
		<div class="container">
			<p class="section__heading">Internxt Logos</p>
			<div class="logos">
				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/internxt/internxt-original.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/internxt-original.jpg') }}">
					</a>
					<p class="logo__caption">Internxt | Original</p>
				</div>
				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/internxt/internxt-circle.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/internxt-circle.jpg') }}">
					</a>
					<p class="logo__caption">Internxt | Circle</p>
				</div>
				<div class="logo logo--dark">
					<a href="{{ asset('internxt-resources/logos/internxt/internxt-white.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/internxt-white.jpg') }}">
					</a>
					<p class="logo__caption">Internxt | White</p>
				</div>

				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/x-cloud/x-cloud-original.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcloud-original.jpg') }}">
					</a>
					<p class="logo__caption">Drive | Original</p>
				</div>
				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/x-cloud/x-cloud-grey.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcloud-grey.jpg') }}">
					</a>
					<p class="logo__caption">Drive | Grey</p>
				</div>
				<div class="logo logo--dark">
					<a href="{{ asset('internxt-resources/logos/x-cloud/x-cloud-white.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcloud-white.jpg') }}">
					</a>
					<p class="logo__caption">Drive | White</p>
				</div>

				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/x-core/x-core-original.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcore-original.jpg') }}">
					</a>
					<p class="logo__caption">Core | Original</p>
				</div>
				<div class="logo">
					<a href="{{ asset('internxt-resources/logos/x-core/x-core-grey.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcore-grey.jpg') }}">
					</a>
					<p class="logo__caption">Core | Grey</p>
				</div>
				<div class="logo logo--dark">
					<a href="{{ asset('internxt-resources/logos/x-core/x-core-white.png') }}">
						<img loading="lazy" class="logo__image" src="{{ asset('img/sections/resources/logos/xcore-white.jpg') }}">
					</a>
					<p class="logo__caption">Core | White</p>
				</div>

			</div>
		</div>
	</section>

	<section class="section section--resources-post-images">
		<div class="container">
			<p class="section__heading">Brighten up your posts</p>

			<div class="images">
				<a class="image-link" href="{{ asset('internxt-resources/posts/web-app-dashboard-1.jpg') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/1.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/web-app-dashboard-2.jpg') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/2.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/mobile-dashboard-1.jpg') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/3.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/mobile-dashboard-2.jpg') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/4.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/web-app-dashboard-3.png') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/5.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/mobile-interface.png') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/6.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/x-core-set-up.png') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/7.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/x-core-dashboard.png') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/8.jpg') }}">
				</a>
				<a class="image-link" href="{{ asset('internxt-resources/posts/inxt-background.jpg') }}">
					<img loading="lazy" class="image" src="{{ asset('img/sections/resources/post-images/9.jpg') }}">
				</a>
			</div>
		</div>
	</section>

	<section class="section section--resources-colour-palette">
		<div class="container">
			<div class="colours">
				<div class="colour colour--black">
					<div class="colour__preview">
						<p class="colour__label">#19191A</p>
					</div>
					<p class="colour__caption">Internxt Black</p>
				</div>
				<div class="colour colour--blue">
					<div class="colour__preview">
						<p class="colour__label">#0492FF</p>
					</div>
					<p class="colour__caption">Drive Blue</p>
				</div>
				<div class="colour colour--purple">
					<div class="colour__preview">
						<p class="colour__label">#5B4ADE</p>
					</div>
					<p class="colour__caption">Core Purple</p>
				</div>
				<div class="colour colour--internxt-gradient">
					<div class="colour__preview">
						<p class="colour__label">#19191A - #3B3B3D</p>
					</div>
					<p class="colour__caption">Internxt Gradient</p>
				</div>
				<div class="colour colour--xcloud-gradient">
					<div class="colour__preview">
						<p class="colour__label">#096DFF - #00B1FF</p>
					</div>
					<p class="colour__caption">Drive Gradient</p>
				</div>
				<div class="colour colour--xcore-gradient">
					<div class="colour__preview">
						<p class="colour__label">#9556E6 - #5778EE</p>
					</div>
					<p class="colour__caption">Core Gradient</p>
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
		'Vision' => 'more.vision',
	]])

	@include('_includes.sections.subscribe')

@endsection


@push('js')

	<script>
		$(document).ready(function(){

			var ScrollMagicController2 = new ScrollMagic.Controller({
				container: 'body',
			});

			// Fade in - logos
			var logosSectionSelector = '.section--resources-logos';

			new ScrollMagic.Scene({
					triggerElement: logosSectionSelector,
					triggerHook: 0.75,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFrom(logosSectionSelector + ' .logo', 0.5, {
						opacity: 0,
						y: 30,
						ease: Power2.easeOut,
					}, 0.1)
				)
				.addTo(ScrollMagicController2)
			;

			// Fade in - posts
			var postsSectionSelector = '.section--resources-post-images';

			new ScrollMagic.Scene({
					triggerElement: postsSectionSelector,
					triggerHook: 0.75,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFrom(postsSectionSelector + ' .image-link', 0.5, {
						opacity: 0,
						y: 20,
						ease: Power2.easeOut,
					}, 0.1)
				)
				.addTo(ScrollMagicController2)
			;

			// whitepaper
			var whitepaperSectionSelector = '.section--resources-whitepaper';

			new ScrollMagic.Scene({
				triggerElement: whitepaperSectionSelector,
				triggerHook: 0.5,
				duration: 0,
				reverse: false,
			})
			.setTween(
				new TweenMax.staggerFromTo([
						`${whitepaperSectionSelector} .section__heading`,
						`${whitepaperSectionSelector} .section__explanation`,
						`${whitepaperSectionSelector} .section__button`,
					], 1, {
						opacity: 0,
						y: 60,
					},{
						opacity: 1,
						y: 0,
						ease: Power2.easeOut,
					}, 0.25
				)
			)
			.addTo(ScrollMagicController2)
		;
			// Fade in - colours
			var coloursSectionSelector = '.section--resources-colour-palette';

			new ScrollMagic.Scene({
					triggerElement: coloursSectionSelector,
					triggerHook: 0.75,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFrom(coloursSectionSelector + ' .colour', 0.5, {
						opacity: 0,
						y: 20,
						ease: Power2.easeOut,
					}, 0.1)
				)
				.addTo(ScrollMagicController2)
			;

		});

	</script>

@endpush

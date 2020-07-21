@extends('_layouts.master')

@section('pageID', 'about')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt – About us.')

@section('metaDescription', 'Meet Internxt\'s Team. Fran Villalba Segarra, Founder and CEO at Internxt. Be limitless.')

@section('body')

	<div class="memberProfile">
		<div class="memberProfile__content">
			<button class="memberProfile__button">Close bio</button>
			<p class="memberProfile__bio"></p>
		</div>
		<div class="memberProfile__footer">
			<div class="flex items-center justify-start">
				<p class="memberProfile__name"></p>
				<div class="memberProfile__separator"></div>
				<p class="memberProfile__role"></p>
			</div>
		</div>
	</div>

	<section class="section section--header section--about-header" id="about-header" data-hero data-dark>
		<div class="container">

			<p class="section__heading">Making the impossible, possible.</p>

		</div>
	</section>

	<section class="section section--about-associations">
		<div class="container">

			<img loading="lazy" class="section__image image--google" src="{{ asset('img/sections/about/associations/google.png') }}" alt="Esade">
			<img loading="lazy" class="section__image image--stripe" src="{{ asset('img/sections/about/associations/stripe.png') }}" alt="Stripe">
			<img loading="lazy" class="section__image image--plesk" src="{{ asset('img/sections/about/associations/plesk.png') }}" alt="Lanzadera">
			<img loading="lazy" class="section__image image--sabadell" src="{{ asset('img/sections/about/associations/sabadell.png') }}" alt="Sabadell">
			<img loading="lazy" class="section__image image--blackberry" src="{{ asset('img/sections/about/associations/blackberry.png') }}" alt="Blackberry">
			<img loading="lazy" class="section__image image--ycombinator" src="{{ asset('img/sections/about/associations/ycombinator.png') }}" alt="Y Combinator">

		</div>
	</section>

	<div class="section-separator"></div>

	<section class="section section--about-mission mission-transforming" id="mission-transforming" data-heading>
		<div class="container">
			<div class="section__content">
				<p class="section__heading">Transforming the way people live.</p>
				<p class="section__explanation">Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of innovative mass-market services that disrupt various technology industries.</p>
			</div>
			<img loading="lazy" class="section__image" src="{{ asset('img/sections/about/mission/1.jpg') }}" alt="Transforming the way people live.">
		</div>
	</section>

	<section class="section section--about-mission mission-people" id="mission-people" data-heading>
		<div class="container">
			<img loading="lazy" class="section__image" src="{{ asset('img/sections/about/mission/2.jpg') }}" alt="People come first in everything we do.">
			<div class="section__content">
				<p class="section__heading">People come first in everything we do.</p>
				<p class="section__explanation">We believe technology should empower the individual and not make them powerless to the corporation. The intention is to offer technology that doesnt undermine the privacy of the individual.</p>
			</div>
		</div>
	</section>

	<section class="section section--about-team relative">

		<div class="container">

			<p class="section__heading">Internxt leadership team</p>

			<div class="members">
				<div class="member">
					<div class="section__content">
						<p class="member__name">Fran Villalba Segerra</p>
						<p class="member__role">Founder &amp; CEO</p>
						<p class="member__bio">Fran was <strong>awarded an internship at OnePlus</strong> at an early age and later moved <strong>on to work at Hostinger</strong>, one of the world's largest web hosting companies. Fran then began his journey into entrepreneurship <br class="hidden lg:block"> by launching his <strong>first startup, OneSite,</strong> which had over <strong>10,000 users</strong> within its first few months of operation. Fran has been listed on <strong>The Next Web's T500</strong>, which presents the 500 most talented in the digital scene, and was also <strong>nominated for Forbes 30 Under 30 2017.</strong></p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/fran.jpg') }}" alt="Fran Villalba Segerra">
				</div>
				<div class="member">
					<div class="section__content">
						<p class="member__name">Gonzalo Tormo Bas</p>
						<p class="member__role">Developer</p>

						<p class="member__bio">
						Gonzalo started programming at the age of 17 and has excellent experience in <strong>JavaScript</strong>, PHP and <strong>backend</strong> development. Gonzalo has worked as a software developer at <strong>cybersecurity</strong> company ESET. 
						</p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/gtormo-bw.jpg') }}" alt="Gonzalo Tormo">
				</div>
				<div class="member">
					<div class="section__content">
						<p class="member__name">Alberto González Torre</p>
						<p class="member__role">Developer</p>
						<p class="member__bio">Alberto is a part of the <strong>Software developer</strong> team. He started programming at the early age of 13 and has been working with it ever since. He is an <strong>outstanding C# developer</strong> and has over 10 years of coding experience in JavaScript. He worked as a <strong>researcher and professor at Valencia University,</strong> and as a programmer in various companies.</p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/alberto.jpg') }}" alt="Alberto González Torre">
				</div>

				<div class="member">
					<div class="section__content">
						<p class="member__name">Alex Sicart Ramos</p>
						<p class="member__role">Advisor</p>
						<p class="member__bio">Alex has talked on stage at events, such as <strong>TED talks and iFest,</strong> to discuss blockchain and IPFS. He also came <strong>first place at an event hosted by German car manufacturer Audi</strong>, to create and pitch the most innovative product. Alex was seen by Forbes as being one of Europe’s most promising young game-changers and was awarded a place on the <strong>Forbes 30 Under 30 Europe 2017.</strong> Alex is also a creative consultant for the global leading consultancy firm, <strong>Accenture.</strong></p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/alex.jpg') }}" alt="Alex Sicart Ramos">
				</div>
				<div class="member">
					<div class="section__content">
						<p class="member__name">Jerome Albert</p>
						<p class="member__role">Advisor</p>
						<p class="member__bio">Jerome is a <strong>multinational</strong> who has grown up internationally and with an <strong>ambitious drive.</strong> He has a business background and a passion for <strong>innovation and sustainability.</strong> Finding the intersection of where commercial success meets with these is what he believes will determine the <strong>future success of companies.</strong> He has worked as a <strong>business development manager at blockchain startup BlockFactory</strong> and has previously held positions at <strong>Capgemini & Anthesis.</strong></p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/jerome.jpg') }}" alt="Jerome Albert">
				</div>

				<div class="member">
					<div class="section__content">
						<p class="member__name">Mike Handschuh</p>
						<p class="member__role">Support Manager</p>
						<p class="member__bio">Michael is a <strong>very ambitious community moderator.</strong> He is hooked by the ideas <strong>Internxt has produced.</strong> Following the project closely, Michael is always up to date and <strong>devotes his time to answer community questions.</strong> Furthermore, he never misses the opportunity to scout for any errors to correct and ways to <strong>improve the architecture Internxt build from a community perspective,</strong> so that both sides, employees and community members, are <strong>happy.</strong></p>
						<button class="member__link">Open Bio</button>
					</div>
					<img loading="lazy" class="member__image" src="{{ asset('img/sections/about/team/michael.jpg') }}" alt="Michael Handschuh">
				</div>
			</div>
		</div>
	</section>

	@include('_includes.sections.about.articles')

	@include('_includes.sections.xcloud.get-started-with-1gb')

	@include('_includes.sections.intro-xcore')

	@include('_includes.sections.intro-inxt')

	@include('_includes.sections.about.find-out-more', ['links' => [
		'Consultancy' => 'more.consultancy',
		'Resources' => 'more.resources',
		'Vision' => 'more.vision',
	]])

	@include('_includes.sections.subscribe')

@endsection

@push('js')

	<script>
		$(document).ready(function(){

			var ScrollMagicController = new ScrollMagic.Controller({
				container: 'body',
			});

			// Member cards
			var aboutSelector = '.section--about-team';

			new ScrollMagic.Scene({
					triggerElement: aboutSelector,
					triggerHook: 0.5,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFromTo(aboutSelector + ' .member', 0.3, {
						opacity: 0,
						y: 30,
					},{
						opacity: 1,
						y: 0,
						ease: Power2.easeOut,
					}, 0.1)
				)
				.addTo(ScrollMagicController)
			;

		});
	</script>

@endpush

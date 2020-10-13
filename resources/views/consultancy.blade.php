@extends('_layouts.master')

@section('pageID', 'consultancy')

@section('pageNameSegment', 'consultancy')

@section('navbar-classes', 'navbar--dark')

@section('pageTitle', 'Internxt – Creating your digital transformation.')

@section('metaDescription', 'Blockchain, Security, Technology, Business and Strategic Consultancy by Internxt. Get help from the best.')


@section('body')

	<section class="section section--consultancy-header" id="consultancy-header" data-dark data-hero>
		<div class="container">

			<p class="section__heading">Creating your digital transformation.</p>

		</div>
	</section>

	<section class="section section--consultancy-empowerment" id="consultancy-empowerment" data-heading>
		<div class="container">
			<p class="section__heading">Empower your Business with help from Internxt.</p>
			<p class="section__explanation">Technology will never stop evolving, it’s the nature of the beast. So having an innovation advisor on your side is vital: to tailor a strategy that fits, and to uncover the right technology for your toughest business problems. <br> No matter the industry you work in.</p>
		</div>
	</section>

	<section class="section section--consultancy-features">
		<div class="container">
			<div class="feature feature--constraint">
				<div class="feature__content">
					<p class="feature__heading">Create without the technology constraint.</p>
					<p class="feature__explanation">Our technology advisors can help you <br> pivot wisely to new technology. <br class="lg:hidden">Guiding you throughout the transformation journey, <br class="hidden lg:block"> we start with a technology and ecosystem strategy that lays a future-ready foundation. We then develop a roadmap for change that integrates with your workforce and business processes, all in <br> a highly secure environment.</p>
				</div>
				<img loading="lazy" class="feature__image" src="{{ asset('img/sections/consultancy/empowerment/1.jpg') }}">
			</div>
			<div class="feature feature--creativity">
				<img loading="lazy" class="feature__image" src="{{ asset('img/sections/consultancy/empowerment/2.jpg') }}">
				<div class="feature__content">
					<p class="feature__heading">Giving you the tools to Express your creativity.</p>
					<p class="feature__explanation">Feeling overwhelmed with all the technology platforms out there? Internxt can help create the right technology strategy, develop the business case for change and provide a roadmap for the journey. From strategy development through implementation, you are assured that your technology, business processes and workforce are integrated.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--consultancy-new-technologies" id="consultancy-new-technologies" data-heading>
		<div class="container">
			<p class="section__heading">Committed to being a step-ahead with new technologies.</p>
			<p class="section__explanation">Rampant innovation. Global competition. Disruptive new technologies and business models. In high tech industries, a digitally-transformed future is inevitable. But our research shows that many high tech companies have yet to fully exploit the power of digital transformation.</p>
		</div>
	</section>

	<section class="section section--consultancy-tools" id="consultancy-tools" data-dark data-heading>
		<div class="container">
			<div class="section__content">
				<p class="section__heading">All the tools you will ever need. From start to finish.</p>
				<p class="section__explanation">Work where you’re inspired to explore your passions, where your talents are nurtured and cultivated. Innovate with leading-edge technologies on some of the coolest projects you can imagine.</p>
			</div>
		</div>
	</section>

	<section class="section section--consultancy-taking-work-further" id="consultancy-taking-work-further" data-dark data-heading>
		<div class="container">
			<div class="section__content">
				<p class="section__heading">Taking your work further. In every direction possible.</p>
				<p class="section__explanation">Digital innovation, consulting and transformation global business line. We help business’s find new sources of value. We accelerate the process of turning ideas into prototypes and real-world solutions.</p>
			</div>
		</div>
	</section>

	<section class="section section--consultancy-contact" id="consultancy-contact" data-dark data-heading>
		<div class="container">
			<div class="section__content">
				<p class="section__heading">Hit the ground running with Internxt consultancy.</p>
				<p class="section__explanation">Expert advice and implementation resulting in journeys that take your digital enterprise to the next level. Get started with digital transformation or get an expert opinion about the path you want to take.</p>
				<a class="section__button" href="mailto:{{ config('services.internxt.email') }}">Contact Us</a>
			</div>
		</div>
	</section>

	@include('_includes.sections.xcloud.get-started-with-1gb')

	@include('_includes.sections.intro-xcore')

	@include('_includes.sections.intro-inxt')

	@include('_includes.sections.about.find-out-more', ['links' => [
		'About Us' => 'more.about',
		'Resources' => 'more.resources',
		'Vision' => 'more.vision',
	]])

	@include('_includes.sections.subscribe')

@endsection

@extends('_layouts.master')

@section('pageID', 'xcore-get-started')

@section('pageTitle', 'Internxt Core – Get Started with Internxt Core.')

@section('metaDescription', 'Start earning a passive income by renting out your extra storage disk space today.')

@section('body')

	<section class="section section--header section--xcore-header-get-started" id="xcore-header-get-started" data-dark data-hero>
		<div class="container">
			<p class="section__heading">Setup &amp; Tips</p>
			<p class="section__subheading">Get paid to share</p>
			<a class="section__button section__button--light hidden lg:inline-block" href="{{ $xcoreDownloadLink }}">Download</a>
		</div>
	</section>

	<section class="section section--xcore-step step--download">
		<div class="container">
			<div>
				<p class="section__label">Step 1</p>
				<p class="section__heading">Download the Core desktop app.</p>
				<p class="section__explanation">Start earning money by renting out the extra storage space of your machine. The set up is quick and easy, and you’ve only got to do it once. Download & Install the latest version of Core. Core will detect the Operating System that you are currently using and will automatically download the correct version of the software.</p>
			</div>
			<div class="hidden lg:inline-block section__separator"></div>
			<div class="hidden lg:inline-block">
				<img class="section__logo" src="{{ asset('img/sections/xcore/download/logo.svg') }}" alt="X Core">
			</div>
		</div>
	</section>

	<section class="section section--xcore-step step--set-up-node" id="xcore-step-set-up-node" data-xcore-step>
		<div class="container">
			<div class="hidden lg:inline-block self-end">
				<img class="section__image" src="{{ asset('img/sections/xcore/get-started/set-up-node/mockup.png') }}" alt="X Core">
			</div>
			<div class="section__content">
				<p class="section__label">Step 2</p>
				<p class="section__heading">Set-up your Core node</p>
				<p class="section__explanation">Insert your INXT Wallet address, choose where you’d like to store the encrypted shards of data from Drive users, allocate the desired storage capacity you want your node to provide and finally, insert your public IP, you can Google “what’s my IP” to find your public IP address. If your IP is dynamic (one that periodically changes), you can use noip and enter your hostname instead. <a href="https://whatismyipaddress.com/dynamic-static" rel="nofollow" target="_blank">Click here</a> to find out whether your public IP is static or dynamic.</p>
			</div>
		</div>
	</section>

	<section class="section section--xcore-step step--open-routers-port">
		<div class="container">
			<div class="w-full">
				<p class="section__label">Step 3</p>
				<p class="section__heading">Open your routers port.</p>
				<div class="section__content">
					<p class="section__explanation">All communication in and to your node will go through a port in your router that you need to open. X Core will suggest which port you need to open when setting it up. In the event that you want to choose your own port instead of one suggested by us, when entering your public IP address in Step 2, you can write it in the format IP:Port (eg 64.23.35.49:4243).  To open your port, you will need to access http://192.168.1.1/ with your browser in order to access your router configuration.</p>

					<p class="section__explanation">In your router configuration enter the port range you want to open (the range should include the specific port you want to open). When entering the port number, you will need to enter an IP. If in the case your IP isn’t that of Step 2 you will need to gather your internal IP address instead. Enter “ipconfig /all” in your Windows terminal. For Linux and Mac, enter “ifconfig” instead. For a quick 4-minute video tutorial on how to open a port in your router, you can <a href="https://www.youtube.com/watch?v=aQXJ7sLSz14&feature=youtu.be" rel="nofollow" target="_blank">click here</a>. You can also <a href="https://canyouseeme.org/" rel="nofollow" target="_blank">click here</a> to check whether your port was correctly opened.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--xcore-step step--finished" id="xcore-step-finished" data-xcore-step>
		<div class="container">
			<img class="section__image" src="{{ asset('img/sections/xcore/get-started/finished/mockup.png') }}" alt="X Core">
			<div class="section__content">
				<p class="section__label">Step 4</p>
				<p class="section__heading">You're all set!</p>
				<p class="section__explanation">Every month we will send you a payout based on how much disk space you got allocated and how much INXT you held. The more time you run the node, the more likely it is that the network will allocate your node files since it will rank you as a higher quality node than that of other users. For any questions, you can <a href="https://t.me/Internxt" rel="nofollow" target="_blank">join our Telegram community</a> to directly chat with our tech team and other community members.</p>
			</div>
		</div>
	</section>

	<section class="section section--faq section--xcore-faq">
		<div class="container">

			<p class="section__heading">Frequently asked questions from Internxt Core users.</p>

			@include('_includes.sections.faq.xcore')

		</div>
	</section>

	<section class="section section--intro-xcore" id="xcore-intro" data-dark data-heading data-zoom>
	<div class="section__graphic"></div>
	<div class="container">

		<div class="section__content">
			<img loading="lazy" class="section__icon" src="{{ asset('img/logos/xcore.svg') }}" alt="Introducing X Core">

			<p class="section__heading">Internxt Hosts<span class="section__highlight">Get paid to share</span></p>

			<div class="section__link-container">
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

			$('[data-xcore-step]').each(function(element) {

				let selector = '#' + $(this).attr('id');

				new ScrollMagic.Scene({
						triggerElement: selector,
						triggerHook: 0.6,
						duration: 0,
						reverse: false,
					})
					.setTween(
						new TweenMax.fromTo(selector + ' .section__image', 1, {
							opacity: 0.5,
						},{
							opacity: 1,
						}, 0.1)
					)
					.addTo(ScrollMagicController)
				;

			});

		});
	</script>
@endpush

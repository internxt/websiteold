@extends('_layouts.master')

@section('pageID', 'vision')

@section('pageNameSegment', 'vision')

@section('pageTitle', 'Internxt – Luxe Webcam Cover')

@section('metaDescription', 'Protect your privacy with our premium Webcam Cover. Ships everywhere for free.')


@section('body')

	<section class="section section--header section--header-vision">
		<div class="container">

			<img loading="lazy" class="section__icon" src="{{ asset('img/logos/drive-logo.svg') }}">
			<p class="section__heading"><span class="section__heading__x">Internxt</span> Vision</p>
			<p class="section__highlight">Luxe Webcam Cover</p>
			<a class="section__button btn--stripe" href="#">Buy now For €4.49</a>

			<div id="error-message"></div>

		</div>
	</section>

	<section class="section section--vision-explanation">
		<div class="container">

			<div class="lg:flex lg:justify-between">
				<p class="section__heading">A lifetime of use without the worry of your privacy being violated.</p>
				<p class="section__explanation">Webcam spying is a growing issue that can threaten your privacy via any electronic device that contains a webcam. The solution is quite simple: plenty of documented webcam hacking incidents could have been easily avoided by a simple webcam cover. Our elegant and practical webcam cover serves as the perfect alternative to that ugly sticker or post-it note on your laptop, tablet or desktop.</p>
			</div>

		</div>
	</section>

	<section class="section section--vision-smart">
		<div class="container">

			<div class="section__content">
				<p class="section__heading">The smart way to protect privacy.</p>
				<p class="section__explanation">
					<span class="lg:hidden">Internxt's Vision is crafted and packaged with high quality materials and with a full 2-year protection warranty.</span>
					<span class="hidden lg:block">Internxt Vision is much more than a carefully crafted, useful webcam cover. Internxt Vision deeply represents Internxt's core values. Are you part of Internxt? Welcome to the revolution.</span>
				</p>
			</div>

		</div>
	</section>

	@include('_includes.sections.xcloud.get-started-with-1gb')

	@include('_includes.sections.intro-xcore')

	@include('_includes.sections.intro-inxt')

	@include('_includes.sections.about.find-out-more', ['links' => [
		'About Us' => 'more.about',
		'Consultancy' => 'more.consultancy',
		'Resources' => 'more.resources',
	]])

	@include('_includes.sections.subscribe')

@endsection

@push('js')

	<script src="https://js.stripe.com/v3"></script>

	<script>
		(function() {

			var stripe = Stripe('{{ config('services.stripe.key') }}');

			$('.btn--stripe').click(function () {

				stripe.redirectToCheckout({
					items: [{sku: '{{ config('services.stripe.vision-sku') }}', quantity: 1}],
					successUrl: '{{ route('checkout.success') }}',
					cancelUrl: '{{ route('checkout.canceled') }}',
					billingAddressCollection: 'required'
				})
				.then(function (result) {
					if (result.error) {
						$('#error-message').text(result.error.message);
					}
				});
			});

		})();
	</script>

@endpush

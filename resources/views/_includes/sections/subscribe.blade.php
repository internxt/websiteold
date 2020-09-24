@if(Route::currentRouteName() != "home")

	<div class="">
		<section class="section section--subscribe" id="subscribe">
			<div class="container">


				<p class="section__heading" style="font-weight: 600;">Keep me updated about products, news, tips and offers from Internxt.</p>

				<form class="section--subscribe__form ml-block-form" action="https://app.mailerlite.com/webforms/submit/r3s4c1" data-code="r3s4c1" method="post" target="_blank" rel="noopener">
					<input type="hidden" name="ml-submit" value="1">

					<input class="section__input" type="email" name="fields[email]" value="" placeholder="Email" required>
					<button class="section__button">Subscribe</button>
				</form>

			</div>{{-- /.container --}}
			
			
		</section>{{-- /.section-subscribe --}}

		<footer style="height: 50px;">
			<div class="__internal-footer">
					<a href="#"></a>
					<a href="#"></a>
					<a class="__footer-link" href="/">Internxt</a>
					<a class="__footer-link" href="/core">Core</a>
					<a class="__footer-link" href="mailto:{{ config('services.internxt.email') }}">Contact</a>
					<a class="__footer-link" href="https://twitter.com/internxt" target='_blank'>Twitter</a>				
					<a class="__footer-link" href="https://github.com/internxt" target='_blank'>GitHub</a>				
					<a class="__footer-link" href="https://medium.com/internxt" target='_blank'>News</a>
					<a class="__footer-link" href="https://t.me/internxt" target='_blank'>Community</a>				
					<a class="__footer-link" href="/terms">Legal</a>
					<a href="#"></a>
					<a href="#"></a>
			</div>
		</footer>
	</div>
@endif

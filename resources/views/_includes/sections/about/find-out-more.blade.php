<!--
<section class="section section--find-out-more">
	<div class="container">
		<p class="section__heading">Find out more about Internxt</p>
		<div class="section__content">
			@foreach($links as $title => $route)
				<a class="section__link section__link--{{ str_replace('.', '-', $route) }}" href="{{ route($route) }}">
					<p class="section__link__heading">{{ $title }}</p>
				</a>
			@endforeach
		</div>
	</div>
</section>
-->

@push('js')
	<script type="text/javascript">
		$(document).ready(function(){

			var ScrollMagicController = new ScrollMagic.Controller({
				container: 'body',
			});

			var selector = '.section--find-out-more';

			new ScrollMagic.Scene({
					triggerElement: selector,
					triggerHook: 0.6,
					duration: 0,
					reverse: false,
				})
				.setTween(new TweenMax.staggerFrom(selector + ' .section__link', 0.5, {
					y: 30,
					opacity: 0,
					ease: Power2.easeOut,
				}, 0.1))
				.addTo(ScrollMagicController)
			;

		});
	</script>
@endpush
<section class="section section--xcloud-eco-comparison" id="xcloud-eco-comparison">
	<div class="container">

		<p class="section__heading">The impact of the traditional cloud ecosystem <span class="section__highlight">amounts for about 5% of the world’s energy</span> consumption. Below shows the comparison between centralized and decentralized clouds in terms of peak consumption per 1TB of data.</p>

		<div class="section__comparison">
			<div>
				<p class="section__comparison__label decentralized">Decentralized</p>
				<div class="decentralized lg:hidden">
					<div class="section__comparison__bar decentralized"></div>
					<p class="section__comparison__caption">2.5 W/TB</p>
				</div>
				<p class="section__comparison__label centralized">Centralized</p>
				<div class="centralized lg:hidden">
					<div class="section__comparison__bar centralized"></div>
					<p class="section__comparison__caption">11.3 W/TB</p>
				</div>
			</div>
			<div class="section__comparison__separator"></div>
			<div class="section__comparison__bar-container">
				<div class="decentralized hidden lg:block">
					<div class="section__comparison__bar decentralized"></div>
					<p class="section__comparison__caption">2.5 W/TB</p>
				</div>
				<div class="centralized hidden lg:block">
					<div class="section__comparison__bar centralized"></div>
					<p class="section__comparison__caption">11.3 W/TB</p>
				</div>
			</div>
			<div class="section__comparison__result">
				<p class="result__data">77%</p>
				<p class="result__label">Reduction</p>
			</div>
		</div>

	</div>
</section>

@push('js')
	<script type="text/javascript">

		$(document).ready(function(){

			if (windowWidth > 1024) {

				let ComparisonScrollMagicController = new ScrollMagic.Controller();

				var comparisonSectionSelector = '#xcloud-eco-comparison';

				var comparisonTimeline = new TimelineMax();

				var tween1 = new TweenMax.staggerFromTo([
					`${comparisonSectionSelector} .section__heading`,
					`${comparisonSectionSelector} .section__comparison`,
				], 0.5, {
					opacity: 0,
					y: 30,
				},{
					opacity: 1,
					y: 0,
				}, 0.25);

				var tween2 = new TweenMax.staggerFrom(`${comparisonSectionSelector} .section__comparison__label`, 0.5, {
					opacity: 0,
					y: 30,
					ease: Power1.easeIn,
				}, 0.1);

				var tween3 = new TweenMax.from(`${comparisonSectionSelector} .section__comparison__bar`, 1.5, {
					width: 0,
					ease: Power3.easeInOut,
				});

				var tween4 = new TweenMax.staggerFrom(`${comparisonSectionSelector} .section__comparison__caption`, 0.5, {
					opacity: 0,
					ease: Power1.easeIn,
				}, 0.1);

				var tween5 = new TweenMax.staggerFrom(`${comparisonSectionSelector} .section__comparison__result`, 0.5, {
					opacity: 0,
					ease: Power1.easeIn,
				}, 0.1);

				comparisonTimeline
					.add(tween1)
					.add([tween2, tween3, tween4, tween5])
				;

				var scene3 = new ScrollMagic.Scene({
						triggerElement: comparisonSectionSelector,
						triggerHook: 0.5,
						duration: 0,
						reverse: false,
					})
					.setTween(comparisonTimeline)
					.addTo(ComparisonScrollMagicController)
				;

			}

		});

	</script>
@endpush

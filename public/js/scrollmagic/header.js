$(document).ready(function() {

	var headerSelector = '.section--header';

	var ScrollMagicController = new ScrollMagic.Controller({
		container: 'body',
		// loglevel: 3,
	});

	var timeline = new TimelineMax();

	var tween1 = new TweenMax.to(headerSelector + ' .section__image', 0.9, {
		css: {
			"transform" : "translateX(-9%)",
		},
		ease: Sine.easeInOut,
	});

	var tween2 = TweenMax.staggerFromTo([
		headerSelector + ' .section__icon, ' + headerSelector + ' .section__heading',
		headerSelector + ' .section__subheading',
		headerSelector + ' .section__button',
	], 0.3, {
		opacity: 0,
		y: 30,
	},{
		opacity: 1,
		y: 0,
		delay: 0.65,
	}, 0.25);

	timeline.add([tween1, tween2]);

	var scene = new ScrollMagic.Scene({
			triggerElement: headerSelector,
			duration: 0,
		})
		.setTween(timeline)
		.addTo(ScrollMagicController)
	;

});

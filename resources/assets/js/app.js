/*
console.info(`\n%c
'####:'##::: ##:'########:'########:'########::'##::: ##:'##::::'##:'########:
. ##:: ###:: ##:... ##..:: ##.....:: ##.... ##: ###:: ##:. ##::'##::... ##..::
: ##:: ####: ##:::: ##:::: ##::::::: ##:::: ##: ####: ##::. ##'##:::::: ##::::
: ##:: ## ## ##:::: ##:::: ######::: ########:: ## ## ##:::. ###::::::: ##::::
: ##:: ##. ####:::: ##:::: ##...:::: ##.. ##::: ##. ####::: ## ##:::::: ##::::
: ##:: ##:. ###:::: ##:::: ##::::::: ##::. ##:: ##:. ###:: ##:. ##::::: ##::::
'####: ##::. ##:::: ##:::: ########: ##:::. ##: ##::. ##: ##:::. ##:::: ##::::
....::..::::..:::::..:::::........::..:::::..::..::::..::..:::::..:::::..:::::
`,
"font-family:monospace");
*/

require('./bootstrap');

window.Vue = require('vue');

Vue.component('x-core-earnings-calculator', require('./components/XCoreEarningsCalculator.vue').default);

const app = new Vue({
    el: '#content',
});

window.ScrollMagic = require('scrollmagic'); // Or use scrollmagic-with-ssr to avoid server rendering problems

import 'gsap/CSSRulePlugin';

import { TweenMax, TimelineMax } from "gsap"; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap";
// import 'bootstrap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);


$('.subsection--milestone').click((e) => {

	let classString = 'subsection--milestone--active';
	var clicked = $(e.currentTarget);

	// remove active class from  others
	$('.' + classString).not(clicked).removeClass(classString);

	clicked.toggleClass(classString);

});


let
	activeBodyClass = 'hasActiveMemberProfile',
	activeMemberProfileClass = 'memberProfile--active',
	body = $('body'),
	contentHideClass = 'opacity-0',
	memberProfile = $('.memberProfile'),
	memberProfileContent = [
		'.memberProfile__button',
		'.memberProfile__bio',
		'.memberProfile__footer',
	],
	memberProfileTopOffset = 60,
	memberProfileTransitionSpeed = 0.4
;

// Store this outside the open method so it's available to the close method
var clickedMember;


$('.member__link:not(.member__link--external)').click((e) => {

	clickedMember = $(e.currentTarget).closest('.member');

	// Work out position of clicked element, to move placeholder to that location
	var
		left = clickedMember.position().left,
		top = clickedMember.position().top,
		width = clickedMember.width(),
		height = clickedMember.height()
	;

	let replacements = [
		'name',
		'role',
		'bio',
	];

	$.each(replacements, (index, replacement) => {
		memberProfile.find('.memberProfile__' + replacement).html($(clickedMember).find('.member__' + replacement).html());
	});

	var t1 = new TimelineMax();

	t1.set(memberProfileContent, {
		opacity: 0,
	});

	t1.fromTo(memberProfile, memberProfileTransitionSpeed, {
		width: width,
    	height: height,
    	opacity: 0,
    	top: top - memberProfileTopOffset,
    	left: left,
	},{
    	width: '100vw',
    	height: '100vh',
    	opacity: 1,
    	top: 0,
    	left: 0,
	});

	t1.set(body, {
		className:"+=" + activeBodyClass,
	});

	t1.staggerFromTo(memberProfileContent, 0.5, {
		y: 30,
	},{
		opacity: 1,
		y: 0,
	}, 0.25);

});


$('.memberProfile__button').click((e) => {

	// Work out position of clicked element, to move placeholder to that location
	var
		left = clickedMember.position().left,
		top = clickedMember.position().top,
		width = clickedMember.width(),
		height = clickedMember.height()
	;

	var t1 = new TimelineMax();

	t1.set(body, {
		className:"-=" + activeBodyClass,
	});

	t1.to(memberProfileContent, 0.15, {
		opacity: 0,
	});

	t1.to(memberProfile, memberProfileTransitionSpeed, {
		width: width,
    	height: height,
    	opacity: 0,
    	top: top - memberProfileTopOffset,
    	left: left,
    });

    t1.set(memberProfile, {
		width: 0,
		height: 0,
	});

});


$('.modal__checkbox').click((e) => {

	var target = $(e.currentTarget);

	var isChecked = target.find('input').is(":checked");

	let btnClass = 'modal__cta';
	let disabledClass = 'modal__cta--disabled';

	if (isChecked) {
		$('.' + btnClass).removeClass(disabledClass);
		$('.' + btnClass).each(function(){
			// Use data href to populate the actual href, and enable the button
			$(this).attr('href', $(this).data('href'));
		});
	}
	else {
		$('.' + btnClass).addClass(disabledClass);
		$('.' + btnClass).attr('href', '#');
	}


});

// Mobile navbar toggle
var burger = $('.burger-container'),
header = $('.mobile-header');

burger.click(function() {
	header.toggleClass('menu-opened');
});

// FAQs
let questionContainer = $('.question-container'),
	questionContainerActiveClass = 'question-container--active',
	question = $('.question')
;

questionContainer.click(function(e) {

	// Check current state of question before removing active class from all of them
	let currentQuestionIsOpen = $(this).hasClass(questionContainerActiveClass);

	questionContainer.removeClass(questionContainerActiveClass);

	if (currentQuestionIsOpen) {
		$(this).removeClass(questionContainerActiveClass);
	}
	else{
		$(this).addClass(questionContainerActiveClass);
	}

});

// Subscribe form
let subscribeInput = $('.section--subscribe__form .section__input'),
	subscribeForm = $('.section--subscribe__form')
;

subscribeInput.on('focus', (event) => {
	subscribeForm.addClass('active');
});

subscribeInput.on('blur', () => {
	if (!subscribeInput[0].value) {
		subscribeForm.removeClass('active');
	}
});

$(document).ready(() => {

	$("#page--inxt-overview .navbar-toggler").click(function(e){
		if ($('.navbar-toggler').attr('aria-expanded') == 'true') {
			$('#__header').attr('style', 'background-color: transparent !important');
			$('.nav-link').attr('style', 'color: white !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').addClass('navbar-dark')
			$('.navbar').removeClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#FFF');
		} else {
			$('#__header').attr('style', 'background-color: white !important');
			$('.nav-link').attr('style', 'color: black !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').removeClass('navbar-dark')
			$('.navbar').addClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#000');
		}
	})

	$("#page--xcore-overview .navbar-toggler").click(function(e){
		if ($('.navbar-toggler').attr('aria-expanded') == 'true') {
			$('#__header').attr('style', 'background-color: transparent !important');
			$('.nav-link').attr('style', 'color: white !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').addClass('navbar-dark')
			$('.navbar').removeClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#FFF');
		} else {
			$('#__header').attr('style', 'background-color: white !important');
			$('.nav-link').attr('style', 'color: black !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').removeClass('navbar-dark')
			$('.navbar').addClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#000');
		}
	})

	$("#page--about .navbar-toggler").click(function(e){
		if ($('.navbar-toggler').attr('aria-expanded') == 'true') {
			$('#__header').attr('style', 'background-color: transparent !important');
			$('.nav-link').attr('style', 'color: white !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').addClass('navbar-dark')
			$('.navbar').removeClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#FFF');
		} else {
			$('#__header').attr('style', 'background-color: white !important');
			$('.nav-link').attr('style', 'color: black !important');
			$('.navbar-toggler-icon').css('background-image', `url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)`);
			$('.navbar').removeClass('navbar-dark')
			$('.navbar').addClass('navbar-light')
			$('.navbar-brand svg g').attr('fill', '#000');
		}
	})


	let
		navbar = $('#navbar'),
		subNavButton = $('.navbar__subnav-button'),
		homeNavButton = $('.navbar__link--more-hide')
	;

	window.windowWidth = $(window).width();

	subNavButton.click((e) => {

		let
			clickedLink = e.currentTarget,
			targetNavbar = $(clickedLink).data('navbar');
		;

		$(`nav`).addClass('hidden');
		$(`nav[data-id="${targetNavbar}"]`).removeClass('hidden');

		TweenMax.fromTo('header', 0.8, {
			opacity: 0,
			y: -50,
			ease: Power2.easeIn,
		}, {
			opacity: 1,
			y: 0,
			ease: Power2.easeOut,
		});

	});

	homeNavButton.click((e) => {

		switch (e.currentTarget.baseURI)  {
			case 'https://internxt.com/about':
			case 'https://internxt.com/consultancy':
			case 'https://internxt.com/vision':
				window.location.href = "https://internxt.com";
			break;
			default:
				$('nav').addClass('hidden');
				$(`nav[data-id="main"]`).removeClass('hidden');

				TweenMax.fromTo('header', 0.8, {
					opacity: 0,
					y: -50,
					ease: Power2.easeIn,
				}, {
					opacity: 1,
					y: 0,
					ease: Power2.easeOut,
				});	
			break;
		}

	});

	// Scroll triggers for CSS animations (via classes)
	let ScrollMagicController = new ScrollMagic.Controller();

	// Auto fade header in
	TweenMax.fromTo('header', 0.8, {
		opacity: 0,
		y: -50,
		ease: Power2.easeIn,
	}, {
		opacity: 1,
		y: 0,
		ease: Power2.easeOut,
	});

	// Hide header when reaching the bottom of the page
	new ScrollMagic.Scene({
			triggerElement: '.pageFooter',
			triggerHook: 0.5,
			duration: 0,
		})
		.setTween(new TweenMax.to('header', 0.2, {opacity: 0}))
		.addTo(ScrollMagicController)
	;


	// Auto fade cookie notice in
	window.setTimeout(function(){

		TweenMax.fromTo('.cc-window.cc-banner', 1, {
			opacity: 0,
			y: 30,
			ease: Power2.easeIn,
		}, {
			opacity: 1,
			y: 0,
			ease: Power2.easeOut,
		});

	}, 2000);


	// Transition for header background image and heading/subheading
	$('[data-hero]').each(function(element) {

		var selector = '[data-hero]';

		var timeline = new TimelineMax();

		timeline.add([
			new TweenMax.from(selector, 2, {
					'background-size': '+=10%',
					ease: Power2.easeOut,
				}
			),
			new TweenMax.fromTo(`${selector} .section__heading`, 2, {
					opacity: 0,
					y: 60,
				},{
					opacity: 1,
					y: 0,
					ease: Power2.easeOut,
				}
			),
			new TweenMax.fromTo(`${selector} .section__subheading`, 1.25, {
					opacity: 0,
					y: 25,
				},{
					delay: 0.75,
					opacity: 1,
					y: 0,
					ease: Power1.easeOut,
				}
			),
			new TweenMax.fromTo(`${selector} .section__button`, 1.25, {
					opacity: 0,
					y: 25,
				},{
					delay: 1.25,
					opacity: 1,
					y: 0,
					ease: Power1.easeOut,
				}
			)
		]);

		new ScrollMagic.Scene({
				triggerElement: selector,
				triggerHook: 1,
				duration: 0,
				reverse: false,
			})
			.setTween(timeline)
			.addTo(ScrollMagicController)
		;

	});


	$('[data-dark]').each(function(element) {

		new ScrollMagic.Scene({
				triggerElement: '#' + $(this).attr('id'),
				triggerHook: 0,
				duration: $(this).height(),
			})
			.on('enter', function () {
				// $('.navbar').addClass('navbar--dark');
				// $('.navbar-mobile').addClass('navbar--dark');
			})
			.on('leave', function () {
				// $('.navbar').removeClass('navbar--dark');
				// $('.navbar-mobile').removeClass('navbar--dark');
			})
			.addTo(ScrollMagicController)
		;

	});

	$('[data-heading]').each(function(element) {

		let selector = $(this).attr('id'),
			timeline = new TimelineMax()
		;

		let tween1 = new TweenMax.staggerFromTo([
				`
					#${selector} .section__icon,
					#${selector} .section__heading,
					#${selector} .section__highlight
				`,
				`
					#${selector} .section__subheading,
					#${selector} .section__explanation,
					#${selector} .section__button,
					#${selector} .section__link-container
				`,
			], 0.3, {
				opacity: 0,
				y: 30,
			},{
				opacity: 1,
				y: 0,
			}, 0.25)
		;

		let tween2 = new TweenMax.fromTo(`#${selector} .section__background`, 1, {
				opacity: 0.5,
			},{
				opacity: 1,
			}, 0.25)
		;

		timeline.add([tween1, tween2]);

		new ScrollMagic.Scene({
				triggerElement: '#' + selector,
				triggerHook: 0.5,
				reverse: false,
				duration: 0,
			})
			.setTween(timeline)
			.addTo(ScrollMagicController)
		;

	});

	$('[data-gradient-heading]').each(function(element) {

		let selector = '#' + $(this).attr('id');

		let tween = new TweenMax.staggerFromTo([
				`${selector} .section__content`,
				`${selector} .section__button`,
			], 0.3, {
				opacity: 0,
				y: 30,
			},{
				opacity: 1,
				y: 0,
			}, 0.25)
		;

		var scene4 = new ScrollMagic.Scene({
				triggerElement: selector,
				triggerHook: 0.7,
				duration: 0,
				reverse: false,
			})
			.setTween(tween)
			.addTo(ScrollMagicController)
		;

	});

	$('[data-inxt-heading]').each(function(element) {

		if (windowWidth > 1024) {

			let selector = '[data-inxt-heading]';

			let inxtTimeline = new TimelineMax();

			inxtTimeline.add([
				new TweenMax.fromTo(selector, 2, {
						'background-size': '122%',
					},{
						'background-size': '130%',
						ease: Power2.easeOut,
					}
				),
				new TweenMax.staggerFromTo([
						`${selector} .section__subheading`,
						`${selector} .section__heading`,
						`${selector} .section__button`,
					], 2, {
						opacity: 0,
						y: 60,
					},{
						opacity: 1,
						y: 0,
						ease: Power2.easeOut,
					}, 0.35
				)
			]);

			new ScrollMagic.Scene({
					triggerElement: selector,
					triggerHook: 1,
					duration: 0,
					reverse: false,
				})
				.setTween(inxtTimeline)
				.addTo(ScrollMagicController)
			;

		}

	});


	$('[data-inxt-preview]').each(function(element) {

		if (windowWidth > 1024) {

			let selector = '[data-inxt-preview]';

			new ScrollMagic.Scene({
					triggerElement: selector,
					triggerHook: 0.5,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFromTo([
							`${selector} .section__subheading`,
							`${selector} .section__heading`,
							`${selector} .section__button`,
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
				.addTo(ScrollMagicController)
			;

		}

	});


	$('[data-zoom]').each(function(element) {

		if (windowWidth > 1024) {

			let selector = '#' + $(this).attr('id');

			new ScrollMagic.Scene({
					triggerElement: selector,
					triggerHook: 0.5,
					duration: "100%",
				})
				.setTween(
					new TweenMax.fromTo(selector, 2, {
							'background-size': '115%',
						},{
							'background-size': '100%',
							ease: Power1.easeInOut,
						}
					)
				)
				.addTo(ScrollMagicController)
			;

		}

	});


	$('[data-inxt-links]').each(function(element) {

		if (windowWidth > 1024) {

			let selector = '#' + $(this).attr('id');

			new ScrollMagic.Scene({
					triggerElement: selector,
					triggerHook: 0.6,
					duration: 0,
					reverse: false,
				})
				.setTween(
					new TweenMax.staggerFrom(selector + ' .link', 1, {
						opacity: 0,
						y: 30,
						ease: Power2.easeInOut,
					}, 0.1)
				)
				.addTo(ScrollMagicController)
			;

		}

	});

	$('[data-articles]').each(function(element) {

		let selector = '[data-articles]';

		new ScrollMagic.Scene({
				triggerElement: selector,
				triggerHook: 0.6,
				duration: 0,
				reverse: false,
			})
			.setTween(
				new TweenMax.staggerFrom(selector + ' .article', 1, {
					opacity: 0,
					y: 30,
					ease: Power2.easeInOut,
				}, 0.1)
			)
			.addTo(ScrollMagicController)
		;

	});


	let linkSectionSelector = '.section--xcloud-section-link-container';

	var tween6 = new TweenMax.fromTo([
		linkSectionSelector + ' .link:nth-of-type(2)',
	], 1, {
		opacity: 0.25,
		top: 300,
	},{
		opacity: 1,
		top: 0,
		ease: Power2.easeOut,
	});

	var scene4 = new ScrollMagic.Scene({
			triggerElement: linkSectionSelector,
			triggerHook: 0.3,
			duration: 0,
			reverse: false,
		})
		.setTween(tween6)
		.addTo(ScrollMagicController)
	;


	var subscribeSelector = '.section--subscribe';

    new ScrollMagic.Scene({
            triggerElement: subscribeSelector,
            triggerHook: 0.5,
            reverse: false,
            duration: 0,
        })
        .setTween(
            new TweenMax.staggerFromTo([
                subscribeSelector + ' .section__icon, ' + subscribeSelector + ' .section__heading',
                subscribeSelector + '__form',
            ], 0.3, {
                opacity: 0,
                y: 30,
            },{
                opacity: 1,
                y: 0,
            }, 0.25)
        )
        .addTo(ScrollMagicController)
    ;

    var
    	pageFooterHeadings = $('.pageFooter__heading'),
    	pageFooterLinks = $('.pageFooter__link'),
    	modalActiveClass = 'modal--active',
    	modalActiveBodyClass = 'has-modal'
    ;

    pageFooterHeadings.click(function(e){

    	var clickedHeading = e.currentTarget;

    	pageFooterLinks.addClass('hidden lg:block');
    	$(clickedHeading).closest('ul').find('.pageFooter__link').removeClass('hidden lg:block');

    });

    pageFooterLinks.addClass('hidden lg:block');

    $('.modal__button').click(function(e){
		$('body').removeClass(modalActiveBodyClass);
    	$('.modal').removeClass(modalActiveClass);
    });

    $('.navbar-mobile__menu-button').click(function(e){

    	$('#navbar-mobile').toggleClass('active');
    	$('body').toggleClass('has-active-navbar');

    });


    $('.cookie-notice__button').click(function(e){

    	$('.cookie-notice-container').hide();

    });

});

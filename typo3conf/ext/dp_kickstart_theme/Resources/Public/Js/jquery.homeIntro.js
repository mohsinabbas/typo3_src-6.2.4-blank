(function($) {
	"use strict";

	$.fn.homeIntro = function(options) {
		var self = this,
			settings = $.extend({
				test: null
			}, options),

			introHeight = 0,
			logoTop = 95,
			showAddress = true,
			
			wrapperHeight = 0,
			navbarHeight = 0,

			windowHeight = 0,
			navTopPosition = 0,
			wrapperTopPosition = 0,

			scroll = 0,
			fixNav = false,
			isMobile = false,

			firstLoad = function() {
				$('.navbar').addClass('home-navbar-static');
				$('#footer-toggle').hide();
				$('.slider-navigation').hide();

				if ( isMobile === false ) {
					calcPositions();
					initDesktop();
				} else {
					calcPositions();
					initMobile();
				}
			},

			calcPositions = function() {
				windowHeight = $(window).height();

				navTopPosition = windowHeight + 220;
				wrapperTopPosition = ( $('.intro').is(':visible') ) ? navTopPosition + windowHeight - 100 : windowHeight - 100;

				introHeight = $('.intro').height();
			},

			initDesktop = function() {
				if ( introHeight <= 380 ) {
					showAddress = false;
					hideAddress();
					positionLogo();
				} else {
					showAddress = true;
					removeLogoStyle();
				}
				
				if ( $('.intro').is(':visible') ) {
					$('.navbar').css('top', navTopPosition);
				}
				$('.wrapper').css('top', wrapperTopPosition);
			},

			initMobile = function() {
				$('.latest, .sozial, .home-logo').hide();
				$('.slider-navigation').show();

				wrapperHeight = $('.wrapper').outerHeight();
				navbarHeight = $('.navbar').outerHeight();

				$('#slider').height( windowHeight - wrapperHeight - navbarHeight - 50 );

				setTimeout(function() {
					$('.intro').fadeOut();
				}, 4000);
			},

			positionLogo = function() {
				$('.home-logo').offset({ top: logoTop });
			},

			removeLogoStyle = function() {
				if ( $('.home-logo').attr('style') ) {
					$('.home-logo').removeAttr('style');
				};
			},

			hideAddress = function() {
				$('.intro address').hide();
			},

			onResize = function() {
				if ( isMobile === false ) {
					calcPositions();
					initDesktop();
				} else {
					initMobile();
				}
			},

			onScrollStart = function() {
				if ( isMobile === false ) {
					hideAddress();
				} else {
					$('.intro').hide();
				}
			},

			onScroll = function() {
				scroll = $(window).scrollTop();
				if (scroll == 0) {
					if ( showAddress === true ) {
						$('.intro address').fadeIn(500);
					}
				}

				if (scroll >= navTopPosition && fixNav == false) {
					$('.navbar').removeClass('home-navbar-static').removeAttr('style');
					$('.intro').hide();
					$('#footer-toggle').fadeIn();
					$('.slider-navigation').fadeIn();

					$('.wrapper').css('top', (windowHeight - 100));
					$(document).scrollTop(0);

					fixNav = true;
				}
			},

			checkMobile = function() {
				if ( $('.navbar-toggle').is(':visible') ) {
					isMobile = true;
				}
			};

		if ( self.length > 0 ) {
			checkMobile();
			firstLoad();
		}

		$(window).resize(function() {
			checkMobile();
			onResize();
		});
		$(window).on('scrollstart', function() {
			checkMobile();
			onScrollStart();
		});
		$(window).scroll(function() {
			checkMobile();
			if ( isMobile === false ) {
				onScroll();
			}
		});
	};
}(jQuery))
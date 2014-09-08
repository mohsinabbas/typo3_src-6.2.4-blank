page.includeJSFooterlibs {
	jquery					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery-1.11.0.min.js
	jquery.forceOnTop		= 1
	cookie					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.cookie.js
	fancybox				= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.fancybox.js
	scroll					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery-scroll-startstop.js
	mixitup					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.mixitup.js

	cycle					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.cycle2.min.js
	swipe					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.cycle2.swipe.js
	ios6fix					= EXT:dp_kickstart_theme/Resources/Public/Js/ios6fix.js
	maximage				= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.maximage.js

	home					= EXT:dp_kickstart_theme/Resources/Public/Js/jquery.homeIntro.js

	bootstrap1				= EXT:dp_kickstart_theme/Resources/Public/Js/bootstrap/transition.js
	bootstrap2				= EXT:dp_kickstart_theme/Resources/Public/Js/bootstrap/collapse.js
	bootstrap3				= EXT:dp_kickstart_theme/Resources/Public/Js/bootstrap/dropdown.js

	script					= EXT:dp_kickstart_theme/Resources/Public/Js/script.js
}

page.includeJSlibs {
	modernizr				= EXT:dp_kickstart_theme/Resources/Public/Js/modernizr-2.6.2.min.js
	modernizr.forceOnTop	= 1
}

[browser = msie] && [version =< 9]
page.includeJSlibs {
	html5shiv				= https://cdn.jsdelivr.net/html5shiv/3.7.0/html5shiv.js
	html5shiv.external		= 1
	respond					= https://cdn.jsdelivr.net/respond/1.4.2/respond.src.js
	respond.external		= 1
}
[global]
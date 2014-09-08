jQuery(document).ready(function($) {

	var BASE = $('base:first').attr('href');

	$(".fancybox").fancybox();

	//*** Footer - START ***/
	var $footer = $('#footer');
	var extra = 10; // In case you want to trigger it a bit sooner than exactly at the bottom.

	$('#footer-toggle').on('click', function() {
		$footer.toggleClass('active');
	});

	$(window).scroll(function() {
		if ( $('.navbar-toggle').is(':visible') === false ) {
			var scrolledLength = ( $(window).height() + extra ) + $(window).scrollTop(),
				documentHeight = $(document).height();

			if( scrolledLength >= documentHeight ) {
				$footer.addClass('active');
			}
			else if ( scrolledLength <= documentHeight && $footer.hasClass('active') ) {
				$footer.removeClass('active');
			}
		}
	});
	//*** Footer - ENDE ***/
	
	//*** Logo - START ***/
	if ( $('body').hasClass('body-logo') ) {
		$('body').append('<div class="body-logo-fixed"></div>');
	}
	//*** Logo - ENDE ***/

	//*** Project-Liste - START ***/
	$('.project-list .box-content').maximage({
		fillElement: '.box-content'
	});

	var $projectList = $('.project-list #content');

	// Filter if only data-filter is set
	if ( $.cookie('project_filter') != null && $.cookie('project_sort') == null ) {
		
		var filter = $.cookie('project_filter');
		$('.project-list .filter').removeClass('active');
		$('.project-list .filter[data-filter="' + filter + '"]').addClass('active');

		$projectList.mixItUp({
			load: {
				filter: filter
			},
			controls: {
				enable: false,
				live: false
			}
		});

	}
	// Filter if both (data-filter and data-sort) is set
	else if ( $.cookie('project_filter') != null && $.cookie('project_sort') != null ) {
		var filter = $.cookie('project_filter'),
			sort = $.cookie('project_sort');

		$('.project-list .filter').removeClass('active');
		$('.project-list .filter[data-filter="' + filter + '"]').addClass('active');

		$('.project-list .sort').removeClass('active');
		$('.project-list .sort[data-sort="' + sort + '"]').addClass('active');

		$projectList.mixItUp({
			load: {
				filter: filter,
				sort: sort
			},
			controls: {
				enable: false,
				live: false
			}
		});

	}
	// Load default mixItUp (no filter is set)
	else {
		$projectList.mixItUp({
			controls: {
				enable: false,
				live: false
			}
		});
	}

	// Filter mixItUp and reset sorting
	$('.project-list .filter').on('click', function() {
		var filter = $(this).data('filter');

		$projectList.mixItUp('multiMix', {
			filter: filter,
			sort: 'default'
		}, function() {
			var state = $projectList.mixItUp('getState'),
				activeFilter = state.activeFilter,
				activeSort = state.activeSort;

			$.cookie('project_filter', activeFilter, { path: '/' });
			$.cookie('project_sort', activeSort, { path: '/' });

			if (activeFilter == '.mix') {
				$.removeCookie('project_filter', { path: '/' });
			}
			if (activeSort == 'default') {
				$.removeCookie('project_sort', { path: '/' });
			}
		});

		$('.project-list .filter').removeClass('active');
		$('.project-list .sort').removeClass('active');
		$(this).addClass('active');
	});
	// Sort mixItUp
	$('.project-list .sort').on('click', function() {
		var sort = $(this).data('sort');
		$projectList.mixItUp('sort', sort, function() {
			var state = $projectList.mixItUp('getState'),
				activeSort = state.activeSort;

			$.cookie('project_sort', activeSort, { path: '/' });
		});
		
		$('.project-list .sort').removeClass('active');
		$(this).addClass('active');
	});

	// Link auf Detailseite
	$('.project-list .box-container').each(function() {
		var $this = $(this),
			projectLink = null;

		if ( $this.data('project-link').length > 0 ) {
			projectLink = $this.data('project-link');
		}

		$this.css({ cursor : 'pointer' });
		$this.on('click', function() {
			document.location.href = BASE + projectLink;
		});
	});
	//*** Project-Liste - ENDE ***/

	//*** Project-Detail - START ***/
	if ( $('.project-detail').length > 0) {
		$('body, html').animate({
			scrollTop: parseFloat( $('.project-title').position().top ) - parseFloat( $('.navbar').height() )
		}, 'slow');

		var navbarHight = $('.navbar').height(),
			filterHight = $('.filter-container').height(),
			topSpace = ( $('.filter-container').is(':visible') ) ? navbarHight + filterHight : navbarHight,
			windowHeight = $(window).height(),
			windowWidth = $(window).width(),
			imageBottom = 60,
			sliderHeight = windowHeight - imageBottom - topSpace;

		if ( sliderHeight > windowWidth ) {
			sliderHeight = windowWidth;
		}

		$('#slider').height(sliderHeight);
	}

	// Set active filter or sorting
	if ( $.cookie('project_filter') != null && $.cookie('project_sort') == null ) {
		var filter = $.cookie('project_filter');
		$('.project-detail .filter').removeClass('active');
		$('.project-detail .filter[data-filter="' + filter + '"]').addClass('active');
	} else if ( $.cookie('project_filter') != null && $.cookie('project_sort') != null ) {
		var filter = $.cookie('project_filter'),
			sort = $.cookie('project_sort');

		$('.project-detail .filter').removeClass('active');
		$('.project-detail .filter[data-filter="' + filter + '"]').addClass('active');

		$('.project-detail .sort').removeClass('active');
		$('.project-detail .sort[data-sort="' + sort + '"]').addClass('active');

	}

	// Click action on filter or sorting to return to the project-list
	$('.project-detail .filter').on('click', function() {
		if ( $.cookie('project_filter') != $(this).data('filter') ) {
			$.cookie('project_filter', $(this).data('filter'), { path: '/' });
			$.removeCookie('project_sort', { path: '/' });
		}
	});
	$('.project-detail .sort').on('click', function() {
		if ( $.cookie('project_sort') != $(this).data('sort') ) {
			$.cookie('project_sort', $(this).data('sort'), { path: '/' });
		}
	});

	// Backlink
	$('.project-detail .back-link').on('click', function(e) {
		e.preventDefault();
		history.back(1);
	});
	//*** Project-Detail - ENDE ***/
	
	//*** Home - START ***/
	if ( $('.home').length > 0) {
		$('.home').homeIntro();

		// equal height
		var maxHeading = -1;

		$('.home .box-container').each(function() {
			var boxHeight = $(this).height();

			if ( boxHeight > maxHeading ) {
				maxHeading = boxHeight;
			}
		});

		$('.home .box-container').height( maxHeading );

		// Latest image height
		var latestHeaderHeight = $('.home .latest .box-header').outerHeight();
		var latestLinkHeight = $('.home .latest .box-link').outerHeight();
		var latestImageHeight = maxHeading - latestHeaderHeight - latestLinkHeight;

		$('.home .latest .box-content').height( latestImageHeight );

		$('.home .latest .box-content').maximage({
			fillElement: '.box-content'
		});
	}
	//*** Home - ENDE ***/
	
	//*** Slider - START ***/
	$('#slider .slider-container').maximage({
		cycleOptions: {
			fx: 'scrollHorz',
			slides: '> div',
			easing: null,
			paused: true,
			log: false,
			next: '.slider-navigation .next',
			prev: '.slider-navigation .prev',
			swipe: true
		},
		fillElement: '.slider-container'
	});
	//*** Slider - ENDE ***/

});
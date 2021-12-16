jQuery(document).ready(function($) {

	// Primary nav
	var $menuBtn = $(".global-header--nav-btn");
	var $menuContainer = $(".global-header--nav__mobile");
	$menuBtn.click(function() {
		$(this).toggleClass("is-active");
		$("body").toggleClass("menu-active");
		$menuContainer.toggleClass("is-active");
	});



	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();

	$(window).scroll(function(event){
		didScroll = true;
	});

	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250);

	function hasScrolled() {
		var st = $(this).scrollTop();
		if(Math.abs(lastScrollTop - st) <= delta)
			return;
		if (st > lastScrollTop && st > navbarHeight){
			// Scroll Down
			$('header').removeClass('global-header__down').addClass('global-header__up');
		} else {
			// Scroll Up
			if(st + $(window).height() < $(document).height()) {
				$('header').removeClass('global-header__up').addClass('global-header__down');
			}
		}

		lastScrollTop = st;
	}

});
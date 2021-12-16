jQuery(function ($) {
	function Animation() {
		$('.fade').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 200;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('fade--visible');
			} 
		});
	};
	Animation();
		$(document).scroll(function(){
		Animation();
	});
})
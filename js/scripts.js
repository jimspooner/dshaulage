(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$(".hamburger").click(function(){
			$(this).addClass("is-active");
		});
	

		UIkit.util.on('#offcanvas-overlay', 'hide', function () {
			$(".hamburger").removeClass("is-active");
		})
		
		
	});
	
})(jQuery, this);

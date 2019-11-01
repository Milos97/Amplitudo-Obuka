$(document).ready(function () {
	
	//var headerHeight = $('header').outerHeight();

	$('.slide-section').click(function (e) {
		
		e.preventDefault();

		var linkHref = $(this).attr('href');
		

		$('html, body').animate({
			scrollTop: $(linkHref).offset().top - 80
		}, 600);

		
	});

	

});
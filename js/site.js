jQuery(document).ready(function(){
	  $('.menu-toggle').click(function(){
		$('.menu').slideToggle();
			return false;
	  });
	  $('.menu-toggle').click(function(e) {
		  e.preventDefault();
		  $(this).toggleClass('active');
	  });
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});	
	
	//Clear search text field
	$('.widget-area .input-text').focus(function(){
		this.value = "";
	});	
	
});
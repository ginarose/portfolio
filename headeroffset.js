jQuery(document).ready(function($) {
	
	$('.headernavigation').click(function(e) {
	e.preventDefault();
	//gets link for relocation from link clicked
   navlink = $(this).attr("href");
   //logs link to console
   console.log(navlink);

   		//animates link to whatever the navlink is set to, minus whatever from the top
	   $('html, body').animate({scrollTop: $(navlink).offset().top -90 }, 'slow');}); 


});

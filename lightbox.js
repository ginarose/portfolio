jQuery(document).ready(function($) {
	
	$('.lightbox_trigger').click(function(e) {console.log('Hello!');
		//stops loading anything 
		e.preventDefault();
		//get url of image from currently clicked item
		var image_href = $(this).attr("href");
		var description = $(this).data("description");


		// #lightbox already exists. dont make a new one.
		if ($('#lightbox').length > 0) { 
			
			//place href as img src value then display the lightbox
			$('#content').html('<img src="' + image_href + '" /><div id="lightbox_info">'+description+'</div>');
			$('#lightbox').fadeIn('fast');

		}//end if

		//#lightbox does not exist ...so make it
		else { 
			
			//create HTML for lightbox window
			var lightbox = 
			'<div id="lightbox">' + 
				'<a href="#"" id="closelightbox">Click to close</a>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" /><div id="lightbox_info">'+description+'</div>' +
				'</div>' +	
			'</div>';
				
			//insert lightbox HTML into page
			$('body').append(lightbox).fadeIn('fast');
			
			//Click anywhere on the page to get rid of lightbox window
			$('#lightbox').click(function(e) {
				e.stopPropagation();
				console.log("It worked");
			    $('#lightbox').fadeOut('fast');
				});
		}
		
	});
	

	
	

});
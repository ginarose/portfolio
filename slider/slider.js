(function($) {
 var sliderUL = $('div.slider').css('overflow', 'hidden').children('ul'),
 		imgs = sliderUL.find('img'),
 		imgWidth = imgs[0].width,
 		imgsLength = imgs.length,
 		current = 1,
 		totalImgsWidth = imgsLength * imgWidth;

 $('#slider-nav').show().find('button').on('click', function() {


	//if directional button is clicked
 	var direction = $(this).data('dir'),
 		loc = imgWidth;

 	(direction === 'next') ? ++current : --current;



 		//if on the first image
 		if (current === 0)
 		{
 			current = imgsLength;
 			loc = totalImgsWidth - imgWidth;
 			direction = 'next';	
 		}
 		//resets the slideshow if at the end
 		else if (current - 1 === imgsLength){
 			current = 1;
 			loc = 0;
 			console.log('itworkssss');

 		}


 		transition(sliderUL, loc, direction);

 	});

 	function transition(container, loc, direction){
 		var unit;

 		if (direction && loc !== 0){
 			unit = (direction === 'next') ? '-=' : '+=';
 		}
 			container.animate({
 				'margin-left': unit ? (unit + loc) : loc
 			});
 	}

})

(jQuery);
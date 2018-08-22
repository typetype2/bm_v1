// JavaScript Document
$(document).ready(function(){
	
	//Preload
	$('.marquee_panels img').imgpreload(function(){
		initalizeMarquee()
	});

		//Generate Photo Lineup
	$('img.marquee_panel_photo').each(function(index){
		var photoWidth = $('.marquee_container').width();
		var photoPosition = index * photoWidth;
		$('.marquee_photos').append('<img class="marquee_photo" style="left:'+photoPosition+'" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="'+photoWidth+'" height="315" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);		
	});
	
	//Generate Text Lineup
	$('.marquee_panel_caption').each(function(index){
		var captionWidth = $('.marquee_nav_text').width();
		var captionPosition = index * captionWidth;
		$('.marquee_caption').append('class="text" style="left:'+captionPosition+'" width="'+captionWidth+'" height="315"');
		$('.marquee_caption').css('width', captionPosition+captionWidth);		
	});
	
	// Generate Navigation Links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item"></a>');
		});
	
	//Set up Navigation Links
	$('.marquee_nav a.marquee_nav_item').click(function(){
		$('.marquee_nav a.marquee_nav_item').removeClass('selected');
		$(this).addClass('selected');
		
		var navClicked = $(this).index();
		var marqueeWidth = $('.marquee_container').width();
		var distanceToMove = marqueeWidth * (-1);
		var newPhotoPosition = navClicked * distanceToMove + 'px';
		var newCaption = $('.marquee_panel_caption').get(navClicked);
		
		$('.marquee_photos').animate({left: newPhotoPosition}, 1500);
		$('.marquee_caption').animate({left: '355px'}, 750, function(){
			var newHTML = $(newCaption).html();
			$('.marquee_caption').html(newHTML);
			setCaption();
		});
		
	});
	
	
	
});//end of document ready

function setCaption(){
	$('.marquee_caption').delay(100).animate({left: 0}, 750);

}

function initalizeMarquee(){
	$('.marquee_caption').html(
		$('.marquee_panels .marquee_panel:first .marquee_panel_caption').html()
	);
	$('.marquee_nav a.marquee_nav_item:first').addClass('selected');
	$('.marquee_photos').fadeIn(1500);
	setCaption();
}

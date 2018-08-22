// JavaScript Document

$(document).ready(function(){
    
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
		
		$('.marquee_photos').animate({left: newPhotoPosition}, 1000);
		$('.marquee_nav_text').animate({left: '924px'}, 500, function(){
			var newHTML = $(newCaption).html();
			$('.marquee_caption').html(newHTML);
			setCaption();
		});
		
	});
	
	
	
});//end of document ready

function setCaption(){
	var captionWidth = $('.marquee_caption').width();
	var marqueeWidth = $('.marquee_nav_text').width();
	var newCaptionWidth = marqueeWidth - captionWidth + 30;
	$('.marquee_caption').delay(100).animate({left: newCaptionWidth}, 500);

}
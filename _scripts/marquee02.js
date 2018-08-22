// JavaScript Document

var currentPanel = 1;
var totalPanels = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 3;

function autoAdvance(){
	alert('set interval ran');
}

$(document).ready(function(){
	
	/* debug */$('.autoPlay').html('autoPlay = '+window.autoPlay);
	/* debug */$('.timePassed').html('timePassed = '+window.timePassed);
	/* debug */$('.timeToChange').html('timeToChange = '+window.timeToChange);
	/* debug */$('.currentPanel').html('currentPanel = '+window.currentPanel);
	
	setinterval(autoAdvance, 1000);

	
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

	// Generate Navigation Links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item"></a>');
		window.totalPanels = index +1;
		/* debug */$('.totalPanels').html('totalPanels = '+window.totalPanels);	
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
		window.currentPanel = navClicked + 1;
		/* debug */$('.currentPanel').html('currentPanel = '+window.currentPanel);
		
		$('.marquee_photos').animate({left: newPhotoPosition}, 1000);
		$('.marquee_caption').animate({left: '924px'}, 500, function(){
			var newHTML = $(newCaption).html();
			$('.marquee_caption').html(newHTML);
			setCaption();
		});
		
	});

});


function setCaption(){
	var captionWidth = $('.marquee_caption').width();
	var marqueeWidth = $('.marquee_container').width();
	var newCaptionWidth = marqueeWidth - captionWidth + 30;
	$('.marquee_caption').delay(100).animate({left: newCaptionWidth}, 500);

}

function initalizeMarquee(){
	$('.marquee_caption_content').html(
		$('.marquee_panels .marquee_panel:first .marquee_panel_caption').html()
	);
	$('.marquee_nav a.marquee_nav_item:first').addClass('selected');
	$('.marquee_photos').fadeIn(1500);
	setCaption();
}

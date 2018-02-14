// JavaScript Document
$(document).ready(function() {

	// ShowHide function for Expanding/Collapsing DIVS
	$('.show_hide').showHide({
		speed: 500, // speed you want the toggle to happen
		easing: '', // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 0, // if you dont want the button text to change, set this to 0
		showImage: './images/DownArrow.png',// the button text to show when a div is closed
		hideImage: './images/RightArrow.png', // the button text to show when a div is open
		showText: 'Learn More',
		hideText: 'Close'
	}); // End .showHide()

});



// JavaScript Document
/*
 * jQuery replaceText - v1.1 - 11/21/2009
 * http://benalman.com/projects/jquery-replacetext-plugin/
 * 
 * Copyright (c) 2009 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */


function pageroll_callback(carousel){
	$('.jcarousel-control a').bind('click', function() {
				id = $.jcarousel.intval($(this).attr('id').replace('button-', ''));
				carousel.scroll(id);
				return false;
    });	
	
		// Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
	
}

function pageroll_set_active(a,b,c,d){
		$('.jcarousel-control a').removeClass('active');
		$('#button-'+c).addClass('active');
}

Drupal.behaviors.balanceRollButtons = function(context) {
	$('.jcarousel-control a span').each(function(){
		var toppad = Math.floor((($(this).parent('a').height()) - $(this).height()) / 2);
		$(this).css('padding-top',toppad);
	});
}
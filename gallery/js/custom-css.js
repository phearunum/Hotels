/*
@Author: Sokha Hotel & Resort's Developer Team
	@Date: 2012-01-14
	@Store all custom javascript functions
*/
$(function(){
	$('.newsletter-signup').live('click',function(e){
		e.stopImmediatePropagation();
	});
	$(document).click(function(){
		if(typeof($('.newsletter-signup-overlay')) != 'undefined'){
			$('.newsletter').parent().removeClass('active');
			$('.newsletter-signup-overlay').remove();
		}
	});
	});
$(document).ready(function(){	
	/* slideshow */
	$.fx.speeds._default = 800;
	$(function() {
		  $.fn.superbgimage.options = {randomimage:0,onShow:superbgimage_show};
		  $('#thumbs').superbgimage();
	});
	/* function callback on showing image: get title and display it */
	function superbgimage_show(img) {
		$('#showtitle p.title').html($('#thumbs a' + "[rel='" + img + "']").attr('title'));
		$('#showtitle').fadeIn('fast');
	}	
	
});
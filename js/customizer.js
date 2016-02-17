jQuery(document).ready(function() {
/*
	var sidebarheight = jQuery("#main").height();
	var masterslider = jQuery('.master-slider-parent').height();
	if (jQuery('.master-slider-parent').length) sidebarheight = sidebarheight + masterslider;
	jQuery('#nav_menu-2').css({'height': sidebarheight+'px'});
	jQuery('.widget').css({'height':sidebarheight+'px'}); 
*/
	
	jQuery('#menu-startmenu li').hover(function () {
		jQuery(this).find('ul').css({'position':'relative'});
		jQuery(this).find('ul').css({'display':'block'});
	}, function () {
		if (jQuery(this).hasClass('current_page_parent')) {
			;
		} else {
			jQuery(this).find('ul').css({'display':'none'});
			jQuery(this).find('ul').css({'position':'absolute'});
		}
	});
	
});

jQuery(window).load(function() {
	var sidebarheight = jQuery("#main").height();
	var masterslider = jQuery('.master-slider-parent').height();
	jQuery('#nav_menu-2').css({'height': sidebarheight+'px'});
	jQuery('.widget').css({'height':sidebarheight+'px'}); 
});
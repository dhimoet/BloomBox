$(document).ready(function() {
	/*** expand page height to the size of window ***/
	$('#real_body').height($(document).height());
	
	/*** make sure the active menu loads on page load ***/
	$('.active_menu').fadeIn().css('top', $('.active').offset().top);
	
	/*** search bar placeholder handler ***/
	var default_value = $('input.search_box').val();
	$('input.search_box').focus(function() {
		if($(this).val()) {
			if($(this).val() == default_value) {
				$(this).val('');
			}
		}
		$(this).blur(function() {
			if(!$(this).val()) {
				$(this).val(default_value);
			}
		});
	});
	
	/*** side navigation handler ***/
	$('.nav_menu a').click(function() {
		$('.nav_menu').removeClass('active');
		$('.active_menu').show().css('top', $(this).parent().offset().top);
		$(this).parent().addClass('active');
	});
	
	/*** mini / bottom navigation handler ***/
	$('.layer_5 > div').click(function() {
		var rel = $(this).attr('rel');
		$('.mini_nav').addClass('inactive');
		$('.mini_nav:contains("' + rel + '")').removeClass('inactive');
		
	});
});

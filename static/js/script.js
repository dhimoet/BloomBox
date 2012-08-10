$(document).ready(function() {
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
	$('.nav_menu').click(function() {
		$('.nav_menu').removeClass('active');
		$('.active_menu').show().css('top', $(this).offset().top);
		$(this).addClass('active');
	});
});

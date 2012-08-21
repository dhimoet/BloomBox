$(document).ready(function() {
	/*** expand page height to the size of window ***/
	$('#real_body').height($(document).height());
	
	/*** follow on window resize ***/
	$(window).resize(function() {
		$('.active_menu').animate({
			left: $('.active').offset().left,
		}, 0);
	});
	
	/*** search bar placeholder handler ***/
	var default_value = $('.search_box > input').val();
	$('.search_box > input').focus(function() {
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
});

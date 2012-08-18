$(document).ready(function() {
	/*** expand page height to the size of window ***/
	$('#real_body').height($(document).height());
	
	/*** make sure the active menu loads on page load ***/
	var location;
	if(window.location.hash) {
		location = window.location.hash;
	}
	else {
		location = "#welcome";
	}
	$('.nav_menu').find('a[href="'+location+'"]').parent().addClass('active');
	$('.active_menu').fadeIn().css('top', $('.active').offset().top);
	$('.active_menu').css('left', $('.active').offset().left);
	$('.frame_nav_menu').find('a[href="'+ location +'"]').parent().removeClass('inactive');
	
	
	/*** load the specified-by-hash page ***/
	$(location).fadeIn();
	
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
	
	/*** side navigation handler ***/
	$('.nav_menu a').click(function() {
		// side nav
		$('.nav_menu').removeClass('active');
		$('.active_menu').show().css('top', $(this).parent().offset().top);
		$(this).parent().addClass('active');
		// frame nav
		$('.frame_nav_menu').addClass('inactive');
		$('.frame_nav_menu').find('a[href="'+ $(this).parent().find('a').attr("href") +'"]').parent().removeClass('inactive');
		// toggle content
		toggle_frame_content($(this).parent().find('a').attr("href"));
	});
	
	/*** frame / bottom navigation handler ***/
	$('.frame_nav_menu').click(function() {
		// frame nav
		$('.frame_nav_menu').addClass('inactive');
		$(this).removeClass('inactive');
		// side nav
		$('.nav_menu').removeClass('active');
		$('.active_menu').show().css('top', $('.nav_menu').find('a[href="'+ $(this).find('a').attr("href") +'"]').parent().offset().top);
		$('.nav_menu').find('a[href="'+ $(this).find('a').attr("href") +'"]').parent().addClass('active');
		// toggle content
		toggle_frame_content($(this).find('a').attr("href"));
	});
});

function toggle_frame_content(that)
{
	var location = window.location.hash;
	if(window.location.hash) {
		location = window.location.hash;
	}
	else {
		location = "#welcome";
	}
	$(location).fadeOut(600);
	$(that).fadeIn(600);
}

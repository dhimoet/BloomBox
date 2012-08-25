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
	
	/*** load up slide show ***/
	$('.current_slide').fadeIn(1000, function() {
		$('.next_slide').fadeIn(1000, function() {
			$('.previous_slide').fadeIn(1000);
		});
	});
	
	/*** run slide show ***/
	var previous = 4;
	var current = 1;
	var next = 2;
	
	run_slideshow(previous, current, next);

	function run_slideshow(previous, current, next) {
		if(previous < 4) {
			previous++;
		}
		else {
			previous = 1;
		}
		if(current < 4) {
			current++;
		}
		else {
			current = 1;
		}
		if(next < 4) {
			next++;
		}
		else {
			next = 1;
		}
		setTimeout(function() {
			$('.previous_slide').fadeOut(1000, function() {
				$('.previous_slide > img').attr('src', '/public/img/covers/cover_page_'+ previous +'.png');
				$('.previous_slide').fadeIn(1000);
				$('.current_slide').fadeOut(1000, function() {
					$('.current_slide > img').attr('src', '/public/img/covers/cover_page_'+ current +'.png');
					$('.current_slide').fadeIn(1000);
					$('.next_slide').fadeOut(1000, function() {
						$('.next_slide > img').attr('src', '/public/img/covers/cover_page_'+ next +'.png');
						$('.next_slide').fadeIn(1000);
						run_slideshow(previous, current, next);
					});
				});
			});
		}, 6000);
	}
});

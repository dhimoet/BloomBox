<script>
	var AppRouter = Backbone.Router.extend({
        routes: {
            "*method": "loadPage",
        },
        loadPage: function(method) {
        	if(method == '') {
        		method = 'welcome';
        	}
        	// side nav
        	$('.frame_content').fadeOut();
        	$('.nav_menu').removeClass('active');
			$('a[href="#/'+ method +'"]').parent().addClass('active');
			$('.active_menu').css('top', $('a[href="#/'+ method +'"]').parent().offset().top).fadeIn();
			$('.active_menu').css('left', $('.active').offset().left);
			$('#'+ method).fadeIn();
			// frame nav
			$('.frame_nav_menu').addClass('inactive');
			$('a[href="#/'+ method +'"]').parent().removeClass('inactive');
        },
    });
    // Instantiate the router
    var app_router = new AppRouter;
    // Start Backbone history a neccesary step for bookmarkable URL's
    Backbone.history.start();
</script>

<?php
	// load the MVC structure
	$this->load->view('backbone/routers');
	$this->load->view('backbone/models');
	$this->load->view('backbone/collections');
	$this->load->view('backbone/views');
?>

<script>
	// Instantiate the router
    var app_router = new AppRouter;
    // Start Backbone history a neccesary step for bookmarkable URL's
    Backbone.history.start();
</script>
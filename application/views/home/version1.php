<div id="real_body1">
	
	<div id="header1">
		<div id="header_logo">
			<a href="/"><img src="/public/img/site/logo.png" /></a>
		</div>
		<div id="search_bar">
			<div class="search_box">
				<input type="text" name="search" class="search_box" value="Search" />
			</div>
			<div class="search_button">
				<input type="image" src="/public/img/site/search_button.png" class="search_button" />
			</div>
		</div>
	</div>
	
	<div class="side_nav">
		
		<div class="nav_menu <?=($this->router->fetch_class()=='home')?'active':'';?>">
			<a href="/home/"><span class="first_word">WELCOME</span><span class="second_word"></span></a>
		</div>
		
		<div class="nav_menu <?=($this->router->fetch_class()=='blog')?'active':'';?>">
			 <a href="/blog/"><span class="first_word">our </span><span class="second_word">BLOG</span></a>
		</div>
		
		<div class="nav_menu <?=($this->router->fetch_class()=='about')?'active':'';?>">
			<a href="/about/"><span class="first_word">about </span><span class="second_word">US</span></a>
		</div>
		
		<div class="nav_menu <?=($this->router->fetch_class()=='team')?'active':'';?>">
			<a href="/team/"><span class="first_word">the </span><span class="second_word">TEAM</span></a>
		</div>
		
		<div class="nav_menu <?=($this->router->fetch_class()=='contact')?'active':'';?>">
			<a href="/contact/"><span class="first_word">contact </span><span class="second_word">US</span></a>
		</div>
		
		<div class="active_menu">
			<img src="/public/img/site/side_nav_menu_active.png" />
		</div>
		
	</div>
	
	<div class="social_networks">
		
		<div>
			<img src="/public/img/site/share_friends.png" />
		</div>
		
		<div class="social_logos">
			<img src="/public/img/site/facebook.png" />
			<img src="/public/img/site/flickr.png" />
			<img src="/public/img/site/twitter.png" />
		</div>
		
	</div>
	
	<div id="content">
		
		<div class="layer_1">
			<img src="/public/img/covers/home.png" />
		</div>
		
		<div class="layer_2">
			<img src="/public/img/covers/frame.png" />
		</div>
		
	</div>
	
</div>
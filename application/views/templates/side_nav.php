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
	<?$this->load->view('templates/header')?>
	
	<div class="body max_width">
		
		<?$this->load->view('templates/side_bar')?>
		
		<div class="content">
			
			<div class="cover_image">
				<img src="/public/img/covers/cover_frame.png" />
				
				<?$this->load->view('home/welcome');?>
				
				<?$this->load->view('home/about');?>
				
				<?$this->load->view('home/team');?>
				
				<?$this->load->view('home/contact');?>
				
				<div class="frame_nav">
					<div class="frame_nav_menu inactive">
						<a href="#/welcome">WELCOME</a>
					</div>
					
					<div class="frame_nav_menu inactive">
						<a href="http://blog.bloomboxphoto.com/">OUR BLOG</a>
					</div>
					
					<div class="frame_nav_menu inactive">
						<a href="#/about">ABOUT US</a>
					</div>
					
					<div class="frame_nav_menu inactive">
						<a href="#/team">THE TEAM</a>
					</div>
					
					<div class="frame_nav_menu inactive">
						<a href="#/contact">CONTACT US</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
			$('#contact_us').validationEngine('attach', {promptPosition : "bottomLeft", scroll: true});
		});
	</script>

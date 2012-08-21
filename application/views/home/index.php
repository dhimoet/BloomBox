	<?$this->load->view('templates/header')?>
	
	<div class="body max_width">
		
		<?$this->load->view('templates/side_bar')?>
		
		<div class="content">
			
			<div class="cover_image">
				<img src="/public/img/covers/cover_frame.png" />
				
				<div class="frame_content" id="welcome">
					
				</div>
				
				<div class="frame_content" id="about">
					
				</div>
				
				<div class="frame_content" id="team">
					
				</div>
				
				<div class="frame_content" id="contact">
					<form name="contact_us" id="contact_us" method="post" action="/email/contact_us" class="container_50">
						<div class="float_50">
							<div class="input_field">
								<label>Name:</label>
								<input type="text" name="contact[name]" class="validate[required]" />
							</div>
							<div class="input_field">
								<label>Email:</label>
								<input type="text" name="contact[email]" class="validate[required]" />
							</div>
							<div class="input_field">
								<label>Telephone:</label>
								<input type="text" name="contact[phone]" />
							</div>
						</div>
						<div class="float_50">
							<div class="input_field">
								<label>Website:</label>
								<input type="text" name="contact[website]" />
							</div>
							<div class="input_field">
								<label>Message:</label>
								<textarea name="contact[message]" class="validate[required]"></textarea>
							</div>
						</div>
						<div class="float_100">
							<input type="image" src="/public/img/site/submit_button.png"/>
						</div>
					</form>
					
				</div>
				
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

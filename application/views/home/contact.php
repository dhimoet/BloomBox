<div class="frame_content" id="contact">
					<form name="contact_us" id="contact_us" method="post" action="/email/contact_us" class="container_50">
						<div class="float_50">
							<div class="input_field">
								<label>Name:</label>
								<input type="text" name="contact[name]" class="validate[required]" />
							</div>
							<div class="input_field">
								<label>Email:</label>
								<input type="text" name="contact[email]" class="validate[required,custom[email]]" />
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

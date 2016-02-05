<div id="form_inquire" style="display: none;" class="parent_option">
	<!-- Radio 4 Content -->
	<div class="header">
		<h3>Inquire About Vnoc.Com</h3>
		<p>Enter a correct email, your email and offer inquiry will be deemed private but you will receive a response from the domain owner as soon as we receive your inquiry.</p>
	</div>
	<div class="inquire-step1 _options" id="inquiry_step1">
		<h4>Step 1: Submit Your Inquiry</h4>
		<span>If you have questions, feel free to contact us.</span>
		<h4>Step 2: We'll Contact You Shortly</h4>
		<span>You will receive an email addressing your concern.</span>
		<div >
			<label>Email</label>
			<input id="inquiry_initialemail" type="text" placeholder="Enter e-mail address" class="form-control">
			<input type="hidden" id="inquiry_domain" value="<?=$domain?>">
			 <span class="pull-left text-error" id="inquiry_warning1"></span>
			<button type="button" class="btn btn-primary btn-sm _back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
			<button id="inquiry_btn_1" data-loading-text="Processing..." data-target=".inquire-step2" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
		</div>	
	</div>
	<div id="inquiry_step2" class="inquire-step2 stepbox _options" style="display:none">
		<div class="row">
			<div class="col-xs-6">
				<label>Firstname*</label>
				<input id="inquiry_firstname" name="inquiry_firstname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Lastname*</label>
				<input id="inquiry_lastname" name="inquiry_lastname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Email*</label>
				<input id="inquiry_email" name="inquiry_email" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Contact Number*</label>
				<input id="inquiry_contact" name="inquiry_contact" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
			<label>Country*</label>
				<select id="inquiry_country" name="inquiry_country" class="form-control">
					<?php include 'country.php'?>
				</select>
			</div>
			<div class="col-xs-6">
				<label>City*</label>
				<input id="inquiry_city" name="inquiry_city" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Password*</label>
			<input id="inquiry_password" name="inquiry_password" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Confirm Password*</label>
				<input id="inquiry_password2" name="inquiry_password2" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-12">
				<label>Message*</label>
				<textarea id="inquiry_message" name="inquiry_message" rows="3" class="form-control" placeholder=""> </textarea>
			</div>
			<div class="col-xs-12 text-center">
				<div class="requiredFieldError" id="inquiry_warning2"></div>
				<button data-target=".inquire-step1" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
				<button id="inquiry_btn_2" data-loading-text="Processing..." data-target=".inquire-step-final" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
			</div>
		</div>							
	</div>
	<div id="inquiry_final" class="inquire-step-final stepbox _options"  style="display:none">
		<div class="row">
			<h4>Thank you for your contacting us.</h4>
			<p><b>Step 3:</b> You are now minutes away to joining Vnoc.com team. All you need to do right now is click the link in the Verification email that we have just sent you. If you still haven't received it, please check your spam inbox. Your verification link will redirect you to our <a href="https://www.contrib.com" target="_blank">Marketplace hub</a> where you can login and check out your application status.</p>
			<p><b>Step 4:</b> You can now take part in actually building out an asset by sending proposals, partnering with brands, joining teams.</p>
			<h4 >Thank You!</h4>
		</div>
		<div id="viewcontriblink4" style="text-align: center;">
			<a target="_parent" href="https://www.contrib.com/account/autologinforms?email=YW5kcmVAZ21haWwuY29t">
				<button class="btn btn-primary btn-lg">
					View your Contrib.com account now!
				</button>
			</a>
		</div>
	</div>	
	<!-- End Radio 4 Content -->
</div>
<script src="https://www.vnoc.com/js/forms/inquiry.js"></script>
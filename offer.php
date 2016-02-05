<div id="form_offer" style="display: none;" class="parent_option">
	<!-- Radio 3 Content -->
	<div class="header">
		<h3>Submit An Offer for Vnoc.com</h3>
		<p>Enter a correct email, your email and offer inquiry will be deemed private but you will receive a response from the domain owner as soon as we receive your inquiry.</p>
	</div>
	<div id="offer_step1" class="offer-step1 _options">
		<h4>Step 1: Submit Your Offer</h4>
		<span>Interested in our domain? Send an offer now.</span>
		<h4>Step 2: We'll Contact You Shortly</h4>
		<span>You will receive an email addressing your offer.</span>
		<div >
			<label>Email</label>
			<input id="offer_initialemail" type="text" placeholder="Enter e-mail address" class="form-control">
			<span class="pull-left text-error" id="offer_warning1"></span>
			<button type="button" class="btn btn-primary btn-sm _back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
			<button id="offer_btn_1" data-loading-text="Processing..." data-target=".offer-step2" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
		</div>	
	</div>
	<div id="offer_step2" class="offer-step2 stepbox _options" style="display:none">
		<div class="row">
			<div class="col-xs-6">
				<label>Firstname*</label>
				<input id="offer_firstname" name="offer_firstname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Lastname*</label>
				<input id="offer_lastname" name="offer_lastname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Email*</label>
				<input id="offer_email" name="offer_email" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Contact Number*</label>
				<input id="offer_contact" name="offer_contact" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
			<label>Country*</label>
				<select id="offer_country" name="offer_country" class="form-control">
					<?php include 'country.php'?>
				</select>
			</div>
			<div class="col-xs-6">
				<label>City*</label>
				<input id="offer_city" name="offer_city" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Password*</label>
			<input id="offer_password" name="offer_password" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Confirm Password*</label>
				<input id="offer_password2" name="offer_password2" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-12 text-center">
				<div class="requiredFieldError" id="offer_warning2"></div>
				<button data-target=".offer-step1" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
				<button id="offer_btn_2" data-loading-text="Processing..." data-target=".offer-step3" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
			</div>
		</div>							
	</div>
	<div id="offer_step3" class="offer-step3 stepbox _options"  style="display:none">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12">
					<label>Sponsor/Bid Price($) *</label>
					<div class="input-group">
					  <div class="input-group-addon">$</div>
					  <input type="text" class="form-control" id="offer_price" placeholder="Amount">
					  <div class="input-group-addon">.00</div>
					</div>
				</div>
				<div class="col-xs-12">
					<label>Message*</label>
					<textarea id="offer_message" class="form-control" rows="3"></textarea>
				</div>
				<div class="col-xs-12 text-center" style="margin-top:15px;">
					<div class="requiredFieldError" id="offer_warning3" style="margin: 0 0 15px;"></div>
					<button data-target=".offer-step2" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
					<button id="offer_btn_3" data-loading-text="Processing..." data-target=".offer-step-final" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
					<input type="hidden" id="offer_domain" value="<?=$domain?>">
				</div>
			</div>
		</div>
	</div>
	<div id="offer_final" class="offer-step-final stepbox _options"  style="display:none">
		<div class="row">
			<h4>Thank you for your contacting us.</h4>
			<p><b>Step 3:</b> You are now minutes away to joining Vnoc.com team. All you need to do right now is click the link in the Verification email that we have just sent you. If you still haven't received it, please check your spam inbox. Your verification link will redirect you to our <a href="http://www.contrib.com" target="_blank">Marketplace hub</a> where you can login and check out your application status.</p>
			<p><b>Step 4:</b> You can now take part in actually building out an asset by sending proposals, partnering with brands, joining teams.</p>
			<div id="viewcontriblink3" style="text-align: center;">Thank You!</div>
		</div>
	</div>	
	<!-- End Radio 3 Content -->
</div>
<script src="https://www.vnoc.com/js/forms/offer.js"></script>
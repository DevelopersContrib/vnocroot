<?php

?>
<div id="form_partner" style="display: none;" class="parent_option">
<!-- Radio 1 Content -->
<div class="header">
	<h3>Partner with Vnoc.com</h3>
	<p>When you submit your registration, you can quickly partner with Vnoc.com. This is a great way to build your service and at the same way add value to this asset.</p>
</div>
<div id="partner_step1" class="partner-step1 _options">
	<h4>Step 1: Submit Your Partnership Application</h4>
	<span>You will receive an email when we feel our partnership will be win-win.</span>
	<h4>Step 2: Join a Team</h4>
	<span>Once your partnership proposal is something we could take on, we will make you part of our team and our partner.</span>
	
	<div >
		<label>Email</label>
		<input id="partner_initialemail" type="text" placeholder="Enter e-mail address" class="form-control">
		<span class="pull-left text-error" id="partner_warning1" style="font-size: 12px !important"></span>		
		<button type="button" class="btn btn-primary btn-sm _back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
		<button id="partner_btn_1"  data-loading-text="Processing..." data-target=".partner-step2" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
	</div>	
</div>
<div id="partner_step2" class="partner-step2 stepbox _options" style="display:none">
	<div class="row">
		<div class="col-xs-6">
			<label>Firstname*</label>
			<input id="partner_firstname" name="partner_firstname" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
			<label>Lastname*</label>
			<input id="partner_lastname" name="partner_lastname" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
			<label>Email*</label>
			<input id="partner_email" name="partner_email" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
			<label>Website</label>
			<input id="partner_website" name="partner_website" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
		<label>Country*</label>
			<select id="partner_country" name="partner_country" class="form-control">
				<?php include 'country.php'?>
			</select>
		</div>
		<div class="col-xs-6">
			<label>City*</label>
			<input id="partner_city" name="partner_city" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
			<label>Password*</label>
		<input id="partner_password" name="partner_password" type="password" class="form-control" placeholder="">
		</div>
		<div class="col-xs-6">
			<label>Confirm Password*</label>
			<input id="partner_password2" name="partner_password2" type="password" class="form-control" placeholder="">
		</div>
		<div class="col-xs-12 text-center">
			<div class="requiredFieldError" id="partner_warning2" style="margin-top: 0;"></div>
			<button data-target=".partner-step1" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
			<button id="partner_btn_2" data-loading-text="Processing..."  data-target=".partner-step3" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
		</div>
	</div>							
</div>
<div id="partner_step3" class="partner-step3 stepbox _options"  style="display:none">
	<div class="row">
		<div class="col-xs-12">
		<label>Partnership Type*</label>
			<select id="partner_type" name="partner_type" class="form-control">
				<option value=""></option>
						<?php foreach ($parnershiptypes as $type){ ?>
				<option value="<?php echo $type;?>"><?php echo $type;?></option>
						<?php } ?>
			</select>
		</div>
		<div class="col-xs-12" id="input-exchange-link" style="display:none">
			<label>Link where we can find our widget </label>
			<input id="partner_exchange_link" class="form-control" type="text" />
		</div>
		<div class="col-xs-12">
			<label>Why We Should Partner With You</label>
			<textarea id="partner_message" class="form-control" rows="3"></textarea>
		</div>
		<div class="col-xs-12 text-center" style="margin-top:15px;">
			<div class="requiredFieldError" id="partner_warning3"></div>		
			<button data-target=".partner-step2" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
			<button id="partner_btn_3" data-target=".partner-step4" data-loading-text="Processing..." type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
		</div>
	</div>
</div>
<div id="partner_step4" class="partner-step4 stepbox _options"  style="display:none">
	<div class="row">
		<div class="col-xs-12">
			<label>Company Title*</label>
			<input id="partner_company" name="partner_company" type="text" class="form-control" placeholder="title/name of your company to promote.">
		</div>
		<div class="col-xs-12">
			<label>Company Description</label>
			<textarea id="partner_companydescription" name="partner_companydescription" class="form-control" rows="3" placeholder="a short summary of your company."></textarea>
		</div>
		<div class="col-xs-12">
			<label>Company Image</label>
			<input id="partner_companyimage" name="partner_companyimage" type="text" class="form-control" placeholder="">
		</div>
		<div class="col-xs-12">
			<label>Company Link*</label>
			<input id="partner_companyurl" name="partner_companyurl" type="text" class="form-control" placeholder="allows us to promote your company">
		</div>
		<div class="col-xs-12 text-center" style="margin-top:15px;">
			<div class="requiredFieldError" id="partner_warning4" style="font-size: 11px;font-weight:bold"></div>							
			<button data-target=".partner-step3" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>&nbsp;&nbsp;&nbsp;
			<button id="partner_btn_4" data-loading-text="Processing..." data-target=".partner-step-final" data-loading-text="Processing..." type="button" class="btn btn-primary btn-sm  _final" style="margin-top:15px;">Apply Today&nbsp;<i class="fa fa-chevron-right"></i></button>
			<input type="hidden" id="partner_domain" value="<?=$domain?>">
		</div>
	</div>
</div>
<div class="partner-step-final stepbox _options" id="partner_final" style="display:none">
	<div class="row">
		<h4>Thank you for your Partnership application.</h4>
		<div id="login_redirect" style="margin: 20px 0 5px 0;"></div>
		<p><b>Step 3:</b> You are now minutes away to joining Vnoc.com team. All you need to do right now is click the link in the Verification email that we have just sent you. If you still haven't received it, please check your spam inbox. Your verification link will redirect you to our <a href="http://www.contrib.com" target="_blank">Marketplace hub</a> where you can login and check out your application status.</p>
		<p><b>Step 4:</b> You can now take part in actually building out an asset by sending proposals, partnering with brands, joining teams.</p>
		<div id="viewcontriblink1" style="text-align: center;">Thank You!</div>
	</div>
</div>
<!-- End Radio 1 Content -->
</div>
<script src="https://www.vnoc.com/js/forms/partner.js"></script>
<div id="form_staffing" style="display: none;" class="parent_option">
	<!-- Radio 2 Content -->
	<div class="header">
		<h3>Apply Today For Vnoc.Com</h3>
		<p>When you submit your registration, you can quickly join the Vnoc.com. team and take part in micro tasks and be paid in services fees, equity or performance equities.</p>
	</div>
	<div id="staffing_step1" class="staffing-step1 _options">
		<h4>Step 1: Submit an Application</h4>
		<span>You will receive an email when we approve your application.</span>
		<h4>Step 2: Start working on Tasks and Requests</h4>
		<span>Make money by getting equity or pay per performance for tasks rendered and service requests fulfilled.</span>
		<div >
			<label>Email</label>
			<input id="staffing_initialemail" type="text" placeholder="Enter e-mail address" class="form-control">
			<span class="pull-left text-error" id="staffing_warning1"></span>
			<button type="button" class="btn btn-primary btn-sm _back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
			<button id="staffing_btn_1" data-loading-text="Processing..." data-target=".staffing-step2" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
		</div>	
	</div>
	<div id="staffing_step2" class="staffing-step2 stepbox _options" style="display:none">
		<div class="row">
			<div class="col-xs-6">
				<label>Firstname*</label>
				<input id="staffing_firstname" name="staffing_firstname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Lastname*</label>
				<input id="staffing_lastname" name="staffing_lastname" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Email*</label>
				<input id="staffing_email" name="staffing_email" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Website</label>
				<input id="staffing_website" name="staffing_website" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
			<label>Country*</label>
				<select id="staffing_country" name="staffing_country" class="form-control">
					<?php include 'country.php'?>
				</select>
			</div>
			<div class="col-xs-6">
				<label>City*</label>
				<input id="staffing_city" name="staffing_city" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Password*</label>
			<input id="staffing_password" name="staffing_password" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-6">
				<label>Confirm Password*</label>
				<input id="staffing_password2" name="staffing_password2" type="password" class="form-control" placeholder="">
			</div>
			<div class="col-xs-12 text-center">
				<div class="requiredFieldError" id="staffing_warning2"></div>
				<button data-target=".staffing-step1" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
				<button id="staffing_btn_2" data-loading-text="Processing..." data-target=".staffing-step3" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
			</div>
		</div>							
	</div>
	<div id="staffing_step3" class="staffing-step3 stepbox _options"  style="display:none">
		<div class="row">
			<div class="col-xs-12">
			<label>Team Role*</label>
				<select id="staffing_role" name="" class="selectS2 input-block-level">
					<option value=""></option>
					<option value="24">Advisor</option>
					<option value="34">Chief Technology Officer</option>
					<option value="30">Co-founder</option>
					<option value="35">Community Manager</option>
					<option value="7">Content Manager</option>
					<option value="25">Engineer</option>
					<option value="21">Execution Officer</option>
					<option value="14">Graphics UI</option>
					<option value="32">Investor</option>
					<option value="17">Lead Developer</option>
					<option value="15">Marketer</option>
					<option value="23">Mentor</option>
					<option value="12">Partner</option>
					<option value="27">Partner Manager</option>
					<option value="31">Press/Marketing Relations</option>
					<option value="1">Project Manager</option>
					<option value="36">Quality Assurance Officer</option>
					<option value="33">Research Specialist</option>
					<option value="26">Revenue Officer</option>
					<option value="16">Social and Media </option>
					<option value="38">Social Media Monitor</option>
					<option value="37">Social Media Monitor</option>
					<option value="9">Tester</option>
					<option value="28">Venture Leader</option>
					<option value="8">Web Developer</option>
				</select>
			</div>
			<div class="col-xs-12">
				<label>Resume Link*</label>
				<input id="staffing_resumeurl" name="staffing_resumeurl" type="text" class="form-control" placeholder="">
			</div>
			<div class="col-xs-12">
				<label>Why you should join in our team?*</label>
				<textarea id="staffing_message" class="form-control" rows="3"></textarea>
			</div>
			<div class="col-xs-12 text-center" style="margin-top:15px;">
				<div class="requiredFieldError" id="staffing_warning3" style="margin: 0 0 15px;"></div>
				<button data-target=".staffing-step2" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
				<button id="staffing_btn_3" data-loading-text="Processing..." data-target=".staffing-step4" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
			</div>
		</div>
	</div>
	<div id="staffing_step4" class="staffing-step4 stepbox _options"  style="display:none">
		<div class="row">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/facebook.png"></td>
						<td><input id="staffing_facebook" name="staffing_facebook" type="text" class="form-control" placeholder="link to your facebook profile"></td>
						<td><small>optional</small></td>				
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/linkedin.png"></td>
						<td><input id="staffing_linkedin" name="staffing_linkedin" type="text" class="form-control" placeholder="link to your linkedin profile"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/github.png"></td>
						<td><input id="staffing_github" name="staffing_github" type="text" class="form-control" placeholder="link to your github account"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/skype.png"></td>
						<td><input id="staffing_skype" name="staffing_skype" type="text" class="form-control" placeholder="your skype id"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/yahoo.png"></td>
						<td><input id="staffing_yahoo" name="staffing_yahoo" type="text" class="form-control" placeholder="your yahoo id"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/gtalk.png"></td>
						<td><input id="staffing_talk" name="staffing_talk" type="text" class="form-control" placeholder="your gtalk id"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/aol.png"></td>
						<td><input id="staffing_aol" name="staffing_aol" type="text" class="form-control" placeholder="your AOL id"></td>
						<td><small>optional</small></td>
					</tr>
					<tr>
						<td><img src="https://d2qcctj8epnr7y.cloudfront.net/images/icons/windows.png"></td>
						<td><input id="" name="" type="text" class="form-control" placeholder="your windows live id"></td>
						<td><small>optional</small></td>
					</tr>
				</table>
			</div>
			<div class="col-xs-12 text-center" style="margin-top:15px;">
				<div class="requiredFieldError" id="staffing_warning4" style="margin: 0 0 15px;"></div>	
				<button data-target=".staffing-step3" type="button" class="btn btn-primary btn-sm back" style="margin-top:15px;"><i class="fa fa-chevron-left"></i>&nbsp;Back</button>
				<button id="staffing_btn_4" data-loading-text="Processing..." data-target=".staffing-step-final" type="button" class="btn btn-primary btn-sm " style="margin-top:15px;">Next&nbsp;<i class="fa fa-chevron-right"></i></button>
				<input type="hidden" id="staffing_domain" value="<?=$domain?>">
			</div>
		</div>
	</div>
	<div id="staffing_final" class="staffing-step-final stepbox _options"  style="display:none">
		<div class="row">
			<h4>Thank you for your application.</h4>
			<p><b>Step 3:</b> You are now minutes away to joining Vnoc.com team. All you need to do right now is click the link in the Verification email that we have just sent you. If you still haven't received it, please check your spam inbox. Your verification link will redirect you to our <a href="http://www.contrib.com" target="_blank">Marketplace hub</a> where you can login and check out your application status.</p>
			<p><b>Step 4:</b> You can now take part in actually building out an asset by sending proposals, partnering with brands, joining teams.</p>
			<div id="viewcontriblink2" style="text-align: center;">Thank You!</div>
		</div>
	</div>
	<!-- End Radio 2 Content -->
</div>
<script src="https://www.vnoc.com/js/forms/staffing.js"></script>
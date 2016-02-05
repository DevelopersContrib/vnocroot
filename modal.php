<?php
	$domain = 'vnoc.com';
	$parnershiptypes = array('Sponsorship Marketing Partnerships','Distribution Marketing Partnerships','Affiliate Marketing Partnerships','Added Value Marketing Partnerships');
?>
<style>
.requiredFieldError{
	color:red;
}
._options .btn{
	 background: #47a447 none repeat scroll 0 0 !important;
 }
</style>
<!-- Modal 2 -->
<div class="modal fade newmodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
		</div>
		<div class="modal-body text-center">
			<div class="thumbnail">
				<div id="form_option" class="form">
					<h3>Hello from Vnoc.com!</h3>
					<p>Please choose any of the options that interest you.</p>
					<h4>I'M INTERESTED IN : </h4>
					<div class="radio">
					  <label>
						<input autocomplete="off" type="radio" name="service" id="optionsRadios1" value="partner">
						Partner / Develop with Vnoc.com
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input autocomplete="off" type="radio" name="service" id="optionsRadios2" value="staffing">
						Staffing Opportunities with Vnoc.com
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input autocomplete="off" type="radio" name="service" id="optionsRadios3" value="offer">
						Submitting an Offer for Vnoc.com
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input autocomplete="off" type="radio" name="service" id="optionsRadios4" value="inquire">
						Inquire / Sponsor with Vnoc.com
					  </label>
					</div>
				</div>
				<!-- End Selections -->
				
				<!-- Partner Container -->
				<div class="partner-container">
					<?php
						include 'partner.php';
						include 'staffing.php';
						include 'offer.php';
						include 'inquire.php';
					?>
				</div>
				<!-- End Partner Container-->
			</div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-danger btn-ic2" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/index.js"></script>
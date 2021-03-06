$(function(){
	
	$('#offer_initialemail').focus();
	
	$('#offer_btn_1').click(function(){
            var initial_email = $('#offer_initialemail').val();
			var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			$('#offer_warning1').html('');
			
            if (initial_email == ""){
                $('#offer_warning1').html('* Please enter email*');
                $('#offer_initialemail').focus();
			}else if(!emailfilter.test(initial_email)){
                $('#offer_warning1').html('* Invalid Email *');
                $('#offer_initialemail').focus();
            }else {
				//$("#offer_btn_1").attr('disabled', true); 
				var $btn = $(this).button('loading');
                $.post('http://www.contrib.com/forms/fullcontactdetails',
                       {initial_email:initial_email}
                       ,function(data){
						   $btn.button('reset');
                           $('#offer_firstname').val(data.fname);
                           $('#offer_lastname').val(data.lname);
                           $('#offer_email').val(initial_email);
                           $('#offer_step1').hide();
                           $('#offer_step2').show();
                       }
				);
            }		
	});
	     
	$('#offer_btn_2').click(function(){ 		 	
			var firstname = $('#offer_firstname').val();	
            var lastname = $('#offer_lastname').val();	
            var email = $('#offer_email').val();		
            var country_id = $('#offer_country').val();	
            var country = $("#offer_country option:selected").text();
            var city = $('#offer_city').val();	
            var password = $('#offer_password').val();	
            var password2 = $('#offer_password2').val();	            
			var contact = $('#offer_contact').val();
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            			
            $('#offer_warning2').html('');
			
			if(firstname==''){				
                $('#offer_firstname').focus();
				$('#offer_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){				
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){				
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){				
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){				
                $('#offer_lastname').focus();
				$('#offer_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){				
                $('#offer_lastname').focus();
                $('#offer_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){				
                $('#offer_lastname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){					
                $('#offer_lastname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){				
                $('#offer_email').focus();
				$('#offer_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){				
                $('#offer_email').focus();
                $('#offer_warning2').html('* Invalid email *');                
            }else if(contact==''){				
                $('#offer_contact').focus();
				$('#offer_warning2').html('* Contact name is required *');                
            }else if(country_id==''){				
                $('#offer_country').focus();
				$('#offer_warning2').html('* Country is required *');                
            }else if(city==''){				
                $('#offer_city').focus();
				$('#offer_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){				
                $('#offer_city').focus();
                $('#offer_warning2').html('* Alphanumeric only *');                
            }else if(password==''){				
                $('#offer_password').focus();
				$('#offer_warning2').html('* Password is required *');                
            }else if(password.length < 5){				
                $('#offer_password').focus();
                $('#offer_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){				
                $('#offer_password2').focus();
				$('#offer_warning2').html('* Please confirm password *');                
            }else if(password!=password2){				
                $('#offer_password2').focus();
                $('#offer_warning2').html('* Password not match *'); 
			}else {
				//$("#offer_btn_2").attr('disabled', true);			
				$('#offer_step2').hide();
				$('#offer_step3').show();				
            }
		 
	});
	
	$('#offer_back_3').click(function(){            
            $('#offer_step3').hide();
			$('#offer_step2').show();
			$("#offer_btn_2").attr('disabled', false);
			
			$('#offer_warning3').html('');
	});
	
	$('#offer_btn_3').click(function(){ 		 
			var domain = $('#offer_domain').val();	
			var firstname = $('#offer_firstname').val();	
            var lastname = $('#offer_lastname').val();	
            var email = $('#offer_email').val();		
            var country_id = $('#offer_country').val();	
            var country = $("#offer_country option:selected").text();
            var city = $('#offer_city').val();	
            var password = $('#offer_password').val();	
            var password2 = $('#offer_password2').val();	            
			var contact = $('#offer_contact').val();					
            var message = $('#offer_message').val();
            var price = $('#offer_price').val();
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            var numeric = /^[0-9]+$/;			
            $('#offer_warning3').html('');
			
			if(firstname==''){	
				$('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
                $('#offer_firstname').focus();
				$('#offer_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){	
				$('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
				$('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){
				$('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
                $('#offer_firstname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
				$('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
                $('#offer_lastname').focus();
				$('#offer_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_lastname').focus();
                $('#offer_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_lastname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){					
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_lastname').focus();
                $('#offer_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_email').focus();
				$('#offer_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_email').focus();
                $('#offer_warning2').html('* Invalid email *');                
            }else if(contact==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_contact').focus();
				$('#offer_warning2').html('* Contact name is required *');                
            }else if(country_id==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_country').focus();
				$('#offer_warning2').html('* Country is required *');                
            }else if(city==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_city').focus();
				$('#offer_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_city').focus();
                $('#offer_warning2').html('* Alphanumeric only *');                
            }else if(password==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_password').focus();
				$('#offer_warning2').html('* Password is required *');                
            }else if(password.length < 5){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_password').focus();
                $('#offer_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_password2').focus();
				$('#offer_warning2').html('* Please confirm password *');                
            }else if(password!=password2){				
                $('#offer_step3').hide();$('#offer_step2').show();$("#offer_btn_2").attr('disabled', false);
				$('#offer_password2').focus();
                $('#offer_warning2').html('* Password not match *'); 
			}else if(price==''){
                $('#offer_price').focus();
				$('#offer_warning3').html('* Offer amount is required *');
            }else if(!numeric.test(price)){
                $('#offer_price').focus();
                $('#offer_warning3').html('* Numbers only *');
            }else if(parseInt(price)<10000){
                $('#offer_price').focus();
                $('#offer_warning3').html('* Offer amount should not be lower than $10000 *');
			}else if(message==''){	
                $('#offer_message').focus();
                $('#offer_warning3').html('* Message is required *');            
            }else {
				//$("#offer_btn_3").attr('disabled', true);
				//$("#offer_back_3").attr('disabled', true);
				var $btn = $(this).button('loading');
                $.post("http://www.contrib.com/signup/checkexist",{'field':'EmailAddress','value':email},function(data){

					if (!data.status){ 
						$('#offer_warning3').html('* Please wait. Checking in progress. * ');	
						  
						$.post('http://www.contrib.com/forms/save_offer',
						   {
								domain:domain,
								firstname:firstname,
								lastname:lastname,
								email:email,
								country_id:country_id,
								country:country,
								city:city,
								password:password,
								contact:contact,
								message:message,						   
								amount:price						   
						   }
						   ,function(data){
								$btn.button('reset');
								if(data.success===true){
									$('div#viewcontriblink3').text('Thank you!');
									$('div#viewcontriblink3').html('<a href="http://www.contrib.com/account/autologinforms?email='+data.email+'" target="_parent"><button class="btn btn-success btn-lg">View your Contrib.com account now!</button></a>');
									
									$('#offer_step3').hide();
									$('#offer_final').show();
								}else{
									$('#offer_warning3').html('* '+data.result+' * ');
									$("#offer_btn_3").attr('disabled', false);	
									$("#offer_back_3").attr('disabled',false);									
								}
						   }
						);
					/*	
						$.post("http://www.manage.vnoc.com/salesforce/addlead",
                               {
                                   'firstName':firstname,
                                   'lastName':lastname,
                                   'title':'',
                                   'email':email,
                                   'phone':contact,
                                   'street':'',
                                   'city':city,
                                   'country':country,
                                   'state':'',
                                   'zip':'',
                                   'domain':domain,
                                   'message':message,
                                   'price':amount,
                                   'form_type':'VNOC Offers'
                               }
                               ,function(data2){
                                  //_gaq.push(['_trackEvent', 'Offer', '<?php echo $domain?>', 'Form Submission']);
                                  // _gaq.push(['_trackEvent', 'Domains', 'Signup', '<?php echo $domain?>']);                                
                               }
                        );
						
						*/
                    }else{
                        $('#offer_warning3').html('* Email already have an account. * <a href="http://www.contrib.com" target="_top">Please LOGIN here.</a>');
						$("#offer_btn_3").attr('disabled', false);
                    }
                });
				
            }
		 
	});
	
});

function validateURL(url){
	return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}
$(function(){
	
	$('#inquiry_initialemail').focus();
	
	$('#inquiry_btn_1').click(function(){;
            var initial_email = $('#inquiry_initialemail').val();
			var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			$('#inquiry_warning1').html('');
			
            if (initial_email == ""){
                $('#inquiry_warning1').html('* Please enter email*');
                $('#inquiry_initialemail').focus();
			}else if(!emailfilter.test(initial_email)){
                $('#inquiry_warning1').html('* Invalid Email *');
                $('#inquiry_initialemail').focus();
            }else {
				//$("#inquiry_btn_1").attr('disabled', true); 
				var $btn = $(this).button('loading');
                $.post('http://www.contrib.com/forms/fullcontactdetails',
                       {initial_email:initial_email}
                       ,function(data){
						   $btn.button('reset');
                           $('#inquiry_firstname').val(data.fname);
                           $('#inquiry_lastname').val(data.lname);
                           $('#inquiry_email').val(initial_email);
                           $('#inquiry_step1').hide();
                           $('#inquiry_step2').show();
                       }
				);
            }		
	});
	     
	$('#inquiry_btn_2').click(function(){ 		 
			var domain = $('#inquiry_domain').val();	
			var firstname = $('#inquiry_firstname').val();	
            var lastname = $('#inquiry_lastname').val();	
            var email = $('#inquiry_email').val();		
            var country_id = $('#inquiry_country').val();	
            var country = $("#inquiry_country option:selected").text();
            var city = $('#inquiry_city').val();	
            var password = $('#inquiry_password').val();	
            var password2 = $('#inquiry_password2').val();	            
			var contact = $('#inquiry_contact').val();					
            var message = $('#inquiry_message').val();
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            			
            $('#inquiry_warning2').html('');
			
			if(firstname==''){				
                $('#inquiry_firstname').focus();
				$('#inquiry_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){				
                $('#inquiry_firstname').focus();
                $('#inquiry_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){				
                $('#inquiry_firstname').focus();
                $('#inquiry_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){				
                $('#inquiry_firstname').focus();
                $('#inquiry_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){				
                $('#inquiry_lastname').focus();
				$('#inquiry_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){				
                $('#inquiry_lastname').focus();
                $('#inquiry_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){				
                $('#inquiry_lastname').focus();
                $('#inquiry_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){					
                $('#inquiry_lastname').focus();
                $('#inquiry_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){				
                $('#inquiry_email').focus();
				$('#inquiry_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){				
                $('#inquiry_email').focus();
                $('#inquiry_warning2').html('* Invalid email *');                
            }else if(contact==''){				
                $('#inquiry_contact').focus();
				$('#inquiry_warning2').html('* Contact name is required *');                
            }else if(country_id==''){				
                $('#inquiry_country').focus();
				$('#inquiry_warning2').html('* Country is required *');                
            }else if(city==''){				
                $('#inquiry_city').focus();
				$('#inquiry_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){				
                $('#inquiry_city').focus();
                $('#inquiry_warning2').html('* Alphanumeric only *');                
            }else if(password==''){				
                $('#inquiry_password').focus();
				$('#inquiry_warning2').html('* Password is required *');                
            }else if(password.length < 5){				
                $('#inquiry_password').focus();
                $('#inquiry_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){				
                $('#inquiry_password2').focus();
				$('#inquiry_warning2').html('* Please confirm password *');                
            }else if(password!=password2){				
                $('#inquiry_password2').focus();
                $('#inquiry_warning2').html('* Password not match *'); 
			}else if(message==''){	
                $('#inquiry_message').focus();
                $('#inquiry_warning2').html('* Message is required *');            
            }else {
				//$("#inquiry_btn_2").attr('disabled', true);			
				var $btn = $(this).button('loading');
                $.post("http://www.contrib.com/signup/checkexist",{'field':'EmailAddress','value':email},function(data){

					if (!data.status){ 
						$('#inquiry_warning2').html('* Please wait. Checking in progress. * ');	
						  
						$.post('http://www.contrib.com/forms/save_inquiry',
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
								message:message						   
						   }
						   ,function(data){
							   $btn.button('reset');
								if(data.success===true){
									$('div#viewcontriblink4').text('Thank you!');
									$('div#viewcontriblink4').html('<a href="http://www.contrib.com/account/autologinforms?email='+data.email+'" target="_parent"><button class="btn btn-success btn-lg">View your Contrib.com account now!</button></a>');
									
									$('#inquiry_step2').hide();
									$('#inquiry_final').show();
								}else{
									$('#inquiry_warning2').html('* '+data.result+' * ');
									$("#inquiry_btn_2").attr('disabled', false);								
								}
						   }
						);
						
						
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
                                   'form_type':'VNOC Inquiry'
                               }
                               ,function(data2){
                                  console.log(data2);
                               }
						);
                    }else{
                        $('#inquiry_warning2').html('* Email already have an account. * <a href="http://www.contrib.com" target="_top">Please LOGIN here.</a>');
						$("#inquiry_btn_2").attr('disabled', false);
						$btn.button('reset');
                    }
                });
				
            }
		 
	});
	
});

function validateURL(url){
	return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}
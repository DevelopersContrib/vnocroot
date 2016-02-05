$(function(){
	
	$('#partner_initialemail').focus();
	
	$('#partner_btn_1').click(function(){
            var initial_email = $('#partner_initialemail').val();
			var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			$('#partner_warning1').html('');
			
            if (initial_email == ""){
                $('#partner_warning1').html('* Please enter email*');
                $('#partner_initialemail').focus();
			}else if(!emailfilter.test(initial_email)){
                $('#partner_warning1').html('* Invalid Email *');
                $('#partner_initialemail').focus();
            }else {
				//$("#partner_btn_1").attr('disabled', true);
				var $btn = $(this).button('loading');
				$('#partner_warning1').html('* Please wait... *');				
                $.post('http://www.contrib.com/forms/fullcontactdetails',
                       {initial_email:initial_email}
                       ,function(data){
						   $btn.button('reset');
                           $('#partner_firstname').val(data.fname);
                           $('#partner_lastname').val(data.lname);
                           $('#partner_email').val(initial_email);
                           $('#partner_step1').hide();
                           $('#partner_step2').show();
                       }
				);
            }
			return false;
	});
	
	$('#partner_btn_2').click(function(){            
            var firstname = $('#partner_firstname').val();	
            var lastname = $('#partner_lastname').val();	
            var email = $('#partner_email').val();		
			var website = $('#partner_website').val();
            var country_id = $('#partner_country').val();
			var country = $("#partner_country option:selected").text();
            var city = $('#partner_city').val();	
            var password = $('#partner_password').val();	
            var password2 = $('#partner_password2').val();					
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;
            						
            $('#partner_warning2').html('');
			
            if(firstname==''){
                $('#partner_firstname').focus();
				$('#partner_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){			
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
                $('#partner_lastname').focus();
				$('#partner_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){			
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
                $('#partner_email').focus();
				$('#partner_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
                $('#partner_email').focus();
                $('#partner_warning2').html('* Invalid email *');                
            }else if(website!='' && validateURL(website)===false){
                $('#partner_website').focus();
				$('#partner_warning2').html('* Invalid URL for website *');                 
            }else if(country_id==''){
                $('#partner_country').focus();
				$('#partner_warning2').html('* Country is required *');                
            }else if(city==''){
                $('#partner_city').focus();
				$('#partner_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
                $('#partner_city').focus();
                $('#partner_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
                $('#partner_password').focus();
				$('#partner_warning2').html('* Password is required *');                
            }else if (password.length < 5){
                $('#partner_password').focus();
                $('#partner_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
                $('#partner_password2').focus();
				$('#partner_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
                $('#partner_password2').focus();
                $('#partner_warning2').html('* Password not match *');                
            }else{ 
				//$("#partner_btn_2").attr('disabled', true);
				$('#partner_step2').hide();
				$('#partner_step3').show();
			}
           
	});
				
	$('#partner_back_3').click(function(){            
            $('#partner_step3').hide();
			$('#partner_step2').show();
			//$("#partner_btn_2").attr('disabled', false);
			
			$('#partner_warning3').html('');
	});
        
	$('#partner_btn_3').click(function(){		 
			var domain = $('#partner_domain').val();	
			var firstname = $('#partner_firstname').val();	
            var lastname = $('#partner_lastname').val();	
            var email = $('#partner_email').val();		
            var country_id = $('#partner_country').val();	
            var country = $("#partner_country option:selected").text();
            var city = $('#partner_city').val();	
            var password = $('#partner_password').val();	
            var password2 = $('#partner_password2').val();	            
			var website = $('#partner_website').val();		
            var partnertype = $('#partner_type').val();			
            var message = $('#partner_message').val();
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            			
            $('#partner_warning3').html('');
			
                      
            if(firstname==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
				$('#partner_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
				$('#partner_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){	
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_email').focus();
				$('#partner_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_email').focus();
                $('#partner_warning2').html('* Invalid email *');                
            }else if(website!='' && validateURL(website)===false){
                $('#partner_website').focus();
				$('#partner_warning2').html('* Invalid URL for website *');                
            }else if(country_id==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_country').focus();
				$('#partner_warning2').html('* Country is required *');                
            }else if(city==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_city').focus();
				$('#partner_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_city').focus();
                $('#partner_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password').focus();
				$('#partner_warning2').html('* Password is required *');                
            }else if(password.length < 5){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password').focus();
                $('#partner_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password2').focus();
				$('#partner_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password2').focus();
                $('#partner_warning2').html('* Password not match *'); 
			}else if(partnertype==''){	
                $('#partner_type').focus();
				$('#partner_warning3').html('* Type of partnership is required *');             
            }else if(message==''){	
                $('#partner_message').focus();
                $('#partner_warning3').html('* Message is required *');  
			}else{
				//$("#partner_btn_3").attr('disabled', true);
				//$("#partner_back_3").attr('disabled', true);

				$('#partner_step3').hide();
				$('#partner_step4').show();				
            }
		 
	});

	$('#partner_back_4').click(function(){            
            $('#partner_step4').hide();
			$('#partner_step3').show();
			$("#partner_btn_3").attr('disabled', false);
			$("#partner_back_3").attr('disabled', false);
			
			$('#partner_warning4').html('');
	});
	
	$('#partner_btn_4').click(function(){		 
			var domain = $('#partner_domain').val();	
			var firstname = $('#partner_firstname').val();	
            var lastname = $('#partner_lastname').val();	
            var email = $('#partner_email').val();		
            var country_id = $('#partner_country').val();	
            var country = $("#partner_country option:selected").text();
            var city = $('#partner_city').val();	
            var password = $('#partner_password').val();	
            var password2 = $('#partner_password2').val();	            
			var website = $('#partner_website').val();		
            var partnertype = $('#partner_type').val();
			var exchange_url = $('#partner_exchange_link').val();
            var message = $('#partner_message').val();
            var companytitle = $('#partner_company').val();
            var companydesc = $('#partner_companydescription').val();
            var companyimage = $('#partner_companyimage').val();
            var companyurl = $('#partner_companyurl').val();
			
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z. ]+$/;          
            			
            $('#partner_warning4').html('');
			
            if(firstname==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
				$('#partner_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_firstname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
				$('#partner_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){	
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_lastname').focus();
                $('#partner_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_email').focus();
				$('#partner_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_email').focus();
                $('#partner_warning2').html('* Invalid email *');                
            }else if(website!='' && validateURL(website)===false){
                $('#partner_website').focus();
				$('#partner_warning2').html('* Invalid URL for website *');                
            }else if(country_id==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_country').focus();
				$('#partner_warning2').html('* Country is required *');                
            }else if(city==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_city').focus();
				$('#partner_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_city').focus();
                $('#partner_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password').focus();
				$('#partner_warning2').html('* Password is required *');                
            }else if(password.length < 5){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password').focus();
                $('#partner_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password2').focus();
				$('#partner_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
				$('#partner_step3').hide();$('#partner_step2').show();$("#partner_btn_2").attr('disabled', false);
                $('#partner_password2').focus();
                $('#partner_warning2').html('* Password not match *'); 			 
            }else if(partnertype==''){	
				$('#partner_step4').hide();$('#partner_step3').show();$("#partner_btn_3").attr('disabled', false);$("#partner_back_3").attr('disabled', false);
                $('#partner_type').focus();
				$('#partner_warning3').html('* Type of partnership is required *');             
            }else if(message==''){	
				$('#partner_step4').hide();$('#partner_step3').show();$("#partner_btn_3").attr('disabled', false);$("#partner_back_3").attr('disabled', false);
                $('#partner_message').focus();
                $('#partner_warning3').html('* Message is required *');            
			}else if(companytitle==''){	
				$('#partner_company').focus();
				$('#partner_warning4').html('* Company name is required *');
			}else if(!alphanumeric.test(companytitle)){
				$('#partner_company').focus();
				$('#partner_warning4').html('* Alphanumeric only *');
			}else if(companydesc==''){	
				$('#partner_companydescription').focus();
				$('#partner_warning4').html('* Company description is required *'); 
			}else if(companyimage !='' && validateURL(companyimage)===false){
				$('#partner_companyimage').focus();
				$('#partner_warning4').html('* Invalid URL/link for company image *'); 
			}else if(companyurl==''){	
				$('#partner_companyurl').focus();
				$('#partner_warning4').html('* Company link is required *'); 
			}else if(validateURL(companyurl)===false){
				$('#partner_companyurl').focus();
				$('#partner_warning4').html('* Invalid company link *'); 
			}else{
				$("#partner_btn_4").attr('disabled', true);
				$("#partner_back_4").attr('disabled', true);
				var $btn = $(this).button('loading');
				
				$('#partner_warning4').html('* Please wait. Checking in progress. * ');	
				
                $.post("http://www.contrib.com/signup/checkexist",{'field':'EmailAddress','value':email},function(data){					
					
					if (data.status == 0){						
						  
						$.post('http://www.contrib.com/forms/save_partner',
						   {
								domain:domain,
								firstname:firstname,
								lastname:lastname,
								email:email,
								country_id:country_id,
								country:country,
								city:city,
								password:password,
								website:website,								
								partnertype:partnertype,
								exchange_url:exchange_url,
								message:message,
								company:companytitle,
								companydesc:companydesc,
								companyimage:companyimage,
								companyurl:companyurl																
						   }
						   ,function(data){
								if(data.success===true){
									$('div#viewcontriblink1').text('Thank you!');
									$('div#viewcontriblink1').html('<a href="http://www.contrib.com/account/autologinforms?email='+data.email+'&form=partnership" target="_parent"><button class="btn btn-success btn-lg">View your Contrib.com account now!</button></a>');
									$('#partner_step4').hide();
									$('#partner_final').show();
									
									if(domain == 'handyman.com'){
										//get affiliate link via email
										var aff_id = data.affiliate_id;
										$('#login_redirect').html('<small><b>Step 1: </b> Please <a target="_blank" href="http://handyman.com/referral/autologin?email='+email+'">login</a> to get your referral widgets or get your affiliate id <b>'+aff_id+'</b> to create widgets.<small>');
									}else{
										$('#login_redirect').html('<small><b>Step 1: </b> Please <a target="_blank" href="http://'+domain+'/referral">login</a> to get your referral widgets.<small>');
									}
									
								}else{
									$('#partner_warning4').html('* '+data.result+' * ');
									$("#partner_btn_4").attr('disabled', false);
									$("#partner_back_4").attr('disabled', false);									
								}
								$btn.button('reset');
						   }
						);
						
						
                      
                        $.post("http://www.manage.vnoc.com/salesforce/addlead",
                               {
                                   'firstName':firstname,
                                   'lastName':lastname,
                                   'title':'',
                                   'email':email,
                                   'phone':'',
                                   'street':'',
                                   'city':city,
                                   'country':country,
                                   'state':'',
                                   'zip':'',
                                   'domain':domain,
                                   'partner_type':partnertype,
                                   'message':message,
                                   'form_type':'VNOC Partnership'
                               }
                               ,function(data2){
								console.log(data2);
                               }
                              );	
                        
                    }else{
                        $('#partner_warning4').html('* Email already have an account. * <a href="http://www.contrib.com" target="_top">Please LOGIN here.</a>');
						$("#partner_btn_4").attr('disabled', false);
						$("#partner_back_4").attr('disabled', false);
						$btn.button('reset');
                    }
                });
				
            }
		 
	});
	
	
	$('select#partner_type').change(function(){
		var pType = $(this).val();
		if(pType == 'Distribution Marketing Partnerships'){
			$('#input-exchange-link').css('display','block');
		}else{
			$('#input-exchange-link').css('display','none');
		}
	});
	
});

function validateURL(url){
	return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}
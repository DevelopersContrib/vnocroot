$(function(){
	
	$('#staffing_initialemail').focus();
	
	$('#staffing_btn_1').click(function(){
            var initial_email = $('#staffing_initialemail').val();
			var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			$('#staffing_warning1').html('');
			
            if (initial_email == ""){
                $('#staffing_warning1').html('* Please enter email*');
                $('#staffing_initialemail').focus();
			}else if(!emailfilter.test(initial_email)){
                $('#staffing_warning1').html('* Invalid Email *');
                $('#staffing_initialemail').focus();
            }else {
				//$("#staffing_btn_1").attr('disabled', true); 
				var $btn = $(this).button('loading');
                $.post('http://www.contrib.com/forms/fullcontactdetails',
                       {initial_email:initial_email}
                       ,function(data){
						   $btn.button('reset');
                           $('#staffing_firstname').val(data.fname);
                           $('#staffing_lastname').val(data.lname);
                           $('#staffing_website').val(data.website);
                           $('#staffing_email').val(initial_email);
                           $('#staffing_step1').hide();
                           $('#staffing_step2').show();
                       }
				);
            }		
	});
	
	$('#staffing_btn_2').click(function(){            
            var firstname = $('#staffing_firstname').val();	
            var lastname = $('#staffing_lastname').val();	
            var email = $('#staffing_email').val();		
            var country_id = $('#staffing_country').val();
			var country = $("#staffing_country option:selected").text();
            var city = $('#staffing_city').val();	
            var password = $('#staffing_password').val();	
            var password2 = $('#staffing_password2').val();	            
			var website = $('#staffing_website').val();		
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;
            						
            $('#staffing_warning2').html('');
			
            if(firstname==''){
                $('#staffing_firstname').focus();
				$('#staffing_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){			
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
                $('#staffing_lastname').focus();
				$('#staffing_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){			
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
                $('#staffing_email').focus();
				$('#staffing_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
                $('#staffing_email').focus();
                $('#staffing_warning2').html('* Invalid email *');                               
            }else if(website != '' && validateURL(website)===false) {
                $('#staffing_website').focus();
                $('#staffing_warning2').html('* Enter a valid link *');              
            }else if(country_id==''){
                $('#staffing_country').focus();
				$('#staffing_warning2').html('* Country is required *');                
            }else if(city==''){
                $('#staffing_city').focus();
				$('#staffing_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
                $('#staffing_city').focus();
                $('#staffing_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
                $('#staffing_password').focus();
				$('#staffing_warning2').html('* Password is required *');                
            }else if (password.length < 5){
                $('#staffing_password').focus();
                $('#staffing_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
                $('#staffing_password2').focus();
				$('#staffing_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
                $('#staffing_password2').focus();
                $('#staffing_warning2').html('* Password not match *');                
            }else{ 
				//$("#staffing_btn_2").attr('disabled', true);
				$('#staffing_step2').hide();
				$('#staffing_step3').show();
			}
           
	});
				
	$('#staffing_back_3').click(function(){            
            $('#staffing_step3').hide();
			$('#staffing_step2').show();
			//$("#staffing_btn_2").attr('disabled', false);
			
			$('#staffing_warning3').html('');
	});	
	
	$('#staffing_back_4').click(function(){            
            $('#staffing_step4').hide();
			$('#staffing_step3').show();
			//$("#staffing_btn_3").attr('disabled', false);			
	});
        
	$('#staffing_btn_3').click(function(){
			var domain = $('#staffing_domain').val();	
			var firstname = $('#staffing_firstname').val();	
            var lastname = $('#staffing_lastname').val();	
            var email = $('#staffing_email').val();		
            var country_id = $('#staffing_country').val();	
            var country = $("#staffing_country option:selected").text();
            var city = $('#staffing_city').val();	
            var password = $('#staffing_password').val();	
            var password2 = $('#staffing_password2').val();	            
			var website = $('#staffing_website').val();
			var resume = $('#staffing_resume').val();	//add proper trapping for upload resume	
			var resumeurl = $('#staffing_resumeurl').val();		
            var role = $('#staffing_role').val();			
            var message = $('#staffing_message').val();
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            			
            $('#staffing_warning3').html('');
			
            if(firstname==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
				$('#staffing_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
				$('#staffing_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){	
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_email').focus();
				$('#staffing_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_email').focus();
                $('#staffing_warning2').html('* Invalid email *');              
			}else if(website != '' && validateURL(website)===false) {
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_website').focus();
                $('#staffing_warning2').html('* Enter a valid link *');               
            }else if(country_id==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_country').focus();
				$('#staffing_warning2').html('* Country is required *');                
            }else if(city==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_city').focus();
				$('#staffing_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_city').focus();
                $('#staffing_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password').focus();
				$('#staffing_warning2').html('* Password is required *');                
            }else if(password.length < 5){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password').focus();
                $('#staffing_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password2').focus();
				$('#staffing_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
				$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password2').focus();
                $('#staffing_warning2').html('* Password not match *'); 
			}else  if(role==''){	
                $('#staffing_role').focus();
				$('#staffing_warning3').html('* Type of partnership is required *'); 
			//}else if(resume == '' && resumeurl == '') {
			}else if(resumeurl == '') {
				$('#staffing_resumeurl').focus();
                $('#staffing_warning3').html('* Please provide your resume *');
			}else if(resumeurl != '' && validateURL(resumeurl)===false) {
                $('#staffing_resumeurl').focus();
                $('#staffing_warning3').html('* Enter a valid link *');
            }else if(message==''){	
                $('#staffing_message').focus();
                $('#staffing_warning3').html('* Message is required *');            
            }else{
				//$("#staffing_btn_3").attr('disabled', true);
				//$("#staffing_back_3").attr('disabled', true);
				
				$('#staffing_step3').hide();
				$('#staffing_step4').show();
            }
		 
	});
        
	$('#staffing_btn_4').click(function(){		 
			var domain = $('#staffing_domain').val();	
			var firstname = $('#staffing_firstname').val();	
            var lastname = $('#staffing_lastname').val();	
            var email = $('#staffing_email').val();		
            var country_id = $('#staffing_country').val();	
            var country = $("#staffing_country option:selected").text();
            var city = $('#staffing_city').val();	
            var password = $('#staffing_password').val();	
            var password2 = $('#staffing_password2').val();	            
			var website = $('#staffing_website').val();
			var resume = $('#staffing_resume').val();	//add proper trapping for upload resume	
			var resumeurl = $('#staffing_resumeurl').val();		
            var role = $('#staffing_role').val();			
            var role_name = $("#staffing_role option:selected").text();			
            var message = $('#staffing_message').val();
            var facebook = $('#staffing_facebook').val();
            var linkedin = $('#staffing_linkedin').val();
            var github = $('#staffing_github').val();
            var skype = $('#staffing_skype').val();
            var yahoo = $('#staffing_yahoo').val();
            var talk = $('#staffing_talk').val();
            var aol = $('#staffing_aol').val();
            var wlive = $('#staffing_wlive').val();			
            var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var letters = /^[a-zA-Z ]+$/;
            var alphanumeric = /^[0-9a-zA-Z ]+$/;          
            						
            if(firstname==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
				$('#staffing_warning2').html('* First name is required *');                
            }else if(!letters.test(firstname)){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');               
            }else if(firstname.length > 25){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(firstname.length < 3 ){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_firstname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
				$('#staffing_warning2').html('* Last name is required *');                
            }else if(!letters.test(lastname)){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Accepts letters only *');                	
            }else if(lastname.length > 25){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(lastname.length < 3 ){	
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_lastname').focus();
                $('#staffing_warning2').html('* Name should have 3 to 25 characters *');                
            }else if(email==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_email').focus();
				$('#staffing_warning2').html('* Email is required *');                
            }else if(!emailfilter.test(email)){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_email').focus();
                $('#staffing_warning2').html('* Invalid email *');              
			}else if(website != '' && validateURL(website)===false) {
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_website').focus();
                $('#staffing_warning2').html('* Enter a valid link *');               
            }else if(country_id==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_country').focus();
				$('#staffing_warning2').html('* Country is required *');                
            }else if(city==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_city').focus();
				$('#staffing_warning2').html('* City is required *');                
            }else if(!alphanumeric.test(city)){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_city').focus();
                $('#staffing_warning2').html('* Alphanumeric only *');                
            }else if(password==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password').focus();
				$('#staffing_warning2').html('* Password is required *');                
            }else if(password.length < 5){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password').focus();
                $('#staffing_warning2').html('* Password should have atleast 5 characters *');                
            }else if(password2==''){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password2').focus();
				$('#staffing_warning2').html('* Please confirm password *');                
            }else if(password!=password2){
				$('#staffing_step4').hide();$('#staffing_step3').hide();$('#staffing_step2').show();$("#staffing_btn_2").attr('disabled', false);
                $('#staffing_password2').focus();
                $('#staffing_warning2').html('* Password not match *'); 
			}else  if(role==''){	
				$('#staffing_step4').hide();$('#staffing_step3').show();$("#staffing_btn_3").attr('disabled', false);
                $('#staffing_role').focus();
				$('#staffing_warning3').html('* Type of partnership is required *'); 
			//}else if(resume == '' && resumeurl == '') {
			}else if(resumeurl == '') {
				$('#staffing_step4').hide();$('#staffing_step3').show();$("#staffing_btn_3").attr('disabled', false);
				$('#staffing_resumeurl').focus();
                $('#staffing_warning3').html('* Please provide your resume *');
			}else if(resumeurl != '' && validateURL(resumeurl)===false) {
				$('#staffing_step4').hide();$('#staffing_step3').show();$("#staffing_btn_3").attr('disabled', false);
                $('#staffing_resumeurl').focus();
                $('#staffing_warning3').html('* Enter a valid link *');
            }else if(message==''){	
				$('#staffing_step4').hide();$('#staffing_step3').show();$("#staffing_btn_3").attr('disabled', false);
                $('#staffing_message').focus();
                $('#staffing_warning3').html('* Message is required *');   
            }else{
				$("#staffing_btn_4").attr('disabled', true);
				$("#staffing_back_4").attr('disabled', true);			
				var $btn = $(this).button('loading');
                $.post("http://www.contrib.com/signup/checkexist",{'field':'EmailAddress','value':email},function(data){

					if (data.status == 0){
						$('#staffing_warning4').html('* Please wait. Checking in progress. * ');	
						  
						$.post('http://www.contrib.com/forms/save_staffing',
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
								resumeurl:resumeurl,
								role:role,
								message:message,
								facebook:facebook,
								linkedin:linkedin,
								github:github,
								skype:skype,
								yahoo:yahoo,
								talk:talk,
								aol:aol,
								wlive:wlive
						   }
						   ,function(data){
							   $btn.button('reset');
								if(data.success===true){
									$('div#viewcontriblink2').text('Thank you!');
									$('div#viewcontriblink2').html('<a href="http://www.contrib.com/account/autologinforms?email='+data.email+'&form=staffing" target="_parent"><button class="btn btn-success btn-lg">View your Contrib.com account now!</button></a>');
									
									$('#staffing_step4').hide();
									$('#staffing_final').show();
								}else{
									$('#staffing_warning4').html('* '+data.result+' * ');
									$("#staffing_btn_4").attr('disabled', false);
									$("#staffing_back_4").attr('disabled', false);									
								}
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
                                   'role':role_name,
                                   'message':message,
                                   'form_type':'VNOC Staffing'
                               }
                               ,function(data2){
								console.log(data2);
                               }
						);
                        
                    }else{
                        $('#staffing_warning4').html('* Email already have an account. * <a href="http://www.contrib.com" target="_top">Please LOGIN here.</a>');
						$("#staffing_btn_4").attr('disabled', false);
						$("#staffing_back_4").attr('disabled', false);
						$btn.button('reset');
                    }
                });
				
            }
		 
	});
	
});

function validateURL(url){
	return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}
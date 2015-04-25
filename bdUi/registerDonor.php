<?php

?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->

<!DOCTYPE html>
<html>
<head>
<title>My Charity A Charity  category Flat bootstrap Responsive  Website Template| Home :: w3layouts</title>
</head>
<?php 

include 'header.php';
?>
<script type="text/javascript">
	var bloodGroups = [];
	var districts = [];
	var states = [];
	var cities = [];
	var areas = [];
	var confirmCode;
	var userDetails = "";
	$.validator.addMethod("custom_number", function(value, element) {
	    return this.optional(element) || value === "NA" ||
	        value.match(/[789][0-9]{9}/);
	}, "Please enter a valid number, or 'NA'");
	
			jQuery(document).ready(function($) {
				// validate signup form on keyup and submit
				$("#loginForm").validate({
					rules: {
						number:{
				            required: true,
				            custom_number: true
				        },
						lgpassword: "required"
						
					},
					messages: {
						number: {
							required: "Please enter number",
							minlength: "Your enter a valid number"
						},
						lgpassword: "Please enter your Password"
					}
				});
				
			$("#loginButton").click(function(){	
					
					if($("#loginForm").valid()){
						$("#invMsg").hide();
						var userValues = $("#loginForm").serialize();
						 
						 var user = $("#loginForm").serializeArray();
					$.ajax({
		            	type: 'POST',
		           		url: url+'/validate/password',
						dataType: 'json',
						data: userValues,
		            	success: function(data)
                     		{
		            		if(data == "Valid"){
								 sessionStorage.setItem("login", "true");
								 sessionStorage.setItem("number", $("#mobnumber").val() );
								 window.location="index.php";
								 }else{
									 $("#invMsg").toggle("slow"); 
								 }
                     		}
						});
						
					}
					 
				});
				
				$("#fgtPwdLnk").click(function(){	
					$("#loginForm").hide();
            		$("#forgotForm").show();
				});
				$("#loginLinkButton").click(function(){
			
					$("#forgotForm").hide();
					$("#loginForm").show();
				
					
            		
				});
				$("#otpForm").validate({
					rules: {
						otp: "required",
					},
					messages: {
						otp: "Please enter your name"
					}
				});
				$("#forgotForm").validate({
					rules: {
					
						mobilenumber:{
				            required: true,
				            custom_number: true
				        },
						forgotCaptcha: "required"
					},
					messages: {
					
						forgotCaptcha: "Please enter your captcha",
						mobilenumber: {
							required: "Please enter number",
							minlength: "Your enter a valid number"
						},
					}
				});
				$("#userForm").validate({
					rules: {
						name: "required",
						password: {
							required: true,
							minlength: 5
						},
						cnfpassword: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						email: {
							required: true,
							email: true
						},
						topic: {
							required: "#newsletter:checked",
							minlength: 2
						},
						city: "required",
						state: "required",
						district : "required",
						gender : "required",
						donation_status : "required",
						blood_group : "required",
						captcha : "required"
					},
					messages: {
						name: "Please enter your name",
						password: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long"
						},
						cnfpassword: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long",
							equalTo: "Please enter the same password as above"
						},
						email: "Please enter a valid email address",
						agree: "Please accept our policy",
						city: "Please select City",
						state: "Please select State",
						district: "Please select District",
						blood_group: "Please select Blood Group",
						donation_status: "Please select Donation Status",
						gender: "Please select Gender",
						captcha : "Please enter captcha"
							
					}
				});
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});

				getStateValues();
				getBloodGroupValues();
				
				 $('#state').change(function(event){
				    	
				    	var state= this.value;
				    	getDistrictValues(state);
	    	
						    });
				 
				 $('#district').change(function(event){
				    	
				    	var district= this.value;
				    	getCityValues(district);
				    
	    	
						    });
				 
				 $('#city').change(function(event){
				    	
				    	var city= this.value;
				    	getAreaValues(city);
				    });
				 			
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
				
				$("#otpButton").click(function(){
					$("#invalidOtpMsg").hide();
					$.ajax({
		            	type: 'POST',
		           		url: url+'/validate/validateotp',
						dataType: 'json',
						 data: {otp:$("#otp").val(),number: userDetails.number},
		            	success: function(data)
                     		{
		            		if(data == "Valid"){
								 $.ajax({
						            	type: 'POST',
						           		url: url+'/validate/validatestatus',
										dataType: 'json',
										 data: {user_id: userDetails.user_id},
						            	success: function(data)
				                     		{
						            		if(data == "Valid"){
												 sessionStorage.setItem("login", "true");
												 sessionStorage.setItem("number", userDetails.number);
												 window.location="index.php";
												 }else{
													 $("#invalidOtpMsg").toggle("slow"); 
												 }
				                    		},
				                     		error: function(xhr, error){
				                     	        $("#errorMsg").html(xhr.responseText).show();
				                     		 }
										});
								
								 
								 }else{
									 $("#invalidOtpMsg").toggle("slow"); 
								 }
                    		},
                     		error: function(xhr, error){
                     	        $("#errorMsg").html(xhr.responseText).show();
                     		 }
						});
					});
				
				$(".submitbotton").click(function(){	
					if($("#userForm").valid()){
					
					 validateCaptcha($("#usrCaptcha").val(),$("#usrCaptcha").realperson('getHash'),saveUser);
					// var hash = $("#usrCaptcha").realperson('getHash');
					// var valid = "valid";
					
					}
				});
				$("#forgotButton").click(function(){	
					if($("#forgotForm").valid()){
					
					 validateCaptcha($("#forgotCaptcha").val(),$("#forgotCaptcha").realperson('getHash'),forgotUser);
					// var hash = $("#usrCaptcha").realperson('getHash');
					// var valid = "valid";
					
					}
				});
				function forgotUser(valid){
 				
					 
					
					 if(valid === "Valid"){
						 var number=$("#mobilenumber").val();
						 $.ajax({
				            	type: 'POST',
				            	   url: url+'/sendPASSWORD/'+number,
				                   data: {number: number},
								dataType: 'json',
								 
				            	success: function(data)
		                     		{
				            		 $("#erMsg").hide();
				            		 $("#successMsg").html("PASSWORD IS SEND TO YOUR MOBILE NUMBER").show("show");
				            		
		                     		},
		                     		error: function(xhr, error){
		                     	        $("#erMsg").html(xhr.responseText).show();
		                     		 }
								});
						 }else{
							 $("#erMsg").html("Invalid Captcha").show("show");
						}
				}
				function saveUser(valid){
 					var userValues = $("#userForm").serialize();
					 
					 var user = $("#userForm").serializeArray();
					 if(valid === "Valid"){
						 $.ajax({
				            	type: 'POST',
				           		url: url+'/api/userDetails',
								dataType: 'json',
								 data: userValues,
				            	success: function(data)
		                     		{
				            		confirmCode = data.confirmation_code;
				            		userDetails = data;
				            		
				            		$('#otpForm').bPopup();
				            		
		                     		},
		                     		error: function(xhr, error){
		                     	        $("#errorMsg").html(xhr.responseText).show();
		                     		 }
								});
						 }else{
							 $("#errorMsg").html("Invalid Captcha").show("show");
						}
				}
				$("#forgotForm").hide();
				$("#otpForm").hide();
			});
	</script>
	<div class="blog">
	<div class="container">
<div class="row magin-top">
<div class="left-ads col-lg-2 col-md-2 col-xs-12"><img src="images/side-bg.jpg" class="img-responsive" alt="logo"/></div>
<div class="sap_tabs col-lg-8 col-md-8 col-xs-12 ">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
			  	  	
				</li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  
				 
			  </ul>		
			  <!---->		  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
							<!--login1-->
						<div class="register">
							<div class="sign_up" >
			<!----------start form----------->
			<form class="sign simple-form" id="userForm" name="userForm" >
			<span id="errorMsg" style="display: none;"></span>
			
				<div class="formtitle">Become a Donor.</div>
				<!----------start top_section----------->
				<div class="section">
						<div class="input-sign details">
							<input type="email" class="text" name="email"  placeholder="Your Email" /> 
						</div>
						<div class="input-sign details1">
							<input type="text" class="text mbnumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number" placeholder="Your Number" value="" required/> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input-sign details">
							<input type="password" name="password" id="password"   placeholder="Password" required/>
						</div>
						<div class="input-sign details1">
							<input type="password" name="cnfpassword" id="cnfpassword" placeholder="Confirm Password" required/>
						</div>
						<div class="clear"> </div>
					</div>
				
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<div class="title">Personal Details</div>
					<!----------start name section----------->
					<div class="section ">
						<div class="input-sign details name">
							<input type="text" class="text" name="name"  placeholder="Name" />
						</div>
						
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="section-address details add-icon">
						<select id="state"  class="frm-field required" name="state"  >
						<option value="" selected="selected">State</option>
						</select>
						
						</div>
						<div class="section-address details1 add-icon">
						<select id="district"  class="frm-field required" name="district" >
						<option value="" selected="selected">District</option>
						</select>
						 
						</div>
						
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="section-address details add-icon">
							<select id="city"  class="frm-field required" name="city" >
							<option value="" selected="selected">City</option>
						</select>
						 
						</div>
						<div class="section-address details1 add-icon">
							<select id="area"  class="frm-field required" name="area" >
							<option value="" selected="selected">Area</option>
						</select>
						 
						</div>
						
						<div class="clear"> </div>
					</div>
					
					
			<div class="section address-bs">
					
					<textarea rows="4" cols="4" name="address" id="address"  placeholder="Address" ></textarea>
					</div>
					<div class="section">
						<div class="section-address details blood-icon">
						<select id="blood_group" name="blood_group"  class="frm-field required" >
						<option value="" selected="selected">Blood Group</option>
						</select>
						
						</div>
						<div class="section-address details1 blood-icon">
						<select id="status" name="donation_status"  class="frm-field required"  >
						<option value="" selected="selected">Blood Donation Status</option>
						<option value="y">Yes</option>
						  <option value="n">No</option>
						</select>
						 
						</div>
						
						<div class="clear"> </div>
					</div>
					
						<div class="section">
					<div class="section details gender-bs">
					<label for="gender">Gender&nbsp;&nbsp;&nbsp;</label>
						<input type="radio" class="gender"  name="gender"  value="M" > &nbsp;Male&nbsp;
						<input type="radio" class="gender"  name="gender"  value="F">&nbsp;Female&nbsp;
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
						<div class="input-sign captcha-center-details">
							<input type="text" class="text captcha" name="captcha"  id="usrCaptcha" /> 
						</div>
						<div class="clear"> </div>
					</div>
<!-- 				<input type="hidden" id="salt" value="123456"> -->
					<div class="section otp-center-details">
					<input type="checkbox" class="checkbox agree" id="agree" name="agree"><label for="agree">Agree to our policy</label>
						
						</div>
					
					<div class="submit">
					<input class="bluebutton submitbotton" type="button" value="Reuqest for OTP" />	
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
			
			<form class="sign simple-form" id="otpForm" name="userForm">
			<span id="invalidOtpMsg" style="display: none;">Invalid OTP Code</span>
			<div class="formtitle">OTP DETAILS </div>
				<!----------start top_section----------->
				<span>OTP is sent to your mobile successfully</span>
			<div class="section">
						<div class="input-sign otp-center-details">
							<input type="text" name="otp" id="otp"  placeholder="OTP Code" /> 
						</div>
						<div class="clear"> </div>
					</div>
				<div class="submit">
					<input class="bluebutton" id="otpButton" type="button" value="Validate" />	
					</div>
			</form>
		</div>
	 	  
	 	
						</div>
					</div>
				</div>		
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							<div class="register">
							<div class="sign_up" >
			<!----------star form----------->
			<span id="mobMsg" style="display: none;">Enter Mobile Number</span>
			<span id="cnfMsg" style="display: none;">Password would be sent to Mobile Number.</span>
			<span id="invMsg" style="display: none;">Invalid Credentials.</span>	
			<form class="sign simple-form" id="loginForm"  action="" method="post" >
	
					<div class="formtitle">Member Login</div>
					<div class="section">
					<div class="input-sign login-mbnumber">
						<input type="text" class="text mbnumber"  placeholder="Mobile Number" id="mobnumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number"  /> 
						
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
					<div class="input-sign login-mbnumber">
						<input type="password" id="lgpassword" name="lgpassword"  placeholder="Password" />
						
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="buttons login-button1">
						<a href="#" id="fgtPwdLnk">Forgot password?</a>
						<input class="bluebutton" id="loginButton" type="button" value="Login" />
						
					</div>
		
				</form>
				<form class="sign simple-form" id="forgotForm"  action="" method="post" >
				<span id="erMsg"  class="error"  style="display: none;"></span>
				<span id="successMsg" class="error" style="display: none;"></span>
	
					<div class="formtitle">Forgot Password</div>
					<div class="section">
					<div class="input-sign login-mbnumber">
						<input type="text" class="text mbnumber"  placeholder="Mobile Number" id="mobilenumber" name="mobilenumber" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number"  /> 
						
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
					<div class="input-sign login-mbnumber">
							<input type="text" class="text captcha" name="forgotCaptcha"  id="forgotCaptcha" /> 
						
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
					<div class="buttons login-button1">
					<a href="#" id="loginLinkButton">Login Form?</a>
							<input class="bluebutton" id="forgotButton" type="button" value="Login" />
						
					</div>
					<div style="clear:both;"></div>
					</div>
					
		
				</form>
				<!----------end form----------->
		</div>
		<!----------end member-login----------->
						</div>
				</div> 
			</div> 			        					 
				        </div>	
				     </div>	
		        </div>
	
			
		        <div class="ads-right col-lg-2 col-md-2 col-xs-12 "><img src="images/side-bg.jpg" class="img-responsive" alt="logo"/></div>
	</div>
	<div style="clear:both;"></div>
			</div>
			</div>
<?php 
include 'news.php';
?>

<?php 
include 'footer.php';
?>
</body>
</html>
<?php
?>
    <script> $(document).ready(function () {                                  
     

    	
    		  $('.datepicker').datepicker({ format: "yyyy-mm-dd" }).on('changeDate', function(ev){
    		    $(this).datepicker('hide');
    		});
    	
      
            $("a.popup-register").click(function(){

            	$('#signup-popup').bPopup({
            		 speed: 450,
            	        fadeSpeed: 'slow',
            	        modalColor: '#000',
            	        transitionClose: 'slideDown',
            	        opacity: 0.8,
            	        modalClose: false,
            	        transition: 'slideDown'
                 
                        });
            });
    
        }); 

     </script>
<!-- signup  start here -->
<div id="signup-popup" class="ppInfo col-lg-6 col-md-6 col-sm-6 col-xs-12">
	
	
 <span class="button b-close">X</span>
  <p class="form-tile"><span class="glyphicon glyphicon-user"></span> Registration </p>
		<form id="userForm" role="form">
			<span id="regerrorMsg" style="display: none"></span>
			<span id="regsucMsg" style="display: none"></span>
			<span id="regcaptchaMsg" style="display: none"></span>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

				

						<div class="input-group1">
							<input type="text" class="form-control user-name" name="name" id="name"
								placeholder=" Full Name" required> 
						</div>
			


				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

			

						<div class="input-group1">
							<input type="text" class="form-control bdgp" name="blood_group"
								id="regbloodgroup" placeholder=" Blood Group" required> 
						</div>
					</div>

				<div style="clear:both;"></div>
				</div>
				<div class="row">
				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

					

						<div class="input-group1">
							<input type="text" class="form-control l-pwd" name="password"
								id="regpassword" placeholder=" Password" required> 
						</div>
			
				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

					

						<div class="input-group1">
							<input type="text" class="form-control l-pwd" name="confirmPassword"
								id="confirmPassword" placeholder=" Confirm Password" required> 
						</div>
			
				</div>
				<div style="clear:both;"></div>
				</div>
		
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

				

						<div class="input-group1">
							<input type="text" class="form-control locator" name="city" id="regcity"
								placeholder=" City" required> 
						</div>
					</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

		

						<div class="input-group1">
							<input type="text" class="form-control locator" name="state"
								id="regstate" placeholder=" State" disabled required /> 
						</div>
			
				</div>
			
	
	<div style="clear:both;"></div>
				</div>
		
			<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				

						<div class="input-group1">
							<input type="text" class="form-control datepicker calender" name="dob"
								id="dob" placeholder=" Date of Birth" required> 
						</div>

				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


						<div class="input-group1">
							<input type="text" class="form-control mobile-icon" name="number" id="number"
								placeholder=" Mobile Number" required>
						</div>
	
				</div>
	

							
	<div style="clear:both;"></div>
				</div>
				<div class="row">
	
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				
						<textarea placeholder="Enter Your Address" class="address form-control"></textarea>

		
				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						

					<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="availability">
							<span>Availability</span>
							<div id="avil" class="btn-group btn-toggle btn-primary-R">
								<button type="button" value="Y" id="status"
									name="donation_status" class="btn btn-primary">Yes</button>
								<button type="button" value="N" id="status"
									name="donation_status" class="btn btn-default">No</button>
							</div>
	
					</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="captcha-center-details2">
							<input type="text" class="captcha" name="captcha"  id="regCaptcha" /> 
						</div>
					</div>
					
					</div>

				
		
				</div>
											
	<div style="clear:both;"></div>
				</div>
				
			

		<div class="row">
									
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label class="radio-inline"> Gender: </label> <label
							class="radio-inline"> <input type="radio" name="gender" value="M">Male
						</label> <label class="radio-inline"> <input type="radio"
							name="gender" value="F">Female
						</label>
	</div>
				</div>
			<button type="button" id="regButton" class="btn login-btn pull-right"><i class="glyphicon glyphicon-log-in"></i>  register</button>
			
				
		</form>
		
		<!-- otp form  start here -->
		<form  id="otpForm" name="userForm" class="ppInfo" style="display:none">
			<span id="invalidOtpMsg" style="display: none;">Invalid OTP Code</span>
			<div class="formtitle">OTP DETAILS </div>
				<!----------start top_section----------->
				<span>OTP is sent to your mobile successfully</span>
			<div class="section">
						<div class="input-sign otp-center-details">
							<input type="text" name="otp" id="regotp"  placeholder="OTP Code" /> 
						</div>
						<div class="clear"> </div>
					</div>
				<div class="submit">
					<input class="bluebutton" id="otpButton" type="button" value="Validate" />	
					</div>
			</form>

	</div>

<!-- signup  end here -->

<?php
?>
<!-- edit profile for user start here -->

<div id="editprofile-popup" class="ppInfo col-lg-4 col-md-4 col-sm-6 col-xs-12 edituserform">
<span class="button b-close">X</span>
<p class="form-tile">Edit Account</p>
		<div class="">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#Edit-Account" role="tab"
					data-toggle="tab"> Edit Account </a></li>
				<li><a href="#changepwd" role="tab" data-toggle="tab"> <i
						class="fa fa-user"></i> Change Password
				</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade active in" id="Edit-Account">
					<form id="editForm">
					<span id="editerrorMsg" style="disolay:none"></span>
						
							<div class="availability">
								<span>Availability</span>
								<div class="btn-group btn-toggle">
									<button type="button" class="btn btn-lg btn-default" id="yesBtn">Yes</button>
									<button type="button" class="btn btn-lg btn-primary" id="noBtn">No</button>
								</div>
							</div>

					


						

							<div class="input-group1">
								<input type="text" class="mbn-filed" name="number"
									id="number" placeholder="Edit Mobile Number"
									disabled required> <span  class="mbn" id="updteNum"><img src="images/mbn-udate.png" width="21" height="20" /></span>
							</div>

						
						
							<div class="input-group1">
								<input type="text" class="form-control1" name="city"
									id="editcity" placeholder="City" required> 
							</div>
						
					<div class="input-group1">
							<textarea rows="4" cols="4" class="form-control1" placeholder="Address"></textarea></div>
					
						<button type="button" name="submit" id="updateBtn" value=""
							class="btn login-btn"><i class="glyphicon glyphicon-log-in"></i> Update </button>
					</form>
					
				</div>
				<div class="tab-pane fade" id="changepwd">
				<span id="reseterrMsg" style="display:none" ></span>
					<form id="resetPasswordForm">
						
							<div class="input-group1">
						
								<input class="form-control1" type="password" id="oldPassword"
									name="oldPassword" placeholder="Current Password">
							</div>
				
							<div class="input-group1">
								
								<input class="form-control1" type="password"
									id="newPassword" name="newPassword" placeholder="New Password">
						
						</div>
						
							<div class="input-group1">
							
								<input class="form-control1" type="password"
								id="confirmPassword" name="confirmPassword"	placeholder="Confirm Password">
							</div>
					
						<button type="button" name="submit" id="resetButton"
							class="btn reset-button"><i class="glyphicon glyphicon-log-in"></i> Reset Password</button>
					</form>
					
				</div>
				<div>
				
				
				
				</div>
			</div>
		</div>
	</div>
	<div id="numForm" class="ppInfo col-lg-4 col-md-4 col-sm-6 col-xs-12 updateform">
<span class="button b-close">X</span>
<p class="form-tile">Update Mobile Number</p>	
<form class="sign simple-form" name="numForm">
			<span id="invalidOtpMsg" style="display: none;">Invalid OTP Code</span>
			<span id="invalidCaptchapMsg" style="display: none;">Please enter valid captcha</span>
			<span id="valMobMsg" style="display: none;">Enter Valid Mobile Number</span>
			<span id="otpCnfMsg" style="display: none;">OTP Code sent to Mobile Number</span>
			
					<div class="section">
					<div class="input-sign login-mbnumber">
						<input type="text" class="text mbnumber"  placeholder="Updated Mobile Number" id="updNumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number"  /> 
						<input type="button" class="update-mbn" value="Request OTP" id="reqOtpBtn"> 
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
						<div class="input-sign otp-reset-details">
							<input type="text" name="otp" id="otp" class="otp-enter"  placeholder="OTP Code" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input-sign captcha-reset-details">
							<input type="text" class="text captcha" name="captcha"  id="usrCaptcha" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="submit">
					<button class="bluebutton update-mbnumber-btn" id="otpButton" type="button" value="Update Mobile Number" ><i class="glyphicon glyphicon-log-in"></i>	Update Mobile Number</button>
					</div>
			</form>
		
	</div>
<div id="admin-login" class="ppInfo col-lg-4 col-md-4 col-sm-6 col-xs-12 updateform">
<span class="button b-close">X</span>
<p class="form-tile">Update Mobile Number</p>	
<form class="sign simple-form" name="numForm">
			<span id="invalidOtpMsg" style="display: none;">Invalid OTP Code</span>
			<span id="invalidCaptchapMsg" style="display: none;">Please enter valid captcha</span>
			<span id="valMobMsg" style="display: none;">Enter Valid Mobile Number</span>
			<span id="otpCnfMsg" style="display: none;">OTP Code sent to Mobile Number</span>
			
					<div class="section">
					<div class="input-sign login-mbnumber">
						<input type="text" class="text mbnumber"  placeholder="Updated Mobile Number" id="updNumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number"  /> 
						<input type="button" class="update-mbn" value="Request OTP" id="reqOtpBtn"> 
					</div>
					<div style="clear:both;"></div>
					</div>
					<div class="section">
						<div class="input-sign otp-reset-details">
							<input type="text" name="otp" id="otp" class="otp-enter"  placeholder="OTP Code" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input-sign captcha-reset-details">
							<input type="text" class="text captcha" name="captcha"  id="usrCaptcha" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="submit">
					<button class="bluebutton update-mbnumber-btn" id="otpButton" type="button" value="Update Mobile Number" ><i class="glyphicon glyphicon-log-in"></i>	Update Mobile Number</button>
					</div>
			</form>
		
	</div>


<script>	
$(document).ready(function(){
$("a.admin-loginform").click(function(){
	$('#admin-login').bPopup({
		
	    speed: 450,
        fadeSpeed: 'slow',
        modalColor: '#000',
    
        opacity: 0.8,
        modalClose: false,
        transition: 'slideIn'
	});

});
});
</script>







<!-- edit profile end here -->
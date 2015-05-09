<?php
?>
<!-- edit profile for user start here -->

<div id="editprofile-popup" class="ppInfo">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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
						<div class="form-group">
							<div class="availability">
								<span>Availability</span>
								<div class="btn-group btn-toggle">
									<button class="btn btn-lg btn-default active">yes</button>
									<button class="btn btn-lg btn-primary ">No</button>
								</div>
							</div>

						</div>


						<div class="form-group">

							<div class="input-group">
								<input type="text" class="form-control" name="BloodGroup"
									id="number" placeholder=" Edit Mobile Number"
									disabled required> <span class="input-group-addon"><span id="updteNum"
									class="glyphicon glyphicon-edit"></span></span>
							</div>

						</div>

						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" name="BloodGroup"
									id="city" placeholder=" city" required> <span
									class="input-group-addon"><span
									class="glyphicon glyphicon-map-marker"></span></span>
							</div>
						</div>
						<div class="form-group">
							<textarea placeholder="Address"></textarea>

						</div>
						<input type="submit" name="submit" id="submit" value="Submit"
							class="btn btn-success">
					</form>
					
				</div>
				<div class="tab-pane fade" id="changepwd">
				<span id="reseterrMsg" style="display:none" ></span>
					<form id="resetPasswordForm">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</div>
								<input class="form-control" type="password" id="oldPassword"
									name="oldPassword" placeholder="Current Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-log-in"></span>
								</div>
								<input class="form-control" type="password"
									id="newPassword" name="newPassword" placeholder="New Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-log-in"></span>
								</div>
								<input class="form-control" type="password"
								id="confirmPassword" name="confirmPassword"	placeholder="Confirm Password">
							</div>
						</div>
						<input type="button" name="submit" id="resetButton" value="Submit"
							class="btn btn-success">
					</form>
					
				</div>
				<div>
				<form class="sign simple-form" id="numForm" name="numForm" style="display: none;">
			<div class="formtitle">Upadate Number</div>
			<span id="invalidCaptcha" class="error" style="display: none;">Invalid Captcha</span>
			
			<span id="invalidOtp" class="error" style="display: none;">Invalid Otp</span>
					<div class="section">
					<div class="input-sign login-mbnumber row-padding-0">
						<div class="row">
					<div ><input type="text"   placeholder="Updated Mobile Number" id="updateNumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number"  /> </div>
						<div><input type="button"  id="reqOtpBtn" /> </div>
						
					
						
						
						<div class="clear"> </div>
						</div>
						
						</div>
					</div>
					<div class="section">
						<div class="input-sign otp-reset-details">
							<input type="text" name="otp" id="otp"  class="input-90" placeholder="OTP Code" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section width-60">
						<div class="captcha-center-details2">
							<input type="text" class="text captcha" name="captcha"  id="usrCaptcha" /> 
						</div>
						<div class="clear"> </div>
					</div>
					<div class="submit">
					<input class="bluebutton" id="numButton" type="button" value="Update Mobile Number" />	
					</div>
			</form>
				
				
				</div>
			</div>
		</div>

	</div>









</div>
</div>

<!-- edit profile end here -->
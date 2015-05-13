<?php
?>





<div id="login-popup" class="ppInfo col-lg-4 col-md-6 col-sm-8 col-xs-12">
 <span class="button b-close">X</span>
<p class="form-tile">Forgot Password<p/>
	<form name="form" id="forgotForm" class="form-horizontal"
		enctype="multipart/form-data" method="POST">
		<span id="erMsg" class="error" style="display: none"> </span> 
		<span id="successMsg" class="successmsg" style="display: none"> </span>
	
			<div class="input-group-1">
											<input type="password" id="forgotnumber" class="form-control mobile-icon"
				name="forgotnumber" placeholder="Enter Mobile Number">
										</div>

						<div class="captcha-center-details2">
							<input type="text" class="captcha" name="captcha"  id="forgotCaptcha" placeholder="Captcha" /> 
						</div>
						
					
		<div class="form-group">
			<!-- Button -->
			<div class="col-sm-12 controls">
				<button type="button" id="forgotButton"
					class="btn forgot-btn pull-right"><i class="glyphicon glyphicon-log-in"></i> Send
				</button>
			</div>
		</div>
	</form>
</div>
<!-- forgot pwd end here -->

<!-- login after start here -->
<div id="login-after-popup" class="ppInfo">
 <span class="button b-close">X</span>
<p class="form-tile" style="margin-top:27px;">Are You Ready to Donate Blood</p>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mgn-top">

		<div class="form-group">
			<div class="availability">
				<span>Availability</span>
				<div id="avil"class="btn-group btn-toggle btn-A">
					<button type="button" value="Y" class="btn btn-lg AVIL btn-primary active">Yes</button>
					<button   type="button" value="N" class="btn btn-lg AVIL btn-default " >No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login after End here -->


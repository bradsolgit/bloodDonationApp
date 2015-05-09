<?php
?>





<div id="login-popup" class="ppInfo mgrn-top width-mrgn">
	<form name="form" id="forgotForm" class="form-horizontal"
		enctype="multipart/form-data" method="POST">
		<span id="erMsg" style="display: none"> </span> <span id="successMsg"
			style="display: none"> </span>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
			<input type="password" id="forgotnumber" class="form-control"
				name="forgotnumber" placeholder="Enter Mobile Number">
		</div>

						<div class="captcha-center-details2">
							<input type="text" class="captcha" name="captcha"  id="forgotCaptcha" /> 
						</div>
						
					
		<div class="form-group">
			<!-- Button -->
			<div class="col-sm-12 controls">
				<button type="button" id="forgotButton"
					class="btn btn-dgn pull-right">
					<i class="glyphicon glyphicon-log-in"></i> Submit
				</button>
			</div>
		</div>
	</form>
</div>
<!-- forgot pwd end here -->

<!-- login after start here -->
<div id="login-after-popup" class="ppInfo">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="form-group">
			<div class="availability">
				<span>Availability</span>
				<div id="avil"class="btn-group btn-toggle btn-A">
					<button type="button" value="Y" class="btn btn-lg AVIL btn-default active">Yes</button>
					<button   type="button" value="N" class="btn btn-lg AVIL btn-primary" >No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login after End here -->


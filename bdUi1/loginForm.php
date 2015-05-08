<?php
?>

<div id="login-popup" class="ppInfo mgrn-top width-mrgn">
	<form name="form" id="forgotForm" class="form-horizontal"
		enctype="multipart/form-data" method="POST">
		<span id="erMsg" style="display: none"> </span> <span id="successMsg"
			style="display: none"> </span>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
			<input type="password" id="forgotFor" class="form-control"
				name="forgotnumber" placeholder="Enter Mobile Number">
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
				<div class="btn-group btn-toggle">
					<button class="btn btn-lg btn-default active">yes</button>
					<button class="btn btn-lg btn-primary ">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login after End here -->


<?php
?>
<!-- signup  start here -->
<div id="signup-popup" class="ppInfo">
	<div class="container">

		<form id="userForm" role="form">
			<span id="errorMsg" style="display: none"></span>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control" name="name" id="name"
								placeholder=" Full Name" required> <span
								class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						</div>
					</div>


				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control" name="blood_group"
								id="regbloodgroup" placeholder=" Blood Group" required> <span
								class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control datepicker" name="dob"
								id="dob" placeholder=" Date of Birth" required> <span
								class="input-group-addon"><span
								class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
				</div>


			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control" name="number" id="number"
								placeholder=" Mobile Number" required> <span
								class="input-group-addon"><span
								class="glyphicon glyphicon-phone"></span></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control" name="city" id="regcity"
								placeholder=" city" required> <span class="input-group-addon"><span
								class="glyphicon glyphicon-map-marker"></span></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<div class="input-group">
							<input type="text" class="form-control" name="state"
								id="regstate" placeholder=" Sate"> <span
								class="input-group-addon"><span
								class="glyphicon glyphicon-map-marker"></span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">
						<textarea placeholder="Address"></textarea>

					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">

						<label class="radio-inline"> Gender: </label> <label
							class="radio-inline"> <input type="radio" name="gender" value="M">Male
						</label> <label class="radio-inline"> <input type="radio"
							name="gender" value="F">Female
						</label>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="form-group">
						<div class="availability">
							<span>Availability</span>
							<div id="avil" class="btn-group btn-toggle">
								<button type="button" value="Y" id="status"
									name="donation_status" class="btn btn-lg btn-default active">yes</button>
								<button type="button" value="N" id="status"
									name="donation_status" class="btn btn-lg btn-primary ">No</button>
							</div>
						</div>
					</div>
				</div>

			</div>
			<input type="button" id="regButton" value="Submit"
				class="btn btn-success pull-right">
		</form>


	</div>
</div>
<!-- signup  end here -->

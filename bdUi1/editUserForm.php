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
					<form>
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
									id="edit-mobile-number" placeholder=" Edit Mobile Number"
									disabled required> <span class="input-group-addon"><span
									class="glyphicon glyphicon-edit"></span></span>
							</div>

						</div>

						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" name="BloodGroup"
									id="InputName" placeholder=" city" required> <span
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
					<script>
        $(document).ready(function(){
   			 $("#Edit-Account .glyphicon-edit").click(function(){
          $( "#edit-mobile-number" ).prop( "disabled", false );
          });
          });
        </script>
				</div>
				<div class="tab-pane fade" id="changepwd">
					<form id="resetPasswordForm">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</div>
								<input class="form-control" type="password"
									name="password" placeholder="Current Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-log-in"></span>
								</div>
								<input class="form-control" type="password"
									placeholder="New Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-log-in"></span>
								</div>
								<input class="form-control" type="password"
									placeholder="Confirm Password">
							</div>
						</div>
						<input type="button" name="submit" id="resetButton" value="Submit"
							class="btn btn-success">
					</form>
				</div>
			</div>
		</div>

	</div>









</div>
</div>

<!-- edit profile end here -->
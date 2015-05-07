<?php
include 'header.php';
?>




<script>
	var data ='';
	var confirmCode;
	var forgotpassword="";
	var userDetails = "";
	$.validator.addMethod("custom_number", function(value, element) {
	    return this.optional(element) || value === "NA" ||
	        value.match(/[789][0-9]{9}/);
	}, "Please enter a valid number, or 'NA'");
$(document).ready(function(){
	var oTable = $('#jsontable').dataTable();
	
	
$("a.popup-window").click(function(){

	$('#login-popup').bPopup();
});
$("a.popup-window1").click(function(){

	$('#editprofile-popup').bPopup();
});


$("#table").hide();

});

</script>

<?php include 'searchForm.php';?>


<?php include 'loginForm.php';?>

<a href="#login-after-popup" class="login-after">Login-After</a>

<?php include 'editUserForm.php';?>


<!-- edit profile for Admin start here -->

<div id="editprofile-popup1" class="ppInfo">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#add-member" role="tab"
					data-toggle="tab"> Add Member </a></li>
				<li><a href="#add-multiple-members" role="tab" data-toggle="tab">
						Add Multiple Members </a></li>
				<li><a href="#edit-members" role="tab" data-toggle="tab"> Edit
						Members </a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade active in" id="add-member">
					<!-- signup  start here -->
					<div id="signup-popup1" class="">
						<div class="container">

							<form role="form">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

										<div class="form-group">

											<div class="input-group">
												<input type="text" class="form-control" name="InputName"
													id="InputName" placeholder=" Full Name" required> <span
													class="input-group-addon"><span
													class="glyphicon glyphicon-user"></span></span>
											</div>
										</div>


									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

										<div class="form-group">

											<div class="input-group">
												<input type="text" class="form-control" name="bloodgroup"
													id="bloodgroup" placeholder=" Blood Group" required> <span
													class="input-group-addon"><span
													class="glyphicon glyphicon-tint"></span></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="form-group">

											<div class="input-group">
												<input type="text" class="form-control datepicker"
													name="datepicker" id="datepicker"
													placeholder=" Date of Birth" required> <span
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
												<input type="text" class="form-control" name="BloodGroup"
													id="InputName" placeholder=" Mobile Number" required> <span
													class="input-group-addon"><span
													class="glyphicon glyphicon-phone"></span></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

										<div class="form-group">

											<div class="input-group">
												<input type="text" class="form-control" name="city"
													id="city" placeholder=" city" required> <span
													class="input-group-addon"><span
													class="glyphicon glyphicon-map-marker"></span></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

										<div class="form-group">

											<div class="input-group">
												<input type="text" class="form-control" name="BloodGroup"
													id="InputName" placeholder=" Sate"> <span
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
												class="radio-inline"> <input type="radio" name="optradio">Male
											</label> <label class="radio-inline"> <input type="radio"
												name="optradio">Female
											</label>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

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
								<input type="button" id="Button" value="Submit"
									class="btn btn-success pull-right">
							</form>


						</div>
					</div>
					<script>
        $(document).ready(function(){
   			 $("#Edit-Account .glyphicon-edit").click(function(){
          $( "#edit-mobile-number" ).prop( "disabled", false );
          });
          });
        </script>
				</div>
				<div class="tab-pane fade" id="add-multiple-members">
					<div class="container">
						<form>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-file"></span>
									</div>
									<input class="form-control" type="file" />
								</div>
							</div>


							<input type="submit" name="submit" id="submit" value="Submit"
								class="btn btn-success">
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="edit-members">
					<div class="container">
						<form>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>Full Name</span>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>Mobile Number</span>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>Gender</span>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>Blood Group</span>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>city</span>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<span>Edit</span>
								</div>
							</div>
							<hr>

							<input type="submit" name="submit" id="submit" value="Submit"
								class="btn btn-success">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
<!-- edit Admin profile end here -->
<?php include 'registerForm.php';?>
<script>

$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});


$('.datepicker').datepicker()
</script>
<?php
include 'footer.php';
?>

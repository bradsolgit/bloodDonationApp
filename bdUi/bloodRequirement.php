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

<?php 

include 'header.php';
?>

<script type="text/javascript">
	var bloodGroups = [];
	var districts = [];
	var states = [];
	var cities = [];
	var areas = [];
	var userDetails = "";
	$.validator.addMethod("custom_number", function(value, element) {
	    return this.optional(element) || value === "NA" ||
	        value.match(/[789][0-9]{9}/);
		}, "Please enter a valid number, or 'NA'");
	jQuery(document).ready(function($) {
		var oTable = $('#jsontable').dataTable();

		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
		 $("#reqForm").validate({
				rules: {
					name: "required",
				
					number: {
						required: true,
						number: true
					},
					
					hospital: "required",
					date: "required",
					city: "required",
					state: "required",
					district : "required",
					state: "required",
				
					blood_group : "required",
				
				},
				messages: {
					name: "Please enter your name",
					number: "Please enter your number ",
					hospital: "Please enter your hospital name",
					date: "Please enter your date",
				    city: "Please select City",
					state: "Please select State",
					district: "Please select District",
					blood_group: "Please select Blood Group",
				
					
						
				}
			});
		 $("#otpForm").validate({
				rules: {
					
					
					captcha: "required",
					otp: "required",
					
				
				},
				messages: {
					captcha: "Please enter your captcha",
					otp: "Please enter your otp ",
	
				
					
						
				}
			});
			$("#createBtn").click(function(){	
				
				if($("#reqForm").valid()){
				 var userValues = $("#reqForm").serialize();
				 
				 var user = $("#reqForm").serializeArray();
				 //var valid = validateCaptcha($("#usrCaptcha").val());
				
				 
				 $.ajax({
		            	type: 'POST',
		           		url: url+'/api/donationRequest',
						dataType: 'json',
						 data: userValues,
		            	success: function(data)
                     		{
		            		
		            		userDetails = data;
		            		$("#reqForm").hide();
		            		$("#otpForm").show();
		            		
                     		},
                     		error: function(xhr, error){
                     	        $("#errorMsg").html(xhr.responseText).show();
                     		 }
						});
				 
				}
			});
		
				
		 $("#searchBtn").click(function(){	
			
			var searchCrit = $("#reqForm").serialize();
			 
			 var user = $("#reqForm").serializeArray();
			 $.ajax({
	            	type: 'POST',
	           		url: url+'/search/donationRequest',
					dataType: 'json',
					 data: searchCrit,
	            	success: function(data)
                 		{
	            		oTable.fnClearTable();
	            		for(var i = 0; i < data.length; i++) {
	            		oTable.fnAddData([
	            		data[i].name,
	      data[i].state,
	            		data[i].district,
	            		data[i].city,
	            		data[i].area,
	            		data[i].number,
	            		data[i].blood_group,
	            		data[i].hospital,
	            		data[i].date
	            		]);
	            		} // End Fo
	            		 $("#jsontable_wrapper").show();
                 		},
                 		error: function(xhr, error){
                 	        $("#errorMsg").html(xhr.responseText).show();
                 		 }
					});
					
		 });
		 $("#otpButton").click(function(){	
				if($("#otpForm").valid()){
				
				 validateCaptcha($("#usrCaptcha").val(),$("#usrCaptcha").realperson('getHash'),saveUser);
				// var hash = $("#usrCaptcha").realperson('getHash');
				// var valid = "valid";
				
				}
			});
			
			function saveUser(valid){
			
				 if(valid === "Valid"){
					 var otp=$("#otp").val();
					 var otp1=userDetails.confirmatiocode;
					
					 
					 
					 if(otp===otp1)
					 {
					 $.ajax({
			            	type: 'POST',
			           		url: url+'/api/donationRequest1',
							dataType: 'json',
							 data: userDetails,
			            	success: function(data)
	                     		{
			            
			            		 window.location="index.php";
			            		
	                     		},
	                     		error: function(xhr, error){
	                     	        $("#errorMsg").html(xhr.responseText).show();
	                     		 }
							});
					 }
					 else
					 {
						 $("#invalidOtpMsg").show();
						 }
					 }else{
						 $("#invalidCaptchaMsg").show();
					}
			}
		 $("#jsontable_wrapper").hide();
		 $("#otpForm").hide();
		
		 });
	</script>
	</head>
	
<div class="blog">
	<div class="container">
		<div class="row">
			<div class="left-ads col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="images/side-bg.jpg" class="img-responsive" alt="sidebg"/></div>
	<div class="bloodRq col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
		<form class="sign simple-form" id="reqForm"  action="" method="post" >
	<span id="errorMsg" style="display: none;"></span>
					<div class="formtitle">Blood Request Form</div>
					
					<!----------start city section----------->
					
					<div class="section">
						<div class="input-sign details">
							<input type="text" class="text" name="name"  placeholder="Your Name" /> 
						</div>
						<div class="input-sign details1">
							<input type="text" class="text mbnumber" name="number" pattern="[789][0-9]{9}" title="Please enter a valid Mobile Number" placeholder="Your Number" value="" required/> 
						</div>
						<div class="clear"> </div>
					</div>
				
				<div class="section ">
						<div class="input-sign details">
							<input type="text" class="text" name="hospital"  placeholder="Hospital" /> 
						</div>
						<div class="input-sign details1 date-bdApp">
							<input type="date" class="text" name="date" placeholder="Date of Requirement" /> 
						</div>
						<div class="clear"> </div>
					</div>
				
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
					<div class="section">
						<div class="section-address details blood-icon">
						<select id="bloodgroup" name="blood_group"  class="frm-field required" >
						<option value="" selected="selected">Blood Group</option>
						</select>
						
						</div>
						
						<div class="clear"> </div>
					</div>
					
					<div class="submit">
					<input class="bluebutton submitbotton" type="button" id="createBtn" value="Raise a Request" />
					<input class="bluebutton submitbotton" type="button" id="searchBtn" value="Search for a Request" />	
					</div>
				
			</form>
			<form class="sign simple-form" id="otpForm" name="userForm">
			<span id="errorMsg" style="display: none;"></span>
			<span id="invalidOtpMsg" style="display: none;">Invalid OTP Code</span>
			<span id="invalidCaptchaMsg" style="display: none;">Invalid Captcha Code</span>
			
			<div class="section">
						<div class="input-sign otp-center-details">
							<input type="text" name="otp" id="otp"  placeholder="OTP Code" /> 
						</div>
						</div>
						<div class="clear"> </div>
						<div class="section">
						<div class="input-sign captcha-center-details">
							<input type="text" class="text captcha" name="captcha"  id="usrCaptcha" /> 
						</div>
						<div class="clear"> </div>
					
				<div class="submit">
					<input class="bluebutton" id="otpButton" type="button" value="Validate" />	
					</div>
			</form>

			</form></div>
	
					<div class="ads-right col-lg-2 col-md-2 col-sm-2 col-xs-12 "><img src="images/side-bg.jpg" class="img-responsive" alt="sidebg"/></div>

	<div style="clear:both;"></div>
	</div></div>
	</div>
		<table id="jsontable" class="display table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					
					<th>State</th>
					<th>District.</th>
					<th>City</th>
					<th>Area</th>
					<th>Number</th>
					<th>Blood Group</th>
					<th>Hospital</th>
					<th>Date</th>
				</tr>
			</thead>
			
			
		</table>
<?php 
include 'news.php';
?>

<?php 
include 'footer.php';
?>
</body>
</html>
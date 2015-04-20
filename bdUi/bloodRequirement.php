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
	
	$.validator.addMethod("custom_number", function(value, element) {
	    return this.optional(element) || value === "NA" ||
	        value.match(/[789][0-9]{9}/);
		}, "Please enter a valid number, or 'NA'");
			jQuery(document).ready(function($) {
				$("#loginForm").validate({
					rules: {
						number:{
				            required: true,
				            custom_number: true
				        },
						password: "required"
						
					},
					messages: {
						number: {
							required: "Please enter number",
							minlength: "Your enter a valid number"
						},
						password: "Please enter your Password"
					}
				});
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
				
				$("#state").empty();
				$("#bloodgroup").empty();
				$("#state").append($("<option></option>")
			             .attr("value", "")
			             .text("State"));
				$("#bloodgroup").append($("<option></option>")
			             .attr("value", "")
			             .text("Blood Group"));
				$.ajax({
		            type: 'GET',
		            url: url+'/lookupType/1',
					dataType: 'json',
		            success: function(data)
                      {
		            	data.forEach( function (item)
		            			{
		            			    	states.push(item);
		            			    	 $("#state").append($("<option></option>")
				 			             .attr("value", item.lookup_id)
				 			             .text(item.lookup_value));
		            			    
		            			});
						}
             		});
				
				$.ajax({
		            type: 'GET',
		            url: url+'/lookupType/4',
					dataType: 'json',
		            success: function(data)
                      {
		            	data.forEach( function (item)
		            			{
		            					bloodGroups.push(item);
		            			    	 $("#bloodgroup").append($("<option></option>")
				 			             .attr("value", item.lookup_id)
				 			             .text(item.lookup_value));
		            			    
		            			});
						}
             		});
				
				 $('#state').change(function(event){
				    	
				    	var state= this.value;
				    	$.ajax({
				            type: 'GET',
				            url: url+'/lookupId/district/'+state,
							dataType: 'json',
				            success: function(data)
		                      {
				           	 $('#district').empty();
							   $('#district')
					             .append($("<option></option>")
					             .attr("value", "")
					             .text("District"));
							   data.forEach( function (item)
				            			{
								     $("#district").append($("<option></option>")
			 			             .attr("value", item.lookup_id)
			 			             .text(item.lookup_value));
								  });
								}
		             		});
						
				    
	    	
						    });
				 
				 $('#district').change(function(event){
				    	
				    	var district= this.value;
				    	$.ajax({
				            type: 'GET',
				            url: url+'/lookupId/city/'+district,
							dataType: 'json',
				            success: function(data)
		                      {
				            	$('#city').empty();
								   $('#city')
						             .append($("<option></option>")
						             .attr("value", "1")
						             .text("City"));
								   data.forEach( function (item)
					            			{
									      $("#city").append($("<option></option>")
				 			             .attr("value", item.lookup_id)
				 			             .text(item.lookup_value));
									   
					            	});
								  }
		             		});
						
				    
	    	
						    });
				 
				 $('#city').change(function(event){
				    	
				    	var city= this.value;
				    	$.ajax({
				            type: 'GET',
				            url: url+'/lookupId/area/'+city,
							dataType: 'json',
				            success: function(data)
		                      {
				            	$('#area').empty();
								 $('#area')
						             .append($("<option></option>")
						             .attr("value", "1")
						             .text("Area"));
								   data.forEach( function (item)
					            		{
										   $("#area").append($("<option></option>")
				 			             .attr("value", item.lookup_id)
				 			             .text(item.lookup_value));
									   
					            	});
			    	
								  }
		             		});
				    	 
				    });
				 if(sessionStorage.getItem("login") == null){
						$("#dd").hide();
						$("#loginLink").show();
					}else{
						$("#dd").show();
						$("#loginLink").hide();
					}
			});
	</script>
	
	<div class="container">
		<form class="sign simple-form" id="reqForm"  action="" method="post" >
	
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
				
				<div class="section">
						<div class="input-sign details">
							<input type="text" class="text" name="hospital"  placeholder="Hospital" /> 
						</div>
						<div class="input-sign details1">
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
					<input class="bluebutton submitbotton" type="button" value="Raise a Request" />
					<input class="bluebutton submitbotton" type="button" value="Search for a Request" />	
					</div>
				
			</form>
	
	</div>
<?php 
include 'news.php';
?>

<?php 
include 'footer.php';
?>
</body>
</html>
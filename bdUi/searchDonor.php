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
				 $("#searchBtn").click(function(){	
					 
					var searchCrit = $("#searchForm").serialize();
					 
					 var user = $("#searchForm").serializeArray();
					 $.ajax({
			            	type: 'POST',
			           		url: url+'/search/donors',
							dataType: 'json',
							 data: searchCrit,
			            	success: function(data)
	                     		{
			            		oTable.fnClearTable();
			            		for(var i = 0; i < data.length; i++) {
			            		oTable.fnAddData([
			            		data[i].name,
			            		data[i].email,
			            		data[i].state,
			            		data[i].district,
			            		data[i].city,
			            		data[i].area,
			            		data[i].number,
			            		data[i].blood_group
			            		]);
			            		} // End Fo
			            		 $("#jsontable_wrapper").show();
	                     		},
	                     		error: function(xhr, error){
	                     	        $("#errorMsg").html(xhr.responseText).show();
	                     		 }
							});
							
				 });

				 $("#jsontable_wrapper").hide();
				 
				
				 });
	</script>
<!-- //end-smoth-scrolling -->
	</head>
<body>
	<div class="container">
			<!----------star form----------->
			<form class="sign simple-form" id="searchForm"  action="" method="post" >
	
					<div class="formtitle">Search User Form</div>
				
				<!----------start city section----------->
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
					<input class="bluebutton" id="searchBtn" type="button" value="Search Donor" />	
					</div>
			</form>
				<!----------end form----------->
		
	</div>		
<!--below banner end here-->
	
	<table id="jsontable" class="display table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>State</th>
					<th>District.</th>
					<th>City</th>
					<th>Area</th>
					<th>Number</th>
					<th>Blood Group</th>
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
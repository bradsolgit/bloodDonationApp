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
</head>
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
						             .attr("value", "")
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
						             .attr("value", "")
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
	
		<div class="blog">
	<div class="container">
<div class="row">
<div class="left-ads col-lg-2 col-md-2 col-xs-12"></div>
<div class="bd-search col-lg-8 col-md-8 col-xs-12 ">
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
	   <div class="ads-right col-lg-2 col-md-2 col-xs-12 "></div>
	<div style="clear:both;"></div>
		<div class="table-responsive tb-mgn-top">
		<table id="jsontable" class="display table table-bordered table">
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
		</div>
	</div>

		</div>
	</div>	
<!--below banner end here-->
	
	
<?php 
include 'news.php';
?>

<?php 
include 'footer.php';
?>
</body>
</html>
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
	$("#forgotForm").validate({
		rules: {
		
			forgotnumber:{
	            required: true,
	            custom_number: true
	        },
		
		},
		messages: {
		
		
			forgotnumber: {
				required: "Please enter number",
				minlength: "Your enter a valid number"
			},
		}
	});
$("a.popup-window").click(function(){

	$('#login-popup').bPopup();
});
$("a.popup-window1").click(function(){

	$('#signup-popup').bPopup();
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
       		$('#table').bPopup();
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
       		
        		},
        		error: function(xhr, error){
        	        $("#errorMsg").html(xhr.responseText).show();
        		 }
			});
			
});


$("#bloodgroup").autocomplete(
		    {
		    minLength: 1,
		    source: function (request, response)
		    {
		    $.ajax(
		    {
		    	 url:url+'/search/bloodgroup',
		    	 type: "POST",
		        data: {bloodgroup:$('#bloodgroup').val() },
		        dataType: "json",
		        success: function (jsonDataReceivedFromServer)
		        {
		        //alert (JSON.stringify (jsonDataReceivedFromServer));
		        // console.log (jsonDataReceivedFromServer);
		        response ($.map(jsonDataReceivedFromServer, function (item)
		            {
		            console.log (item.firstname);
		                            // NOTE: BRACKET START IN THE SAME LINE AS RETURN IN 
		                            //       THE FOLLOWING LINE
		            return {
		                id: item.lookup_value, value: item.lookup_value };
		            }));
		        }
		      });
		     },
		   });

$("#city").autocomplete(
		    {
		    minLength: 1,
		    source: function (request, response)
		    {
		    $.ajax(
		    {
		    	 url:url+'/search/city',
		    	 type: "POST",
		        data: {city:$('#city').val() },
		        dataType: "json",
		        success: function (jsonDataReceivedFromServer)
		        {
		        //alert (JSON.stringify (jsonDataReceivedFromServer));
		        // console.log (jsonDataReceivedFromServer);
		        response ($.map(jsonDataReceivedFromServer, function (item)
		            {
		            console.log (item.firstname);
		                            // NOTE: BRACKET START IN THE SAME LINE AS RETURN IN 
		                            //       THE FOLLOWING LINE
		            return {
		                id: item.lookup_value, value: item.lookup_value };
		            }));
		        }
		      });
		     },
		   });
$(".loginform").click(function(){
    $(".loginform-dsplay").slideToggle("slow");
});
$("#loginButton").click(function(){
	if($("#loginForm").valid()){
		var userValues = $("#loginForm").serialize();
		 
		 var user = $("#loginForm").serializeArray();
	$.ajax({
    	type: 'POST',
   		url: url+'/validate/password',
		dataType: 'json',
		data: userValues,
    	success: function(data)
     		{
    		if(data == "Valid"){
				 sessionStorage.setItem("login", "true");
				 sessionStorage.setItem("number", $("#number").val() );
				 window.location="index.php";
				
				 }
			 else
				 {
					 $("#errorMsg").bPopup();
				 
     		}
     		}
		});
		
	}
	 
});
$("#forgotButton").click(function(){	
	alert("jhduwh");
	if($("#forgotForm").valid()){
		
	var forgotpassword=$("#forgotFor").val();;
	
		
		 $.ajax({
            	type: 'POST',
            	   url: url+'/sendPASSWORD/'+forgotpassword,
                   data: {forgotpassword:forgotpassword},
				dataType: 'json',
				 
            	success: function(data)
             		{
             		if(data == "Valid")
             		{
            		 $("#erMsg").hide();
            		 $("#successMsg").html("PASSWORD IS SEND TO YOUR MOBILE NUMBER").show("show");
             		}
             		else
             		{
             			 $("#successMsg").hide();
             			 $("#erMsg").html("PASSWORD IS INVALID").show("show");
             		}
             		}
      
				});
		 }

});
$("#table").hide();

});

</script>
	
<div class="container">
<article class="clearfix form-center">
  <form class="form-inline text-center" id="searchForm"  role="form">
    <div class="form-group">
      
      <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Blood Groop">
    </div>
    <div class="form-group">
      <label class="in" for="city">In</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="Enter city Name">
    </div>

   <button type="button" id="searchBtn" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Get Me Donor</button>
  </form>
</article>
</div>
<div id=table class="ppInfo">		
	<table id="jsontable" >
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
<div id="login-popup" class="ppInfo mgrn-top width-mrgn">
<form name="form"  id="forgotForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
<span id="erMsg" style="display:none"> </span>
<span id="successMsg" style="display:none"> </span>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="password" id="forgotFor" class="form-control" name="forgotnumber" placeholder="Enter Mobile Number">
                    </div>                                                           
				
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="button" id="forgotButton" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i> Submit</button>                          
                        </div>
                    </div>
                    </form>
                    </div>
                    
            
                    
                 <div id="signup-popup" class="ppInfo">       <div class="container">
  
        <form role="form">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder=" Full Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
               
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Blood Group" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
                    </div>
                </div></div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Date of Birth" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                </div>
                
                
            </div>
          
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Mobile Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    </div>
                </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" city" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Sate">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div></div>
               </div>
               <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
         <textarea placeholder="Address"></textarea>
                
                </div>
                </div>
                
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
               
                <label class="radio-inline">
   				Gender:
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Female
    </label></div></div>
     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group"><div class="availability"> <span>Availability</span>
      <div class="btn-group btn-toggle">
    <button type="button" class="btn btn-lg btn-default active">yes</button>
    <button type="button" class="btn btn-lg btn-primary active">No</button>
  </div></div>
    </div></div>
    </div>
               <input type="button" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
        </form>
     
 
</div>
</div>
       

<?php 
include 'footer.php';
?>

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
	$("#userForm").validate({
		rules: {
			name: "required",
			number:"required",
			dob:"required",
			
			city: "required",
			state: "required",
			
			gender : "required",
			donation_status : "required",
			blood_group : "required",
			captcha : "required"
		},
		messages: {
			name: "Please enter your name",
			number:"Please enter your number",
			dob:"Please enter your dob",
			
			city: "Please select City",
			state: "Please select State",
			
			blood_group: "Please select Blood Group",
			donation_status: "Please select Donation Status",
			gender: "Please select Gender",
			captcha : "Please enter captcha"
				
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


$("#regbloodgroup").autocomplete(
		    {
		    minLength: 1,
		    source: function (request, response)
		    {
		    $.ajax(
		    {
		    	 url:url+'/search/bloodgroup',
		    	 type: "POST",
		        data: {bloodgroup:$('#regbloodgroup').val() },
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
$("#regcity").autocomplete(
		    {
		    minLength: 1,
		    source: function (request, response)
		    {
		    $.ajax(
		    {
		    	 url:url+'/search/city',
		    	 type: "POST",
		        data: {city:$('#regcity').val() },
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
$("#regstate").autocomplete(
	    {
	    minLength: 1,
	    source: function (request, response)
	    {
	    $.ajax(
	    {
	    	 url:url+'/search/state',
	    	 type: "POST",
	        data: {state:$('#regstate').val() },
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
$("#loginButton").click(function(){
	alert("jduwju");
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
				
				 $("#login-after-popup").bPopup();
				 }
			 else
				 {
					 $("#errorMsg").bPopup();
				 
     		}
     		}
		});
		
	}
	 
});
$("#regButton").click(function(){	
	
	
	if($("#userForm").valid()){
		var myID=$("#avil").find('.btn btn-lg btn-primary').val();
		
		 alert("hduwhu"+myID );
		//var status=$(this).attr('btn btn-lg btn-primary');
		//var status=$(".btn btn-lg btn-primary").val();
		//var userValues = $("#userForm").serialize()+'&donation_status='+status;
		
		 
		 var user = $("#userForm").serializeArray();
		 
			 $.ajax({
	            	type: 'POST',
	           		url: url+'/api/userDetails',
					dataType: 'json',
					 data:userValues,
	            	success: function(data)
                		{
	            		confirmCode = data.confirmation_code;
	            		userDetails = data;
	            		
	            		$('#otpForm').bPopup();
	            		
                		},
                		error: function(xhr, error){
                	        $("#errorMsg").html(xhr.responseText).show();
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
  <!-- forgot pwd end here -->
                    
 <!-- login after start here -->
         <div id="login-after-popup" class="ppInfo"> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
                <div class="form-group"><div class="availability"> <span>Availability</span>
      <div class="btn-group btn-toggle">
    <button class="btn btn-lg btn-default active">yes</button>
    <button class="btn btn-lg btn-primary ">No</button>
  </div></div>
    </div></div></div>
 <!-- login after End here -->
  <a href="#login-after-popup" class="login-after">Login-After</a>
 
  <!-- edit profile for user start here -->
  
         <div id="editprofile-popup" class="ppInfo"> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
<div class="">
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="active">
          <a href="#Edit-Account" role="tab" data-toggle="tab">
              Edit Account
          </a>
      </li>
      <li><a href="#changepwd" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i> Change Password
          </a>
      </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade active in" id="Edit-Account">
          <form>
           <div class="form-group"><div class="availability"> <span>Availability</span>
      <div class="btn-group btn-toggle">
    <button class="btn btn-lg btn-default active">yes</button>
    <button class="btn btn-lg btn-primary ">No</button>
  </div></div>
  
    </div>
       
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="edit-mobile-number" placeholder=" Edit Mobile Number" disabled required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
                    </div>
                    
                </div>
                       
                    <div class="form-group">
                     <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" city" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                <div class="form-group">
         <textarea placeholder="Address"></textarea>
                
                </div>
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
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
      <form>
             <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                              <input class="form-control" type="password" placeholder="Current Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
                              <input class="form-control" type="password" placeholder="New Password">
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
                              <input class="form-control" type="password" placeholder="Confirm Password">
                            </div>
                            </div>
                                   <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </form>
      </div></div>
    </div>
    
</div>








         
    </div></div>
  
    <!-- edit profile end here -->
    
    
  <!-- edit profile for Admin start here -->
  
         <div id="editprofile-popup1" class="ppInfo"> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
<div class="">
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="active">
          <a href="#add-member" role="tab" data-toggle="tab">
              Add Member
          </a>
      </li>
      <li><a href="#add-multiple-members" role="tab" data-toggle="tab">
          Add Multiple Members
          </a>
      </li>
          <li><a href="#edit-members" role="tab" data-toggle="tab">
        Edit Members
          </a>
      </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade active in" id="add-member">
          <!-- signup  start here -->
                 <div id="signup-popup1" class="">       <div class="container">
  
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
                        <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder=" Blood Group" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
                    </div>
                </div></div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" name="datepicker" id="datepicker" placeholder=" Date of Birth" required>
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
                        <input type="text" class="form-control" name="city" id="city" placeholder=" city" required>
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
    <button class="btn btn-lg btn-default active">yes</button>
    <button class="btn btn-lg btn-primary ">No</button>
  </div></div>
    </div></div>
    
    </div>
               <input type="button" id="Button"  value="Submit" class="btn btn-success pull-right">
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
      <div class="tab-pane fade" id="add-multiple-members"> <div class="container">
      <form>
             <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-file"></span></div>
                              <input class="form-control" type="file" />
                            </div>
                          </div>
                          
                         
                                   <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </form>
        </div></div>
                <div class="tab-pane fade" id="edit-members"> <div class="container">
          <form>
          <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>Full Name</span></div> 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>Mobile Number</span></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>Gender</span></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>Blood Group</span></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>city</span></div>   
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span>Edit</span></div>   
                          </div>
                          <hr>
                          
                                   <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      
   
    
</div><!-- edit Admin profile end here -->
 
 <!-- signup  start here -->
                 <div id="signup-popup" class="ppInfo">       <div class="container">
  
        <form  id="userForm" role="form">
        <span id="errorMsg" style="display:none"></span>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder=" Full Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
               
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="blood_group" id="regbloodgroup" placeholder=" Blood Group" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
                    </div>
                </div></div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" name="dob" id="dob" placeholder=" Date of Birth" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                </div>

                
            </div>
          
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="number" id="number" placeholder=" Mobile Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    </div>
                </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="city" id="regcity" placeholder=" city" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="state" id="regstate" placeholder=" Sate">
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
      <input type="radio" name="gender" value="M" >Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="F" >Female
    </label></div></div>
     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               
                <div class="form-group"><div class="availability"> <span>Availability</span>
      <div id="avil"class="btn-group btn-toggle">
   <button type="button" value="Y" id="status" name="donation_status" class="btn btn-lg btn-default active">yes</button>
    <button type="button" value="N" id="status" name="donation_status" class="btn btn-lg btn-primary ">No</button>
  </div></div>
    </div></div>
    
    </div>
               <input type="button"  id="regButton" value="Submit" class="btn btn-success pull-right">
        </form>
     
 
</div>
</div>
        <!-- signup  end here -->
<script>
$(document).ready(function(){
$("a.popup-window").click(function(){

	$('#login-popup').bPopup();
});

$("a.popup-window1").click(function(){

	$('#signup-popup').bPopup();
});

});
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

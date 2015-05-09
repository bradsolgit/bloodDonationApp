$(document).ready(function(){
	
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
	
	$("#regButton").click(function(){	
		
	
			if($("#userForm").valid()){
			
			 validateCaptcha($("#regCaptcha").val(),$("#regCaptcha").realperson('getHash'),saveUser);
			// var hash = $("#usrCaptcha").realperson('getHash');
			// var valid = "valid";
			
			}
	
		
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
	$("#otpForm").validate({
		rules: {
			otp: "required",
		},
		messages: {
			otp: "Please enter your name"
		}
	});
	$("#otpButton").click(function(){
		$("#invalidOtpMsg").hide();
		$.ajax({
        	type: 'POST',
       		url: url+'/validate/validateotp',
			dataType: 'json',
			 data: {otp:$("#otp").val(),number: userDetails.number},
        	success: function(data)
         		{
        		if(data == "Valid"){
					 $.ajax({
			            	type: 'POST',
			           		url: url+'/validate/validatestatus',
							dataType: 'json',
							 data: {user_id: userDetails.user_id},
			            	success: function(data)
	                     		{
			            		if(data == "Valid"){
									 
									 window.location="index.php";
									 }else{
										 $("#invalidOtpMsg").toggle("slow"); 
									 }
	                    		},
	                     		error: function(xhr, error){
	                     	        $("#errorMsg").html(xhr.responseText).show();
	                     		 }
							});
					
					 
					 }else{
						 $("#invalidOtpMsg").toggle("slow"); 
					 }
        		},
         		error: function(xhr, error){
         	        $("#errorMsg").html(xhr.responseText).show();
         		 }
			});
		});
	function saveUser(valid){
		
var status=$('.btn-primary-R .btn-primary ').val();
		
		alert("jhxj"+status)
		
		
		var userValues = $("#userForm").serialize()+'&donation_status='+status;
		alert("jhxj"+userValues)
	
		 
		 var user = $("#userForm").serializeArray();
		 if(valid === "Valid"){
			 $.ajax({
	            	type: 'POST',
	           		url: url+'/api/userDetails',
					dataType: 'json',
					 data: userValues,
	            	success: function(data)
                 		{
	            		confirmCode = data.confirmation_code;
	            		userDetails = data;
	            		$('#signup-popup').hide();
	            		$('#otpForm').show();
	            		
                 		},
                 		error: function(xhr, error){
                 	        $("#regerrorMsg").html(xhr.responseText).show();
                 		 }
					});
			 }else{
				 $("#regcaptchaMsg").html("Invalid Captcha").show("show");
			}
	}


});
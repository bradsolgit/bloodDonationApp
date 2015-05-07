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
			var myID=$("#avil").find('.btn btn-lg btn-primary').val();
			
			 //alert("hduwhu"+myID );
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


});
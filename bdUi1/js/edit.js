jQuery(document).ready(function($) {
	
	$("#resetPasswordForm").validate({
		rules: {
			
			oldPassword: {
				required: true,
				minlength: 5
			},
			newPassword: {
				required: true,
				minlength: 5,
				
			},
			confirmPassword: {
				required: true,
				equalTo: '#newPassword'
				
			},
			
		},
		messages: {
			
			oldPassword: {
				required: "Please enter oldpassword",
				minlength: "Your enter a valid oldpassword"
			},
			newPassword: {
				required: "Please enter newpassword",
				minlength: "Your enter a valid newpassword"
				
			},
			
			confirmPassword: {
				required: "Please enter confirmpassword",
				
				
			},
		}
	});
	$("#editForm").validate({
		rules: {
			
			editcity: {
				required: true,
			
			},
			
			
		},
		messages: {
			
			editcity: {
				required: "Please enter vity",
				
			},
			
		}
	});
	var number = sessionStorage.getItem("loginnumber");
	var frm = $("#editForm");
	$.ajax({
        type: 'GET',
        url: url+'/user/number/'+number,
		dataType: 'json',
        success: function(data)
          {
        	
        	userDetails = data;
        	$("#editForm #number").val(data['number']);
        	$("#editForm #editcity").val(data['city']);
        	$("#editForm #address").val(data['address']);
        	if(data["donation_status"] == "Y"){
        		$("#editForm #yesBtn").addClass("btn-primary");
        		$("#editForm #noBtn").removeClass("btn-primary");
        		$("#editForm #noBtn").addClass("btn-default");
        	}else{
        		$("#editForm #noBtn").addClass("btn-primary");
        		$("#editForm #yesBtn").removeClass("btn-primary");
        		$("#editForm #yesBtn").addClass("btn-default");
        	}
        	
			}
 		});
	
	function setValues(){
		$("#editcity").val(userDetails.city);
	   $("#district").val(userDetails.district);
	   $("#state").val(userDetails.state);
	   $("#area").val(userDetails.area);
	   $("#blood_group").val(userDetails.blood_group);
	   $("#status").val(userDetails.donation_status);
	   $(".gender").val(userDetails.gender);
	}
	
	$("#resetButton").click(function(){	
	
		if($("#resetPasswordForm").valid()){
		var number=sessionStorage.getItem("loginnumber")
				var password=$("#newPassword").val();
		var oldpassword=$("#oldPassword").val();
		
	
				 $.ajax({
		            	type: 'POST',
		           		url: url+'/user/resetPassword/'+number,
						dataType: 'json',
						data: {password:password,oldpassword:oldpassword},
		            	success: function(data)
                     		{
		            		
		            		 window.location="index.php";
		            		 alert("your password changed successfully ")
		            		
                     		},
                     		error: function(xhr, error){
                     		
                     	        $("#reseterrMsg").html("Inavakid  Old Password").show();
                     		 }
						});
			
		}

});
	$("#updteNum").click(function(){	
		if(confirm("Do you want to change the mobile number?")){
			$("#editprofile-popup").bPopup().close();
			$("#numForm").bPopup();
			}
		
	});
	$("#editcity").autocomplete(
		    {
		    minLength: 1,
		    source: function (request, response)
		    {
		    $.ajax(
		    {
		    	 url:url+'/search/city',
		    	 type: "POST",
		        data: {city:$('#editcity').val() },
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
	$("#updateBtn").click(function(){	
		alert("hbwhjs");
		if($("#editForm").valid()){
			
		var userValues = $("#editForm").serialize();
		 $.ajax({
           	type: 'POST',
          		url: url+'/user/update/'+userDetails.user_id,
				dataType: 'json',
				 data: userValues,
           	success: function(data)
            		{
           		userDetails = data;
           		 $("#editerrorMsg").html("Invalid Captcha").hide();
           		  $("#editerrorMsg").html("UPDATED SUCEESSFULLY").show();
           		
            		},
            		error: function(xhr, error){
            	        $("#editerrorMsg").html(xhr.responseText).show();
            		 }
				});
	
	}
	});

});



























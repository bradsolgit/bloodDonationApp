/**
 * 
 */
$(document).ready(function(){
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
	
	
	$("#forgotButton").click(function(){	
		
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

});
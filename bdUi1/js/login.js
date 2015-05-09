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
					 sessionStorage.setItem("loginnumber", $("#loginnumber").val());
//					 if(data["donation_status"] == "Y"){
//			        		$("#login-after-popup #yesBtn").addClass("btn-primary");
//			        		$("#login-after-popup #noBtn").removeClass("btn-primary");
//			        		$("#login-after-popup #noBtn").addClass("btn-default");
//			        	}else{
//			        		$("#login-after-popup #noBtn").addClass("btn-primary");
//			        		$("#login-after-popup #yesBtn").removeClass("btn-primary");
//			        		$("#login-after-popup #yesBtn").addClass("btn-default");
//			        	}
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
	        captcha:{
	        	 required: true,
	        }
		
		},
		messages: {
		
		
			forgotnumber: {
				required: "Please enter number",
				minlength: "Your enter a valid number"
			},
			captcha: {
				required: "Please enter captcha",
				
			},
		}
	});
	

	$(".AVIL").click(function(){
		
	
		
		var value = this.value;
		var number=sessionStorage.getItem("loginnumber");
		
			 $.ajax({
	            	type: 'POST',
	           		url: url+'/validate/donationstatus',
					dataType: 'json',
					 data: {number:number,value:value},
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
		
		
		
		
		
		
		
		
	});
	
	$("#forgotButton").click(function(){	
	
		if($("#forgotForm").valid()){
		
		 validateCaptcha($("#forgotCaptcha").val(),$("#forgotCaptcha").realperson('getHash'),forgotUser);
		// var hash = $("#usrCaptcha").realperson('getHash');
		// var valid = "valid";
		
		}
	});
	function forgotUser(valid){
			
		 
		
		 if(valid === "Valid"){
			 var number=$("#forgotnumber").val();
			 $.ajax({
	            	type: 'POST',
	            	   url: url+'/sendPASSWORD/'+number,
	                   data: {number: number},
					dataType: 'json',
					 
	            	success: function(data)
                		{
	            		 $("#erMsg").hide();
	            		 $("#successMsg").html("PASSWORD IS SEND TO YOUR MOBILE NUMBER").show("show");
	            		
                		},
                		error: function(xhr, error){
                	        $("#erMsg").html(xhr.responseText).show();
                		 }
					});
			 }else{
				 $("#erMsg").html("Invalid Captcha").show("show");
			}
	}
	

});
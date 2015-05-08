jQuery(document).ready(function($) {


	$("#resetButton").click(function(){	
		alert("jhdhqwu");
		
				var password=$("#newpassword").val();
				 $.ajax({
		            	type: 'POST',
		           		url: url+'/user/resetPassword/'+$("#number").val(),
						dataType: 'json',
						data: {password:password},
		            	success: function(data)
                     		{
		            		
		            		 window.location="registerDonor.php";
		            		
                     		},
                     		error: function(xhr, error){
                     			$("#OtpMsg").hide(); 
                     	        $("#errMsg").html(xhr.responseText).show();
                     		 }
						});
			
			

});

});



























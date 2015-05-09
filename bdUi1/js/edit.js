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
	var number = sessionStorage.getItem("loginnumber");
	var frm = $("#editForm");
	$.ajax({
        type: 'GET',
        url: url+'/user/number/'+number,
		dataType: 'json',
        success: function(data)
          {
        	
        	userDetails = data;
        	
        
        	getStateValues();
        	getBloodGroupValues();
        	getDistrictValues(data["state"]);
        	getCityValues(data["district"]);
        	getAreaValues(data["city"],setValues);
              	 $.each(data, function(key, value){
				   // $('[name='+key+']', frm).val(value);
              		var $ctrl = $('[name='+key+']', frm); 
              		
              	    if($ctrl.is('select')){
              	       
              	    }
              	    else {
              	        switch($ctrl.attr("type"))  
              	        {  
              	            case "text" :    
              	                $ctrl.val(value);   
              	                break;
              	          case "email" :    
              	                $ctrl.val(value);   
              	                break;
              	          case "hidden": 
              	        	   $ctrl.val(value);
              	        		break;
              	          case "textarea":
              	        	   $ctrl.val(value);
              	      
              	        
              	            case "radio" : case "checkbox":   
              	                $ctrl.each(function(){
              	                   if($(this).attr('value') == value) {  $(this).attr("checked",value); } });   
              	                break;
              	        } 
              	    }
              	  
				  });
              	$("#address").val(data["address"]);
			}
 		});
	
	function setValues(){
		$("#city").val(userDetails.city);
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

			$("#numForm").bPopup();
			}
		
	});

});



























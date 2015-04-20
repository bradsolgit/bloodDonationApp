/**
 * 
 */
url = 'http://localhost/bdApp/index.php';


function validateCaptcha(captcha){
	$.ajax({
    	type: 'POST',
   		url: url+'/validate/captcha',
		dataType: 'json',
		 data: {captcha: captcha},
    	success: function(data)
     		{
    		if(data === captcha){
    			return "valid";
    		}else{
    			return "invalid";
    		}
    		},
     		error: function(xhr, error){
     	        
     		 }
		});
}

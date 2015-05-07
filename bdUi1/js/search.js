$(document).ready(function(){
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


$("#searchBtn").click(function(){	
	var oTable = $('#jsontable').dataTable();
	 
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
});
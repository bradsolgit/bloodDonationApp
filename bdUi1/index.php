<?php 

include 'header.php';
?>

<div class="container">
<article class="clearfix form-center">
  <form class="form-inline text-center" role="form">
    <div class="form-group">
      
      <input type="text" class="form-control" id="MbNumber" placeholder="Blood Groop">
    </div>
    <div class="form-group">
      <label class="in" for="city">In</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city Name">
    </div>

   <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Get Me Donor</button>
  </form>
</article>
</div>

<div id="login-popup" class="ppInfo mgrn-top width-mrgn">
<form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input id="text" type="password" class="form-control" name="mbnumber" placeholder="Enter Mobile Number">
                    </div>                                                           
				
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit"  class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i> Submit</button>                          
                        </div>
                    </div>
                    </form>
                    </div>
            
                    
                 <div id="signup-popup" class="ppInfo">       <div class="container">
  
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
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Blood Group" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
                    </div>
                </div></div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" Date of Birth" required>
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
                        <input type="text" class="form-control" name="BloodGroup" id="InputName" placeholder=" city" required>
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
               <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
        </form>
     
 
</div>
</div>
       
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

$('form').submit(function(){
	alert($(this["options"]).val());
    return false;
});
</script>
<?php 
include 'footer.php';
?>

<?php

?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->

<!DOCTYPE html>
<html>
<head>
<title>Donor Health Check for new and returning donors</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<?php 

include 'header.php';
?>
	<div class="blog">
	<div class="container">
<div class="row magin-top">
<div class="left-ads col-lg-2 col-md-2 col-xs-12"><img src="images/side-bg.jpg" class="img-responsive" alt="logo"/></div>
<div class="sap_tabs col-lg-8 col-md-8 col-xs-12 ">
<div class="bs-example">
    <div class="panel-group" id="accordion">
     <form class="sign simple-form" id="donorfaq" name="donorfaq" >
     <h2 class="dfaq-title">Donor Health Check for new and returning donors</h2>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Are you </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
          <p>Feeling healthy and well today? </p>
    <label class="radio-inline">
      <input type="radio" name="fh">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="fh">Yes
    </label>
  </div>
                          <div class="panel-body">
          <p>Currently taking an antibiotic? </p>
    <label class="radio-inline">
      <input type="radio" name="antibiotic">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="antibiotic">Yes
    </label> </div>
                          <div class="panel-body">
          <p>Currently taking any other medication for an infection? </p>
    <label class="radio-inline">
      <input type="radio" name="mfi">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="mfi">Yes
    </label>
  
  
                </div>
            </div>
        </div>
  
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo">In the past 48 hours </a>
                </h4>
            </div>
            <div id="collapsetwo" class="panel-collapse collapse">
                         <div class="panel-body">
          <p>Have you taken aspirin or anything that has aspirin in it? </p>
    <label class="radio-inline">
      <input type="radio" name="aspirin">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="aspirin">Yes
    </label>
 </div>
      
         
            </div>
            </div>
               <div class="panel panel-default">
  <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">In the past 8 weeks</a>
                </h4>
            </div>
                <div id="collapseThree" class="panel-collapse collapse">
                         <div class="panel-body">
          <p>Donated blood, platelets or plasma?  </p>
    <label class="radio-inline">
      <input type="radio" name="dbpp">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="dbpp">Yes
    </label>
 		</div>
 		<p>
  	</div>
  </div>
              <div class="panel panel-default">
  <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">In the past 16 weeks </a>
                </h4>
            </div>
                <div id="collapsefour" class="panel-collapse collapse">
                         <div class="panel-body">
          <p> Have you donated a double unit of red cells using an apheresis machine? </p>
    <label class="radio-inline">
      <input type="radio" name="redcell">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="redcell">Yes
    </label>
 		</div>
 		<p>
  	</div>
  </div> 
  <div class="panel panel-default">
  <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">In the past 12 months have you </a>
                </h4>
            </div>
            <div id="collapsesix" class="panel-collapse collapse">
 		                         <div class="panel-body">
          <p class="even1">1. Had a blood transfusion?  </p>
    <label class="radio-inline">
      <input type="radio" name="btfusion">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="btfusion">Yes
    </label>
              <p class="odd1">2.  Had a transplant such as organ, tissue, or bone marrow? </p>
    <label class="radio-inline">
      <input type="radio" name="transplant">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="transplant">Yes
    </label>
    <p class="even1">3. Had a graft such as bone or skin? </p>
        <label class="radio-inline">
      <input type="radio" name="graft">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="graft">Yes
    </label>
    <p class="odd1">4. Had an accidental needle-stick? </p>
          <label class="radio-inline">
      <input type="radio" name="needle-stick">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="needle-stick">Yes
    </label>
    <p class="even1">5. Had sexual contact with anyone who has HIV/AIDS or has had a  positive test for the HIV/AIDS virus?</p>
         <label class="radio-inline">
      <input type="radio" name="schiv">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="schiv">Yes
    </label>
    <p class="odd1">6. Had sexual contact with a prostitute or anyone else who takes money or drugs or other payment for sex?</p>
           <label class="radio-inline">
      <input type="radio" name="scprostitute">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="scprostitute">Yes
    </label>
    <p class="even1">7. Had sexual contact with anyone who has hemophilia or has used  
clotting factor concentrates?</p>
        <label class="radio-inline">
      <input type="radio" name="hemophilia">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="hemophilia">Yes
    </label>
    <p class="odd1">8. Female donors: Had sexual contact with a male who has ever had I am sexual contact with another male? (Males: check “I am male.”) </p>
      <label class="radio-inline">
      <input type="radio" name="fscam">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="fscam">Yes
    </label>
<p class="even1">9. Had sexual contact with a person who has hepatitis? </p>
      <label class="radio-inline">
      <input type="radio" name="hepatitis">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="hepatitis">Yes
    </label>
    <p class="odd1">10. hepatitis with a person who has hepatitis? </p>
       <label class="radio-inline">
      <input type="radio" name="lwh">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="lwh">Yes
    </label>
    </div>
 		</div>
        
        <input class="bluebutton faq-donor" id="donorfaq" type="button" value="Login" /> 
        </form>
    </div>
</div>
</div></div>
		        <div class="ads-right col-lg-2 col-md-2 col-sm-2 col-xs-12 "><img src="images/side-bg.jpg" class="img-responsive" alt="logo"/></div>
	</div>
	<div style="clear:both;"></div>
			</div>
			</div>
<?php 
include 'news.php';
?>

<?php 
include 'footer.php';
?>
</body>
</html>
<?php

?>

<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="footer-navg navg">
			<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="searchDonor.php">SEARCH DONOR</a></li>
<li><a href="bloodRequirement.php">REQUEST FOR BLOOD</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="contact.php">CONTACT US</a></li>

</ul>
			</div>
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<h3>FOLLOW US</h3>
				<ul>
					<li><a href="#"><span class="a"> </span></a></li>
					<li><a href="#"><span class="b"> </span></a></li>
					<li><a href="#"><span class="c"> </span></a></li>
				</ul>
				</div>
				<div class="col-md-4 footer-middle">
					<span id="erMsg" style="display: none;"></span>
					<h3>NEWS LETTER</h3>
					
					<input type="text" id="email"  value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}"/>
					<input type="submit" id="Subscribe" value="Subscribe">
				</div>
				<div class="col-md-4 footer-right">
					<h3>Contact us</h3>
					<p>Address : 8-2-248/A, First Floor,</p>
					<p>Maharishi House, Road No. 3,</p>
					<p>Banjara Hills,Hyderabad-500034</p>
				</div>
			<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Designed By  <a href="http://bradsol.com/">BRADSOL </a> </p>
			</div>
		<div class="clearfix"> </div>
		<script type="text/javascript">
$(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.navg a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});</script>
			<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											$("#Subscribe").click(function(){
												var email=$("#email").val();
												 $.ajax({
										            	type: 'POST',
										           		url: url+'/user/resetPassword/'+$("#number").val(),
														dataType: 'json',
														data: {email:email},
										            	success: function(data)
								                     		{
										            		
										            		 window.location="index.php";
										            		
								                     		},
								                     		error: function(xhr, error){
								                     			
								                     	        $("#erMsg").html(xhr.responseText).show();
								                     		 }
														});
												
												
											
												
							            		
											});
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>
<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
		
<!--/footer end here-->
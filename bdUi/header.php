<?php

?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.realperson.css"> 
<link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/constants.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.realperson.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
	if(sessionStorage.getItem("login") === "null"){
		$("#dd").hide();
		$("#loginLink").show();
	}else{
		$("#dd").show();
		$("#loginLink").hide();
	}
	$(".captcha").realperson({chars: $.realperson.alphanumeric});
	
	$("#signOut").click(function(event){
		sessionStorage.setItem("login", "null");
		 sessionStorage.setItem("number", "null");
		 window.location="index.php";
	});
});
</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="mothergrid">
<div class="container">
<div class="header row">
<div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-12">
<a href="index.php"> <img src="images/logo.png" class="img-responsive" alt="logo"/> </a>
</div>
<div class="header-ads col-lg-9 col-md-9 col-sm-9 col-xs-12 "><img src="images/header-ads.jpg" class="img-responsive" alt="banner"/></div>
			<span class="menu mobile-menu"> <img src="images/icon.png" alt=""/></span>
<div class="menu-bs col-lg-1 col-md-1 col-sm-1 col-xs-12"><!--banner start here-->
				<div id="dd" class="wrapper-dropdown-2" tabindex="1"><span>menu <img src="images/menu.png"/></span>
							<ul class="dropdown">
							
									<li><a href="editDonor.php">Edit Personal Details <span class="icon"> </span></a></li>
									<li><a href="editDonor.php">Reset Password<span class="icon stat"> </span></a></li>
									<li><a href="#" id="signOut">Sign out<span class="icon signout"> </span></a></li>
							</ul>
					</div>
</div>

<div class="clear"> </div>
<div class="navg">
<ul class="res">
<li><a class="active" href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="searchDonor.php">SEARCH DONOR</a></li>
<li><a href="bloodRequirement.php">REQUEST FOR BLOOD</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li id="loginLink"><a href="registerDonor.php">LOGIN/REGISTER</a></li>
</ul>
<script>
$( "span.menu").click(function() {
	$(  "ul.res" ).slideToggle("slow", function() {
		// Animation complete.
	});
});
</script>
 
</div>
<!-----start-wrapper-dropdown-2---->

<div class="clearfix"> </div>
</div>
</div>
</div>
<!--heder end here-->



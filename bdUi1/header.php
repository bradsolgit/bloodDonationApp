<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donation App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bpopup.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/css.css" type="text/css" />
</head>
<body>
<div class="header-fullwidth">
<div class="row">
<div class="container">
<header class="hbgcolor">
<div class="clearfix">
<div class="logo pull-left"><h1>Logo Name</h1></div><div class="pull-right hrmtop"><a href="#" class="loginform">login</a><a href="#signup-popup" class="popup-window1">Register</a><div class="loginform-dsplay"><form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="user" value="" placeholder="User">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  
					<div class="input-group"><span><a href="#login-popup" class="popup-window">forgot password</a></span></div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>

                </form>   </div></div></div>
</div>
</header>
</div>
</div>
</div>
<script>
$(document).ready(function(){
    $(".loginform").click(function(){
        $(".loginform-dsplay").slideToggle("slow");
    });
});
</script>
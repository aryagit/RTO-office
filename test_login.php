<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" ><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="description" content="dot net templates  | aspxtemplates.com" /><meta name="author" content="aspxtemplates.com" />
    <!-- Bootstrap Core CSS -->
    <title>
	Akshara Portfolio - Bootstrap Template
</title><link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet" /><link href="css/owl/owl.carousel.css" rel="stylesheet" type="text/css" /><link href="css/owl/owl.theme.css" rel="stylesheet" type="text/css" /><link href="css/owl/owl.transitions.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet" type="text/css" /><link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" rel="stylesheet" type="text/css" />
    <!-- Required plugin - Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" /><link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  

    
</head>
<body>
    

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-diamond"></i>Akshara</a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav navbar-right">
                    <li id="ctl00_home"><a href="index.aspx.html">Home</a></li>
                    <li id="ctl00_service"><a href="services.aspx.html">Services</a></li>
                    <li id="ctl00_portfolio"><a href="portfolio.aspx.html">Portfolio</a></li>
                    <li id="ctl00_blog" class="dropdown"><a href="blog.aspx.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span id="ctl00_Span1" class="caret"></span></a>
                        <ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li><a href="#">blog-1</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li id="ctl00_contact"><a href="contact.htm">Contact</a></li>
                    <li>
                        <!-- add search form -->
                        <div class="navbar-form" role="search">
                            <div class="input-group">
                                <input name="ctl00$txtsearch" type="text" id="ctl00_txtsearch" placeholder="Search this site" class="form-control" />
                                <span class="input-group-btn">
                                    <a id="ctl00_lbsearch" title="Search" class="btn btn-default" href="javascript:__doPostBack('ctl00$lbsearch','')"><i class="glyphicon glyphicon-search"></i></a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li id="ctl00_login"><a href="login.php">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<div class="container-fluid">
        
    <div class="padding100">
        <div class="container">
	<form name="formlogin" method="post" action="userprocess.php" >
 <div id="loginbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-custom">
                        <div class="panel-title">
                            Sign In</div>
                    </div>
                    <div style="padding-top: 30px" class="panel-body">
                        <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12">
                        </div>
                        <div id="loginform" class="form-horizontal" role="form">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="txtemail" type="text" id="ctl00_ContentPlaceHolder1_username" class="form-control" placeholder="username or email" />
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="txtpassword" type="password" id="ctl00_ContentPlaceHolder1_password" class="form-control" placeholder="password" />
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="ctl00_ContentPlaceHolder1_CheckBox1" type="checkbox" name="remember" /><label for="ctl00_ContentPlaceHolder1_CheckBox1">Remember me</label>
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top: 10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input type="submit" name="login" value="Login" id="ctl00_ContentPlaceHolder1_Button1" class="btn btn-success" />
									
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="padding-top: 15px; font-size: 85%">
                                        Don't have an account! <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</form>		
	<form action="" method="post">
<div id="signupbox" style="display: none; margin-top: 50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-custom">
                        <div class="panel-title">
                            Sign Up</div>
                        <div style="float: right; font-size: 85%; position: relative; top: -10px">
                        </div>
                    </div>
					
                    <div class="panel-body">
                        <div id="signupform" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">
                                    Email</label>
                                <div class="col-md-9">
                                    <input name="txtemail" type="text" id="ctl00_ContentPlaceHolder1_txtemail" class="form-control" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">
                                    First Name</label>
                                <div class="col-md-9">
                                    <input name="txtfname" type="text" id="ctl00_ContentPlaceHolder1_TextBox1" class="form-control" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">
                                    Last Name</label>
                                <div class="col-md-9">
                                    <input name="txtlname" type="text" id="ctl00_ContentPlaceHolder1_TextBox2" class="form-control" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">
                                    Password</label>
                                <div class="col-md-9">
                                    <input name="txtpass" type="password" id="ctl00_ContentPlaceHolder1_TextBox3" class="form-control" placeholder="Password" />
                                </div>
                            </div> 
							<div class="form-group">
                                <label for="password" class="col-md-3 control-label">
                                    Confirm Password</label>
                                <div class="col-md-9">
                                    <input name="txtconfirmpass" type="password" id="ctl00_ContentPlaceHolder1_TextBox3" class="form-control" placeholder="Password" />
                                </div>
                            </div> 							
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <input id="btn-signup" type="submit" name="signup" value="sign up" class="btn btn-info">
									
                                        
                                </div>
                            </div>
                        </div>
                </div>
				
            </div>
        </div>
</form>		
</div>
    </div>

    </div>
    <footer id="fh5co-footer" class="padding100">
			
			<div class="fh5co-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-push-3 animated wow fadeInLeft" data-wow-delay="0.2s">
							<h3 class="fh5co-lead">About</h3>
							<ul>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Company</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">New Features</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3 animated wow fadeInLeft" data-wow-delay="0.4s">
							<h3 class="fh5co-lead">Support</h3>
							<ul>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3 animated wow fadeInLeft" data-wow-delay="0.6s">
							<h3 class="fh5co-lead">More Links</h3>
							<ul>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Frequently Ask Questions</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>

						<div class="col-md-3 col-sm-12 col-md-pull-9 animated wow fadeInLeft" data-wow-delay="0.8s">
							<div class="fh5co-footer-logo"><a href="index.html">Akshara</a></div>
							<p class="fh5co-copyright"><small>&copy; 2016. All Rights Reserved. <br>	by <a href="http://aboostrap.com/" target="_blank">aspxtemplates.com</a> Images: <a href="../../../index.html" target="_blank">Pexels</a></small></p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</p>
						</div>
						 
					</div>
				</div>
			</div>
		</footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    <script src="js/tutorial.js"></script>
    <script src="css/owl/owl.carousel.js" type="text/javascript"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
    <script src="js/contact.js" type="text/javascript"></script>
						
						<?php	
if (isset ($_POST["signup"]))
	{
		$fname=$_POST["txtfname"];
		$lname=$_POST["txtlname"];
		$email=$_POST["txtemail"];
		$pass=$_POST["txtpass"];
		$id=100;
		$s=mysqli_query($con,"select * from signup order by id desc");
		while($row=mysqli_fetch_array($s))
		{
			$id=$row[0];
			break;
		}
		$id++; 
		$s="insert into signup values($id,'$email','$fname','$lname','$pass')";
		mysqli_query($con,$s);
		echo sucess;
	}						
	/*if (isset ($_POST["login"]))
	{	
		$email=$_POST["txtemail"];
		$password=$_POST["txtpassword"];
		$sq="select * from signup where email='$email'and password='$password';";
		echo $sq;
			$res=mysqli_query($con,$sq);
				if(mysqli_num_rows($res)>0)
				{
					
				$_SESSION["email"]=$email;
					//header('location:userprocess.html');
				}
				else
				{
					//echo "invalid user";
					header('location:login.php');
				}
	}*/
						?>
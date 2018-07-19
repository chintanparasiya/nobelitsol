<?php 
if(!isset($_SESSION)){
	session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nobel-IT Solutions & Development</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
            <link rel="icon" href="images/nobelitsol_favicon.png">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="web develop" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index"><img src="images/logo.jpg" height="90" width="350" alt="Nobel-IT Solutions & Development"/></a>
		</div>
		<div class="search">
			<form>
				<input type="search" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search';}" required>
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation">
	<div class="container">
		<nav class="navbar navbar-default">
		 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="<?php echo $home;?>"><a href="index">Home <span class="sr-only">(current)</span></a></li>
				<li class="<?php echo $about;?>"><a href="about">About</a></li>
				<li class="<?php echo $portfolio;?>"><a href="portfolio">Portfolio</a></li>
				<li class="<?php echo $services;?>"><a href="services">Services</a></li>
				<li class="<?php echo $training;?>"><a href="training">Training</a></li>
				<li class="<?php echo $clients;?>"><a href="clients">Clients</a></li>
				<li class="<?php echo $contact;?>"><a href="contact">Contact Us</a></li>
				<?php 
				if(@$_SESSION["id"]=="")
				{?>
					<li class="<?php echo $login;?>"><a href="login">Login</a></li>
				<?php
                }
				else
				{?>
                	<li class="<?php echo $stud_portfolio;?>"><a href="stud_portfolio">Cources</a></li>
                    <li class="<?php echo $example;?>"><a href="example">Example</a></li>
					<li><a href="Logout">Logout</a></li>
                <?php    
				}
				?>
			  </ul>
			  <div class="social-icons">
				<ul>
					<li><a href="http://www.twitter.com/webdevelop" target="_blank" class="twi"></a></li>
					<li><a href="http://www.facebook.com/chintanparasiya" target="_blank" class="fb"></a></li>
					<li><a href="http://www.google.plus.com/webdevelop" target="_blank" class="chec"></a></li>
				</ul>
			  </div>
			  <div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
<!-- //navigation -->
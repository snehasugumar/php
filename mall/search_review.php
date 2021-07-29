<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>	
	<title>viewreviews</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body>
<?php

/*
 * Following code will list all the products
 */



// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

?>
<div class="wrapper style1">
			

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html"></a></h1>
							<span class="tag"></span>
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="index.php">Homepage</a></li>
								<li><a href="menu.php">AddingLocation</a></li>
								
								
								<li><a href="index.php">Logout</a></li>
								
							</ul>
						</nav>
					</div>
					

				<!-- Banner -->
					<div id="banner" class="container">
						<section style="background-color:#D84780;height:100px;">
	
						 <h1 style="font-size:50px;"></h1><br><br>
						 <h1 style="font-size:50px;">SHOPPING MALL</h1>
						  <div id="sidebar" >
								
								
							</div>
							
					     
						</section>
					</div>

				<!-- Extra -->
					

				<!-- Main -->
					
	<!-- Footer -->
		
			<div class="container">
			
			<div style="width:500px;height:400px;background-color:#f2c0d3;margin-left:250px;">
				<section id="content" class="content2">
				<form method="POST" action="search_result.php">
				         <div class="row half">
							<div style="margin-left:120px;width:250px;margin-top:50px;font-size:20px;">
								  <strong>shop name: </strong>
							</div>
						     </div>
					     
						<div >
							<div style="margin-left:60px;margin-top:65px;width:250px;">
							
								
								  <input class="sub" name="searchtxt" type="text" id="search" placeholder="Name">
								<div style="margin-left:30px;margin-top:65px">
								
								 <input class="button alt" type="submit" value="View Details" id="button" name="searchbtn">
								</div>

							</div>
						</div>
					
						</form>
						
					
				</section>
			</div>
		</div>
		

	<!-- Copyright -->

	  </div>
              
		
	<div style="background-color:#D84780;
    height:200px;width:1360px;">
 
</form>
</body>
</html>





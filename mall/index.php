<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MALL</title>
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

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html"></a></h1>
							<span class="tag"></span>
						</div>
						<nav id="nav">
							<ul>
								
							</ul>
						</nav>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section style="background-color:#D84780;height:100px;">
	
						 <h1 style="font-size:50px;"></h1><br><br>
						 <h1 style="font-size:50px;">SHOPPING MALL</h1>
							
					     
						</section>
					</div>

				<!-- Extra -->
					

				<!-- Main -->
					
	<!-- Footer -->
		 <?php

/*
 * Following code will get single product details
 * A product is identified by product id (pid)
 */

// array for JSON response
$response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

// check for post data
if(isset($_POST['btn_submit'])){
$usname = $_POST['uname'];
$passw = $_POST['pass'];
    // get a product from products table
    $result = mysql_query("SELECT *FROM admin WHERE username = '$usname' and password='$passw'");

    
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {

            $result1 = mysql_fetch_array($result);

            
         

            // echoing JSON response
            echo json_encode($response);
			header("location:menu.php");
        } else {
            // no product found
            
           

            // echo no users JSON
            echo json_encode($response);

			
        }
    } 
} 
?>
			<div class="container">
			<div style="width:500px;height:300px;background-color:#f2c0d3;margin-left:250px;">
				<section>
					<header class="major">
					<h1 style="font-size:30px;"></h1><br><br>
						<h1 style="font-size:30px;margin-left:140px">ADMIN LOGIN</h1>
						<span class="byline"></span>
					</header>
					<form method="post" action=" ">
						<div class="row half">
							<div style="margin-left:60px;width:250px;">
								<input class="text" type="text" name="uname" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:60px;width:250px;">
								<input class="text" type="text" name="pass" id="password" placeholder="password" />
							</div>
						</div>
						
						<div class="row half">
							<div style="margin-left:120px;width:250px;">
								<ul class="actions">
									<li>
										<input type="submit" name="btn_submit" value="LOGIN" class="button alt" />
									</li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>

	<!-- Copyright -->
		
<div style="background-color:#D84780;
    height:100px;width:960px;margin-top:90px;margin-left:150px">
			
				
					
				
			
		</div>
	</body>
</html>
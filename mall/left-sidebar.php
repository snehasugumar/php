<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>FOODLOCATION</title>
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
								<li class="active"><a href="index.html">Homepage</a></li>
								<li><a href="updatinglocation.html">AddingLocation</a></li>
								<li><a href="updatingoffer.html">Updatingoffer</a></li>
								<li><a href="viewreviews.html">Viewreviews</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					<div id="page" class="container">
						<div class="row">
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
										<h2>Shops in food court</h2>
									</header>
									<div class="row half">
										<section class="6u">
											<ul style="margin-top:70px;">
												<li><img src="images/pic10.jpg" alt=""></li>
												
											</ul>
										</section>
										
									</div>
								</section>
								
							</div>
							<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['name'])&& isset($_POST['sno'])  && isset($_POST['on']) && isset($_POST['cno'])&& isset($_POST['fno']) ) {
    
    $name = $_POST['name'];
	  $name1 = $_POST['sno'];
	  $name2 = $_POST['on'];
	  $name3 = $_POST['cno'];
	  $name4 = $_POST['fno'];
	 

    // include db connect class
    require_once 'db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO products5(shopname,shopno,owner,contact,floorno) VALUES('$name','$name1','$name2','$name3','$name4')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        //$response["success"] = 1;
        //$response["message"] = "Product successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
       // $response["success"] = 0;
      //  $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
   // $response["success"] = 0;
//    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>Add Location for FoodShops</h2>
										<form method="post" action="#">
					<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Shop name: </strong>
							</div>
						</div>
					     
						<div class="row half">
							<div style="margin-left:0px;margin-top:0px;width:250px;">
								<input class="text" type="text" name="name" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>ShopNo: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="sno" id="ShopNo" placeholder="ShopNo" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>OwnerName: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="on" id="OwnerName" placeholder="OwnerName" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Contact No: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="cno" id="Contact No" placeholder="Contact No" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>FloorNo: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="fno" id="date" placeholder="FloorNo" />
							</div>
						</div>
						
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="submit" name="submit"  />
							</div>
						</div>
						
					</form>
										
									</header>
									
								</section>
							</div>
		
						</div>
					</div>
				<!-- /Page -->

				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row"> 
								
								<!-- Content -->
								
								
							</div>
						</div>
					</div>
				<!-- /Main --> 

	</div>
<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container">
				
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
	

	</body>
</html>
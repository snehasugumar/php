
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
	
	
	$sname = $_POST['sname'];
	
	$flo_no = $_POST['flo_no'];
	$shop_no = $_POST['shop_no'];
	$owner = $_POST['owner'];
	$contact = $_POST['contact'];
	
		
	// checking empty fields
	
		//insert data to database	
	mysql_query("INSERT INTO products5(shopname,floorno,shopno,owner,contact) VALUES('$sname','$flo_no','$shop_no','$owner','$contact')");
		
		//display success message
		
	
}
?>
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
									<li class="active"><a href="index.php">Homepage</a></li>
								<li><a href="menu.php">AddingLocation</a></li>
								
								<li><a href="search_review.php">Viewreviews</a></li>
								<li><a href="index.php">Logout</a></li>
								
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
										<h2>FOODCOURT </h2>
									</header>
									<div class="row half">
										<section class="6u">
											<ul  style="margin-top:90px;">
												<li><img src="images/pic10.jpg" height="500"alt=""></li>
												
											</ul>
										</section>
										
									</div>
								</section>
								
							</div>
							
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>Add Location for FoodShops</h2>
										<form action="add_food.php" method="post" name="form1">
					<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Shop name: </strong>
							</div>
						</div>
					     
						<div class="row half">
							<div style="margin-left:0px;margin-top:0px;width:250px;">
								<input class="text" type="text" name="sname" id="name" placeholder="Name" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>ShopNo: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="flo_no" id="ShopNo" placeholder="ShopNo" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>OwnerName: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="shop_no" id="OwnerName" placeholder="OwnerName" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Contact No: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="owner" id="Contact No" placeholder="Contact No" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>FloorNo: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="contact" id="date" placeholder="FloorNo" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input type="submit" name="Submit" value="Add">
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




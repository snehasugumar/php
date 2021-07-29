<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>KIDSCORNER</title>
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
				<?php
		 $response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

		 
		 if(isset($_POST['searchbtn']))
		 {
			 $searchProduct=$_POST["searchtxt"];
			 $test="name like '%$searchProduct%'";
		 } else {
			$test = ""; 
		 }
		 
		 $result=mysql_query("SELECT * FROM products where $test");
		  //$mdValue = 3;
		  
		 
	     
		
         while($row = mysql_fetch_array($result))
          {	
		    $product = array();
		   $product['name'] =$row['name'];
           $product['price']=$row['price'];
		    $product['description']=$row['description'];
			  $product['star']=$row['star'];
		   
		  }
		 ?>

				<!-- Page -->
					<div id="page" class="container">
						<div class="row">
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
										<h2>REVIEWS</h2>
									</header>
									<div class="row half">
										<section class="6u">
											<ul style="margin-top:50px;">
												<li><img src="images/pic12.jpg" height="500"alt=""></li>
												
											</ul>
										</section>
										
									</div>
								</section>
								
							</div>
							
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>Reviews for the shop you searched</h2>
										<form method="post" action="#">
					<div class="row half">
							
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:30px;font-size:20px;">
								  <strong>ShopName: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="ShopNo" id="ShopNo" placeholder="ShopNo" value="<?php echo  $product['name'];?>"/>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>CustomerName: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="OwnerName" id="OwnerName" placeholder="OwnerName" value="<?php echo  $product['price'];?>" />
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Feedback: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="Contact No" id="Contact No" placeholder="Contact No" value="<?php echo $product["description"];?>"/>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>NoOfStars: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="date" id="date" placeholder="FloorNo" value= "<?php echo $product["star"];?>" />
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

<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	$pid = $_POST['pid'];
	
	$of_for = $_POST['of_for'];
	$dis_on = $_POST['dis_on'];
	
	$dis_per = $_POST['dis_per'];
	$of_from = $_POST['of_from'];
	$of_upto = $_POST['of_upto'];
	
	
	// checking empty fields
	
		//updating the table
mysql_query("UPDATE products4 SET price='$of_for',description='$dis_on',medicine='$dis_per',offerfrom='$of_from',offerupto='$of_upto' WHERE pid=$pid");
		
		//redirectig to the display page. In our case, it is index.php
header("Location: view_medicine.php");
	}
?>
<?php
include_once("config.php");
//getting id from url
$pid = $_GET['pid'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM products4 WHERE pid=$pid");


while($res = mysql_fetch_array($result))
{
	$sname = $res['name'];
	$of_for = $res['price'];
	$dis_on = $res['description'];
	$cre_at = $res['created_at'];
	$up_at = $res['updated_at'];
	$dis_per = $res['medicine'];
	$of_from = $res['offerfrom'];
	$of_upto = $res['offerupto'];
	$flo_no = $res['floorno'];
	$shop_no = $res['shopno'];
	$owner = $res['owner'];
	$contact = $res['contact'];
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
		<title>ACCESORIESOFFER</title>
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
							<h1><a href="index.html"> </a></h1>
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
						
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>ACCESORIES OFFER</h2>
										<form name="form1" method="post" action="edit_medicine.php">
					<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>OfferFor: </strong>
							</div>
						</div>
					     
						<div class="row half">
							<div style="margin-left:0px;margin-top:0px;width:250px;">
								<input class="text" type="text"  name="of_for" value=<?php echo $of_for;?>>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>DiscountOn: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="dis_on" value=<?php echo $dis_on;?>>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>Discount%: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="dis_per"   value=<?php echo $dis_per;?>>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>OfferFrom: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="of_from"   value=<?php echo $of_from;?>>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;margin-top:10px;font-size:20px;">
								  <strong>OfferUpto: </strong>
							</div>
						</div>
						<div class="row half">
							<div style="margin-left:0px;width:250px;">
								<input class="text" type="text" name="of_upto" value=<?php echo $of_upto;?>>
							</div>
						</div>
						
						
						<div class="row half">
							<div style="margin-left:40px;width:250px;">
								<input type="hidden" name="pid" value=<?php echo $_GET['pid'];?>>
								<input type="submit" name="update" value="Update">
							</div>
						</div>
						
					</form>
										
										
									</header>
									
								</section>
							</div>
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
										<h2>ACCESORIES OFFER</h2>
									</header>
									<div class="row half">
										<section class="6u">
											<ul style="margin-top:90px;">
												<li><img src="images/pc.jpg" alt=""></li>
											</ul>
										</section>
										
									</div>
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

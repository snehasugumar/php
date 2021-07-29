<?php
//including the database connection file
$response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM products7 ORDER BY pid DESC");
?>


<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>KidsOffers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			<style>
			table {
  border-collapse: collapse;
  border:2px solid #319AD4;
  font-weight: bold;

}
table td, table th {
  border: 1px solid #319AD4;
  
font-size:15px;

 text-align:center; 
    vertical-align:middle;
width:200px;
border-left: 2px solid #319AD4;
border-right: 2px solid #319AD4;
}
            </style>
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
								<li><a href="add_kids.php">Add New Shop Details</a></li>
								<li><a href="search_review.php">Viewreviews</a></li>
								<li><a href="index.php">Logout</a></li>
								
							</ul>
						</nav>
					</div>
					

				<!-- Banner -->
					<div id="banner" class="container">
						<section style="background-color:#D84780;height:80px;">
	
						 <h1 style="font-size:50px;"></h1><br><br>
						 <h1 style="font-size:50px;margin-Bottom:10px">SHOPPING MALL</h1>
						  <div id="sidebar" >
								
								
							</div>
							
					     
						</section>
					</div>

				<!-- Extra -->
					

				<!-- Main -->
					
	<!-- Footer -->
		
			<div class="container">
			
			<div style="width:800px;height:500px;background-color:#f2c0d3;margin-left:100px;">
				<section>
				<div class="row half">
							<div style="margin-left:60px;width:250px;margin-top:10px;font-size:20px;">
								 <h1 style="font-size:30px;margin-left:50px;margin-Bottom:50px;margin-top:30px;">AddingLocationForKids</h1>
							</div>
						</div>
					     
					<span class="byline"></span>
					
					<form method="post" action="#">

					<table >

                         <tr>
						 
                      <td >shopname: </td>
                      <td >Shopno:</td>
                     <td >owner: </td>
					  <td >Add or Remove: </td>
					
					 </div>
                          </tr>
						<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['shopname']."</td>";
		echo "<td>".$res['floorno']."</td>";	
		echo "<td>".$res['shopno']."</td>";
		
		
		
	
		echo "<td><a href=\"edit_kids.php?pid=$res[pid]\">Add Offers</a> | <a href=\"delete_kids.php?pid=$res[pid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Remove</a></td>";		
	}
	?>
 
						</table>
					</form>
				</section>
			</div>
		</div>
		

	<!-- Copyright -->
		
<div style="background-color:#D84780;
    height:80px;width:960px;margin-top:10px;margin-left:150px">
			
				
					
				
			
		</div>
	</body>
</html>


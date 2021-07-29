<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>customercare</title>
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" href="styles.css" />
<link rel="stylesheet" href="styles1.css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="main-texture">
  <div class="tail"> 
    <!--==============================header=================================-->
        <header>
            <div class="header">
                <div class="main">
                    <h1><a href="#" class="logo">Customer Care</a></h1>                   
                </div>
            </div>
        </header>
        <div class="bg">
            <div class="nav">
                <nav>
                    <div class="menu_1">
                        <div class="menu">
                            <ul class="my_menu">
                                <li class="current"><a href="index.html">About us</a></li>
                                <li><a href="create_product.php">product</a></li>
                                <li><a href="get_all_products4.php">get_product4</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </nav>
            </div></div>
			
	  <!--==============================Slider=================================-->
	<?php

/*
 * Following code will list all the products
 */



// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

?>
              
			   <form method="POST" action="searchp.php">
<div class="spname"><label>Product Name</label><br>
<input name="searchtxt" type="text" id="search"><br></div>
<div class="spbutton"><input type="submit" value="search" id="button" name="searchbtn"></div>
		</form>
<!--==============================footer=================================-->
<footer> Company Name Here &copy; 2013 <br />
<!-- Do not remove -->Design by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Free Website Templates</a><!-- end -->
</footer>
</body>
</html>
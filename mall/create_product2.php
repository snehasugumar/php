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
                                <li><a href="create_product1.php">Schedule</a></li>
                                <li><a href="get_all_products.php">get pro</a></li>
                                <li><a href="search.php">Search</a></li>
                                <li><a href="create_product.php">Complaints</a></li>
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
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // include db connect class
    require_once 'db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO products2(name, price, description) VALUES('$name', '$price', '$description')");

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


	
	
	  
	  </div>
      <!--==============================content================================-->
     <section id="content">
              
	 <div class="admin1">
<form action="" method="post" class="logm">
 <div id="divHeader" class="divHeaderTable">
        <h4>Helpline</h4>
    </div>
  
 <div id="content" class="divTable">
       <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="name">Designation</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="name" />
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="price" >Mobile Number</label>
            </div>
            <div>
                <input type="text" name="price" id="Text1" />
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="description">E-mail ID</label>
            </div>
            <div>
                <input type="text" id="Text2" name="description" />
            </div>
        </div>
        </div>
            <br />
      <div class="divRow">
	  <div class="divcolumn">
         <input type="submit" value="Submit" />
        </div>
      </div>
    </div>
	</div>
 </div>   
</form>
			   
</div>
   <div class="android1">
 </div>
  
 </section>
    </div>
  </div>

<!--==============================footer=================================-->
<footer>

</footer>
</body>
</html>
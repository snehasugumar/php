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
<body><div class="main-texture">
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
    <div class="nav"> <nav> 
      <div class="menu_1"> 
        <div class="menu"> 
          <ul class="my_menu">
            <li class="current"><a href="index.html">About us</a></li>
            <li><a href="create_product1.php">Schedule</a></li>
            <li><a href="get_all_products.php">get pro</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="create_product2.php">Helpline</a></li>
            <li><a href="">Contacts</a></li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      </nav> </div>
  </div>
  <!--==============================Slider=================================-->
  <?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])&& isset($_POST['star'])) {
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
	 $star = $_POST['star'];

    // include db connect class
    require_once 'db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO products(name, price, description,star) VALUES('$name', '$price', '$description','$star')");

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
<section id="content" class="content2"> <div class="admin1"> 
<form action="" method="post" class="logm">
  <div id="divHeader" class="divHeaderTable"> 
    <h4>Customer Complaints</h4>
  </div>
  <div class="divTable"> 
    <div class="divRow"> 
      <div class="divColumn"> 
        <div> 
          <label class="lab" for="name">patient Name</label>
        </div>
        <div> 
          <input type="text" id="txtname" name="name" />
        </div>
      </div>
    </div>
    <div class="divRow"> 
      <div class="divColumn"> 
        <div> 
          <label class="lab" for="price" >nurse name</label>
        </div>
        <div> 
          <input type="text" name="price" id="Text1" />
        </div>
      </div>
    </div>
    <div class="divRow"> 
      <div class="divColumn"> 
        <div> 
          <label class="lab" for="description">patient details</label>
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
  </div></div>
  </div> 
</form></div>
<div class="android1"> </div></div>
</section> </div> </div> 
<!--==============================footer=================================-->
<footer> Company Name Here &copy; 2013 <br />
</footer> 
</body>
</html>